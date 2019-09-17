<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class User_mdl
 *
 * @property CI_DB_active_record $db
 */
class User_mdl extends CI_Model
{

    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage    model/db
     * @author        Kita Yasuhiro
     * @link        http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 渡されたログインIDのカウントを調べる
     *
     * @access    public
     * @param     $login_id int
     * @return    int
     * @author    Kita Yasuhiro
     */
    public function exist_login_id($login_id)
    {
        $where = array('delete_flg' => FLG_OFF, 'login_id' => $login_id);

        $this->db->select('count(login_id) as cnt');
        $this->db->from(M_USER);

        $this->db->where($where);
        $query = $this->db->get();

        $result = $query->result();

        return intval($result[0]->cnt);

    }

    /**
     * 渡されたログインIDとパスワードが合っているか調べる
     *
     * @access    public
     * @param     $login_id int
     * @param     $password string
     * @return    int
     * @author    Kita Yasuhiro
     */
    public function get_right_cnt($login_id, $password)
    {
        $where = array('delete_flg' => FLG_OFF, 'login_id' => $login_id, 'password' => $password);

        $this->db->select('count(login_id) as cnt');
        $this->db->from(M_USER);

        $this->db->where($where);
        $query = $this->db->get();

        $result = $query->result();

        return intval($result[0]->cnt);

    }

    /**
     * 渡されたログインIDとパスワードからユーザー情報を取得する
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_user_info($login_id, $password)
    {

        $where = array('user.delete_flg' => FLG_OFF, 'user.login_id' => $login_id, 'user.password' => $password);

        $this->db->select('user.user_id');
        $this->db->select('user.user_name');
        $this->db->select('user.auth_cd');
        $this->db->select('inst.institute_name');

        $this->db->from(M_USER . " user");
        $this->db->join(M_INSTITUTE . " inst", 'user.institute_id = inst.institute_id', 'left');
        $this->db->where($where);
        $query = $this->db->get();

        return $query->result();

    }

}

/* End of file user_mdl.php */
/* Location: ./application/model/db/user_mdl.php */