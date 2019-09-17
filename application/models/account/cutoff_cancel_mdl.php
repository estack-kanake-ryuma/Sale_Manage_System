<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cutoff_cancel_mdl extends Credit_common_mdl {

        var $m_correct_id = "";
        var $m_credit_id = "";
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
	public function regist_data()
        {
            
           // トランザクション開始
            $this->db->trans_begin();
            
            $data = $this->_get_correct_data();
            
            //$id = $_POST['cutoff_correct_id'];
            
            // 取消管理データ登録
            $this->m_tbl_name = T_CUTOFF_CORRECT;
            $this->insert($data);
            
            $this->m_correct_id = $this->db->insert_id();
            
//            $this->db->where("cutoff_correct_id", $id[0]);
//            $this->update($data);
            
            // 消込管理データ登録
            $this->_regist_credit_data();
            
            // 残高管理データ登録
            $this->_regist_receivable_data();
            
            // トランザクション終了
            $this->db->trans_complete();
            
	}
        
	/**
	 * 削除処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function cancel_data()
        {
            
            // トランザクション開始
            $this->db->trans_begin();
            
            // 取消管理データ削除
            $this->m_tbl_name = T_CUTOFF_CORRECT;
            $this->db->where("cutoff_correct_id", $_POST['cutoff_correct_id'][0]);
            $this->delete_logic();
            
            // 消込管理データ戻し処理
            $this->_cancel_credit_data();
            
            // 残高管理データ戻し処理
            $this->_cancel_receivable_data();
            
            // トランザクション終了
            $this->db->trans_complete();
            
        }
        
        /**
	 * 消込管理データ登録
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function _regist_credit_data()
        {
            // ID取得
            $bill_id = $_POST['bill_mng_id'][0];
            
            // 入金管理データにデータがあるか検索
            $this->m_tbl_name = T_CREDIT_MNG;
            $this->db->where("bill_mng_id", $bill_id);
            $cnt = $this->get_total_cnt();
            
            if($cnt == 0) {
                
                // 消込管理データを新しく登録
                $ins_data = $this->_get_credit_mng_data();
                $this->m_tbl_name = T_CREDIT_MNG;
                $this->insert($ins_data);
                
                // 消込管理詳細データを新しく登録
                $detail = $this->_get_credit_data();
                $this->m_tbl_name = T_CREDIT_DATA;
                $this->insert($detail);
                
            } else {
                
                // 消込管理データを更新
                $this->m_tbl_name = T_CREDIT_MNG;
                $this->db->where("bill_mng_id", $bill_id);
                if($_POST['correct_type'][$bill_id][0] == "1") {
                    $this->db->set("bill_correct_money", "bill_correct_money + (".erase_money_sep($_POST['correct_money'][$bill_id][0]).")", false);
                    $this->db->set("sum_balance_money", "sum_balance_money + (".erase_money_sep($_POST['correct_money'][$bill_id][0]).")", false);
                } else if($_POST['correct_type'][$bill_id][0] == "2") {
                    $this->db->set("credit_correct_money", "credit_correct_money + (".erase_money_sep($_POST['correct_money'][$bill_id][0]).")", false);
                    $this->db->set("sum_balance_money", "sum_balance_money - (".erase_money_sep($_POST['correct_money'][$bill_id][0]).")", false);
                }
                
                $this->update();
                
                // 消込管理詳細データを新しく登録
                $detail = $this->_get_credit_data();
                $this->m_tbl_name = T_CREDIT_DATA;
                $this->insert($detail);
                
            }
            
            $this->update_reconcile_status($this->m_credit_id);
            
        }
        
        /**
	 * 消込管理データ戻し処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function _cancel_credit_data()
        {
            
            // ID取得
            $bill_id = $_POST['bill_mng_id'][0];
            
            // 消込管理データを更新
            $this->m_tbl_name = T_CREDIT_MNG;
            $this->db->where("bill_mng_id", $bill_id);
            if($_POST['correct_type'][0] == "1") {
                $this->db->set("bill_correct_money", "bill_correct_money - (".erase_money_sep($_POST['can_correct_money'][$bill_id]).")", false);
                $this->db->set("sum_balance_money", "sum_balance_money - (".erase_money_sep($_POST['can_correct_money'][$bill_id]).")", false);
            } else if($_POST['correct_type'][0] == "2") {
                $this->db->set("credit_correct_money", "credit_correct_money - (".erase_money_sep($_POST['can_correct_money'][$bill_id]).")", false);
                $this->db->set("sum_balance_money", "sum_balance_money + (".erase_money_sep($_POST['can_correct_money'][$bill_id]).")", false);
            }

            $this->update();
            
            // 消込管理ファイルからIDを取得
            $this->m_tbl_name = T_CREDIT_MNG;
            $this->db->select("credit_mng_id");
            $this->db->where("bill_mng_id", $bill_id);
            $result = $this->select();
            
            $id =  $result[0]->credit_mng_id;
            
            $this->m_tbl_name = T_CREDIT_DATA;
            $this->db->where("credit_mng_id", $id);
            if($_POST['correct_type'][0] == "1") {
                $this->db->where("reconcile_type", RECONCILE_TYPE_URIAGE);
            } else {
                $this->db->where("reconcile_type", RECONCILE_TYPE_KESHIKOMI);
            }
            $this->delete();
            
            $this->update_reconcile_status($id);
            
        }
        
        /**
	 * 残高管理データ登録
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function _regist_receivable_data()
        {
            
            // ID取得
            $bill_id = $_POST['bill_mng_id'][0];
            $month = str_replace("/", "", $_POST['target_month_search']);
            
            // 残高管理ファイルからIDを取得
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $this->db->select("receivable_mng_id");
            $this->db->where("target_month", $month);
            $this->db->where("customer_disp_name", $_POST['customer_disp_name'][$bill_id]);
            $res = $this->select();
            
            $id =  $res[0]->receivable_mng_id;
            
            // 残高管理ファイル更新
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            if($_POST['correct_type'][$bill_id][0] == "1") {
                $this->db->set('sales_money', "sales_money + (".  erase_money_sep($_POST['correct_money'][$bill_id][0]).")", false);
            } else if($_POST['correct_type'][$bill_id][0] == "2") {
                $this->db->set("credit_money", "credit_money + (".  erase_money_sep($_POST['correct_money'][$bill_id][0]).")", false);
            }
            $this->db->where("receivable_mng_id", $id);
            $this->update();
            
            // 残高管理詳細ファイル登録
            $data = array();
            $data['receivable_mng_id'] = $id;
            $data['cutoff_correct_id'] = $this->m_correct_id;
            $this->m_tbl_name = T_RECEIVABLE_DATA;
            $this->insert($data);
            
        }
        
        /**
	 * 残高管理データ削除
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function _cancel_receivable_data()
        {
            
            // ID取得
            $bill_id = $_POST['bill_mng_id'][0];
            $month = str_replace("/", "", $_POST['target_month_search']);
            
            // 残高管理ファイルからIDを取得
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $this->db->select("receivable_mng_id");
            $this->db->where("target_month", $month);
            $this->db->where("customer_disp_name", $_POST['customer_disp_name'][$bill_id]);
            $res = $this->select();
            
            $id =  $res[0]->receivable_mng_id;
            
            // 残高管理ファイル更新
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            if($_POST['correct_type'][0] == "1") {
                $this->db->set('sales_money', "sales_money - (".  erase_money_sep($_POST['can_correct_money'][$bill_id]).")", false);
            } else if($_POST['correct_type'][0] == "2") {
                $this->db->set("credit_money", "credit_money - (".  erase_money_sep($_POST['can_correct_money'][$bill_id]).")", false);
            }
            $this->db->where("receivable_mng_id", $id);
            $this->update();
            
            
            // 残高管理データ削除
            $this->m_tbl_name = T_RECEIVABLE_DATA;
            $this->db->where("cutoff_correct_id", $_POST['cutoff_correct_id'][0]);
            $this->delete();
            
        }
        
        /**
	 * 一覧データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_correct_data($id) {
            
            // テーブル設定
            $this->m_tbl_name = T_CUTOFF_CORRECT;
            $this->m_prefix = "correct";
            
            $this->db->select("correct.cutoff_correct_id");	
            $this->db->select("correct.correct_type");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_CORRECT_TYPE."' AND item_cd=correct_type) as correct_type_name ");
            $this->db->select("correct.correct_date");
            $this->db->select("correct.correct_money");
            
            $this->db->where("bill_mng_id", $id);
            
            // ORDER句の設定
            $this->db->order_by("correct.correct_date", "asc");
            
            return $this->select();
            
            
        }
        
        /**
	 * 一覧データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_data($where, $start=0) {
        
            // テーブル設定
            $this->m_tbl_name = T_BILL_MNG;
            $this->m_prefix = "bill";
            
            $this->db->select("bill.customer_disp_name");	
            $this->db->select("bill.bill_no");
            $this->db->select("bill.bill_date");
            $this->db->select("bill.bill_money");
            $this->db->select("credit.sum_credit_money as credit_money");
            $this->db->select("bill.bill_mng_id");
            $this->db->select("credit.credit_mng_id");
            $this->db->select("credit.sum_balance_money as balance_money");
            $this->db->select("credit.reconcile_status");
            
            // JOIN句作成
            $this->db->join(T_CREDIT_MNG." credit", "bill.bill_mng_id=credit.bill_mng_id", "LEFT");
            $this->db->join(M_CUSTOMER." cus", "bill.customer_id=cus.customer_id", "LEFT");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // リミット設定
            $this->db->limit(PER_PAGE_CNT, $start);
            
            // ORDER句の設定
            $this->db->order_by("bill.bill_no", "asc");
            
            return $this->select();
        }
        
        /**
	 * 件数取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_cnt($where) {
        
            // テーブル設定
            $this->db->select("count(*) as cnt");
            $this->db->from(T_BILL_MNG." bill");
            
            // JOIN句作成
            $this->db->join(T_CREDIT_MNG." credit", "bill.bill_mng_id=credit.bill_mng_id", "LEFT");
            $this->db->join(M_CUSTOMER." cus", "bill.customer_id=cus.customer_id", "LEFT");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            $query = $this->db->get();
            $result = $query->result();

            return intval($result[0]->cnt);
            
        }
        
        
        /**
	 * 月齢表一覧データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_disp_data($search)
        {
            
            $start = $this->uri->segment(4);
            $data = $this->get_list_data($search, $start);
            
            $i=1;
            foreach ($data as $value) {
                
                // NO
                $value->no = $i;
                
                // 請求書No
                $value->disp_bill_no = get_anchor("/bill/bill_cutoff_print/bill_disp/".$value->bill_no."?win_type=win", $value->bill_no, array("target" => "_blank"));
                
                // 請求日
                $value->disp_bill_date = slash_date($value->bill_date);
                
                // 請求金額
                $value->disp_bill_money = money_sep($value->bill_money);
                
                // 消込金額
                $value->disp_credit_money = (empty($value->credit_money))? "0" : money_sep($value->credit_money);
                
                // 残額
                $value->disp_balance_money = ($value->balance_money == null)? money_sep($value->bill_money) : money_sep($value->balance_money);
                
                // 残額
                $value->balance_money = ($value->balance_money == null)? $value->bill_money : $value->balance_money;
                
                $value->correct_info = $this->get_correct_data($value->bill_mng_id);
                foreach ($value->correct_info as $correct) {
                    $correct->disp_correct_date = slash_date($correct->correct_date);
                    $correct->disp_correct_money = money_sep($correct->correct_money);
                }
                
                if(count($value->correct_info) == 0) {
                    $value->correct_info = $this->get_init_correct_info();
                } else {
                    $this->set_add_row($value->correct_info);
                }
           
                $i++;
            }
            
            return $data;
            
        }
        
    /**
	 * 一覧の絞込条件を作成する
	 *
	 * @access private
	 * @return string
	 * @author Kita Yasuhiro
	 */
	public function create_search_condition($session = array())
	{
		$condition = array();
                
                if(count($session) == 0) {
                    $data = $this->get_input_condition();
                } else {
                    $data = $session;
                }

                // 対象月
                if(empty($data['target_month'])) {
                    
                    $date = $this->get_init_target_month();
                    $condition[] = "date_format(bill.bill_date, '%Y/%m') = '".$date."'";
                    
                } else {
                    $condition[] = "date_format(bill.bill_date, '%Y/%m') = '".$data['target_month']."'";
                }
                
                // 得意先
                if(!empty($data['customer_disp_name'])) {
                    $condition[] = "(bill.customer_disp_name like '%".$this->db->escape_like_str($data['customer_disp_name'])
                                                        ."%' or cus.customer_furi like '%".$this->db->escape_like_str($data['customer_disp_name'])."%')";

                    
                    
                }
                
                // 入金種別
                if(!empty($data['credit_status'])) {
                    
                    if($data['credit_status'] == CREDIT_STATUS_ON) {
                        $condition[] = "(reconcile_status = '".$this->db->escape_like_str($data['credit_status'])."')";
                    } else {
                        $condition[] = "(reconcile_status = '".$this->db->escape_like_str($data['credit_status'])."' OR reconcile_status is null)";
                    }
                    
                }
                
                // 検索条件返却
                if(count($condition) > 0) {
                    return implode(' and ', $condition);
                } else {
                    
                }

	}
        
        /**
	 * マスタ情報取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_mst_data() {
            
            $data = array();
            
            // テーブル設定
            $data['credit_status'] = $this->general_name_mdl->get_credit_stauts();
            
            return $data;
        }
        
        
    /**
	 * 追加した行の分だけ、訂正情報を作る
	 *
	 * @access private
     * @param  $obj array
	 * @return string
	 * @author Kita Yasuhiro
	 */
        private function set_add_row(&$obj)
        {
            
            $cnt = count($obj);

            $obj[$cnt] = new stdClass();
            $obj[$cnt]->cutoff_correct_id = "";
            $obj[$cnt]->correct_date = "";
            $obj[$cnt]->correct_type = "";
            $obj[$cnt]->correct_money = "";
            $obj[$cnt]->disp_correct_money = "";
            $obj[$cnt]->disp_correct_date = "";
            
        }
        
    /**
	 * 訂正情報の初期化
	 *
	 * @access private
	 * @return string
	 * @author Kita Yasuhiro
	 */
        public function get_init_correct_info()
        {
         
            $res = array();
            $res[0] = new stdClass();
            
            $res[0]->cutoff_correct_id = "";
            $res[0]->correct_date = "";
            $res[0]->correct_type = "";
            $res[0]->correct_money = "";
            $res[0]->disp_correct_money = "";
            $res[0]->disp_correct_date = "";
            
            return $res;
            
        }
        
        /**
         * 対象月の初期値を返却する
         * 処理月-1ヶ月を返却
         *
         * @access private
         * @return array
         * @author Kita Yasuhiro
         */
        public function get_init_target_month()
        {
            
            // 処理月
            $proc_month = $this->session->userdata(SS_KEY_PROC_MONTH);
            
            // 月初
            $day = $proc_month."01";
            
            
            return date("Y/m", strtotime($day."-1 month"));
            
        }
        
    /**
	 * 一覧画面で必要な情報を設定する
	 *
	 * @access private
	 * @return string
	 * @author Kita Yasuhiro
	 */
        public function set_list_session($data) {
        
            $session = array();
            
            $session[SS_KEY_SEARCH] = $data;
            
            $this->session->set_userdata($this->router->class, $session);
            
        }
        
    /**
	 * 登録用のデータを作成する
	 *
	 * @access private
	 * @return string
	 * @author Kita Yasuhiro
	 */
        private function _get_correct_data()
        {
            
            $res = array();
            
            $index = $_POST['bill_mng_id'];
            
            $res['bill_mng_id'] = $index[0];
            $res['correct_date'] = date("Y/m/d");
            $res['correct_type'] = "2";
            $res['correct_money'] = erase_money_sep($_POST['correct_money'][$index[0]][0]);

            return $res;
            
        }
        
    /**
	 * 消込管理データ登録用データを取得する
	 *
	 * @access private
	 * @return string
	 * @author Kita Yasuhiro
	 */
        private function _get_credit_mng_data()
        {
            
            $res = array();
            
            $bill_id = $_POST['bill_mng_id'][0];
            
            $res['bill_mng_id'] = $bill_id;
            $res['bill_no'] = $_POST['bill_no'][$bill_id];
            $res['bill_money'] = erase_money_sep($_POST['bill_money'][$bill_id]);
            
            if($_POST['correct_type'][$bill_id][0] == "1") {
                $res['bill_correct_money'] = erase_money_sep($_POST['correct_money'][$bill_id][0]);
                $res['sum_balance_money'] = $res['bill_money'] + erase_money_sep($_POST['correct_money'][$bill_id][0]);
            } else if($_POST['correct_type'][$bill_id][0] == "2") {
                $res['credit_correct_money'] = erase_money_sep($_POST['correct_money'][$bill_id][0]);
                $res['sum_balance_money'] = $res['bill_money'] - erase_money_sep($_POST['correct_money'][$bill_id][0]);
            } else {
            }
            
            return $res;
            
        }
        
    /**
	 * 消込詳細データ登録用データを取得する
	 *
	 * @access private
	 * @return string
	 * @author Kita Yasuhiro
	 */
        private function _get_credit_data()
        {
            
            $res = array();
            
            $bill_id = $_POST['bill_mng_id'][0];
            
            // 消込管理ファイルからIDを取得
            $this->m_tbl_name = T_CREDIT_MNG;
            $this->db->select("credit_mng_id");
            $this->db->where("bill_mng_id", $bill_id);
            $result = $this->select();
            
            $this->m_credit_id =  $result[0]->credit_mng_id;
            
            $res['credit_mng_id'] = $this->m_credit_id;
            $res['reconcile_date'] = date("Y/m/d");
            $res['reconcile_money'] = empty($_POST['correct_money'][$bill_id][0])? null : erase_money_sep($_POST['correct_money'][$bill_id][0]);
//            if($_POST['correct_type'][$bill_id][0] == "1") {
//                $res['reconcile_type'] = RECONCILE_TYPE_URIAGE;
//            } else if($_POST['correct_type'][$bill_id][0] == "2") {
                $res['reconcile_type'] = RECONCILE_TYPE_KESHIKOMI;
//            }
            
            return $res;
            
        }
        
        


}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */