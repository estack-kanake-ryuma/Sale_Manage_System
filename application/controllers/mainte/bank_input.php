<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ホームのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */
class Bank_input extends MY_Controller {

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
                
                $this->load->model('mainte/bank_mdl');

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
            $data['bank'] = array();

            // マスタデータ取得
            $data['mst'] = $this->_get_mst_data();

            if(count($_POST) > 0) {
                // データ登録処理
                $this->_exec();
            }

            // view読み込み
            $this->load->view('mainte/bank_input', $data);
	}
        
        /**
        * 変更処理
        *
        * @access public
        * @return void
        * @author Kita Yasuhiro
        */
        public function edit()
        {
        
            // 変更するIDを取得
            $id = $this->input->get('id');
            
            // パラメータ用配列
            $data['bank'] = array();
            
            // IDからデータを取得
            $result = $this->bank_mdl->get_list_data(array('bank_id'=>$id));
            
            if(count($result) == 0) {
                // TODO@IDがおかしいぞー処理の実装
            }
            
            // 配列にキャストし格納
            $data['bank'] = (array)$result[0];
            
            // マスタデータ取得
            $data['mst'] = $this->_get_mst_data();
            
            // データの変更処理
            if(count($_POST) > 0) {
                // 変更処理実行
                $this->_exec();
            }
            
            // view読み込み
            $this->load->view('mainte/bank_input', $data);
            
        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        
	/**
	 * 登録処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _exec(){
            
            // チェック処理
            if($this->form_validation->run('bank')) {
                
                if ($this->router->method == "index") {
                    // 登録
                    $this->bank_mdl->regist_data();
                } else {
                    // 変更
                    $this->bank_mdl->update_data();
                }
                
                // アラート処理実行
                $this->body = 'onload="'.alert_href('登録しました。', $this->get_back_url()).'"';
                
            } else {

                return false;
            }
            
        }
        
	/**
	 * マスタデータ取得処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_mst_data(){
            
		$mst = array();

		// 税区分
		$mst['account_type'] = $this->general_name_mdl->get_account_type();
                
                return $mst;
                

        }
        

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */