<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ホームのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */
class Fix_memo_list extends MY_Controller {

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
                $this->load->model('mainte/fix_memo_mdl');
                
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
                $condition = $this->fix_memo_mdl->create_search_condition();
                
                // 一覧
                $data['list_data'] = $this->_get_disp_list_data($condition);
                
                
                $total = $this->_get_total_cnt($condition);
                
                // ページ情報を取得
                $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));
                
		// ページリンク
		$data['page_link'] = $this->pagination->create_page_link($total);
                
		// 検索条件の入力値
		$data['search'] = $this->fix_memo_mdl->get_input_condition();
                
                // システムユーザー一覧用のセッションを設定
                $this->fix_memo_mdl->set_list_session();

		$this->load->view('mainte/fix_memo_list', $data);
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
            $bRes = $this->fix_memo_mdl->delete_data($id);

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
        private function _get_disp_list_data($condition) 
        {
            
            // 検索開始番号を取得
            $start = $this->uri->segment(4);
            
            // 一覧を取得
            $list = $this->fix_memo_mdl->get_list_data($condition, $start);
            
            $i = 1;
            foreach ($list as $val) {
                // No
                $val->no = $i;
                
                $val->disp_fix_memo = nl2br($val->fix_memo);
                
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
        private function _get_total_cnt($condition) {           

            // テーブル名を設定
            $this->fix_memo_mdl->set_tbl(M_FIX_MEMO);
            
            // 件数取得
            return $this->fix_memo_mdl->get_total_cnt($condition);
            
        }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */