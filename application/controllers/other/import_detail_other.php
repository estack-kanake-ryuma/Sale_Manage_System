<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Import_detail_other
 *
 * 自動取込データ詳細画面のコントローラー
 *
 * @author        Kanake Ryuma
 * @link        http://www.datalyze.co.jp
 * @property  Import_detail_mdl $import_detail_mdl
 * @property  Import_batch_mdl   $import_batch_mdl
 */
class Import_detail_other extends MY_Controller
{

	/**
	 * コンストラクタ
	 *
	 * @package     application
	 * @subpackage controllers
	 * @author         Kanake Ryuma
	 * @link         http://www.datalyze.co.jp
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->model("other/import_detail_mdl");
		$this->load->model("batch/import_batch_mdl");
		$this->load->helper("sales_helper");
		$this->title = "自動取込データ詳細　－　売掛金管理システム";
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
	 * @author Kanake Ryuma
	 */
	public function index()
	{
		// 表示するoutside_receive_mng_idを取得
		$outside_receive_mng_id = $this->input->get('id');

		$data['import_list'] = $this->_get_outside_receive_data_list($outside_receive_mng_id);

		$this->load->view('other/import_detail_other', $data);
	}

	/**
	 * move_list
	 *
	 * @access public
	 * @return void
	 * @author Kanake Ryuma
	 */
	public function move_list()
	{
		// 変更するIDを取得
		$imort_mng_id = $this->input->get('id');
		$session = array();

		$session[SS_KEY_SEARCH]['id'] = $imort_mng_id;
		$this->session->set_userdata("sales_list", $session);

		$this->body = 'onload="opener.location.href=\'/bill/sales_list\';window.close();";';

	}

	/**
	 * データを取得し返却
	 *
	 * @access public
	 * @param  int $outside_receive_mng_id
	 * @return void
	 * @author Kanake Ryuma
	 */
	private function _get_outside_receive_data_list($outside_receive_mng_id)
	{
		// データベースより取込データの詳細情報を取得する
		$list_data = $this->import_detail_mdl->get_outside_receive_data($outside_receive_mng_id);

		// 各項目のマスタデータを取得する
		$mst = $this->import_detail_mdl->get_mst_data();

		$return_data = array();
		foreach ($list_data as $data) {

			// タグ区切りのテキストデータを取込用データ(項目名+値の連想配列)に変換する
			$item_data = $this->import_batch_mdl->convert_array($data->import_detail);

			//--------------------------------------------------------------------------------
			// 各項目加工と保存
			//--------------------------------------------------------------------------------

			//###################
			// 報告書No
			// ハイフン区切りに変更
			$report_no_ary = $this->import_batch_mdl->explode_report_no($item_data['report_no'], $item_data['conduct_pattern']);
			$item_data['report_no'] = implode($report_no_ary, '：');

			//###################
			// 売上管理ID(sales_mng_id)
			$item_data['sales_mng_id'] = $data->sales_mng_id;

			//###################
			// 請求日
			// ハイフン区切りに変更
			$item_data['disp_bill_date'] = convert_sep_date($item_data['bill_date']);

			//###################
			// 売上計上日
			// ハイフン区切りに変更
			$item_data['disp_book_date'] = convert_sep_date($item_data['book_date']);

			//###################
			// 入金種別
			// マスタの名称に変更
			if (array_key_exists($item_data['credit_type'], $mst['credit_type'])) {
				$item_data['disp_credit_type'] = $mst['credit_type'][$item_data['credit_type']]->item_name;
			} else {
				$item_data['disp_credit_type'] = '';
			}

			//###################
			// 得意先区分
			// マスタの名称に変更
			if (array_key_exists($item_data['customer_type'], $mst['customer_type'])) {
				$item_data['disp_customer_type'] = $mst['customer_type'][$item_data['customer_type']]->item_name;
			} else {
				$item_data['disp_customer_type'] = '';
			}

			//###################
			// 売上金額
			// カンマ区切りに変更
			$item_data['sum_money'] = money_sep($item_data['sum_money']);

			//###################
			// 消費税
			// カンマ区切りに変更
			$item_data['sum_tax'] = money_sep($item_data['sum_tax']);

			//###################
			// 結果
			// コードから表示文字に変更
			if ($data->result == RECEIVE_OK) {
				$item_data['disp_result'] = '成功';
			} elseif ($data->result == RECEIVE_RESULT_WARNING) {
				$item_data['disp_result'] = '<span class="blue">注意</span>';
			} else {
				$item_data['disp_result'] = '<span class="red">失敗</span>';
			}

			//###################
			// 処理結果メッセージ
			$item_data['error_messages'] = get_memo($data->error_messages);
			$return_data[] = $item_data;
		}

		return $return_data;
	}
}

/* End of file import_detail_other.php */
/* Location: ./application/controllers/other/import_detail_other.php */