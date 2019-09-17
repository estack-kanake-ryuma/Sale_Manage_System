<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Bill_sales_print
 *
 * 請求書(売上単位)のコントローラークラス
 *
 * @author        Kita Yasuhiro
 * @link        http://www.datalyze.co.jp
 * @property bill_sales_mdl $bill_sales_mdl
 * @property CI_Input $input
 * @property CI_URI $uri
 * @property MY_Pagination $pagination
 * @property CI_Session $session
 * @property MY_Form_validation $form_validation
 * @property CI_DB_active_record $db
 */
class Bill_sales_print extends MY_Controller
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
        $this->load->model('bill/bill_sales_mdl');

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

        // 検索条件を設定
        $condition = $this->bill_sales_mdl->create_search_condition();

        // 各マスタデータの取得
        $data['mst'] = $this->bill_sales_mdl->get_mst_data();

        // 一覧
        $data['list_data'] = $this->_get_disp_list_data($condition);

        $total = $this->_get_total_cnt($condition);

        // ページ情報を取得
        $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));

        // ページリンク
        $data['page_link'] = $this->pagination->create_page_link($total);

        // 検索条件の入力値
        $data['search'] = $this->bill_sales_mdl->get_input_condition();

        // 得意先一覧用のセッションを設定
        $this->bill_sales_mdl->set_list_session();

        // 特定のセッション情報消す
        $this->session->unset_userdata(SS_KEY_ORDER_TYPE);

        $this->load->view('bill/bill_sales_print', $data);

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

        if ($this->form_validation->run('bill_print')) {

            log_message('info', '【請求書発行処理   START)】');

            // トランザクション開始
            $this->db->trans_begin();

            // 請求書データ登録処理
            $err_msg = "";
            $result = $this->bill_sales_mdl->regist_data($err_msg);

            if ($result) {
                // 請求書発行処理
                $this->bill_sales_mdl->print_bill();

                // トランザクション終了
                $this->db->trans_complete();

                log_message('info', '【請求書発行処理   END)】');

                // 画面遷移
                if (empty($err_msg)) {
                    $this->body = 'onload="' . alert_href('請求書を発行しました。', '/bill/bill_sales_print') . '"';
                } else {
                    $this->body = 'onload="' . alert_href($err_msg, '/bill/bill_sales_print') . '"';
                }

            }

            $ss_info[SS_KEY_ORDER_TYPE] = FLG_ON;
            $this->session->set_userdata($ss_info);

        } else {
            $this->index();
            return false;
        }

    }

    /**
     * 削除処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function delete()
    {

        $id = $this->input->get('id');
        $date = $this->input->get('date');

        $proc = $this->get_db_proc_month();
        $target = date("Ym", strtotime($date));

        if ($proc > $target) {
            $this->body = 'onload="' . alert_href(ERR_PROC_DELETE, '/bill/bill_sales_print') . '"';
        } else {
            if ($this->bill_sales_mdl->delete_data($id) == true) {
                $this->body = 'onload="' . alert_href('削除しました。', '/bill/bill_sales_print') . '"';
            } else {
                $this->body = 'onload="' . alert_href('既に削除されています。', '/bill/bill_sales_print') . '"';
            }

        }

    }

    /**
     * 予約済みの請求書番号の初期化処理
     *
     * @access public
     * @return void
     */
    public function bill_no_clear()
    {
        global $BACK_URL;

        $bill_no = $this->input->get('bill_no');

        // 既に請求書が存在していないかチェックを行う
        if ($this->bill_sales_mdl->chk_bill_status($bill_no)) {
            // 請求書が存在しない場合は請求書番号をクリア

            // 請求書番号の初期化処理
            $this->bill_sales_mdl->clear_bill_no($bill_no);

            // 再読み込み
            $this->body = 'onload="location.href=\'' . $BACK_URL . '\'"';

        } else {
            // 請求書が存在する場合は、既に作成されているメッセージを表示
            $this->body = 'onload="' . alert_href('既に請求書が存在します。', $BACK_URL) . '"';
        }
    }

    /*
     * ---------------------------------------------------------------------------
     * 個別メソッド
     * ---------------------------------------------------------------------------
     */

    /**
     * 表示要の一覧データを取得
     *
     * @access private
     * @param $condition string
     * @return array
     * @author kita Yasuhiro
     */
    private function _get_disp_list_data($condition)
    {

        // 検索開始番号を取得
        $start = $this->uri->segment(4);

        // 一覧を取得
        $list = $this->bill_sales_mdl->get_list_data($condition, $start);

        $i = 1;
        foreach ($list as $val) {
            // No
            $val->no = $i;
            // 日付
            $val->disp_bill_date = slash_date($val->bill_date);

            // 金額
            $val->disp_sum_money = money_sep($val->sum_money);

            // 発行状況
            $val->bill_stauts_type_name = empty($val->bill_mng_id) ? get_span_red("未発行") : "発行済み";

            // 請求書No
            if (empty($val->bill_mng_id)) {
                $val->disp_bill_no = get_anchor("/bill/bill_sales_print/bill_no_clear/?bill_no=" . $val->bill_no . '&back=' . uri_string(), $val->bill_no, array("class" => "no_bill", 'title' => 'クリックすると確保していた請求書番号を破棄します', 'onclick' => "return confirm('請求書番号を初期化します。よろしいですか？');"));
            } else {
                $val->disp_bill_no = get_anchor("/bill/bill_sales_print/bill_disp/" . $val->bill_no . "?win_type=win", $val->bill_no, array("target" => "_blank"));
            }

            $i++;
        }

        return $list;

    }

    /**
     * データの総件数を取得
     *
     * @access private
     * @param $condition string
     * @return array
     * @author Kita Yasuhiro
     */
    private function _get_total_cnt($condition)
    {

        // テーブル名を設定
        $this->bill_sales_mdl->set_tbl(T_SALES_MNG);

        // 件数取得
        return $this->bill_sales_mdl->get_list_cnt($condition);

    }

    /*
     * ---------------------------------------------------------------------------
     * 入力チェックメソッド
     * ---------------------------------------------------------------------------
     */
    public function is_check()
    {

        // 入力チェックを行う
        if ($this->input->post("print_chk") == "") {
            $this->form_validation->set_message("is_check", ERR_ALL_CHECK);
            return false;
        }

        return true;

    }


}

/* End of file bill_sales_print.php */
/* Location: ./application/controllers/bill/bill_sales_print.php */