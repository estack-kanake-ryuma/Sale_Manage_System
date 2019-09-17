<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bill_download_mdl extends MY_Model
{

    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage    model/db
     * @author        Kita Yasuhiro
     * @link        http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 表示要の一覧データを取得
     *
     * @access public
     * @param $condition string
     * @return array
     * @author kita Yasuhiro
     */
    public function get_disp_list_data($condition)
    {

        // 検索開始番号を取得
        $start = $this->uri->segment(4);

        // 一覧を取得
        $list = $this->get_list_data($condition, $start);

        $i = 1;
        foreach ($list as $val) {
            // No
            $val->no = $i;

            // 日付
            $val->disp_bill_date = slash_date($val->bill_date);

            // 金額
            $val->disp_bill_money = money_sep($val->bill_money);

            // 発行状況
            $val->bill_type_name = ($val->bill_type == BILL_TYPE_S) ? "売上単位" : "締日管理";

            // 締日
            $val->disp_cutoff_date = cutoff_date_str($val->cutoff_date);

            // 請求書No
            $val->disp_bill_no = get_anchor("/bill/bill_download/bill_disp/" . $val->bill_no . "?win_type=win", $val->bill_no, array("target" => "_blank"));

            $i++;
        }


        return $list;

    }


    /**
     * 請求書一覧データ取得
     *
     * @access    public
     * @param $where string
     * @param $start int
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_list_data($where, $start = 0)
    {

        // テーブル設定
        $this->m_tbl_name = T_BILL_MNG;

        // Prefix 設定
        $this->m_prefix = "bill";

        $this->db->select("GROUP_CONCAT(bill_c.sales_mng_id) as sales_mng_id", false);
        $this->db->select("bill.customer_id");
        $this->db->select("bill.customer_disp_name");
        $this->db->select("bill.customer_name");
        $this->db->select("bill.bill_type");
        $this->db->select("bill.bill_date");
        $this->db->select("bill.bill_money");
        $this->db->select("bill.credit_type");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_CREDIT_TYPE . "' AND item_cd=bill.credit_type) as credit_type_name ");
        $this->db->select("bill.bill_no");
        $this->db->select("bill.bill_mng_id");
        $this->db->select("cus.cutoff_date");

        // JOIN句作成
        $this->db->join(M_CUSTOMER . " cus", "bill.customer_id=cus.customer_id", "left");
        $this->db->join(T_BILL_DATA . " bill_c", "bill.bill_mng_id=bill_c.bill_mng_id", "left");

        // GROUP句作成
        $this->db->group_by("bill.bill_mng_id");

        // WHERE句作成
        if (!empty($where)) {
            $this->db->where($where);
        }

        // リミット設定
        $this->db->limit(PER_PAGE_CNT, $start);

        // ORDER句の設定
        $this->db->order_by("bill.bill_date", "asc");
        $this->db->order_by("cus.customer_furi", "asc");

        return $this->select();
    }

    /**
     * 請求書一覧情報の総件数を取得する
     *
     * @access    public
     * @param $condition string
     * @return    int
     * @author    Kita Yasuhiro
     */
    public function get_list_cnt($condition = "")
    {

        $this->db->select('count(*) as cnt');
        $this->db->from(T_BILL_MNG . " bill");
        $this->db->where('bill.delete_flg', FLG_OFF);

        // JOIN句作成
        $this->db->join(M_CUSTOMER . " cus", "bill.customer_id=cus.customer_id", "left");

        // WHERE句作成
        if (!empty($condition)) {
            $this->db->where($condition);
        }

        $query = $this->db->get();
        $result = $query->result();

        return intval($result[0]->cnt);
    }

    /**
     * 一覧の絞込条件を作成する
     *
     * @access public
     * @return string
     * @author Kita Yasuhiro
     */
    public function create_search_condition()
    {
        $condition = array();
        $data = $this->get_input_condition();

        if (count($data) == 0) return;

        // 得意先名称
        if (!empty($data['customer_name_s'])) {
            $condition[] = "(bill.customer_name like '%" . $this->db->escape_like_str($data['customer_name_s'])
                . "%' or bill.customer_disp_name like '%" . $this->db->escape_like_str($data['customer_name_s'])
                . "%' or cus.customer_furi like '%" . $this->db->escape_like_str($data['customer_name_s']) . "%')";
        }

        // 請求日FROM
        if (!empty($data['bill_date_from'])) {
            $condition[] = "date_format(bill.bill_date, '%Y/%m/%d') >= " . $this->db->escape($data['bill_date_from']);
        }

        // 請求日TO
        if (!empty($data['bill_date_to'])) {
            $condition[] = "date_format(bill.bill_date, '%Y/%m/%d') <= " . $this->db->escape($data['bill_date_to']);
        }

        // 請求書番号
        if (!empty($data['bill_no'])) {
            $condition[] = "(bill.bill_no like '%" . $this->db->escape_like_str($data['bill_no']) . "%')";
        }

        // 締日
        if (!empty($data['cutoff_date'])) {

            if ($data['cutoff_date'] == "99") {
                $condition[] = "(cus.cutoff_date is null)";
            } else {
                $condition[] = "(cus.cutoff_date = " . $this->db->escape_like_str($data['cutoff_date']) . ")";
            }

        }


        // 検索条件返却
        if (count($condition) > 0) {
            return implode(' and ', $condition);
        } else {
            return "";
        }

    }

    /**
     * マスタデータ取得処理
     *
     * @access public
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_mst_data()
    {
        $data = array();

        $this->load->model("mainte/customer_mdl");
        $data['cutoff_date'] = $this->customer_mdl->get_cutoff_list("");

        return $data;

    }

    /**
     * 請求書の作成
     *
     * @access public
     * @return array
     * @author Kita Yasuhiro
     */
    public function print_bill()
    {

        // 発行する売上データ分Loop
        foreach ($this->input->post('print_chk') as $val) {

            $data = $this->get_bill_print_data($val);

            $this->load->library('bill_pdf');
            $this->bill_pdf->display($data, "sales");

        }

    }

    /**
     * 検索条件の入力値を取得
     *
     * @access public
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_input_condition()
    {
        $data = array();

        if (isset($_POST['search'])) {
            $data = $_POST;

        } else if ($this->session->userdata($this->router->class) != false) {
            $data = $this->session->userdata($this->router->class);
            $data = $data[SS_KEY_SEARCH];
        }

        return $data;
    }


}

/* End of file bill_download_mdl.php */
/* Location: ./application/model/bill/bill_download_mdl.php */
