<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 残高管理の共通クラス
 * @property CI_DB_active_record $db
 */
class Credit_common_mdl extends MY_Model
{

    /**
     * 前回の入金金額(消込情報の削除時の利用)
     * @var integer
     */
    protected $m_bef_money = 0;

    /**
     * 今回の入金金額(消込情報の登録変更時に利用)
     * @var integer
     */
    protected $m_now_money = 0;

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
        $this->load->model("/db/receivable_mng_mdl");
    }

    /**
     * 入金管理テーブルのステータスを変更する
     *
     * @access protected
     * @param  $id int
     * @return string
     * @author Kita Yasuhiro
     * @throws Exception
     */
    protected function update_reconcile_status($id)
    {

        $status = CREDIT_STATUS_ON;

        // 入金管理テーブルの状態をselectする
        $this->m_tbl_name = T_CREDIT_MNG;
        $this->db->where('credit_mng_id', $id);
        $this->db->where('bill_money - (sum_credit_money + (bill_correct_money * -1) + credit_correct_money) = 0');
        $cnt = $this->get_total_cnt();

        if ($cnt == 0) {
            $status = CREDIT_STATUS_OFF;
        }

        $this->m_tbl_name = T_CREDIT_MNG;
        $this->db->where('credit_mng_id', $id);
        $this->db->set('reconcile_status', $status);
        $this->update();

    }

    /**
     * 売上管理ファイルのデータステータスを更新する
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function update_sales_mng($id, $type = DATA_TYPE_CREDIT, $credit = "")
    {

        // テーブル設定
        $this->m_tbl_name = T_CREDIT_MNG;
        $this->m_prefix = "mng";
        $this->db->select("data.sales_mng_id");
        $this->db->join(T_BILL_DATA . " data ", "mng.bill_mng_id=data.bill_mng_id", "LEFT");
        $this->db->where(array("mng.credit_mng_id" => $id));
        if (!empty($credit)) {
            $this->db->where(array("mng.sum_credit_money" => '0'));
        }
        $res = $this->select();

        $ary = array();
        foreach ($res as $value) {
            $ary[] = $value->sales_mng_id;
        }

        $where = implode(",", $ary);

        if (!empty($where)) {
            $this->m_tbl_name = T_SALES_MNG;
            $this->db->where('sales_mng_id in (' . $where . ')');
            if ($type == DATA_TYPE_CREDIT) {
                $this->db->where('data_status_type', DATA_TYPE_BILL);
            }
            $this->db->set('data_status_type', $type);
            $this->update();
        }

    }


    /**
     * 消すのに必要なデータの取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_cancel_data($id, $child_id = "")
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

        if (empty($child_id)) {
            $this->db->where(array("mng.bill_mng_id" => $id));
            $this->db->where("data.reconcile_type in ('" . RECONCILE_TYPE_FURI . "','" . RECONCILE_TYPE_FURI_TESU . "')");
        } else {
            $this->db->where("data.credit_data_id in (" . $child_id . ")");
        }

        return $this->select();

    }

    /**
     * 登録済みの振込みデータを消す
     *
     * @access private
     * @return array
     * @author kita Yasuhiro
     */
    protected function del_exist_data($bill_mng_id, $child_id = "")
    {

        $data = array();
        if (empty($child_id)) {
            $data = $this->get_cancel_data($bill_mng_id);
        } else {
            $data = $this->get_cancel_data($bill_mng_id, $child_id);
        }

        if (count($data) == 0) return false;

        // 金額退避
        $transfer = 0;
        $charge = 0;
        $id = "";
        foreach ($data as $val) {

            $id = $val->credit_mng_id;

            if ($val->reconcile_type == RECONCILE_TYPE_FURI) {
                $transfer += $val->reconcile_money;

                // 入金管理テーブルのUPDATE
                $this->m_tbl_name = T_CREDIT_RECIEVED;
                $this->db->where(array('credit_received_id' => $val->credit_received_id));
                $this->db->set('balance_money', 'balance_money + ' . $val->reconcile_money, false);
                $this->update();

            } else {
                $charge += $val->reconcile_money;
            }

            // 消込データテーブル削除
            $this->m_tbl_name = T_CREDIT_DATA;
            $this->db->where(array('credit_data_id' => $val->credit_data_id));
            $this->delete();

        }

        // 消込管理テーブルのUPDATE
        $this->m_tbl_name = T_CREDIT_MNG;
        $this->db->where(array('credit_mng_id' => $id));
        $this->db->set('sum_credit_money', 'sum_credit_money - ' . $transfer . ' - ' . $charge, false);
        $this->db->set('sum_balance_money', 'sum_balance_money + ' . $transfer . ' + ' . $charge, false);
        $this->db->set(array('reconcile_status' => CREDIT_STATUS_OFF));
        $this->update();

        // 前回金額を退避
        $this->m_bef_money = $transfer + $charge;
    }


    /**
     * 消すのに必要なデータの取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_credit_cancel_data($id)
    {

        // テーブル設定
        $this->m_tbl_name = T_CREDIT_RECIEVED_ADJUST;

        $this->db->select("credit_received_id");
        $this->db->select("adjust_id");
        $this->db->select("adjust_money");

        $this->db->where(array("adjust_id" => $id));

        return $this->select();

    }

    /**
     * 登録済みの入金データを消す
     *
     * @access private
     * @return array
     * @author kita Yasuhiro
     */
    protected function update_adjust_data($id, $adjust_id, $money)
    {

        // 消込データテーブル削除
        $this->m_tbl_name = T_CREDIT_RECIEVED_ADJUST;
        $this->db->where(array('adjust_id' => $adjust_id));
        $this->delete();

        // 消込管理テーブルのUPDATE
        $this->m_tbl_name = T_CREDIT_RECIEVED;
        $this->db->where(array('credit_received_id' => $id));
        $this->db->set('balance_money', 'balance_money + ' . $money, false);
        $this->update();

    }

    /**
     * 売掛金管理ファイルを更新する
     *
     * @access private
     * @return array
     * @author kita Yasuhiro
     */
    protected function set_receivable_data($mng_id, $regist_type = "regist")
    {
        $this->m_tbl_name = T_CREDIT_MNG;
        $this->m_prefix = "credit";

        $this->db->select("credit.credit_mng_id");
        $this->db->select("bill_m.bill_type");
        $this->db->select("bill_m.bill_date");
        $this->db->select("bill_m.customer_disp_name");
        $this->db->select("bill_c.sales_mng_id");

        $this->db->join(T_BILL_MNG . " bill_m ", "credit.bill_mng_id=bill_m.bill_mng_id", "INNER");
        $this->db->join(T_BILL_DATA . " bill_c ", "bill_m.bill_mng_id=bill_c.bill_mng_id", "LEFT");

        $this->db->where("credit.credit_mng_id", $mng_id);

        $res = $this->select();

        $data = (array)$res[0];

        // 更新金額の設定
        $data['sum_credit_money'] = $this->m_now_money;

        $this->receivable_mng_mdl->update_receivable_credit($data, $this->m_bef_money, $regist_type);

    }

    /**
     * 同じ得意先の件数を取得する
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_customer_cnt($name)
    {

        $sql = "  SELECT count(*) as cnt FROM ( ";
        $sql .= "  SELECT customer_id as id, customer_disp_name as value, customer_furi ";
        $sql .= " FROM " . M_CUSTOMER;
        $sql .= " WHERE delete_flg=" . FLG_OFF;
        $sql .= " AND (customer_disp_name='" . $this->db->escape_str($name) . "')";
        $sql .= " UNION ALL ";
        $sql .= " SELECT DISTINCT customer_id as id, customer_disp_name as value, '' as customer_furi ";
        $sql .= " FROM " . T_SALES_MNG;
        $sql .= " WHERE delete_flg = " . FLG_OFF;
        $sql .= " AND (customer_disp_name='" . $this->db->escape_str($name) . "')";
        $sql .= " ) cnt_tbl";

        $ret = $this->db->query($sql);
        $res = $ret->result();

        return intval($res[0]->cnt);

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
     * 指定された期間開始日の前日までの残高を取得する
     *
     * @access protected
     * @return string
     * @author Kita Yasuhiro
     */
    protected function get_bef_balance_data($date, $customer)
    {

        if (empty($date)) return "";

        // 直近の繰越日付を編集
        $balance_from = date("Ym", strtotime($date . "-1 month"));
        $proc_month = $this->session->userdata(SS_KEY_PROC_MONTH);

        if ($balance_from >= $proc_month) {
            $balance_from = date("Y/m/d", strtotime($proc_month . "01"));
            $balance_from = date("Ym", strtotime($balance_from . " -1 month"));
        }
        if ($balance_from <= "201306") {
            $balance_from = "201306";
        }

        // 繰越月から指定された日付の前日までの期間を編集
        $from = date("Y/m/d", strtotime($balance_from . "01"));
        $from = date("Y/m/d", strtotime($from . "1 month"));
        $to = date("Y/m/d", strtotime($date . "-1 days"));

        // データ取得
        $where = "customer_disp_name = '" . $this->db->escape_str($customer) . "'";
        $res = $this->get_pickup_data($balance_from, $from, $to, $where);

        if (count($res) == 0) {
            return 0;
        } else {
            return $res[0]->pickup_money;
        }

    }

    /**
     * 指定された期間開始日の前日までの残高を取得する
     *
     * @access protected
     * @return string
     * @author Kita Yasuhiro
     */
    public function get_pickup_data($month, $from, $to, $where = "")
    {

        $sql = " SELECT ";
        $sql .= " * ";
        $sql .= " , balance_money + sales_money - reconcile_money - received_money as pickup_money ";
        $sql .= " FROM ";
        $sql .= " ( ";
        $sql .= "   SELECT ";
        $sql .= "    customer.customer_id  ";
        $sql .= "    ,customer.customer_disp_name  ";
        $sql .= "    ,case when balance_money is null THEN 0 ELSE balance_money END as balance_money ";
        $sql .= "    ,case when sales_money is null THEN 0 ELSE sales_money END as sales_money ";
        $sql .= "    ,case when reconcile_money is null THEN 0 ELSE reconcile_money END  as reconcile_money ";
        $sql .= "    ,case when received_money is null THEN 0 ELSE received_money END  as received_money ";
        $sql .= "   FROM ( SELECT * FROM " . V_CUSTOMER_INFO . " WHERE " . $where . " ) as customer ";
        $sql .= " LEFT JOIN ";
        $sql .= " (" . $this->_get_balance_sql($month) . ") as balance ";
        $sql .= " ON customer.customer_id=balance.customer_id AND customer.customer_disp_name=balance.customer_disp_name ";
        $sql .= " LEFT JOIN ";
        $sql .= " (" . $this->_get_sales_sql($from, $to) . ") as sales ";
        $sql .= " ON customer.customer_id=sales.customer_id AND customer.customer_disp_name=sales.customer_disp_name ";
        $sql .= " LEFT JOIN ";
        $sql .= " (" . $this->_get_reconcile_sql($from, $to) . ") as reconcile ";
        $sql .= " ON customer.customer_id=reconcile.customer_id AND customer.customer_disp_name=reconcile.customer_disp_name ";
        $sql .= " LEFT JOIN ";
        $sql .= " ( ";
        $sql .= " SELECT customer_id, customer_disp_name, sum(balance_money) as received_money";
        $sql .= " FROM " . T_CREDIT_RECIEVED . "";
        $sql .= " WHERE date_format(credit_date, '%Y/%m/%d') <= '" . $to . "'";
        $sql .= " AND delete_flg = 0 AND balance_money <> 0";
        $sql .= " GROUP BY customer_id";
        $sql .= " ) as credit_received ";
        $sql .= " ON customer.customer_id=credit_received.customer_id AND customer.customer_disp_name=credit_received.customer_disp_name ";
        $sql .= " ) tbl";

        $ret = $this->db->query($sql);
        $res = $ret->result();

        return $res;

    }

    /**
     * 繰越ファイルから直近のデータを取得するSQLを返却
     *
     * @access protected
     * @return string
     * @author Kita Yasuhiro
     */
    protected function _get_balance_sql($month)
    {
        $sql = " SELECT ";
        $sql .= " customer_id ";
        $sql .= " , customer_disp_name ";
        $sql .= " , balance_money + bef_balance_money as balance_money ";
        $sql .= " FROM " . T_BALANCE_MNG . " ";
        $sql .= " WHERE ";
        $sql .= " target_month = '" . $month . "'";

        return $sql;

    }

    /**
     * 指定期間の売上を取得するSQLを返却
     *
     * @access protected
     * @return string
     * @author Kita Yasuhiro
     */
    protected function _get_sales_sql($from, $to)
    {

        $sql = " SELECT ";
        $sql .= " customer_id ";
        $sql .= " , customer_disp_name ";
        $sql .= " , sum(sum_money) as sales_money ";
        $sql .= " FROM " . T_SALES_MNG . " ";
        $sql .= " WHERE ";
        $sql .= " ((credit_type <> 3 and date_format(book_date, '%Y/%m/%d') >= '" . $from . "' and  date_format(book_date, '%Y/%m/%d') <= '" . $to . "') ";
        $sql .= " OR ";
        $sql .= " (credit_type = 3 and date_format(bill_date, '%Y/%m/%d') >= '" . $from . "' and  date_format(bill_date, '%Y/%m/%d') <= '" . $to . "')) ";
        $sql .= " AND delete_flg = 0 ";
        $sql .= " AND first_data_flg = 0 ";
        $sql .= " group by customer_id, customer_disp_name ";

        return $sql;

    }

    /**
     * 指定期間の消込額を取得するSQLを返却
     *
     * @access protected
     * @return string
     * @author Kita Yasuhiro
     */
    protected function _get_reconcile_sql($from, $to)
    {

        $sql = " SELECT ";
        $sql .= " customer_id ";
        $sql .= " , customer_disp_name ";
        $sql .= " , sum(reconcile_money) as reconcile_money  ";
        $sql .= " FROM " . V_RECONCILE_DATA . " ";
        $sql .= " WHERE ";
        $sql .= " date_format(reconcile_date, '%Y/%m/%d') >= '" . $from . "' ";
        $sql .= " AND ";
        $sql .= " date_format(reconcile_date, '%Y/%m/%d') <= '" . $to . "' ";
        $sql .= " group by customer_id, customer_disp_name ";

        return $sql;

    }

    /**
     * 削除対象データが存在するかチェック
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_child_id_cnt($id)
    {

        if (empty($id)) return 0;

        // テーブル設定
        $this->db->select("count(*) as cnt");

        $this->db->from(T_CREDIT_DATA . " credit");
        // WHERE句作成
        $this->db->where("credit_data_id", $id);

        $query = $this->db->get();
        $result = $query->result();

        return intval($result[0]->cnt);
    }

}

/* End of file credit_common_mdl.php */
/* Location: ./application/model/credit/credit_common_mdl.php */