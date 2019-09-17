<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mainte_common_mdl extends MY_Model {

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
	 * 各部門取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_depart_data() {
        
            // テーブル設定
            $this->m_tbl_name = M_DEPART;
            
            // Prefix
            $this->m_prefix = "mng";
            
            $this->db->select("inst.institute_id");
            $this->db->select("inst.institute_name");	
            $this->db->select("mng.depart_id");
            $this->db->select("mng.depart_name");
            
            // JOIN句設定
            $this->db->join(M_DEPART_DATA." data", "mng.depart_id=data.depart_id", "LEFT");
            $this->db->join(M_INSTITUTE." inst", "inst.institute_id=data.institute_id", "LEFT");
            
            // ORDER句の設定
            $this->db->order_by("inst.institute_id", "asc");
            $this->db->order_by("mng.depart_id", "asc");
            
            return $this->select();
        }

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */