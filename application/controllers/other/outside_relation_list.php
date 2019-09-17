<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Outside Relation List Controller
 *
 * 受注システム連携状態一覧のコントローラー
 *
 * @link        http://www.datalyze.co.jp
 * @property sales_mdl $sales_mdl
 */
class Outside_relation_list extends MY_Controller
{

    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage  controllers
     * @link    http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();

        // Load Model
        $this->load->model("bill/sales_mdl");

        $this->title = "受注システム連携状態一覧　－　売掛金管理システム";
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
        $data = array();

        // IDを取得
        $id = $this->input->get('id');

        // 一覧情報を取得
        $data['list_data'] = $this->_get_disp_list_data($id);

        $this->load->view('other/outside_relation_list', $data);
    }

    /**
     * 表示用一覧データを取得
     *
     * @access private
     * @param $id
     * @return array
     * @author MKURITA
     */
    private function _get_disp_list_data($id)
    {
        $list = $this->sales_mdl->get_outside_relation_list($id);
        return $list;
    }
}

/* End of file outside_relation_list.php */
/* Location: ./application/controllers/other/outside_relation_list.php */
