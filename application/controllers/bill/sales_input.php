<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sales_input Controller
 *
 * 売上情報入力のコントローラー
 *
 * @author        Kita Yasuhiro
 * @link        http://www.datalyze.co.jp
 * @property sales_mdl $sales_mdl
 * @property CI_Form_validation $form_validation
 */
class Sales_input extends MY_Controller
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
        $this->load->model("bill/sales_mdl");
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

        $data['sales']['mng'] = array();
        $data['sales']['detail'] = array();
        $data['sales']['depart'] = array();
        $data['sales']['before'] = array();

        $data['screen'] = $this->_get_page_ctrl($_POST);

        $data['mst'] = $this->sales_mdl->get_mst_data();

        if (count($_POST) > 0) {
            // データ登録処理
            $this->_exec();
        }

        // view読み込み
        $this->load->view('bill/sales_input', $data);
    }

    /**
     * editページ処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function edit()
    {
        // 変更するIDを取得
        $id = $this->input->get('id');

        // 売上情報を取得
        $data['sales'] = $this->sales_mdl->get_sales_data($id);

        $data['mst'] = $this->sales_mdl->get_mst_data();

        $data['screen'] = $this->_get_page_ctrl($data['sales']);

        // データの変更処理
        if (count($_POST) > 0) {

            // 変更処理実行
            $this->_exec();
        }

        // view読み込み
        $this->load->view('bill/sales_input', $data);

    }

    /**
     * copyページ処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function copy()
    {
        // 変更するIDを取得
        $id = $this->input->get('id');

        // 売上情報を取得
        $data['sales'] = $this->sales_mdl->get_sales_data($id);

        $data['mst'] = $this->sales_mdl->get_mst_data();

        $data['screen'] = $this->_get_page_ctrl($data['sales']);

        // データの変更処理
        if (count($_POST) > 0) {
            // 変更処理実行
            $this->_exec();
        }

        // view読み込み
        $this->load->view('bill/sales_input', $data);

    }

    /*
     * ---------------------------------------------------------------------------
     * 個別メソッド
     * ---------------------------------------------------------------------------
     */

    /**
     * 登録処理
     * @return bool
     */
    private function _exec()
    {
        if ($this->form_validation->run('sales')) {

            // 請求書存在チェック
            if (empty($_POST['bill_ok'])) {

                if ($this->sales_mdl->chk_bill_data()) {
                    $this->body = 'onload="chk_bill();"';
                    return true;
                }

            }

            if ($this->router->method == "index" || $this->router->method == "copy") {
                // 登録
                $this->sales_mdl->regist_data();

            } else {
                // 変更
                $this->sales_mdl->update_data();
            }

            // アラート処理実行
            $this->body = 'onload="' . alert_href('登録しました。', $this->get_back_url()) . '"';

        } else {

            return false;
        }

    }

    /**
     * 画面制御処理
     *
     * @access private
     * @param  $data array
     * @return array
     * @author Kita Yasuhiro
     */
    private function _get_page_ctrl($data)
    {

        $screen = $this->_get_page_ctrl_init();

        if (count($data) == 0) return $screen;

        if ($this->router->method == "index") {

            $screen['sales_row'] = count($data['goods_name']);    // 売上情報の明細行
            $screen['depart_row'] = count($data['sep_institute']);
            $screen['book_ctrl'] = $this->sales_mdl->get_book_date_ctrl($data['credit_type']);

            $screen['customer_info'] = $this->sales_mdl->get_customer_info();

        } else {

            $screen['sales_row'] = (isset($_POST['goods_name'])) ? count($_POST['goods_name']) : count($data['detail']);
            if ($screen['sales_row'] == 0) $screen['sales_row'] = 1;
            $screen['depart_row'] = (isset($_POST['sep_institute'])) ? count($_POST['sep_institute']) : count($data['depart']);
            if ($screen['depart_row'] == 0) $screen['depart_row'] = 2;
            $screen['book_ctrl'] = $this->sales_mdl->get_book_date_ctrl($data['mng']['credit_type']);

            $screen['customer_info']['cutoff_date'] = cutoff_date_str($data['mng']['cutoff_date']);
            $screen['customer_info']['print_type'] = card_print_str($data['mng']['card_print_type']);
            $screen['customer_info']['mst_customer_type_name'] = $data['mng']['mst_customer_type_name'];
            $screen['customer_info']['mst_credit_type_name'] = $data['mng']['mst_credit_type_name'];
        }

        return $screen;

    }

    /**
     * 画面制御処理の初期値を取得する
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    private function _get_page_ctrl_init()
    {
        $screen = array();

        $screen['sales_row'] = 1;   // 売上明細行
        $screen['depart_row'] = 2;   // 売上明細行
        $screen['book_ctrl'] = "";
        $screen['customer_info'] = array();

        return $screen;

    }

    /*
     * ---------------------------------------------------------------------------
     * 個別入力チェックメソッド
     * ---------------------------------------------------------------------------
     */
    /**
     * 担当者存在チェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function exist_handler()
    {
        // 担当者の存在チェック
        if ($this->sales_mdl->get_handler_cnt() == 0) {
            $this->form_validation->set_message('exist_handler', ERR_EXIST_HANDLER);
            return false;
        }

        return true;
    }

    /**
     * 部門が研究所の属しているかチェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function exist_institute($value, $flg, $cycle = null)
    {

        if ($cycle === null) {
            $institute_id = $this->input->post("institute_id");
            $depart_id = $this->input->post("depart_id");
        } else {
            $institute_id = $_POST['sep_institute'][$cycle];
            $depart_id = $_POST['sep_depart'][$cycle];
        }

        if (empty($institute_id) || empty($depart_id)) {
            return true;
        } else {
            // 研究所の存在チェック
            if ($this->sales_mdl->get_institute_cnt($institute_id, $depart_id) == 0) {
                $this->form_validation->set_message('exist_institute', ERR_EXIST_INSTITUTE);
                return false;
            }

        }

        return true;
    }

    /**
     * 同一の部門が設定されているかチェックする
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function unique_depart($value, $flg, $cycle = null)
    {

        $input = $_POST;

        if (!isset($input['chk_bill_sep'])) return true;
        $ary = array();

        foreach ($input['sep_institute'] as $key => $value) {

            if (empty($input['sep_institute'][$key]) || empty($input['sep_depart'][$key])) {
                return true;
            }

            $ary[] = $input['sep_institute'][$key] . "," . $input['sep_depart'][$key];
        }

        $unique_value = array_count_values($ary);

        for ($i = 0; $i < count($unique_value); $i++) {

            $key = $ary[$i];
            $count = $unique_value[$key];

            if ($count > 1) {
                $this->form_validation->set_message('unique_depart', ERR_UNIQUE_DEPART);
                return false;
            }

        }

        return true;

    }

    /**
     * 分割金額計の整合正チェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function compare_sep_money()
    {

        if ($this->input->post("credit_type") == CREDIT_TYPE_BEFORE) {
            $total = erase_money_sep($this->input->post("sep_money_hd"));
            $sep_total = erase_money_sep($this->input->post("sep_inp_money_hd"));

            // 金額が等しいかチェックする。
            if ($total != $sep_total) {
                $this->form_validation->set_message('compare_sep_money', ERR_COMPARE_SEP_MONEY);
                return false;
            }
        }

        return true;
    }

    /**
     * 金額計の整合正チェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function compare_depart_money()
    {

        $input = $_POST;

        if (!isset($input['chk_bill_sep'])) return true;
        if (empty($input["sum_money"])) return true;

        $total = erase_money_sep($input["sum_money"]);
        $sep_total = erase_money_sep($this->input->post("hf_depart_in_tax_total"));

        // 金額が等しいかチェックする。
        if ($total != $sep_total) {
            $this->form_validation->set_message('compare_depart_money', ERR_COMPARE_DEPART_MONEY);
            return false;
        }


        return true;
    }

    /**
     * 売上計上日の必須チェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function book_required()
    {

        // 金額が等しいかチェックする。
        if ($this->input->post("credit_type") != CREDIT_TYPE_BEFORE) {

            if (!$this->form_validation->required($this->input->post("book_date"))) {
                $this->form_validation->set_message('book_required', ERR_BOOK_DATE_REQUIRED);
                return false;
            }
        }

        return true;
    }

    /**
     * 請求日の整合正チェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function comp_bill_date($bill_date)
    {

        if (!empty($_POST['cutoff_date'])) {
            $cutoff_date = get_cutoff_date($bill_date, $_POST['cutoff_date'], "a");

            if ($bill_date != $cutoff_date) {
                $this->form_validation->set_message('comp_bill_date', ERR_COMP_BILL_DATE);
                return false;
            }

        }

        return true;
    }

    /**
     * 基本情報が全て同じ物が存在した場合エラー
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function is_exist_sales()
    {

        if ($this->router->method == "edit") return true;

        // 売上情報の存在チェック
        if ($this->sales_mdl->get_sales_cnt() > 0) {
            $this->form_validation->set_message('is_exist_sales', ERR_EXIST_SALES);
            return false;
        }

        return true;

    }

    /**
     * 部門分割項目必須チェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function basic_item_required($value)
    {

        $input = $_POST;

        if (isset($input['chk_bill_sep'])) return true;

        if (!$this->form_validation->required($value)) {
            $this->form_validation->set_message('basic_item_required', "%s 欄は必須です。");
            return false;
        }

        return true;

    }

    /**
     * 部門分割項目必須チェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function depart_item_required($value)
    {

        $input = $_POST;

        if (!isset($input['chk_bill_sep'])) return true;

        if (!$this->form_validation->required($value)) {
            $this->form_validation->set_message('depart_item_required', "%s 欄は必須です。");
            return false;
        }

        return true;

    }

    /**
     * 分割金額必須チェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function sep_money_required($sep_money)
    {

        if ($this->input->post("credit_type") == CREDIT_TYPE_BEFORE) {

            if (!$this->form_validation->required($sep_money)) {
                $this->form_validation->set_message('sep_money_required', ERR_SEP_MONEY);
                return false;
            }

        }

        return true;

    }

    /**
     * 処理月チェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function chk_proc_date($value)
    {

        if (count($this->form_validation->_error_array) > 0) return true;

        $proc = $this->get_db_proc_month();

        $target = date("Ym", strtotime($value));

        if ($proc != $target) {
            $this->form_validation->set_message('chk_proc_date', ERR_CHK_PROC_DATE);
            return false;
        }

        return true;

    }

    /**
     * 処理年月より古い日付が指定された場合エラー
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function proc_date($value)
    {

        $proc = $proc = $this->get_db_proc_month();
        $target = date("Ym", strtotime($value));

        if ($proc > $target) {
            $this->form_validation->set_message("proc_date", ERR_PROC_DATE);
            return false;
        }

        return true;

    }

    /**
     * 処理年月より古い日付が指定された場合エラー
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function proc_month_from($value)
    {

        if (empty($value)) return true;

        $month = str_replace("/", "", $value);
        $month = $month . "01";

        $proc = $this->session->userdata(SS_KEY_PROC_MONTH);
        $target = date("Ym", strtotime($month));

        if ($proc > $target) {
            $this->form_validation->set_message("proc_month_from", ERR_PROC_DATE);
            return false;
        }

        return true;

    }

    /**
     * 存在する請求書が既に消込されているかチェックする
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function chk_bill_status()
    {

        if (empty($_POST['cutoff_date'])) return true;

        $res = $this->sales_mdl->get_bill_cutoff_data($_POST['customer_disp_name'], $_POST['bill_date'], $_POST['credit_type']);

        if (count($res) > 0) {
            if (!empty($res[0]->credit_mng_id)) {
                $this->form_validation->set_message("chk_bill_status", ERR_CHK_CREDIT);
                return false;
            }

        }

        return true;
    }

    /**
     * データ状態チェック
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function chk_data_status()
    {

        if ($this->router->method != "edit") return true;

        $id = $this->input->get('id');

        $mng = $this->sales_mdl->get_sales_mng($id);

        if (count($mng) == 0) return true;

        if ($mng[0]->data_status_type == DATA_TYPE_CREDIT || $mng[0]->data_status_type == DATA_TYPE_CLOSE) {
            $this->form_validation->set_message("chk_data_status", ERR_CHK_CREDIT);
            return false;
        }

        return true;

    }

    /**
     * 報告書NO存在チェック
     *
     * @access public
     * @param $str
     * @return bool
     * @author MKURITA
     */
    public function exist_report_no($str)
    {
        if(empty($str)) {
            return true;
        }
        $id = $this->input->get("id");
        $this->db->where("SUBSTRING(report_no, 1, 8) =", substr($str, REPORT_NO_START_INDEX, REPORT_NO_LENGTH_8));
        if (!empty($id) && $this->router->method == "edit") {
            $this->db->where("sales_mng_id <> '" . $id . "'");
        }

        // 報告書NOの存在チェック
        $this->sales_mdl->set_tbl(T_SALES_DETAIL);
        if ($this->sales_mdl->get_total_cnt() > 0) {
            $this->form_validation->set_message('exist_report_no', ERR_EXIST_REPORT_NO);
            return false;
        }
        return true;
    }

    /**
     * 同一の報告書NOが設定されているかチェックする
     *
     * @access public
     * @param $value
     * @param $flg
     * @param null $cycle
     * @return bool
     * @author MKURITA
     */
    public function unique_report_no($value, $flg, $cycle = null)
    {
        $ary = $_POST['report_no'];

        // 値の出現回数を数えて、同じ報告書NOが入力されていないかチェック
        $unique_value = array_count_values($ary);
        $count = $unique_value[$value];
        if ($count > 1) {
            $this->form_validation->set_message('unique_report_no', ERR_UNIQUE_REPORT_NO);
            return false;
        }
        return true;
    }

}

/* End of file sales_input.php */
/* Location: ./application/controllers/sales_input.php */