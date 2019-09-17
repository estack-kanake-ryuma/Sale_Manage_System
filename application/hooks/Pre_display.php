<?php

/**
 * Pre display
 *
 * 表示準備用のクラス
 *
 * @package    application
 * @subpackage    hook
 * @author    Kita Yasuhiro
 * @link    http://www.datalyze.co.jp
 */
class Pre_display
{

    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage    hook
     * @author    Kita Yasuhiro
     * @link    http://www.datalyze.co.jp
     */
    public function __construct()
    {
        // 共通インスタンスの生成
        $this->ci =& get_instance();

        // LOAD
        $this->ci->load->model('db/page_info_mdl');
        $this->ci->load->model('db/menu_mng_mdl');
        $this->ci->load->model('db/menu_data_mdl');

    }

    /**
     * コントローラがインスタンス化された直後処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function init()
    {

        //------------------------------------------------------------------------
        // ログイン状態チェック処理
        //------------------------------------------------------------------------
        $sGroup = $this->_get_group_cd();
        if (!empty($sGroup) && $sGroup != GRP_LOGIN) {
            if (!$this->_login_chk()) {
                // エラー画面に遷移
                $data['msg'] = 'ログイン認証エラー';
                $html = $this->ci->load->view('/common/error_common', $data, true);
                echo $html;
                exit;
            }
        }

        //****************************************************************************
        // コントローラー処理開始ログ
        $login = $this->ci->session->userdata(SS_KEY_LOGIN);
        log_message('info', '<PROCESS-START> USER-ID: ' . $login['user_id'] . ' Controller:' . $this->ci->router->class . '  Method:' . $this->ci->router->method);

        //------------------------------------------------------------------------
        // セッションの始末処理
        //------------------------------------------------------------------------
        $sWin = $this->ci->input->get("win_type");
        if ($this->ci->router->class != "ajax" && $sWin != "win") {
            $this->_del_session();

            // リスト条件をセッションに設定する
            $this->_set_before_session();
        }

        //------------------------------------------------------------------------
        // 戻り先情報の設定
        //------------------------------------------------------------------------
        $this->_set_back_url();

    }

    /**
     * システムが実行の最後で、処理が終わった時走る処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function display()
    {
        $sGroup = $this->_get_group_cd();
        $sWin = $this->ci->input->get("win_type");

        if (!empty($sGroup)) {
            // masterファイルの切り分け
            if ($sGroup == GRP_LOGIN) {
                $this->_dispLogin();
            } else if ($sGroup == GRP_OTHER || $sWin == "win") {
                $this->_dispOther();
            } else {
                $this->_dispCommon();
            }
        }

        //****************************************************************************
        // コントローラー処理終了ログ
        log_message('info', '<PROCESS-END> Controller:' . $this->ci->router->class . '  Method:' . $this->ci->router->method . ' execution time=' . $this->ci->benchmark->elapsed_time('total_execution_time_start', 'total_execution_time_end') . 's');
    }

    /**
     * ログイン画面の場合の表示処理
     *
     * @access private
     * @return void
     * @author Kita Yasuhiro
     */
    private function _dispLogin()
    {
        $param = array('contents' => $this->ci->output->get_output());
        $html = $this->ci->load->view('common/login_master', $param, true);
        echo $html;
    }

    /**
     * 子Window画面の場合の表示処理
     *
     * @access private
     * @return void
     * @author Kita Yasuhiro
     */
    private function _dispOther()
    {
        // ボディタグへの埋め込みスクリプト情報
        $param['body'] = $this->ci->body;
        $param['title'] = $this->ci->title;
        $param['js'] = $this->ci->js;
        $param['contents'] = $this->ci->output->get_output();
        $html = $this->ci->load->view('common/other', $param, true);
        echo $html;
    }

    /**
     * 共通画面の場合の表示処理
     *
     * @access private
     * @return void
     * @author Kita Yasuhiro
     */
    private function _dispCommon()
    {
        $this->ci->benchmark->mark('total_execution_time_end');
        $param = $this->_get_param();
        $html = $this->ci->load->view('common/master', $param, true);
        echo $html;
    }

    /**
     * パラメータ作成
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function _get_param()
    {
        $param = array();

        // タブメニュー作成
        $param['tab_menu'] = $this->_get_tab_menu();

        // ローカルメニュー作成
        $param['local_menu'] = $this->_get_local_menu();

        // 権限の認証チェック
        if (!$this->_chk_auth_screen($param['local_menu'])) {
            // エラー画面に遷移
            $data['msg'] = '権限がない画面です。';
            $html = $this->ci->load->view('/common/error_common', $data, true);
            echo $html;
            exit;
        }


        // タイトル
        $param['page_info'] = $this->_get_page_info();

        // ボディタグへの埋め込みスクリプト情報
        $param['body'] = $this->ci->body;

        // ログイン情報
        $param['login'] = $this->ci->session->userdata(SS_KEY_LOGIN);

        // 処理月情報
        $date = $this->ci->session->userdata(SS_KEY_PROC_MONTH);
        $str = substr($date, 0, 4) . "年" . substr($date, 4, 2) . "月";
        $param['proc_month'] = $str;

        // コンテンツの設定
        $param['contents'] = $this->ci->output->get_output();

        return $param;
    }

    /**
     * タブのメニューを作成
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function _get_tab_menu()
    {
        $res = array();
        if ($this->ci->session->userdata(SS_KEY_TAB_MENU)) {
            $res = $this->ci->session->userdata(SS_KEY_TAB_MENU);
        } else {
            $res = $this->ci->menu_mng_mdl->get_tab_menu();
        }

        // メニューフラグの設定
        $sGroup = $this->_get_group_cd();
        foreach ($res as $key => $val) {
            if ($sGroup == $val->group_cd) {
                $val->image_path = IMG_PATH . $val->image_name . "_r.gif";
            } else {
                $val->image_path = IMG_PATH . $val->image_name . "_off.gif";
            }
        }

        $this->ci->session->set_userdata(SS_KEY_TAB_MENU, $res);

        return $res;
    }

    /**
     * ローカルメニューを作成
     *
     * @access private
     * @return array
     * @author Kita Yasuhiro
     */
    private function _get_local_menu()
    {
        // URLからグループコードを取得
        $sGroupCd = $this->_get_group_cd();

        // セッションからローカルメニュー情報を取得
        $alMenu = $this->ci->session->userdata(SS_KEY_LOCAL_MENU);

        // セッションに格納
        $res = array();
        // 値があるかのチェック
        if ($alMenu) {
            if (array_key_exists($sGroupCd, $alMenu)) {
                $res[$sGroupCd] = $alMenu[$sGroupCd];
            } else {
                $res[$sGroupCd] = $this->ci->menu_data_mdl->get_local_menu($sGroupCd);
            }
        } else {
            $res[$sGroupCd] = $this->ci->menu_data_mdl->get_local_menu($sGroupCd);
        }

        foreach ($res[$sGroupCd] as $val) {

            // URLが同じ場合、フラグをいれる
            if (strstr($this->ci->uri->uri_string, $val->url)) {
                $val->now_flg = FLG_ON;
            } else {
                $val->now_flg = FLG_OFF;
            }

        }

        $this->ci->session->set_userdata(SS_KEY_LOCAL_MENU, $res);

        return $res[$sGroupCd];
    }

    /**
     * 各ページの情報を取得
     *
     * @access private
     * @return void
     * @author Kita Yasuhiro
     */
    private function _get_page_info()
    {
        // セッションにページ情報が含まれているか確認
        $alPage = $this->ci->session->userdata(SS_KEY_PAGE_INFO);

        // URLを退避
        if ($this->ci->uri->segment(2)) {
            $url = $this->ci->uri->segment(1) . "/" . $this->ci->uri->segment(2);
        } else {
            $url = $this->ci->uri->segment(1);
        }

        $res = array();
        if ($alPage) {
            if (array_key_exists($url, $alPage)) {
                $res = $alPage[$url];
            }
        }

        $res[$url] = $this->ci->page_info_mdl->get_page_info($url);

        $this->ci->session->set_userdata(SS_KEY_PAGE_INFO, $res);

        // 登録画面の情報表示用フラグを設定
        if (strstr($this->ci->router->class, "_input") && !strstr($this->ci->router->class, "credit_input")) {
            $res[$url][0]->input_flg = FLG_ON;
            if ($this->ci->router->method == "index") {
                $res[$url][0]->regist_msg = "【 登録処理中 】";
            } else if ($this->ci->router->method == "edit") {
                $res[$url][0]->regist_msg = "【 変更処理中 】";
            } else if ($this->ci->router->method == "copy") {
                $res[$url][0]->regist_msg = "【 複製処理中 】";
            }

        } else {
            $res[$url][0]->input_flg = FLG_OFF;
        }

        return $res[$url][0];
    }

    /**
     * URLからグループコード取得
     *
     * @access private
     * @return string
     * @author Kita Yasuhiro
     */
    private function _get_group_cd()
    {
        if (strstr($this->ci->uri->uri_string, 'top')) {
            return GRP_HOME;
        } else if (strstr($this->ci->uri->uri_string, 'mainte')) {
            return GRP_MST;
        } else if (strstr($this->ci->uri->uri_string, 'bill')) {
            return GRP_BILL;
        } else if (strstr($this->ci->uri->uri_string, 'credit')) {
            return GRP_CREDIT;
        } else if (strstr($this->ci->uri->uri_string, 'account')) {
            return GRP_ACCOUNT;
        } else if (strstr($this->ci->uri->uri_string, 'other')) {
            return GRP_OTHER;
        } else if ($this->ci->router->class == 'login') {
            return GRP_LOGIN;
        } else if (strstr($this->ci->uri->uri_string, 'admin') && strstr($this->ci->uri->uri_string, 'outside_receive_manage')) {
            return GRP_ADMIN;
        } else {
            return "";
        }
    }

    /**
     * セッションの削除処理
     *
     * @access private
     * @return void
     * @author Kita Yasuhiro
     */
    private function _del_session()
    {
        // 確実に残しておくセッションの取得
        $i = 1;
        $keep = array();
        while (true) {
            if (!defined("KEEP_SESSION_" . $i)) break;
            $keep[] = constant("KEEP_SESSION_" . $i);
            $i++;
        }

        // 残す情報を取得
        if (property_exists($this->ci, 'keep_session')) {
            $keep = array_merge($keep, $this->ci->keep_session);
        }

        // セッションの削除
        $data = $this->ci->session->all_userdata();
        foreach (array_keys($data) as $key) {
            if (!in_array($key, $keep)) {
                $this->ci->session->unset_userdata($key);
            }
        }
    }

    /**
     * URLからグループコード取得
     *
     * @access private
     * @return boolean
     * @author Kita Yasuhiro
     */
    private function _login_chk()
    {
        // 環境によって処理分ける
        switch (ENVIRONMENT) {
            case 'development':
//                        // 固定ユーザー設定
//                        return $this->_set_develop_info();
//                    break;

            case 'testing':
            case 'production':
                // ログイン認証チェック
                return $this->_auth_login();
                break;

            default:
                return false;
        }

    }

    /**
     * 開発中の環境時に固定のログイン情報をセッションに
     * 設定する
     *
     * @access private
     * @return boolean
     * @author Kita Yasuhiro
     */
    private function _set_develop_info()
    {
        $info = array();

        $info[SS_KEY_LOGIN][SS_KEY_USER_NAME] = "開発中 ユーザー";
        $info[SS_KEY_LOGIN][SS_KEY_AUTH_CD] = "001";
        $info[SS_KEY_LOGIN][SS_KEY_INSTITUTE_NAME] = "開発中研究所";
        $info[SS_KEY_LOGIN][SS_KEY_USER_ID] = 0;
        $info[SS_KEY_LOGIN][SS_KEY_LOGIN_FLG] = FLG_ON;

        $this->ci->session->set_userdata($info);

        return true;

    }

    /**
     * 開発環境以外時はログイン認証を行う
     *
     * @access private
     * @return boolean
     * @author Kita Yasuhiro
     */
    private function _auth_login()
    {

        // ログイン情報をセッションから取得
        $info = $this->ci->session->userdata(SS_KEY_LOGIN);

        if (!$info) {
            return false;
        }

        if ($info[SS_KEY_LOGIN_FLG] != FLG_ON) {
            return false;
        }

        return true;


    }

    /**
     * 一覧の条件を一覧のページセッションキーに格納
     *
     * @access private
     * @author    Kita Yasuhiro
     */
    private function _set_before_session()
    {

        if ($this->ci->router->method == "edit" || $this->ci->router->method == "copy") {

            if (!$this->ci->session->userdata(SS_KEY_BEF_KEY)) return;

            $data = $this->ci->session->userdata(SS_KEY_BEF_KEY);
            $url = $data[SS_KEY_BACK_URL];
            $url = str_replace($this->ci->config->base_url(), "", $url);
            $alUrl = explode("/", $url);

            $this->ci->session->set_userdata($alUrl[1], $data);

        }

    }

    /**
     * 権限のチェックを行う
     *
     * @access private
     * @return boolean
     * @author    Kita Yasuhiro
     */
    private function _chk_auth_screen($local)
    {

        $url = $this->ci->router->directory . $this->ci->router->class;

        $cnt = $this->ci->page_info_mdl->get_auth_url_cnt($url);

        if ($cnt == 0) {
            return false;
        } else {
            return true;
        }

    }

    /**
     * 戻り先のURLをグローバル変数にセットする
     *
     * @access private
     * @return void
     */
    private function _set_back_url()
    {
        global $BACK_URL;

        $param = array();

        // GETかPOSTのパラメタに戻りURLが設定されていたら、URLをグローバル変数に設定する
        // そのグローバル変数は各画面の戻り先として利用
        if (count($_GET) > 0 && isset($_GET['back'])) {
            $BACK_URL = site_url($_GET['back']);
        } else if (count($_POST) > 0 && isset($_GET['back'])) {
            $BACK_URL = site_url($_POST['back']);
        }
    }
}

/* End of file Pre_display.php */
/* Location: ./application/hooks/Pre_display.php */
