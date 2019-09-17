<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Make_data_mdl extends MY_Model {
    
        private $sales_title = array();
        private $sales_mng_id = "";
    
	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage	model/db
	 * @author		Kita Yasuhiro
	 * @link		http://www.datalyze.co.jp
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function make_sales_data()
        {
            
            // トランザクション開始
            $this->db->trans_start();
            
            if(!$rows = file(APPPATH.'csv/sales_data.csv')) {
                die("File not found");
                return;
            }
            
            $this->sales_title = explode(",", $rows[0]);
            
            $this->m_tbl_name = T_SALES_MNG;
            $this->db->where("date_format(book_date, '%Y/%m') = '2013/06'");
            $this->delete();
            
            foreach($rows as $key => $row) {
                
                if($key==0)  continue;
                
                $data = explode(",", $row);
                
                $mng = $this->get_sales_mng_data($data);
                $this->m_tbl_name = T_SALES_MNG;
                $this->insert($mng);
                $this->sales_mng_id = $this->db->insert_id();
                    
                $this->m_tbl_name = T_SALES_DETAIL;
                $detail = $this->get_sales_detail_data($data);
                $this->insert($detail);
                
            }
            
            // トランザクション終了
            $this->db->trans_complete();
            
	}
        
	/**
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function make_customer_data()
        {
            // トランザクション開始
            $this->db->trans_start();
            
            if(!$rows = file(APPPATH.'csv/customer_data.csv')) {
                die("File not found");
                return;
            }
            
            $this->sales_title = explode(",", $rows[0]);
            
            // 得意先マスタ削除
            $this->db->empty_table(M_CUSTOMER);
            
            foreach($rows as $key => $row) {
                
                if($key==0)  continue;
                
                $data = explode(",", $row);
                
                // 残高ファイルデータ取得
                $customer = $this->get_customer_data($data);
                $this->m_tbl_name = M_CUSTOMER;
                $this->insert($customer);
                
            }

            // トランザクション終了
            $this->db->trans_complete();
            
        }
        
	/**
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function make_goods_data()
        {
            // トランザクション開始
            $this->db->trans_start();
            
            if(!$rows = file(APPPATH.'csv/goods_data.csv')) {
                die("File not found");
                return;
            }
            
            $this->sales_title = explode(",", $rows[0]);
            
            // 商品マスタ削除
            $this->db->empty_table(M_GOODS);
            
            foreach($rows as $key => $row) {
                
                if($key==0)  continue;
                
                $data = explode(",", $row);
                
                // 得意先マスタデータ取得
                $goods = $this->get_goods_data($data);
                $this->m_tbl_name = M_GOODS;
                $this->insert($goods);
                
            }

            // トランザクション終了
            $this->db->trans_complete();
            
        }
        
	/**
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function make_handler_data()
        {
            // トランザクション開始
            $this->db->trans_start();
            
            if(!$rows = file(APPPATH.'csv/handler_data.csv')) {
                die("File not found");
                return;
            }
            
            $this->sales_title = explode(",", $rows[0]);
            
            // 商品マスタ削除
            $this->db->empty_table(M_HANDLER);
            
            foreach($rows as $key => $row) {
                
                if($key==0)  continue;
                
                $data = explode(",", $row);
                
                // 得意先マスタデータ取得
                $handler = $this->get_handler_data($data);
                $this->m_tbl_name = M_HANDLER;
                $this->insert($handler);
                
            }

            // トランザクション終了
            $this->db->trans_complete();
            
        }

	/**
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function make_fix_memo_data()
        {
            
            // トランザクション開始
            $this->db->trans_start();
            
            if(!$rows = file(APPPATH.'csv/fix_memo_data.csv')) {
                die("File not found");
                return;
            }
            
            $this->sales_title = explode(",", $rows[0]);
            
            // 固定メモマスタ削除
            $this->db->empty_table(M_FIX_MEMO);
            
            foreach($rows as $key => $row) {
                
                if($key==0)  continue;
                
                $data = explode(",", $row);
                
                // 得意先マスタデータ取得
                $fix_memo = $this->get_fix_memo_data($data);
                $this->m_tbl_name = M_FIX_MEMO;
                $this->insert($fix_memo);
                
            }

            // トランザクション終了
            $this->db->trans_complete();
            
        }
        
	/**
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function make_lost_credit_data()
        {
            
            // トランザクション開始
            $this->db->trans_start();
            
            if(!$rows = file(APPPATH.'csv/lost_credit_data.csv')) {
                die("File not found");
                return;
            }
            
            $this->sales_title = explode(",", $rows[0]);
            
            foreach($rows as $key => $row) {
                
                if($key==0)  continue;
                
                $data = explode(",", $row);
                
                // 得意先マスタになければ登録
                $customer = $this->chk_customer($data);
                if(count($customer) > 0) {
                    $this->m_tbl_name = M_CUSTOMER;
                    $this->insert($customer);
                }
                
                // 繰越残高データ作成
                $credit = $this->get_lost_credit_data($data);
                $this->m_tbl_name = T_CREDIT_RECIEVED;
                $this->insert($credit);
                
            }
            
            // 7月分の残高データ作成
            $this->load->model("top_mdl");
            
            $this->session->set_userdata(SS_KEY_PROC_MONTH, "201307");
            
            $this->top_mdl->update_balance_data();
            
            $this->session->set_userdata(SS_KEY_PROC_MONTH, "201308");
            

            // トランザクション終了
            $this->db->trans_complete();
            
        }
        
	/**
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function make_balance_data()
        {
            
            // トランザクション開始
            $this->db->trans_start();

            // ７月以降の残高テーブル削除
            $this->m_tbl_name = T_BALANCE_MNG;
            $this->db->where("target_month >= 201307");
            $this->delete();
            
            // 7月分の残高データ作成
            $this->load->model("top_mdl");
            
            $this->session->set_userdata(SS_KEY_PROC_MONTH, "201307");
            
            $this->top_mdl->regist_data();
            
            $this->session->set_userdata(SS_KEY_PROC_MONTH, "201308");
            
            $this->top_mdl->regist_data();

            $this->session->set_userdata(SS_KEY_PROC_MONTH, "201309");
            
            $this->top_mdl->regist_data();

            $this->session->set_userdata(SS_KEY_PROC_MONTH, "201310");
            
            $this->top_mdl->regist_data();
            

            // トランザクション終了
            $this->db->trans_complete();
            
        }
        
	/**
	 * 初期残高データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function get_first_data($data)
        {
            $res = array();
            
            $res['customer_id'] = $this->get_master_id($data, 'customer_disp_name');
            $res['customer_disp_name'] = $this->get_basic_date($data, 'customer_disp_name');
            $res['first_money'] = ($this->get_basic_date($data, 'balance_money') === null) ? "0" : $this->get_basic_date($data, 'balance_money');
            $res['sum_credit_money'] = "0";
            $res['sum_balance_money'] = ($this->get_basic_date($data, 'balance_money') === null) ? "0" : $this->get_basic_date($data, 'balance_money');
            //$res['receivable_mng_id'] = $id;
            
            return $res;
            
        }

        
        
	/**
	 * 商品マスタデータ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function get_fix_memo_data($data)
        {
            $res = array();
            
            $res['fix_memo'] = trim(mb_convert_kana($data[0], "s"));
            
            return $res;
            
        }
        
	/**
	 * 得意先マスタデータ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function get_customer_info($data)
        {
            // 初期残データ取得
            $this->m_tbl_name = M_CUSTOMER;
            $this->db->select("customer_id");
            $this->db->select("customer_disp_name");
            $furigana  = $this->get_basic_date($data, 'other');
            if(empty($furigana)) {
                $this->db->where("customer_disp_name = '".$this->get_basic_date($data, 'customer_disp_name')."'");
            } else {
                $this->db->where("customer_furi = '".$furigana."'");
            }
            return $this->select();
            
        }
        
        
	/**
	 * 得意先マスタデータ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function chk_customer($data, $type="furigana")
        {
            if($type == "furigana") {
                $furigana  = $this->get_basic_date($data, 'other');
            } else {
                $furigana  = null;
            }
            

            $id = $res['customer_id'] = $this->get_master_id($data, 'customer_disp_name', $furigana);
            
            if(!empty($id)) return array();
            
            $res = array();
            $res['customer_name'] = $this->get_basic_date($data, 'customer_disp_name');
            $res['customer_disp_name'] = $this->get_basic_date($data, 'customer_disp_name');
            $res['card_print_type'] = "0";
            $res['customer_type'] = "1";
            $res['credit_type'] = "1";
            
            return $res;
            
        }
        
	/**
	 * 得意先マスタデータ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function get_customer_data($data)
        {
            $res = array();
            
            $res['customer_name'] = $this->get_basic_date($data, '得意先名称');             // 得意先名
            $res['customer_furi'] = $this->get_basic_date($data, 'ふりがな');               // ふりがな
            $res['customer_disp_name'] = $this->get_basic_date($data, '呼称');              // 呼称
            $res['handler_name'] = $this->get_basic_date($data, '担当者名');                // 担当者名
            $res['prefix_cd'] = $this->get_basic_date($data, '役職コード');                 // 役職コード
            $res['depart_name'] = $this->get_basic_date($data, '部署名');                   // 部署名
            $res['post_no_1'] = $this->get_basic_date($data, '郵便番号１');                 // 郵便番号１
            $res['post_no_2'] = $this->get_basic_date($data, '郵便番号２');                 // 郵便番号２
            $res['address'] = $this->get_basic_date($data, '住所');                         // 住所
            $res['buil_name'] = $this->get_basic_date($data, '建物名');                     // 建物名
            $res['tel_no_1'] = $this->get_basic_date($data, '電話番号１');                  // 電話番号１
            $res['tel_no_2'] = $this->get_basic_date($data, '電話番号２');                  // 電話番号２
            $res['tel_no_3'] = $this->get_basic_date($data, '電話番号３');                  // 電話番号３
            $res['cutoff_date'] = $this->get_basic_date($data, '締日');                     // 締日
            $res['card_print_type'] = $this->get_basic_date($data, '納品書発行区分');       // 納品書発行区分
            $res['customer_type'] = $this->get_basic_date($data, '得意先区分');             // 得意先区分
            $res['credit_type'] = $this->get_basic_date($data, '入金種別');                 // 入金種別
            $res['memo'] = $this->get_basic_date($data, 'めも');                            // めも
            
            return $res;
            
        }
        
	/**
	 * 不足入金データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function get_lost_credit_data($data)
        {
            $res = array();
            
            $res['credit_date'] = $this->get_basic_date($data, 'credit_date');
            $res['bank_id'] = "1";
            $res['bank_name'] = "三菱東京ＵＦＪ";
            $res['branch_name'] = "大阪中央";
            $res['account_type'] = "1";
            $res['account_no'] = "4739610";
            $res['customer_id'] = $this->get_master_id($data, 'customer_disp_name');
            $res['customer_disp_name'] = $this->get_basic_date($data, 'customer_disp_name');
            $res['credit_money'] = $this->get_basic_date($data, 'credit_money');
            $res['balance_money'] = $this->get_basic_date($data, 'credit_money');
            
            return $res;
            
        }

	/**
	 * 残高ファイルデータ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function get_balance_data($data)
        {
            $res = array();
            
            $res['target_month'] = $this->get_basic_date($data, 'target_month');             // 得意先名
            $res['customer_id'] = $this->get_master_id($data, 'customer_disp_name');               // ふりがな
            $res['customer_disp_name'] = $this->get_basic_date($data, 'customer_disp_name');              // 呼称
            $sales = ($this->get_basic_date($data, 'sales_money') === null) ? "0" : $this->get_basic_date($data, 'sales_money');
            $credit = ($this->get_basic_date($data, 'credit_money') === null) ? "0" : $this->get_basic_date($data, 'credit_money');
            $res['balance_money'] = $sales - $credit;
            $res['bef_balance_money'] = ($this->get_basic_date($data, 'first_balance_money') === null) ? "0" : $this->get_basic_date($data, 'first_balance_money');
            
            return $res;
            
        }
        
	/**
	 * 残高ファイルデータ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function get_receivable_data($data, $customer)
        {
            $res = array();
            
            
            $res['target_month'] = $this->get_basic_date($data, 'target_month');             // 得意先名
            $res['customer_id'] = $this->get_master_id($data, 'customer_disp_name');               // ふりがな
            $res['customer_disp_name'] = $customer[0]->customer_disp_name;
            $res['institute_id'] = null;              // 呼称
            $res['institute_name'] = null;              // 呼称
            $res['depart_id'] = null;              // 呼称
            $res['depart_name'] = null;              // 呼称
            $res['sales_money'] = ($this->get_basic_date($data, 'sales_money') === null) ? "0" : $this->get_basic_date($data, 'sales_money');
            $res['credit_money'] = ($this->get_basic_date($data, 'credit_money') === null) ? "0" : $this->get_basic_date($data, 'credit_money');
            $res['first_balance_money'] = ($this->get_basic_date($data, 'first_balance_money') === null) ? "0" : $this->get_basic_date($data, 'first_balance_money');
            
            return $res;
            
        }
        
	/**
	 * 商品マスタデータ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function get_goods_data($data)
        {
            $res = array();
            
            
            $res['goods_name'] = $this->get_basic_date($data, '品名');              // 品名
            $res['goods_furi'] = $this->get_basic_date($data, 'ふりがな');          // ふりがな
            $res['unit'] = $this->get_basic_date($data, '単位');                    // 単位
            $res['tax_type'] = $this->get_basic_date($data, '税区分');              // 税区分
            $res['memo'] = $this->get_basic_date($data, 'メモ');                    // メモ
            
            return $res;
            
        }
        
	/**
	 * 担当者マスタデータ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function get_handler_data($data)
        {
            $res = array();
            
            $res['handler_name'] = $this->get_basic_date($data, '担当者名称');              // 担当者名称
            $res['handler_furi'] = $this->get_basic_date($data, 'ふりがな');                // ふりがな
            $res['institute_id'] = $this->get_basic_date($data, '研究所id');                // 研究所id
            $res['depart_id'] = $this->get_basic_date($data, '部門id');                     // 部門id
            $res['memo'] = $this->get_basic_date($data, 'めも');                            // めも
            
            return $res;
            
        }
        
        
	/**
	 * 売上管理データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function get_sales_mng_data($data)
        {
            
            $res = array();
            
            $res['customer_id'] = $this->get_master_id($data, "呼称");                           // 得意先ID
            $res['customer_name'] = $this->get_basic_date($data, '得意先正式名称');              // 得意先名
            $res['customer_disp_name'] = $this->get_basic_date($data, '呼称');                  // 得意先名(呼称)
            $res['credit_type'] = $this->get_credit_type($data, '入金種別');                    // 入金種別
            $res['customer_type'] = $this->get_customer_type($data, "得意先区分");              // 得意先区分
            $res['bill_date'] = $this->get_basic_date($data, '請求日');                         // 請求日
            $res['book_date'] = $this->get_basic_date($data, '売上計上日');                     // 売上計上日
            $res['report_no'] = $this->get_basic_date($data, '報告書No');                       // 報告書No
            $res['report_eda_from'] = $this->get_basic_date($data, '報告書枝From');             // 報告書No枝From
            $res['report_eda_to'] = $this->get_basic_date($data, '報告書枝To');                 // 報告書No枝To
            $res['handler_id'] = $this->get_master_id($data, '担当者');                         // 担当者ID
            $res['handler_name'] = $this->get_basic_date($data, '担当者');                      // 担当者名
            $res['institute_id'] = $this->get_master_id($data, '研究所');                       // 研究所ID
            $res['institute_name'] = $this->get_basic_date($data, '研究所');                    // 研究所名称
            $res['depart_id'] = $this->get_master_id($data, '部門');                            // 部門ID
            $res['depart_name'] = $this->get_basic_date($data, '部門');                         // 部門名称
            $res['abstract_id'] = $this->get_master_id($data, '摘要');                          // 摘要ID
            $res['abstract_name'] = $this->get_basic_date($data, '摘要');                       // 摘要名称
            $res['sum_no_tax'] = $this->get_basic_date($data, '税抜金額');                      // 合計税抜き額
            $res['sum_tax'] = $this->get_basic_date($data, '消費税');                           // 合計税額
            $res['sum_money'] = $this->get_basic_date($data, '税込額');                         // 合計金額
            $res['sales_memo'] = $this->get_basic_date($data, 'めも');                          // 売上情報としてのメモ
            $res['sep_month_from'] = null;                                                      // 売上分割開始月
            $res['sep_month_to'] = null;                                                        // 売上分割終了月
            $res['cutoff_date_from'] = $this->get_basic_date($data, '締日From');                // 締日From
            $res['cutoff_date_to'] = $this->get_basic_date($data, '締日To');                    // 締日To
            $res['data_status_type'] = DATA_TYPE_CLOSE;                                         // データステータスタイプ
            $res['first_data_flg'] = FLG_ON;                                         // データステータスタイプ
            $res['sep_depart_flg'] = FLG_OFF;                                         // データステータスタイプ
            
            return $res;
            
        }
        
	/**
	 * 売上管理データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function get_sales_detail_data($data)
        {
            
            $res = array();
            
            if(empty($this->sales_mng_id)) return array();
            
            $res['sales_mng_id'] = $this->sales_mng_id;                         // 売上管理ID
            $res['goods_name'] = $this->get_basic_date($data, '品名');          // 品名
            $res['cnt'] = $this->get_basic_date($data, '数量');                 // 数量
            $res['unit'] = $this->get_basic_date($data, '単位');                // 単位
            $res['unit_price'] = $this->get_basic_date($data, '単価');          // 単価
            $res['tax_type'] = $this->get_tax_type($data, '税区分');            // 税区分
            $res['tax'] = $this->get_basic_date($data, '消費税');               // 消費税
            $res['no_tax_money'] = $this->get_basic_date($data, '税抜金額');    // 税抜額
            $res['in_tax_money'] = $this->get_basic_date($data, '税込額');      // 税抜額
            $res['unit_memo'] = $this->get_basic_date($data, 'めも');           // 売上詳細のメモ
            
            return $res;
        }
        private function get_basic_date($row, $val) {
            
            array_walk($this->sales_title, array($this, 'trim_value'));
            $key = array_search($val, $this->sales_title);
            
            if($key === false) return null;
            
            if(isset($row[$key])) {
                return empty($row[$key]) ? null : trim($row[$key]);
            } else {
                return null;
            }
        }
        private function get_credit_type($row, $val) {
            array_walk($this->sales_title, array($this, 'trim_value'));
            $key = array_search($val, $this->sales_title);
            
            if(isset($row[$key])) {
                
                if($row[$key] == "その他") {
                    return CREDIT_TYPE_OTHER;
                } else if($row[$key] == "相殺") {
                    return CREDIT_TYPE_SETOFF;
                } else if($row[$key] == "前受") {
                    return CREDIT_TYPE_BEFORE;
                }
            } else {
                return null;
            }
        }
        private function get_customer_type($row, $val) {
            array_walk($this->sales_title, array($this, 'trim_value'));
            $key = array_search($val, $this->sales_title);
            if(isset($row[$key])) {
                if($row[$key] == "一般外部") {
                    return CUSTOMER_TYPE_IPPAN;
                } else if($row[$key] == "大丸グループ") {
                    return CUSTOMER_TYPE_DAIMRU;
                } else {
                    return null;
                }
            } else {
                return null;
            }
        }
        private function get_tax_type($row, $val) {
            array_walk($this->sales_title, array($this, 'trim_value'));
            $key = array_search($val, $this->sales_title);
            if(isset($row[$key])) {
                if($row[$key] == "課税(5%)") {
                    return "1";
                } else if($row[$key] == "税込(5%)") {
                    return "2";
                } else if($row[$key] == "非課税") {
                    return "5";
                } else {
                    return null;
                }
            } else {
                return null;
            }
        }
        
        private function get_master_id($row, $val, $furigana=null) {
            array_walk($this->sales_title, array($this, 'trim_value'));
            $key = array_search($val, $this->sales_title);
            if(isset($row[$key])) {
                
                $id_name = "";
                $tbl = "";
                $where = "";
                if($val == "呼称" || $val == "customer_disp_name") {
                    $id_name = "customer_id";
                    $tbl = M_CUSTOMER;
                    if(empty($furigana)) {
                        $where = "(customer_disp_name='".$row[$key]."')";
                    } else {
                        $where = "(customer_disp_name='".$row[$key]."') and (customer_furi like ('%".$furigana."%'))";
                    }
                } else if($val == "担当者") {
                    $id_name = "handler_id";
                    $tbl = M_HANDLER;
                    $where = "(handler_name='".$row[$key]."')";
                } else if($val == "研究所") {
                    $id_name = "institute_id";
                    $tbl = M_INSTITUTE;
                    $where = "(institute_name='".$row[$key]."')";
                } else if($val == "部門") {
                    $id_name = "depart_id";
                    $where = "(depart_name='".$row[$key]."')";
                    $tbl = M_DEPART;
                } else if($val == "摘要") {
                    $id_name = "abstract_id";
                    $tbl = M_ABSTRACT;
                    $where = "(abstract_name='".$row[$key]."')";
                }
                
                $this->m_tbl_name = $tbl;
                $this->db->select($id_name);
                $this->db->where($where);
                $db_res = $this->select();
                if(count($db_res) == 0) {
                    return null;
                } else {
                    return $db_res[0]->$id_name;
                }
                
            }
            
            return null;
        }

        public function trim_value(&$value) { 
            $value = trim($value); 
        }

	/**
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function update_first_data()
        {
            
            // トランザクション開始
            $this->db->trans_start();
            
            if(!$rows = file(APPPATH.'csv/first_data.csv')) {
                die("File not found");
                return;
            }
            
            $this->sales_title = explode(",", $rows[0]);
            
            foreach($rows as $key => $row) {
                
                if($key==0)  continue;
                
                $data = explode(",", $row);
                
                // 入金ファイルにデータがあるかチェック
                $this->m_tbl_name = T_CREDIT_RECIEVED;
                $this->db->select("credit_received_id");
                $this->db->where("date_format(credit_date,\"%Y/%c/%e\") = '".$this->get_basic_date($data, 'credit_date')."'");
                $this->db->where("customer_disp_name = '".$this->get_basic_date($data, 'customer_disp_name')."'");
                $this->db->where("credit_money = '".$this->get_basic_date($data, 'credit_money')."'");
                $db_res = $this->select();
                if(count($db_res) == 0) {
                    $this->db->trans_rollback();
                    echo $this->db->last_query();
                    exit;
                }
                $credit_id = $db_res[0]->credit_received_id;
                
                // 初期残高ファイルにデータがあるかチェック
                $this->m_tbl_name = T_FIRST_MONEY_MNG;
                $this->db->select("first_mng_id");
                $this->db->where("customer_disp_name = '".$this->get_basic_date($data, 'customer_disp_name')."'");
                $db_res = $this->select();
                if(count($db_res) == 0) {
                    $this->db->trans_rollback();
                    echo $this->db->last_query();
                    exit;
                }
                $first_id = $db_res[0]->first_mng_id;
                $this->m_where = array();
                
                // 入金残額のUPDATE
                $this->m_tbl_name = T_CREDIT_RECIEVED;
                // 残高をupdate
                $this->db->where("date_format(credit_date,\"%Y/%c/%e\") = '".$this->get_basic_date($data, 'credit_date')."'");
                $this->db->where("customer_disp_name = '".$this->get_basic_date($data, 'customer_disp_name')."'");
                $this->db->where("credit_money = '".$this->get_basic_date($data, 'credit_money')."'");
                $this->db->set('balance_money', 'balance_money - '.$this->get_basic_date($data, 'transfer'), false);
                $this->update();
                
                // 初期残額のUPDATE
                $this->m_tbl_name = T_FIRST_MONEY_MNG;
                // 残高をupdate
                $this->db->where("first_mng_id = ".$first_id);
                $this->db->set('sum_balance_money', 'sum_balance_money - '.$this->get_basic_date($data, 'first_money'), false);
                $this->update();
                
                // 初期残額のINSERT
                $ins_data = array();
                $ins_data['first_mng_id'] = $first_id;
                $ins_data['credit_received_id'] = $credit_id;
                $ins_data['reconcile_date'] = "2013/08/01";
                $ins_data['reconcile_money'] = $this->get_basic_date($data, 'transfer');
                $ins_data['reconcile_type'] = RECONCILE_TYPE_FURI;
                $this->m_tbl_name = T_FIRST_MONEY_DATA;
                $this->insert($ins_data);
                
                $tesuryo = $this->get_basic_date($data, 'tesuryo');
                if(!empty($tesuryo)) {
                    $ins_data['reconcile_money'] = $this->get_basic_date($data, 'tesuryo');
                    $ins_data['reconcile_type'] = RECONCILE_TYPE_FURI_TESU;
                    $this->m_tbl_name = T_FIRST_MONEY_DATA;
                    $this->insert($ins_data);
                }
                
            }
            

            // トランザクション終了
            $this->db->trans_complete();
            
        }
        
	/**
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function make_receivable_data()
        {
            
            // トランザクション開始
            $this->db->trans_start();
            
//            if(!$rows = file(APPPATH.'csv/balance_data.csv')) {
//                die("File not found");
//                return;
//            }
//            
//            $this->sales_title = explode(",", $rows[0]);
//            
//            // 残高関係ファイル削除
//            $this->db->empty_table(T_RECEIVABLE_MNG);
//            $this->db->empty_table(T_RECEIVABLE_DATA);
//            
//            foreach($rows as $key => $row) {
//                
//                if($key==0)  continue;
//                
//                $data = explode(",", $row);
//                
//                // 得意先マスタになければ登録
//                $customer = $this->get_customer_info($data);
//                if(count($customer) == 0) {
//                    $this->db->trans_rollback();
//                    echo $this->db->last_query();
//                    exit;
//                }
//                
//                // 6月分月齢データ作成
//                $rb = $this->get_receivable_data($data, $customer);
//                $this->m_tbl_name = T_RECEIVABLE_MNG;
//                $this->insert($rb);
//                
//            }
//            
//            // 初期残分の消込を行う。
//            $this->del_first_receivable_data();
            
            // ７月以降の売掛金テーブル削除
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $this->db->where("target_month >= 201307");
            $this->delete();
            
            
            // 7月以降の売上データを登録
            $this->load->model("/db/receivable_mng_mdl");
            $this->m_tbl_name = T_SALES_MNG;
            $this->db->select("sales_mng_id, customer_id, customer_disp_name, institute_id, institute_name, depart_id, depart_name, sum_money, cutoff_date, bill_date");
            $this->db->where("date_format(bill_date,\"%Y/%m\") >= '2013/07'");
            $db_res = $this->select();
            foreach ($db_res as $value) {
                $data = (array)$value;
                $this->receivable_mng_mdl->make_rcv_data($data);
            }
            
            // 7月以降の消込データを登録(売上単位分)
            $this->m_tbl_name = T_CREDIT_MNG;
            $this->m_prefix = "credit";
            $this->db->select("credit.credit_mng_id");
            $this->db->select("credit.sum_credit_money");
            $this->db->select("bill_m.bill_type");
            $this->db->select("bill_m.bill_date");
            $this->db->select("bill_m.customer_disp_name");
            $this->db->select("bill_c.sales_mng_id");
            
            $this->db->join(T_BILL_MNG." bill_m ", "credit.bill_mng_id=bill_m.bill_mng_id", "INNER");
            $this->db->join(T_BILL_DATA." bill_c ", "bill_m.bill_mng_id=bill_c.bill_mng_id", "LEFT");
            $this->db->group_by("credit.credit_mng_id");
            $db_res = $this->select();
            
            foreach ($db_res as $value) {
                $data = (array)$value;
                $this->receivable_mng_mdl->update_receivable_credit($data, 0, "regist");
            }

            // トランザクション終了
            $this->db->trans_complete();
            
            
        }
        
	/**
	 * 初期残分の月齢データ更新
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function del_first_receivable_data()
        {
            
            // 初期残データ取得
            $this->m_tbl_name = T_FIRST_MONEY_MNG;
            $this->db->select("customer_id");
            $this->db->select("customer_disp_name");
            $this->db->select("first_money");
            $this->db->select("sum_balance_money");
            $this->db->where("first_money != sum_balance_money");
            $db_res = $this->select();
            
            // 件数分Loop
            foreach ($db_res as $val) {
                
                $ans = $val->first_money - $val->sum_balance_money;
                
                $this->m_tbl_name = T_RECEIVABLE_MNG;
                $this->db->where("target_month = '201306'");
                $this->db->where("customer_id", $this->db->escape_like_str($val->customer_id));
                $this->db->where("customer_disp_name", $this->db->escape_like_str($val->customer_disp_name));
                $this->db->set('credit_money', 'credit_money + '.$ans, false);
                $this->update();
                
                if($this->db->affected_rows() == 0) {
                    $this->db->trans_rollback();
                    echo $this->db->last_query();
                    exit;
                }
            }
            
            
        }
        
        
}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */
