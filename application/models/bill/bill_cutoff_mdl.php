<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Bill_cutoff_mdl
 * 請求書(締日管理)のモデルクラス
 *
 * @property Bill_sales_mdl $bill_sales_mdl
 * @property Bill_pdf $bill_pdf
 * @property Sales_mdl $sales_mdl
 * @property CI_Loader $load
 */
class Bill_cutoff_mdl extends MY_Model
{

    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage model/db
     * @author     Kita Yasuhiro
     * @link       http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();

        // Load Model
        $this->load->model('bill/bill_sales_mdl');
    }


    private $m_mng_id = array();

    /**
     * 登録処理
     *
     * @access    public
     * @param     $err_msg string
     * @return    void
     * @author    Kita Yasuhiro
     * @throws    Exception
     */
    public function regist_data(&$err_msg)
    {
        $data = $this->_get_bill_data();

        $i = 1;
        foreach ($data as $ins_data) {

            // 売上が変更されているかチェック
            if ($this->chk_sales_data($ins_data) == false) {
                if ($i == 1) {
                    $err_msg = '下記の請求書の請求金額が変わっている為、再度請求書を発行してください。\n\n';
                }
                $err_msg .= $i . ". " . $ins_data['customer_disp_name'] . "   " . $ins_data['cutoff_date_from'] . " ～ " . $ins_data['cutoff_date_to'] . '\n';
                $i++;
                continue;
            }

            // 自動取込済みデータが含まれているデータの請求書は発行しない
            if ($this->bill_sales_mdl->chk_exist_outside_receive_data($ins_data['sales_mng_id'])) {
                if ($err_msg != '') {
                    $err_msg .= '\n\n';
                }
                $err_msg .= '下記の請求書は自動取込データが含まれているため、請求書を発行できません。\n\n';
                $err_msg .= $i . ". " . $ins_data['customer_disp_name'] . "   請求日：" . $ins_data['bill_date'] . '\n';
                $i++;
                continue;
            }


            // データがあるか
            if (empty($ins_data['bill_mng_id'])) {

                $mng_ary = $ins_data;

                //━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
                // 請求管理データ登録処理
                //━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

                // 請求書番号の取得
                $mng_ary['bill_no'] = $this->bill_sales_mdl->get_bill_no($mng_ary['sales_mng_id']);

                // 不要なパラメタの削除
                unset($mng_ary['bill_mng_id']);
                unset($mng_ary['sales_mng_id']);
                unset($mng_ary['bef_bill_money']);
                unset($mng_ary['cutoff_date_from']);
                unset($mng_ary['cutoff_date_to']);

                // T_BILL_MNGのINSERT処理
                $this->m_tbl_name = T_BILL_MNG;
                $this->insert($mng_ary);


                $mng_id = $this->db->insert_id();
                $this->m_mng_id[] = $mng_id;
                foreach ($ins_data['sales_mng_id'] as $val) {

                    // T_BILL_DATAのINSERT処理
                    $this->m_tbl_name = T_BILL_DATA;
                    $this->insert(array("bill_mng_id" => $mng_id, "sales_mng_id" => $val));

                    // T_SALES_MNGの更新処理
                    $this->m_tbl_name = T_SALES_MNG;
                    $this->m_where = "sales_mng_id = " . $val;
                    $this->update(array('data_status_type' => DATA_TYPE_BILL, 'bill_no' => $mng_ary['bill_no']));
                }

            }
        }
    }

    /**
     * 削除処理
     *
     * @access    public
     * @param     $id int
     * @return    boolean
     * @author    Kita Yasuhiro
     * @throws    Exception
     */
    public function delete_data($id)
    {

        // トランザクション開始
        $this->db->trans_start();

        $res = $this->get_bill_data($id);

        if (count($res) == 0) return true;

        // 売上データのステータスを変更
        $this->load->model('bill/sales_mdl');
        $this->sales_mdl->update_del_bill_status($id);

        // 請求書管理データを削除
        $this->m_tbl_name = T_BILL_MNG;
        $this->db->where("bill_mng_id", $id);
        $this->delete();

        if ($this->db->affected_rows() == 0) {
            $this->db->trans_complete();
            return false;
        }

        // 請求書も削除
        if (file_exists(APPPATH . 'download/' . $res[0]->bill_no . ".pdf")) {
            unlink(APPPATH . 'download/' . $res[0]->bill_no . ".pdf");
        }

        // トランザクション終了
        $this->db->trans_complete();

        return true;

    }

    /**
     * 請求管理IDから請求書情報を取得する
     *
     * @access private
     * @param string $bill_id
     * @return array
     * @author Kita Yasuhiro
     * @throws Exception
     */
    private function get_bill_data($bill_id)
    {

        // 請求書管理IDを取得
        $this->m_tbl_name = T_BILL_MNG;
        $this->m_prefix = "mng";

        $this->db->select("mng.bill_no");
        $this->db->where("bill_mng_id", $bill_id);
        $res = $this->select();

        return $res;

    }

    /**
     * 売上が変更されているかチェックする
     *
     * @access    public
     * @param     $ins_data array
     * @return    boolean
     * @author    Kita Yasuhiro
     */
    public function chk_sales_data($ins_data)
    {
        // input情報で売上情報を取得
        if ($ins_data['bill_money'] <> $ins_data['bef_bill_money']) {
            return false;
        }
        return true;
    }

    /**
     * 請求書一覧データ取得
     *
     * @access    public
     * @param     $where string
     * @param     $start int
     * @return    array
     * @author    Kita Yasuhiro
     * @throws    Exception
     */
    public function get_list_data($where, $start = 0)
    {
        // テーブル設定
        $this->m_tbl_name = T_SALES_MNG;

        // Prefix 設定
        $this->m_prefix = "sales";

        $this->db->select("GROUP_CONCAT(sales.sales_mng_id) as sales_mng_id", false);
        $this->db->select("sales.customer_disp_name");
        $this->db->select("sales.customer_name");
        $this->db->select("sales.customer_id");
        $this->db->select("sales.cutoff_date_from");
        $this->db->select("sales.cutoff_date_to");
        $this->db->select("sales.bill_date");
        $this->db->select("sum(sales.sum_money) as sum_money");
        $this->db->select("sales.cutoff_date");
        $this->db->select("sales.credit_type");
        $this->db->select("sales.cutoff_date_from");
        $this->db->select("sales.cutoff_date_to");
        $this->db->select("GROUP_CONCAT(distinct (SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_CREDIT_TYPE . "' AND item_cd=sales.credit_type)) as credit_type_name ");
        $this->db->select("b_mng.bill_mng_id");
        $this->db->select("(CASE WHEN b_mng.bill_mng_id IS NOT NULL THEN b_mng.bill_no ELSE GROUP_CONCAT(DISTINCT sales.bill_no separator '') END) as bill_no");
        $this->db->select("credit.credit_mng_id");

        // JOIN句作成
        $this->db->join(M_CUSTOMER . " cus", "sales.customer_id=cus.customer_id", "left");
        $this->db->join(T_BILL_DATA . " b_data", "sales.sales_mng_id=b_data.sales_mng_id", "left");
        $this->db->join(T_BILL_MNG . " b_mng", "b_mng.bill_mng_id=b_data.bill_mng_id", "left");
        $this->db->join(T_CREDIT_MNG . " credit", "b_mng.bill_mng_id=credit.bill_mng_id", "left");

        // GROUP句作成
        $this->db->group_by("sales.customer_disp_name, sales.customer_name, sales.customer_id, sales.cutoff_date_from, sales.cutoff_date_to, sales.bill_date, b_mng.bill_mng_id");

        // WHERE句作成
        $this->db->where("sales.first_data_flg", FLG_OFF);
        $this->db->where("sales.cutoff_date is not null");
        if (!empty($where)) {
            $this->db->where($where);
        }

        // リミット設定
        $this->db->limit(PER_PAGE_CNT, $start);

        // ORDER句の設定
        $order_type = $this->session->userdata(SS_KEY_ORDER_TYPE);

        $this->db->order_by("b_mng.bill_mng_id is null", "desc");
        if ($order_type === FLG_ON) {
            $this->db->order_by("b_mng.last_datetime", "desc");
        }
        // ORDER句の設定
        $this->db->order_by("sales.cutoff_date_from", "desc");
        $this->db->order_by("cus.customer_furi is null", "asc");
        $this->db->order_by("cus.customer_furi", "asc");

        return $this->select();
    }

    /**
     * 請求書出力用データを取得
     *
     * @access    public
     * @param     $id int
     * @return    array
     * @author    Kita Yasuhiro
     * @throws    Exception
     */
    public function get_bill_print_data($id)
    {
        // テーブル設定
        $this->m_tbl_name = T_SALES_MNG;

        // Prefix 設定
        $this->m_prefix = "sales";

        $this->db->select("sales.customer_name");
        $this->db->select("sales.handler_name");
        $this->db->select("sales.sales_memo");
        $this->db->select("sales.sum_money");
        $this->db->select("sales.sum_tax");
        $this->db->select("sales.sum_no_tax");
        $this->db->select("sales.bill_date");
        $this->db->select("sales.book_date");
        $this->db->select("bill_p.bill_no");
        $this->db->select("det.report_no");
        $this->db->select("det.goods_name");
        $this->db->select("det.cnt");
        $this->db->select("det.unit");
        $this->db->select("det.unit_price");
        $this->db->select("det.no_tax_money");
        $this->db->select("det.tax_type");
        $this->db->select("det.unit_memo");
        $this->db->select("(CASE WHEN det.tax is null THEN 0 ELSE det.tax END) as tax");
        $this->db->select("mbp.tax_group");
        $this->db->select("mbp.group_name");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_TAX_TYPE_BILL . "' AND item_cd=det.tax_type) as tax_type_name ");
        $this->db->select("(det.no_tax_money + det.tax) as in_tax_money");
        $this->db->select("cus.card_print_type");

        // JOIN句作成
        $this->db->join(M_CUSTOMER . " cus", "sales.customer_id=cus.customer_id", "LEFT");
        $this->db->join(T_BILL_DATA . " bill_c", "sales.sales_mng_id=bill_c.sales_mng_id", "LEFT");
        $this->db->join(T_BILL_MNG . " bill_p", "bill_c.bill_mng_id=bill_p.bill_mng_id", "LEFT");
        $this->db->join(T_SALES_DETAIL . " det", "sales.sales_mng_id=det.sales_mng_id", "LEFT");
        $this->db->join(M_SYS_BILL_TAX_GROUP . " mbp", "mbp.tax_type=det.tax_type", "LEFT");

        // WHERE句作成
        $this->db->where("bill_p.bill_mng_id = " . $id);

        $this->db->order_by("sales.book_date");

        return $this->select();
    }

    /**
     * 請求書一覧情報の総件数を取得する
     *
     * @access    public
     * @param $condition string
     * @return    int
     */
    public function get_list_cnt($condition = "")
    {
        $this->db->select('count(*) as cnt');
        $this->db->from(T_SALES_MNG . " sales");
        $this->db->join(M_CUSTOMER . " cus", "sales.customer_id=cus.customer_id", "LEFT");
        $this->db->join(T_BILL_DATA . " b_data", "sales.sales_mng_id=b_data.sales_mng_id", "left");
        $this->db->join(T_BILL_MNG . " b_mng", "b_mng.bill_mng_id=b_data.bill_mng_id", "left");
        $this->db->where('sales.delete_flg', FLG_OFF);
        $this->db->where('sales.cutoff_date_from is not null');
        $this->db->where("sales.first_data_flg", FLG_OFF);
        // GROUP句作成
        $this->db->group_by("sales.customer_disp_name, sales.customer_name, sales.customer_id, sales.cutoff_date_from, sales.cutoff_date_to, sales.bill_date, b_mng.bill_mng_id");

        if (!empty($condition)) {
            $this->db->where($condition);
        }

        $query = $this->db->get();
        $result = $query->result();

        return count($result);
    }

    /**
     * 一覧の絞込条件を作成する
     *
     * @access private
     * @return string
     * @author Kita Yasuhiro
     */
    public function create_search_condition()
    {
        $condition = array();
        $data = $this->get_input_condition();

        if (count($data) == 0) return "";

        // 得意先名称
        if (!empty($data['customer_name_s'])) {
            $condition[] = "(sales.customer_name like '%" . $this->db->escape_like_str($data['customer_name_s'])
                . "%' or sales.customer_disp_name like '%" . $this->db->escape_like_str($data['customer_name_s'])
                . "%' or cus.customer_furi like '%" . $this->db->escape_like_str($data['customer_name_s']) . "%')";
        }

        // TODO@締日 画面の見せ方を検討後再実装
        if (!empty($data['cutoff_date'])) {

            if ($data['cutoff_date'] == "99") {
                $condition[] = "(sales.cutoff_date is null)";
            } else {
                $condition[] = "(sales.cutoff_date = " . $this->db->escape_like_str($data['cutoff_date']) . ")";
            }

        }

        // 請求書発行状況
        if (!empty($data['bill_status_type'])) {

            if ($data['bill_status_type'] == "1") {
                $condition[] = "(b_mng.bill_mng_id is null)";
            } else if ($data['bill_status_type'] == "2") {
                $condition[] = "(b_mng.bill_mng_id is not null)";
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
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_mst_data()
    {
        $data = array();

        // 部門
        $this->load->model("mainte/customer_mdl");
        $data['cutoff_date'] = $this->customer_mdl->get_cutoff_list("bill");

        // 請求書発行状況
        $data['bill_status_type'] = $this->general_name_mdl->get_bill_status_type();

        return $data;
    }

    /**
     * 請求書売上登録データの作成
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function _get_bill_data()
    {
        $res = array();
        $input = $_POST;

        $i = 0;
        foreach ($this->input->post('print_chk') as $val) {

            $res[$i]['bill_no'] = "";
            $res[$i]['publish_date'] = date('Y/m/d');
            $res[$i]['bill_type'] = BILL_TYPE_C;

            $key = array_keys($input['sales_mng_id'], $val);

            // 売上情報を取得する
            $this->db->where("sales.customer_disp_name = '" . $input['customer_disp_name'][$key[0]] . "'");
            $this->db->where("date_format(sales.bill_date, '%Y/%m/%d') = '" . $input['bill_date'][$key[0]] . "'");
//                $this->db->where("sales.credit_type = '".$input['credit_type'][$key[0]]."'");
            $sales = $this->get_list_data("");

            $res[$i]['bill_money'] = $sales[0]->sum_money;
            $res[$i]['bill_mng_id'] = $sales[0]->bill_mng_id;
            $res[$i]['credit_type'] = $sales[0]->credit_type;
            $res[$i]['customer_disp_name'] = $sales[0]->customer_disp_name;
            $res[$i]['customer_name'] = $sales[0]->customer_name;
            $res[$i]['bill_date'] = slash_date($sales[0]->bill_date);
            $res[$i]['cutoff_date_from'] = slash_date($sales[0]->cutoff_date_from);
            $res[$i]['cutoff_date_to'] = slash_date($sales[0]->cutoff_date_to);
            if (empty($sales[0]->customer_id)) {
                $res[$i]['customer_id'] = null;
            } else {
                $res[$i]['customer_id'] = $sales[0]->customer_id;
            }

            $alId = explode(",", $sales[0]->sales_mng_id);
            for ($j = 0; $j < count($alId); $j++) {
                $res[$i]['sales_mng_id'][$j] = $alId[$j];
            }
            $res[$i]['bef_bill_money'] = $input['sum_money'][$key[0]];

            $i++;
        }

        return $res;

    }

    /**
     * 請求書の作成
     *
     * @access private
     * @return void
     * @author Kita Yasuhiro
     */
    public function print_bill()
    {

        foreach ($this->m_mng_id as $val) {
            $data = $this->get_bill_print_data($val);

            $this->load->library('bill_pdf');

            $this->bill_pdf->display($data, "cutoff");

        }

    }

    /**
     * 請求書の作成
     *
     * @access private
     * @param $id int
     * @return void
     * @author Kita Yasuhiro
     * @throws Exception
     */
    public function disp_bill($id)
    {
        $data = $this->get_bill_print_data($id);
        $this->load->library('bill_pdf');
        $this->bill_pdf->display($data, "cutoff");
    }


    /**
     * 検索条件の入力値を取得
     *
     * @access private
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

/* End of file bill_cutoff_mdl.php */
/* Location: ./application/model/bill/bill_cutoff_mdl.php */
