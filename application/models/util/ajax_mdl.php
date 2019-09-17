<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_mdl extends MY_Model {

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
	 * 得意先名称リスト取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_customer_list($name) 
        {
            $search = "(customer_name like '%#SEARCH#%' or customer_furi like '%#SEARCH#%')";
            $search = str_replace("#SEARCH#", $this->db->escape_like_str($name), $search);
            
            $this->db->select("(customer_id) as id");
            $this->db->select("(customer_disp_name) as value");
            
            $this->db->where($search);
            
            $this->m_tbl_name = M_CUSTOMER;
            return $this->select();
            
        }
        
        /**
	 * 得意先名称リスト取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_official_customer_list($name) 
        {
            $search = "(customer_name like '%#SEARCH#%' or customer_furi like '%#SEARCH#%')";
            $search = str_replace("#SEARCH#", $this->db->escape_like_str($name), $search);
            
            $this->db->select("(customer_id) as id");
            $this->db->select("(customer_name) as value");
            
            $this->db->where($search);
            
            $this->db->order_by("customer_furi asc");
            $this->db->order_by("customer_name asc");
            
            $this->m_tbl_name = M_CUSTOMER;
            return $this->select();
            
        }
        
        /**
	 * 得意先名称リスト取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_customer_tran_list($name) 
        {
            $search = "(customer_disp_name like '%#SEARCH#%' or customer_furi like '%#SEARCH#%')";
            $search = str_replace("#SEARCH#", $this->db->escape_like_str($name), $search);

            $sql = " SELECT * FROM ( ";
            $sql .= "  SELECT customer_id as id, customer_disp_name as value, customer_furi ";
            $sql .= " FROM ".M_CUSTOMER;
            $sql .= " WHERE delete_flg=".FLG_OFF;
            $sql .= " AND ".$search;
            $sql .= " UNION ";
            $sql .= " SELECT DISTINCT mng.customer_id as id, mng.customer_disp_name as value, cus.customer_furi ";
            $sql .= " FROM ".T_SALES_MNG." mng ";
            $sql .= " LEFT JOIN ".M_CUSTOMER." cus ON mng.customer_id=cus.customer_id";
            $sql .= " WHERE  mng.delete_flg = ".FLG_OFF;
            $sql .= " AND  mng.first_data_flg = ".FLG_OFF;
            $sql .= " AND (mng.customer_disp_name like '%".$name."%')";
            $sql .= ") as tbl ";
            $sql .= " ORDER BY customer_furi asc, value";

            $ret = $this->db->query($sql);
            
            $res = $ret->result();

            return $res;
            
        }
        
        /**
	 * 担当者情報取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_handler_info($name) 
        {
            
            $this->db->select("hand.handler_id");
            $this->db->select("hand.institute_id");
            $this->db->select("inst.institute_name");
            $this->db->select("hand.depart_id");
            $this->db->select("depart.depart_name");
            
            $this->db->join(M_INSTITUTE." inst", "hand.institute_id=inst.institute_id", "LEFT");
            $this->db->join(M_DEPART." depart", "hand.depart_id=depart.depart_id", "LEFT");
            
            $this->db->where(array("handler_name" =>$name));
            
            $this->m_prefix = "hand";
            
            $this->m_tbl_name = M_HANDLER;
            
            return $this->select();
            
        }
        
        /**
	 * 担当者情報取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_goods_info($name) 
        {
            
            $this->db->select("tax_type");
            $this->db->select("unit");
            
            $this->db->where(array("goods_name" =>$name));
            
            $this->m_tbl_name = M_GOODS;
            
            return $this->select();
            
        }
        
        
        /**
	 * 日別件数情報
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_daily_cnt($date) 
        {
            
            // WHERE句作成
            $where = "date_format(ins_datetime, '%Y/%m/%d')='".$date."' AND delete_flg=0";
            
            $sql = " SELECT ";
            $sql .= " salse_cnt ";
            $sql .= " , bill_cnt ";
            $sql .= " FROM ";
            $sql .= "(";
            $sql .= " SELECT ";
            $sql .= "  count(sales_mng_id) as salse_cnt ";
            $sql .= " FROM ".T_SALES_MNG;
            $sql .= "  WHERE ".$where." ";
            $sql .= ") as salse ";
            $sql .= ",";
            $sql .= "(";
            $sql .= " SELECT ";
            $sql .= "  count(bill_mng_id) as bill_cnt ";
            $sql .= " FROM ".T_BILL_MNG;
            $sql .= "  WHERE ".$where." ";
            $sql .= ") as bill";
            
           $ret = $this->db->query($sql);
           $res = $ret->result();
           
           return $res;
            
        }
        
        
        /**
	 * 品名リスト取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_goods_list($name) 
        {
            
            $search = "(goods_name like '%#SEARCH#%' or goods_furi like '%#SEARCH#%')";
            $search = str_replace("#SEARCH#", $this->db->escape_like_str($name), $search);
            
            $this->db->select("(goods_id) as id");
            $this->db->select("(goods_name) as value");
            
            $this->db->where($search);
            
            $this->m_tbl_name = M_GOODS;
            return $this->select();
            
        }
        
        /**
	 * メモリスト取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_memo_list($name) 
        {
            
            $search = "(fix_memo like '%#SEARCH#%')";
            $search = str_replace("#SEARCH#", $this->db->escape_like_str($name), $search);
            
            $this->db->select("(fix_memo_id) as id");
            $this->db->select("(fix_memo) as value");
            
            $this->db->where($search);
            
            $this->m_tbl_name = M_FIX_MEMO;
            return $this->select();
            
        }
        
        /**
	 * 担当者リスト取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_handler_list($name) 
        {
            
            $search = "(handler_name like '%#SEARCH#%' or handler_furi like '%#SEARCH#%')";
            $search = str_replace("#SEARCH#", $this->db->escape_like_str($name), $search);
            
            $this->db->select("(handler_id) as id");
            $this->db->select("(handler_name) as value");
            $this->db->select("institute_id");
            $this->db->select("depart_id");
            
            $this->db->where($search);
            
            $this->m_tbl_name = M_HANDLER;
            return $this->select();
            
        }

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */