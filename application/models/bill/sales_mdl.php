<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Sales_mdl
 * 売上情報入力のモデルクラス
 *
 * 売上情報入力処理に関するDB処理などの司る
 * @property General_name_mdl $general_name_mdl
 * @property CI_DB_active_record $db
 * @property  CI_Input $input
 */
class Sales_mdl extends MY_Model
{

    private $m_mng_col = array('customer_id', 'customer_name', 'customer_disp_name', 'credit_type', 'customer_type', 'bill_date', 'book_date'
    , 'handler_id', 'handler_name', 'institute_id', 'institute_name', 'depart_id', 'depart_name', 'abstract_id'
    , 'abstract_name', 'sum_no_tax', 'sum_tax', 'sum_money', 'advance_sep_month', 'data_status_type', 'sep_month_from', 'sep_month_to'
    , 'sales_memo', 'cutoff_date'
    );
    private $m_detail_col = array('report_no', 'goods_name', 'cnt', 'unit', 'unit_price', 'tax_type', 'tax', 'no_tax_money', 'in_tax_money', 'unit_memo');

    private $m_before_col = array('sep_year_month', 'sep_money', 'sep_book_date', 'sep_tax_type');

    var $m_mng_id = "";

    var $m_detail_id = "";

    var $m_rel_report_no = "";

    /**
     * 変更前の売上情報データ
     *
     * @var array
     */
    var $old_data = NULL;

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
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function regist_data()
    {

        log_message('info', '【売上登録処理   START】');

        // トランザクション開始
        $this->db->trans_start();

        // 売上情報管理テーブル登録
        $this->m_tbl_name = T_SALES_MNG;

        $mng = $this->_get_sales_mng_data();
        $this->insert($mng);

        // 登録したIDをメンバ変数に設定
        $this->m_mng_id = $this->db->insert_id();

        // 売上詳細データ作成
        $detail = $this->_get_sales_detail_data();
        foreach ($detail as $ins_data) {
            $ins_data['sales_mng_id'] = $this->m_mng_id;

            $this->m_tbl_name = T_SALES_DETAIL;
            $this->insert($ins_data);

            // 登録したIDをメンバ変数に設定
            $this->m_detail_id = $this->db->insert_id();

            // 受注連携データの更新
            $this->update_outside_relation($ins_data['report_no']);
        }


        // 売上前受データ作成
        $before = $this->get_sales_defore_data();
        $this->m_tbl_name = T_SALES_BEFORE;
        if (count($before) > 0) {
            foreach ($before as $ins_data) {
                $ins_data['sales_mng_id'] = $this->m_mng_id;
                $this->insert($ins_data);
            }
        }

        // 部門分割売上データ
        $depart = $this->_get_sales_depart_data();
        $this->m_tbl_name = T_SALES_DEPART;
        if (count($depart) > 0) {
            foreach ($depart as $ins_data) {
                $ins_data['sales_mng_id'] = $this->m_mng_id;
                $this->insert($ins_data);
            }
        }

        // 請求書削除
        $this->delete_bill_print();

        // 売掛金管理ファイル作成
        $mng['sales_mng_id'] = $this->m_mng_id;
        $this->load->model("/db/receivable_mng_mdl");
        $this->receivable_mng_mdl->update_receivable_sales($mng);

        // トランザクション終了
        $this->db->trans_complete();

        log_message('info', '【売上登録処理   END】');
    }

    /**
     * 変更処理
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function update_data()
    {
        log_message('info', '【売上変更処理   START】');

        // トランザクション開始
        $this->db->trans_begin();

        // IDをメンバ変数に設定
        $this->m_mng_id = $this->input->get('id');

        // 請求書の削除を行うかチェックを行う
        $bill_flg = $this->chk_update_bill_info();

        // 請求書番号のクリアを行うかどうか判断する
        $sales_bill_no_flg = $this->_chk_sales_bill_no_clear();

        /**
         *  売上管理テーブル変更処理
         */
        // テーブル名の設定
        $this->m_tbl_name = T_SALES_MNG;

        //WHERE句の設定
        $this->m_where = array('sales_mng_id' => $this->m_mng_id);

        $mng = $this->_get_sales_mng_data($bill_flg, $sales_bill_no_flg);
        $this->update($mng);

        /**
         *  売上詳細テーブル変更処理
         */
        // テーブル名の設定
        $this->m_tbl_name = T_SALES_DETAIL;

        // 売上詳細テーブル削除
        $this->db->where("sales_mng_id", $this->m_mng_id);
        $this->delete();

        // 受注連携データのsales_idとdetail_idをNULL更新
        $this->nullupdate_outside_relation();

        // 売上詳細テーブル再登録
        $detail = $this->_get_sales_detail_data();
        foreach ($detail as $ins_data) {
            $ins_data['sales_mng_id'] = $this->m_mng_id;

            $this->m_tbl_name = T_SALES_DETAIL;
            $this->insert($ins_data);

            // 登録した詳細IDをメンバ変数に設定
            $this->m_detail_id = $this->db->insert_id();

            // 受注連携データの更新
            $this->update_outside_relation($ins_data['report_no']);
        }

        /**
         *  売上前受テーブル変更処理
         */
        // 売上詳細テーブル再登録
        $before = $this->get_sales_defore_data();

        // テーブル名の設定
        $this->m_tbl_name = T_SALES_BEFORE;

        // 売上前受テーブル削除
        $this->db->where("sales_mng_id", $this->m_mng_id);
        $this->delete();

        if (count($before) > 0) {
            foreach ($before as $ins_data) {
                $ins_data['sales_mng_id'] = $this->m_mng_id;
                $this->insert($ins_data);
            }
        }

        /**
         *  部門別売上管理テーブル登録
         */
        // 売上部門テーブル再登録
        $depart = $this->_get_sales_depart_data();

        // テーブル名の設定
        $this->m_tbl_name = T_SALES_DEPART;

        // 部門別売上管理テーブル削除
        $this->db->where("sales_mng_id", $this->m_mng_id);
        $this->delete();

        if (count($depart) > 0) {
            foreach ($depart as $ins_data) {
                $ins_data['sales_mng_id'] = $this->input->get('id');
                $this->insert($ins_data);
            }
        }

        if ($bill_flg == true) {
            // 請求書データの入金種別を更新
            $this->update_bill_data();
        } else {
            // 請求書削除
            $this->delete_bill_print();
        }

        // 売掛金管理ファイル更新
        $mng['sales_mng_id'] = $this->input->get('id');
        $this->load->model("/db/receivable_mng_mdl");
        $this->receivable_mng_mdl->update_receivable_sales($mng);

        // トランザクション終了
        $this->db->trans_complete();

        log_message('info', '【売上変更処理   END】');

    }

    /**
     * 削除処理
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function delete_data($id)
    {

        if (empty($id)) return false;

        log_message('info', '【売上削除処理   START】');

        // トランザクション開始
        $this->db->trans_start();

        // 論理削除
        $this->m_tbl_name = T_SALES_MNG;
        $this->m_where = array('sales_mng_id' => $id, 'delete_flg' => FLG_OFF);
        $this->delete_logic();

        if ($this->db->affected_rows() == 0) {
            $this->db->trans_complete();
            return false;
        }

        // 論理削除
        $this->m_tbl_name = T_SALES_DETAIL;
        $this->m_where = array('sales_mng_id' => $id);
        $this->delete_logic();

        // 論理削除
        $this->m_tbl_name = T_SALES_BEFORE;
        $this->m_where = array('sales_mng_id' => $id);
        $this->delete_logic();

        // 論理削除
        $this->m_tbl_name = T_SALES_DEPART;
        $this->m_where = array('sales_mng_id' => $id);
        $this->delete_logic();

        // 売掛金管理ファイル戻し処理
        $mng['sales_mng_id'] = $this->input->get('id');
        $this->load->model("/db/receivable_mng_mdl");
        $this->receivable_mng_mdl->back_sales_data($mng);

        // 請求書削除処理
        $this->delete_bill_print();

        // 受注連携データのsales_idとdetail_idをNULL更新
        $this->m_mng_id = $id;
        $this->nullupdate_outside_relation();

        // 受信システムデータとの関連付け

        // トランザクション終了
        $this->db->trans_complete();

        log_message('info', '【売上削除処理   END】');

        return true;

    }

    /**
     * 得意先一覧データ取得
     *
     * @access    public
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
        $this->db->select("sales.credit_type");
        $this->db->select("sales.customer_type");
        $this->db->select("sales.bill_date");
        $this->db->select("sales.book_date");
        $this->db->select("sales.handler_id");
        $this->db->select("sales.handler_name");
        $this->db->select("sales.institute_id");
        $this->db->select("sales.institute_name");
        $this->db->select("sales.depart_id");
        $this->db->select("sales.depart_name");
        $this->db->select("sales.abstract_id");
        $this->db->select("sales.abstract_name");
        $this->db->select("sales.sum_money");
        $this->db->select("sales.data_status_type");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_SALES_DATA_TYPE . "' AND item_cd=data_status_type) as data_status_type_name ");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_CREDIT_TYPE . "' AND item_cd=sales.credit_type) as credit_type_name ");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_CUSTOMER_TYPE . "' AND item_cd=sales.customer_type) as customer_type_name ");

        // JOIN句作成
        $this->db->join(M_CUSTOMER . " cus", "sales.customer_id=cus.customer_id", "left");
        $this->db->join(M_HANDLER . " hand", "sales.handler_id=hand.handler_id", "left");
        $this->db->join(T_SALES_DEPART . " depart", "sales.sales_mng_id=depart.sales_mng_id", "left");


        // WHERE句作成
        $this->db->where("sales.first_data_flg", FLG_OFF);
        if (!empty($where)) {
            $this->db->where($where);
        }

        // GROUP句の設定
        $this->db->group_by("sales.sales_mng_id");

        // リミット設定
        $this->db->limit(PER_PAGE_CNT, $start);

        // ORDER句の設定
        $this->db->order_by("sales.book_date", "desc");
        $this->db->order_by("cus.customer_furi", "desc");
        $this->db->order_by("sales.ins_datetime", "desc");

        return $this->select();
    }

    /**
     * 売上管理テーブル取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_sales_mng($id)
    {
        // テーブル設定
        $this->m_tbl_name = T_SALES_MNG;
        // Prefix 設定
        $this->m_prefix = "sales";

        $this->db->select("sales.sales_mng_id");
        $this->db->select("sales.customer_id");
        $this->db->select("sales.customer_disp_name");
        $this->db->select("sales.credit_type");
        $this->db->select("sales.customer_type");
        $this->db->select("sales.bill_date");
        $this->db->select("sales.book_date");
        $this->db->select("sales.handler_id");
        $this->db->select("sales.handler_name");
        $this->db->select("sales.institute_id");
        $this->db->select("sales.institute_name");
        $this->db->select("sales.depart_id");
        $this->db->select("sales.depart_name");
        $this->db->select("sales.abstract_id");
        $this->db->select("sales.abstract_name");
        $this->db->select("sales.sum_money");
        $this->db->select("sales.sum_no_tax");
        $this->db->select("sales.sum_tax");
        $this->db->select("sales.sep_month_from");
        $this->db->select("sales.sep_month_to");
        $this->db->select("sales.sales_memo");
        $this->db->select("sales.data_status_type");
        $this->db->select("sales.sep_depart_flg");
        $this->db->select("cmr.card_print_type");
        $this->db->select("cmr.cutoff_date");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_CREDIT_TYPE . "' AND item_cd=sales.credit_type) as credit_type_name ");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_CREDIT_TYPE . "' AND item_cd=cmr.credit_type) as mst_credit_type_name ");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_CUSTOMER_TYPE . "' AND item_cd=cmr.customer_type) as mst_customer_type_name ");

        // JOIN句
        $this->db->join(M_CUSTOMER . " cmr", "sales.customer_id=cmr.customer_id", "LEFT");


        // WHERE句作成
        $this->db->where("sales_mng_id", $id);

        return $this->select();

    }

    /**
     * 売上詳細テーブル取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_sales_detail($id)
    {
        // テーブル設定
        $this->m_tbl_name = T_SALES_DETAIL;

        $this->db->select("sales_detail_id");
        $this->db->select("sales_mng_id");
        $this->db->select("report_no");
        $this->db->select("goods_name");
        $this->db->select("cnt");
        $this->db->select("unit");
        $this->db->select("unit_price");
        $this->db->select("tax_type");
        $this->db->select("tax");
        $this->db->select("no_tax_money");
        $this->db->select("in_tax_money");
        $this->db->select("unit_memo");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_TAX_TYPE . "' AND item_cd=tax_type) as tax_type_name ");

        // WHERE句作成
        $this->db->where("sales_mng_id", $id);

        return $this->select();

    }

    /**
     * 売上詳細テーブル取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_sales_before($id)
    {
        // テーブル設定
        $this->m_tbl_name = T_SALES_BEFORE;

        $this->db->select("sales_before_id");
        $this->db->select("sep_year_month");
        $this->db->select("sep_money");
        $this->db->select("sep_tax_type");

        // WHERE句作成
        $this->db->where("sales_mng_id", $id);

        return $this->select();

    }

    /**
     * 売上部門分割テーブル取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_sales_depart($id)
    {
        // テーブル設定
        $this->m_tbl_name = T_SALES_DEPART;

        $this->db->select("institute_id");
        $this->db->select("institute_name");
        $this->db->select("depart_id");
        $this->db->select("depart_name");
        $this->db->select("tax_type");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_TAX_TYPE . "' AND item_cd=tax_type) as tax_type_name ");
        $this->db->select("no_tax_money");
        $this->db->select("tax");
        $this->db->select("in_tax_money");

        // WHERE句作成
        $this->db->where("sales_mng_id", $id);

        return $this->select();

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

        if (!empty($data['top_bill'])) {
            $condition[] = "sales.data_status_type = " . $this->db->escape(DATA_TYPE_SALES);
            $condition[] = "date_format(sales.bill_date, \"%Y/%m/%d\") <= '" . date("Y/m/d") . "'";
        }

        // ID
        if (!empty($data['id'])) {
            $condition[] = "sales.sales_mng_id = " . $this->db->escape($data['id']);
        }

        // 得意先名称
        if (!empty($data['customer_name'])) {
            $condition[] = "(sales.customer_name like '%" . $this->db->escape_like_str($data['customer_name'])
                . "%' or sales.customer_disp_name like '%" . $this->db->escape_like_str($data['customer_name'])
                . "%' or cus.customer_furi like '%" . $this->db->escape_like_str($data['customer_name']) . "%')";
        }
        // 売上計上日
        if (!empty($data['book_date_from'])) {
            $condition[] = "date_format(sales.book_date, '%Y/%m/%d') >= " . $this->db->escape($data['book_date_from']);
        }
        if (!empty($data['book_date_to'])) {
            $condition[] = "date_format(sales.book_date, '%Y/%m/%d') <= " . $this->db->escape($data['book_date_to']);
        }

        // 担当者名称
        if (!empty($data['handler_name'])) {
            $condition[] = "(sales.handler_name like '%" . $this->db->escape_like_str($data['handler_name'])
                . "%' or hand.handler_furi like '%" . $this->db->escape_like_str($data['handler_name']) . "%')";
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
            $condition[] = "(sales.institute_id=" . $data['institute_id'] . " OR depart.institute_id=" . $data['institute_id'] . ")";
        }
        // 部門
        if (!empty($data['depart_id'])) {
            $condition[] = "(sales.depart_id=" . $data['depart_id'] . " OR depart.depart_id=" . $data['depart_id'] . ")";
        }
        // 摘要
        if (!empty($data['abstract_id'])) {
            $condition[] = "(sales.abstract_id=" . $data['abstract_id'] . ")";
        }
        // 入金種別
        if (!empty($data['credit_type'])) {
            $condition[] = "(sales.credit_type=" . $data['credit_type'] . ")";
        }
        // データ状態
        if (!empty($data['data_status_type'])) {
            $condition[] = "(sales.data_status_type=" . $data['data_status_type'] . ")";
        }

        // 検索条件返却
        if (count($condition) > 0) {
            return implode(' and ', $condition);
        } else {
            return "";
        }

    }

    /**
     * 担当者名称から担当者IDを取得する
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_handler_id($str)
    {
        $ret = $this->db->get_where(M_HANDLER, array('handler_name' => $str));
        $res = $ret->result();

        return $res[0]->handler_id;

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

        // 入金種別
        $data['credit_type'] = $this->general_name_mdl->get_credit_type();

        // データ状態
        $data['data_status_type'] = $this->general_name_mdl->get_data_status_type();

        // 部門
        $data['depart_list'] = $this->get_name_list_custom(M_DEPART, "depart_id", "depart_name");

        // 研究所
        $data['institute_list'] = $this->get_name_list_custom(M_INSTITUTE, "institute_id", "institute_name");

        // 摘要
        $data['abstract_list'] = $this->get_name_list_custom(M_ABSTRACT, "abstract_id", "abstract_name");

        // 税区分
        $data['tax_type'] = $this->general_name_mdl->get_tax_type();

        // 税区分(前受け用)
        $data['tax_type_before'] = $this->general_name_mdl->get_tax_type_before();

        return $data;

    }

    /**
     * 売上計上日属性設定
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_book_date_ctrl($str)
    {
        if ($str == CREDIT_TYPE_BEFORE) {
            return "disabled=disabled";
        }
        return "";
    }

    /**
     * 同じ担当者名の件数を取得する
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_handler_cnt()
    {
        $this->m_tbl_name = M_HANDLER;
        $this->db->where('delete_flg', FLG_OFF);
        $this->db->where('handler_name', $_POST['handler_name']);

        return $this->get_total_cnt();

    }

    /**
     * 部門に属している研究所の件数を取得
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_institute_cnt($institute, $depart)
    {

        $institute_id = explode(",", $institute);
        $depart_id = explode(",", $depart);

        $this->m_tbl_name = M_DEPART_DATA;
        $this->db->where('delete_flg', FLG_OFF);
        $this->db->where('institute_id', $institute_id[0]);
        $this->db->where('depart_id', $depart_id[0]);

        return $this->get_total_cnt();

    }

    /**
     * 同じ売上情報の件数を取得する
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_sales_cnt()
    {
        $this->m_tbl_name = T_SALES_MNG;

        $input = $_POST;

        $this->db->where('delete_flg', FLG_OFF);
        $this->db->where('customer_disp_name', $input['customer_disp_name']);
        $this->db->where('credit_type', $input['credit_type']);
        $this->db->where('customer_type', $input['customer_type']);
        if (isset($input['bill_date'])) {
            $this->db->where('bill_date', str_replace("/", "-", $input['bill_date']));
        }
        if (isset($input['book_date'])) {
            $this->db->where('book_date', str_replace("/", "-", $input['book_date']));
        }
        $this->db->where('handler_id', $input['handler_id']);

        $instuite_id = explode(",", $input['institute_id']);
        $this->db->where('institute_id', $instuite_id[0]);

        $depart_id = explode(",", $input['depart_id']);
        $this->db->where('depart_id', $depart_id[0]);

        $abstract_id = explode(",", $input['abstract_id']);
        $this->db->where('abstract_id', $abstract_id[0]);

        return $this->get_total_cnt();

    }

    /**
     * 売上情報管理テーブル用データを作成し返却する
     *
     * @access private
     * @param $bill_flg boolean
     * @param $sales_bill_no_flg boolean
     * @return array
     * @author Kita Yasuhiro
     */
    private function _get_sales_mng_data($bill_flg = true, $sales_bill_no_flg = false)
    {

        $data = $this->get_regist_post_data($this->m_mng_col);

        // POSTデータ編集
        explode_val_str($data['institute_id'], $data['institute_id'], $data['institute_name']);
        explode_val_str($data['depart_id'], $data['depart_id'], $data['depart_name']);
        explode_val_str($data['abstract_id'], $data['abstract_id'], $data['abstract_name']);

        if (empty($data['sep_month_from'])) {
            $data['sep_month_from'] = null;
        } else {
            $data['sep_month_from'] = str_replace("/", "", $data['sep_month_from']);
        }

        if (empty($data['sep_month_to'])) {
            $data['sep_month_to'] = null;
        } else {
            $data['sep_month_to'] = str_replace("/", "", $data['sep_month_to']);
        }

        // 得意先名称の設定
        if (empty($data['customer_id'])) {
            $data['customer_name'] = $data['customer_disp_name'];
        } else {
            // 得意先マスタから正式名称を取得
            $query = $this->db->get_where(M_CUSTOMER, array("customer_id" => $data['customer_id']));
            $res = $query->result();
            $data['customer_name'] = $res[0]->customer_name;
            $data['cutoff_date'] = $res[0]->cutoff_date;
        }

        // 締日から範囲を取得し設定
        $data['cutoff_date_from'] = get_cutoff_date($data['bill_date'], $_POST['cutoff_date'], "b");
        $data['cutoff_date_to'] = get_cutoff_date($data['bill_date'], $_POST['cutoff_date'], "a");

        if (empty($data['bill_date'])) {
            $data['bill_date'] = $data['cutoff_date_to'];
        }

        // 以下の場合、売上入力済みにする
        // 　・請求書に影響しない値の更新
        // 　・変更以外の場合
        // 　・自動取込のデータを更新
        if ($bill_flg == false || $this->router->method != "edit" || $this->old_data['mng']['data_status_type'] == DATA_TYPE_IMPORT) {
            $data['data_status_type'] = DATA_TYPE_SALES;
        }

        // 担当者IDが入っていなかったらDBから取得
        if ($this->input->post('handler_id') == "") {
            $data['handler_id'] = $this->get_handler_id($_POST['handler_name']);
        }

        // 入金種別が前受の場合は売上計上日を月末に変更する
        if ($data['credit_type'] == CREDIT_TYPE_BEFORE) {
            $date = $data['sep_month_from'] . get_month_endday(substr($data['sep_month_from'], 0, 4), substr($data['sep_month_from'], 4, 2));
            $data['book_date'] = date("Y/m/d", strtotime($date));
        }

        if (isset($_POST['chk_bill_sep'])) {
            $data['sep_depart_flg'] = FLG_ON;

        } else {
            $data['sep_depart_flg'] = FLG_OFF;

        }

        change_null($data);

        // 変更時に請求書番号をリセットする必要がある場合のみクリアする
        if ($this->router->method == 'edit' && $sales_bill_no_flg) {
            $data['bill_no'] = '';
        }

        return $data;
    }


    /**
     * 売上情報詳細テーブル用データを作成し返却する
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function _get_sales_detail_data()
    {
        // 定義したカラムのポストデータを抜く
        $data = $this->get_regist_post_data($this->m_detail_col);

        foreach ($data as $key1 => $ary) {
            foreach ($ary as $key2 => $val) {
                $data[$key1][$key2] = erase_money_sep($val);
            }

            if ($data[$key1]['tax_type'] == TAX_TYPE_NO_TAX) {
                $data[$key1]['tax'] = 0;
            }

            change_null($data[$key1]);
        }

        return $data;
    }

    /**
     * 前受売上テーブル用データを作成し返却する
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_sales_defore_data()
    {

        // 定義したカラムのポストデータを抜く
        $data = $this->get_regist_post_data($this->m_before_col);

        $iTax = 0;
        foreach ($data as $key1 => $ary) {

            foreach ($ary as $key2 => $val) {
                $data[$key1][$key2] = erase_money_sep($val);
            }

            if (!isset($data[$key1]['sep_money']) || empty($data[$key1]['sep_money'])) {

                if ($data[$key1]['sep_money'] != "0") {
                    unset($data[$key1]);
                }

            }

            if (!empty($data[$key1])) {
                $data[$key1]['sep_book_date'] = $ary['sep_year_month'] . date("t", strtotime($ary['sep_year_month'] . "01"));
                $data[$key1]['sep_tax'] = $this->_get_tax($data[$key1]['sep_money'], $data[$key1]['sep_tax_type']);
                $data[$key1]['sep_no_tax_money'] = $data[$key1]['sep_money'] - $data[$key1]['sep_tax'];
                $iTax += $data[$key1]['sep_tax'];
            }

        }

        // 端数調整
        if ($iTax > 0) {
            $sumtax = $this->input->post("sum_tax");

            $data[count($data) - 1]['sep_tax'] = $data[count($data) - 1]['sep_tax'] - ($iTax - $sumtax);
            $data[count($data) - 1]['sep_no_tax_money'] = $data[count($data) - 1]['sep_money'] - $data[count($data) - 1]['sep_tax'];
        }

        return $data;

    }

    /**
     * 部門分割売上登録情報の取得
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function _get_sales_depart_data()
    {
        $data = array();

        $input = $_POST;

        if (!isset($input['chk_bill_sep'])) return $data;

        for ($i = 0; $i < count($input['sep_institute']); $i++) {

            explode_val_str($input['sep_institute'][$i], $data[$i]['institute_id'], $data[$i]['institute_name']);
            explode_val_str($input['sep_depart'][$i], $data[$i]['depart_id'], $data[$i]['depart_name']);

            $data[$i]['tax_type'] = $input['depart_tax_type'][$i];
            $data[$i]['no_tax_money'] = str_replace(",", "", $input['depart_no_tax_money'][$i]);
            $data[$i]['tax'] = str_replace(",", "", $input['depart_tax'][$i]);
            $data[$i]['in_tax_money'] = str_replace(",", "", $input['depart_in_tax_money'][$i]);

        }

        return $data;
    }

    /**
     * 税区分から請求書税率マスタより税率を取得し消費税を計算する
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function _get_tax($money, $tax_type)
    {

        $rate = $this->_get_rate($tax_type);

        if (empty($rate)) {
            return 0;

        } else {
            return inner_tax_calc($money, $rate);
        }

    }

    /**
     * レートをメンバ変数に設定しておく
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function _get_rate($tax_type)
    {

        $this->m_tbl_name = M_SYS_BILL_TAX_GROUP;
        $this->db->select("tax_rate");
        $this->db->where("tax_type", $tax_type);

        $res = $this->select();

        return $res[0]->tax_rate;

    }

    /**
     * マスタデータ取得処理
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_customer_info()
    {
        if (count($_POST) == 0) return array();
        if (empty($_POST['customer_disp_name'])) return array();

        $this->load->model("/db/m_customer_mdl");
        $result = $this->m_customer_mdl->get_customer_info($_POST['customer_disp_name']);

        foreach ($result as $value) {
            $value->cutoff_date = cutoff_date_str($value->cutoff_date);
            $value->print_type = card_print_str($value->card_print_type);
            if (empty($value->credit_type_name)) {
                $value->mst_credit_type_name = "未設定";
            } else {
                $value->mst_credit_type_name = $value->credit_type_name;
            }
            $value->mst_customer_type_name = $value->customer_type_name;
        }

        if (count($result) == 0) {
            return array();
        } else {
            return (array)$result[0];
        }

    }

    /**
     * 請求書を削除する。
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function delete_bill_print()
    {

        $res = array();
        $id = $this->input->get("id");
        $method = $this->router->method;

        if ($method == "edit" || $method == "delete") {
            // 紐付きがある請求書データを取得
            $res = $this->get_bill_data($id);

            // 変更の場合は請求日変更による請求日変更による削除があるため、データをチェックする
            if ($method == 'edit') {
                if ($res == false) {
                    if (!empty($_POST['cutoff_date'])) {
                        $res = $this->get_bill_cutoff_data($_POST['customer_disp_name'], $_POST['bill_date'], $_POST['credit_type']);
                    }

                }
            }
        } else {

            if (!empty($_POST['cutoff_date'])) {
                $res = $this->get_bill_cutoff_data($_POST['customer_disp_name'], $_POST['bill_date'], $_POST['credit_type']);
            }


        }

        if (count($res) > 0) {
            $this->update_del_bill_status($res[0]->bill_mng_id);
        }

        if (count($res) == 0) return;

        // 請求書管理データを削除
        $this->m_tbl_name = T_BILL_MNG;
        $this->db->where("bill_mng_id", $res[0]->bill_mng_id);
        $this->delete();

        // 請求書も削除
        if (file_exists(APPPATH . 'download/' . $res[0]->bill_no . ".pdf")) {
            unlink(APPPATH . 'download/' . $res[0]->bill_no . ".pdf");
        }

        if ($method == "edit") {

            $res = array();
            if (!empty($_POST['cutoff_date'])) {
                $res = $this->get_bill_cutoff_data($_POST['customer_disp_name'], $_POST['bill_date'], $_POST['credit_type']);
            }
            if (count($res) == 0) return;

            if (count($res) > 0) {
                $this->update_del_bill_status($res[0]->bill_mng_id);
            }

            // 請求書管理データを削除
            $this->m_tbl_name = T_BILL_MNG;
            $this->db->where("bill_mng_id", $res[0]->bill_mng_id);
            $this->delete();

            // 請求書も削除
            if (file_exists(APPPATH . 'download/' . $res[0]->bill_no . ".pdf")) {
                unlink(APPPATH . 'download/' . $res[0]->bill_no . ".pdf");
            }

        }


    }

    /**
     * 請求書データの入金種別をUPDATEする
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function update_bill_data()
    {

        $id = $this->input->get("id");

        // 請求管理IDの取得
        $this->m_tbl_name = T_BILL_DATA;
        $this->db->select("bill_mng_id");
        $this->db->where("sales_mng_id", $id);
        $res = $this->select();

        $bill_mng_id = "";
        if (count($res) > 0) {
            $bill_mng_id = $res[0]->bill_mng_id;
            $this->m_tbl_name = T_BILL_MNG;
            $this->db->set('credit_type', $_POST['credit_type']);
            $this->db->where("bill_mng_id", $bill_mng_id);
            $this->update();
        }


    }


    /**
     * 請求書管理idから売上情報のステータスを変更する
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function update_del_bill_status($bill_mng_id)
    {
        if (empty($bill_mng_id)) return;

        $this->m_tbl_name = T_BILL_DATA;
        $this->db->select("GROUP_CONCAT(sales_mng_id) as sales_mng_id", false);
        $this->db->where("bill_mng_id", $bill_mng_id);
        $this->db->group_by("bill_mng_id");
        $sales = $this->select();


        if (count($sales) == 0) return;


        // 紐づく売上情報データのデータステータスを変更する
        $this->m_tbl_name = T_SALES_MNG;
        $this->db->set('data_status_type', DATA_TYPE_SALES);
        $this->db->where('sales_mng_id in (' . $sales[0]->sales_mng_id . ") ");
        $this->update();


    }

    /**
     * 売上管理IDから請求書情報を取得する
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_bill_data($sales_id)
    {

        // 請求書管理IDを取得
        $this->m_tbl_name = T_BILL_DATA;
        $this->m_prefix = "data";
        $this->db->select("mng.bill_mng_id");
        $this->db->select("mng.bill_no");
        $this->db->group_by("mng.bill_mng_id");
        $this->db->join(T_BILL_MNG . " mng", "mng.bill_mng_id=data.bill_mng_id", "INNER");
        $this->db->where("sales_mng_id", $sales_id);
        $res = $this->select();

        return $res;

    }

    /**
     * 締日の請求書が存在するかチェックする
     *
     * @access public
     * @param  string $customer
     * @param  string $bill_date
     * @param  string $credit_type
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_bill_cutoff_data($customer, $bill_date, $credit_type)
    {

        // 請求書管理IDを取得
        $this->m_tbl_name = T_BILL_MNG;
        $this->m_prefix = "bill";
        $this->db->select("bill.bill_mng_id");
        $this->db->select("bill.bill_no");
        $this->db->select("credit.credit_mng_id");
        $this->db->where("bill.customer_disp_name", $customer);
//            $this->db->where("bill.credit_type", $credit_type);
        $this->db->where('date_format(bill.bill_date, "%Y/%m/%d") =' . "'" . $bill_date . "'");
        $this->db->join(T_CREDIT_MNG . " credit", "bill.bill_mng_id=credit.bill_mng_id", "left");
        $res = $this->select();

        return $res;

    }

    /**
     * 請求書が既に存在するかチェックする
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function chk_bill_data()
    {

        $res = true;

        // 変更だった場合、売上管理IDから請求書情報を取得する
        if ($this->router->method == "edit") {
            $res = $this->get_bill_data($this->input->get('id'));

            if (count($res) == 0) {
                $res = false;
            } else {
                $res = true;
            }

            if ($res == false) {
                if (!empty($_POST['cutoff_date'])) {
                    $res = $this->get_bill_cutoff_data($_POST['customer_disp_name'], $_POST['bill_date'], $_POST['credit_type']);
                    if (count($res) == 0) {
                        $res = false;
                    } else {
                        $res = true;
                    }
                }

            }


        } else {

            if (empty($_POST['cutoff_date'])) {
                $res = false;

            } else {

                $res = $this->get_bill_cutoff_data($_POST['customer_disp_name'], $_POST['bill_date'], $_POST['credit_type']);

                if (count($res) == 0) {
                    $res = false;
                } else {
                    $res = true;
                }

            }

        }

        // 請求書の変更チェック
        if ($res == true) {

            if ($this->router->method == "edit") {
                $flg = $this->chk_update_bill_info();

                if ($flg == true) {
                    $res = false;
                }

            }

        }

        return $res;


    }

    /**
     * 請求書を削除するかチェックする
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function chk_update_bill_info()
    {

        if ($this->router->method == "edit") {
            $this->old_data = $this->get_sales_data($this->input->get('id'));
            return $this->chk_update_value($this->old_data);
        }

        return true;
    }

    /**
     * セールスマネージャーIDが一致する受注連携テーブルのデータを更新する
     * （sales_mng_idとsales_detail_idをNULLにする）
     *
     * @author MKURITA
     */
    private function nullupdate_outside_relation()
    {
        $this->m_tbl_name = T_OUTSIDE_RELATION;
        $this->db->set('sales_mng_id', null);
        $this->db->set('sales_detail_id', null);
        $this->db->where("sales_mng_id", $this->m_mng_id);
        $this->update();
    }

    /**
     * 報告書NOが一致する受注連携テーブルのデータを更新する
     *
     * @param $report_no
     * @author MKURITA
     */
    private function update_outside_relation($report_no)
    {
        if (empty($report_no)) {
            return;
        }

        // 受注連携テーブルの更新チェック
        if (!$this->chk_update_outside_relation($report_no)) {
            return;
        }

        // 該当する報告書NOのsales_mng_idとsales_detail_idを更新する
        $this->m_tbl_name = T_OUTSIDE_RELATION;
        $this->db->set('sales_mng_id', $this->m_mng_id);
        $this->db->set('sales_detail_id', $this->m_detail_id);
        $this->db->where('report_no', $this->m_rel_report_no);
        $this->update();
    }

    /**
     * 該当の報告書NOが存在するかチェック
     *
     * @param $report_no
     * @return bool
     * @author MKURITA
     */
    private function chk_update_outside_relation($report_no)
    {
        $res = $this->get_relation_report_no($report_no);
        if (count($res) > 0) {
            $this->m_rel_report_no = $res[0]->report_no;
            return true;
        }

        // 桁数が10桁だった場合は8桁に切り落として再検索
        if (strlen($report_no) === 10) {
            $res = $this->get_relation_report_no(substr($report_no, REPORT_NO_START_INDEX, REPORT_NO_LENGTH_8));
            if (count($res) > 0) {
                $this->m_rel_report_no = $res[0]->report_no;
                return true;
            }
        }
        return false;
    }

    /**
     * 受注連携テーブルに一致する報告書NOを取得する
     *
     * @param $report_no
     * @return array
     * @author MKURITA
     */
    private function get_relation_report_no($report_no)
    {
        $this->m_tbl_name = T_OUTSIDE_RELATION;
        $this->db->select("report_no");
        $this->db->where("report_no", $report_no);
        $res = $this->select();
        return $res;
    }


    /**
     * 部門分割の詳細情報tooltipを返却する
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_sep_depart_html($id)
    {

        $depart = $this->get_sales_depart($id);

        $output = '';
        if (count($depart) > 0) {
            $str = '<a onmouseover="detail_window.show(\'#TITLE#\');" onmouseout="detail_window.hide();" style="cursor: pointer;">複数部門</a>';

            $html = "<table class=tooltip_t>";
            $html .= "<tr>";
            $html .= "<th width=20px>No.</th>";
            $html .= "<th width=80px>研究所</th>";
            $html .= "<th width=80px>部門</th>";
            $html .= "<th width=60px>税区分</th>";
            $html .= "<th width=60px>税抜金額</th>";
            $html .= "<th width=60px>消費税</th>";
            $html .= "<th width=60px>税込金額</th>";
            $html .= "</tr>";
            $i = 0;
            foreach ($depart as $value) {
                $html .= "<tr>";
                $html .= "<td>" . ($i + 1) . "</td>";
                $html .= "<td>" . $value->institute_name . "</td>";
                $html .= "<td>" . $value->depart_name . "</td>";
                $html .= "<td>" . $value->tax_type_name . "</td>";
                $html .= "<td class=data_right>" . money_sep($value->no_tax_money) . "</td>";
                $html .= "<td class=data_right>" . money_sep($value->tax) . "</td>";
                $html .= "<td class=data_right>" . money_sep($value->in_tax_money) . "</td>";
                $html .= "</tr>";
                $i++;
            }
            $html .= "</table>";

            $output = str_replace("#TITLE#", $html, $str);
        }

        return $output;

    }


    /**
     * 一覧の合計件数を取得する
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_list_total_cnt($where)
    {

        // テーブル名を設定
        $this->set_tbl(T_SALES_MNG);

        // 件数取得
        $this->set_Prefix("sales");

        $this->db->select("sales.sales_mng_id");
        $this->db->join(M_CUSTOMER . " cus", "sales.customer_id=cus.customer_id");
        $this->db->join(M_HANDLER . " hand", "sales.handler_id=hand.handler_id", "left");
        $this->db->join(T_SALES_DEPART . " depart", "sales.sales_mng_id=depart.sales_mng_id", "left");
        $this->db->group_by("sales.sales_mng_id");

        // WHERE句作成
        $this->db->where("sales.first_data_flg", FLG_OFF);
        if (!empty($where)) {
            $this->db->where($where);
        }


        $res = $this->select();

        return count($res);

    }

    /**
     * 売上情報のリストを作成し返却
     *
     * @access public
     * @param $tbl String
     * @param $col_id String
     * @param $col_name String
     * @return array
     * @throws Exception
     * @author Kita Yasuhiro
     */
    public function get_name_list_custom($tbl, $col_id, $col_name)
    {

        $id = $this->input->get('id');

        $this->db->select($tbl . "." . $col_id);
        $this->db->select($tbl . "." . $col_name);

        $this->db->from($tbl);

        if (!empty($id)) {
            $this->db->join(T_SALES_MNG, T_SALES_MNG . "." . $col_id . " = " . $tbl . "." . $col_id . " AND sales_mng_id = " . $id, "LEFT");
            $this->db->where("(" . $tbl . ".delete_flg='" . FLG_OFF . "' OR " . $tbl . "." . $col_id . "=" . T_SALES_MNG . ".depart_id)");
        } else {
            $this->db->where($tbl . ".delete_flg = '" . FLG_OFF . "'");
        }

        $ret = $this->db->get();

        if ($ret === FALSE) {
            // TODO EXCEPTION共通処理の実装
            throw new Exception($this->m_tbl_name . 'の更新に失敗しました。');
        }

        return $ret->result();


    }

    /**
     * 請求書に関わる項目が変更されたかチェックする
     *
     * @access public
     * @param $data array
     * @return boolean
     * @author Kita Yasuhiro
     */
    public function chk_update_value($data)
    {

        // 売上管理テーブルのチェック
        if ($this->chk_update_value_mng($data['mng']) == false) return false;

        // 売上明細テーブルのチェック
        if ($this->chk_update_value_sales($data['detail']) == false) return false;


        return true;
    }

    /**
     * 請求書に関わる項目が変更されたかチェックする(管理テーブル)
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function chk_update_value_mng($data)
    {

        $input = $_POST;

        $alColum = array('customer_disp_name'
        , 'bill_date'
        , 'book_date'
        , 'handler_name'
        );

        // 上記項目が変わっている場合、請求書を削除する
        for ($i = 0; $i < count($alColum); $i++) {

            if ($input[$alColum[$i]] != $data[$alColum[$i]]) {
                return false;
            }

        }

        if (!empty($input['cutoff_date'])) {

            if ($input['credit_type'] != $data['credit_type']) {
                return false;
            }

        }

        return true;

    }

    /**
     * 請求書に関わる項目が変更されたかチェックする(売上明細テーブル)
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function chk_update_value_sales($data)
    {

        $input = $_POST;

        if (count($data) != count($input['goods_name'])) {
            return false;
        }

        $alColum = array('report_no'
        , 'goods_name'
        , 'cnt'
        , 'unit'
        , 'unit_price'
        , 'tax_type'
        , 'no_tax_money'
        , 'tax'
        , 'in_tax_money'
        , 'unit_memo'
        );


        for ($i = 0; $i < count($data); $i++) {
            // 上記項目が変わっている場合、請求書を削除する
            for ($j = 0; $j < count($alColum); $j++) {

                if ($input[$alColum[$j]][$i] != $data[$i][$alColum[$j]]) {
                    return false;
                }

            }

        }

        return true;


    }

    /**
     * データを取得し返却
     *
     * @access public
     * @param  $id int
     * @return void
     * @author Kita Yasuhiro
     */
    public function get_sales_data($id)
    {
        $data = array();

        $mng = $this->sales_mdl->get_sales_mng($id);

        // 配列にキャストし格納
        $mng[0]->chk_bill_sep = $mng[0]->sep_depart_flg;
        $data['mng'] = (array)$mng[0];

        // データ編集
        $data['mng']['institute_id'] = $data['mng']['institute_id'] . "," . $data['mng']['institute_name'];
        $data['mng']['depart_id'] = $data['mng']['depart_id'] . "," . $data['mng']['depart_name'];
        $data['mng']['abstract_id'] = $data['mng']['abstract_id'] . "," . $data['mng']['abstract_name'];
        $data['mng']['bill_date'] = slash_date($data['mng']['bill_date']);
        $data['mng']['book_date'] = slash_date($data['mng']['book_date']);
        $data['mng']['sep_month_from'] = substr($data['mng']['sep_month_from'], 0, 4) . "/" . substr($data['mng']['sep_month_from'], 4, 2);
        $data['mng']['sep_month_to'] = substr($data['mng']['sep_month_to'], 0, 4) . "/" . substr($data['mng']['sep_month_to'], 4, 2);

        if ($data['mng']['credit_type'] == CREDIT_TYPE_BEFORE) {
            $data['mng']['book_date'] = "";
        }

        $detail = $this->sales_mdl->get_sales_detail($id);

        $i = 0;
        foreach ($detail as $obj) {
            $data['detail'][$i] = (array)$obj;

            $data['detail'][$i]['unit_price'] = money_sep($data['detail'][$i]['unit_price']);
            $data['detail'][$i]['no_tax_money'] = money_sep($data['detail'][$i]['no_tax_money']);
            $data['detail'][$i]['in_tax_money'] = money_sep($data['detail'][$i]['in_tax_money']);
            $data['detail'][$i]['tax'] = money_sep($data['detail'][$i]['tax']);
            if ($data['detail'][$i]['tax'] == 0) $data['detail'][$i]['tax'] = "";

            $i++;
        }

        $before = $this->sales_mdl->get_sales_before($id);

        $i = 0;
        foreach ($before as $obj) {
            $data['before'][$i] = (array)$obj;
            $data['before'][$i]['sep_money'] = money_sep($data['before'][$i]['sep_money']);
            $data['before'][$i]['sep_tax_type'] = $data['before'][$i]['sep_tax_type'];

            $i++;
        }

        $depart = $this->sales_mdl->get_sales_depart($id);

        $i = 0;
        $data['depart'] = array();
        foreach ($depart as $obj) {
            $data['depart'][$i]['sep_institute'] = $obj->institute_id . "," . $obj->institute_name;
            $data['depart'][$i]['sep_depart'] = $obj->depart_id . "," . $obj->depart_name;
            $data['depart'][$i]['depart_tax_type'] = $obj->tax_type;
            $data['depart'][$i]['depart_no_tax_money'] = money_sep($obj->no_tax_money);
            $data['depart'][$i]['depart_tax'] = money_sep($obj->tax);
            $data['depart'][$i]['depart_in_tax_money'] = money_sep($obj->in_tax_money);

            $i++;
        }

        if (count($detail) == 0) $data['detail'] = array();
        if (count($before) == 0) $data['before'] = array();
        if (count($depart) == 0) $data['depart'] = array();

        return $data;

    }

    /**
     * 受注連携確認一覧取得
     *
     * @param     $id
     * @access    public
     * @return    array
     * @author    MKURITA
     */
    public function get_outside_relation_list($id)
    {
        // テーブル設定
        $this->m_tbl_name = T_SALES_DETAIL;
        $this->m_prefix = "det";

        $this->db->select("det.sales_detail_id");
        $this->db->select("det.sales_mng_id");
        $this->db->select("det.report_no");
        $this->db->select("(CASE WHEN stat.item_name IS NULL THEN '対象外' ELSE stat.item_name END) as relation_status_name");

        // JOIN定義
        $this->db->join(
            "(
            SELECT rel.sales_detail_id, rel.relation_status, gen.item_name
            FROM t_outside_relation rel
            INNER JOIN " . M_SYS_GENERAL_NAME . " gen ON gen.group_cd='" . GRP_RELATION_STATUS . "' AND gen.item_cd=rel.relation_status
            WHERE rel.delete_flg=" . FLG_OFF .
            ") stat",
            "stat.sales_detail_id=det.sales_detail_id",
            "LEFT"
        );

        // WHERE句作成
        $this->db->where("sales_mng_id", $id);

        return $this->select();

    }


    /**
     * 請求書番号をクリアする必要があるかどうか判別
     *
     * @access private
     * @return bool
     */
    private function _chk_sales_bill_no_clear()
    {
        $input = $_POST;

        $flg = false;

        // 締日管理の得意先で請求日が変更されている場合は請求書番号をクリアする
        if (!empty($_POST['cutoff_date']) && $input['bill_date'] != $this->old_data['mng']['bill_date']) {
            $flg = true;
        }

        return $flg;
    }
}

/* End of file sales_mdl.php */
/* Location: ./application/model/bill/sales_mdl.php */