<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sales_sum Controller
 *
 * ホームのコントローラー
 *
 * @author        Kita Yasuhiro
 * @link        http://www.datalyze.co.jp
 * @property Sales_print_sum_mdl $sales_print_sum_mdl
 * @property CI_Config $config
 */
class Sales_sum_print extends MY_Controller
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

        $this->load->model('bill/sales_print_sum_mdl');
        $this->config->load('disp_order');

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
        $data['detail'] = array();

        $data['mst'] = $this->sales_print_sum_mdl->get_mst_data();

        $data['ctrl'] = $this->_set_page_ctrl();

        if (count($_POST) > 0) {
            // データ登録処理
            $this->_exec();
        }

        // view読み込み
        $this->load->view('bill/sales_sum_print', $data);
    }

    /*
     * ---------------------------------------------------------------------------
     * 個別メソッド
     * ---------------------------------------------------------------------------
     */

    /**
     * 発行処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    private function _exec()
    {

        // チェック処理
        if ($this->form_validation->run('sales_sum_print')) {

            if (!$this->_output_pdf()) {
                $this->body = 'onload="alert(\'出力対象データが1件もありません。\');"';
            }

        } else {

            return false;
        }

    }

    /**
     * ＰＤＦ出力処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    private function _output_pdf()
    {

        $data = array();

        // 帳票作成用データ作成
        $search = $this->sales_print_sum_mdl->create_search_condition();

        switch ($this->input->post("segment")) {
            case SEGMENT_ABSTRACT:
                $data = $this->sales_print_sum_mdl->get_abstract_data($search);

                if (count($data) == 0) return false;
                $this->load->library('abstract_sum_pdf');
                $this->abstract_sum_pdf->display($data);

                break;

            case SEGMENT_HANDLER:
                $data = $this->sales_print_sum_mdl->get_handler_data($search);

                if (count($data) == 0) return false;
                $this->load->library('handler_sum_pdf');
                $this->handler_sum_pdf->display($data);
                break;

            case SEGMENT_CUSTOMER:
                $data = $this->sales_print_sum_mdl->get_customer_data($search);

                if (count($data) == 0) return false;
                $this->load->library('customer_sum_pdf');
                $this->customer_sum_pdf->display($data);
                break;

            case SEGMENT_DEPART:

                if ($this->input->post("disp_abstract") == FLG_ON) {
                    $data = $this->sales_print_sum_mdl->get_depart_on_data($search);

                    if (count($data) == 0) return false;
                    $this->load->library('depart_sum_on_pdf');
                    $this->depart_sum_on_pdf->display($data);
                } else {
                    $data = $this->sales_print_sum_mdl->get_depart_off_data($search);

                    if (count($data) == 0) return false;
                    $this->load->library('depart_sum_off_pdf');
                    $this->depart_sum_off_pdf->display($data);
                }

                break;

            default :
                return false;
        }

        return $data;

    }


    /**
     * ページの制御処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    private function _set_page_ctrl()
    {

        $data = array();

        $segment = $this->input->post("segment");

        $data['disp_abstract'] = ($segment == SEGMENT_DEPART) ? "" : "disabled='disabled'";


        return $data;

    }

    /**
     * 売上計上日の必須チェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function custom_required($value)
    {

        if ($_POST['segment'] != SEGMENT_ABSTRACT) {

            if (!$this->form_validation->required($value)) {
                $this->form_validation->set_message('custom_required', "%s 欄は必須です。");
                return false;
            }
        }

        return true;

    }

    /**
     * 期間が1年以上を選択していないかチェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function chk_span()
    {

        $from = $_POST['book_date_from'];
        $to = $_POST['book_date_to'];

        if (empty($from)) return true;
        if (empty($to)) return true;

        $limit_date = date("Y/m/d", strtotime($from . " 1 year"));

        if (strtotime($to) > strtotime($limit_date)) {
            $this->form_validation->set_message('chk_span', ERR_LIMIT_SPAN);
            return false;
        }

        return true;

    }

}

/* End of file sales_sum_print.php */
/* Location: ./application/controllers/bill/sales_sum_print.php */