<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ホームのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property setoff_del_mdl $setoff_del_mdl
 */
class Setoff_del extends MY_Controller {

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
                
                $this->load->model("credit/setoff_del_mdl");

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
            $data['setoff'] = array();
            $data['search'] = array();
            
            $data['search'] = $this->setoff_del_mdl->get_input_condition();
            
            $this->_get_radio_init($data);
            
            $condition = $this->setoff_del_mdl->create_search_condition();
            
            if(isset($_POST['regist'])) {
                // 登録処理
                $this->_exec();
            }
            
            // 一覧
            $data['list_data'] = $this->_get_disp_list_data($condition);
            
            // マスタデータの取得
            $data['mst'] = $this->setoff_del_mdl->get_mst_data();
            
            // ページ情報を取得
            $total = $this->setoff_del_mdl->get_list_cnt($condition);
            
            $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));
            
            // ページリンク
            $data['page_link'] = $this->pagination->create_page_link($total, PER_DOWNLOAD_PAGE_CNT);
            
            // 得意先一覧用のセッションを設定
            $this->setoff_del_mdl->set_list_session();   
            
            // view読み込み
            $this->load->view('credit/setoff_del', $data);
	}
        
	/**
	 * 削除処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function delete() 
        {
            
            // ID取得
            $id = $this->input->get('id');
            
            // IDがDBに存在しているかチェック
            $param = explode(",", $id);
            
            if($this->setoff_del_mdl->get_child_id_cnt($param[1]) == 0) {
                $this->body = 'onload="'.alert_href('既に削除されています。', '/credit/setoff_del').'"';
            } else {
                // 削除処理実行
                $this->setoff_del_mdl->delete_data($id);
                $this->body = 'onload="'.alert_href('取消しました。', '/credit/setoff_del').'"';
                
            }
            
        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        private function _exec() 
        {
            
            if($this->form_validation->run("setoff_del")) {
               
                // 登録処理 
                $this->setoff_del_mdl->regist_data();
                
                // 画面再表示
                $this->body = 'onload="'.alert_href('登録しました。', $this->get_back_url()).'"';
                
            } else {
                
                return false;
            }
            
        }

        /**
	 * 表示要の一覧データを取得
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_disp_list_data($condition) 
        {
            
            // 検索開始番号を取得
            $start = $this->uri->segment(4);
            
            // 一覧を取得
            $list = $this->setoff_del_mdl->get_list_data($condition, $start);
            
            $i = 1;
            foreach ($list as $val) {
                // No
                $val->no = $i;
                
                // 請求額
                $val->disp_bill_money = money_sep($val->bill_money);
                
                // 請求書
                $val->disp_bill_no = get_anchor("/bill/bill_cutoff_print/bill_disp/".$val->bill_no."?win_type=win", $val->bill_no, array("target" => "_blank"));
                
                //  入金額
                // 登録済みの場合入金額違う場合請求額
                $val->disp_reconcile_money = empty($val->credit_mng_id) ? money_sep($val->bill_money) : money_sep($val->reconcile_money);
                
                // 消込状況
                $val->credit_stauts_name = ($val->reconcile_status == CREDIT_STATUS_ON) ? "消込済み" : get_span_red("未消込");
                
                // 消込日
                $val->disp_reconcile_date = slash_date($val->reconcile_date);
                
                // 請求書発行日
                $val->disp_publish_date = slash_date($val->publish_date);
                
                // 請求書日
                $val->disp_bill_date = slash_date($val->bill_date);
                
                // 残額
                $val->disp_balance_money = money_sep($val->bill_money - $val->sum_credit_money);
                
                
                // チェックボックスのコントロール
                if(empty($val->credit_mng_id)) {
                    $val->chk_ctrl = "";
                } else {
                    $val->chk_ctrl = "disabled=disabled";
                }

                $i++;
            }
            
            
            return $list;
            
        }
        
	/**
	 * ラジオボタンの初期値
	 *
	 * @access public
     * @param  $data array
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_radio_init(&$data) {
            
            if(count($data['search']) == 0) {
                $data['search']['credit_status'] = "1";
            }
            
        }

	/*
	 * ---------------------------------------------------------------------------
	 * 入力チェックメソッド
	 * ---------------------------------------------------------------------------
	 */
        /**
	 * チェックボックスが1件もない場合エラー
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function is_check()
        {
         
            // 入力チェックを行う
            if($this->input->post("print_chk") == "") {
                
                $this->form_validation->set_message("is_check", ERR_ALL_CHECK);
                return false;
            }
            
            return true;
            
        }

        /**
	 * チェックボックスが入っている場合、消込額が必須
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function reconcile_required($reconcile_money, $flg, $cycle)
        {
            
            $input = $_POST;
            
            if(isset($input['print_chk'][$cycle])) {

                if(!$this->form_validation->required($reconcile_money)) {

                    $this->form_validation->set_message("reconcile_required", ERR_RECONCILE_MONEY_CHK);

                    return false;
                }

            }
            
            return true;
            
        }
        
        /**
	 * チェックボックスが入っている場合、消込額が必須
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function greater_money($reconcile_money, $flg, $cycle) {
            
            $input = $_POST;
            
            if(isset($input['print_chk'][$cycle])) {
                
                $money = str_replace(",", "", $reconcile_money);
                $balance = str_replace(",", "", $input["balance_money"][$input['print_chk'][$cycle]]);
                
                if($money > $balance) {
                    $this->form_validation->set_message("greater_money", ERR_RECONCILE_MONEY_GREATER);
                    return false;
                }
                
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