<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sales_data Controller
 *
 * 売上情報入力のコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property make_data_mdl $make_data_mdl
 */
class Make_Data extends MY_Controller {

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
        // CLI処理か判定 ブラウザからのアクセスは404エラー
        if (!$this->input->is_cli_request()) {
            show_404();
        }
        $this->load->model("admin/make_data_mdl");
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
            
            if(count($_POST) > 0) {
                $this->make_data();
            }
            
            // view読み込み
            $this->load->view('admin/make_data', $data);
	}
        
	/**
	 * データを作成
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function make_data()
        {
         
            if(isset($_POST['sales_data'])) {
                $this->make_data_mdl->make_sales_data();
                $this->body = 'onload="'.alert_href('売上データを作成しました。', '/admin/make_data').'"';
            }
            
            if(isset($_POST['customer_data'])) {
                $this->make_data_mdl->make_customer_data();
                $this->body = 'onload="'.alert_href('得意先マスタを作成しました。', '/admin/make_data').'"';
            }
            
            if(isset($_POST['goods_data'])) {
                $this->make_data_mdl->make_goods_data();
                $this->body = 'onload="'.alert_href('商品マスタを作成しました。', '/admin/make_data').'"';
            }
            
            if(isset($_POST['handler_data'])) {
                $this->make_data_mdl->make_handler_data();
                $this->body = 'onload="'.alert_href('担当者マスタを作成しました。', '/admin/make_data').'"';
            }
            
            if(isset($_POST['fix_memo_data'])) {
                $this->make_data_mdl->make_fix_memo_data();
                $this->body = 'onload="'.alert_href('固定メモマスタを作成しました。', '/admin/make_data').'"';
            }
            
            if(isset($_POST['balance_data'])) {
                $this->make_data_mdl->make_balance_data();
                $this->body = 'onload="'.alert_href('残高データを作成しました。', '/admin/make_data').'"';
            }
            if(isset($_POST['lost_credit_data'])) {
                $this->make_data_mdl->make_lost_credit_data();
                $this->body = 'onload="'.alert_href('不足入金分を登録しました。', '/admin/make_data').'"';
            }
            
            if(isset($_POST['first_credit_data'])) {
                $this->make_data_mdl->update_first_data();
                $this->body = 'onload="'.alert_href('初期残高を入金額から調整しました。', '/admin/make_data').'"';
            }
            
            if(isset($_POST['receivable_data'])) {
                $this->make_data_mdl->make_receivable_data();
                $this->body = 'onload="'.alert_href('月齢表データを作成しました。', '/admin/make_data').'"';
            }

            
        }


}

/* End of file sales_input.php */
/* Location: ./application/controllers/sales_input.php */