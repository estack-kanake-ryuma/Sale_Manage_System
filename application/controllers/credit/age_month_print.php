<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Age Month Print
 *
 * 売掛金月齢表のコントローラー
 *
 * @link		http://www.datalyze.co.jp
 * 
 * @property age_month_mdl $age_month_mdl
 */
class Age_month_print extends MY_Controller {

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
                
		$this->load->model('credit/age_month_mdl');

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
            
            $data['mst'] = $this->age_month_mdl->get_mst_data();
            
            // 検索条件の入力値
            $search = $this->age_month_mdl->create_search_condition();
            
            $data['list_data'] = $this->age_month_mdl->get_disp_data($search, true);
            
            $data['search'] = $this->age_month_mdl->get_input_condition();
            
            // ページ情報を取得
            $total = $this->age_month_mdl->get_list_cnt($search, $data['search']);
            
            
            $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));
            
            // ページリンク
            $data['page_link'] = $this->pagination->create_page_link($total, PER_CREDIT_PAGE_CNT);
            
            // 得意先一覧用のセッションを設定
            $this->age_month_mdl->set_list_session();
            
            // ラジオボタンの初期値を設定
            $this->_get_search_init($data);
            
            // view読み込み
            $this->load->view('credit/age_month_print', $data);
	}
        
	/**
	 * Print_listページ処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function output()
        {
            
            if(isset($_POST['receivable'])) {
                // 売掛金月齢表出力
                $this->age_month_mdl->output_receivable();
            } else {
                // 売掛金月齢明細表出力
                $this->age_month_mdl->output_detail();
            }
            
            
            
        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        
	/**
	 * 検索フィールドの初期値
	 *
	 * @access public
	 * @param  array $data
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_search_init(&$data) {
            
            if(count($data['search']) == 0) {
                // ラジオボタンの初期値を設定
                $data['search']['retention'] = "1";
                
                // 対象月の初期値
                $data['search']['target_month'] = date("Y/m");
                
                $session[SS_KEY_SEARCH] = $data['search'];
                $this->session->set_userdata($this->router->class, $session);
            } else {
                
                if(empty($data['search']['target_month'])) {
                    $data['search']['target_month'] = date("Y/m");
                }
                
                if(empty($data['search']['retention'])) {
                    $data['search']['retention'] = "1";
                }
                
            }
            
            if ($_POST['hf_disp_depart'] == "") {
                $data['search']['disp_depart'] = true;
            } else if($_POST['hf_disp_depart'] == "1") {
                $data['search']['disp_depart'] = true;
            } else {
                $data['search']['disp_depart'] = false;
            }
            
        }


}

/* End of file age_month_print.php */
/* Location: ./application/controllers/credit/age_month_print.php */