<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Receivable_mdl
 *
 * @property General_name_mdl $general_name_mdl
 */
class Receivable_mdl extends Credit_common_mdl {

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
	 * マスタデータ取得処理
	 *
	 * @access public
	 * @return array
	 * @author Kita Yasuhiro
	 */
	public function get_mst_data()
	{
            $data = array();
                
            // 得意先区分
            $data['customer_type'] = $this->general_name_mdl->get_customer_type();

            return $data;
            
	}
        
    /**
	 * 表示用データ取得
	 *
	 * @access public
     * @param  $total int
     * @param  $a_total int
	 * @return array
	 * @author Kita Yasuhiro
	 */
       public function get_list_data(&$total, &$a_total)
        {
           
           $input = $this->get_input_condition();
           
           if(!isset($input['date_from'])) return array();
           if(!isset($input['date_to'])) return array();
           
           $data = $this->_get_target_data();
           
           $res_total = $this->_get_target_data("cnt");
           $total = count($res_total) == 0 ? 0 : $res_total[0]->cnt;
           
           $res = array();
           // データを編集
           $i = 0;
           foreach ($data as $value) {
               
               $res[$i]['customer_disp_name'] = $value->customer_disp_name;
               $res[$i]['sales_money'] = $value->target_sales_money;
               $res[$i]['disp_sales_money'] = money_sep($value->target_sales_money);
               $res[$i]['credit_money'] = $value->target_reconcile_money;
               $res[$i]['disp_credit_money'] = money_sep($value->target_reconcile_money);
               $res[$i]['balance_money'] = $value->pickup_money;
               $res[$i]['disp_balance_money'] = money_sep($value->pickup_money);
               $res[$i]['now_balance_money'] = ($value->pickup_money + $value->target_sales_money) - $value->target_reconcile_money;
               $res[$i]['disp_now_balance_money'] = money_sep($res[$i]['now_balance_money']);
               $res[$i]['balance_credit'] = $value->pickup_money - $value->target_reconcile_money;
               $res[$i]['disp_balance_credit'] = money_sep($res[$i]['balance_credit']);
               
               $i++;
           }
           
           // 合計を設定
           $res_sum = $this->_get_target_data("sum");
           
           $a_total['balance_money'] = $res_sum[0]->pickup_money;
           $a_total['sales_money'] = $res_sum[0]->target_sales_money;
           $a_total['credit_money'] = $res_sum[0]->target_reconcile_money;
           $a_total['now_balance_money'] = $res_sum[0]->pickup_money + $res_sum[0]->target_sales_money - $res_sum[0]->target_reconcile_money;
           $a_total['balance_credit'] = $res_sum[0]->pickup_money - $res_sum[0]->target_reconcile_money;
           
           return $res;
           
        }
        
    /**
	 * csv出力用データ取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
       public function get_csv_data()
        {
           
           $input = $this->get_input_condition();
           
           if(!isset($input['date_from'])) return array();
           if(!isset($input['date_to'])) return array();
           
           $data = $this->_get_target_data("csv");
           
           $csv_ary = array();
           // データを編集
           $i = 0;
           foreach ($data as $value) {
               
               $csv_ary[$i]['customer_disp_name'] = $value->customer_disp_name;
               $csv_ary[$i]['balance_money'] = $value->pickup_money;
               $csv_ary[$i]['sales_money'] = $value->target_sales_money;
               $csv_ary[$i]['credit_money'] = $value->target_reconcile_money;
               $csv_ary[$i]['now_balance_money'] = $value->pickup_money + $value->target_sales_money - $value->target_reconcile_money;
               $csv_ary[$i]['balance_credit'] = $value->pickup_money - $value->target_reconcile_money;
               $i++;
           }
           
           $this->load->helper("csv_helper");
           $csv = make_csv_data($csv_ary);
           
           return $csv;
           
        }
        
	/**
	 * DBから取得した配列を検索する
	 *
     * @param $search_ary array
     * @param $value string
     * @return string
	 * @link	http://www.datalyze.co.jp
	 */
        public function val_search($search_ary, $value)
        {
            foreach($search_ary as $key => $data) {
                if ($data['customer_disp_name'] == $value) {
                    return $key;
                }
            }
            
            return false;
            
        }
        
	/**
	 * 対象のデータを取得
	 *
     * @param $type string
     * @return array
	 * @link	http://www.datalyze.co.jp
	 */
        private function _get_target_data($type="")
        {
            
            $input = $this->get_input_condition();
            
            // 直近の繰越日付を編集
            $balance_from = date("Ym", strtotime($input['date_from']."-1 month"));
            $proc_month = $this->session->userdata(SS_KEY_PROC_MONTH);
            
            if($balance_from >= $proc_month) {
                $balance_from = date("Y/m/d", strtotime($proc_month."01"));
                $balance_from = date("Ym", strtotime($balance_from." -1 month"));
            }
            if($balance_from <= "201306") {
                $balance_from = "201306";
            }
            
            // 繰越月から指定された日付の前日までの期間を編集
            $from = date("Y/m/d", strtotime($balance_from."01"));
            $from = date("Y/m/d", strtotime($from."1 month"));
            $to = date("Y/m/d", strtotime($input['date_from']."-1 days"));
            
            $res = $this->get_db_data($balance_from, $from, $to, $type);
            
            return $res;
            
            
        }
        
	/**
	 * 対象のデータを取得
	 *
     * @param $month string
     * @param $from string
     * @param $to string
     * @param $type string
     * @return array
	 * @link	http://www.datalyze.co.jp
	 */
        private function get_db_data($month, $from, $to, $type="")
        {
            $input = $this->get_input_condition();
            $limit = "";
            
            if($type == "") {
                $start = $this->uri->segment(4);
                if($start == FALSE) $start = "0";
                $limit = " LIMIT ".$start.",".PER_PAGE_CNT;
            }
            
            $sql = " SELECT ";
            if($type == "cnt") {
                $sql .= " count(*) as cnt ";
            } else if($type == "sum") {
                $sql .= "  sum(balance_money + sales_money - reconcile_money) as pickup_money ";
                $sql .= " , sum(case when target_sales_money is null then 0 else target_sales_money end) as target_sales_money ";
                $sql .= " , sum(case when target_reconcile_money is null then 0 else target_reconcile_money end) as target_reconcile_money ";
            } else {
                $sql .= " tbl.customer_id ";
                $sql .= " , tbl.customer_disp_name ";
                $sql .= " , tbl.customer_furi ";
                $sql .= " , tbl.customer_type ";
                $sql .= " , balance_money + sales_money - reconcile_money as pickup_money ";
                $sql .= " , case when target_sales_money is null then 0 else target_sales_money end as target_sales_money ";
                $sql .= " , case when target_reconcile_money is null then 0 else target_reconcile_money end as target_reconcile_money ";
            }
            $sql .= " FROM ";
            $sql .= " ( ";
            $sql .= "   SELECT ";
            $sql .= "    customer.customer_id  ";
            $sql .= "    ,customer.customer_disp_name  ";
            $sql .= "    , customer.customer_furi  ";
            $sql .= "    ,customer.customer_type  ";
            $sql .= "    ,case when balance_money is null THEN 0 ELSE balance_money END as balance_money ";
            $sql .= "    ,case when sales_money is null THEN 0 ELSE sales_money END as sales_money ";
            $sql .= "    ,case when reconcile_money is null THEN 0 ELSE reconcile_money END  as reconcile_money ";
            $sql .= "   FROM ( SELECT * FROM ".V_CUSTOMER_INFO." ORDER BY customer_furi asc ) as customer ";
            $sql .= " LEFT JOIN ";
            $sql .= " (".$this->_get_balance_sql($month).") as balance ";
            $sql .= " ON customer.customer_id=balance.customer_id AND customer.customer_disp_name=balance.customer_disp_name ";
            $sql .= " LEFT JOIN ";
            $sql .= " (".$this->_get_sales_sql($from, $to).") as sales ";
            $sql .= " ON customer.customer_id=sales.customer_id AND customer.customer_disp_name=sales.customer_disp_name ";
            $sql .= " LEFT JOIN ";
            $sql .= " (".$this->_get_reconcile_sql($from, $to).") as reconcile ";
            $sql .= " ON customer.customer_id=reconcile.customer_id AND customer.customer_disp_name=reconcile.customer_disp_name ";
            $sql .= " ) tbl";
            $sql .= " LEFT JOIN ";
            $sql .= " (".str_replace("as sales_money", "as target_sales_money", $this->_get_sales_sql($input['date_from'], $input['date_to'])).") as sales ";
            $sql .= " ON tbl.customer_id=sales.customer_id AND tbl.customer_disp_name=sales.customer_disp_name ";
            $sql .= " LEFT JOIN ";
            $sql .= " (".str_replace("as reconcile_money", "as target_reconcile_money", $this->_get_reconcile_sql($input['date_from'], $input['date_to'])).") as reconcile ";
            $sql .= " ON tbl.customer_id=reconcile.customer_id AND tbl.customer_disp_name=reconcile.customer_disp_name ";
            $sql .= " WHERE ";
            
           switch ($input['other_rb']) {
               case "1":   // 全て
                   $sql .= " (balance_money + sales_money - reconcile_money <> 0 OR target_sales_money <> 0 OR target_reconcile_money <> 0)";
                   break;
               case "2":   // 繰越残高がある得意先
                   $sql .= " (balance_money + sales_money - reconcile_money <> 0) ";
                   break;
               case "3":   // 指定期間に売掛金が発生した得意先を表示 
                   $sql .= " (target_sales_money <> 0) ";
                   break;
               case "4":   // 指定期間に消込を行った得意先を表示
                   $sql .= " (target_reconcile_money <> 0) ";
                   break;
               case "5":   // 残高が残っている得意先を表示 
                   $sql .= " ((balance_money + sales_money - reconcile_money) + target_sales_money - target_reconcile_money <> 0) ";
                   break;
           }
           
            if(!empty($input['customer_type'])) {
                $sql .= " AND tbl.customer_type = '".$input['customer_type']."'";
            }
            
            $sql .= " ORDER BY tbl.customer_furi asc, tbl.customer_disp_name ";
            $sql .= " ".$limit;
            
            $ret = $this->db->query($sql);
            $res = $ret->result();
            
            return $res;
            
        }
}

/* End of file receivable_mdl.php */
/* Location: ./application/model/credit/receivable_mdl.php */
