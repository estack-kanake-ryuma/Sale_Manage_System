<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Outside receive manage Controller
 *
 * 受注システム取込管理画面のコントローラー
 *
 * @property Outside_receive_manage_mdl $outside_receive_manage_mdl
 */
class Outside_receive_manage extends MY_Controller
{
    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage controllers
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin/outside_receive_manage_mdl");
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
     * @throws Exception
     */
    public function index()
    {
        // エラー情報を取得する
        $list = $this->outside_receive_manage_mdl->select_error_list();
        $display_list = $this->outside_receive_manage_mdl->generate_display_list($list);

        if (count($_POST) > 0) {
        }

        // view読み込み
        $this->load->view('admin/outside_receive_manage', array('display_list' => $display_list));
    }
}

/* End of file outside_receive_manage.php */
/* Location: ./application/controllers/admin/outside_receive_manage.php */