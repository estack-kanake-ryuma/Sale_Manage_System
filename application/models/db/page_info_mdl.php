<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_info_mdl extends CI_Model {

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
	 * 状態の取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function get_page_info($url)
	{
        	$this->db->select("page.group_cd");	
                $this->db->select("page.page_name");
		$this->db->select("page.tag_title");
                $this->db->select("page.js_file_name");
                $this->db->select("page.page_type");
                $this->db->from(M_SYS_PAGE_INFO. " page");
                $this->db->where(array('url' => $url));
                $query = $this->db->get();

		return $query->result();
	}
        
	/**
	 * URLと権限で件数を取得する
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_auth_url_cnt($url)
        {
            
            $this->db->select("count(*) as cnt");
            $this->db->from(M_SYS_PAGE_INFO. " page");
            $this->db->join(M_SYS_PAGE_AUTH. " auth", "page.page_cd=auth.page_cd", "INNER");
            
            $info = $this->session->userdata(SS_KEY_LOGIN);
            $this->db->where(array('url' => $url, 'auth.auth_level'=>$info[SS_KEY_AUTH_CD]));
            $query = $this->db->get();
            $result = $query->result();
            return intval($result[0]->cnt);
            
        }
                

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */