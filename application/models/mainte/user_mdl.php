<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_mdl extends Mainte_common_mdl
{

    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage    model/db
     * @author        Kita Yasuhiro
     * @link        http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 登録処理
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function regist_data()
    {
        // トランザクション開始
        $this->db->trans_begin();

        // テーブル名の設定
        $this->m_tbl_name = M_USER;

        $data = $this->input->post();

        $this->insert($data);

        // トランザクション終了
        $this->db->trans_complete();

    }

    /**
     * 変更処理
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function update_data()
    {

        // トランザクション開始
        $this->db->trans_begin();

        // テーブル名の設定
        $this->m_tbl_name = M_USER;

        //WHERE句の設定
        $this->m_where = array('user_id' => $this->input->get('id'));

        $data = $this->input->post();

        $this->update($data);

        // トランザクション終了
        $this->db->trans_complete();

    }

    /**
     * 削除処理
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function delete_data($id)
    {

        if (empty($id)) return false;

        // トランザクション開始
        $this->db->trans_begin();

        // INSERT
        $this->m_tbl_name = M_USER;
        $this->m_where = array('user_id' => $id);
        $this->delete_logic();

        // トランザクション終了
        $this->db->trans_complete();

        return true;

    }

    /**
     * 商品一覧データ取得
     *
     * @access    public
     * @return    array
     * @author    Kita Yasuhiro
     */
    public function get_list_data($where, $start = 0)
    {

        // テーブル設定
        $this->m_tbl_name = M_USER;

        $this->db->select("user_id");
        $this->db->select("user_name");
        $this->db->select("user_furi");
        $this->db->select("login_id");
        $this->db->select("password");
        $this->db->select("auth_cd");
        $this->db->select("institute_id");
        $this->db->select("memo");
        $this->db->select("(SELECT item_name FROM " . M_SYS_GENERAL_NAME . " WHERE group_cd='" . GRP_AUTH_CD . "' AND item_cd=auth_cd) as auth_name ");
        $this->db->select("(SELECT institute_name FROM " . M_INSTITUTE . " inst WHERE inst.institute_id=m_user.institute_id) as institute_name ");
        $this->db->select("memo");

        // WHERE句作成
        if (!empty($where)) {
            $this->db->where($where);
        }

        // ORDER句の設定
        $this->db->order_by("user_furi", "asc");

        // リミット設定
        $this->db->limit(PER_PAGE_CNT, $start);

        return $this->select();
    }

    /**
     * 一覧の絞込条件を作成する
     *
     * @access private
     * @return string
     * @author Kita Yasuhiro
     */
    public function create_search_condition()
    {
        $condition = array();
        $data = $this->get_input_condition();

        if (count($data) == 0) return "";

        // 得意先名称
        if (!empty($data['user_name'])) {
            $condition[] = "(user_name like '%" . $this->db->escape_like_str($data['user_name'])
                . "%' or user_furi like '%" . $this->db->escape_like_str($data['user_name']) . "%')";
        }

        // 検索条件返却
        if (count($condition) > 0) {
            return implode(' and ', $condition);
        } else {
            return "";
        }

    }

    /**
     * 検索条件のマスタデータ取得処理
     *
     * @access public
     * @return array
     * @author Kita Yasuhiro
     * @throws Exception
     */
    public function get_mst_data()
    {
        $data = array();

        // 研究所
        $this->m_tbl_name = M_INSTITUTE;
        $data['institute_list'] = $this->get_name_list(array("institute_id", "institute_name"));

        $data['auth_cd'] = $this->general_name_mdl->get_auth_cd();

        return $data;
    }

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */