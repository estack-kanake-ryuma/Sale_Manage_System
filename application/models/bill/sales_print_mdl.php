<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sales_print_mdl extends MY_Model
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
     * 売上明細一覧データ取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_data($where, $type)
    {

        if ($type == "pdf") {
            $col_ary = $this->get_pdf_colum();
        } else {
            $col_ary = $this->get_csv_colum();
        }

        if ($type == "pdf") {
            $sql = "SELECT concat(institute_name,\" \",depart_name,\"【\",name.item_name,\"】\") as segment ,tbl.* FROM ( ";
        } else {
            $sql = "SELECT institute_name, depart_name, abstract_name, customer_name, item_name, book_date, report_no, handler_name, goods_name, no_tax_money FROM ( ";
        }

        $sql .= " SELECT ";
        $sql .= implode(',', $col_ary['col_basic']);
        $sql .= "  FROM " . T_SALES_MNG . " mng";
        $sql .= " LEFT JOIN " . T_SALES_DETAIL . " det ON mng.sales_mng_id=det.sales_mng_id ";
        $sql .= " LEFT JOIN " . M_CUSTOMER . " cus ON mng.customer_id=cus.customer_id ";
        $sql .= " WHERE " . str_replace(array("#COL#", "#PREFIX#"), array("mng.book_date", "mng"), $where) . " AND mng.sep_depart_flg<>" . FLG_ON . " AND mng.credit_type<>" . CREDIT_TYPE_BEFORE . " AND mng.delete_flg=" . FLG_OFF;
        $sql .= " UNION ALL";
        $sql .= " SELECT ";
        $sql .= implode(',', $col_ary['col_depart']);
        $sql .= "  FROM " . T_SALES_MNG . " mng";
        $sql .= " LEFT JOIN " . T_SALES_DEPART . " depart ON mng.sales_mng_id=depart.sales_mng_id";
        $sql .= " LEFT JOIN " . M_CUSTOMER . " cus ON mng.customer_id=cus.customer_id";
        $sql .= " WHERE " . str_replace(array("#COL#", "#PREFIX#"), array("mng.book_date", "depart"), $where) . " AND mng.sep_depart_flg=" . FLG_ON . " AND mng.delete_flg=" . FLG_OFF;
        $sql .= " UNION ALL";
        $sql .= " SELECT ";
        $sql .= implode(',', $col_ary['col_bef']);
        $sql .= "  FROM " . T_SALES_MNG . " mng";
        $sql .= " LEFT JOIN " . T_SALES_BEFORE . " bef ON mng.sales_mng_id=bef.sales_mng_id";
        $sql .= " LEFT JOIN " . M_CUSTOMER . " cus ON mng.customer_id=cus.customer_id";
        $sql .= " WHERE " . str_replace(array("#COL#", "#PREFIX#"), array("bef.sep_book_date", "mng"), $where) . " AND mng.credit_type=" . CREDIT_TYPE_BEFORE . " AND mng.delete_flg=" . FLG_OFF;
        $sql .= ") as tbl ";
        $sql .= " LEFT JOIN " . M_SYS_GENERAL_NAME . " name ON tbl.customer_type=name.item_cd AND group_cd='" . GRP_CUSTOMER_TYPE . "'";
        $sql .= "ORDER BY depart_id asc, abstract_id asc ";
        $order = $this->get_order_sql("sales_spec_order");
        if (isset($order)) {
            $sql .= ", " . $order;
        }

        $query = $this->db->query($sql);

        return $query;
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
        $data = $this->get_input_condition();

        if (count($data) == 0) return;

        // 売上計上日
        if (!empty($data['book_date_from'])) {
            $condition[] = "(date_format(#COL#, '%Y/%m/%d') >= " . $this->db->escape($data['book_date_from']) . ")";
        }
        if (!empty($data['book_date_to'])) {
            $condition[] = "(date_format(#COL#, '%Y/%m/%d') <= " . $this->db->escape($data['book_date_to']) . ")";
        }

        // 研究所
        if (!empty($data['institute_id'])) {
            $condition[] = "(#PREFIX#.institute_id=" . $data['institute_id'] . ")";
        }
        // 部門
        if (!empty($data['depart_id'])) {
            $condition[] = "(#PREFIX#.depart_id=" . $data['depart_id'] . ")";
        }
        // 摘要
        if (!empty($data['abstract_id'])) {
            $condition[] = "(mng.abstract_id=" . $data['abstract_id'] . ")";
        }
        // 担当者
        if (!empty($data['handler_id'])) {
            $condition[] = "(mng.handler_id=" . $data['handler_id'] . ")";
        }
        // 得意先名称
        if (!empty($data['customer_name'])) {
            $condition[] = "(mng.customer_name like '%" . $this->db->escape_like_str($data['customer_name'])
                . "%' or mng.customer_disp_name like '%" . $this->db->escape_like_str($data['customer_name'])
                . "%' or cus.customer_furi like '%" . $this->db->escape_like_str($data['customer_name']) . "%')";
        }
        // 得意先区分
        if (!empty($data['customer_type'])) {
            $condition[] = "(mng.customer_type=" . $data['customer_type'] . ")";
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

        // 出力順序
        $ary_order = $this->config->item("sales_spec_order");
        $data['seq_item_list'] = $ary_order;


        return $data;

    }

    /**
     * PDFカラムの取得をする
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function get_pdf_colum()
    {
        $res = array();

        $res['col_basic'] = array(
            'concat(mng.depart_id, ", ", mng.institute_id, ", ", mng.customer_type) as depart_id'
        , 'concat(mng.depart_id, ", ", mng.institute_id) as depart_ctrl'
        , 'mng.sales_mng_id'
        , 'det.sales_detail_id'
        , 'mng.depart_name'
        , 'mng.institute_name'
        , 'mng.abstract_id'
        , 'mng.abstract_name'
        , 'mng.book_date'
        , 'mng.customer_disp_name as customer_name'
        , 'customer_furi'
        , 'det.report_no'
        , 'mng.handler_name'
        , 'mng.credit_type'
        , 'mng.customer_type'
        , 'det.goods_name'
        , 'det.no_tax_money'
        );
        $res['col_depart'] = array(
            'concat(depart.depart_id, ", ", depart.institute_id, ", ", mng.customer_type) as depart_id'
        , 'concat(depart.depart_id, ", ", depart.institute_id) as depart_ctrl'
        , 'mng.sales_mng_id'
        , '0 as sales_detail_id'
        , 'depart.depart_name'
        , 'depart.institute_name'
        , 'mng.abstract_id'
        , 'mng.abstract_name'
        , 'mng.book_date'
        , 'mng.customer_disp_name as customer_name'
        , 'customer_furi'
        , 'NULL as report_no'
        , 'mng.handler_name'
        , 'mng.credit_type'
        , 'mng.customer_type'
        , 'mng.abstract_name as goods_name'
        , 'depart.no_tax_money'
        );
        $res['col_bef'] = array(
            'concat(mng.depart_id, ", ", mng.institute_id, ", ", mng.customer_type) as depart_id'
        , 'concat(mng.depart_id, ", ", mng.institute_id) as depart_ctrl'
        , 'mng.sales_mng_id'
        , '0 as sales_detail_id'
        , 'mng.depart_name'
        , 'mng.institute_name'
        , 'mng.abstract_id'
        , 'mng.abstract_name'
        , 'bef.sep_book_date as book_date'
        , 'mng.customer_disp_name as customer_name'
        , 'customer_furi'
        , 'NULL as report_no'
        , 'mng.handler_name'
        , 'mng.credit_type'
        , 'mng.customer_type'
        , 'mng.abstract_name as goods_name'
        , 'bef.sep_no_tax_money as no_tax_money'
        );

        return $res;

    }

    /**
     * CSVカラムの取得をする
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function get_csv_colum()
    {
        $res = array();

        $res['col_basic'] = array(
            'concat(mng.depart_id, ", ", mng.institute_id, ", ", mng.customer_type) as depart_id'
        , 'mng.institute_name'
        , 'mng.depart_name'
        , 'mng.abstract_name'
        , 'mng.customer_disp_name as customer_name'
        , 'customer_furi'
        , 'mng.book_date'
        , 'det.report_no'
        , 'mng.handler_name'
        , 'mng.customer_type'
        , 'det.goods_name'
        , 'det.no_tax_money'
        , 'mng.abstract_id'
        , 'mng.sales_mng_id'
        , 'det.sales_detail_id'
        );
        $res['col_depart'] = array(
            'concat(depart.depart_id, ", ", depart.institute_id, ", ", mng.customer_type) as depart_id'
        , 'depart.institute_name'
        , 'depart.depart_name'
        , 'mng.abstract_name'
        , 'mng.customer_disp_name as customer_name'
        , 'customer_furi'
        , 'mng.book_date'
        , 'NULL as report_no'
        , 'mng.handler_name'
        , 'mng.customer_type'
        , 'mng.abstract_name as goods_name'
        , 'depart.no_tax_money'
        , 'mng.abstract_id'
        , 'mng.sales_mng_id'
        , '0 as sales_detail_id'
        );
        $res['col_bef'] = array(
            'concat(mng.depart_id, ", ", mng.institute_id, ", ", mng.customer_type) as depart_id'
        , 'mng.institute_name'
        , 'mng.depart_name'
        , 'mng.abstract_name'
        , 'mng.customer_disp_name as customer_name'
        , 'customer_furi'
        , 'bef.sep_book_date as book_date'
        , 'NULL as report_no'
        , 'mng.handler_name'
        , 'mng.customer_type'
        , 'mng.abstract_name as goods_name'
        , 'bef.sep_no_tax_money as no_tax_money'
        , 'mng.abstract_id'
        , 'mng.sales_mng_id'
        , '0 as sales_detail_id'
        );

        return $res;

    }

}

/* End of file sales_print_mdl.php */
/* Location: ./application/models/bill/sales_print_mdl.php */