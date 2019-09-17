<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_mdl extends CI_Model {

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
	 * ログインIDの存在チェック
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function exist_login_id() {
            
            $data = $this->input->post();
            
            if(empty($data['login_id'])) {
                return false;
            }
            
            if($this->user_mdl->exist_login_id($data['login_id']) <= 0) {
                return false;
            } 
            
            return true;
            
        }

        /**
	 * パスワードの存在チェック
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function check_right_login() {
            
            $data = $this->input->post();
            
            if(empty($data['login_id'])) {
                return false;
            }

            if(empty($data['password'])) {
                return false;
            }
            
            if($this->user_mdl->get_right_cnt($data['login_id'], $data['password']) <= 0) {
                return false;
            } 
            
            return true;
            
        }
        
	/**
	 * 処理月をDBから取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_proc_month()
        {
            
            $this->db->select('proc_month');
            $this->db->select('date_format(last_datetime, "%Y%m%d") as regist_date', false);
            $this->db->from(M_PROC_MONTH);
            $this->db->where("delete_flg", FLG_OFF);
            $query = $this->db->get();
            
            return $query->result();
            
        }
        

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */