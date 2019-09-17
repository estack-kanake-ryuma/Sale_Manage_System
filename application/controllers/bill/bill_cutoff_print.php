<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Bill_cutoff_print
 *
 * 請求書(締日管理)のモデルクラス
 *
 * @property Bill_cutoff_mdl $bill_cutoff_mdl
 * @property Bill_sales_mdl $bill_sales_mdl
 * @property CI_Input $input
 * @property CI_URI $uri
 * @property MY_Pagination $pagination
 * @property CI_Session $session
 * @property MY_Form_validation $form_validation
 * @property CI_DB_active_record $db
 */
class Bill_cutoff_print extends MY_Controller
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
        $this->load->model('bill/bill_cutoff_mdl');
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
        $condition = $this->bill_cutoff_mdl->create_search_condition();

        // 各マスタデータの取得
        $data['mst'] = $this->bill_cutoff_mdl->get_mst_data();

        // 一覧
        $data['list_data'] = $this->_get_disp_list_data($condition);

        $total = $this->_get_total_cnt($condition);

        // ページ情報を取得
        $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));

        // ページリンク
        $data['page_link'] = $this->pagination->create_page_link($total);

        // 検索条件の入力値
        $data['search'] = $this->bill_cutoff_mdl->get_input_condition();

        // 得意先一覧用のセッションを設定
        $this->bill_cutoff_mdl->set_list_session();

        // 特定のセッション情報消す
        $this->session->unset_userdata(SS_KEY_ORDER_TYPE);

        $this->load->view('bill/bill_cutoff_print', $data);
    }


    /**
     * 発行処理
     *
     * @access public
     * @throws Exception
     */
    public function output()
    {
        if ($this->form_validation->run('bill_cutoff_print')) {

            log_message('info', '【請求書発行処理(締日)   START)】');

            // トランザクション開始
            $this->db->trans_begin();

            $err_msg = "";

            // 請求書データ登録処理
            $this->bill_cutoff_mdl->regist_data($err_msg);

            // 請求書発行処理
            $this->bill_cutoff_mdl->print_bill();

            // トランザクション終了
            $this->db->trans_complete();

            log_message('info', '【請求書発行処理(締日)   END)】');

            // 画面遷移
            if (empty($err_msg)) {
                $this->body = 'onload="' . alert_href('請求書を発行しました。', '/bill/bill_cutoff_print') . '"';
            } else {
                $this->body = 'onload="' . alert_href($err_msg, '/bill/bill_cutoff_print') . '"';
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
            $this->body = 'onload="' . alert_href(ERR_PROC_DELETE, '/bill/bill_cutoff_print') . '"';
        } else {
            if ($this->bill_cutoff_mdl->delete_data($id) == true) {
                $this->body = 'onload="' . alert_href('削除しました。', '/bill/bill_cutoff_print') . '"';
            } else {
                $this->body = 'onload="' . alert_href('既に削除されています。', '/bill/bill_cutoff_print') . '"';
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

    /**
     * 請求書閲覧処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function disp_bill()
    {

        $id = $this->input->get('id');

        // 請求書発行処理
        $this->bill_cutoff_mdl->disp_bill($id);

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
        $list = $this->bill_cutoff_mdl->get_list_data($condition, $start);

        $i = 1;
        foreach ($list as $val) {
            // No
            $val->no = $i;

            // 日付変換
            $val->cutoff_date_from = slash_date($val->cutoff_date_from);
            $val->cutoff_date_to = slash_date($val->cutoff_date_to);

            // 締日
            $val->disp_cutoff_date = cutoff_date_str($val->cutoff_date);

            // 請求日
            $val->disp_bill_date = slash_date($val->bill_date);

            // 請求額
            $val->sum_money = money_sep($val->sum_money);

            // 請求書No
            if (empty($val->bill_mng_id)) {
                $val->disp_bill_no = get_anchor("/bill/bill_cutoff_print/bill_no_clear/?bill_no=" . $val->bill_no . '&back=' . uri_string(), $val->bill_no, array("class" => "no_bill", 'title' => 'クリックすると確保していた請求書番号を破棄します', 'onclick' => "return confirm('請求書番号を初期化します。よろしいですか？');"));
            } else {
                $val->disp_bill_no = get_anchor("/bill/bill_cutoff_print/bill_disp/" . $val->bill_no . "?win_type=win", $val->bill_no, array("target" => "_blank"));
            }

            // 発行状況
            $val->bill_stauts_type_name = empty($val->bill_mng_id) ? get_span_red("未発行") : "発行済み";

            // 入金種別
            $val->credit_type_name = str_replace(',', '<br/>', $val->credit_type_name);

            // 締日がおとずれているかのフラグ
            $val->cutoff_flg = $this->_get_cutoff_flg($val->cutoff_date_to);

//                if($val->cutoff_flg == false) {
//                    //$val->bill_stauts_type_name = get_span_yellow("締日未到達");
//                    $val->bill_stauts_type_name = get_anchor("/bill/bill_cutoff_print/disp_bill?id=".$val->sales_mng_id, "締日未到達");
//                    
//                }

            $i++;
        }


        return $list;

    }

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
        // テーブル名を設定
        $this->bill_cutoff_mdl->set_tbl(T_SALES_MNG);
        // 件数取得
        return $this->bill_cutoff_mdl->get_list_cnt($condition);
    }

    /**
     * 締日がおとずれているかを判定する
     *
     * @access private
     * @param $to string
     * @return array
     * @author Kita Yasuhiro
     */
    public function _get_cutoff_flg($to)
    {

        $today = date("Ymd");
        $to_int = str_replace("/", "", $to);

        if ($today < $to_int) {
            return false;
        } else {
            return true;
        }


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

/* End of file bill_cutoff_print.php */
/* Location: ./application/controllers/bill/bill_cutoff_print.php */