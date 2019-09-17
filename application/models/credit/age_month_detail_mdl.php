<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Age Month Detail Mdl
 *
 * 売掛金月齢表の詳細画面のモデル
 *
 * @link		http://www.datalyze.co.jp
 *
 */
class Age_month_detail_mdl extends Credit_common_mdl {

	/**
	 * 消込残高の合計
	 * @var integer
	 */
	private $sum_balance_money = 0;

	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage	model/db
	 * @link		http://www.datalyze.co.jp
	 */
		public function __construct()
		{
			parent::__construct();
		}

	/**
	 * 詳細画面の一覧情報を取得する
	 *
	 * @access	public
	 * @param  stdClass $customer_info
	 * @param  string $target_month
	 * @param  int $institute_id
	 * @param  int $depart_id
	 * @return array
	 */
		public function get_detail_list($customer_info, $target_month, $institute_id, $depart_id) {

			// 詳細一覧のデータを取得する
			$list = $this->_get_detail_list_data($target_month,
				                                 $customer_info->customer_id,
				                                 $customer_info->cutoff_date,
				                                 $institute_id, $depart_id);

			// 表示用に加工を行う
			foreach($list as $data) {

				// 請求日をスラッシュ区切りにする
				$data->bill_date = slash_date($data->bill_date);

				// 請求書番号はPDFのリンクを設置する
				if($data->bill_no != '初期残高' && $data->bill_no != '未発行') {
					$data->bill_no = get_anchor("/bill/bill_cutoff_print/bill_disp/".$data->bill_no."?win_type=win", $data->bill_no, array("target" => "_blank"));
				}

				// 請求金額をカンマ区切りにする
				$data->bill_money = money_sep($data->bill_money);

				// 消込金額をカンマ区切りにする
				if(is_null($data->credit_money) || $data->credit_money === '') {
					$data->credit_money = '0';
				} else {
					$data->credit_money = money_sep($data->credit_money);
				}

				// 消込残高をカンマ区切りにする
				if(is_null($data->balance_money) || $data->balance_money === '') {
					$data->balance_money = $data->bill_money;
				} else {
					$data->balance_money = money_sep($data->balance_money);
				}

				// 合計に加算する
				$this->sum_balance_money += erase_money_sep($data->balance_money);

			}

			return $list;
		}

    /**
	 * 詳細画面の一覧データを取得する
	 *
	 * @access	private
	 * @param  string $target_month
	 * @param  int $customer_id
	 * @param  string $cutoff_date
	 * @param  int $institute_id
	 * @param  int $depart_id
	 * @return	array
	 */
        private function _get_detail_list_data($target_month,
									             $customer_id,
										         $cutoff_date,
										         $institute_id,
										         $depart_id) {

			$sql  =  " SELECT * FROM ( ";
			$sql .=  " SELECT ";
			$sql .= "   b_mng.bill_date ";
			$sql .= "  ,b_mng.bill_no ";
			$sql .= "  ,b_mng.bill_money ";
			$sql .= "  ,c_mng.sum_balance_money as balance_money ";
			$sql .= "  ,c_mng.sum_credit_money as credit_money ";
			if(is_null($cutoff_date) && $institute_id != '' && $depart_id != '') {
				$sql .= "  ,s_mng.institute_name ";
				$sql .= "  ,s_mng.depart_name ";
			}
			$sql .= " FROM " . T_BILL_MNG . " b_mng ";
			$sql .= " LEFT OUTER JOIN " . T_CREDIT_MNG . " c_mng ";
			$sql .= " ON b_mng.bill_mng_id = c_mng.bill_mng_id ";
			// 締日がない得意先の場合は売上情報も結合する(売上１=請求書1のため)
			if(is_null($cutoff_date)) {
				$sql .= " LEFT OUTER JOIN " . T_BILL_DATA . " b_data ";
				$sql .= " ON b_mng.bill_mng_id = b_data.bill_mng_id ";
				$sql .= " LEFT OUTER JOIN " . T_SALES_MNG . " s_mng ";
				$sql .= " ON b_data.sales_mng_id = s_mng.sales_mng_id ";
			}
			$sql .= " WHERE ";
			$sql .= "  ( ";
			$sql .= "   (b_mng.bill_money - c_mng.sum_credit_money) <> 0 ";
			$sql .= "   OR ";
			$sql .= "   (c_mng.credit_mng_id is null)";
			$sql .= "  ) ";
			$sql .= "  AND ";
			$sql .= "  b_mng.customer_id = " . $customer_id;
			// ６ヶ月の場合は６ヶ月より古いデータを全て対象にする(請求書のみ)
			if(date("Ym", strtotime(date('Ym').'01'." -6 month")) == $target_month) {
				$sql .= "  AND ";
				$sql .= "  date_format(b_mng.bill_date, '%Y%m') <= '" . $target_month . "'";
			} else {
				$sql .= "  AND ";
				$sql .= "  date_format(b_mng.bill_date, '%Y%m') = '" . $target_month . "'";
			}
			// 締日がない得意先で研究所と部門が指定されていた場合は絞りこみ対象にする
			if(is_null($cutoff_date) && $institute_id != '' && $depart_id != '') {
				$sql .= "  AND ";
				$sql .= "  s_mng.institute_id = " . $institute_id;
				$sql .= "  AND ";
				$sql .= "  s_mng.depart_id = " . $depart_id;
			}
			$sql .= " UNION ALL ";
			$sql .= " SELECT ";
			$sql .= "   s_mng.bill_date ";
			$sql .= "  ,'' as bill_no ";
			// 締日が存在する場合は売上の合計で表示する
			if(is_null($cutoff_date)) {
				$sql .= "  ,s_mng.sum_money as bill_money ";
				$sql .= "  ,s_mng.sum_money as balance_money ";
			} else {
				$sql .= "  ,SUM(s_mng.sum_money) as bill_money ";
				$sql .= "  ,SUM(s_mng.sum_money) as balance_money ";
			}
			$sql .= "  ,0 as credit_money ";
			if(is_null($cutoff_date) && $institute_id != '' && $depart_id != '') {
				$sql .= "  ,s_mng.institute_name ";
				$sql .= "  ,s_mng.depart_name ";
			}			$sql .= " FROM " . T_SALES_MNG . " s_mng ";
			$sql .= " LEFT OUTER JOIN " . T_BILL_DATA . " b_data ";
			$sql .= " ON s_mng.sales_mng_id = b_data.sales_mng_id";
			$sql .= " WHERE ";
			$sql .= "  b_data.bill_mng_id is null ";
			$sql .= "  AND ";
			$sql .= "  s_mng.customer_id = " . $customer_id;
			$sql .= "  AND ";
			$sql .= "  date_format(s_mng.bill_date, '%Y%m') = '" . $target_month . "'";
			// 締日がない得意先で研究所と部門が指定されていた場合は絞りこみ対象にする
			if(is_null($cutoff_date) && $institute_id != '' && $depart_id != '') {
				$sql .= "  AND ";
				$sql .= "  s_mng.institute_id = " . $institute_id;
				$sql .= "  AND ";
				$sql .= "  s_mng.depart_id = " . $depart_id;
			}
			// 締日がある得意先の場合は請求日でまとめる絞り込む
			if(is_null($cutoff_date)) {
				$sql .= " GROUP BY ";
				$sql .= "  s_mng.customer_id ";
				$sql .= "  ,s_mng.bill_date ";
			}
			// 6ヶ月の場合は初期残高も対象にする
			if(date("Ym", strtotime(date('Ym').'01'." -6 month")) == $target_month) {
				$sql .= " UNION ALL ";
				$sql .= " SELECT ";
				$sql .= "   '' as bill_date ";
				$sql .= "  ,'初期残高' as bill_no ";
				$sql .= "  ,first_money as bill_money ";
				$sql .= "  ,sum_balance_money as balance_money ";
				$sql .= "  ,(first_money - sum_balance_money) as credit_money ";
				if(is_null($cutoff_date) && $institute_id != '' && $depart_id != '') {
					$sql .= "  ,'' as institute_name ";
					$sql .= "  ,'' as depart_name ";
				}
				$sql .= " FROM " . T_FIRST_MONEY_MNG;
				$sql .= " WHERE ";
				$sql .= "  sum_balance_money <> 0";
				$sql .= "  AND ";
				$sql .= "  customer_id = " . $customer_id;
			}
			$sql .= " ) data ";
			$sql .= " WHERE ";
			$sql .= " data.bill_money IS NOT NULL ";
			$sql .= " ORDER BY data.bill_date, data.bill_no";

			// SQLの実行
			$query = $this->db->query($sql);

			return $query->result();
        }

	/**
	 * 詳細画面の一覧データを取得する
	 *
	 * @access	public
	 * @return	int
	 */
	public function get_sum_balance_money() {
		return money_sep($this->sum_balance_money);
	}

}

/* End of file age_month_detail_mdl.php */
/* Location: ./application/model/credit/age_month_detail_mdl.php */