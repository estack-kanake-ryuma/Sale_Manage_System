<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Receivable_confirm_other Controller
 *
 * 売掛詳細確認コントローラ
 *
 * @author        Kita Yasuhiro
 * @link        http://www.datalyze.co.jp
 * @property receivable_confirm_mdl $receivable_confirm_mdl
 */
class Receivable_confirm_other extends MY_Controller
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
        $this->load->model("other/receivable_confirm_mdl");
        $this->title = "消込状況確認　－　売掛金管理システム";
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

        // 変更するIDを取得
        $id = $this->input->get('id');

        $data['list_data'] = $this->receivable_confirm_mdl->get_disp_data($id);


        $this->load->view('other/receivable_confirm_other', $data);
    }

}

/* End of file receivable_confirm_other.php */
/* Location: ./application/controllers/other/receivable_confirm_other.php */