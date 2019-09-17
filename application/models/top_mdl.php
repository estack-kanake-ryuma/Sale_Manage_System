<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Top Model
 *
 * トップページのモデルクラス
 */
class Top_mdl extends MY_Model
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
	 * データ登録処理実行
	 *
	 * @package    application
	 * @subpackage    model/db
	 * @author        Kita Yasuhiro
	 * @link        http://www.datalyze.co.jp
	 */
	public function regist_data()
	{

		// トランザクション開始
		$this->db->trans_start();

		$date = $this->session->userdata(SS_KEY_PROC_MONTH);

		// 残高ファイルを更新
		$this->update_balance_data();

		// 売上情報のデータタイプを更新
		$this->m_tbl_name = T_SALES_MNG;
		$this->db->set('bef_data_status_type', 'data_status_type', false);
		$this->db->set('data_status_type', DATA_TYPE_CLOSE);
		$this->db->where('(date_format(book_date, "%Y%m") = \'' . $date . '\')');
		$this->db->where('credit_type <> 3');
		$this->db->where('delete_flg', FLG_OFF);
		$this->update();

		// 売上情報のデータタイプを更新
		$this->m_tbl_name = T_SALES_MNG;
		$this->db->set('bef_data_status_type', 'data_status_type', false);
		$this->db->set('data_status_type', DATA_TYPE_CLOSE);
		$this->db->where('(date_format(bill_date, "%Y%m") = \'' . $date . '\')');
		$this->db->where('credit_type = 3');
		$this->db->where('delete_flg', FLG_OFF);
		$this->update();

		// 締日をupdate
		$regist_date = compute_month(substr($date, 0, 4), substr($date, 4, 2), "", 1);

		$this->m_tbl_name = M_PROC_MONTH;
		$this->db->set('proc_month', date("Ym", strtotime($regist_date)));
		$this->db->where('delete_flg', FLG_OFF);
		$this->update();

		// トランザクション終了
		$this->db->trans_complete();

		$this->session->set_userdata(SS_KEY_PROC_MONTH, date("Ym", strtotime($regist_date)));


	}

	/**
	 * データ取消処理実行
	 *
	 * @package    application
	 * @subpackage    model/db
	 * @author        Kita Yasuhiro
	 * @link        http://www.datalyze.co.jp
	 */
	public function cancel_data()
	{

		// トランザクション開始
		$this->db->trans_start();

		$date = $this->session->userdata(SS_KEY_PROC_MONTH);

		// 締日をupdate
		$regist_date = compute_month(substr($date, 0, 4), substr($date, 4, 2), "", -1);
		$target_month = date("Ym", strtotime($regist_date));

		$this->m_tbl_name = M_PROC_MONTH;
		$this->db->set('proc_month', $target_month);
		$this->db->where('delete_flg', FLG_OFF);
		$this->update();

		// 残高データを削除
		$this->m_tbl_name = T_BALANCE_MNG;
		$this->db->where('target_month', $target_month);
		$this->delete();

		// 売上管理ファイルのステータスを戻す(前受以外)
		$this->m_tbl_name = T_SALES_MNG;
		$this->db->set('data_status_type', 'bef_data_status_type', false);
		$this->db->set('bef_data_status_type', "");
		$this->db->where('date_format(book_date, "%Y%m") = ', $target_month);
		$this->db->where('credit_type <> ' . CREDIT_TYPE_BEFORE);
		$this->db->where('delete_flg', FLG_OFF);
		$this->update();

		// 売上管理ファイルのステータスを戻す(前受)
		$this->m_tbl_name = T_SALES_MNG;
		$this->db->set('data_status_type', 'bef_data_status_type', false);
		$this->db->set('bef_data_status_type', "");
		$this->db->where('date_format(bill_date, "%Y%m") = ', $target_month);
		$this->db->where('credit_type = ' . CREDIT_TYPE_BEFORE);
		$this->db->where('delete_flg', FLG_OFF);
		$this->update();

		// 締め処理で作成した受注システムへの送信データを削除
		$this->_delete_outside_send_mng();

		// トランザクション終了
		$this->db->trans_complete();

		$this->session->set_userdata(SS_KEY_PROC_MONTH, date("Ym", strtotime($regist_date)));

	}

	/**
	 * 残高テーブルを更新する
	 *
	 * @package    application
	 * @subpackage    model/db
	 * @author        Kita Yasuhiro
	 * @link        http://www.datalyze.co.jp
	 */
	public function update_balance_data()
	{

		// 処理月のデータを取得
		$now_data = $this->get_now_balance_data();

		foreach ($now_data as $value) {

			// 登録データを編集
			$regist = $this->get_now_regist_data($value);

			$this->m_tbl_name = T_BALANCE_MNG;
			$this->insert($regist);

		}

		// 当月の売上データを取得
		$sales = $this->get_present_sales_data();

		foreach ($sales as $value) {
			$this->m_tbl_name = T_BALANCE_MNG;
			// 残高をupdate
			$this->m_where = array('customer_id' => $value->customer_id, "customer_disp_name" => $value->customer_disp_name, "target_month" => $this->session->userdata(SS_KEY_PROC_MONTH));
			$this->db->set('balance_money', 'balance_money + ' . $value->sales_money, false);
			$this->update();

			$cnt = $this->db->affected_rows();
			if ($cnt == 0) {
				// 登録データを編集
				$regist = $this->get_regist_data($value, $value->sales_money, "sales");

				$this->m_tbl_name = T_BALANCE_MNG;
				$this->insert($regist);

			}

		}

		// 当月の売上前受データを取得
		$before = $this->get_present_before_data();

		foreach ($before as $value) {
			$this->m_tbl_name = T_BALANCE_MNG;
			// 残高をupdate
			$this->m_where = array('customer_id' => $value->customer_id, "customer_disp_name" => $value->customer_disp_name, "target_month" => $this->session->userdata(SS_KEY_PROC_MONTH));
			$this->db->set('balance_money', 'balance_money + ' . $value->sales_money, false);
			$this->update();

			$cnt = $this->db->affected_rows();
			if ($cnt == 0) {
				// 登録データを編集
				$regist = $this->get_regist_data($value, $value->sales_money, "sales");

				$this->m_tbl_name = T_BALANCE_MNG;
				$this->insert($regist);

			}

		}


		// 当月の消込データを取得
		$reconcile = $this->get_present_reconcile_data();

		foreach ($reconcile as $value) {
			$this->m_tbl_name = T_BALANCE_MNG;
			// 残高をupdate
			$this->m_where = array('customer_id' => $value->customer_id, "customer_disp_name" => $value->customer_disp_name, "target_month" => $this->session->userdata(SS_KEY_PROC_MONTH));
			$this->db->set('balance_money', 'balance_money - ' . $value->reconcile_money, false);
			$this->update();

			$cnt = $this->db->affected_rows();
			if ($cnt == 0) {
				// 登録データを編集
				$regist = $this->get_regist_data($value, $value->reconcile_money, "reconcile");
				$this->m_tbl_name = T_BALANCE_MNG;
				$this->insert($regist);
			}

		}

		// 初期残高の消込データを取得
		$first = $this->get_first_reconcile_data();

		foreach ($first as $value) {
			$this->m_tbl_name = T_BALANCE_MNG;
			// 残高をupdate
			$this->m_where = array('customer_id' => $value->customer_id, "customer_disp_name" => $value->customer_disp_name, "target_month" => $this->session->userdata(SS_KEY_PROC_MONTH));
			$this->db->set('balance_money', 'balance_money - ' . $value->first_reconcile_money, false);
			$this->update();

			$cnt = $this->db->affected_rows();
			if ($cnt == 0) {
				// 登録データを編集
				$regist = $this->get_regist_data($value, $value->first_reconcile_money, "reconcile");
				$this->m_tbl_name = T_BALANCE_MNG;
				$this->insert($regist);
			}

		}


	}

	/**
	 * インフォメーションのデータを取得する
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_disp_info_data()
	{

		$res['customer'] = array();
		$res['print'] = array();
		$str = '<a class="tooltip" popup="#TITLE#" style="cursor: pointer;">#COUNT#件</a>';

		// 本日が締日の得意先を取得
		$customer = $this->get_customer_cutoff();

		if (count($customer) > 0) {

			$html = "<table>";
			foreach ($customer as $value) {
				$html .= "<tr><td>$value->customer_disp_name</td></tr>";
			}
			$html .= "</table>";

			$output = str_replace("#TITLE#", nl2br($html), $str);
			$output = str_replace("#COUNT#", nl2br(count($customer)), $output);

			$res['customer']['msg'] = "本日、締日の得意先が" . $output . "あります。";
		}

		// 請求日が過ぎていて未発行の請求書を取得
		$print = $this->get_bill_print_info();

		$str = '<a href="/bill/sales_list/?top_bill=1">#COUNT#件</a>';

		if (count($print) > 0) {

			$session = array();
			$session[SS_KEY_SEARCH]['top_bill'] = 1;
			$this->session->set_userdata("sales_list", $session);

			$output = str_replace("#COUNT#", nl2br(count($print)), $str);
			$res['print']['msg'] = "請求書が発行されていない売上情報が" . $output . "あります。";

		}

		return $res;
	}

	/**
	 * 本日が締日の得意先を取得
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_customer_cutoff()
	{

		// テーブル設定
		$this->m_tbl_name = M_CUSTOMER;

		$this->db->select("customer_disp_name");
		$this->db->select("cutoff_date");

		// WHERE句作成
		$date = date("Ym");
		$this->db->where("cutoff_date is not null");
		$this->db->where("concat('" . $date . "', lpad(cutoff_date, 2, '0'))='" . date("Ymd") . "'");
		$this->db->order_by("customer_disp_name asc");


		return $this->select();

	}

	/**
	 * 出力していない請求書の情報
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_bill_print_info()
	{

		// テーブル設定
		$this->m_tbl_name = T_SALES_MNG;

		$this->db->select("customer_disp_name");
		$this->db->select("bill_date");

		// WHERE句作成
		$this->db->where("data_status_type", DATA_TYPE_SALES);
		$this->db->where("date_format(bill_date, \"%Y/%m/%d\") <= '" . date("Y/m/d") . "'");
		$this->db->order_by("bill_date asc");
		$this->db->order_by("customer_disp_name asc");

		return $this->select();

	}

	/**
	 * 処理月の残高ファイルのデータを取得する
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_now_balance_data()
	{

		// テーブル設定
		$this->m_tbl_name = T_BALANCE_MNG;

		$this->m_prefix = "balance";

		$this->db->select("balance.target_month");
		$this->db->select("balance.customer_id");
		$this->db->select("balance.customer_disp_name");
		$this->db->select("balance.balance_money");
		$this->db->select("balance.bef_balance_money");
		$this->db->select("(balance.balance_money + balance.bef_balance_money) as forward_money ", false);

		// WHEREの設定
		$date = $this->session->userdata(SS_KEY_PROC_MONTH);
		$regist_date = compute_month(substr($date, 0, 4), substr($date, 4, 2), "01", -1);
		$target_month = date("Ym", strtotime($regist_date));

		$this->db->where("balance.target_month = '" . $target_month . "'");

		return $this->select();
	}

	/**
	 * 処理月の初期残高の消込データを取得する
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_first_reconcile_data()
	{

		// テーブル設定
		$this->m_tbl_name = T_FIRST_MONEY_MNG;

		$this->m_prefix = "first";

		$this->db->select("first.customer_id");
		$this->db->select("first.customer_disp_name");
		$this->db->select("sum(data.reconcile_money) as first_reconcile_money ");

		// JOIN句
		$this->db->join(T_FIRST_MONEY_DATA . " data ", "first.first_mng_id=data.first_mng_id", "LEFT");

		// WHEREの設定
		$this->db->where("date_format(data.reconcile_date, '%Y%m')=", $this->session->userdata(SS_KEY_PROC_MONTH));

		// GROUP句の設定
		$this->db->group_by("first.first_mng_id");

		return $this->select();

	}


	/**
	 * 処理月の消込データを取得する
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_present_reconcile_data()
	{

		// テーブル設定
		$this->m_tbl_name = T_BILL_MNG;

		$this->m_prefix = "bill";

		$this->db->select("bill.customer_id");
		$this->db->select("bill.customer_disp_name");
		$this->db->select("sum(data.reconcile_money) as reconcile_money ");

		// JOIN句
		$this->db->join(T_CREDIT_MNG . " credit ", "bill.bill_mng_id=credit.bill_mng_id", "LEFT");
		$this->db->join(T_CREDIT_DATA . " data ", "credit.credit_mng_id=data.credit_mng_id", "LEFT");

		// WHEREの設定
		$this->db->where("date_format(data.reconcile_date, '%Y%m')=", $this->session->userdata(SS_KEY_PROC_MONTH));

		// GROUP句の設定
		$this->db->group_by("credit.credit_mng_id");

		// HAVING句の設定
		$this->db->having("sum(data.reconcile_money) <> 0");
		return $this->select();

	}

	/**
	 * 処理月の売上データを取得する
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_present_sales_data()
	{

		// テーブル設定
		$this->m_tbl_name = T_SALES_MNG;

		$this->m_prefix = "sales";

		$this->db->select("sales.customer_id");
		$this->db->select("sales.customer_disp_name");
		$this->db->select("sum(sales.sum_money) as sales_money");

		// WHEREの設定
		$this->db->where("date_format(book_date, '%Y%m') = ", $this->session->userdata(SS_KEY_PROC_MONTH));
		$this->db->where("credit_type <> '3' ");

		// GROUP句の設定
		$this->db->group_by("sales.customer_id, sales.customer_disp_name");

		return $this->select();
	}

	/**
	 * 処理月の売上前受データを取得する
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_present_before_data()
	{

		// テーブル設定
		$this->m_tbl_name = T_SALES_MNG;

		$this->m_prefix = "sales";

		$this->db->select("sales.customer_id");
		$this->db->select("sales.customer_disp_name");
		$this->db->select("sum(sales.sum_money) as sales_money");

		// WHEREの設定
		$this->db->where("date_format(bill_date, '%Y%m') = ", $this->session->userdata(SS_KEY_PROC_MONTH));
		$this->db->where("credit_type = '3' ");

		// GROUP句の設定
		$this->db->group_by("sales.customer_id, sales.customer_disp_name");

		return $this->select();
	}


	/**
	 * 処理月の残高データを取得する
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_balance_data($id, $name)
	{

		// テーブル設定
		$this->m_tbl_name = T_BILL_MNG;

		$this->m_prefix = "bill";

		$this->db->select("bill.customer_id");
		$this->db->select("bill.customer_disp_name");
		$this->db->select("sum(bill.bill_money) as bill_money");
		$this->db->select("sum(credit.sum_balance_money) as balance_money ");

		// JOIN句
		$this->db->join(T_CREDIT_MNG . " credit ", "bill.bill_mng_id=credit.bill_mng_id", "LEFT");

		// WHEREの設定
		$this->db->where("date_format(bill_date, '%Y%m')=", $this->session->userdata(SS_KEY_PROC_MONTH));
		$this->db->where("bill.customer_id", $id);
		$this->db->where("bill.customer_disp_name", $name);

		// GROUP句の設定
		$this->db->group_by("bill.customer_id, bill.customer_disp_name");

		return $this->select();
	}

	/**
	 * 当月の締め処理データの件数取得
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_balance_cnt()
	{

		$this->db->select("count(*) as cnt");
		$this->db->from(T_BALANCE_MNG);

		// WHERE句作成
		$date = date('Ym', strtotime(date('Y-m-1') . ' -1 month'));

		$this->db->where("target_month", $date);

		$query = $this->db->get();
		$result = $query->result();

		return intval($result[0]->cnt);

	}


	/**
	 * 処理月より三か月以上未入金の総額を取得
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_receivable_data()
	{

		// テーブル設定
		$this->m_tbl_name = T_RECEIVABLE_MNG;

		$this->m_prefix = "mng";

		$this->db->select("mng.institute_id");
		$this->db->select("mng.depart_id");
		$this->db->select("sum(sales_money) + sum(first_balance_money) as sales_money");
		$this->db->select("sum(credit_money) as credit_money");

		// WHERE句作成
		$date = $this->session->userdata(SS_KEY_PROC_MONTH) . "01";
		$target = date("Ym", strtotime($date . " -3 month"));

		$this->db->where("target_month <= " . $target);

		// GROUP句
		$this->db->group_by("mng.institute_id, mng.depart_id");

		return $this->select();

	}

	/**
	 * 処理月内に請求書を発行していないデータを取得する
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_publish_cnt()
	{
		// テーブル設定
		$this->m_tbl_name = T_SALES_MNG;

		$this->m_prefix = "sales";

		$this->db->select("sales.sales_mng_id");

		// JOIN句
		$this->db->join(T_BILL_DATA . " bill ", "bill.sales_mng_id=sales.sales_mng_id", "LEFT");

		// WHEREの設定
		$this->db->where("date_format(bill_date, '%Y%m')=", $this->session->userdata(SS_KEY_PROC_MONTH));
		$this->db->where("bill.sales_mng_id is null");

		return $this->select();

	}

	/**
	 * 締め処理テーブルに登録するデータを編集
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	private function get_regist_data($std, $money, $type)
	{

		$res = array();

		$date = $this->session->userdata(SS_KEY_PROC_MONTH);

		$res['target_month'] = $date;
		$res['customer_id'] = $std->customer_id;
		$res['customer_disp_name'] = $std->customer_disp_name;

		if ($type == "sales") {
			$res['balance_money'] = 0 + $money;
		} else {
			$res['balance_money'] = 0 - $money;
		}
		$res['bef_balance_money'] = 0;

		return $res;

	}

	/**
	 * 締め処理テーブルに登録するデータを編集
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	private function get_now_regist_data($std)
	{

		$res = array();

		$date = $this->session->userdata(SS_KEY_PROC_MONTH);

		$res['target_month'] = $date;
		$res['customer_id'] = $std->customer_id;
		$res['customer_disp_name'] = $std->customer_disp_name;
		$res['balance_money'] = 0;
		$res['bef_balance_money'] = $std->forward_money;

		return $res;

	}


	/**
	 * 表示用の部門別未入金表を作成
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_disp_receivable_result()
	{
		$res = array();

		$data = $this->get_receivable_data();

		$i = 0;
		foreach ($data as $value) {

			$res[$value->institute_id]['institute_id'] = $value->institute_id;
			$res[$value->institute_id]['depart_info'][$value->depart_id]['depart_id'] = $value->depart_id;
			$res[$value->institute_id]['depart_info'][$value->depart_id]['disp_sales_money'] = empty($value->sales_money) ? "0" : money_sep($value->sales_money);
			$res[$value->institute_id]['depart_info'][$value->depart_id]['disp_credit_money'] = empty($value->credit_money) ? "0" : money_sep($value->credit_money);
			$res[$value->institute_id]['depart_info'][$value->depart_id]['disp_balance_money'] = money_sep($value->sales_money - $value->credit_money);

			$i++;
		}

		return $res;

	}

	/**
	 * 表示用の部門別実績を作成
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_disp_depart_goal()
	{
		$res = array();

		$data = $this->get_depart_goal_data();


		$i = 0;
		foreach ($data as $value) {

			$res[$value->institute_id]['institute_id'] = $value->institute_id;
			$res[$value->institute_id]['depart_info'][$value->depart_id]['depart_id'] = $value->depart_id;
			$res[$value->institute_id]['depart_info'][$value->depart_id]['disp_now_money'] = empty($value->now_money) ? "0" : money_sep($value->now_money);
			$res[$value->institute_id]['depart_info'][$value->depart_id]['disp_mark_money'] = empty($value->mark_money) ? "0" : money_sep($value->mark_money);

			if (empty($value->now_money)) {
				$rate = 0;
			} else if (empty($value->mark_money)) {
				$rate = 100.0;
			} else {
				$rate = round(($value->now_money / $value->mark_money) * 100, 1);
			}

			$disp_rate = sprintf('%0.1f', $rate) . "%";
			$res[$value->institute_id]['depart_info'][$value->depart_id]['rate'] = ($rate < 100) ? get_span_red($disp_rate) : $disp_rate;

			$i++;
		}
		return $res;


	}


	/**
	 * 表示用の部門別実績を作成
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_disp_depart_result()
	{

		$res = array();

		$data = $this->get_depart_res_data();

		$i = 0;
		foreach ($data as $value) {

			$res[$value->institute_id]['institute_id'] = $value->institute_id;
			$res[$value->institute_id]['institute_name'] = $value->institute_name;
			$res[$value->institute_id]['depart_info'][$value->depart_id]['depart_id'] = $value->depart_id;
			$res[$value->institute_id]['depart_info'][$value->depart_id]['depart_name'] = $value->depart_name;
			$res[$value->institute_id]['depart_info'][$value->depart_id]['now_money'] = empty($value->now_money) ? "0" : $value->now_money;
			$res[$value->institute_id]['depart_info'][$value->depart_id]['disp_now_money'] = empty($value->now_money) ? "0" : money_sep($value->now_money);
			$res[$value->institute_id]['depart_info'][$value->depart_id]['bef_money'] = empty($value->bef_money) ? "0" : $value->bef_money;
			$res[$value->institute_id]['depart_info'][$value->depart_id]['disp_bef_money'] = empty($value->bef_money) ? "0" : money_sep($value->bef_money);

			if (empty($value->now_money)) {
				$rate = 0;
			} else if (empty($value->bef_money)) {
				$rate = 100.00;
			} else {
				$rate = round(($value->now_money / $value->bef_money) * 100, 1);
			}

			$disp_rate = sprintf('%0.1f', $rate) . "%";
			$res[$value->institute_id]['depart_info'][$value->depart_id]['rate'] = ($rate < 100) ? get_span_red($disp_rate) : $disp_rate;

			$res[$value->institute_id]['depart_info'][$value->depart_id]['arrow'] = get_arrow($rate);

			$i++;
		}

		return $res;
	}

	/**
	 * 部門別実績を取得
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_depart_goal_data()
	{

		$date = $this->session->userdata(SS_KEY_PROC_MONTH);

		// テーブル設定
		$this->m_tbl_name = M_SALES_MARK;

		$this->m_prefix = "mark";

		$this->db->select("mark.institute_id");
		$this->db->select("mark.depart_id");
		$this->db->select("mark.money as mark_money");
		$this->db->select("now_money");

		$tbl = "(SELECT ";
		$tbl .= "  institute_id, depart_id, sum(no_tax_money) as now_money ";
		$tbl .= " FROM " . V_SALES_INFO;
		$tbl .= " WHERE date_format(book_date, '%Y%m')='" . $date . "' AND delete_flg=" . FLG_OFF;
		$tbl .= " GROUP BY institute_id, depart_id) now ";

		// JOIN句
		$this->db->join($tbl, "mark.institute_id=now.institute_id AND mark.depart_id=now.depart_id", "LEFT");

		// WHERE句
		$this->db->where("mark.year", substr($date, 0, 4));
		$this->db->where("mark.month", substr($date, 4, 2));

		return $this->select();


	}

	/**
	 * 部門別実績を取得
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_depart_res_data()
	{

		$now_date = $this->session->userdata(SS_KEY_PROC_MONTH);
		$bef_date = compute_month(substr($now_date, 0, 4), substr($now_date, 4, 2), "", -12);

		// WHERE句作成
		$where_now = "date_format(book_date, '%Y%m')='" . $now_date . "' ";
		$where_bef = "date_format(book_date, '%Y%m')='" . date("Ym", strtotime($bef_date)) . "' ";

		$sql = " SELECT ";
		$sql .= " institute_id ";
		$sql .= " , institute_name ";
		$sql .= " , depart_id ";
		$sql .= " , depart_name ";
		$sql .= " , sum(case when " . $where_now . " then no_tax_money else 0 END) as now_money ";
		$sql .= " , sum(case when " . $where_bef . " then no_tax_money else 0 END) as bef_money ";
		$sql .= " FROM " . V_SALES_INFO;
		$sql .= " GROUP BY institute_id, institute_name, depart_id, depart_name ";

		$ret = $this->db->query($sql);
		$res = $ret->result();

		return $res;

	}

	/**
	 * 締日処理エリアの表示制御情報取得
	 *
	 * @access    public
	 * @return    array
	 * @author    Kita Yasuhiro
	 */
	public function get_disp_cutoff_info()
	{
		$res = array();

		$res['disp_ctrl'] = "";
		$res['cancel_flg'] = false;

		// 入力権限が全権限か？
		$login = $this->session->userdata(SS_KEY_LOGIN);
		if (isset($login[SS_KEY_AUTH_CD])) {
			if ($login[SS_KEY_AUTH_CD] != AUTH_CD_ALL) {
				$res['disp_ctrl'] = "display:none";
				$res['cancel_flg'] = false;
				return $res;
			}
		}

		// 前月の残高があるか？
		$cutoff_cnt = $this->get_balance_cnt();

		if ($cutoff_cnt > 0) {
			$regist_date = $this->session->userdata(SS_KEY_PROC_REGIST_DATE);
			$date_fifth = date("Ymd", strtotime($regist_date . " 5 days"));
			$now = date("Ymd");

			if ($now <= $date_fifth) {
				$res['cancel_flg'] = true;
			} else if ($now >= $date_fifth) {
				$res['disp_ctrl'] = "display:none";
			}

		}

		return $res;

	}
}

/* End of file top_mdl.php */
/* Location: ./application/model/top_mdl.php */