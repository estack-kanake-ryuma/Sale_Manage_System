<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY Model
 *
 * 独自のModelクラス
 *
 * @package    application
 * @subpackage application/core
 * @author    Kita Yasuhiro
 * @link    http://www.datalyze.co.jp
 */
class MY_Model extends CI_Model
{

    protected $m_tbl_name;
    protected $m_prefix = "";
    protected $m_where = array();

    /**
     * コンストラクタ
     *
     * @access public
     * @author    Kita Yasuhiro
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * WHERE句のセッター
     *
     * @access    public
     * @param    array $where
     * @author    Kita Yasuhiro
     */
    public function set_where($where)
    {
        $this->m_where = $where;
    }

    /**
     * テーブル名のセッター
     *
     * @access    public
     * @param    string $tbl
     * @author    Kita Yasuhiro
     */
    public function set_tbl($tbl)
    {
        $this->m_tbl_name = $tbl;
    }

    /**
     * Prefix名のセッター
     *
     * @access    public
     * @param    string $prefix
     * @author    Kita Yasuhiro
     */
    public function set_Prefix($prefix)
    {
        $this->m_prefix = $prefix;
    }

    /**
     * テーブルの総件数を取得する
     *
     * @access    public
     * @param string $condition
     * @return    int
     * @author    Kita Yasuhiro
     */
    public function get_total_cnt($condition = "")
    {

        $this->db->select('count(*) as cnt');

        if (empty($this->m_prefix)) {
            $this->db->from($this->m_tbl_name);
            $this->db->where('delete_flg', FLG_OFF);
        } else {
            $this->db->from($this->m_tbl_name . " " . $this->m_prefix);
            $this->db->where($this->m_prefix . '.delete_flg', FLG_OFF);
        }

        if (!empty($condition)) {
            $this->db->where($condition);
        }

        $query = $this->db->get();
        $result = $query->result();

        $this->m_where = array();
        return intval($result[0]->cnt);
    }

    /**
     * 名前リストデータ取得
     *
     * @access    public
     * @param string $col
     * @param string $search
     * @return    array
     * @throws Exception
     * @author    Kita Yasuhiro
     */
    public function get_name_list($col, $search = "")
    {

        $this->db->select($col);
        $this->db->from($this->m_tbl_name);
        $this->db->where('delete_flg', FLG_OFF);

        if (!empty($search)) {
            $this->db->where($search);
        }

        $ret = $this->db->get();
        if ($ret === FALSE) {
            // TODO EXCEPTION共通処理の実装
            throw new Exception($this->m_tbl_name . 'の更新に失敗しました。');
        }

        return $ret->result();

    }

    /**
     * INSERT
     *
     * @access    protected
     * @param array $data
     * @return    void
     * @throws Exception
     * @author    Kita Yasuhiro
     */
    protected function insert($data)
    {

        $info = $this->session->userdata(SS_KEY_LOGIN);

        // batch処理の場合はバッチ用ユーザをセット
        define('BATCH_USER', 0); //TODO 切り出し
        if ($this->input->is_cli_request()) {
            $this->db->set('ins_user_id', BATCH_USER, false);
            $this->db->set('last_user_id', BATCH_USER, false);
        } else {
            $this->db->set('ins_user_id', $info[SS_KEY_USER_ID], false);
            $this->db->set('last_user_id', $info[SS_KEY_USER_ID], false);
        }
        $this->db->set('last_datetime', 'now()', false);

        $ret = $this->db->insert($this->m_tbl_name, $data);

        $dbg = debug_backtrace();
        log_message('info', '【INSERT】PROCESS: ' . $dbg[1]['class'] . '->' . $dbg[1]['function'] . ' SQL: ' . $this->db->last_query());

        // INSERT失敗時
        if ($ret === FALSE) {
            // TODO EXCEPTION共通処理の実装
            throw new Exception($this->m_tbl_name . 'のINSERTに失敗しました。');
        }

    }

    /**
     * DELETE(物理削除)
     *
     * @access    public
     * @return    void
     * @throws Exception
     * @author    Kita Yasuhiro
     */
    protected function delete()
    {

        $ret = $this->db->delete($this->m_tbl_name, $this->m_where);
        $this->m_where = array();

        $dbg = debug_backtrace();
        log_message('info', '【DELETE(物理削除)】PROCESS: ' . $dbg[1]['class'] . '->' . $dbg[1]['function'] . ' SQL: ' . $this->db->last_query());

        if ($ret === FALSE) {
            // TODO EXCEPTION共通処理の実装
            throw new Exception($this->m_tbl_name . 'の削除フラグ更新に失敗しました。');
        }


    }

    /**
     * DELETE(論理削除)
     *
     * @access    protected
     * @return    void
     * @throws    Exception
     * @author    Kita Yasuhiro
     */
    protected function delete_logic()
    {

        $info = $this->session->userdata(SS_KEY_LOGIN);

        $this->db->set('last_user_id', $info[SS_KEY_USER_ID], false);
        $this->db->set('last_datetime', 'now()', false);
        $ret = $this->db->update($this->m_tbl_name, array('delete_flg' => FLG_ON), $this->m_where);
        $this->m_where = array();

        $dbg = debug_backtrace();
        log_message('info', '【DELETE(論理削除)】PROCESS: ' . $dbg[1]['class'] . '->' . $dbg[1]['function'] . ' SQL: ' . $this->db->last_query());

        if ($ret === FALSE) {
            // TODO EXCEPTION共通処理の実装
            throw new Exception($this->m_tbl_name . 'の削除フラグ更新に失敗しました。');
        }
    }

    /**
     * UPDATE
     *
     * @access    protected
     * @param  array $data
     * @return    void
     * @throws Exception
     * @author    Kita Yasuhiro
     */
    protected function update($data = array())
    {

        // batch処理の場合はバッチ用ユーザをセット
        define('BATCH_USER', 0); //TODO 切り出し
        if ($this->input->is_cli_request()) {
            $this->db->set('last_user_id', BATCH_USER, false);
        } else {
            $info = $this->session->userdata(SS_KEY_LOGIN);

            $this->db->set('last_user_id', $info[SS_KEY_USER_ID], false);
        }
        $this->db->set('last_datetime', 'now()', false);

        if (count($this->m_where) == 0) {
            $ret = $this->db->update($this->m_tbl_name, $data);
        } else {
            $ret = $this->db->update($this->m_tbl_name, $data, $this->m_where);
        }

        $dbg = debug_backtrace();
        log_message('info', '【UPDATE】PROCESS: ' . $dbg[1]['class'] . '->' . $dbg[1]['function'] . ' SQL: ' . $this->db->last_query());

        $this->m_where = array();
        if ($ret === FALSE) {
            // TODO EXCEPTION共通処理の実装
            throw new Exception($this->m_tbl_name . 'の更新に失敗しました。');
        }

    }

    /**
     * SELECT
     *
     * @access    protected
     * @param  int $delflg
     * @return    array
     * @throws Exception
     * @author    Kita Yasuhiro
     */
    protected function select($delflg = FLG_OFF)
    {

        if (empty($this->m_prefix)) {
            $this->db->from($this->m_tbl_name);
            if ($delflg === FLG_OFF) {
                $this->db->where('delete_flg', FLG_OFF);
            } else if ($delflg === FLG_ON) {
                $this->db->where('delete_flg', FLG_ON);
            }

        } else {
            $this->db->from($this->m_tbl_name . " " . $this->m_prefix);
            if ($delflg === FLG_OFF) {
                $this->db->where($this->m_prefix . '.delete_flg', FLG_OFF);
            } else if ($delflg === FLG_ON) {
                $this->db->where($this->m_prefix . '.delete_flg', FLG_ON);
            }
        }

        $this->m_where = array();
        $ret = $this->db->get();
        if ($ret === FALSE) {
            // TODO EXCEPTION共通処理の実装
            throw new Exception($this->m_tbl_name . 'の更新に失敗しました。');
        }

        return $ret->result();

    }

    /**
     * 前回のセッション情報を残しておく
     *
     * @access    private
     * @param    array $data
     * @author    Kita Yasuhiro
     */
    private function _set_bef_session($data)
    {

        // 一度前回のセッションキーを初期化
        $this->session->unset_userdata(SS_KEY_BEF_KEY);

        // セッションに値を設定
        $this->session->set_userdata(SS_KEY_BEF_KEY, $data);

    }

    /**
     * 検索条件の入力値を取得
     *
     * @access public
     * @return array
     * @author Kita Yasuhiro
     */
    public function get_input_condition()
    {
        $data = array();

        if (count($_POST) > 0) {
            $data = $_POST;
        } else if ($this->session->userdata($this->router->class) != false) {
            $data = $this->session->userdata($this->router->class);
            $data = $data[SS_KEY_SEARCH];
        }

        return $data;
    }

    /**
     * 一覧画面で必要な情報を設定する
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function set_list_session()
    {

        $session = array();

        $session[SS_KEY_BACK_URL] = current_url();
        $session[SS_KEY_SEARCH] = $this->get_input_condition();
        $session[SS_KEY_START] = $this->uri->segment(4);

        $this->session->set_userdata($this->router->class, $session);

        $this->_set_bef_session($this->session->userdata($this->router->class));

    }

    /**
     * 配列から必要なデータ抜く
     *
     * @access protected
     * @param  array $col
     * @return array
     * @author Kita Yasuhiro
     */
    protected function get_regist_post_data($col)
    {

        $res = array();

        // POSTデータから必要な分だけ抜く
        $bAry = false;
        foreach ($col as $val) {
            if (isset($_POST[$val])) {
                $res[$val] = $this->input->post($val);
                if (is_array($res[$val]) && $bAry == false) {
                    $bAry = true;
                }
            }
        }

        $ary_data = array();
        // POSTデータが配列だったら
        if ($bAry) {
            // 登録しやすい形に編集
            $i = 0;
            foreach ($res as $key => $ary) {
                foreach ($ary as $val) {
                    $ary_data[$i][$key] = $val;
                    $i++;
                }
                $i = 0;
            }
        } else {
            $ary_data = $res;
        }

        return $ary_data;

    }

    /**
     * POST情報からORDER句を取得する
     *
     * @access protected
     * @param  string $conf_name
     * @return string
     * @author Kita Yasuhiro
     */
    protected function get_order_sql($conf_name)
    {

        $ary_order = $this->config->item($conf_name);
        $sql = "";
        foreach ($ary_order as $val) {
            if ($val['item'] == $this->input->post("seq_item")) {
                $sql = $val['sql'];
            }
        }

        return $sql;

    }

    /**
     * キーブレークチェック
     *
     * @access protected
     * @param  $list array
     * @param  $key string
     * @param  $str string
     * @return array
     * @author kita Yasuhiro
     **/
    protected function chk_dup_data($list, $key, $str = "bill_no")
    {
        if ($key == 0) return true;

        if ($list[$key]->$str == $list[$key - 1]->$str) {
            return false;
        } else {
            return true;
        }

    }

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */