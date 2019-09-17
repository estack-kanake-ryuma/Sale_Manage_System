<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ログアウトのコントローラー
 *
 * @author    Kita Yasuhiro
 * @link      http://www.datalyze.co.jp
 * @property  CI_Loader $load
 * @property  CI_Session $session
 */
class Logout extends MY_Controller
{

    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage controllers
     * @author    Kita Yasuhiro
     * @link    http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
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
        $this->session->sess_destroy();
        redirect("/", 'refresh');
    }

}

/* End of file logout.php */
/* Location: ./application/controllers/logout.php */