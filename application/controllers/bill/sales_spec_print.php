<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sales_spec_print Controller
 *
 * ホームのコントローラー
 *
 * @author        Kita Yasuhiro
 * @link        http://www.datalyze.co.jp
 * @property Sales_print_mdl $sales_print_mdl
 */
class Sales_spec_print extends MY_Controller
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

        $this->load->model('bill/sales_print_mdl');
        $this->load->library('pdf');
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

        $data['mst'] = $this->sales_print_mdl->get_mst_data();

        if (count($_POST) > 0) {
            // データ登録処理
            $this->_exec();
        }

        // view読み込み
        $this->load->view('bill/sales_spec_print', $data);
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
        if ($this->form_validation->run('sales_spec_print')) {

            // 帳票作成用データ作成
            $search = $this->sales_print_mdl->create_search_condition();

            $type = "pdf";
            if ($_POST['btn_type'] == "csv") {
                $type = "csv";
            }

            $query = $this->sales_print_mdl->get_data($search, $type);
            $data = $query->result();

            if (count($data) == 0) {
                $this->body = 'onload="alert(\'出力対象データが1件もありません。\');"';
            } else {

                if ($_POST['btn_type'] == "pdf") {
                    // 処理中文言の表示
                    $this->pdf->display($data);
                }

                if ($_POST['btn_type'] == "csv") {

                    $this->load->helper('download');
                    $this->load->dbutil();
                    $colum = '"研究所名","部門名","摘要名","得意先名","得意先区分","売上計上日","報告書No","担当者名","品名","税抜価格"';

                    $csv = $this->dbutil->csv_from_result_custom($query);
                    $csv = $colum . $csv;
                    $csv = mb_convert_encoding($csv, 'Shift-JIS', 'UTF-8');

                    $from = $_POST['book_date_from'];
                    $to = $_POST['book_date_to'];
                    $fname = 'uriagemeisai_' . str_replace("/", "", $from) . '_' . str_replace("/", "", $to) . '.csv';
                    force_download($fname, $csv);

                }

            }

        } else {

            return false;
        }

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

/* End of file sales_spec_print.php */
/* Location: ./application/controllers/bill/sales_spec_print.php */