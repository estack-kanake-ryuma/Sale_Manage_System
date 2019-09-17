<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sales batch Model
 *
 * 受注システムからの売上データを取り込む処理のモデル処理
 *
 * @link		http://www.datalyze.co.jp
 * @property Sales_mdl $sales_mdl
 * @property Receivable_mng_mdl $receivable_mng_mdl
 */
class Sales_batch_mdl extends MY_Model {

	/**
	 * @var array 得意先区分の変換用配列
	 */
    private $customer_type = array('0'=>CUSTOMER_TYPE_IPPAN
                                      ,'1'=>CUSTOMER_TYPE_DAIMRU);

	/**
	 * @var array 入金種別の変換用配列
	 */
    private $credit_type = array('00' => CREDIT_TYPE_SETOFF
                                   , '01' => CREDIT_TYPE_BEFORE
                                   , '99' => CREDIT_TYPE_OTHER);

	/**
	 * @var array 税区分の変換用配列
	 */
    private $tax_type = array('01' => TAX_TYPE_NO_TAX
                               , '99' => ''
                               , '00' => 6);

	/**
	 * @var array 受信データの項目名
	 */
    private $file_fields = array(
                            'sales_import_id'
                        ,   'customer_name'
                        ,   'credit_type'
                        ,   'customer_type'
                        ,   'bill_date'
                        ,   'book_date'
                        ,   'report_no'
                        ,   'handler_name'
                        ,   'institute_id'
                        ,   'depart_id'
                        ,   'abstract_id'
                        ,   'goods_name'
                        ,   'tax_type'
                        ,   'sum_money'
                        ,   'sum_tax'
                        ,   'conduct_pattern'
                );
    
	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage	model/db
	 * @link		http://www.datalyze.co.jp
	 */
		public function __construct()
		{
			parent::__construct();

			$this->load->helper("sales_helper");
			$this->load->model("/db/receivable_mng_mdl");
			$this->load->model("/bill/sales_mdl");
		}
        
    /**
     * 得意先データ取得
     *
     * @access public
     * @param string $report_no
     * @return array
     */
	    public function check_report_no($report_no) {
	        // テーブル設定
	        $this->m_tbl_name = T_SALES_MNG;

	        $this->db->select("sales_mng_id");
	        $this->db->select("customer_id");
	        $this->db->select("customer_name");
	        $this->db->select("customer_disp_name");
	        $this->db->select("credit_type");
	        $this->db->select("customer_type");
	        $this->db->select("bill_date");
	        $this->db->select("book_date");
	        $this->db->select("report_eda_from");
	        $this->db->select("report_eda_to");
	        $this->db->select("handler_id");
		    $this->db->select("handler_name");
	        $this->db->select("institute_id");
		    $this->db->select("institute_name");
	        $this->db->select("depart_id");
		    $this->db->select("depart_name");
	        $this->db->select("abstract_id");
		    $this->db->select("abstract_name");
		    $this->db->select("cutoff_date");
	        $this->db->select("sum_no_tax");
	        $this->db->select("sum_tax");
	        $this->db->select("sum_money");
		    $this->db->select("data_status_type");
	        $this->db->from(T_SALES_MNG);

	        // WHERE句作成
		    $this->db->where("delete_flg", FLG_OFF);
	        $this->db->where("report_no", $report_no);

	        $query = $this->db->get();
	        $result = $query->result();

	        return $result;
	    }
        
    /**
     * t_sales_detailへのINSERT処理
     *
     * @access private
     * @param int $mng_id
     * @param array $data
     * @return int
     */
	    private function _insert_sales_detail($mng_id, $data)
	    {
	        // テーブル名の設定
	        $this->m_tbl_name = T_SALES_DETAIL;

	        $val['sales_mng_id'] = $mng_id;
	        $val['goods_name']   = $data['goods_name'];
	        $val['tax_type']     = $this->tax_type[$data['tax_type']];
	        $val['no_tax_money'] = $data['sum_money'];
	        $val['in_tax_money'] = $data['sum_money'];
	        $val['tax']          = $data['sum_tax'];

	        $this->insert($val);

	       return $this->db->insert_id();

	    }
        
    /**
     * t_sales_mng 金額足し込み
     *
     * @access private
     * @param int $mng_id
     * @param int $money
     * @param int $tax
     * @return void
     */
        private function _update_sales_mng($mng_id, $money, $tax)
        {
            $this->m_tbl_name = T_SALES_MNG;
            $this->m_where = array('sales_mng_id' => $mng_id);
            $this->db->set('sum_no_tax', sprintf("sum_no_tax + %d",$money), false);
            $this->db->set('sum_tax', sprintf("sum_tax + %d",$tax), false);
            $this->db->set('sum_money', sprintf("sum_money + %d + %d",$money,$tax), false);
	        $this->db->set('data_status_type', DATA_TYPE_IMPORT, false);
            $this->update();

        }
        
    /**
     * 売上データ更新
     *
     * @access public
     * @param int $sales_mng_id
     * @param array $data
     * @return string
     */
        public function update_sales($sales_mng_id, $data)
        {
	        $message = '';

	        // 請求書管理データ存在チェック
	        if(!empty($data['cutoff_date'])) {
		        $res = $this->sales_mdl->get_bill_cutoff_data( $data['customer_name'], $data['bill_date'], $data['credit_type'] );
	        } else {
		        $res = $this->sales_mdl->get_bill_data($sales_mng_id);
	        }
	        if (count($res) > 0 ) {

		        // 売上情報の情報
		        $this->sales_mdl->update_del_bill_status($res[0]->bill_mng_id);
		        // 請求書管理データを削除
		        $this->m_tbl_name = T_BILL_MNG;
		        $this->db->where("bill_mng_id", $res[0]->bill_mng_id);
		        $this->delete();

		        // 請求書も削除
		        if( file_exists(APPPATH.'download/'.$res[0]->bill_no.".pdf") ){
			        unlink(APPPATH.'download/'.$res[0]->bill_no.".pdf");
		        }
		        $message = '請求書が存在したため削除しました。';
	        }

	        // 売上詳細テーブルへのISERT処理
            $this->_insert_sales_detail($sales_mng_id, $data);

	        // 売上管理テーブルのUPDATE処理
            $this->_update_sales_mng($sales_mng_id, $data['sum_money'], $data['sum_tax']);

	        // 売掛金月齢表のテーブルの登録
	        $mng = $this->_set_sales_mng_data($data);
	        $mng['sales_mng_id'] = $sales_mng_id;
	        $mng['sum_money'] = $this->_get_sales_sum_money($sales_mng_id);
	        $this->receivable_mng_mdl->update_receivable_sales($mng);

	        return $message;
        }
        
    /**
     * 売上データ作成
     *
     * @access public
     * @param array $data
     * @return array
     */
        public function regist_sales($data)
        {
            $this->m_tbl_name = T_SALES_MNG;
            $mng = $this->_set_sales_mng_data($data);

            $this->insert($mng);
            $sales_mng_id = $this->db->insert_id();
            
            $this->_insert_sales_detail($sales_mng_id,$data);

            $mng['sales_mng_id'] = $sales_mng_id;
            $this->receivable_mng_mdl->update_receivable_sales($mng);

            // 請求書管理データ存在チェック
	        if(!empty($data['cutoff_date'])) {
		        $res = $this->sales_mdl->get_bill_cutoff_data( $data['customer_name'], $data['bill_date'], $data['credit_type'] );
	        } else {
		        $res = $this->sales_mdl->get_bill_data($sales_mng_id);
	        }
            if (count($res) > 0 ) {

	            // 売上情報の情報
                $this->sales_mdl->update_del_bill_status($res[0]->bill_mng_id);
                 // 請求書管理データを削除
                $this->m_tbl_name = T_BILL_MNG;
                $this->db->where("bill_mng_id", $res[0]->bill_mng_id);
                $this->delete();

                // 請求書も削除
                if( file_exists(APPPATH.'download/'.$res[0]->bill_no.".pdf") ){
                    unlink(APPPATH.'download/'.$res[0]->bill_no.".pdf");
                }
                $message = '請求書が存在したため削除しました。';
            }
            if (isset($message)) {
                return $res = array('status' => FALSE, 'sales_mng_id' => $sales_mng_id, 'error' => $message);
            }
            return $res = array('status' => TRUE, 'sales_mng_id' => $sales_mng_id, 'error' => NULL);
        }
        
    /**
     * sales_mng　登録用データ設定
     *
     * @access private
     * @param array $data
     * @return array
     *
     */
        private function _set_sales_mng_data($data)
        {
            if (isset($data['customer_id'])) {
                $val['customer_id'] = $data['customer_id'];
            }
            $val['customer_name'] = $data['customer_name'];
            $val['customer_disp_name'] = $data['customer_name'];
            $val['customer_type'] =$data['customer_type'];
            $val['credit_type'] = $data['credit_type'];
            if (isset($data['cutoff_date'])){
                $val['cutoff_date'] = $data['cutoff_date'];
            }
            if (isset($data['cutoff_date_from'])){
                $val['cutoff_date_from'] = $data['cutoff_date_from'];
            }
            if (isset($data['cutoff_date_to'])){
                $val['cutoff_date_to'] = $data['cutoff_date_to'];
            }
            $val['bill_date'] = $data['bill_date'];
            $val['book_date'] = $data['book_date'];
            $val['report_no'] = $data['report_no'];
	        $val['report_eda_from'] = $data['report_eda_from'];
            $val['handler_id'] = $data['handler_id'];
            $val['handler_name'] = $data['handler_name'];
            $val['institute_id'] = $data['institute_id'];
            $val['institute_name'] = $data['institute_name'];
            $val['depart_id'] = $data['depart_id'];
            $val['depart_name'] = $data['depart_name'];
            $val['abstract_id'] = $data['abstract_id'];
            $val['abstract_name'] = $data['abstract_name'];
            $val['sum_no_tax'] = $data['sum_money'];
            $val['sum_tax'] = $data['sum_tax'];
            $val['sum_money'] = $data['sum_money'] + $data['sum_tax'];
            $val['data_status_type'] = DATA_TYPE_IMPORT;
            $val['sep_depart_flg'] = FLG_OFF;  // 部門別売上はバッチでは非対応
            $val['collaborate_status'] = COLLABORATE_STATUS_IMPORT;
            
            return $val;
        }
        

    /**
     * 担当者情報の取得
     *
     * @access public
     * @param striing $handler_name
     * @return stdClass
     */
        public function get_handler_data($handler_name)
        {
            $this->db->select("handler_id");
	        $this->db->select("institute_id");
	        $this->db->select("depart_id");
            $this->db->from(M_HANDLER);
            
            // WHERE句作成
            $this->db->where("handler_name", $handler_name);
            
            $query = $this->db->get();
            $result = $query->result();

	        if(count($result) == 1) {
		        return $result[0];
	        } else {
		        return NULL;
	        }
        }
        
    /**
     * 得意先情報取得
     *
     * @access public
     * @param string $customer_name
     * @return stdClass
     */
        public function get_customer_data($customer_name)
        {
            $this->db->select("customer_id");
            $this->db->select("cutoff_date");
	        $this->db->select("customer_type");
	        $this->db->select("credit_type");
            $this->db->from(M_CUSTOMER);

            // WHERE句作成
            $this->db->where("customer_name", $customer_name);
            
            $query = $this->db->get();
            $result = $query->result();

	        if(count($result) == 1) {
		        return $result[0];
	        } else {
		        return NULL;
	        }
        }

        
        
    /**
     * 各マスタデータを取得するためのSELECTの共通処理
     *
     * @param string $val
     * @param string $table
     * @param string $colmn_name
     * @param string $where
     * @return int 各種ID
     */
        public function get_name_from_id($val, $table, $colmn_name, $where)
        {
            $this->db->select($colmn_name);
            $this->db->from($table);
            
            // WHERE句作成
            $this->db->where($where, $val);
            
            $query = $this->db->get();
            $result = $query->result();
            
            return $result[0]->$colmn_name;
        }


        
    /**
     * 処理結果登録
     *
     * @access public
     * @param array $data
     * @return int
     */
        public function insert_import_mng($data) {
			// テーブル名の設定
			$this->m_tbl_name = T_IMPORT_MNG;

	        // INSERT処理
			$this->insert($data);

	        // import_mng_idを取得
			$import_mng_id = $this->db->insert_id();

			return $import_mng_id;
        }

    /**
     * t_import_mngに登録するためのデータを作成する
     *
     * @access public
     * @param string $process_datetime
     * @param int $result
     * @param string $message
     * @return array
     *
     */
        public function create_import_mng_data($process_datetime, $result=IMPORT_OK, $message='')
        {
	        $create_data = array();

	        // 処理日時分
	        $create_data['header_info'] = $process_datetime;
	        // 処理結果
	        $create_data['result'] = $result;
	        // エラーメッセージ(エラー時のみ)
	        if($result === IMPORT_ERROR)
	        {
		        $create_data['error_messages'] = $message;
	        }

			return $create_data;
        }

	/**
	 * t_import_detailへのINSERT処理
	 *
	 * @access public
	 * @param int $import_mng_id
	 * @param string $data
	 * @param int $result
	 * @return int import_detail_id
	 */
		public function insert_import_detail($import_mng_id, $data, $result=IMPORT_ERROR)
		{
			// テーブル名の設定
			$this->m_tbl_name = T_IMPORT_DETAIL;

			$val['import_mng_id'] = $import_mng_id;
			$val['import_data']  = $data;
			$val['result']       = $result;

			$this->insert($val);
			$import_detail_id = $this->db->insert_id();

			return $import_detail_id;
		}

	/**
     * 処理結果詳細テーブル更新
     *
     * @param int $detail_id
	 * @param array $upd_array
     */
        public function update_import_detail($detail_id, $upd_array)
        {
            $this->m_tbl_name = T_IMPORT_DETAIL;
            $this->m_where = array('import_detail_id' => $detail_id);

	        // 売上管理IDの更新
            if (array_key_exists('sales_mng_id', $upd_array)) {
                $this->db->set('sales_mng_id', $upd_array['sales_mng_id'], false);
            }

			// 結果の更新
            $this->db->set('result', $upd_array['result'], false);

	        // エラーメッセージの更新
	        if (array_key_exists('error_messages', $upd_array)) {
                $this->db->set('error_messages', '"'.implode("\r\n", $upd_array['error_messages']).'"', false);
            }

	        // 取込時の管理IDの更新
	        if (array_key_exists('sales_import_id', $upd_array)) {
		        $this->db->set('sales_import_id', $upd_array['sales_import_id'], false);
	        }

            $this->update();

        }

    /**
     * 処理結果mngテーブル更新
     *
     * @access public
     * @param int $mng_id import_mng_id
     * @param array $upd_ary
     * @return void
     *
     */
        public function update_import_mng($mng_id, $upd_ary)
        {
            $this->m_tbl_name = T_IMPORT_MNG;
            $this->m_where = array('import_mng_id' => $mng_id);
            $this->db->set($upd_ary);
            $this->update();
        }

    /**
     * 取り込みバッチ用　連想配列作成
     *
     * @param string $data
     * @param string $delimiter 区切り文字 デフォルト=タブ
     * @return array エラーの場合FALSE返却
     */
        public function convert_import_data($data, $delimiter = "\t")
        {
            $arr = explode($delimiter, $data);
            if (count($this->file_fields) != count($arr)) {
                return FALSE;
            }
            return array_combine($this->file_fields,$arr) ;
        }
        
    /**
     * 入金種別変換
     *
     * @access public
     * @param string $val
     * @return string
     */
        public function conv_credit_type($val)
        {
            return $this->credit_type[$val];
        }
        
    /**
     * 得意先区分
     *
     * @access public
     * @param string $val
     * @return string
     */
        public function conv_customer_type($val)
        {
            return $this->customer_type[$val];
        }
        

    /**
     * 実行済ファイルチェック
     * 実行済ファイルがDBに登録されていない場合アラートレコード作成
     *
     * @access public
     * @param array $past_file
     * @return void
     */
        public function chk_processed($past_file = array())
        {
            if (count($past_file) == 0) return;

	        //-----------------------------------------------
	        // トランザクションの開始
	        //-----------------------------------------------
            $this->db->trans_start();

            for ($i = 0; $i < count($past_file); $i++) {
                
                // 処理日時分をファイル名より取得する
                $datetime = substr( $past_file[ $i ], 0, strpos($past_file[$i], '_') );

                // 実行済がt_import_mngに登録されているか確認
                $this->db->select( 'count(*) as cnt' );
                $this->db->from( T_IMPORT_MNG );
                $this->db->where( 'header_info', $datetime );
                $query  = $this->db->get();
                $result = $query->result();

                $cnt = intval( $result[0]->cnt );
                if ( $cnt == 0 ) {
	                // 存在しない場合アラート用レコード作成
	                $this->insert_import_mng( array('header_info'=>$datetime, 'result'=>IMPORT_FATAL, 'error_messages'=>E_DATA_COMPLIANCE) );
                }
                // チェックを行ったファイルは受信完了フォルダに移動する
                rename(FTP_TEMP_PATH.$past_file[$i], FTP_TEMP_PATH.'received/'.$past_file[$i]);
            }

	        //-----------------------------------------------
	        // トランザクションの完了
	        //-----------------------------------------------
            $this->db->trans_complete();
        }
        
	/**
	 * Explode_report_no
	 *
	 * 子番号を含めた報告書番号を親番号と子番号に分ける
	 *
	 * @access	public
	 * @param  string $report_no 報告書番号
	 * @param  string $test_pattern 試験パターン区分
	 * @param  boolean $delimiter_flg 区切りフラグ 1:親番号をハイフンで区切る 2：親番号をハイフンで区切らない
	 * @return	array
	 */
		function explode_report_no($report_no, $test_pattern, $delimiter_flg=true)
		{
			$return_ary = array();

			// 自主・クレームの場合は4文字または6文字
			if($test_pattern == CONDUCT_PATTERN_AUTONOMY || $test_pattern == CONDUCT_PATTERN_CLAIM) {

				// 6文字以下の場合は親番号のみとする
				if(strlen($report_no) <= 6) {

					// 6文字の場合は区切り文字を挿入する場合は変換して格納
					if(strlen($report_no) == 6 && $delimiter_flg === true) {
						$return_ary[] = convert_delimiter_report_no($report_no);
					} else {
						$return_ary[] = $report_no;
					}

				} else {
					// 7文字以上は親番号と子番号を分ける

					// 区切り文字を挿入する場合は変換して格納
					if($delimiter_flg === true) {
						$return_ary[] = convert_delimiter_report_no(substr($report_no, 0, 6));
					} else {
						$return_ary[] = substr($report_no, 0, 6);
					}
					$return_ary[] = substr($report_no, 6);

				}

			} else if($test_pattern == CONDUCT_PATTERN_IPPAN) {
			// 一般外部の場合は8文字または10文字

				// 8文字以下の場合は親番号のみとする
				if(strlen($report_no) <= 8) {

                    $return_ary[] = $report_no;

				} else {
					// 8文字以上は親番号と子番号を分ける

					// 区切り文字を挿入する場合は変換して格納
					if($delimiter_flg === true) {
						$return_ary[] = convert_delimiter_report_no(substr($report_no, 0, 8));
					} else {
						$return_ary[] = substr($report_no, 0, 8);
					}
					$return_ary[] = substr($report_no, 8);

				}

			} else {
			// それ以外の場合はすべての親番号にする
				$return_ary[] = $report_no;
			}

			return $return_ary;
		}

	/**
	 * 売上データの売上合計金額を取得
	 *
	 * @access private
	 * @param int $sales_mng_id
	 * @return int
	 */
		private function _get_sales_sum_money($sales_mng_id)
		{
			$this->db->select("sum_money");
			$this->db->from(T_SALES_MNG);

			// WHERE句作成
			$this->db->where("sales_mng_id", $sales_mng_id);

			$query = $this->db->get();
			$result = $query->result();

			$sum_money = 0;
			if(count($result) == 1) {
				$sum_money = $result[0]->sum_money;
			}

			return $sum_money;
		}

	/**
	 * 処理年月の最後の日を取得する
	 *
	 * @access private
	 * @return string
	 */
		public function get_proc_date()
		{
			$this->db->select("proc_month");
			$this->db->from(M_PROC_MONTH);

			$query = $this->db->get();
			$result = $query->result();

			$proc_date = '';
			if(count($result) == 1) {

				$proc_date = str_replace('/', '', compute_month(substr($result[0]->proc_month, 0, 4), substr($result[0]->proc_month, 4, 2), '', -1));
			}

			return $proc_date;
		}

}

/* End of file sales_batch_mdl.php */
/* Location: ./application/model/db/batch/sales_batch_mdl.php */
