<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY Controller
 *
 * 独自のControllerクラス
 *
 * @package    application
 * @subpackage libraries
 * @author    Kita Yasuhiro
 * @link    http://www.datalyze.co.jp
 */
class MY_Controller extends CI_Controller
{

    var $body = '';
    var $title = '';
    var $js = '';
    var $keep_session = array();

    /**
     * コンストラクタ
     *
     * @access public
     * @author    Kita Yasuhiro
     */
    public function __construct($rules = array())
    {
        parent::__construct($rules);
        $helper = array();
        $helper[] = 'url';
        $helper[] = 'form';
        $helper[] = 'html';
        $helper[] = 'string';
        // helper
        $this->load->helper($helper);

        $library = array();
        $library[] = 'pagination';
        $library[] = 'form_validation';

        if ($this->router->method != "ajax") {
            $library[] = 'session';
        }

        // helper
        $this->load->library($library);

        // model
        $this->load->model('mainte/mainte_common_mdl');
        $this->load->model('credit/credit_common_mdl');

        // 残すセッションの設定
        $this->_set_keep_session();

        // IDチェック
        $this->chk_edit_id();

        // 処理月の設定
        $date = $this->get_db_proc_month();
        $this->session->set_userdata(SS_KEY_PROC_MONTH, $date);

    }

    /**
     * 残すセッションの設定
     *
     * @access public
     * @author    Kita Yasuhiro
     */
    private function _set_keep_session()
    {

        // ファイル名をセッションキーとしている
        $this->keep_session[] = $this->router->class;

        if ($this->session->userdata(SS_KEY_BEF_KEY)) {
            $this->keep_session[] = SS_KEY_BEF_KEY;
        }

    }

    /**
     * 登録完了後などに戻すURLを返却する
     *
     * @access protected
     * @author    Kita Yasuhiro
     */
    protected function get_back_url()
    {

        $url = "";

        if ($this->router->method == "edit") {
            if ($this->session->userdata(SS_KEY_BEF_KEY)) {
                $data = $this->session->userdata(SS_KEY_BEF_KEY);
                $url = $data[SS_KEY_BACK_URL];
            } else {
                $url = "/" . str_replace("/edit", "", $this->uri->uri_string());
            }

        } else if ($this->router->method == "copy") {

            if ($this->session->userdata(SS_KEY_BEF_KEY)) {
                $data = $this->session->userdata(SS_KEY_BEF_KEY);
                $url = $data[SS_KEY_BACK_URL];
            } else {
                $url = "/" . str_replace("/copy", "", $this->uri->uri_string());
            }

        } else if ($this->router->method == "delete") {

            if ($this->session->userdata(SS_KEY_BEF_KEY)) {
                $data = $this->session->userdata(SS_KEY_BEF_KEY);
                $url = $data[SS_KEY_BACK_URL];
            } else {
                $url = "/" . str_replace("/delete", "", $this->uri->uri_string());
            }

        } else if ($this->router->method == "regist") {
            $url = "/" . str_replace("/regist", "", $this->uri->uri_string());
        } else {
            $url = "/" . $this->uri->uri_string();
        }

        return $url;

    }

    /**
     * 請求書一括ダウンロード
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function bill_all_download($bill_no)
    {

        $zip = new ZipArchive();

        // ファイル名
        $file_name = "seikyusyo_" . date("Ymd") . ".zip";

        $result = $zip->open(TEMP_PATH . $file_name, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE);

        if ($result) {

            for ($i = 0; $i < count($bill_no); $i++) {
                $zip->addFile(BILL_PATH . $bill_no[$i] . ".pdf", $bill_no[$i] . ".pdf");
            }
            $zip->close();

            $size = filesize(TEMP_PATH . $file_name);
            $type = 'application/x-zip-dummy-content-type';
            $zipName = mb_convert_encoding($file_name, 'SJIS');

            header('Content-type: ' . $type);
            header('Content-disposition: attachment; filename="' . $zipName . '"');
            header('Content-length: ' . $size);
            ob_end_clean();
            echo file_get_contents(TEMP_PATH . $file_name);

            unlink(TEMP_PATH . $file_name);
            exit;

        }

    }


    /**
     * 請求書表示イベント処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function bill_disp($bill_no)
    {

        $file_name = BILL_PATH . $bill_no . ".pdf";

        $size = filesize($file_name);
        $type = 'application/pdf';
        // ファイル出力
        header('Content-length: ' . $size);
        header('Content-type: ' . $type);
        header('Content-disposition: inline; filename="' . $bill_no . ".pdf" . '"');
        readfile($file_name);

    }

    /**
     * 変更及び複製時、idのチェックを行う
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function chk_edit_id()
    {
        if ($this->router->method == "edit" || $this->router->method == "copy") {

            $id = $this->input->get('id');

            if (empty($id)) {
                // エラーページ遷移
                $data['msg'] = 'IDが不正です。';
                $data['url'] = $this->get_back_url();
                $html = $this->load->view('/common/error_common', $data, true);
                echo $html;
                exit;
            } else {
                // id存在チェック
                $this->load->model("util/id_chk_mdl");
                if ($this->id_chk_mdl->get_id_cnt($id) == 0) {
                    $data['msg'] = 'IDが不正です。';
                    $data['url'] = $this->get_back_url();
                    $html = $this->load->view('/common/error_common', $data, true);
                    echo $html;
                    exit;
                }

            }

        } else {
            return;
        }

        return;

    }

    /**
     * 2重登録チェック処理
     *
     * @access    public
     * @return    void
     * @author    Kita Yasuhiro
     */
    protected function chk_dup_regist()
    {
        $ticket = isset($_POST['ticket']) ? $_POST['ticket'] : '';

        $save = $this->session->userdata(SS_KEY_TICKET);
        $save = empty($save) ? '' : $save;

        if ($ticket === '') {
            $data['msg'] = '不正なアクセスです。';
            $data['url'] = $this->get_back_url();
            $html = $this->load->view('/common/error_common', $data, true);
            echo $html;
            exit;
        }

        if ($ticket !== $save) {

            $data['msg'] = '不正なアクセスです。';
            $data['url'] = $this->get_back_url();
            $html = $this->load->view('/common/error_common', $data, true);
            echo $html;
            exit;
        }

        $this->session->unset_userdata(SS_KEY_TICKET);

    }

    /**
     * DBから処理月を取得する
     *
     * @access    public
     * @return    String $proc_month
     * @author    Kita Yasuhiro
     */
    public function get_db_proc_month()
    {
        $this->load->model('login_mdl');

        $res = $this->login_mdl->get_proc_month();

        return $res[0]->proc_month;
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */