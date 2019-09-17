<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First_del_mdl extends Credit_common_mdl {

	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage	model/db
	 * @author		Kita Yasuhiro
	 * @link		http://www.datalyze.co.jp
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function first_regist_data()
        {
            
            // トランザクション開始
            $this->db->trans_start();
            
            // 売掛金ファイル戻し処理
            $this->_back_receivable($_POST['first_mng_id'][0]);

            // 登録用データ取得
            $data = $this->_get_first_regist_data();
            
            $this->m_tbl_name = T_FIRST_MONEY_MNG;
            $this->m_where = array('first_mng_id' => $data['mng']['first_mng_id']);
            $this->db->set('sum_credit_money', 'sum_credit_money + '.$data['mng']['sum_credit_money'], false);
            $this->db->set('sum_balance_money', 'sum_balance_money - '.$data['mng']['sum_credit_money'], false);
            $this->update();

            $mng_id = $data['mng']['first_mng_id'];

            $data_ins = $data;
            unset($data_ins['mng']);

            foreach ($data_ins['data'] as $regist) {
                $regist['first_mng_id'] = $mng_id;
                $this->m_tbl_name = T_FIRST_MONEY_DATA;
                $this->insert($regist);
            }
            
            // 売掛金ファイル更新
            $this->_regist_receivable($mng_id);
            
           // トランザクション終了
            $this->db->trans_complete();
            
	}
        
	/**
	 * 取消処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function first_cancel_data()
        {
            
            // トランザクション開始
            $this->db->trans_start();
            
            // 初期残高を戻す
            $this->m_tbl_name = T_FIRST_MONEY_MNG;
            $this->m_where = array('first_mng_id' => $_POST['first_mng_id'][0]);
            $this->db->set('sum_credit_money', 'sum_credit_money - '.$_POST['can_reconcile_money'], false);
            $this->db->set('sum_balance_money', 'sum_balance_money + '.$_POST['can_reconcile_money'], false);
            $this->update();
            
            // 子どもデータけす
            $this->m_tbl_name = T_FIRST_MONEY_DATA;
            $this->m_where = array('first_data_id' => $_POST['first_data_id']);
            $this->delete();
            
            // 売掛金残高ファイル戻す
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $month = date("Ym", strtotime($_POST['can_reconcile_date']));
            $this->db->where("target_month", $month);
            $this->db->where("customer_id", $_POST['can_customer_id']);
            $this->db->set('credit_money', 'credit_money - '.$_POST['can_reconcile_money'], false);
            $this->update();

            // トランザクション終了
            $this->db->trans_complete();
            
        }
        
	/**
	 * 売掛金ファイル戻し処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function _back_receivable($id)
        {
            
            // 登録用データ取得
            $data = $this->get_list_data($id);
            
            foreach ($data as $val) {
                
                if(empty($val->reconcile_date)) continue;
                
                // 戻し処理
                $this->m_tbl_name = T_RECEIVABLE_MNG;
                $month = date("Ym", strtotime($val->reconcile_date));
                $this->db->where("target_month", $month);
                $this->db->where("customer_id", $val->customer_id);
                $this->db->set('credit_money', 'credit_money - '.$val->reconcile_money, false);
                $this->update();
            }
            
        }
	/**
	 * 売掛金ファイル登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function _regist_receivable($id)
        {
            
            // 登録用データ取得
            $data = $this->get_list_data($id);
            
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            foreach ($data as $val) {
                $ins_data = array();
                $month = date("Ym", strtotime($val->reconcile_date));
                
                $this->db->where("target_month", $month);
                $this->db->where("customer_id", $val->customer_id);
                $this->db->set('credit_money', 'credit_money + '.$val->reconcile_money, false);
                $this->update();
                
                if($this->db->affected_rows() == 0) {
                    $ins_data['target_month'] = $month;
                    $ins_data['customer_id'] = $val->customer_id;
                    $ins_data['customer_disp_name'] = $val->customer_disp_name;
                    $ins_data['credit_money'] = $val->reconcile_money;

                    $this->insert($ins_data);
                }
                
            }
            
        }

        /**
	 * マスタ情報取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_mst_data() {
            
            $data = array();
            
            $data['reconcile_type'] = $this->general_name_mdl->get_all_reconcile_type_bil_other();
            
            // テーブル設定
            $data['credit_status'] = $this->general_name_mdl->get_credit_stauts();
            
            return $data;
        }
        
    /**
	 * 相殺消し込み一覧の絞込条件を取得する
	 *
	 * @access private
	 * @return string
	 * @author Kita Yasuhiro
	 */
	public function create_search_condition()
	{
		$condition = array();
		$data = $this->get_input_condition();
                
                if (count($data) == 0) return;

                // 得意先名称
                if(!empty($data['customer_disp_name'])) {
                    
                    $condition[] = "(mng.customer_disp_name like '%".$this->db->escape_like_str($data['customer_disp_name'])
                                                        ."%' or cus.customer_furi like '%".$this->db->escape_like_str($data['customer_disp_name'])."%')";
                }
                
                // 消込状態
                if(!empty($data['credit_status'])) {
                    
                    if($data['credit_status'] == "1") {
                        $condition[] = "(mng.sum_balance_money > 0)";
                    } else {
                        $condition[] = "(mng.sum_balance_money = 0)";
                    }
                    
                }
                
                // 検索条件返却
                if(count($condition) > 0) {
                    return implode(' and ', $condition);
                } else {
                    return "";
                }
                
	}
        
        /**
	 * 取得に必要なidを取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_first_mng_id($where, $start) {
            
            $this->m_tbl_name = T_FIRST_MONEY_MNG;
            $this->m_prefix = "mng";
            
            $this->db->select("mng.first_mng_id");
            $this->db->join(M_CUSTOMER." cus ", "mng.customer_disp_name=cus.customer_disp_name and cus.delete_flg='".FLG_OFF."'", "LEFT" );
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // リミット設定
            $this->db->limit(PER_PAGE_CNT, $start);
            $res = $this->select();
            
            $ary = array();
            foreach ($res as $value) {
                $ary[] = "'".$value->first_mng_id."'";
            }
            
            return implode(',', $ary);
            
        }
        
        
        /**
	 * 消し込みデータの取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_data($id) {
        
            // テーブル設定
            $this->m_tbl_name = T_FIRST_MONEY_MNG;
            
            $this->m_prefix = "mng";
            
            $this->db->select("mng.customer_id");
            $this->db->select("mng.customer_disp_name");
            $this->db->select("mng.first_mng_id");
            $this->db->select("mng.first_money");
            $this->db->select("data.first_data_id");
            $this->db->select("data.reconcile_date");
            $this->db->select("data.reconcile_type");
            $this->db->select("data.reconcile_money");
            $this->db->select("mng.sum_credit_money");
            $this->db->select("mng.sum_balance_money");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_RECONCILE_TYPE_ALL."' AND item_cd=data.reconcile_type) as reconcile_type_name ");
            
            // JOIN句作成
            $this->db->join(M_CUSTOMER." cus ", "mng.customer_disp_name=cus.customer_disp_name and cus.delete_flg='".FLG_OFF."'", "LEFT" );
            $this->db->join(T_FIRST_MONEY_DATA." data ", "mng.first_mng_id=data.first_mng_id", "LEFT" );
            
            $this->db->where("mng.first_mng_id in (".$id.")");
            
            // ORDER句の設定
            $this->db->order_by("cus.customer_furi", "asc");
            
            return $this->select();
        }
        
        /**
	 * 消し込みデータの取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_total_list_cnt($where) {
        
            // テーブル設定
            $this->db->from(T_FIRST_MONEY_MNG." mng");
            $this->db->select("count(*) as cnt");
            
            // JOIN句作成
            $this->db->join(M_CUSTOMER." cus ", "mng.customer_disp_name=cus.customer_disp_name and cus.delete_flg='".FLG_OFF."'", "LEFT" );
            
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            $query = $this->db->get();
            $result = $query->result();

            return intval($result[0]->cnt);
        }
        
        /**
	 * 表示要の一覧データを取得
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function get_disp_list_data($condition) 
        {
            
            // 検索開始番号を取得
            $start = $this->uri->segment(4);
            $res = array();

            // 取得に必要なIDを取得
            $id = $this->get_first_mng_id($condition, $start);

            if(empty($id)) return array();

            // 一覧を取得
            $list = $this->get_list_data($id);
            $res = $this->_get_first_money_data($list);
            
            return $res;
            
        }
        
    /**
	 * 表示要の一覧データを取得
	 *
	 * @access private
     * @param  $ary array
	 * @author kita Yasuhiro
	 */
        private function _set_space_row(&$ary)
        {
            
            $i=0;
            foreach ($ary as $value) {
                
                if($value['sum_balance_money'] == "0") {
                    $i++;
                    continue;
                }
                
                $i_l = count($ary[$i]['reconcile_data']);
                
                if(!empty($value['reconcile_data'][($i_l - 1)]['disp_reconcile_date'])) {
                    $ary[$i]['reconcile_data'][$i_l]['disp_reconcile_date'] = "";
                    $ary[$i]['reconcile_data'][$i_l]['credit_data_id'] = "";
                    $ary[$i]['reconcile_data'][$i_l]['reconcile_money'] = "";
                    $ary[$i]['reconcile_data'][$i_l]['disp_reconcile_money'] = "";
                    $ary[$i]['reconcile_data'][$i_l]['reconcile_type'] = "";
                    
                }
                
                $i++;
            }

        }
        
        
        /**
	 * 表示する一覧の条件をPostから取得
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function get_disp_type() {
            
            if(isset($_POST['disp_type'])) {
                if($_POST['disp_type'] == CREDIT_STATUS_OFF) {
                    return "bill";
                } else {
                    return "credit";
                }
                
            } else {
                
                if(isset($_POST['regist'])) {
                    
                    if($_POST['regist'] == "bill_regist") {
                        return "bill";
                    } else {
                        return "credit";
                    }
                    
                } else {
                    
                    if($this->session->userdata($this->router->class) == true) {
                        
                        $data = $this->session->userdata($this->router->class);
                        $data = $data[SS_KEY_SEARCH];
                        
                        if(isset($data['disp_type'])) {
                            if($data['disp_type'] == CREDIT_STATUS_OFF) {
                                return "bill";
                            } else {
                                return "credit";
                            }
                        } else {
                            return "bill";
                        }
                        
                    } else {
                        return "bill";
                    }
                    
                    
                }
                
            }
            
        }
        
        /**
	 * 表示要の一覧データを取得
	 *
	 * @access private
     * @param  $list array
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_first_money_data($list)
        {
            
            $res = array();
            
            $i = 0;
            $j = 0;
            foreach ($list as $key => $val) {
                
                if($this->chk_dup_data($list, $key, "first_mng_id")) {
                    $this->_set_space_row($res);
                    $j = 0;
                } else {
                    $i--;
                }
                $res[$i]['no'] = $i+1;
                $res[$i]['first_mng_id'] = $val->first_mng_id;
                $res[$i]['customer_id'] = $val->customer_id;
                $res[$i]['customer_disp_name'] = $val->customer_disp_name;
                $res[$i]['disp_first_money'] = money_sep($val->first_money);            // 請求額
                $res[$i]['first_money'] = $val->first_money;                            // 請求額
                $res[$i]['disp_sum_balance_money'] = get_span_red(money_sep($val->sum_balance_money));  // 請求残額
                $res[$i]['sum_balance_money'] = $val->sum_balance_money;
                $res[$i]['reconcile_data'][$j]['disp_reconcile_date'] = slash_date($val->reconcile_date);
                $res[$i]['reconcile_data'][$j]['first_data_id'] = $val->first_data_id;
                $res[$i]['reconcile_data'][$j]['reconcile_money'] = $val->reconcile_money;
                $res[$i]['reconcile_data'][$j]['disp_reconcile_money'] = money_sep($val->reconcile_money);
                $res[$i]['reconcile_data'][$j]['reconcile_type'] = $val->reconcile_type;
                $res[$i]['reconcile_data'][$j]['reconcile_type_name'] = $val->reconcile_type_name;
                
                $j++;
                $i++;
            }
            $this->_set_space_row($res);
            
            return $res;
            
        }
        
       /**
	 * 登録情報を取得する
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_first_regist_data()
        {
            $res = array();
            
            $target = $_POST['first_mng_id'][0];
            
            $res['mng']['first_mng_id'] = $target;
            
            $i = 0;
            $sum_money = 0;
            foreach ($_POST['reconcile_date'][$target] as $value) {
                
                $res['data'][$i]['reconcile_date'] = $_POST['reconcile_date'][$target][$i];
                $res['data'][$i]['reconcile_money'] = erase_money_sep($_POST['reconcile_money'][$target][$i]);
                $res['data'][$i]['reconcile_type'] = $_POST['reconcile_type'][$target][$i];
                $res['data'][$i]['reconcile_money'] = erase_money_sep($_POST['reconcile_money'][$target][$i]);
                
                $sum_money += erase_money_sep($_POST['reconcile_money'][$target][$i]);
                
                $i++;
            }
            
            $res['mng']['sum_credit_money'] = $sum_money;
            $res['mng']['sum_balance_money'] = $_POST['sum_balance_money'] - $sum_money;
            
            return $res;
        }
        
    /**
	 * 検索条件の入力値を取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
	public function get_input_condition()
	{
		$data = array();
                
		if(isset($_POST['search'])) {
                    $data = $_POST;
                    
		} else if($this->session->userdata($this->router->class) != false) {
                    $data = $this->session->userdata($this->router->class);
                    $data = $data[SS_KEY_SEARCH];
		}

		return $data;
	}

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */