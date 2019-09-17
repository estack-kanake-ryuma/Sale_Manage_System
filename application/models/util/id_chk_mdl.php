<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Id_chk_mdl extends CI_Model {

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
        public function get_id_cnt($id) 
        {
            
            if(!is_numeric($id)) return 0;
            
            $tbl_info = $this->get_colum_id();
            
            $this->db->select("count(*) as cnt");
            $this->db->from($tbl_info["tbl"]);
            $this->db->where($tbl_info["colum"], $id);
            $query = $this->db->get();
            $result = $query->result();
            
            return intval($result[0]->cnt);
            
        }
        
        private function get_colum_id()
        {
            
            $class = $this->router->class;
            switch ($class) {
                case "sales_input":     return array("tbl" => T_SALES_MNG, "colum"=>"sales_mng_id");
                case "customer_input":  return array("tbl" => M_CUSTOMER, "colum"=>"customer_id");
                case "goods_input":     return array("tbl" => M_GOODS, "colum"=>"goods_id");
                case "depart_input":    return array("tbl" => M_DEPART, "colum"=>"depart_id");
                case "institute_input":    return array("tbl" => M_INSTITUTE, "colum"=>"institute_id");
                case "handler_input":   return array("tbl" => M_HANDLER, "colum"=>"handler_id");
                case "abstract_input":  return array("tbl" => M_ABSTRACT, "colum"=>"abstract_id");
                case "bank_input":      return array("tbl" => M_BANK, "colum"=>"bank_id");
                case "fix_memo_input":  return array("tbl" => M_FIX_MEMO, "colum"=>"fix_memo_id");
                case "user_input":      return array("tbl" => M_USER, "colum"=>"user_id");
            }
            
        }
        

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */