<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 相殺消込画面のモデル処理
 */
class Setoff_del_mdl extends Credit_common_mdl
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
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function regist_data()
    {

        log_message('info', '【相殺消込処理   START】');

        // トランザクション開始
        $this->db->trans_start();

        // データ編集
        $data = $this->get_credit_data();

        $ins = $data;

        foreach ($ins as $ins_data) {

            $this->m_tbl_name = T_CREDIT_MNG;
            $this->db->where('bill_mng_id', $ins_data['bill_mng_id']);
            $cnt = $this->get_total_cnt();
            $mng_id = "";
            if ($cnt == 0) {
                $mng = $ins_data;
                unset($mng['data']);

                // テーブル設定
                $this->m_tbl_name = T_CREDIT_MNG;

                // 管理データ登録
                $this->insert($mng);

                // シーケンス取得
                $mng_id = $this->db->insert_id();

            } else {

                $this->del_exist_data($ins_data['bill_mng_id']);

                $this->m_where = array('bill_mng_id' => $ins_data['bill_mng_id']);
                $this->db->set('sum_credit_money', 'sum_credit_money + ' . $ins_data['sum_credit_money'], false);
                $this->db->set('sum_balance_money', 'sum_balance_money - ' . $ins_data['sum_credit_money'], false);
                $this->update();

                // 消込管理IDを取得する
                $mng_id = $this->get_mng_id($ins_data['bill_mng_id']);

            }

            // ステータスUpdate
            $this->update_reconcile_status($mng_id);

            // 売上管理ファイルの更新
            $this->update_sales_mng($mng_id);

            // 更新金額の設定
            $this->m_now_money = $ins_data['sum_credit_money'];
            // 売掛金残高ファイルの更新
            $this->set_receivable_data($mng_id);

            foreach ($ins_data['data'] as $child) {

                $this->m_tbl_name = T_CREDIT_DATA;
                $child['credit_mng_id'] = $mng_id;
                $this->insert($child);

            }

        }

        // トランザクション終了
        $this->db->trans_complete();

        log_message('info', '【相殺消込処理   END】');

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


        log_message('info', '【相殺消込取消処理   START】');

        // param[0]->bill_mng_id
        // param[1]->credit_data_id
        $param = explode(",", $id);

        // トランザクション開始
        $this->db->trans_start();

        $bRes = $this->del_exist_data($param[0], $param[1]);

        $mng_id = $this->get_mng_id($param[0]);
        $this->set_receivable_data($mng_id, "cancel");

        // 売上管理テーブルのステータスを変更
        $this->update_sales_mng($mng_id, DATA_TYPE_BILL, "credit");

        // 消込管理テーブルの消込金額合計が0だったら、データ消す。
        $this->m_tbl_name = T_CREDIT_MNG;
        $this->db->where(array('credit_mng_id' => $mng_id, 'sum_credit_money' => '0'));
        $this->delete();


        // トランザクション終了
        $this->db->trans_complete();

        log_message('info', '【相殺消込取消処理   END】');

        return true;

    }

    /**
     * マスタ情報取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_mst_data()
    {

        $data = array();

        // テーブル設定
        $data['credit_status'] = $this->general_name_mdl->get_credit_stauts();

        return $data;
    }

    /**
     * 相殺消し込み一覧の絞込条件を取得する
     *
     * @access private
     * @return string
     * @author Kita Yasuhiro
     */
    public function create_search_condition()
    {
        $condition = array();
        $data = $this->get_input_condition();

        if (count($data) == 0) {
            $condition[] = "(reconcile_status = '" . $this->db->escape_like_str($data['credit_status']) . "' OR reconcile_status is null)";
        }

        // 得意先名称
        if (!empty($data['customer_name'])) {

            $condition[] = "(bill.customer_disp_name like '%" . $this->db->escape_like_str($data['customer_name'])
                . "%' or cus.customer_furi like '%" . $this->db->escape_like_str($data['customer_name']) . "%')";
        }

        // 入金種別
        if (!empty($data['credit_status'])) {

            if ($data['credit_status'] == CREDIT_STATUS_ON) {
                $condition[] = "(reconcile_status = '" . $this->db->escape_like_str($data['credit_status']) . "')";
            } else if ($data['credit_status'] == CREDIT_STATUS_OFF) {
                $condition[] = "(reconcile_status = '" . $this->db->escape_like_str($data['credit_status']) . "' OR reconcile_status is null)";
            }

        }

        // 請求日
        if (!empty($data['bill_date_from'])) {
            $condition[] = "date_format(bill_date, '%Y/%m/%d') >= " . $this->db->escape($data['bill_date_from']);
        }
        if (!empty($data['bill_date_to'])) {
            $condition[] = "date_format(bill_date, '%Y/%m/%d') <= " . $this->db->escape($data['bill_date_to']);
        }
        // 消込日
        if (!empty($data['reconcile_date_from'])) {
            $condition[] = "date_format(reconcile_date, '%Y/%m/%d') >= " . $this->db->escape($data['reconcile_date_from']);
        }
        if (!empty($data['reconcile_date_to'])) {
            $condition[] = "date_format(reconcile_date, '%Y/%m/%d') <= " . $this->db->escape($data['reconcile_date_to']);
        }

        // 検索条件返却
        if (count($condition) > 0) {
            return implode(' and ', $condition);
        } else {
            return "";
        }

    }

    /**
     * 相殺消し込みデータの取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_list_data($where, $start = 0)
    {

        // テーブル設定
        $this->m_tbl_name = T_BILL_MNG;

        $this->m_prefix = "bill";

        $this->db->select("bill.bill_mng_id");
        $this->db->select("bill.bill_no");
        $this->db->select("bill.publish_date");
        $this->db->select("bill.bill_date");
        $this->db->select("bill.bill_type");
        $this->db->select("bill.bill_money");
        $this->db->select("bill.customer_disp_name");
        $this->db->select("bill.credit_type");
        $this->db->select("mng.credit_mng_id");
        $this->db->select("mng.reconcile_status");
        $this->db->select("mng.sum_credit_money");
        $this->db->select("data.reconcile_date");
        $this->db->select("data.reconcile_money");
        $this->db->select("data.reconcile_type");
        $this->db->select("data.credit_data_id");

        // JOIN句作成
        $this->db->join(M_CUSTOMER . " cus ", "bill.customer_id=cus.customer_id", "LEFT");
        $this->db->join(T_CREDIT_MNG . " mng ", "bill.bill_no=mng.bill_no and mng.delete_flg='" . FLG_OFF . "'", "LEFT");
        $this->db->join(T_CREDIT_DATA . " data ", "mng.credit_mng_id=data.credit_mng_id AND data.reconcile_type='" . RECONCILE_TYPE_SETOFF . "'", "LEFT");

        // WHERE句作成
        $this->db->where(array("bill.credit_type" => CREDIT_TYPE_SETOFF));
        if (!empty($where)) {
            $this->db->where($where);
        }

        // リミット設定
        $this->db->limit(PER_DOWNLOAD_PAGE_CNT, $start);

        // ORDER句の設定
        //$this->db->order_by("bill.bill_no", "asc");
        $this->db->order_by("cus.customer_furi is null", "asc");
        $this->db->order_by("cus.customer_furi", "asc");

        return $this->select();
    }

    /**
     * 相殺消し込みデータの取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_list_cnt($where)
    {

        // テーブル設定
        $this->db->select("count(*) as cnt");

        $this->db->from(T_BILL_MNG . " bill");

        // JOIN句作成
        $this->db->join(M_CUSTOMER . " cus ", "bill.customer_id=cus.customer_id", "LEFT");
        $this->db->join(T_CREDIT_MNG . " mng ", "bill.bill_no=mng.bill_no and mng.delete_flg='" . FLG_OFF . "'", "LEFT");
        $this->db->join(T_CREDIT_DATA . " data ", "mng.credit_mng_id=data.credit_mng_id AND data.reconcile_type='" . RECONCILE_TYPE_SETOFF . "'", "LEFT");

        // WHERE句作成
        $this->db->where(array("bill.credit_type" => CREDIT_TYPE_SETOFF));
        if (!empty($where)) {
            $this->db->where($where);
        }

        $query = $this->db->get();
        $result = $query->result();

        return intval($result[0]->cnt);
    }

    /**
     * 入金管理データを取得する
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_credit_data()
    {

        $input = $_POST;
        $res = array();


        $i = 0;
        foreach ($input['print_chk'] as $val) {
            $res[$i]['bill_no'] = $input['bill_no'][$val];
            $res[$i]['bill_money'] = $input['bill_money'][$val];
            $res[$i]['bill_mng_id'] = $input['bill_mng_id'][$val];

            if (str_replace(",", "", $input['bill_money'][$val]) == str_replace(",", "", $input['reconcile_money'][$val])) {
                $res[$i]['reconcile_status'] = CREDIT_STATUS_ON;
            } else {
                $res[$i]['reconcile_status'] = CREDIT_STATUS_OFF;
            }

            $res[$i]['sum_credit_money'] = str_replace(",", "", $input['reconcile_money'][$val]) + $input['bef_reconcile_money'][$val];
            $res[$i]['sum_balance_money'] = $input['bill_money'][$val] - $res[$i]['sum_credit_money'];

            $res[$i]['data'][0]['reconcile_date'] = $input['reconcile_date'];
            $res[$i]['data'][0]['reconcile_money'] = str_replace(",", "", $input['reconcile_money'][$val]) + $input['bef_reconcile_money'][$val];
            $res[$i]['data'][0]['reconcile_type'] = RECONCILE_TYPE_SETOFF;
            $i++;
        }

        return $res;
    }

    /**
     * 消すのに必要なデータの取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_cancel_data($id)
    {

        // テーブル設定
        $this->m_tbl_name = T_CREDIT_MNG;

        // prefix
        $this->m_prefix = "mng";

        $this->db->select("data.credit_mng_id");
        $this->db->select("data.credit_data_id");
        $this->db->select("data.credit_received_id");
        $this->db->select("data.reconcile_type");
        $this->db->select("data.reconcile_money");

        // JOIN句設定
        $this->db->join(T_CREDIT_DATA . " data ", "mng.credit_mng_id=data.credit_mng_id", "LEFT");

        $this->db->where(array("mng.bill_mng_id" => $id));
        $this->db->where("data.reconcile_type in ('" . RECONCILE_TYPE_SETOFF . "')");

        return $this->select();

    }

    /**
     * 消込管理IDの取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_mng_id($id)
    {

        // テーブル設定
        $this->m_tbl_name = T_CREDIT_MNG;
        $this->db->select("credit_mng_id");
        $this->db->where(array("bill_mng_id" => $id));
        $res = $this->select();

        return $res[0]->credit_mng_id;

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

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */