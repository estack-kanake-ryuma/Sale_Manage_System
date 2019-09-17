<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_data_mdl extends MY_Model {

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
	 * ローカルメニューの取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_local_menu($group)
	{
            
            $info = $this->session->userdata(SS_KEY_LOGIN);
            $where = array('data.group_cd'=>$group, 'page.menu_flg'=>FLG_OFF, 'auth.auth_level'=>$info[SS_KEY_AUTH_CD]);
            
            $this->db->select("data.group_cd");
            $this->db->select("data.menu_cd");
            $this->db->select("data.menu_name");
            $this->db->select("page.url");
            $this->db->from(M_SYS_MENU_DATA. " data");
            $this->db->join(M_SYS_PAGE_INFO. " page", 'data.group_cd = page.group_cd AND data.menu_cd = page.menu_cd', 'left');
            $this->db->join(M_SYS_PAGE_AUTH. " auth", 'page.page_cd = auth.page_cd', 'INNER');
            $this->db->where($where);
            
            $this->db->order_by('data.disp_no', 'asc');
            $query = $this->db->get();

            return $query->result();
	}

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */