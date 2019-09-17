<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Migration report no Controller
 *
 * 報告書Noの移行コントローラー
 *
 * @property Migration_report_no_mdl $migration_report_no_mdl
 */
class Migration_report_no extends MY_Controller
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
        // CLI処理か判定 ブラウザからのアクセスは404エラー
        if (!$this->input->is_cli_request()) {
            show_404();
        }
        $this->load->model("admin/migration_report_no_mdl");
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
     */
    public function index()
    {
	set_time_limit(0);
        $message = $this->migration_report_no_mdl->execute();
        echo $message;
    }
}

/* End of file migration_report_no.php */
/* Location: ./application/controllers/admin/migration_report_no.php */