<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ホームのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */
class Abstract_input extends MY_Controller {

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
                
                $this->load->model('mainte/abstract_mdl');

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
                $data['abstract'] = array();
                
                // マスタデータ取得
                $data['mst'] = $this->_get_mst_data();
                
                if(count($_POST) > 0) {
                    // データ登録処理
                    $this->_exec();
                }
                
                // view読み込み
                $this->load->view('mainte/abstract_input', $data);
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
            $data['abstract'] = array();
            
            // IDからデータを取得
            $result = $this->abstract_mdl->get_list_data(array('abstract_id'=>$id));
            
            if(count($result) == 0) {
                // TODO@IDがおかしいぞー処理の実装
            }
            
            // 配列にキャストし格納
            $data['abstract'] = (array)$result[0];
            
            // データの変更処理
            if(count($_POST) > 0) {
                // 変更処理実行
                $this->_exec();
            }
            
            // view読み込み
            $this->load->view('mainte/abstract_input', $data);
            
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
            if($this->form_validation->run('abstract')) {
                
                if ($this->router->method == "index") {
                    // 登録
                    $this->abstract_mdl->regist_data();
                } else {
                    // 変更
                    $this->abstract_mdl->update_data();
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
		$mst['tax_type'] = $this->general_name_mdl->get_tax_type();
                
                return $mst;
                

        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別入力チェックメソッド
	 * ---------------------------------------------------------------------------
	 */
	/**
	/**
	 * 商品名存在チェック
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function exist_name($str)
        {
            
            $id = $this->input->get("id");
            $this->db->where("abstract_name", $str);
            if(!empty($id)) {
               $this->db->where("abstract_id <> '".$id."'");
            }
            
            // 呼称の存在チェック
            $this->abstract_mdl->set_tbl(M_ABSTRACT);
            if ($this->abstract_mdl->get_total_cnt() > 0) {
                $this->form_validation->set_message('exist_name', str_replace("#NAME#", "摘要名称", ERR_EXIST_NAME));
                return false;
            }
            
            return true;
        }
        

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */