<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ホームのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property first_del_mdl $first_del_mdl
 */
class First_del extends MY_Controller {
    
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
                
                $this->load->model("credit/first_del_mdl");

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
            
            if(isset($_POST['regist_type'])) {
                // 登録処理
                $this->_exec();
                
            }
            
            $condition = $this->first_del_mdl->create_search_condition();
            
            // 検索条件の設定
            $data['search'] = $this->first_del_mdl->get_input_condition();
            
            // 一覧
            $data['list_data'] = $this->first_del_mdl->get_disp_list_data($condition);
            
            // 合計
            $total = $this->first_del_mdl->get_total_list_cnt($condition);
                    
            // マスタデータの取得
            $data['mst'] = $this->first_del_mdl->get_mst_data();
            
            // ページ情報を取得
            $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));
            
            // ページリンク
            $data['page_link'] = $this->pagination->create_page_link($total);

            // 得意先一覧用のセッションを設定
            $this->first_del_mdl->set_list_session();
            
            
            // view読み込み
            $this->load->view('credit/first_del', $data);
	}
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        private function _exec() 
        {
           $index = $_POST['first_mng_id'];
           
            if($_POST['regist_type'] == "regist") {
                $this->form_validation->set_rules('reconcile_date['.$index[0].'][]', '消込日', 'trim|required|date|callback_proc_date');
                $this->form_validation->set_rules('reconcile_type['.$index[0].'][]', '入金種別', 'trim|required');
                $this->form_validation->set_rules('reconcile_money['.$index[0].'][]', '消込額', 'trim|required|money|callback_max_money');
                $this->form_validation->set_rules('credit_status', '', '');

                if($this->form_validation->run()) {

                    // 登録処理 
                    $this->first_del_mdl->first_regist_data();

                    // 画面再表示
                    $this->body = 'onload="'.alert_href('登録しました。', $this->get_back_url()).'"';

                } else {
                    return false;
                }
                
            } else {
                
                // 取消処理 
                $this->first_del_mdl->first_cancel_data();

                // 画面再表示
                $this->body = 'onload="'.alert_href('取消しました。', $this->get_back_url()).'"';
                
            }
            
            return true;
            
        }

	/*
	 * ---------------------------------------------------------------------------
	 * 入力チェックメソッド
	 * ---------------------------------------------------------------------------

	/**
	 * 請求額より大きい金額が入力されていないか？
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function max_money()
        {
            $target = $_POST['first_mng_id'][0];
            
            $money = 0;
            foreach ($_POST['reconcile_money'][$target] as $value) {
                $money += erase_money_sep($value);
            }
            
            if($money > $_POST['first_money']) {
                $this->form_validation->set_message("max_money", ERR_FIRST_GREATER_MONEY);
                return false;
            }
            
            return true;
            
        }
        
	/**
	 * 処理年月より古い日付が指定された場合エラー
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function proc_date($value)
        {
            
            $proc = $proc = $this->get_db_proc_month();
            $target = date("Ym", strtotime($value));
            
            if($proc > $target){
                $this->form_validation->set_message("proc_date", ERR_PROC_DATE);
                return false;
            } 
            
            return true;
            
        }
        
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */