<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Bill_sales_mdl
 *
 * 請求書(売上単位)のモデルクラス
 */
class Bill_sales_mdl extends MY_Model
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
     * 登録処理
     *
     * @access    public
     * @param $err_msg String
     * @return    boolean
     * @author    Kita Yasuhiro
     */
    public function regist_data(&$err_msg)
    {

        $data = $this->_get_bill_sales_mng_data();

        if (count($data) === 0) {
            return FALSE;
        }

        $i = 1;
        $err_msg = '';
        foreach ($data as $ins_data) {

            if (empty($ins_data['bill_mng_id'])) {

                // 売上が変更されているかチェック
                if ($this->chk_sales_data($ins_data) == false) {
                    if ($i == 1) {
                        if (empty($ins_date['bill_date'])) {
                            $err_msg = '下記の売上が削除されている為、請求書を発行できません。\n\n';
                        } else {
                            $err_msg = '下記の請求書の請求金額が変わっている為、再度請求書を発行してください。\n\n';
                        }
                    }
                    if (empty($ins_date['bill_date'])) {
                        $err_msg .= $i . ". 請求書発行日：" . $ins_data['publish_date'] . "   売上金額：" . $ins_data['bef_bill_money'] . '\n';
                    } else {
                        $err_msg .= $i . ". " . $ins_data['customer_disp_name'] . "   請求日：" . $ins_data['bill_date'] . '\n';
                    }
                    $i++;
                    continue;
                }

                // 自動取込済みデータが含まれているデータの請求書は発行しない
                if ($this->chk_exist_outside_receive_data($ins_data['sales_mng_id']) == true) {
                    if ($err_msg != '') {
                        $err_msg .= '\n\n';
                    }
                    $err_msg .= '下記の請求書は自動取込データが含まれているため、請求書を発行できません。\n\n';
                    $err_msg .= $i . ". " . $ins_data['customer_disp_name'] . "   請求日：" . $ins_data['bill_date'] . '\n';
                    $i++;
                    continue;
                }


                //━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
                // 登録処理
                //━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

                $mng_ary = $ins_data;

                // 請求書番号の取得
                $mng_ary['bill_no'] = $this->get_bill_no(array($ins_data['sales_mng_id']));

                // 不要なパラメタの削除
                unset($mng_ary['bill_mng_id']);
                unset($mng_ary['sales_mng_id']);
                unset($mng_ary['bef_credit_type']);
                unset($mng_ary['bef_bill_money']);

                // T_BILL_MNGのINSERT処理
                $this->m_tbl_name = T_BILL_MNG;
                $this->insert($mng_ary);

                // T_BILL_DATAのINSERT処理
                $this->m_tbl_name = T_BILL_DATA;
                $mng_id = $this->db->insert_id();
                $this->insert(array("bill_mng_id" => $mng_id, "sales_mng_id" => $ins_data['sales_mng_id']));

                // 売上情報のステータスを変更する
                $this->m_tbl_name = T_SALES_MNG;
                $this->m_where = array('sales_mng_id' => $ins_data['sales_mng_id']);
                $this->update(array('data_status_type' => DATA_TYPE_BILL, 'bill_no' => $mng_ary['bill_no']));

            } else {
                // 変更処理

            }

        }

        return TRUE;

    }

    /**
     * 削除処理
     *
     * @access    public
     * @param $id int
     * @return    boolean
     * @author    Kita Yasuhiro
     */
    public function delete_data($id)
    {

        // トランザクション開始
        $this->db->trans_start();

        $res = $this->_get_bill_data($id);

        // 売上データのステータスを変更
        $this->load->model('bill/sales_mdl');
        $this->sales_mdl->update_del_bill_status($id);

        if (count($res) == 0) return;

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
     */
    private function _get_bill_data($bill_id)
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
     * @param $ins_data array
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function chk_sales_data($ins_data)
    {

        // input情報で売上情報を取得
        if ($ins_data['bill_money'] <> $ins_data['bef_bill_money']) {
            return false;
        }

        if ($ins_data['credit_type'] <> $ins_data['bef_credit_type']) {
            return false;
        }


        return true;

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
        $this->m_tbl_name = T_SALES_MNG;

        // Prefix 設定
        $this->m_prefix = "sales";

        $this->db->select("sales.sales_mng_id");
        $this->db->select("sales.customer_id");
        $this->db->select("sales.customer_disp_name");
        $this->db->select("sales.customer_name");
        $this->db->select("sales.customer_type");
        $this->db->select("sales.bill_date");
        $this->db->select("sales.handler_id");
        $this->db->select("sales.handler_name");
        $this->db->select("sales.institute_id");
        $this->db->select("sales.institute_name");
        $this->db->select("sales.depart_id");
        $this->db->select("sales.depart_name");
        $this->db->select("sales.sum_money");
        $this->db->select("sales.credit_type");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_CREDIT_TYPE . "' AND item_cd=sales.credit_type) as credit_type_name ");
        $this->db->select("(CASE WHEN bill_p.bill_mng_id IS NOT NULL THEN bill_p.bill_no ELSE sales.bill_no END) as bill_no");
        $this->db->select("bill_p.bill_mng_id");
        $this->db->select("credit.credit_mng_id");

        // JOIN句作成
        $this->db->join(M_CUSTOMER . " cus", "sales.customer_id=cus.customer_id", "left");
        $this->db->join(M_HANDLER . " handler", "sales.handler_id=handler.handler_id", "left");
        $this->db->join(T_BILL_DATA . " bill_c", "sales.sales_mng_id=bill_c.sales_mng_id", "left");
        $this->db->join(T_BILL_MNG . " bill_p", "bill_c.bill_mng_id=bill_p.bill_mng_id", "left");
        $this->db->join(T_CREDIT_MNG . " credit", "bill_p.bill_mng_id=credit.bill_mng_id", "left");

        // WHERE句作成
        $this->db->where("sales.first_data_flg", FLG_OFF);
        $this->db->where("cus.cutoff_date is null");
        if (!empty($where)) {
            $this->db->where($where);
        }

        // リミット設定
        $this->db->limit(PER_PAGE_CNT, $start);

        // ORDER句の設定
        $order_type = $this->session->userdata(SS_KEY_ORDER_TYPE);

        if ($order_type === FLG_ON) {
            $this->db->order_by("sales.data_status_type", "asc");
            $this->db->order_by("bill_p.last_datetime", "desc");
        } else {
            $this->db->order_by("(CASE WHEN sales.data_status_type = " . DATA_TYPE_IMPORT . " THEN " . DATA_TYPE_SALES . " ELSE sales.data_status_type END)");
        }

        $this->db->order_by("sales.bill_date", "desc");
        $this->db->order_by("sales.sales_mng_id", "asc");

        return $this->select();
    }

    /**
     * 請求書出力用データを取得
     *
     * @access    public
     * @param integer $id
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_bill_print_data($id)
    {

        // テーブル設定
        $this->m_tbl_name = T_SALES_MNG;

        // Prefix 設定
        $this->m_prefix = "sales";

        $this->db->select("sales.customer_name");
        $this->db->select("sales.customer_id");
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
        $this->db->select("det.tax_type");
        $this->db->select("det.cnt");
        $this->db->select("det.unit");
        $this->db->select("det.unit_price");
        $this->db->select("det.no_tax_money");
        $this->db->select("(CASE WHEN det.tax is null THEN 0 ELSE det.tax END) as tax");
        $this->db->select("det.tax");
        $this->db->select("det.unit_memo");
        $this->db->select("mbp.tax_group");
        $this->db->select("mbp.group_name");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_TAX_TYPE_BILL . "' AND item_cd=det.tax_type) as tax_type_name ");
        $this->db->select("CASE WHEN det.tax is null then det.no_tax_money ELSE (det.no_tax_money + det.tax) END as in_tax_money", false);
//            $this->db->select("(det.no_tax_money + det.tax) as in_tax_money");
        $this->db->select("cus.card_print_type");

        // JOIN句作成
        $this->db->join(M_CUSTOMER . " cus", "sales.customer_id=cus.customer_id", "LEFT");
        $this->db->join(T_BILL_DATA . " bill_c", "sales.sales_mng_id=bill_c.sales_mng_id", "LEFT");
        $this->db->join(T_BILL_MNG . " bill_p", "bill_c.bill_mng_id=bill_p.bill_mng_id", "LEFT");
        $this->db->join(T_SALES_DETAIL . " det", "sales.sales_mng_id=det.sales_mng_id", "LEFT");
        $this->db->join(M_SYS_BILL_TAX_GROUP . " mbp", "mbp.tax_type=det.tax_type", "LEFT");

        // WHERE句作成
        $this->db->where("sales.sales_mng_id in (" . $id . ")");

        $this->db->order_by("sales.book_date");

        return $this->select();
    }

    /**
     * 請求書一覧情報の総件数を取得する
     *
     * @access    public
     * @param String $condition
     * @return    int
     * @author    Kita Yasuhiro
     */
    public function get_list_cnt($condition = "")
    {

        $this->db->select('count(*) as cnt');
        $this->db->from(T_SALES_MNG . " sales");
        $this->db->where('sales.delete_flg', FLG_OFF);
        $this->db->where("sales.first_data_flg", FLG_OFF);

        $this->db->join(T_BILL_DATA . " bill_c", "bill_c.sales_mng_id=sales.sales_mng_id", "left");
        $this->db->join(T_BILL_MNG . " bill_p", "bill_p.bill_mng_id=bill_c.bill_mng_id", "left");
        $this->db->join(M_CUSTOMER . " cus", "sales.customer_id=cus.customer_id", "left");
        $this->db->join(M_HANDLER . " handler", "sales.handler_id=handler.handler_id", "left");

        $this->db->where("cus.cutoff_date is null");

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
            $condition[] = "(sales.customer_name like '%" . $this->db->escape_like_str($data['customer_name_s'])
                . "%' or sales.customer_disp_name like '%" . $this->db->escape_like_str($data['customer_name_s'])
                . "%' or cus.customer_furi like '%" . $this->db->escape_like_str($data['customer_name_s']) . "%')";
        }
        // 請求日
        if (!empty($data['bill_date_from'])) {
            $condition[] = "date_format(sales.bill_date, '%Y/%m/%d') >= " . $this->db->escape($data['bill_date_from']);
        }
        if (!empty($data['bill_date_to'])) {
            $condition[] = "date_format(sales.bill_date, '%Y/%m/%d') <= " . $this->db->escape($data['bill_date_to']);
        }

        // 担当者名称
        if (!empty($data['handler_name'])) {
            $condition[] = "(sales.handler_name like '%" . $this->db->escape_like_str($data['handler_name'])
                . "%' or handler.handler_furi like '%" . $this->db->escape_like_str($data['handler_name']) . "%')";
        }
        // 報告書No
        if (!empty($data['report_no'])) {
            $condition[] = "(EXISTS ("
                . "SELECT sales_detail_id "
                . "FROM t_sales_detail detail "
                . "WHERE sales.sales_mng_id=detail.sales_mng_id "
                . "AND detail.delete_flg = 0 "
                . "AND detail.report_no like '%" . $this->db->escape_like_str($data['report_no']) . "%'))";
        }
        // 研究所
        if (!empty($data['institute_id'])) {
            $condition[] = "(sales.institute_id=" . $data['institute_id'] . ")";
        }
        // 部門
        if (!empty($data['depart_id'])) {
            $condition[] = "(sales.depart_id=" . $data['depart_id'] . ")";
        }

        // 請求書番号
        if (!empty($data['bill_no'])) {
            $condition[] = "(bill_p.bill_no like '%" . $this->db->escape_like_str($data['bill_no']) . "%')";
        }

        // 請求書発行状況
        if (!empty($data['bill_status_type'])) {

            if ($data['bill_status_type'] == "1") {
                $condition[] = "(bill_p.bill_mng_id is null)";
            } else if ($data['bill_status_type'] == "2") {
                $condition[] = "(bill_p.bill_mng_id is not null)";
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
        $this->m_tbl_name = M_DEPART;
        $data['depart_list'] = $this->get_name_list(array("depart_id", "depart_name"));

        // 研究所
        $this->m_tbl_name = M_INSTITUTE;
        $data['institute_list'] = $this->get_name_list(array("institute_id", "institute_name"));

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
    private function _get_bill_sales_mng_data()
    {
        $res = array();

        $i = 0;
        foreach ($this->input->post('print_chk') as $val) {

            if (empty($val)) continue;

            $res[$i]['sales_mng_id'] = $val;
            $res[$i]['bill_no'] = "";
            $res[$i]['bill_type'] = BILL_TYPE_S;
            $res[$i]['publish_date'] = date('Y/m/d');

            $this->db->where("sales.sales_mng_id = " . $val);
            $sales = $this->get_list_data("");

            $key = array_keys($_POST['sales_mng_id'], $val);

            $res[$i]['bill_mng_id'] = $sales[0]->bill_mng_id;
            $res[$i]['credit_type'] = $sales[0]->credit_type;
            $res[$i]['customer_disp_name'] = $sales[0]->customer_disp_name;
            $res[$i]['customer_name'] = $sales[0]->customer_name;
            $res[$i]['bill_money'] = $sales[0]->sum_money;
            $res[$i]['bill_date'] = slash_date($sales[0]->bill_date);

            $res[$i]['bef_bill_money'] = $_POST['bill_money'][$key[0]];
            $res[$i]['bef_credit_type'] = $_POST['credit_type'][$key[0]];

            if (empty($sales[0]->customer_id)) {
                $res[$i]['customer_id'] = NULL;
            } else {
                $res[$i]['customer_id'] = $sales[0]->customer_id;
            }

            $i++;
        }

        return $res;

    }

    /**
     * 請求書番号の取得
     *
     * @access public
     * @param $sales_mng_id_ary array
     * @return String
     * @author Kita Yasuhiro
     */
    public function get_bill_no($sales_mng_id_ary = array())
    {
        // 売上情報の指定がある場合は売上情報内の請求書番号を確認する
        if (count($sales_mng_id_ary) > 0) {
            // 売上情報内に退避している前回の請求書番号を取得する
            $bill_no = $this->_get_sales_mng_bill_no($sales_mng_id_ary);

            // 請求書番号がある場合はその番号を利用する
            if (!empty($bill_no)) {
                return $bill_no;
            }

        }

        //━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
        // 通常の請求書番号の採番処理
        //━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

        $alpha = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        $max_no = "9999999";

        // 請求書番号の最終番号を取得する
        $max_bill_no = $this->_get_max_bill_no();

        if ($max_bill_no == "") return "SKK0000001";

        $bill_no = str_replace("SKK", "", $max_bill_no);
        $str = "";
        $index = "";
        $bAlpha = false;
        foreach ($alpha as $key => $val) {
            $str = strstr($bill_no, $val);
            $index = $key;
            if ($str) {
                $bAlpha = true;
                break;
            }
        }

        if ($bAlpha) {
            if ($str == "999999") {
                return $alpha[$index + 1] + "000001";
            } else {
                $str = $str + 1;
                return "SKK" . $alpha[$index] . str_pad($str, 6, '0', STR_PAD_LEFT);
            }
        } else {
            if ($bill_no == $max_no) {
                return "SKKA000001";
            } else {
                $bill_no = $bill_no + 1;
                return "SKK" . str_pad($bill_no, 7, '0', STR_PAD_LEFT);
            }

        }
    }

    /**
     * 請求書の作成
     *
     * @access private
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

    /**
     * 売上情報内の請求書番号を取得する
     *
     * @access private
     * @param $sales_mng_id_ary array
     * @return string
     * @throws Exception
     */
    private function _get_sales_mng_bill_no($sales_mng_id_ary)
    {

        $this->m_tbl_name = T_SALES_MNG;
        $this->m_prefix = "mng";

        $this->db->select("mng.bill_no");
        $this->db->where("mng.bill_no IS NOT NULL");
        $this->db->where("mng.bill_no <> ''");
        $this->db->where_in("mng.sales_mng_id", $sales_mng_id_ary);
        $this->db->group_by("mng.bill_no");
        $res = $this->select();

        if (count($res) == 1) {
            return $res[0]->bill_no;
        } else {
            return NULL;
        }

    }

    /**
     * 請求書番号の最終番号を取得する
     *
     * @access public
     * @return string
     */
    private function _get_max_bill_no()
    {

        $sql =
            "select
max(no_mng.bill_no) as bill_no
from
(
	select
	b_mng.bill_no
	from t_bill_mng b_mng
	union all
	select
	s_mng.bill_no
	from t_sales_mng s_mng
	where s_mng.bill_no is not null and s_mng.bill_no <> ''
) no_mng";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result[0]->bill_no;
    }

    /**
     * 請求書番号を初期化する
     *
     * @access public
     * @param $sales_mng_id_ary array
     * @return void
     */
    public function clear_bill_no($bill_no)
    {

        // 売上情報のステータスを変更する
        $this->m_tbl_name = T_SALES_MNG;
        $this->db->where('bill_no', $bill_no);
        $this->update(array('bill_no' => NULL));

    }

    /**
     * 請求書のステータスを確認する
     *
     * @param $bill_no string
     * @return boolean
     */
    public function chk_bill_status($bill_no)
    {
        $this->m_tbl_name = T_BILL_MNG;
        $this->m_prefix = 'b_mng';
        $this->db->select('count(*) as cnt');
        $this->db->where('b_mng.bill_no', $bill_no);

        // 検索実行
        $result = $this->select();

        $count = $result[0]->cnt;

        if ($count === '0') {
            return true;
        } else {
            return false;
        }

    }

    /**
     * 自動取込済みのデータが存在するかチェックを行う
     *
     * @param array $sales_mng_id
     * @return boolean
     */
    public function chk_exist_outside_receive_data($sales_mng_id)
    {
        $this->m_tbl_name = T_SALES_MNG;
        $this->m_prefix = 's_mng';
        $this->db->select('count(*) as cnt');
        $this->db->where('s_mng.data_status_type', DATA_TYPE_IMPORT);
        $this->db->where_in('s_mng.sales_mng_id', $sales_mng_id);

        // 検索実行
        $result = $this->select();

        $count = $result[0]->cnt;

        if ($count == '0') {
            return FALSE;
        } else {
            return TRUE;
        }

    }
}

/* End of file bill_sales_mdl.php */
/* Location: ./application/model/bill/bill_sales_mdl.php */
