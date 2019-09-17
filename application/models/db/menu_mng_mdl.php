<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_mng_mdl extends CI_Model {

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
	 * タブのメニューグループの取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_tab_menu() 
        {
            
            $this->db->select("mng.group_cd");
            $this->db->select("mng.image_name");
            $this->db->select("(null) as now_flg");
            $this->db->select("page.url");
            $this->db->from(M_SYS_MENU_MNG. " mng");
            $this->db->join(M_SYS_PAGE_INFO. " page", 'mng.group_cd = page.group_cd', 'left');
            $this->db->join(M_SYS_PAGE_AUTH. " auth", 'page.page_cd = auth.page_cd', 'inner');
            
            $info = $this->session->userdata(SS_KEY_LOGIN);
            
            $this->db->where(array('auth.home_flg'=>FLG_ON, 'auth.auth_level'=>$info[SS_KEY_AUTH_CD]));
            $query = $this->db->get();
            
            return $query->result();

            
        }

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */