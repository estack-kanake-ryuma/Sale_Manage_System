<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Age Month Print Detail
 *
 * 売掛金月齢表の詳細画面のコントローラー
 *
 * @link		http://www.datalyze.co.jp
 * 
 * @property age_month_detail_mdl $age_month_detail_mdl
 * @property m_customer_mdl $m_customer_mdl
 */
class Age_month_print_detail extends MY_Controller {

	/**
	 * コンストラクタ
	 *
	 * @package	 application
	 * @subpackage controllers
	 * @link	     http://www.datalyze.co.jp
	 */
	public function __construct()
	{
		parent::__construct();

		// 得意先情報のモデルの読み込み
		$this->load->model('db/m_customer_mdl');

		// 売掛金月齢表の詳細画面のモデルの読み込み
		$this->load->model('credit/age_month_detail_mdl');
	}

	/*
	 * ---------------------------------------------------------------------------
	 * イベント
	 * ---------------------------------------------------------------------------
	 */
	/**
	 * Indexページ処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
		public function index()
		{
			$param = array();

			// パラメタの取得
			$customer_name = $this->input->get('name');
			$target_month = $this->input->get('target');
			if($this->input->get('institute_id')) {
				$institute_id = $this->input->get('institute_id');
			} else {
				$institute_id = '';
			}
			if($this->input->get('depart_id')) {
				$depart_id = $this->input->get('depart_id');
			} else {
				$depart_id = '';
			}

			// 得意先情報の取得
			$customer_info = $this->m_customer_mdl->get_customer_info($customer_name);

			if($customer_info != null) {

				// 詳細一覧情報を取得
				$param['list'] = $this->age_month_detail_mdl->get_detail_list($customer_info[0], $target_month, $institute_id, $depart_id);

				// 基本情報の設定
				$param['customer_name'] = $customer_name;
				$param['month'] = $this->get_retention_month($target_month);
				$param['money'] = $this->age_month_detail_mdl->get_sum_balance_money();
				if($institute_id != ''  && $depart_id != '' && count($param['list']) > 0) {
					$param['handle_name'] = $param['list'][0]->institute_name . ' ' . $param['list'][0]->depart_name;
				} else {
					$param['handle_name'] = '';
				}
			}

			// view読み込み
			$this->load->view('credit/age_month_print_detail', $param);

		}

	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */

	/**
	 * 滞留条件を取得する
	 *
	 * @param $month
	 * @return string
	 */
		private function get_retention_month($month) {

			$value = '';

			// 当月とそれ以外に表示文言を切り替え
			if($month == date('Ym')) {
				$value = '対象月請求';
			} else {

				$value = (date('Ym') - $month) . 'ヶ月';

				if($value == '6ヶ月') {
					$value = $value . '以上';
				}
			}

			return $value;

		}


}

/* End of file age_month_print_detail.php */
/* Location: ./application/controllers/credit/age_month_print_detail.php */