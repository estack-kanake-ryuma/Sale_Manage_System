<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Receivable_confirm_mdl extends MY_Model {
    
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
	 * 売上管理テーブル取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_disp_data($id)
        {
            $res = array();
            
            $data = $this->get_bill_data($id);
            
            $sales = $this->get_sales_data($id);
            
            $i=0;
            foreach ($data as $value) {
                
                $res['bill_no'] = $value->bill_no;
                $res['bill_date'] = slash_date($value->bill_date);
                $res['bill_money'] = money_sep($value->bill_money);
                $res['customer_disp_name'] = $value->customer_disp_name;
                $res['balance_money'] = money_sep($value->balance_money);
                $res['reconcile_info'][$i]['reconcile_money'] = money_sep($value->reconcile_money);
                $res['reconcile_info'][$i]['reconcile_type_name'] = $value->reconcile_type_name;
                $res['reconcile_info'][$i]['reconcile_date'] = slash_date($value->reconcile_date);
                
                $i++;
            }
            
            foreach ($sales as $key => $value) {
                $res['sales_info'][$key]['book_date'] = slash_date($value->book_date);
                $res['sales_info'][$key]['institute_name'] = $value->institute_name;
                $res['sales_info'][$key]['depart_name'] = $value->depart_name;
                $res['sales_info'][$key]['handler_name'] = $value->handler_name;
                $res['sales_info'][$key]['abstract_name'] = $value->abstract_name;
                $res['sales_info'][$key]['sum_tax'] = money_sep($value->sum_tax);
                $res['sales_info'][$key]['sum_money'] = money_sep($value->sum_money);
                
            }
            
            return $res;
        }

        /**
	 * 売上テーブル取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_bill_data($id)
        {
            // テーブル設定
            $this->m_tbl_name = T_BILL_MNG;
            $this->m_prefix = "bill";
            
            $this->db->select("bill.bill_mng_id");
            $this->db->select("bill.bill_no");
            $this->db->select("bill.bill_date");
            $this->db->select("bill.bill_money");
            $this->db->select("bill.customer_disp_name");
            $this->db->select("credit_p.sum_balance_money as balance_money");
            $this->db->select("credit_c.reconcile_money");
            $this->db->select("credit_c.reconcile_type");
            $this->db->select("credit_c.reconcile_date");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_RECONCILE_TYPE_ALL."' AND item_cd=reconcile_type) as reconcile_type_name ");
            
            // JOIN句作成
            $this->db->join(T_CREDIT_MNG. " credit_p", "bill.bill_mng_id=credit_p.bill_mng_id", "LEFT");
            $this->db->join(T_CREDIT_DATA. " credit_c", "credit_p.credit_mng_id=credit_c.credit_mng_id", "LEFT");
            
            // WHERE句作成
            $this->db->where("bill.bill_mng_id in (".$id.")");
            
            return $this->select();
            
        }
        
        /**
	 * 売上テーブル取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_sales_data($id)
        {
            // テーブル設定
            $this->m_tbl_name = T_BILL_MNG;
            $this->m_prefix = "bill_p";
            
            $this->db->select("sales.book_date");
            $this->db->select("sales.institute_name");
            $this->db->select("sales.depart_name");
            $this->db->select("sales.handler_name");
            $this->db->select("sales.abstract_name");
            $this->db->select("sales.sum_tax");
            $this->db->select("sales.sum_money");
            
            // JOIN句作成
            $this->db->join(T_BILL_DATA. " bill_c", "bill_p.bill_mng_id=bill_c.bill_mng_id", "LEFT");
            $this->db->join(T_SALES_MNG. " sales", "bill_c.sales_mng_id=sales.sales_mng_id", "LEFT");
            
            // WHERE句作成
            $this->db->where("bill_p.bill_mng_id in (".$id.")");
            
            return $this->select();
            
        }
        
        
}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */