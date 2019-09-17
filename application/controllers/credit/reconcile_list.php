<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Reconcile list
 *
 * 消込状況一覧のコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * 
 * @property reconcile_mdl $reconcile_mdl
 * @property MY_Pagination $pagination
 */
class Reconcile_list extends MY_Controller {

	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        public function __construct()
        {
            parent::__construct();

            $this->load->model("credit/reconcile_mdl");

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

            $data['list_data'] = array();
            $data['list_total'] = array();

            // 絞り込み条件取得
            $where = $this->reconcile_mdl->create_search_condition();

            if($this->_exec_chk()) {

                $data['list_data'] = $this->reconcile_mdl->get_list_data($where);

                $data['list_total'] = $this->reconcile_mdl->get_list_total_data($where);

                $total = $this->reconcile_mdl->get_total_cnt($where);

                // ページ情報を取得
                $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));

                // ページリンク
                $data['page_link'] = $this->pagination->create_page_link($total);
            }

            if(count($_POST) == 0) {
                $data['msg'] = WARN_SET_CONDITION;
            } else {
                $data['msg'] = WARN_NO_LIST_MSG;
            }

			// 検索条件を取得
            $data['search'] = $this->reconcile_mdl->get_input_condition();

            // 得意先一覧用のセッションを設定
            $this->reconcile_mdl->set_list_session();

            // view読み込み
            $this->load->view('credit/reconcile_list', $data);
    	}
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        
	/**
	 * チェックを実行
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _exec_chk() 
        {
            
            if(count($_POST) > 0) {
                
                $this->form_validation->set_rules('date_from', '期間(開始日)', 'trim|required|date');
                $this->form_validation->set_rules('date_to', '期間(終了日)', 'trim|required|date');

                if(!$this->form_validation->run()) {
                    return false;
                }
            }
            
            return true;
            
        }

}

/* End of file reconcile_list.php */
/* Location: ./application/controllers/credit/reconcile_list.php */