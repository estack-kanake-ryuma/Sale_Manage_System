<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 繰越残高取得クラス
 *
 * @package	application
 * @subpackage	libraries
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * 
 */
class Receivable_mng_mdl extends MY_Model {

        private $m_id = "";
        private $m_customer_flg = "";
        
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
	}
        
	/**
	 * データ移行時の時の売上分の作成
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        public function make_rcv_data($data)
        {
            
            $ins_data = $data;
            
            // 締日フラグを設定
            if(empty($data['cutoff_date'])) {
                $this->m_customer_flg = FLG_OFF;
            } else {
                $this->m_customer_flg = FLG_ON;
                $ins_data['institute_id'] = null;
                $ins_data['depart_id'] = null;
                $ins_data['institute_name'] = null;
                $ins_data['depart_name'] = null;
            }
            
            // 残高管理データ登録
            $this->_regist_mng($ins_data);
            
            // 残高管理子供データ登録
            $this->_insert_data($ins_data);
            
        }
        
	/**
	 * 残高管理ファイルの売上更新処理
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        public function update_receivable_sales($data)
        {
            $receivable = $this->_set_customer_info($data);
            
            // 同一伝票戻し処理
            $this->back_sales_data($receivable);
            
            // 残高管理データ登録
            $this->_regist_mng($receivable);
            
            // 残高管理子供データ登録
            $this->_insert_data($receivable);
            
            
        }
        
	/**
	 * 残高管理ファイルの消込更新処理
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        public function update_receivable_credit($data, $bef_money, $regist_type)
        {
            // データを編集
            $upd = $this->_get_edit_credit_data($data);
            
            // IDを設定
            $this->_set_credit_id($data);
            
            $this->back_credit_data($bef_money);
            
            if($regist_type=="cancel") return;
            
            // 残高管理データ登録
            $this->_regist_credit($upd);
            
            // 残高データ更新
            $this->_update_credit($upd);
            
        }
        
        private function _get_edit_credit_data($data) 
        {
            $res = array();
            
            $res['target_month'] = date("Ym", strtotime($data['bill_date']));
            $res['bill_date'] = $data['bill_date'];
            $res['customer_disp_name'] = $data['customer_disp_name'];
            $res['credit_money'] = $data['sum_credit_money'];
            $res['credit_mng_id'] = $data['credit_mng_id'];
            ($data['bill_type'] == BILL_TYPE_C) ? $res['sales_mng_id'] = null : $res['sales_mng_id'] = $data['sales_mng_id'];
            
            return $res;
            
        }
        
	/**
	 * 締日管理か否かを判断しパラメータを編集する
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        private function _set_customer_info($data)
        {
            
            // 締日の得意先かを設定する
            $this->_set_customer_flg($data);
            
            // 引数のデータを編集
            $receivable = $data;
            if($this->m_customer_flg == FLG_ON) {
                $receivable['institute_id'] = null;
                $receivable['depart_id'] = null;
                $receivable['institute_name'] = null;
                $receivable['depart_name'] = null;
            }
            
            return $receivable;
            
        }
                
        
	/**
	 * 締日設定されている得意先か調べる
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        private function _set_customer_flg($data)
        {
            // テーブル名設定
            $this->m_tbl_name = M_CUSTOMER;
            $this->db->select("cutoff_date");
            $this->db->where("customer_disp_name", $data['customer_disp_name']);
            $res = $this->select();
            
            if(count($res) == 0) {
                $this->m_customer_flg = FLG_OFF;
            } else {
                
                if(empty($res[0]->cutoff_date)) {
                    $this->m_customer_flg = FLG_OFF;
                } else {
                    $this->m_customer_flg = FLG_ON;
                }
                
            }            
        }
        
	/**
	 * 売掛金データ戻し処理
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        public function back_sales_data($data)
        {
            $this->m_tbl_name = T_RECEIVABLE_DATA;
            $this->db->select("sales_money");
            $this->db->select("receivable_mng_id");
            $this->db->where("sales_mng_id", $data['sales_mng_id']);
            $res = $this->select();
            
            // データがなければなにもしない
            if(count($res) == 0) return;
                
            // 退避
            $sales_money = $res[0]->sales_money;
            $id = $res[0]->receivable_mng_id;
            
            // 売掛金データテーブル削除
            $this->m_tbl_name = T_RECEIVABLE_DATA;
            $this->db->where("sales_mng_id", $data['sales_mng_id']);
            $this->delete();
            
            // 売掛金管理テーブル更新
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $this->db->where("receivable_mng_id", $id);
            $this->db->set('sales_money', 'sales_money - '.$sales_money, false);
            $this->update();
                
        }
        
	/**
	 * 売掛金データ戻し処理
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        public function back_credit_data($bef_money)
        {
            
            if($bef_money == 0) return;
            
            // 売掛金データテーブル更新
            $this->m_tbl_name = T_RECEIVABLE_DATA;
            $this->db->set('credit_mng_id', null);
            $this->db->where("receivable_mng_id", $this->m_id);
            $this->update();
            
            // 売掛金管理テーブル更新
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $this->db->where("receivable_mng_id", $this->m_id);
            $this->db->set('credit_money', 'credit_money - '.$bef_money, false);
            $this->update();
            
                
        }
        
	/**
	 * 残高データ登録処理
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        private function _regist_mng($data)
        {
            
            // 請求日から対象月を算出
            $year_month = date("Ym", strtotime($data['bill_date']));
            
            // 検索
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $this->_set_mng_where($data, $year_month);
            
            $cnt = $this->get_total_cnt();
            
            $insert = array();
            if($cnt == 0) {
                // insert
                $insert['target_month'] = $year_month;
                $insert['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
                $insert['customer_disp_name'] = isset($data['customer_disp_name']) ? $data['customer_disp_name'] : null;
                $insert['institute_id'] = $data['institute_id'];
                $insert['institute_name'] = $data['institute_name'];
                $insert['depart_id'] = $data['depart_id'];
                $insert['depart_name'] = $data['depart_name'];
                $insert['sales_money'] = $data['sum_money'];
                
                $this->insert($insert);
                $this->m_id = $this->db->insert_id();
            } else {
                
                // update
                $this->_set_mng_where($data, $year_month);
                $this->db->set('sales_money', 'sales_money + '.$data['sum_money'], false);
                $this->update();
                
                $this->m_id = $this->_get_mng_id($data, $year_month);
                
            }
            
        }
        
	/**
	 * 残高データ登録処理
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        private function _regist_credit($data)
        {
            
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            
            // update
            $this->db->where('receivable_mng_id', $this->m_id);
            $this->db->set('credit_money', 'credit_money + '.$data['credit_money'], false);
            $this->update();
            
            
        }
        
	/**
	 * 残高データ登録処理
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        private function _insert_data($data)
        {
            // 検索
            $this->m_tbl_name = T_RECEIVABLE_DATA;
            
            $insert =  array();
            
            $insert['receivable_mng_id'] = $this->m_id;
            $insert['sales_mng_id'] = $data['sales_mng_id'];
            $insert['bill_date'] = $data['bill_date'];
            $insert['sales_money'] = $data['sum_money'];
            $this->insert($insert);
            
        }
        
	/**
	 * 残高データ登録処理
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        private function _update_credit($data)
        {

            if(empty($data['sales_mng_id'])) return;
            
            // 検索
            $this->m_tbl_name = T_RECEIVABLE_DATA;
            
            // update
            $this->db->where('receivable_mng_id', $this->m_id);
            $this->db->set('credit_mng_id', $data['credit_mng_id']);
            $this->update();
            
        }


	/**
	 * 管理データのWHEREを設定する
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        private function _set_mng_where($data, $year_month)
        {
            
            $this->db->where('target_month', $year_month);
            $this->db->where('customer_disp_name', $data['customer_disp_name']);
            $this->db->where('institute_id', $data['institute_id']);
            $this->db->where('depart_id', $data['depart_id']);
            
        }
        
	/**
	 * 消込用のWHEREを設定する
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        private function _set_credit_id($data)
        {
            
            if(empty($data['sales_mng_id'])) {
                $this->m_tbl_name = T_RECEIVABLE_DATA;
                $this->db->select("receivable_mng_id");
                $this->db->where('target_month', $data['target_month']);
                $this->db->where('customer_disp_name', $data['customer_disp_name']);
                $this->db->where('institute_id is null');
                $this->db->where('depart_id is null');
                $res = $this->select();
                
                
            } else {
                $this->m_tbl_name = T_RECEIVABLE_DATA;
                $this->db->select("receivable_mng_id");
                $this->db->where('sales_mng_id', $data['sales_mng_id']);
                $res = $this->select();
                
            }
            
            $this->m_id = $res[0]->receivable_mng_id;
            
        }
        
        /**
	 * 消込管理IDの取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function _get_mng_id($data, $year_month) {
            
            // テーブル設定
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            
            $this->db->select("receivable_mng_id");
            $this->_set_mng_where($data, $year_month);
            $res = $this->select();
            
            return $res[0]->receivable_mng_id;
            
        }
        

}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */
