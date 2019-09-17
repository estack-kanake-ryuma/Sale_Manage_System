<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reconcile_mdl extends Credit_common_mdl {

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
	 * @return string
	 * @author Kita Yasuhiro
	 */
	public function create_search_condition()
	{
		$condition = array();
		$data = $this->get_input_condition();
                
        if (count($data) == 0) return;

        // 得意先名称
        if(!empty($data['customer_disp_name'])) {
            $condition[] = "(credit.customer_disp_name like '%".$this->db->escape_like_str($data['customer_disp_name'])
                                                ."%' or cus.customer_furi like '%".$this->db->escape_like_str($data['customer_disp_name'])."%')";
        }
        // 売上計上日
        if(!empty($data['date_from'])) {
            $condition[] = "date_format(credit.reconcile_date, '%Y/%m/%d') >= ".$this->db->escape($data['date_from']);
        }
        if(!empty($data['date_to'])) {
            $condition[] = "date_format(credit.reconcile_date, '%Y/%m/%d') <= ".$this->db->escape($data['date_to']);
        }

        // 検索条件返却
        if(count($condition) > 0) {
            return implode(' and ', $condition);
        } else {
            return "";
        }
                
	}
        
    /**
	 * 表示用データ取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
       public function get_list_data($where)
        {
           
           if(empty($where)) return array();
           
           $customer_where = $this->get_customer_where($where);

           
           if(empty($customer_where)) return array();
           
           $data = $this->get_reconcile_data($where, $customer_where);
           
           $i = 0;
           $res = array();
           foreach ($data as $key => $value) {
               
               if($this->chk_dup_data($data, $key, "customer_disp_name")) {
                   $this->init_disp_array($res, $i);
               } else {
                   $i--;
               }
               
               $res[$i]['customer_disp_name'] = $value->customer_disp_name;
               $res[$i]['total'] = erase_money_sep($res[$i]['total']);
               $res[$i]['total'] = $res[$i]['total'] + $value->reconcile_money;
               $res[$i]['total'] = money_sep($res[$i]['total']);
               $this->set_target_data($value, $res, $i);
               
               $i++;
               
           }
           
           return $res;
           
        }
        
    /**
	 * 表示用データ取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
       public function get_list_total_data($where)
        {
           
           if(empty($where)) return array();
           
           $data = $this->get_reconcile_total_data($where);
           
           $i = 0;
           $res = array();
           
           $this->init_disp_array($res, 0);
           foreach ($data as $key => $value) {
               
               //$res[$i]['total'] = erase_money_sep($res[$i]['total']);
               $res[$i]['total'] = $res[$i]['total'] + $value->reconcile_money;
               //$res[$i]['total'] = money_sep($res[$i]['total']);
               
               $this->set_target_data($value, $res, $i);
               
           }
           
           return $res[0];
           
        }
        
    /**
	 * 対象のデータをセットする
	 *
	 * @access	private
     * @param  $val string
     * @param  $res array
     * @param  $cnt int
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function set_target_data($val, &$res, $cnt)
        {
         
            switch ($val->reconcile_type) {
                case RECONCILE_TYPE_FURI:           return $res[$cnt]['furikomi'] = money_sep($val->reconcile_money);
                case RECONCILE_TYPE_FURI_TESU:      return $res[$cnt]['furikomi_tesu'] = money_sep($val->reconcile_money);
                case RECONCILE_TYPE_SETOFF:         return $res[$cnt]['sosai'] = money_sep($val->reconcile_money);
                case RECONCILE_TYPE_GENKIN:         return $res[$cnt]['genkin'] = money_sep($val->reconcile_money);
                case RECONCILE_TYPE_KOGITE:         return $res[$cnt]['kogite'] = money_sep($val->reconcile_money);
                case RECONCILE_TYPE_TEGATA:         return $res[$cnt]['tegata'] = money_sep($val->reconcile_money);
                case RECONCILE_TYPE_ZSITU:          return $res[$cnt]['zsonsitu'] = money_sep($val->reconcile_money);
                case RECONCILE_TYPE_OTHER:          return $res[$cnt]['sonota'] = money_sep($val->reconcile_money);
            }
        }
        
        
    /**
	 * 配列の初期化
	 *
	 * @access	public
     * @param  $res array
     * @param  $i int
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function init_disp_array(&$res, $i)
        {
            
            $res[$i]['customer_disp_name'] = "";
            $res[$i]['furikomi'] = "0";
            $res[$i]['furikomi_tesu'] = "0";
            $res[$i]['sosai'] = "0";
            $res[$i]['genkin'] = "0";
            $res[$i]['kogite'] = "0";
            $res[$i]['tegata'] = "0";
            $res[$i]['zsonsitu'] = "0";
            $res[$i]['sonota'] = "0";
            $res[$i]['total'] = "0";
            
        }
        
        /**
	 * 表示用データ取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_reconcile_data($where, $customer)
        {
            
            // テーブル設定
            $this->m_tbl_name = V_CREDIT_ALL;
            
            $this->m_prefix = "credit";
            
            $this->db->select("credit.customer_id");
            $this->db->select("credit.customer_disp_name");
            $this->db->select("credit.sum_credit_money");
            $this->db->select("credit.sum_balance_money");
            $this->db->select("sum(credit.reconcile_money) as reconcile_money");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_RECONCILE_TYPE_ALL."' AND item_cd=credit.reconcile_type) as reconcile_name ");
            $this->db->select("credit.reconcile_type");
            
            // GROUP句作成
            $this->db->group_by("credit.customer_id, credit.customer_disp_name, credit.reconcile_type");
            
            $this->db->join(M_CUSTOMER." cus ", "credit.customer_id=cus.customer_id", "LEFT");
            
            // WHERE句作成
            $this->db->where("credit.customer_disp_name in (".$customer.")");
            if(!empty($where)) {
                $this->db->where($where);
            }
            $this->db->order_by("cus.customer_furi is null asc");
            $this->db->order_by("cus.customer_furi asc");
            
            return $this->select(null);
            
        }
        
        /**
	 * 表示用データ取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_reconcile_total_data($where)
        {
            
            // テーブル設定
            $this->m_tbl_name = V_CREDIT_ALL;
            
            $this->m_prefix = "credit";
            
            $this->db->select("credit.sum_credit_money");
            $this->db->select("credit.sum_balance_money");
            $this->db->select("sum(credit.reconcile_money) as reconcile_money");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_RECONCILE_TYPE_ALL."' AND item_cd=credit.reconcile_type) as reconcile_name ");
            $this->db->select("credit.reconcile_type");
            
            // GROUP句作成
            $this->db->group_by("credit.reconcile_type");
            
            // JOIN句作成
            $this->db->join(M_CUSTOMER." cus ", "credit.customer_id=cus.customer_id", "LEFT");
            
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            return $this->select(null);
            
        }
        
    /**
	 * 表示用データ取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_total_cnt($where)
        {
            
           if(empty($where)) return 0;
            
            // テーブル設定
            $this->m_tbl_name = V_CREDIT_ALL;
            
            $this->m_prefix = "credit";
            
            $this->db->select("credit.customer_disp_name");
            
            // JOIN句作成
            $this->db->join(M_CUSTOMER." cus ", "credit.customer_id=cus.customer_id", "LEFT");
            
            // GROUP句作成
            $this->db->group_by("credit.customer_id, credit.customer_disp_name");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            $result = $this->select(null);
            
            return intval(count($result));
            
            
        }
        

    /**
	 * 月齢表一覧データ取得
	 *
	 * @access	public
     * @param  string $where
     * @param  int $start
     *
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_customer($where, $start=0) 
        {
            
            // テーブル設定
            $this->m_tbl_name = V_CREDIT_ALL;
            
            $this->m_prefix = "credit";
            
            $this->db->select("credit.customer_disp_name");	
            
            // JOIN句作成
            $this->db->join(M_CUSTOMER." cus ", "credit.customer_id=cus.customer_id", "LEFT");
            
            // GROUP句作成
            $this->db->group_by("credit.customer_id, credit.customer_disp_name");
            
            // WHERE句作成
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // ORDER句の設定
            $this->db->order_by("cus.customer_furi is null", "asc");
            $this->db->order_by("cus.customer_furi", "asc");
            
            $this->db->limit(PER_PAGE_CNT, $start);
            
            return $this->select(null);
            
            
        }
        
    /**
	 * 必要な得意先条件を取得する
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        private function get_customer_where($search)
        {
            
            $start = $this->uri->segment(4);
            
            $customer_list = $this->get_list_customer($search, $start);
            
            if(count($customer_list) == 0) return array();
            
            $ary = array();
            foreach ($customer_list as $key => $value) {
                $ary[] = "'".$this->db->escape_str($value->customer_disp_name)."'";
            }
            return implode(',', $ary);
        }
}

/* End of file reconcile_mdl.php */
/* Location: ./application/models/credit/reconcile_mdl.php */
