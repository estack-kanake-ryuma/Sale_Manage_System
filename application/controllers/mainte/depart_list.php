<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ホームのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */
class Depart_list extends MY_Controller {


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

                // Load Model
                $this->load->model('mainte/depart_mdl');

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
                
                
                // 一覧
                $data['list_data'] = $this->_get_disp_list_data();
                
                $total = $this->_get_total_cnt();
                
                // ページ情報を取得
                $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));
                
		// ページリンク
		$data['page_link'] = $this->pagination->create_page_link($total);
                
                // 得意先一覧用のセッションを設定
                $this->depart_mdl->set_list_session();

		$this->load->view('mainte/depart_list', $data);
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
   
            // ID取得
            $id = $this->input->get('id');
            
            // 削除処理実行
            $bRes = $this->depart_mdl->delete_data($id);

            if($bRes) {
                $this->body = 'onload="'.alert_href('削除しました。', $this->get_back_url()).'"';
            } else {
                // TODO@削除失敗時の処理実装
            }
                
	}


	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        
        /**
	 * 表示要の一覧データを取得
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_disp_list_data() 
        {
            
            // 検索開始番号を取得
            $start = $this->uri->segment(4);
            
            // 一覧を取得
            $list = $this->depart_mdl->get_list_data(array(), $start);
            
            // 研究所リストを取得
            $institute = $this->depart_mdl->get_institute_data();
            
            $i = 1;
            foreach ($list as $val) {
                // No
                $val->no = $i;
                foreach ($institute as $val2) {
                    if($val2->depart_id == $val->depart_id) {
                        if(empty($val->disp_institute)) {
                            $val->disp_institute = $val2->institute_name;
                        } else {
                            $val->disp_institute = $val->disp_institute."<br />".$val2->institute_name;
                        }
                        
                    }
                    
                }
                
                // メモ
                $val->disp_memo = get_memo($val->memo);
                $i++;
            }
            
            return $list;
            
        }
        
        /**
	 * データの総件数を取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        private function _get_total_cnt() {           

            // テーブル名を設定
            $this->depart_mdl->set_tbl(M_DEPART);
            
            // 件数取得
            return $this->depart_mdl->get_total_cnt();
            
        }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */