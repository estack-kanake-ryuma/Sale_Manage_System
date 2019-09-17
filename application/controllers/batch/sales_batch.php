<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sales batch Controller
 *
 * 受注システムからの売上データを取り込むのコントローラー
 *
 * @author		Yoko Koiwai
 * @link		http://www.datalyze.co.jp
 * @property Sales_batch_mdl $sales_batch_mdl
 * @property Sales_mdl $sales_mdl
 */
class Sales_batch extends MY_Controller {

	/**
	 * @var array 取り込みデータエラー内容格納用
	 */
		private $error_detail;

	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Yoko Koiwai
	 * @link	http://www.datalyze.co.jp
	 */
		public function __construct()
		{
            parent::__construct();
            // cli処理か判定 ブラウザからのアクセスは404エラー
             if ( ! $this->input->is_cli_request() )     {
                show_404();
            }
            $this->load->model('batch/sales_batch_mdl');
			$this->load->model('bill/sales_mdl');
            $this->load->helper('file');
            $this->load->library('ftp');
		}

	/*
	 * ---------------------------------------------------------------------------
	 * イベント
	 * ---------------------------------------------------------------------------
	 */

    /**
	 * バッチ メイン処理
     * [1]ファイル展開
	 * [2]データチェック
     * [3]DB登録用データ作成
     *     項目数不備or必須項目がない場合スキップ
     *     マスタがない場合は売上データのみ作成
     * [4]DB登録
     * [5]外部システム処理結果待ちファイル更新(FTP通信)
     *
	 * @access public
	 * @return void
	 * @author koiwai
	 */
		public function index()
		{
			//------------------------------------------------------------------------
	        // 過去分取込ファイル実行チェック(取込が行われていない場合はアラート用レコードを挿入する)
			// 　※この処理はコミット時でのDBエラーの場合、システム内で検知ができないため導入
			//------------------------------------------------------------------------
	        $past_file = $this->_get_past_files();
	        $this->sales_batch_mdl->chk_processed($past_file);

			//------------------------------------------------------------------------
			//
			// 受注システムからの売上データの取込処理
			//
			//------------------------------------------------------------------------
			// ↓ ここから

			// 取り込みファイル読み込み
	        $file = read_file(FTP_TEMP_PATH.SALES_FILE_NAME);
	        if ($file === FALSE) {
	            //　ファイル読み込み失敗
	            // 何もしないで終了
	            log_message('info', E_CANNOT_READ_FILE);
	            return FALSE;
	        }

			// 文字コードのコンバート処理(UTF-8に統一)
	        $string_data = mb_convert_encoding($file, mb_internal_encoding(), mb_detect_encoding($file, 'UTF-8, EUC-JP, JIS, eucjp-win, sjis-win'));

	       // 1行ごとに分解
	        $line = explode("\r\n", $string_data);

	        // header・footer行取得
	        $hf = $this->_get_header_footer($line);
	        if (count($line) < 3 || $hf['header'] == '' || $hf['footer'] == '') {

		        // 3行以上でない場合はデータ不整合(ヘッダー、データ、フッターの構成ではない)のためエラーとする
	            // ファイル形式不備のため終了
	            $this->_process_end_error(E_FORMAT_ERROR);

		        if($hf['header'] == '') {
			        $datetime = date('Ymdhi');
		        } else {
			        $datetime = $hf['header'];
		        }

	            return FALSE;
	        }

			//--------------------------------------------------------------------
	        // DBトランザクションスタート
			//--------------------------------------------------------------------
	        $this->db->trans_start();

	        // バッチ処理mngテーブル　レコード作成
			$import_mng_data = $this->sales_batch_mdl->create_import_mng_data($hf['header']);
	        $import_mng_id = $this->sales_batch_mdl->insert_import_mng($import_mng_data);

			// 処理年月日の開始と終了を取得する
			$proc_date = $this->sales_batch_mdl->get_proc_date();

			//*********************************************************************
			// データレコードを読み取って売上データを作成する
			$import_count = 0;
	        for ($i = 1; $i < count($line) - 1; $i++) {

	            $this->error_detail = array(); // エラー文言格納用変数初期化
	            $sales_mng_id = NULL;

	            //　バッチ処理詳細テーブルにレコード作成　デフォルト：スキップステータス
	            $detail_id = $this->sales_batch_mdl->insert_import_detail($import_mng_id, $line[$i]);

	            // 取り込み項目に分けた連想配列セット
	            $data_arr = $this->sales_batch_mdl->convert_import_data($line[$i]);
	            if ($data_arr === FALSE) {
	                $this->error_detail[] = E_COLMN_NUM;
	                $this->sales_batch_mdl->update_import_detail($detail_id, array('result'=>IMPORT_ERROR,
		                                                                              'error_messages'=>$this->error_detail));
	                continue;
	            }

	            // 日付書式変換(YYYYMMDD→YYYY/MM/DD)
	            $data_arr['bill_date'] = convert_sep_date($data_arr['bill_date']);
	            $data_arr['book_date'] = convert_sep_date($data_arr['book_date']);

	            // データの入力チェック
	            if ($this->_sales_batch_validation($data_arr) === FALSE) {
	                $this->sales_batch_mdl->update_import_detail($detail_id, array('result'=>IMPORT_ERROR,
		                                                                              'error_messages'=>$this->error_detail));
	                continue;
	            }

		        // 処理年月より古い日付ではないかチェックを行う
		        if($proc_date > str_replace('/', '', $data_arr['book_date'])) {
			        $this->error_detail[] = E_PROC_MONTH;
			        $this->sales_batch_mdl->update_import_detail($detail_id, array('result'=>IMPORT_ERROR,
			                                                                       'error_messages'=>$this->error_detail));
			        continue;
		        }

	            //　報告書No整形
	            $report_no = $this->sales_batch_mdl->explode_report_no($data_arr['report_no'],$data_arr['conduct_pattern']);
	            if (isset($report_no[1])) {
	                $data_arr['report_no'] = $report_no[0];
		            $data_arr['report_eda_from'] = $report_no[1];
	            } else {
	                $data_arr['report_no'] = $report_no[0];
	            }
	            // 入金種別・得意先区分変換
	            $data_arr['credit_type']   = $this->sales_batch_mdl->conv_credit_type($data_arr['credit_type']);
	            $data_arr['customer_type'] = $this->sales_batch_mdl->conv_customer_type($data_arr['customer_type']);

		        // 消費税の入力がない場合はNULLに変換
		        if(strlen($data_arr['sum_tax']) == 0) {
			        $data_arr['sum_tax'] = NULL;
		        }

		        // 税区分が非課税で消費税が入力されていた場合は税区分をクリアする
		        if($data_arr['tax_type'] == '01' && strlen($data_arr['sum_tax']) > 0) {
			        $data_arr['tax_type'] = NULL;
			        $this->error_detail[] = W_NO_TAX_INPUT;
		        }

	            // 報告書Noより売上データを取得する
	            $result = $this->sales_batch_mdl->check_report_no($data_arr['report_no']);

		        // 報告書Noがある場合は売上情報を更新、それ以外はすべて新規登録とする
	            if (count($result) > 0) {

	                $sales_mng_id = $result[0]->sales_mng_id;

		            // 更新対象の売上が「入金済」「締め処理済」なら更新しない
		            if($result[0]->data_status_type == DATA_TYPE_CREDIT
		            || $result[0]->data_status_type == DATA_TYPE_CLOSE) {
			            $this->error_detail[] = E_DATA_STATUS;
			            $this->sales_batch_mdl->update_import_detail($detail_id, array('result'=>IMPORT_ERROR,
			                                                                           'error_messages'=>$this->error_detail));
			            continue;
		            }

	                // データ整合性チェック
	                $this->_chk_mng_data($data_arr, $result[0]);

		            // 既存データの内容をマージ
		            $data_arr = $this->_merge_data($data_arr, $result[0]);

		            // 売上データの更新処理
		            $message = $this->sales_batch_mdl->update_sales($sales_mng_id, $data_arr, $result[0]);
		            if(!empty($message)) {
			            $this->error_detail[] = $message;
		            }

	            } else {

		            // 得意先マスタ確認
		            $customer = $this->sales_batch_mdl->get_customer_data($data_arr['customer_name']);
		            if (!is_null($customer)) {

			            // 得意先ID
			            $data_arr['customer_id'] = $customer->customer_id;

			            // 締日のFromとToを取得
			            $cutoff_from = get_cutoff_date($data_arr['book_date'],$customer->cutoff_date,'b');
			            $cutoff_to = get_cutoff_date($data_arr['book_date'],$customer->cutoff_date,'a');

			            // 締日
			            $data_arr['cutoff_date'] = $customer->cutoff_date;

			            // 請求日の指定がなく、締日が存在しない得意先の場合は売上計上日を請求日とする
			            if(empty($customer->cutoff_date) && empty($data_arr['bill_date'])) {
				            $data_arr['bill_date'] = $data_arr['book_date'];
			            } else if(!empty($customer->cutoff_date)) {
				            $data_arr['bill_date'] = $cutoff_to;
			            }

			            $data_arr['cutoff_date_from'] = $cutoff_from;
			            $data_arr['cutoff_date_to'] = $cutoff_to;

			            // 入金済みではないかデータを取得する
			            $res = $this->sales_mdl->get_bill_cutoff_data($data_arr['customer_name'], $data_arr['bill_date'], $data_arr['credit_type']);
			            if(count($res) > 0) {
				            if ( ! empty( $res[0]->credit_mng_id ) ) {
					            $this->error_detail[] = E_CREDIT_INPUT;
					            $this->sales_batch_mdl->update_import_detail($detail_id, array('result'=>IMPORT_ERROR,
					                                                                              'error_messages'=>$this->error_detail));
					            continue;
				            }
			            }

			            // 入金種別の整合性確認(異なる場合はマスタ値を正とする
			            // ただし入金種別は基本送信されてこないため、入力値がない場合は
			            // エラーなしでマスタの値に保管する
			            if(strlen($data_arr['credit_type']) == 0) {
				            $data_arr['credit_type'] = $customer->credit_type;
			            } else if($customer->credit_type != $data_arr['credit_type']) {
				            $this->error_detail[] = W_CREDIT_TYPE_MST;
				            $data_arr['credit_type'] = $customer->credit_type;
			            }

			            // 得意先区分の整合性確認(異なる場合はマスタ値を正とする
			            // ただし得意先区分は基本送信されてこないため、入力値がない場合は
			            // エラーなしでマスタの値に保管する
			            if(strlen($data_arr['customer_type']) == 0) {
				            $data_arr['customer_type'] = $customer->customer_type;
			            } else if($customer->customer_type != $data_arr['customer_type']) {
				            $this->error_detail[] = W_CUSTOMER_TYPE_MST;
				            $data_arr['customer_type'] = $customer->customer_type;
			            }

		            } else {
			            $this->error_detail[] = W_CUSTOMER_NAME;

			            if(empty($data_arr['bill_date'] )) {
				            $data_arr['bill_date']  = NULL;
			            }
		            }

		            // 試験担当者が入力されていた場合はマスタのチェックを行う
		            if(!empty($data_arr['handler_name'])) {
			            // 試験担当者がマスタに存在したらid取得
			            $handler_data = $this->sales_batch_mdl->get_handler_data( $data_arr['handler_name'] );
			            // 研究担当者が存在しない　or　同姓同名で複数HITした場合は登録しない
			            if ( !is_null( $handler_data ) ) {
				            $data_arr['handler_id'] = $handler_data->handler_id;
			            } else {
				            $this->error_detail[] = W_HANDLER_ID;
				            $data_arr['handler_id'] = NULL;
				            $data_arr['handler_name'] = NULL;
			            }
		            }

		            //　研究所のマスタ確認
		            if(strlen($data_arr['institute_id']) == 0) {
			            // 指定されていない場合は担当者情報が取得出来ていた場合は担当者の研究所を補完
			            if(!is_null($handler_data) && !empty($handler_data->institute_id)) {
							$data_arr['institute_id'] = $handler_data->institute_id;
				            $data_arr['institute_name'] = $this->sales_batch_mdl->get_name_from_id($handler_data->institute_id, M_INSTITUTE, 'institute_name', 'institute_id');
			            } else {
				            $data_arr['institute_id'] = NULL;
			            }
		            } else {
			            // 指定されている場合はマスタから名称を取得
			            $data_arr['institute_name'] = $this->sales_batch_mdl->get_name_from_id($data_arr['institute_id'], M_INSTITUTE, 'institute_name', 'institute_id');
			            if (!$data_arr['institute_name']) {
				            $data_arr['institute_id'] = NULL;
				            $this->error_detail[] = W_INSTITUTE_ID;
			            }
		            }

		            // 部門のマスタ確認
		            if (strlen($data_arr['depart_id']) == 0) {
			            // 指定されていない場合は担当者情報が取得出来ていた場合は担当者の研究所を補完
			            if(!is_null($handler_data)&& !empty($handler_data->depart_id)) {
				            $data_arr['depart_id'] = $handler_data->depart_id;
				            $data_arr['depart_name'] = $this->sales_batch_mdl->get_name_from_id($handler_data->depart_id, M_DEPART, 'depart_name', 'depart_id');
			            } else {
				            $data_arr['depart_id'] = NULL;
			            }
		            } else {
						// 指定されている場合はマスタから名称を取得
			            $data_arr['depart_name'] = $this->sales_batch_mdl->get_name_from_id($data_arr['depart_id'], M_DEPART, 'depart_name', 'depart_id');
			            if(!$data_arr['depart_name']) {
				            $data_arr['depart_id'] = NULL;
				            $this->error_detail[]  = W_DEPART_ID;
			            }
		            }

		            // 摘要のマスタ確認
					if(strlen($data_arr['abstract_id']) == 0) {
						$data_arr['abstract_id'] = NULL;
					} else {
						// 摘要が指定されていた場合はマスタより名称を取得する
						$data_arr['abstract_name'] = $this->sales_batch_mdl->get_name_from_id($data_arr['abstract_id'], M_ABSTRACT, 'abstract_name', 'abstract_id');
						if (!$data_arr['abstract_name']) {
							$data_arr['abstract_id'] = null;
							$this->error_detail[]    = W_ABSTRACT_ID;
						}
					}

		            // 売上データを登録する
					$res = $this->sales_batch_mdl->regist_sales($data_arr);
					if ($res['status'] !== TRUE) {
					    $this->error_detail[] = $res['error'];
					}

				    $sales_mng_id = $res['sales_mng_id'];
	            }

		        // データ整合チェックでエラーが有った場合は警告として登録する
	            if (count($this->error_detail) > 0) {
	                $result_status = IMPORT_WARNING;
	            } else {
	                $result_status = IMPORT_OK;
	            }

	            // 処理結果フラグ成功
	            $this->sales_batch_mdl->update_import_detail($detail_id, array('sales_mng_id'=>$sales_mng_id,
		                                                                          'result'=>$result_status,
		                                                                          'error_messages'=>$this->error_detail,
	                                                                              'sales_import_id'=>$data_arr['sales_import_id']));

		        $import_count++;
	        }

			// 1件でも登録できた場合は管理側はOKとする。
			// すべて登録できなかった場合はエラーとする
			if($import_count > 0) {
				$this->sales_batch_mdl->update_import_mng($import_mng_id, array('result'=>IMPORT_OK));
			} else {
				$this->sales_batch_mdl->update_import_mng($import_mng_id, array('result'=>IMPORT_ERROR,
				                                                                   'error_messages'=>E_ALL_DATA_ERROR));
			}

			// 処理結果待ちファイルの更新処理
	        $this->_ftp_set_end_status();

			//--------------------------------------------------------------------
			// DBトランザクション完了
			//--------------------------------------------------------------------
	        $db_res = $this->db->trans_complete();

			// 処理が完了したら取り込みファイルリネーム
			rename(FTP_TEMP_PATH.SALES_FILE_NAME, FTP_TEMP_PATH.$hf['header'].'_'.SALES_FILE_NAME);
		}
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */

    /**
     * validation(入力チェック)
     *
     * @param array $data   登録情報
     * @return boolean      登録不可のエラーの場合はFALSE。
     */
	    private function _sales_batch_validation ($data)
	    {
	        $_POST = $data; // 既存validationを使用するため$_POSTへ値セット
		    $critical = 0;
		    $this->form_validation->_error_array = array();
		    $this->form_validation->_field_data  = array();

		    // 共通の入力チェック処理
	        if(!$this->form_validation->run('sales_batch_import')) {
		        $critical = FLG_ON;

		        foreach ($this->form_validation->_field_data as $field => $values) {
			        // エラー文言回収
			        if(array_key_exists('error', $values) && $values['error'] != '') {
				        $this->error_detail[] = $values['error'];
			        }
		        }
	        }

		    // 報告書Noのチェック処理
		    if(!$this->form_validation->report_no($data['report_no'])) {
			    $critical = FLG_ON;
			    $this->error_detail[] = W_REPORT_NO_FORMAT;
		    }

	        if ($critical == FLG_ON) {
	            return FALSE;
	        }
	        return TRUE;
	    }
        
   
    /**
     * データ整合性チェック
     * 既存のsales_mngと取り込んだ情報が一致するか判定。
     *
     * @param array $new     取り込みデータ
     * @param array $existed 既存データ
     * @return void          不一致データがあればクラス変数$error_detailにセット
     */
		private function _chk_mng_data($new, $existed)
		{
		    if ($new['customer_name'] != $existed->customer_name){
		        $this->error_detail[] = W_CUSTOMER_NAME;
		    }
		    if (!empty($new['credit_type']) && $new['credit_type'] != $existed->credit_type){
		        $this->error_detail[] = W_CREDIT_TYPE;
		    }
		    if (!empty($new['credit_type']) && $new['customer_type'] != $existed->customer_type){
		        $this->error_detail[] = W_CUSTOMER_TYPE;
		    }

		    if (preg_replace('/\//', '-', $new['book_date']) != $existed->book_date){
		        $this->error_detail[] = W_BOOK_DATE;
		    }

		}
        
    /**
     * ヘッダーに記載された日時取得
     *
     * @param array $line
     * @return string $header_date
     */
        private function _get_header_footer($line) 
        {
            $hf = array('header' => '', 'footer'=>'');
            if (preg_match('/^\d{12}$/',$line[0])) {
                $hf['header'] = $line[0];
            }
            
            $cnt = count($line) - 1;
            if (preg_match("/^[0-9]+$/", $line[$cnt])){
                $hf['footer'] = $line[$cnt];
            }
            
            return $hf;
        }

    /**
     * 実行済ファイル名取得
     *
     * @access private
     * @return array
     */
        private function _get_past_files()
        {
			$file_ary = array();
	        $chk_pattern = '^[0-9]{12}_'.SALES_FILE_NAME.'$';

	        // FTPのテンポラリディレクトリの読み込み
            $handle = opendir(FTP_TEMP_PATH);

            if ($handle) {
                while (false !== ($file = readdir($handle))) {
	                // 処理完了した売上データファイルのみを配列に取込
                    if (preg_match('/'.$chk_pattern.'/', $file)) {
	                    $file_ary[] = $file;
                    }
                }
                closedir($handle);
            }

            return $file_ary;
        }
        
	/**
	 * エラー時の処理
	 *
	 * @access private
	 * @param string $message
	 * @return void
	 */
		private function _process_end_error($message)
		{
			$header = date("YmdHi");

			// トランザクション開始
		    $this->db->trans_start();

			// 登録データ
			$insert_data['header_info'] = $header;
			$insert_data['result'] = IMPORT_ERROR;
			$insert_data['error_messages'] = $message;

			// エラー情報の管理テーブルデータを登録
		    $this->sales_batch_mdl->insert_import_mng($insert_data);

			// トランザクションの完了
		    $this->db->trans_complete();

		    // 物理ファイルリネーム
		    rename(FTP_TEMP_PATH.SALES_FILE_NAME, FTP_TEMP_PATH.$header.'_'.SALES_FILE_NAME);

		    // 処理結果待ちファイル更新
		    $this->_ftp_set_end_status();

		    log_message('info', $message);
		}
        
    /**
     * 処理結果待ちファイル更新
     *
     * @access private
     * @return boolean
     */
        private function _ftp_set_end_status()
        {
	        // FTPの接続情報
            $ftp_config['hostname'] = ORDER_SYS_HOST;
            $ftp_config['username'] = ORDER_SYS_USER;
            $ftp_config['password'] = ORDER_SYS_PWD;
            $ftp_config['debug']    = FALSE;
            $ftp_config['passive']  = FALSE;

            // FTPの接続
            $this->ftp->connect($ftp_config);

	        // 処理結果待ちファイルを0で作成し受注システムにアップロードする
            $ftp_result = $this->ftp->write_file(ORDER_SYS_FILE_DIR.EXEC_RESULT_FILE_NAME, EXEC_RESULT_STAT, 'wb');

            return $ftp_result;
        }

	/**
	 * 読み込んだデータと既存の売上データをマージする
	 *
	 * @access private
	 * @param array $read_data
	 * @param array $sales_data
	 * @return array
	 */
		private function _merge_data($read_data, $sales_data) {

			// 得意先IDのマージ
			$read_data['customer_id'] = $sales_data->customer_id;

			// 得意先名のマージ
			$read_data['customer_name'] = $sales_data->customer_name;

			// 入金種別のマージ
			$read_data['credit_type'] = $sales_data->credit_type;

			// 得意先区分のマージ
			$read_data['customer_type'] = $sales_data->customer_type;

			// 請求日のマージ
			$read_data['bill_date'] = $sales_data->bill_date;

			// 売上計上日のマージ
			$read_data['book_date'] = $sales_data->book_date;

			// 担当者IDのマージ
			$read_data['handler_id'] = $sales_data->handler_id;

			// 担当者名のマージ
			$read_data['handler_name'] = $sales_data->handler_name;

			// 研究所IDのマージ
			$read_data['institute_id'] = $sales_data->institute_id;

			// 研究所名のマージ
			$read_data['institute_name'] = $sales_data->institute_name;

			// 部門IDのマージ
			$read_data['depart_id'] = $sales_data->depart_id;

			// 部門名のマージ
			$read_data['depart_name'] = $sales_data->depart_name;

			// 摘要IDのマージ
			$read_data['abstract_id'] = $sales_data->abstract_id;

			// 摘要名のマージ
			$read_data['abstract_name'] = $sales_data->abstract_name;

			return $read_data;
		}
}

/* End of file sales_batch.php */
/* Location: ./application/controllers/batch/sales_batch.php */