<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Import_data_output Controller
 *
 * 自動取込データ出力のコントローラー
 *
 * @author		Kanake Ryuma
 * @link		http://www.datalyze.co.jp
 * @property  Import_data_output_mdl $import_data_output_mdl
 */
class Import_data_output extends MY_Controller {

	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	     Kanake Ryuma
	 * @link	     http://www.datalyze.co.jp
	 */
	public function __construct()
	{
		parent::__construct();

        // Load Model
        $this->load->model('bill/import_data_output_mdl');

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
			$data = array();

			// 検索条件を設定
			$condition = $this->import_data_output_mdl->create_search_condition();

			// 一覧データの取得処理
			$data['list_data'] = $this->_get_disp_list_data($condition);

			// 自動取込のトータル件数を取得
			$total = $this->import_data_output_mdl->get_list_total_cnt($condition);

			// ページ情報を取得
			$data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));

			// ページリンク
			$data['page_link'] = $this->pagination->create_page_link($total);

			// 検索条件の入力値
			$data['search'] = $this->import_data_output_mdl->get_input_condition();

			// 得意先一覧用のセッションを設定
			$this->import_data_output_mdl->set_list_session();

	        $this->load->view('bill/import_data_output', $data);
		}
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */

	/**
	 * 表示用の一覧データを取得
	 *
	 * @access private
	 * @return array
	 * @author Kanake Ryuma
	 */
	private function _get_disp_list_data($condition)
	{

		// 検索開始番号を取得
		$start = $this->uri->segment(4);

		// 一覧を取得
		$list = $this->import_data_output_mdl->get_list_data($condition, $start);

		$i = 1;
		foreach ($list as $val) {

			// 行番号(No)
			$val->no = $i;

			// 結果
			$result = '';
			if($val->result == IMPORT_OK) {
				$result = 'OK';
			} else if($val->result ==IMPORT_ERROR) {
				$result = '<span class="red">NG<br/>'.$val->error_messages.'</span>';
			} else if($val->result == IMPORT_FATAL) {
				$result = '<span class="red" style="font-weight:bold;">NG<br/>'.$val->error_messages.'<br/>管理番号['.$val->header_info.']</span>';
			} else {
				$result = '';

			}
			$val->disp_result = $result;

			// 登録件数
			$val->regist_count = intval($val->count) - intval($val->skip_count);

			// 行番号のインクリメント
			$i++;
		}
		return $list;
	}


}

/* End of file import_data_output.php */
/* Location: ./application/controllers/bill/import_data_output.php */