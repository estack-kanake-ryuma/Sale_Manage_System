<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Collect_send_batch Model
 * 請求回収データ送信バッチのモデルクラス
 *
 * 請求回収データ送信バッチ処理に関するDB処理などの司る
 * @property My_ftp $ftp
 */
class Collect_send_batch_mdl extends MY_Model {

	/**
	 * @var string エラー情報の格納
	 */
		private $_error;

	/**
	 * @var array 送信した売上管理IDが格納されている配列
	 */
		private $_send_sales_mng_id_ary;

	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage	model/db
	 * @author		Kanake Ryuma
	 * @link		http://www.datalyze.co.jp
	 */
		public function __construct()
		{
			parent::__construct();

			// ライブラリの読み込み
			$this->load->library('ftp');
			// ヘルパーの読み込み
			$this->load->helper('file');
		}

	/**
	 * 請求回収データを送信する処理
	 *
	 * @access public
	 * @return void
	 * @author Kanake Ryuma
	 */
		public function send_collect_data() {

			//**************************************************
			// トランザクションの開始
			$this->db->trans_start();

			// 請求回収データの対象データを取得
			$send_data = $this->_get_collaborate_send_data();

			// 受注システムへの送信対象データが存在する場合は送信テーブルへのデータ登録を行う
			if ( count( $send_data ) > 0 ) {

				// 送信する請求回収データを作成する
				$send_text = $this->create_collect_send_data( $send_data );

				// 受注システムに請求回収データを送信する
				$result = $this->send_data_to_accept_system( $send_text );
				if ( $result === FALSE ) {
					// データ送信に失敗した場合はロールバックする
					$this->db->trans_rollback();
					return;
				}

				// 送信テーブルに登録
				$this->_regist_collaborate_send_data( $send_data );

				// 送信した売上データを送信済みステータスに変更
				$this->_update_collaborate_status();

			}

			//**************************************************
			// トランザクションのコミット
			$this->db->trans_complete();
}

	/**
	 * 送信するための請求回収データを作成する
	 *
	 *
	 * @access public
	 * @param  array $collect_data
	 * @return string タブ区切りの文字列
	 * @author Kanake Ryuma
	 */
		private function create_collect_send_data($collect_data)
		{
			$create_data_ary = array();

			//------------------------------------------------------
			// ヘッダーレコードの情報
			//------------------------------------------------------
			$process_datetime = date('YmdHi');
			$create_data_ary[] = $process_datetime;


			//------------------------------------------------------
			// データレコードの情報
			//------------------------------------------------------
			$i = 1;
			foreach($collect_data as $data)
			{
				$ary = array();

				//***********************************************
				// 管理IDの格納
				$ary[] = $data->sales_import_id;

				//***********************************************
				// 報告書Noの格納
				$ary[] = str_replace('-', '', $data->report_no);

				//***********************************************
				// 売上計上日の格納
				$ary[] = str_replace('-', '', $data->book_date);

				//***********************************************
				// 請求日の格納
				$ary[] = str_replace('-', '', $data->bill_date);

				//***********************************************
				// 請求書番号の格納
				$ary[] = $data->bill_no;

				//***********************************************
				// 入金日の格納
				$ary[] = $data->reconcile_date;

				//***********************************************
				// 取り込み結果(固定で1)
				$ary[] = '1';

				// 送信用データとしてタブ区切りに変換
				$create_data_ary[] = implode("\t", $ary);

				// 売上管理IDを格納
				$this->_send_sales_mng_id_ary[] = $data->sales_mng_id;

				$i++;
			}


			//------------------------------------------------------
			// フッターレコードの情報
			//------------------------------------------------------
			$create_data_ary[] = count($collect_data);


			return implode("\r\n", $create_data_ary);
		}

	/**
	 * 送信するための請求回収データを作成する
	 *
	 * @access public
	 * @param  string $send_text
	 * @return boolean
	 * @author Kanake Ryuma
	 */
		private function send_data_to_accept_system($send_text)
		{
			// FTP接続先のコンフィグ
			$config['hostname'] = ORDER_SYS_HOST;
			$config['username'] = ORDER_SYS_USER;
			$config['password'] = ORDER_SYS_PWD;
			$config['debug']    = FALSE;
			$config['passive']  = FALSE;

			//-------------------------------------------------------------------
			// FTPのコネクション
			//-------------------------------------------------------------------
			$this->ftp->connect($config);

			// 請求回収データファイルを作成する
			$result = write_file(FTP_TEMP_PATH.SEND_FILE_NAME, $send_text);
			if($result === FALSE)
			{
				// ファイル作成に失敗した場合は処理中断
				$error = '請求回収データのファイル作成に失敗しました';
				return FALSE;
			}

			// FTPで所定の場所にアップロードする
			$result = $this->ftp->upload(FTP_TEMP_PATH.SEND_FILE_NAME, ORDER_SYS_FILE_DIR.SEND_FILE_NAME, 'binary');
			if($result === FALSE)
			{
				// ファイル作成に失敗した場合は処理中断
				$error = '請求回収データのアップロードに失敗しました';
				return FALSE;
			}

			// アップロードファイルの削除
			unlink(FTP_TEMP_PATH.SEND_FILE_NAME);

			//-------------------------------------------------------------------
			// FTPの切断
			//-------------------------------------------------------------------
			$this->ftp->close();

			return TRUE;
		}

	/**
	 * 受注システムの送信対象データの送信対象データを取得する
	 *
	 * @access	private
	 * @return	array
	 * @author	Kanake Ryuma
	 */
		private function _get_collaborate_send_data()
		{
			// テーブル設定
			$this->m_tbl_name = T_SALES_MNG;

			// Prefix 設定
			$this->m_prefix = "sales";

			// カラム定義
			$this->db->select("sales.sales_mng_id");
			$this->db->select("sales.report_no");
			$this->db->select("sales.book_date");
			$this->db->select("sales.bill_date");
			$this->db->select("bill_mng.bill_no");
			$this->db->select("credit_data.reconcile_date");
			$this->db->select("import_data.sales_import_id");

			// JOIN定義
			$this->db->join(T_BILL_DATA." bill_data", "sales.sales_mng_id=bill_data.sales_mng_id");
			$this->db->join(T_BILL_MNG." bill_mng", "bill_mng.bill_mng_id = bill_data.bill_mng_id");
			$this->db->join(T_CREDIT_MNG." credit_mng", "bill_mng.bill_mng_id = credit_mng.bill_mng_id");
			$this->db->join("(SELECT credit_mng_id, MAX(reconcile_date) as reconcile_date FROM ".T_CREDIT_DATA." GROUP BY credit_mng_id) credit_data", "credit_data.credit_mng_id=credit_mng.credit_mng_id");
			$this->db->join("(SELECT sales_mng_id, sales_import_id FROM ".T_IMPORT_DETAIL." WHERE sales_mng_id IS NOT NULL AND sales_import_id IS NOT NULL GROUP BY sales_mng_id, sales_import_id) import_data", "import_data.sales_mng_id=sales.sales_mng_id");

			// WHERE句
			$this->db->where('sales.collaborate_status', COLLABORATE_STATUS_IMPORT);
			$this->db->where('credit_mng.reconcile_status', CREDIT_STATUS_ON);
			$this->db->where('data_status_type', DATA_TYPE_CLOSE);
			$this->db->where('date_add(sales.last_datetime, interval 5 day) < now()', NULL, FALSE);

			// ORDER句の設定
			$this->db->order_by("sales.sales_mng_id", "asc");

			return $this->select();
		}

	/**
	 * 受注システムの送信対象データの管理テーブルの登録処理
	 *
	 * @access	private
	 * @param  array $send_data
	 * @return	void
	 * @author	Kanake Ryuma
	 */
		private function _regist_collaborate_send_data($send_data)
		{
			//-------------------------------------------------------
			// 送信データ管理テーブル登録
			//-------------------------------------------------------
			$this->m_tbl_name = T_COLLABORATE_SEND_MNG;
			$mng = $this->_create_collaborate_send_mng_data();
			$this->insert($mng);

			// 登録したIDをメンバ変数に設定
			$collaborate_send_mng_id = $this->db->insert_id();


			//-------------------------------------------------------
			// 送信データテーブル登録
			//-------------------------------------------------------
			$this->m_tbl_name = T_COLLABORATE_SEND_DATA;
			foreach($send_data as $data)
			{
				$insert_data = $this->_create_collaborate_send_data($data);
				$insert_data['collaborate_send_mng_id'] = $collaborate_send_mng_id;
				$this->insert($insert_data);
			}
		}

	/**
	 * 受注システムの送信対象データの管理テーブルの登録用データを作成する
	 *
	 * @access	private
	 * @return	array
	 * @author	Kanake Ryuma
	 */
		private function _create_collaborate_send_mng_data()
		{
			$return_ary = array();

			// 開始日(start_date)
			$return_ary['process_date'] = date('Y-m-d');

			return $return_ary;
		}

	/**
	 * 受注システムの送信対象データのデータテーブルの登録データを作成する
	 *
	 * @access	private
	 * @param  array $send_data
	 * @return	array
	 * @author	Kanake Ryuma
	 */
		private function _create_collaborate_send_data($send_data)
		{
			$return_ary = array();

			// 売上取込ID
			$return_ary['sales_import_id'] = $send_data->sales_import_id;

			// 売上管理ID
			$return_ary['sales_mng_id'] = $send_data->sales_mng_id;

			// 報告書番号(親番号)
			$return_ary['report_no'] = $send_data->report_no;

			// 売上計上日
			$return_ary['book_date'] = $send_data->book_date;

			// 請求日
			$return_ary['bill_date'] = $send_data->bill_date;

			// 請求日
			$return_ary['bill_no'] = $send_data->bill_no;

			// 入金日
			$return_ary['reconcile_date'] = $send_data->reconcile_date;

			return $return_ary;
		}

	/**
	 * 連携処理を行った売上データを連携済に変更する
	 *
	 * @access	private
	 * @return	void
	 * @author	Kanake Ryuma
	 */
		private function _update_collaborate_status()
		{
			$this->m_tbl_name = T_SALES_MNG;
			$this->db->set('collaborate_status', COLLABORATE_STATUS_SEND);
			$this->db->set('last_datetime', 'now()');
			$this->db->where_in('sales_mng_id', $this->_send_sales_mng_id_ary);
			$this->db->where('collaborate_status',COLLABORATE_STATUS_IMPORT);
			$this->update();
		}
}

/* End of file collect_send_batch_mdl.php */
/* Location: ./application/model/batch/collect_send_batch_mdl.php */