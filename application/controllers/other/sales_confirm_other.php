<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sales Confirm Controller
 *
 * 売上一覧のコントローラー
 *
 * @author        Kita Yasuhiro
 * @link        http://www.datalyze.co.jp
 * @property sales_confirm_mdl $sales_confirm_mdl
 * @property CI_Input $input
 * @property CI_Session $session
 */
class Sales_confirm_other extends MY_Controller
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
        $this->load->model("other/sales_confirm_mdl");
        $this->title = "売上確認　－　売掛金管理システム";
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

        $data['sales'] = $this->_get_sales_data($id);

        $this->load->view('other/sales_confirm_other', $data);
    }

    /**
     * move_list
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function move_list()
    {
        // 変更するIDを取得
        $id = $this->input->get('id');
        $session = array();

        $session[SS_KEY_SEARCH]['id'] = $id;
        $this->session->set_userdata("sales_list", $session);

        $this->body = 'onload="opener.location.href=\'/bill/sales_list\';window.close();";';

    }

    /**
     * データを取得し返却
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    private function _get_sales_data($id)
    {

        $data = array();

        $mng = $this->sales_confirm_mdl->get_sales_mng($id);

        foreach ($mng as $obj) {
            $obj->sum_no_tax = money_sep($obj->sum_no_tax);
            $obj->sum_tax = money_sep($obj->sum_tax);
            $obj->sum_money = money_sep($obj->sum_money);
        }

        $data['mng'] = $mng;

        $detail = $this->sales_confirm_mdl->get_sales_detail($id);
        foreach ($detail as $obj) {
            $obj->unit_price = money_sep($obj->unit_price);
            $obj->no_tax_money = money_sep($obj->no_tax_money);
            $obj->tax = money_sep($obj->tax);
            $obj->row_span = (empty($obj->unit_memo)) ? 1 : 2;
            $obj->disp_unit_memo = nl2br($obj->unit_memo);
            $obj->disp_book_date = slash_date($obj->book_date);
        }
        $data['detail'] = $detail;

        return $data;

    }

}

/* End of file sales_confirm_other.php */
/* Location: ./application/controllers/other/sales_confirm_other.php */