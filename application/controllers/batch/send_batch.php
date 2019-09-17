<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Send batch Controller
 * 請求回収データ送信バッチのコントローラー
 *
 * @author Kanake Ryuma
 * @link http://www.datalyze.co.jp
 * @property  Send_batch_mdl $send_batch_mdl
 */
class Send_batch extends MY_Controller
{

    /**
     * コンストラクタ
     *
     * @package application
     * @subpackage controllers
     * @author Kanake Ryuma
     * @link http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();
        // CLI処理か判定 ブラウザからのアクセスは404エラー
        if (!$this->input->is_cli_request()) {
            show_404();
        }
        $this->load->model('batch/send_batch_mdl');
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
     * @throws Exception
     */
    public function index()
    {
        // 請求回収データを送信する
        $this->send_batch_mdl->send();
    }

}

/* End of file send_batch.php */
/* Location: ./application/controllers/batch/send_batch.php */