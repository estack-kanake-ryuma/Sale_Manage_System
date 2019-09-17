<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * M_CUSTOMER Mdl
 *
 * 得意先マスタのモデル
 *
 * @link		http://www.datalyze.co.jp
 *
 */
class M_customer_mdl extends MY_Model {

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
	 * 得意先情報取得
	 *
	 * @access private
	 * @param  string $name
	 * @param  int $id
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_customer_info($name, $id=null) 
        {
			$this->db->select("customer_id");
            $this->db->select("customer_disp_name");
            $this->db->select("cutoff_date");
            $this->db->select("card_print_type");
            $this->db->select("customer_id as id");
            $this->db->select("credit_type");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_CREDIT_TYPE."' AND item_cd=credit_type) as credit_type_name ");
            $this->db->select("customer_type");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_CUSTOMER_TYPE."' AND item_cd=customer_type) as customer_type_name ");
            
            if(empty($id)) {
                $this->db->where(array("customer_disp_name" =>$name));
            } else {
                $this->db->where(array("customer_id" =>$id));
            }
            
            $this->m_tbl_name = M_CUSTOMER;
            
            return $this->select();
            
        }
        


}

/* End of file m_customer_mdl.php */
/* Location: ./application/model/db/m_customer_mdl.php */