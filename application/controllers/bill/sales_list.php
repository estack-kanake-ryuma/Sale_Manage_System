<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sales_list Controller
 *
 * 売上一覧のコントローラー
 *
 * @author        Kita Yasuhiro
 * @link        http://www.datalyze.co.jp
 * @property sales_mdl $sales_mdl
 */
class Sales_list extends MY_Controller
{

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

        // Load Model
        $this->load->model('bill/sales_mdl');

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
        $condition = $this->sales_mdl->create_search_condition();

        // 各マスタデータの取得
        $data['mst'] = $this->sales_mdl->get_mst_data();

        // 一覧
        $data['list_data'] = $this->_get_disp_list_data($condition);

        $total = $this->sales_mdl->get_list_total_cnt($condition);

        // ページ情報を取得
        $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));

        // ページリンク
        $data['page_link'] = $this->pagination->create_page_link($total);

        // 検索条件の入力値
        $data['search'] = $this->sales_mdl->get_input_condition();

        // 得意先一覧用のセッションを設定
        $this->sales_mdl->set_list_session();

        $this->load->view('bill/sales_list', $data);
    }

    /**
     * 削除イベント処理
     *
     * @access public
     * @return void
     * @author Kita Yasuhiro
     */
    public function delete()
    {

        $id = $this->input->get('id');
        $date = $this->input->get('date');

        $proc = $this->get_db_proc_month();
        $target = date("Ym", strtotime($date));

        if ($proc > $target) {
            $this->body = 'onload="' . alert_href(ERR_PROC_DELETE, '/bill/sales_list') . '"';
        } else {
            if ($this->sales_mdl->delete_data($id) == true) {
                $this->body = 'onload="' . alert_href('削除しました。', '/bill/sales_list') . '"';
            } else {
                $this->body = 'onload="' . alert_href('既に削除されています。', '/bill/sales_list') . '"';
            }

        }

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
     * @param $condition
     * @return array
     * @author kita Yasuhiro
     */
    private function _get_disp_list_data($condition)
    {

        // 検索開始番号を取得
        $start = $this->uri->segment(4);

        // 一覧を取得
        $list = $this->sales_mdl->get_list_data($condition, $start);

        $i = 1;
        foreach ($list as $val) {

            $val->no = $i;                                          // No
            $val->disp_book_date = slash_date($val->book_date);     // 日付
            $val->disp_sum_money = money_sep($val->sum_money);      // 金額

            if (empty($val->institute_id)) {

                $val->disp_depart = $this->sales_mdl->get_sep_depart_html($val->sales_mng_id);
            }

            // ステータス
            if ($val->data_status_type == DATA_TYPE_CREDIT || $val->data_status_type == DATA_TYPE_CLOSE) {
                $val->data_status_type_name = get_span_red($val->data_status_type_name);
            } else if ($val->data_status_type == DATA_TYPE_IMPORT) {
                // 自動取込データは画面上でわかりやすくするために青文字にする
                $val->data_status_type_name = '<span class="blue">' . $val->data_status_type_name . '</span>';
            }

            $i++;
        }

        return $list;
    }

}
/* End of file sales_list.php */
/* Location: ./application/controllers/bill/sales_list.php */