<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Master file print mdl
 *
 * 得意先元帳のモデル
 *
 * @link		http://www.datalyze.co.jp
 */
class Master_file_print_mdl extends Credit_common_mdl {

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
	 * 一覧の絞込条件を作成する
	 *
	 * @access private
	 * @param $where string
	 * @return string
	 */
        private function get_sales_data($where)
        {
            
            // テーブル設定
            $this->m_tbl_name = T_SALES_MNG;
            
            // Prefix 設定
            $this->m_prefix = "sales";
            
            $this->db->select("sales.book_date as target_date");
            $this->db->select("date_format(sales.book_date, \"%Y/%m\") as target_month", false);
            $this->db->select("bill_p.bill_no");
            $this->db->select("sales.abstract_name");	
            $this->db->select("sales.sum_money as sales_money");
            $this->db->select("'' as credit_money", false);
            $this->db->select("'0' as abstract_flg", false);
            $this->db->select("'sales' as data_type", false);
            $this->db->select("'1' as order_type", false);
			$this->db->select("credit_m.reconcile_status");
            
            // JOIN句作成
            $this->db->join(T_BILL_DATA." bill_c", "sales.sales_mng_id=bill_c.sales_mng_id", "LEFT");
            $this->db->join(T_BILL_MNG." bill_p", "bill_p.bill_mng_id=bill_c.bill_mng_id", "LEFT");
			$this->db->join(T_CREDIT_MNG." credit_m", "bill_p.bill_mng_id=credit_m.bill_mng_id", "LEFT");

            // WHERE句作成
            $this->db->where("sales.first_data_flg = ".FLG_OFF);
            $this->db->where("sales.credit_type <> ".CREDIT_TYPE_BEFORE);
            if(!empty($where)) {
                $str = str_replace("#COLUM_NAME#", "book_date", $where);
                $str = str_replace("#PREFIX#", "sales", $str);
                $this->db->where($str);
            }
            
            // ORDER句の設定
            $this->db->order_by("sales.book_date", "asc");
            $this->db->order_by("bill_p.bill_no", "asc");
            
            return $this->select();
            
        }
        
    /**
	 * 一覧の絞込条件を作成する
	 *
	 * @access private
	 * @param $where string
	 * @return string
	 */
        private function get_before_data($where)
        {
            
            // テーブル設定
            $this->m_tbl_name = T_SALES_MNG;
            
            // Prefix 設定
            $this->m_prefix = "sales";
            
            $this->db->select("sales.bill_date as target_date");
            $this->db->select("date_format(sales.bill_date, \"%Y/%m\") as target_month", false);
            $this->db->select("bill_p.bill_no");
            $this->db->select("sales.abstract_name");	
            $this->db->select("sales.sum_money as sales_money");
            $this->db->select("'' as credit_money", false);
            $this->db->select("'0' as abstract_flg", false);
            $this->db->select("'sales' as data_type", false);
            $this->db->select("'1' as order_type", false);
			$this->db->select("credit_m.reconcile_status");
            
            // JOIN句作成
            $this->db->join(T_BILL_DATA." bill_c", "sales.sales_mng_id=bill_c.sales_mng_id", "LEFT");
            $this->db->join(T_BILL_MNG." bill_p", "bill_p.bill_mng_id=bill_c.bill_mng_id", "LEFT");
			$this->db->join(T_CREDIT_MNG." credit_m", "bill_p.bill_mng_id=credit_m.bill_mng_id", "LEFT");
            
            // WHERE句作成
            $this->db->where("sales.first_data_flg = ".FLG_OFF);
            $this->db->where("sales.credit_type = ".CREDIT_TYPE_BEFORE);
            if(!empty($where)) {
                $str = str_replace("#COLUM_NAME#", "sales.bill_date", $where);
                $str = str_replace("#PREFIX#", "sales", $str);
                $this->db->where($str);
            }
            
            // ORDER句の設定
            $this->db->order_by("sales.book_date", "asc");
            $this->db->order_by("bill_p.bill_no", "asc");
            
            return $this->select();
            
        }
        
        
    /**
	 * 一覧の絞込条件を作成する
	 *
	 * @access private
	 * @param $where string
	 * @return string
	 */
        private function get_receive_data($where)
        {
            
            // テーブル設定
            $this->m_tbl_name = T_CREDIT_RECIEVED;
            
            // Prefix 設定
            $this->m_prefix = "received_p";
            
            $this->db->select("received_p.credit_date as target_date");
            $this->db->select("date_format(received_p.credit_date, \"%Y/%m\") as target_month", false);
            $this->db->select("'' as bill_no", false);
            $this->db->select("'仮受金' as abstract_name", false);	
            $this->db->select("'' as sales_money", false);
            $this->db->select("received_p.balance_money as credit_money");
            $this->db->select("'1' as abstract_flg", false);
            $this->db->select("'received' as data_type", false);
            $this->db->select("'2' as order_type", false);
            
            // WHERE句作成
            $this->db->where("balance_money != 0");
            if(!empty($where)) {
                $str = str_replace("#COLUM_NAME#", "credit_date", $where);
                $str = str_replace("#PREFIX#", "received_p", $str);
                $this->db->where($str);
            }
            
            // ORDER句の設定
            $this->db->order_by("received_p.credit_date", "asc");
            
            return $this->select();
            
        }
        
    /**
	 * 一覧の絞込条件を作成する
	 *
	 * @access private
	 * @param $where string
	 * @return string
	 */
        private function get_adjust_data($where)
        {
            
            // テーブル設定
            $this->m_tbl_name = T_CREDIT_RECIEVED_ADJUST;
            
            // Prefix 設定
            $this->m_prefix = "credit_c";
            
            $this->db->select("credit_c.adjust_date as target_date");
            $this->db->select("date_format(credit_c.adjust_date, \"%Y/%m\") as target_month", false);
            $this->db->select("'' as bill_no", false);
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_RECONCILE_TYPE_ALL."' AND item_cd=credit_c.adjust_type) as abstract_name");
            $this->db->select("( adjust_money * -1 ) as credit_money");
            $this->db->select("'' as sales_money", false);
            $this->db->select("'1' as abstract_flg", false);
            $this->db->select("'adjust' as data_type", false);
            $this->db->select("'3' as order_type", false);
            
            $this->db->join(T_CREDIT_RECIEVED." credit", "credit.credit_received_id=credit_c.credit_received_id");
            // WHERE句作成
            if(!empty($where)) {
                $str = str_replace("#COLUM_NAME#", "adjust_date", $where);
                $str = str_replace("#PREFIX#", "credit", $str);
                $this->db->where($str);
            }
            
            // ORDER句の設定
            $this->db->order_by("credit_c.adjust_date", "asc");
            
            return $this->select();
            
        }
        
    /**
	 * 一覧の絞込条件を作成する
	 *
	 * @access private
	 * @param $where string
	 * @return string
	 */
        private function get_reconcile_data($where)
        {
            
            // テーブル設定
            $this->m_tbl_name = T_CREDIT_DATA;
            
            // Prefix 設定
            $this->m_prefix = "credit_c";
            
            $this->db->select("credit_c.reconcile_date as target_date");
            $this->db->select("date_format(credit_c.reconcile_date, \"%Y/%m\") as target_month", false);
            $this->db->select("credit_p.bill_no as bill_no");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_RECONCILE_TYPE_ALL."' AND item_cd=credit_c.reconcile_type) as abstract_name");
            $this->db->select("CASE WHEN credit_c.reconcile_type='".RECONCILE_TYPE_URIAGE."' THEN credit_c.reconcile_money ELSE '' END as sales_money", false);
            $this->db->select("CASE WHEN credit_c.reconcile_type='".RECONCILE_TYPE_URIAGE."' THEN '' ELSE credit_c.reconcile_money END as credit_money", false);
            $this->db->select("'1' as abstract_flg", false);
            $this->db->select("'reconcile' as data_type", false);
            $this->db->select("'4' as order_type", false);
            
            // JOIN句作成
            $this->db->join(T_CREDIT_MNG." credit_p", "credit_c.credit_mng_id=credit_p.credit_mng_id", "LEFT");
            $this->db->join(T_BILL_MNG." bill", "bill.bill_mng_id=credit_p.bill_mng_id", "INNER");
            
            // WHERE句作成
            if(!empty($where)) {
                $str = str_replace("#COLUM_NAME#", "reconcile_date", $where);
                $str = str_replace("#PREFIX#", "bill", $str);
                $this->db->where($str);
            }
            
            // ORDER句の設定
            $this->db->order_by("credit_c.reconcile_date", "asc");
            
            return $this->select();
            
            
        }
        
        
    /**
	 * 一覧の絞込条件を作成する
	 *
	 * @access private
	 * @param $where string
	 * @return string
	 */
        private function get_first_data($where)
        {
            
            // テーブル設定
            $this->m_tbl_name = T_FIRST_MONEY_DATA;
            
            // Prefix 設定
            $this->m_prefix = "credit_c";
            
            $this->db->select("credit_c.reconcile_date as target_date");
            $this->db->select("date_format(credit_c.reconcile_date, \"%Y/%m\") as target_month", false);
            $this->db->select("'' as bill_no", false);
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_RECONCILE_TYPE_ALL."' AND item_cd=credit_c.reconcile_type) as abstract_name");
            $this->db->select("CASE WHEN credit_c.reconcile_type='".RECONCILE_TYPE_URIAGE."' THEN credit_c.reconcile_money ELSE '' END as sales_money", false);
            $this->db->select("CASE WHEN credit_c.reconcile_type='".RECONCILE_TYPE_URIAGE."' THEN '' ELSE credit_c.reconcile_money END as credit_money", false);
            $this->db->select("'1' as abstract_flg", false);
            $this->db->select("'first' as data_type", false);
            $this->db->select("'5' as order_type", false);
            
            // JOIN句作成
            $this->db->join(T_FIRST_MONEY_MNG." credit_p", "credit_c.first_mng_id=credit_p.first_mng_id", "LEFT");
            
            // WHERE句作成
            if(!empty($where)) {
                $str = str_replace("#COLUM_NAME#", "reconcile_date", $where);
                $str = str_replace("#PREFIX#", "credit_p", $str);
                $this->db->where($str);
            }
            
            // ORDER句の設定
            $this->db->order_by("credit_c.reconcile_date", "asc");
            
            return $this->select();
            
            
        }
        
        
    /**
	 * 一覧の絞込条件を作成する
	 *
	 * @access private
	 * @param $session array
	 * @return string
	 */
	public function create_search_condition($session = array())
	{
		$condition = array();
                
                if(count($session) == 0) {
                    $data = $this->get_input_condition();
                } else {
                    $data = $session;
                }

                // 期間
                if(!empty($data['target_date_from'])) {
                    $condition[] = "date_format(#COLUM_NAME#, '%Y/%m/%d') >= ".$this->db->escape($data['target_date_from']);
                }
                if(!empty($data['target_date_to'])) {
                    $condition[] = "date_format(#COLUM_NAME#, '%Y/%m/%d') <= ".$this->db->escape($data['target_date_to']);
                }
                
                // 得意先
                if(!empty($data['customer_disp_name'])) {
                    $condition[] = "(#PREFIX#.customer_disp_name='".$this->db->escape_str($data['customer_disp_name'])."')";
                }
                
                // 検索条件返却
                if(count($condition) > 0) {
                    return implode(' and ', $condition);
                } else {
                    
                }

	}
        
    /**
	 * 得意先情報を取得
	 *
	 * @access	public
	 * @return	array
	 */
        public function get_balance_data()
        {
            
            // テーブル設定
            $this->m_tbl_name = T_BALANCE_MNG;
            
            // Prefix 設定
            $this->m_prefix = "mng";
            
            $this->db->select("date_format(mng.last_date_time, \"%Y/%m/%d\") as target_date", false);
            $this->db->select("concat(substring(target_month, 1, 4), \"/\", substring(target_month, 5, 2)) as target_month", false);
            $this->db->select("null as bill_no");
            $this->db->select("'【繰越残高】' as abstract_name");
            $this->db->select("balance_money as sales_money", false);
            $this->db->select("'' as credit_money", false);
            $this->db->select("'0' as abstract_flg", false);
            $this->db->select("'balance' as data_type", false);
            $this->db->select("'5' as order_type", false);
            
            // JOIN句作成
            $this->db->join(T_CREDIT_MNG." credit_p", "credit_c.credit_mng_id=credit_p.credit_mng_id", "LEFT");
            $this->db->join(T_BILL_MNG." bill", "bill.bill_mng_id=credit_p.bill_mng_id", "INNER");
            
            // WHERE句作成
            if(!empty($where)) {
                $str = str_replace("#COLUM_NAME#", "target_month", $where);
                $str = str_replace("#PREFIX#", "mng", $str);
                $this->db->where($str);
            }
            
            // ORDER句の設定
            $this->db->order_by("credit_c.reconcile_date", "asc");
            
            return $this->select();
            
        }
        
    /**
	 * 得意先情報を取得
	 *
	 * @access	public
	 * @return	array
	 */
        public function get_customer_info()
        {
            
            // テーブル設定
            $this->m_tbl_name = M_CUSTOMER;
            
            // Prefix 設定
            $this->m_prefix = "credit_c";
            
            $this->db->select("credit_c.reconcile_date as target_date");
            $this->db->select("credit_p.bill_no as bill_no");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_RECONCILE_TYPE_ALL."' AND item_cd=credit_c.reconcile_type) as abstract_name");
            $this->db->select("CASE WHEN credit_c.reconcile_type='".RECONCILE_TYPE_URIAGE."' THEN credit_c.reconcile_money ELSE '' END as sales_money", false);
            $this->db->select("CASE WHEN credit_c.reconcile_type='".RECONCILE_TYPE_URIAGE."' THEN '' ELSE credit_c.reconcile_money END as credit_money", false);
            $this->db->select("'1' as abstract_flg", false);
            $this->db->select("'reconcile' as data_type", false);
            
            // JOIN句作成
            $this->db->join(T_CREDIT_MNG." credit_p", "credit_c.credit_mng_id=credit_p.credit_mng_id", "LEFT");
            $this->db->join(T_BILL_MNG." bill", "bill.bill_mng_id=credit_p.bill_mng_id", "INNER");
            
            // WHERE句作成
            if(!empty($where)) {
                $str = str_replace("#COLUM_NAME#", "reconcile_date", $where);
                $str = str_replace("#PREFIX#", "bill", $str);
                $this->db->where($str);
            }
            
            // ORDER句の設定
            $this->db->order_by("credit_c.reconcile_date", "asc");
            
            return $this->select();
            
            
        }

        
        
    /**
	 * 一覧データ取得
	 *
	 * @access	public
	 * @param $search string
	 * @param $customer_info array
	 * @param $from string
	 * @return	array
	 */
        public function get_disp_data($search, $customer_info, $from="")
        {
            $res = array();
         
            if(empty($search)) return $res;
            
            // 売上データ取得(前受け以外)
            $sales = $this->get_sales_data($search);
            
            // 売上データ取得(前受け分)
            $before = $this->get_before_data($search);
            
            // 入金データ取得
            $receive = $this->get_receive_data($search);

            // 入金調整データ取得
            $adjust = $this->get_adjust_data($search);
            
            // 消込データ取得
            $reconcile = $this->get_reconcile_data($search);

            // 初期残高データ取得
            $first = $this->get_first_data($search);
            
            // 残高データ取得
            $merge = array_merge($sales, $before);
            $merge = array_merge($merge, $reconcile);
            $merge = array_merge($merge, $first);
            $merge = array_merge($merge, $adjust);
            $merge = array_merge($merge, $receive);
            
            // 全配列を日付順に並び替え
            usort($merge, array($this, 'compare_by_date'));
            
            $sales = 0;
            $credit = 0;
            
            // 対象日の繰越残高取得
            if(empty($from)) {
                $input = $this->get_input_condition();
                $date = $input['target_date_from'];
            } else {
                $date = $from;
            }
            
            $name = $customer_info->customer_disp_name;
            $balance_money = $this->get_bef_balance_data($date, $name);
            
            $receivable = $balance_money;
            
            
            foreach ($merge as $key => $value) {
                
                // 締日設定の得意先の場合、target_monthを編集する
                if(!empty($customer_info->cutoff_date)) {
                    
                    $date = $value->target_month."/".$customer_info->cutoff_date;
                    
                    if(slash_date($value->target_date) > $date) {
                        $value->target_month = date("Y/m", strtotime($value->target_month."/01"."1 month"));
                    }
                    
                }

                // 月が変わったフラグ
                $value->month_flg = false;
                if($this->chk_dup_data($merge, $key, "target_month")) {
                    if($key != 0) {
                        $value->month_flg = true;
                        
                        $value->disp_sales_total = money_sep($sales);               // 売上合計金額
                        $value->disp_credit_total = money_sep($credit);             // 消込合計金額
                        
                        $sales = 0;
                        $credit = 0;
                        
                    }
                }

                // 日付
                $value->disp_target_date = slash_date($value->target_date);

				// 請求書NO
				// 残高が残っている請求書は文字を赤文字に変更する
				if(property_exists($value, 'reconcile_status') && $value->reconcile_status <> CREDIT_STATUS_ON)
				{
					$value->disp_bill_no = get_anchor("/bill/bill_cutoff_print/bill_disp/".$value->bill_no."?win_type=win", $value->bill_no, array("target" => "_blank", "style"=>"color:#C0504D;"));
				} else {
					$value->disp_bill_no = get_anchor("/bill/bill_cutoff_print/bill_disp/".$value->bill_no."?win_type=win", $value->bill_no, array("target" => "_blank"));
				}

                $value->disp_sales_money = money_sep($value->sales_money);              // 売上金額
                
                if($value->abstract_flg == "1") {
                    $value->disp_abstract_name = "入金　(".$value->abstract_name.")";          // 摘要
                } else {
                    $value->disp_abstract_name = $value->abstract_name;
                }

                if($value->data_type == "adjust") {
                    $value->disp_credit_money = get_span_red(money_sep($value->credit_money));
                    $value->disp_receivable_money = "";     // 残額

	                $credit += $value->credit_money;

                } else {
                    $value->disp_credit_money = money_sep($value->credit_money);
                    
                    $sales += $value->sales_money;
                    $credit += $value->credit_money;
                    $receivable += $value->sales_money - $value->credit_money;

                    $value->disp_receivable_money = money_sep($receivable);     // 残額
                    
                }
                
            }
            
            // 月合計を最終行に挿入
            $ary = array();
            $ary[0] = new stdClass();
            $ary[0]->month_flg = true;
            $ary[0]->disp_sales_total = money_sep($sales);
            $ary[0]->disp_credit_total = money_sep($credit);

            array_splice($merge, count($merge), 0, $ary);
            
            // 繰越残高を配列に挿入
            $ary = array();
            $ary[0] = new stdClass();
            $ary[0]->target_month = substr($date, 0, 7);
            $ary[0]->disp_target_date = "";
            $ary[0]->month_flg = false;
            $ary[0]->disp_bill_no = "";
            $ary[0]->disp_sales_money = "";
            $ary[0]->disp_credit_money = "";
            $ary[0]->disp_abstract_name = "【前日までの繰越残高】";
            $ary[0]->disp_receivable_money = money_sep($balance_money);
            
            array_splice($merge, 0, 0, $ary);
            
            return $merge;
        }
        
    /**
	 * usortの自作関数
	 *
	 * @access private
	 * @param $a stdClass
	 * @param $b stdClass
	 * @return array
	 */
        function compare_by_date($a, $b) {
            
            $result = strcmp($a->target_date, $b->target_date);
            
            if($result == 0) {
                $result = strcmp($a->order_type, $b->order_type);
            }
            
            return $result;
        }
        
    /**
	 * 同じ得意先の件数を取得する
	 *
	 * @access private
	 * @param $data array
	 * @param $customer_info array
	 * @return array
	 */
        public function exec_print($data, $customer_info)
        {
            
            // PDFクラスロード
            $this->load->library('master_file_pdf');
            
            // PDF出力
            $this->master_file_pdf->display($data, $customer_info);
            
            
            
        }
 
}

/* End of file master_file_print_mdl.php */
/* Location: ./application/models/account/master_file_print_mdl.php */