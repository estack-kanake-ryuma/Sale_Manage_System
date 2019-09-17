<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * その他消込画面のモデル処理
 */
class Other_del_mdl extends Credit_common_mdl {

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
	public function bill_regist_data()
        {
            
            log_message('info', '【その他消込(請求)処理   START)】');
            
            // トランザクション開始
            $this->db->trans_start();

            // 登録用データ取得
            $data = $this->_get_bill_regist_data();
            
            // データ登録処理
            // 消込管理データが存在するかチェックする
            $this->m_tbl_name = T_CREDIT_MNG;
            $this->db->where('bill_mng_id', $data['mng']['bill_mng_id']);
            $cnt = $this->get_total_cnt();

            $mng_ins = $data;
            unset($mng_ins['data']);

            $this->m_tbl_name = T_CREDIT_MNG;
            $mng_id = "";
            if($cnt == 0) {
                // 消込管理データを新規登録する
                $this->insert($mng_ins['mng']);
                $mng_id = $this->db->insert_id();
            } else {
                
                $this->m_where = array('bill_mng_id' => $data['mng']['bill_mng_id']);
                $this->db->set('sum_credit_money', 'sum_credit_money + '.$data['mng']['sum_credit_money'], false);
                $this->db->set('sum_balance_money', 'sum_balance_money - '.$data['mng']['sum_credit_money'], false);
                $this->update();

                // 消込管理IDを取得する
                $mng_id = $this->get_mng_id($data['mng']['bill_mng_id']);
                
            }

            $data_ins = $data;
            unset($data_ins['mng']);

            foreach ($data_ins['data'] as $regist) {
                $regist['credit_mng_id'] = $mng_id;
                $this->m_tbl_name = T_CREDIT_DATA;
                $this->insert($regist);

            }
            
            
            // 更新金額の設定
            $this->m_now_money = $data['mng']['sum_credit_money'];
            // 売掛金残高ファイルの更新
            $this->set_receivable_data($mng_id);
            
            // 売上管理ファイルの更新
            $this->update_sales_mng($mng_id);
            
            // ステータスUpdate
            $this->update_reconcile_status($mng_id);
            
            // トランザクション終了
            $this->db->trans_complete();
            
            log_message('info', '【その他消込(請求)処理   END)】');
            
	}
        
	/**
	 * 取消処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function bill_cancel_data()
        {
            
            log_message('info', '【その他消込(請求)取消処理   START)】');
            
            // トランザクション開始
            $this->db->trans_start();

            // データの紐付きを確認し、紐付きが存在する場合は切り離しを行う
            $this->_clear_relate_credit_data_id($_POST['credit_data_id']);

            // 消込データを削除して、売掛金更新金額を登録
            $this->del_exist_data($_POST['bill_mng_id'][0], $_POST['credit_data_id']);
            
            $mng_id = $this->get_mng_id($_POST['bill_mng_id'][0]);
            $this->set_receivable_data($mng_id, "cancel");

            // 売上管理テーブルのステータスを変更
            $this->update_sales_mng($mng_id, DATA_TYPE_BILL, "credit");

            // 消込管理テーブルの消込金額合計が0だったら、データ消す。
            $this->m_tbl_name = T_CREDIT_MNG;
            $this->db->where(array('credit_mng_id' => $mng_id, 'sum_credit_money' => '0'));
            $this->delete();

            // トランザクション終了
            $this->db->trans_complete();
            
            log_message('info', '【その他消込(請求)取消処理   END)】');
            
        }

        
	/**
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function credit_regist_data()
        {
            
            log_message('info', '【その他消込(入金)処理   START)】');
            
            // トランザクション開始
            $this->db->trans_start();
            
            $data = $this->_get_credit_regist_data();
            
            foreach ($data as $regist) {
                $this->m_tbl_name = T_CREDIT_RECIEVED_ADJUST;
                $this->insert($regist);
                
                // 消込管理テーブルのUPDATE
                $this->m_tbl_name = T_CREDIT_RECIEVED;
                $this->db->where(array('credit_received_id' => $_POST['credit_received_id'][0]));
                $this->db->set('balance_money', 'balance_money - '.$regist['adjust_money'], false);
                $this->update();
                
            }
            
            // トランザクション終了
            $this->db->trans_complete();
            
            log_message('info', '【その他消込(入金)処理   END)】');
            
	}
        
	/**
	 * 取消処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function credit_cancel_data()
        {
            
            log_message('info', '【その他消込(入金)取消処理   START)】');
            
            // トランザクション開始
            $this->db->trans_start();
            
            // 入金データを戻す
            $this->update_adjust_data($_POST['credit_received_id'][0], $_POST['adjust_id'], $_POST['can_adjust_money']);
            
            // トランザクション終了
            $this->db->trans_complete();
            
            log_message('info', '【その他消込(入金)取消処理   END)】');
            
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
            
            // テーブル設定
            $data['credit_status'] = $this->general_name_mdl->get_credit_stauts();
            
            if($this->get_disp_type() == "bill") {
                $data['reconcile_type'] = $this->general_name_mdl->get_reconcile_type_bill();
            } else {
                $data['reconcile_type'] = $this->general_name_mdl->get_reconcile_type_credit();
            }
            
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
                
                if (count($data) == 0) {
                    $data['credit_status'] = "1";
                }
                
                // 得意先名称
                if(!empty($data['customer_disp_name'])) {
                    
                    $prefix = "";
                    if($this->get_disp_type() == "bill") {
                        $prefix = "bill";
                    } else {
                        $prefix = "credit";
                    }
                    
                    $condition[] = "(".$prefix.".customer_disp_name like '%".$this->db->escape_like_str($data['customer_disp_name'])
                                                        ."%' or cus.customer_furi like '%".$this->db->escape_like_str($data['customer_disp_name'])."%')";
                    
                }
                
                // 入金種別
                if(!empty($data['credit_status'])) {
                    
                    if($this->get_disp_type() == "bill") {
                        if($data['credit_status'] == CREDIT_STATUS_ON) {
                            $condition[] = "(reconcile_status = '".$this->db->escape_like_str($data['credit_status'])."')";
                        } else {
                            $condition[] = "(reconcile_status = '".$this->db->escape_like_str($data['credit_status'])."' OR reconcile_status is null)";
                        }
                    } else {
                        
                        if($data['credit_status'] == CREDIT_STATUS_ON) {
                            $condition[] = "(balance_money = 0)";
                        } else {
                            $condition[] = "(balance_money > 0)";
                        }
                        
                    }
                    
                }
                
                // 請求日
                if(!empty($data['bill_date_from'])) {
                    $condition[] = "date_format(bill_date, '%Y/%m/%d') >= ".$this->db->escape($data['bill_date_from']);
                }
                if(!empty($data['bill_date_to'])) {
                    $condition[] = "date_format(bill_date, '%Y/%m/%d') <= ".$this->db->escape($data['bill_date_to']);
                }
                // 消込日
                if(!empty($data['reconcile_date_from'])) {
                    $condition[] = "date_format(reconcile_date, '%Y/%m/%d') >= ".$this->db->escape($data['reconcile_date_from']);
                }
                if(!empty($data['reconcile_date_to'])) {
                    $condition[] = "date_format(reconcile_date, '%Y/%m/%d') <= ".$this->db->escape($data['reconcile_date_to']);
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
        public function get_bill_mng_id($where, $start) {
            
            $this->m_tbl_name = T_BILL_MNG;
            $this->m_prefix = "bill";
            
            $this->db->select("bill.bill_mng_id");
            $this->db->join(M_CUSTOMER." cus ", "bill.customer_disp_name=cus.customer_disp_name and cus.delete_flg='".FLG_OFF."'", "LEFT" );
            $this->db->join(T_CREDIT_MNG." credit ", "bill.bill_mng_id=credit.bill_mng_id and bill.delete_flg='".FLG_OFF."'", "LEFT" );
            $tbl = "( SELECT credit_mng_id, min(reconcile_date) as reconcile_date FROM ".T_CREDIT_DATA." GROUP BY credit_mng_id )";
            $this->db->join($tbl." data ", "credit.credit_mng_id=data.credit_mng_id", "LEFT");
            if(!empty($where)) {
                $this->db->where($where);
            }
            $this->db->order_by("cus.customer_furi is null", "asc");
            $this->db->order_by("cus.customer_furi", "asc");
            
            // リミット設定
            $this->db->limit(PER_PAGE_CNT, $start);
            $res = $this->select();
            
            $ary = array();
            foreach ($res as $value) {
                $ary[] = "'".$value->bill_mng_id."'";
            }
            
            return implode(',', $ary);
            
        }
        
        /**
	 * 取得に必要なidを取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_credit_received_id($where, $start) {
            
            // テーブル設定
            $this->m_tbl_name = T_CREDIT_RECIEVED;
            $this->m_prefix = "credit";
            
            $this->db->select("credit.credit_received_id");
            $this->db->join(M_CUSTOMER." cus ", "credit.customer_disp_name=cus.customer_disp_name and cus.delete_flg='".FLG_OFF."'", "LEFT" );
            
            // WHEREの設定
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // リミット設定
            $this->db->limit(PER_PAGE_CNT, $start);
            
            $res = $this->select();
            
            $ary = array();
            foreach ($res as $value) {
                $ary[] = "'".$value->credit_received_id."'";
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
        public function get_list_data($where, $id) {
        
            // テーブル設定
            $this->m_tbl_name = T_BILL_MNG;
            
            $this->m_prefix = "bill";
            
            $this->db->select("bill.bill_mng_id");
            $this->db->select("bill.bill_no");	
            $this->db->select("bill.bill_date");
            $this->db->select("bill.bill_type");
            $this->db->select("bill.bill_money");
            $this->db->select("bill.customer_disp_name");
            $this->db->select("bill.credit_type");
            $this->db->select("mng.credit_mng_id");
            $this->db->select("mng.reconcile_status");
            $this->db->select("mng.sum_credit_money");
            $this->db->select("mng.sum_balance_money");
            $this->db->select("mng.reconcile_status");
            $this->db->select("data.credit_data_id");
            $this->db->select("data.reconcile_money");
            $this->db->select("data.reconcile_date");
            $this->db->select("data.reconcile_type");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_RECONCILE_TYPE_ALL."' AND item_cd=data.reconcile_type) as reconcile_type_name ");
            
            
            // JOIN句作成
            $this->db->join(M_CUSTOMER." cus ", "bill.customer_disp_name=cus.customer_disp_name and cus.delete_flg='".FLG_OFF."'", "LEFT" );
            $this->db->join(T_CREDIT_MNG." mng ", "bill.bill_no=mng.bill_no and mng.delete_flg='".FLG_OFF."'", "LEFT" );
            $this->db->join(T_CREDIT_DATA." data ", "mng.credit_mng_id=data.credit_mng_id", "LEFT");
            
            // WHERE句作成
            //$this->db->where("mng.reconcile_status = ".CREDIT_STATUS_OFF. " OR mng.reconcile_status is null");
            $this->db->where("bill.bill_mng_id in (".$id.")");
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // ORDER句の設定
            $this->db->order_by("bill.bill_no", "asc");
            $this->db->order_by("data.reconcile_date", "asc");
            
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
            $this->db->from(T_BILL_MNG." bill");
            $this->db->select("count(*) as cnt");
            
            // JOIN句作成
            $this->db->join(M_CUSTOMER." cus ", "bill.customer_disp_name=cus.customer_disp_name and cus.delete_flg='".FLG_OFF."'", "LEFT" );
            $this->db->join(T_CREDIT_MNG." mng ", "bill.bill_no=mng.bill_no and mng.delete_flg='".FLG_OFF."'", "LEFT" );
            $tbl = "( SELECT credit_mng_id, min(reconcile_date) as reconcile_date FROM ".T_CREDIT_DATA." GROUP BY credit_mng_id )";
            $this->db->join($tbl." data ", "mng.credit_mng_id=data.credit_mng_id", "LEFT");
            
            // 振込テーブル
//            $furikomi = "( SELECT ";
//            $furikomi .= "    credit_mng_id ";
//            $furikomi .= "    ,reconcile_date ";
//            $furikomi .= "    ,sum(reconcile_money) as transfer_money";
//            $furikomi .= "  FROM ".T_CREDIT_DATA;
//            $furikomi .= "  WHERE ";
//            $furikomi .= "  reconcile_type in ('".RECONCILE_TYPE_FURI."', '".RECONCILE_TYPE_FURI_TESU."', '".RECONCILE_TYPE_SETOFF."') ";
//            $furikomi .= "  GROUP BY credit_mng_id";
//            $furikomi .= ")";
//            $this->db->join($furikomi." furikomi ", "mng.credit_mng_id=furikomi.credit_mng_id", "LEFT");
//            
            // WHERE句作成
            //$this->db->where("mng.reconcile_status = ".CREDIT_STATUS_OFF. " OR mng.reconcile_status is null");
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            $query = $this->db->get();
            $result = $query->result();
            
            return intval($result[0]->cnt);
        }
        
        /**
	 * 入金データの取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_credit_list_cnt($where) {
        
            // テーブル設定
            $this->db->from(T_CREDIT_RECIEVED." credit");
            
            $this->db->select("count(*) as cnt");
            
            // JOIN句
            $this->db->join(M_CUSTOMER." cus ", "credit.customer_disp_name=cus.customer_disp_name and cus.delete_flg='".FLG_OFF."'", "LEFT" );
            //$this->db->join(T_CREDIT_RECIEVED_ADJUST." adjust ", "credit.credit_received_id=adjust.credit_received_id", "LEFT" );
            
            // WHEREの設定
            //$this->db->where("credit.balance_money != ", "0");
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            $query = $this->db->get();
            $result = $query->result();

            return intval($result[0]->cnt);
        }

        
        /**
	 * 入金データの取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_credit_data($where, $id) {
        
            // テーブル設定
            $this->m_tbl_name = T_CREDIT_RECIEVED;
            
            $this->m_prefix = "credit";
            
            $this->db->select("credit.credit_received_id");
            $this->db->select("credit.customer_disp_name");
            $this->db->select("credit.credit_date");
            $this->db->select("credit.credit_money");
            $this->db->select("credit.balance_money");
            $this->db->select("adjust.adjust_id");
            $this->db->select("adjust.adjust_date");
            $this->db->select("adjust.adjust_type");
            $this->db->select("adjust.adjust_money");
            $this->db->select("(SELECT item_name FROM ".M_SYS_GENERAL_NAME." WHERE group_cd='".GRP_RECONCILE_TYPE_ALL."' AND item_cd=adjust.adjust_type) as adjust_type_name ");
            
            // JOIN句
            $this->db->join(T_CREDIT_RECIEVED_ADJUST." adjust ", "credit.credit_received_id=adjust.credit_received_id", "LEFT" );
            $this->db->join(M_CUSTOMER." cus ", "credit.customer_disp_name=cus.customer_disp_name and cus.delete_flg='".FLG_OFF."'", "LEFT" );
            
            // ORDER句の設定
            $this->db->order_by("credit.customer_disp_name", "asc");
            $this->db->order_by("credit.credit_date", "asc");
            $this->db->order_by("credit.balance_money", "asc");
            $this->db->order_by("adjust.adjust_date", "asc");
            $this->db->order_by("adjust.adjust_money", "asc");
            
            // WHEREの設定
            $this->db->where("credit.credit_received_id in (".$id.")");
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            return $this->select();
        }
        
    /**
	 * relate_credit_data_idで紐付いているデータを取得する
	 *
	 * @access	private
	 * @return	string
	 * @author	Kanake Ryuma
	 */
        private function _get_relate_credit_data($credit_data_id) {
        
            $this->m_tbl_name = T_CREDIT_DATA;
            $this->db->select("credit_data_id");
            $this->db->where("relate_credit_data_id = ".$credit_data_id);
            
            $result = $this->select();
            
            $id = '';
            if(count($result) == 1) {
                $id = $result[0]->credit_data_id;
            }
            
            return $id;
            
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

            if($this->get_disp_type() == "bill") {
                // 取得に必要なIDを取得
                $id = $this->get_bill_mng_id($condition, $start);
                
                if(empty($id)) return array();
                
                // 一覧を取得
                $list = $this->get_list_data($condition, $id);
                
                $res = $this->_get_bill_info_data($list);

            } else {
                // 取得に必要なIDを取得
                $id = $this->get_credit_received_id($condition, $start);
                if(empty($id)) return array();
                
                $list = $this->get_credit_data($condition, $id);
                $res = $this->_get_credit_info_data($list);
            }
            
            return $res;
            
        }
        
    /**
	 * 表示要の一覧データを取得
	 *
	 * @access private
     * @param  $ary array
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _set_space_row(&$ary)
        {
            
            $i=0;
            foreach ($ary as $value) {
                
                if($value['reconcile_status'] == CREDIT_STATUS_ON) {
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
	 * 表示要の一覧データを取得
	 *
	 * @access private
     * @param  $ary array
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _set_credit_space_row(&$ary)
        {
            
            $i=0;
            foreach ($ary as $value) {
                
                if($value['balance_money'] == "0") {
                    $i++; 
                    continue;
                }
                
                $i_l = count($ary[$i]['adjust_info']);
                
                if(!empty($value['adjust_info'][($i_l - 1)]['disp_adjust_date'])) {
                    $ary[$i]['adjust_info'][$i_l]['adjust_id'] = "";
                    $ary[$i]['adjust_info'][$i_l]['adjust_date'] = "";
                    $ary[$i]['adjust_info'][$i_l]['disp_adjust_date'] = "";
                    $ary[$i]['adjust_info'][$i_l]['adjust_type'] = "";
                    $ary[$i]['adjust_info'][$i_l]['adjust_type_name'] = "";
                    $ary[$i]['adjust_info'][$i_l]['adjust_money'] = "";
                    $ary[$i]['adjust_info'][$i_l]['disp_adjust_money'] = "";
                    
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
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_bill_info_data($list)
        {
            
            $res = array();
            
            
            $i = 0;
            $j = 0;
            foreach ($list as $key => $val) {
                
                if($this->chk_dup_data($list, $key)) {
                    $this->_set_space_row($res);
                    $j = 0;
                } else {
                    $i--;
                }
                $res[$i]['no'] = $i+1;
                $res[$i]['bill_mng_id'] = $val->bill_mng_id;
                $res[$i]['customer_disp_name'] = $val->customer_disp_name;
                $res[$i]['disp_bill_no'] = get_anchor("/bill/bill_cutoff_print/bill_disp/".$val->bill_no."?win_type=win", $val->bill_no, array("target" => "_blank"));     // 請求書
                $res[$i]['bill_no'] = $val->bill_no;
                $res[$i]['disp_bill_date'] = slash_date($val->bill_date);             // 請求書日
                $res[$i]['disp_bill_money'] = money_sep($val->bill_money);            // 請求額
                $res[$i]['bill_money'] = $val->bill_money;                            // 請求額

                $res[$i]['disp_sum_balance_money'] = empty($val->credit_mng_id) ? get_span_red(money_sep($val->bill_money)) : get_span_red(money_sep($val->sum_balance_money));  // 請求残額
                $res[$i]['reconcile_status'] = $val->reconcile_status;                        // 相殺消込額
                $res[$i]['sum_balance_money'] = empty($val->credit_mng_id) ? $val->bill_money : $val->sum_balance_money;  // 請求残額
                $res[$i]['reconcile_data'][$j]['disp_reconcile_date'] = slash_date($val->reconcile_date);
                $res[$i]['reconcile_data'][$j]['credit_data_id'] = $val->credit_data_id;
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
	 * 表示要の一覧データを取得
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_credit_info_data($list)
        {
            $res = array();
            
            $i = 0;
            $j = 0;
            foreach ($list as $key => $val) {

                if($this->chk_dup_data($list, $key, "credit_received_id")) {
                    $this->_set_credit_space_row($res);
                    $j = 0;
                } else {
                    $i--;
                }
                
                $res[$i]['no'] = $i+1;
                $res[$i]['credit_received_id'] = $val->credit_received_id;
                $res[$i]['customer_disp_name'] = $val->customer_disp_name;
                $res[$i]['credit_date'] = $val->credit_date;
                $res[$i]['disp_credit_date'] = slash_date($val->credit_date);
                $res[$i]['credit_money'] = $val->credit_money;
                $res[$i]['disp_credit_money'] = money_sep($val->credit_money);
                $res[$i]['balance_money'] = $val->balance_money;
                $res[$i]['disp_balance_money'] = get_span_red(money_sep($val->balance_money));
                
                $res[$i]['adjust_info'][$j]['adjust_id'] = $val->adjust_id;
                $res[$i]['adjust_info'][$j]['adjust_date'] = $val->adjust_date;
                $res[$i]['adjust_info'][$j]['disp_adjust_date'] = slash_date($val->adjust_date);
                $res[$i]['adjust_info'][$j]['adjust_type'] = $val->adjust_type;
                $res[$i]['adjust_info'][$j]['adjust_type_name'] = $val->adjust_type_name;
                $res[$i]['adjust_info'][$j]['adjust_money'] = $val->adjust_money;
                $res[$i]['adjust_info'][$j]['disp_adjust_money'] = money_sep($val->adjust_money);
                
                $j++;
                $i++;
            }
            
            $this->_set_credit_space_row($res);

            return $res;
            
        }
        
    /**
	 * 登録情報を取得する
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_bill_regist_data()
        {
            $res = array();
            
            $target = $_POST['bill_mng_id'][0];
            
            $res['mng']['bill_mng_id'] = $target;
            $res['mng']['bill_no'] = $_POST['bill_no'][0];    
            $res['mng']['bill_money'] = $_POST['bill_money'][0];    
            
            $i = 0;
            $sum_money = 0;
            foreach ($_POST['reconcile_date'][$target] as $value) {
                
                $res['data'][$i]['reconcile_date'] = $_POST['reconcile_date'][$target][$i];
                $res['data'][$i]['reconcile_money'] = erase_money_sep($_POST['reconcile_money'][$target][$i]);
                $res['data'][$i]['reconcile_type'] = $_POST['reconcile_type'][$target][$i];;
                $res['data'][$i]['reconcile_money'] = erase_money_sep($_POST['reconcile_money'][$target][$i]);
                
                $sum_money += erase_money_sep($_POST['reconcile_money'][$target][$i]);
                
                $i++;
            }
            
            $res['mng']['sum_credit_money'] = $sum_money;
            $res['mng']['sum_balance_money'] = $_POST['sum_balance_money'][0] - $sum_money;
            
            return $res;
        }
        
    /**
	 * 登録情報を取得する
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_credit_regist_data()
        {
            $res = array();
            
            $target = $_POST['credit_received_id'][0];
            
            $i=0;
            foreach ($_POST['adjust_date'][$target] as $value) {
                
                $res[$i]['credit_received_id'] = $target;
                $res[$i]['adjust_date'] = $_POST['adjust_date'][$target][$i];
                $res[$i]['adjust_money'] = erase_money_sep($_POST['adjust_money'][$target][$i]);
                $res[$i]['adjust_type'] = $_POST['adjust_type'][$target][$i];;
                
                $i++;
            }
            
            return $res;
        }
        
    /**
     * relate_credit_data_idの紐付きを解除する処理
     * 
     * @param int $credit_data_id
     * 
     */
        private function _clear_relate_credit_data_id($credit_data_id) {
            
            // 紐付きを持つcredit_data_idを取得する
            $clear_credit_data_id = $this->_get_relate_credit_data($credit_data_id);
            
            // 紐づくIDが存在した場合は紐付きを解除する
            if(!empty($clear_credit_data_id)) {
                $this->_update_relate_credit_data_id($clear_credit_data_id);
            }
        }
        
    /**
     * relate_credit_dataidのNULLへの更新処理
     * 
     * @param integer $credit_data_id
     */
        private function _update_relate_credit_data_id($credit_data_id) {
            
            // T_CREDIT_DATAのrelate_credit_data_idのクリア
            $sql = 'UPDATE '.T_CREDIT_DATA.' SET relate_credit_data_id = NULL WHERE credit_data_id = '.$this->db->escape($credit_data_id);
            
            $this->db->query($sql);
            
        }


}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */