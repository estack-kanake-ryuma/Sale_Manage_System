<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sales_print_sum_mdl extends MY_Model
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
     * 売上集計表データ(摘要別)
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_abstract_data($where)
    {

        // テーブル設定
        $this->m_tbl_name = V_SALES_INFO;
        $this->m_prefix = "mng";

        $this->db->select("'売上集計表 － 摘要別' as title", false);
        $this->db->select("mng.abstract_id");
        $this->db->select("mng.abstract_name");
        $this->db->select("mng.institute_id");
        $this->db->select("mng.institute_name");
        $this->db->select("mng.depart_id");
        $this->db->select("mng.depart_name");
        $this->db->select("mng.customer_type");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_CUSTOMER_TYPE . "' AND item_cd=mng.customer_type) as customer_type_name ");
        $this->db->select("sum(no_tax_money) as sum_no_tax");
        $this->db->select("sum(tax) as sum_tax");
        $this->db->select("sum(in_tax_money) as sum_money");

        // GROUP句作成
        $this->db->group_by("mng.abstract_id, institute_id, depart_id, mng.customer_type");

        // WHERE句作成
        $date = $this->_get_target_date();
        $this->db->where("date_format(mng.book_date, '%Y/%m/%d') >= '" . $date['now_from'] . "'");
        $this->db->where("date_format(mng.book_date, '%Y/%m/%d') <= '" . $date['now_to'] . "'");
        if (!empty($where)) {
            $where = str_replace("#PREFIX#", "mng.", $where);
            $this->db->where($where);
        }

        // ORDER句の設定
        $this->db->order_by("mng.abstract_id", "asc");
        $this->db->order_by("mng.institute_id", "asc");
        $this->db->order_by("mng.depart_id", "asc");
        $this->db->order_by("mng.customer_type", "asc");

        return $this->select();

    }

    /**
     * 売上集計表データ(摘要別)
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_handler_data($where)
    {

        // テーブル設定
        $this->m_tbl_name = V_SALES_INFO;
        $this->m_prefix = "mng";

        $this->db->select("'売上集計表 － 担当者別' as title", false);
        $this->db->select("'" . SEGMENT_HANDLER . "' as unit", false);
        $this->db->select("mng.handler_id");
        $this->db->select("mng.handler_name");
        $this->db->select("mng.abstract_id");
        $this->db->select("mng.abstract_name");
        $this->db->select("mng.customer_id");
        $this->db->select("mng.customer_disp_name as customer_name");
        $this->db->select("sum(no_tax_money) as sum_no_tax");

        $this->db->join(M_HANDLER . " hand", "mng.handler_id=hand.handler_id and hand.delete_flg = 0", "LEFT");

        // GROUP句作成
        $this->db->group_by("mng.handler_id, mng.abstract_id, mng.customer_id, mng.customer_disp_name");

        // WHERE句作成
        $date = $this->_get_target_date();
        $this->db->where("date_format(mng.book_date, '%Y/%m/%d') >= '" . $date['now_from'] . "'");
        $this->db->where("date_format(mng.book_date, '%Y/%m/%d') <= '" . $date['now_to'] . "'");
        if (!empty($where)) {
            $where = str_replace("#PREFIX#", "mng.", $where);
            $this->db->where($where);
        }

        // ORDER句の設定
        $this->db->order_by("handler_furi", "asc");
        $this->db->order_by("mng.handler_name", "asc");
        $this->db->order_by("mng.abstract_name", "asc");
        $order = $this->get_order_sql("sales_sum_handler_order");
        if (isset($order)) {
            $this->db->order_by($order);
        }


        return $this->select();

    }

    /**
     * 売上集計表データ(得意先別)
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_customer_data($where)
    {

        $date = $this->_get_target_date();

        $sql = " SELECT ";
        $sql .= " tbl_c.* ";
        $sql .= " , now_no_tax - bef_no_tax as diff_no_tax";
        $sql .= " from ";
        $sql .= " ( ";
        $sql .= "   SELECT ";
        $sql .= "    customer_disp_name  ";
        $sql .= "    ,customer_id  ";
        $sql .= "    ,sum(case when date_format(book_date, '%Y/%m/%d') >= '" . $date['now_from'] . "' and date_format(book_date, '%Y/%m/%d') <= '" . $date['now_to'] . "' then no_tax_money else 0 END) as now_no_tax ";
        $sql .= "    ,sum(case when date_format(book_date, '%Y/%m/%d') >= '" . $date['last_from'] . "' and date_format(book_date, '%Y/%m/%d') <= '" . $date['last_to'] . "' then no_tax_money else 0 END) as bef_no_tax ";
        $sql .= "   FROM " . V_SALES_INFO;
        if (!empty($where)) {
            $where = str_replace("#PREFIX#", "", $where);
            $sql .= " WHERE " . $where;
        }
        $sql .= "   GROUP BY customer_disp_name";
        $sql .= " ) tbl_c ";
        $sql .= "   LEFT JOIN " . M_CUSTOMER . " cus ON tbl_c.customer_disp_name=cus.customer_disp_name and cus.delete_flg=0 ";
        $sql .= " WHERE (now_no_tax <> 0 OR bef_no_tax <> 0) ";
        $sql .= " ORDER BY ";
        $order = $this->get_order_sql("sales_sum_customer_order");
        if (isset($order)) {
            $sql .= $order;
        }

        $ret = $this->db->query($sql);
        $res = $ret->result();


        return $res;

    }


    /**
     * 売上集計表データ(部門別摘要表示あり)
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_depart_on_data($where)
    {
        $date = $this->_get_target_date();

        $sql = " SELECT ";
        $sql .= " * ";
        $sql .= " , now_no_tax - bef_no_tax as diff_no_tax";
        $sql .= " from ";
        $sql .= " ( ";
        $sql .= "   SELECT ";
        $sql .= "    customer_disp_name as customer_name, customer_furi, institute_id, institute_name, depart_id, depart_name, abstract_id, abstract_name ";
        $sql .= "    ,sum(case when date_format(book_date, '%Y/%m/%d') >= '" . $date['now_from'] . "' and date_format(book_date, '%Y/%m/%d') <= '" . $date['now_to'] . "' then no_tax_money else 0 END) as now_no_tax ";
        $sql .= "    ,sum(case when date_format(book_date, '%Y/%m/%d') >= '" . $date['last_from'] . "' and date_format(book_date, '%Y/%m/%d') <= '" . $date['last_to'] . "' then no_tax_money else 0 END) as bef_no_tax ";
        $sql .= "    ,CONCAT(institute_id, ',', depart_id) as disp_depart_id ";
        $sql .= "    ,CONCAT(institute_name, ',', depart_name) as disp_depart ";
        $sql .= "    ,'売上集計表 － 部門別' as title";
        $sql .= "   FROM " . V_SALES_INFO;
        if (!empty($where)) {
            $where = str_replace("#PREFIX#", "", $where);
            $sql .= " WHERE " . $where;
        }
        $sql .= "   GROUP BY institute_id,depart_id,customer_disp_name,abstract_id";
        $sql .= " ) tbl_c ";
        $sql .= " WHERE (now_no_tax <> 0 OR bef_no_tax <> 0) ";
        $sql .= " ORDER BY institute_id asc, depart_id asc, customer_furi is null asc, customer_furi asc ";
        $order = $this->get_order_sql("sales_sum_depart_order");
        if (isset($order)) {
            $sql .= " ," . $order;
        }

        $ret = $this->db->query($sql);
        $res = $ret->result();

        return $res;
    }

    /**
     * 売上集計表データ(部門別摘要表示なし)
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_depart_off_data($where)
    {

        $date = $this->_get_target_date();

        $sql = " SELECT ";
        $sql .= " * ";
        $sql .= " , now_no_tax - bef_no_tax as diff_no_tax";
        $sql .= " from ";
        $sql .= " ( ";
        $sql .= "   SELECT ";
        $sql .= "    customer_disp_name as customer_name, customer_furi, institute_id, institute_name, depart_id, depart_name ";
        $sql .= "    ,sum(case when date_format(book_date, '%Y/%m/%d') >= '" . $date['now_from'] . "' and date_format(book_date, '%Y/%m/%d') <= '" . $date['now_to'] . "' then no_tax_money else 0 END) as now_no_tax ";
        $sql .= "    ,sum(case when date_format(book_date, '%Y/%m/%d') >= '" . $date['last_from'] . "' and date_format(book_date, '%Y/%m/%d') <= '" . $date['last_to'] . "' then no_tax_money else 0 END) as bef_no_tax ";
        $sql .= "    ,CONCAT(institute_id, ',', depart_id) as disp_depart_id ";
        $sql .= "    ,CONCAT(institute_name, ',', depart_name) as disp_depart ";
        $sql .= "    ,'売上集計表 － 部門別' as title";
        $sql .= "   FROM " . V_SALES_INFO;
        if (!empty($where)) {
            $where = str_replace("#PREFIX#", "", $where);
            $sql .= " WHERE " . $where;
        }
        $sql .= "   GROUP BY institute_id,depart_id,customer_disp_name";
        $sql .= " ) tbl_c ";
        $sql .= " WHERE (now_no_tax <> 0 OR bef_no_tax <> 0) ";
        $sql .= " ORDER BY institute_id asc, depart_id asc ";
        $order = $this->get_order_sql("sales_sum_depart_order");
        if (isset($order)) {
            $sql .= " ," . $order;
        }
        $sql .= " ,customer_furi is null asc";
        $sql .= " ,customer_furi asc";

        $ret = $this->db->query($sql);
        $res = $ret->result();

        return $res;

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

        if (count($data) == 0) return;

        // 研究所
        if (!empty($data['institute_id'])) {
            $condition[] = "(#PREFIX#institute_id=" . $data['institute_id'] . ")";
        }
        // 部門
        if (!empty($data['depart_id'])) {
            $condition[] = "(#PREFIX#depart_id=" . $data['depart_id'] . " )";
        }
        // 摘要
        if (!empty($data['abstract_id'])) {
            $condition[] = "(#PREFIX#abstract_id=" . $data['abstract_id'] . ")";
        }
        // 担当者
        if (!empty($data['handler_id'])) {
            $condition[] = "(#PREFIX#handler_id=" . $data['handler_id'] . ")";
        }
        // 得意先名称
        if (!empty($data['customer_name'])) {
            $condition[] = "(#PREFIX#customer_name like '%" . $this->db->escape_like_str($data['customer_name'])
                . "%' or #PREFIX#customer_disp_name like '%" . $this->db->escape_like_str($data['customer_name'])
                . "%' or #PREFIX#customer_furi like '%" . $this->db->escape_like_str($data['customer_name']) . "%')";
        }
        // 得意先区分
        if (!empty($data['customer_type'])) {
            $condition[] = "(#PREFIX#customer_type=" . $data['customer_type'] . ")";
        }

        // 検索条件返却
        $res = "";
        if (count($condition) > 0) {
            $res = implode(' and ', $condition);
        }

        return $res;
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

        // 得意先区分
        $data['customer_type'] = $this->general_name_mdl->get_customer_type();

        // 部門
        $this->m_tbl_name = M_DEPART;
        $data['depart_list'] = $this->get_name_list(array("depart_id", "depart_name"));

        // 研究所
        $this->m_tbl_name = M_INSTITUTE;
        $data['institute_list'] = $this->get_name_list(array("institute_id", "institute_name"));

        // 摘要
        $this->m_tbl_name = M_ABSTRACT;
        $data['abstract_list'] = $this->get_name_list(array("abstract_id", "abstract_name"));

        // 担当者
        $this->m_tbl_name = M_HANDLER;
        $this->db->order_by("handler_furi", "asc");
        $data['handler_list'] = $this->get_name_list(array("handler_id", "handler_name"));

        // 得意先区分
        $data['customer_type'] = $this->general_name_mdl->get_customer_type();

        $segment = $this->input->post("segment");
        $ary_order = array();
        switch ($segment) {
            case SEGMENT_DEPART:
                $ary_order = $this->config->item("sales_sum_depart_order");
                break;
            case SEGMENT_ABSTRACT:
                $ary_order = $this->config->item("sales_sum_abstract_order");
                break;
            case SEGMENT_HANDLER:
                $ary_order = $this->config->item("sales_sum_handler_order");
                break;
            case SEGMENT_CUSTOMER:
                $ary_order = $this->config->item("sales_sum_customer_order");
                break;
            default:
                break;
        }

        $data['seq_item_list'] = $ary_order;

        // セグメント
        $data['segment'] = $this->general_name_mdl->get_segment();


        return $data;

    }

    /**
     * 入力された日付を配列で返却
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function _get_target_date()
    {

        $res = array();

        $data = $this->get_input_condition();

        $res['now_from'] = $data['book_date_from'];
        $res['now_to'] = $data['book_date_to'];

        $ary_from = explode("/", $data['book_date_from']);
        $last_from = compute_month($ary_from[0], $ary_from[1], $ary_from[2], -12);

        $res['last_from'] = $last_from;

        $ary_to = explode("/", $data['book_date_to']);
        $last_to = compute_month($ary_to[0], $ary_to[1], $ary_to[2], -12);

        $res['last_to'] = $last_to;

        return $res;
    }

}

/* End of file sales_print_sum_mdl.php */
/* Location: ./application/models/bill/sales_print_sum_mdl.php */