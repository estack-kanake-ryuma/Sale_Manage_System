<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ホームのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */
class User_input extends MY_Controller {

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
                
                $this->load->model('mainte/user_mdl');

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
                $data['user'] = array();
                
                // ラジオボタンの初期値を設定
                $data['user'] = $this->_get_radio_init();
                
                // マスタデータ取得
                $data['mst'] = $this->user_mdl->get_mst_data();
                
                if(count($_POST) > 0) {
                    // データ登録処理
                    $this->_exec();
                }
                
                // view読み込み
                $this->load->view('mainte/user_input', $data);
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
            $data['user'] = array();
            
            // IDからデータを取得
            $result = $this->user_mdl->get_list_data(array('user_id'=>$id));
            
            if(count($result) == 0) {
                // TODO@IDがおかしいぞー処理の実装
                return;
            }
            
            // 配列にキャストし格納
            $data['user'] = (array)$result[0];
            
            // マスタデータ取得
            $data['mst'] = $this->user_mdl->get_mst_data();
            
            // データの変更処理
            if(count($_POST) > 0) {
                // 変更処理実行
                $this->_exec();
            }
            
            // view読み込み
            $this->load->view('mainte/user_input', $data);
            
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
            if($this->form_validation->run('user')) {
                
                if ($this->router->method == "index") {
                    // 登録
                    $this->user_mdl->regist_data();
                } else {
                    // 変更
                    $this->user_mdl->update_data();
                }
                
                // アラート処理実行
                $this->body = 'onload="'.alert_href('登録しました。', $this->get_back_url()).'"';
                
            } else {

                return false;
            }
            
        }
        
	/**
	 * ラジオボタンの初期値
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_radio_init() {
            
            $data = array();
            
            // ラジオボタンの初期値を設定
            $data['auth_cd'] = AUTH_CD_ALL;
            
            return $data;
            
        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別入力チェックメソッド
	 * ---------------------------------------------------------------------------
	 */
	/**
	/**
	 * ログインid存在チェック
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function exist_id($str)
        {
            
            $id = $this->input->get("id");
            $this->db->where("login_id", $str);
            if(!empty($id)) {
               $this->db->where("user_id <> '".$id."'");
            }
            
            // 呼称の存在チェック
            $this->user_mdl->set_tbl(M_USER);
            if ($this->user_mdl->get_total_cnt() > 0) {
                $this->form_validation->set_message('exist_id', ERR_EXIST_LOGIN_ID);
                return false;
            }
            
            
            return true;
        }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */