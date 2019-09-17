<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Login Controller
 *
 * ログインのコントローラー
 *
 * @author   Kita Yasuhiro
 * @link     http://www.datalyze.co.jp
 * @property Login_mdl $login_mdl
 * @property User_mdl $user_mdl
 * @property MY_Form_validation $form_validation
 * @property MY_Input $input
 * @property CI_Session $session
 */
class Login extends MY_Controller
{

    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage controllers
     * @author     Kita Yasuhiro
     * @link       http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_mdl');
        $this->load->model('db/user_mdl');
        $this->load->library('form_validation');
    }

    /*
     * ---------------------------------------------------------------------------
     * イベント
     * ---------------------------------------------------------------------------
     */

    /**
     * Indexページ処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function index()
    {
        if (count($_POST) > 0) {
            // ログイン処理
            if ($this->_exec_login() == true) {
                // トップページに遷移
                redirect('top');
            }
        }

        $this->load->view('login', null);
    }


    /*
     * ---------------------------------------------------------------------------
     * 個別メソッド
     * ---------------------------------------------------------------------------
     */

    /**
     * ログイン処理
     *
     * @access private
     * @return boolean
     * @author Kita Yasuhiro
     */
    private function _exec_login()
    {
        // 入力チェック
        if (!$this->form_validation->run()) {
            $this->form_validation->_field_data['password']['postdata'] = "";
            return false;
        }

        // ログイン情報をセッションに格納
        $this->_set_login_info();

        return true;
    }

    /**
     * ログイン情報をセッションに格納
     *
     * @access private
     * @return void
     * @author Kita Yasuhiro
     */
    private function _set_login_info()
    {
        // ユーザー情報取得
        $info = $this->user_mdl->get_user_info($this->input->post('login_id'), $this->input->post('password'));

        // システム処理月を取得
        $proc_info = $this->login_mdl->get_proc_month();

        // 配列作成
        $ss_info[SS_KEY_LOGIN][SS_KEY_USER_NAME] = $info[0]->user_name;
        $ss_info[SS_KEY_LOGIN][SS_KEY_AUTH_CD] = $info[0]->auth_cd;
        $ss_info[SS_KEY_LOGIN][SS_KEY_INSTITUTE_NAME] = $info[0]->institute_name;
        $ss_info[SS_KEY_LOGIN][SS_KEY_USER_ID] = $info[0]->user_id;
        $ss_info[SS_KEY_LOGIN][SS_KEY_LOGIN_FLG] = FLG_ON;
        $ss_info[SS_KEY_PROC_MONTH] = $proc_info[0]->proc_month;
        $ss_info[SS_KEY_PROC_REGIST_DATE] = $proc_info[0]->regist_date;

        $this->session->set_userdata($ss_info);
    }


    /*
     * ---------------------------------------------------------------------------
     * 個別入力チェック
     * ---------------------------------------------------------------------------
     */
    /**
     * ログインIDの入力チェック
     *
     * @access public
     * @return boolean
     * @author Kita Yasuhiro
     */
    public function check_login_id()
    {
        // ログインIDの存在チェック
        if ($this->login_mdl->exist_login_id() == false) {
            $this->form_validation->set_message('check_login_id', ERR_LOGIN_ID_EXIST);
            return false;
        }
        return true;
    }

    /**
     * ログイン情報の整合正チェック
     *
     * @access public
     * @return boolean
     * @author Kita Yasuhiro
     */
    public function check_login_right()
    {
        // ログインIDとパスワードの整合正チェック
        if (!empty($this->form_validation->_field_data['login_id']['error'])) {
            return true;
        }

        // ログインIDの存在チェック
        if ($this->login_mdl->check_right_login() == false) {
            $this->form_validation->set_message('check_login_right', ERR_LOGIN_COMMON);
            return false;
        }
        return true;
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */