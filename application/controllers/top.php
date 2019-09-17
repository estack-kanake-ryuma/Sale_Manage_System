<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Top Controller
 *
 * トップ画面のコントローラー
 *
 * @author   Kita Yasuhiro
 * @link     http://www.datalyze.co.jp
 * @property Top_mdl $top_mdl
 * @property Mainte_common_mdl $mainte_common_mdl
 * @property CI_Session $session
 * @property MY_Form_validation $form_validation
 */
class Top extends MY_Controller
{

    /**
     * グローバルメニューのグループ設定
     *
     * @var string
     */
    var $group = 'top';

    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage controllers
     * @author    Kita Yasuhiro
     * @link    http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("/top_mdl");
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
        $data['error'] = array();

        $data['depart'] = $this->_get_depart_data();

        $data['depart_result'] = $this->top_mdl->get_disp_depart_result();

        // 部門別実績情報を取得
        $data['depart_mark'] = $this->top_mdl->get_disp_depart_goal();

        // 部門別未入金情報を取得
        $data['receivable'] = $this->top_mdl->get_disp_receivable_result();

        // インフォメーションを取得
        $data['information'] = $this->top_mdl->get_disp_info_data();

        // 締め処理の表示状態を取得する
        $data['disp_cutoff'] = $this->top_mdl->get_disp_cutoff_info();

        $proc = $this->session->userdata(SS_KEY_PROC_MONTH);
        $data['proc_month'] = substr($proc, 0, 4) . "年" . substr($proc, 4, 2) . "月";

        if (count($_POST) > 0) {
            if (!$this->_exec()) {
                // @TODO 売上情報へ遷移するリンクを設定する処理
            }
        }

        $this->load->view('top', $data);
    }


    /*
     * ---------------------------------------------------------------------------
     * 個別メソッド
     * ---------------------------------------------------------------------------
     */

    /**
     * 締め処理実行
     *
     * @access     private
     * @package    application
     * @subpackage controllers
     * @return     boolean
     * @author     Kita Yasuhiro
     * @link       http://www.datalyze.co.jp
     */
    private function _exec()
    {
        if (isset($_POST['regist'])) {
            $this->form_validation->set_rules('chk_bill_publish', '', 'callback_chk_bill_publish');

            if ($this->form_validation->run()) {
                // 登録処理
                $this->top_mdl->regist_data();

                // 画面再表示
                $this->body = 'onload="' . alert_href('締め処理を行いました。', $this->get_back_url()) . '"';
            } else {
                return false;
            }
        } else {
            // 取消処理
            $this->top_mdl->cancel_data();

            // 画面再表示
            $this->body = 'onload="' . alert_href('締め処理を取り消しました。', $this->get_back_url()) . '"';
        }

        return true;
    }

    /**
     * マスタの部門一覧を取得し表示しやすいように編集
     *
     * @package    application
     * @subpackage controllers
     * @author    Kita Yasuhiro
     * @link    http://www.datalyze.co.jp
     */
    private function _get_depart_data()
    {
        $this->load->model('mainte/mainte_common_mdl');
        $data = $this->mainte_common_mdl->get_depart_data();

        $res = array();
        foreach ($data as $key => $value) {
            $cnt = 0;
            if (isset($res[$value->institute_id]['depart'])) {
                $cnt = count($res[$value->institute_id]['depart']);
            } else {
                $cnt = 0;
            }

            $res[$value->institute_id]['institute_id'] = $value->institute_id;
            $res[$value->institute_id]['institute_name'] = $value->institute_name;

            $res[$value->institute_id]['depart'][$cnt]['depart_id'] = $value->depart_id;
            $res[$value->institute_id]['depart'][$cnt]['depart_name'] = $value->depart_name;
        }

        sort($res);

        return $res;
    }

    /*
     * ---------------------------------------------------------------------------
     * エラーチェックメソッド
     * ---------------------------------------------------------------------------
     */

    /**
     * 処理月内に発行していない請求書があるかチェックする
     *
     * @package    application
     * @subpackage controllers
     * @author    Kita Yasuhiro
     * @link    http://www.datalyze.co.jp
     */
    public function chk_bill_publish()
    {
        $data = $this->top_mdl->get_publish_cnt();

        if (count($data) > 0) {
            $this->form_validation->set_message("chk_bill_publish", ERR_CHK_BILL_PUBLISH);
            return false;
        }

        return true;
    }

}

/* End of file top.php */
/* Location: ./application/controllers/top.php */