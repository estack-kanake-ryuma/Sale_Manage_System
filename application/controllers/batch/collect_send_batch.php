<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Collect send batch Controller
 *
 * 請求回収データ送信バッチのコントローラー
 *
 * @author		Kanake Ryuma
 * @link		http://www.datalyze.co.jp
 * @property  Collect_send_batch_mdl $send_batch_mdl
 */
class Collect_send_batch extends MY_Controller {

	/**
	 * コンストラクタ
	 *
	 * @package    application
	 * @subpackage controllers
	 * @author    Kanake Ryuma
	 * @link    http://www.datalyze.co.jp
	 */
	public function __construct() {

		parent::__construct();

		// CLI処理か判定 ブラウザからのアクセスは404エラー
		if ( ! $this->input->is_cli_request() ) {
			show_404();
		}

		// Model読み込み
		$this->load->model('batch/collect_send_batch_mdl', 'send_batch_mdl');
	}

	/*
	 * ---------------------------------------------------------------------------
	 * イベント
	 * ---------------------------------------------------------------------------
	 */

	/**
	 * バッチ メイン処理
	 *
	 * [1]対象データの取得
	 * [2]請求回収データの作成
	 * [3]FTPへアップロード
	 * [4]売上情報の情報を送信済みに変更
	 *
	 * @access public
	 * @return void
	 * @author Kanake Ryuma
	 */
		public function index() {
			// 請求回収データを送信する
			$this->send_batch_mdl->send_collect_data();
		}

}

/* End of file bill_collect_send_batch.php */
/* Location: ./application/controllers/batch/bill_collect_send_batch.php */