<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Bill_download Controller
 *
 * 請求書一括ダウンロードのコントローラー
 *
 * @author        Kita Yasuhiro
 * @link        http://www.datalyze.co.jp
 * @property Bill_download_mdl $bill_download_mdl
 * @property CI_URI $uri
 * @property MY_Pagination $pagination
 * @property CI_Session $session
 * @property CI_Router $router
 */
class Bill_download extends MY_Controller
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

        // Load Model
        $this->load->model('bill/bill_download_mdl');
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
        $data = array();

        // 初期値設定
        $this->_get_search_init($data);

        // 検索条件を設定
        $condition = $this->bill_download_mdl->create_search_condition();

        // 各マスタデータの取得
        $data['mst'] = $this->bill_download_mdl->get_mst_data();

        // 一覧
        $data['list_data'] = $this->bill_download_mdl->get_disp_list_data($condition);

        $total = $this->_get_total_cnt($condition);

        // ページ情報を取得
        $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));

        // ページリンク
        $data['page_link'] = $this->pagination->create_page_link($total);

        // 検索条件の入力値
        $data['search'] = $this->bill_download_mdl->get_input_condition();

        // 得意先一覧用のセッションを設定
        $this->bill_download_mdl->set_list_session();

        $this->load->view('bill/bill_download', $data);
    }


    /**
     * 発行処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function output()
    {
        $this->bill_all_download($_POST['bill_no']);
    }

    /*
     * ---------------------------------------------------------------------------
     * 個別メソッド
     * ---------------------------------------------------------------------------
     */

    /**
     * データの総件数を取得
     *
     * @access private
     * @param $condition string
     * @return int
     * @author Kita Yasuhiro
     */
    private function _get_total_cnt($condition)
    {
        // 件数取得
        return $this->bill_download_mdl->get_list_cnt($condition);
    }

    /**
     * 検索フィールドの初期値
     *
     * @access public
     * @param $data array
     * @return void
     * @author Kita Yasuhiro
     */
    private function _get_search_init(&$data)
    {
        $input = $this->bill_download_mdl->get_input_condition();

        if (count($input['search']) == 0) {
            // 処理月の月初
            $proc_date = $this->session->userdata(SS_KEY_PROC_MONTH);

            $from = date("Y/m/d", strtotime($proc_date . "01"));

            $last = get_month_endday(date("Y", strtotime($from)), date("m", strtotime($from)));
            $to = date("Y/m/d", strtotime($proc_date . $last));

            // 対象月の初期値
            $data['search']['bill_date_from'] = $from;
            $data['search']['bill_date_to'] = $to;

            $session[SS_KEY_SEARCH] = $data['search'];
            $this->session->set_userdata($this->router->class, $session);
        }
    }


}

/* End of file bill_download.php */
/* Location: ./application/controllers/bill/bill_download.php */