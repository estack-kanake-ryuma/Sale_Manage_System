<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 振込消込(一括)画面のモデル処理
 */
class Transfer_del_all_mdl extends Credit_common_mdl {

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
		public function regist_data()
        {
            
            log_message('info', '【振込一括消込処理   START】');
            
            // トランザクション開始
            $this->db->trans_start();
            
            // データ取得
            $data = $this->_get_regist_data();
            
            foreach ($data as $val) {
                
                // 消込管理データが存在するかチェックする
                $this->m_tbl_name = T_CREDIT_MNG;
                $this->db->where('bill_mng_id', $val['mng']['bill_mng_id']);
                $cnt = $this->get_total_cnt();
                
                $mng_ins = $val;
                unset($mng_ins['data']);
                
                $this->m_tbl_name = T_CREDIT_MNG;
                $mng_id = "";
                if($cnt == 0) {
                    // 消込管理データを新規登録する
                    $this->insert($mng_ins['mng']);
                    $mng_id = $this->db->insert_id();
                } else {
                    $this->m_where = array('bill_mng_id' => $val['mng']['bill_mng_id']);
                    $this->db->set('sum_credit_money', 'sum_credit_money + '.$val['mng']['sum_credit_money'], false);
                    $this->update();
                    
                    // 消込管理IDを取得する
                    $mng_id = $this->get_mng_id($val['mng']['bill_mng_id']);
                }
                
                // ステータスUPDATE
                $this->update_reconcile_status($mng_id);
                
                // 売上管理ファイルの更新
                $this->update_sales_mng($mng_id);
                
                // 更新金額の設定
                $this->m_now_money = $val['mng']['sum_credit_money'];
                // 売掛金残高ファイルの更新
                $this->set_receivable_data($mng_id);
                    
                $data_ins = $val;
                $data_id = null;
                unset($data_ins['mng']);
                
                foreach ($data_ins['data'] as $regist) {
                    $regist['credit_mng_id'] = $mng_id;
                    $this->m_tbl_name = T_CREDIT_DATA;
                    if($regist['reconcile_type'] == RECONCILE_TYPE_FURI_TESU) {
                        $regist['relate_credit_data_id'] = $data_id;
                    }
                    $this->insert($regist);
                    $data_id = $this->db->insert_id();

                    // 振込手数料は自社負担の為、入金からひかない
                    if($regist['reconcile_type'] <> RECONCILE_TYPE_FURI_TESU) {
                        // 入金残高更新
                        $this->m_tbl_name = T_CREDIT_RECIEVED;
                        $this->m_where = array('credit_received_id' => $regist['credit_received_id']);
                        $this->db->set('balance_money', 'balance_money - '.$regist['reconcile_money'], false);
                        $this->update();
                    }

                }
                    
            }
                
            
            // トランザクション終了
            $this->db->trans_complete();
            
            log_message('info', '【振込一括消込処理   END】');
            
	}
        
	/**
	 * 削除処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
		public function cancel_data()
        {
            
            $data = $this->_get_delete_data();
            
            
            log_message('info', '【振込一括消込取消処理   START】');
            
            // トランザクション開始
            $this->db->trans_start();
                
            foreach ($data as $val) {
                
                // 消込管理テーブルのUPDATE
                $this->m_tbl_name = T_CREDIT_MNG;
                $this->db->where(array('credit_mng_id' => $val['credit_mng_id']));
                $this->db->set('sum_credit_money', 'sum_credit_money - '.$val['sum_money'].' - '.$val['charge_money'], false);
                $this->db->set('sum_balance_money', 'sum_balance_money + '.$val['sum_money'].' + '.$val['charge_money'], false);
                $this->update();
                
                if($this->db->affected_rows() == 0) {
                    continue;
                }
                
                // 入金管理テーブルのUPDATE
                $this->m_tbl_name = T_CREDIT_RECIEVED;
                $this->db->where(array('credit_received_id' => $val['credit_received_id']));
                $this->db->set('balance_money', 'balance_money + '.$val['transfer_money'], false);
                $this->update();
                
                // 消込データテーブル削除
                $this->m_tbl_name = T_CREDIT_DATA;
                $this->db->where(array('credit_data_id' => $val['credit_data_id']));
                $this->delete();
                
                if($this->db->affected_rows() == 0) {
                    continue;
                }
                
                // 振込手数料分もけす。
                if(!empty($val['charge_id'])) {
                    
                    $this->m_tbl_name = T_CREDIT_DATA;
                    $this->db->where(array('credit_data_id' => $val['charge_id']));
                    $this->delete();
                }
                
                // ステータスUPDATE
                $this->update_reconcile_status($val['credit_mng_id']);
                
                $this->set_receivable_data($val['credit_mng_id'], "cancel");
                
                // 消込管理テーブルの消込金額合計が0だったら、データ消す。
                $this->m_tbl_name = T_CREDIT_MNG;
                $this->db->where(array('credit_mng_id' => $val['credit_mng_id'], 'sum_credit_money' => '0'));
                $this->delete();

            }
            
           
           // トランザクション終了
           $this->db->trans_complete();
           
           log_message('info', '【振込一括消込取消処理   END】');
           
           return true;
            
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
                
                // 請求日
                if(!empty($data['bill_date_from'])) {
                    $condition[] = "date_format(bill_date, '%Y/%m/%d') >= ".$this->db->escape($data['bill_date_from']);
                }
                if(!empty($data['bill_date_to'])) {
                    $condition[] = "date_format(bill_date, '%Y/%m/%d') <= ".$this->db->escape($data['bill_date_to']);
                }
                
                // 入金状態
                if(empty($data['credit_status'])) {
                    $condition[] = "(reconcile_status = '".CREDIT_STATUS_OFF."' OR reconcile_status is null)";
                } else {
                    if($data['credit_status'] == CREDIT_STATUS_OFF) {
                        $condition[] = "(reconcile_status = '".$this->db->escape_like_str($data['credit_status'])."' OR reconcile_status is null)";
                        $condition[] = "(mng.bill_mng_id is null)";
                        
                    } else {
                        $condition[] = "(reconcile_status = '".$this->db->escape_like_str($data['credit_status'])."')";
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
	 * 元に戻す金額の取得
	 *
	 * @access	public
     * @param  int $id
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_cancel_money($id) {
            
            // テーブル設定
            $this->m_tbl_name = T_CREDIT_DATA;
            $this->db->select("reconcile_money");
            $this->db->select("reconcile_type");
            $this->db->select("credit_received_id");
            $this->db->where(array("credit_data_id" => $id));
            
            return $this->select();
            
        }
        
    /**
	 * 消込管理IDの取得
	 *
	 * @access	public
     * @param  int $id
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_mng_id($id) {
            
            // テーブル設定
            $this->m_tbl_name = T_CREDIT_MNG;
            $this->db->select("credit_mng_id");
            $this->db->where(array("bill_mng_id" => $id));
            $res = $this->select();
            
            return $res[0]->credit_mng_id;
            
        }
        
    /**
	 * 消込済みデータの件数を取得
	 *
	 * @access	public
     * @param  string $where
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_cnt($where) {
        
            // テーブル設定
            $this->m_tbl_name = T_BILL_MNG;
            
            $this->m_prefix = "bill";
            
            $this->db->select("count(*) as cnt");
            
            // JOIN句作成
            $this->db->join(T_CREDIT_MNG." mng ", "bill.bill_no=mng.bill_no and mng.delete_flg='".FLG_OFF."'", "LEFT" );
            $this->db->join(V_CREDIT_TRANSFER_DATA." transfer ", "mng.credit_mng_id=transfer.credit_mng_id", "LEFT");
            $this->db->join(V_CREDIT_CHARGE_DATA." charge "
                    , "mng.credit_mng_id=charge.credit_mng_id and transfer.credit_data_id=charge.relate_credit_data_id", "LEFT");
            
            // WHERE句作成
            $this->db->where(array("bill.credit_type" => CREDIT_TYPE_OTHER));
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            $result = $this->select();
            
            return intval($result[0]->cnt);
        }
        

    /**
	 * 消し込みデータの取得
	 *
	 * @access	public
     * @param  string $where
     * @param  int $start
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_data($where, $start=0) {
        
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
            $this->db->select("transfer.credit_received_id");
            $this->db->select("transfer.reconcile_date");
            $this->db->select("transfer.credit_data_id");
            $this->db->select("transfer.reconcile_money as reconcile_money");
            $this->db->select("charge.reconcile_date as charge_reconcile_date");
            $this->db->select("charge.credit_data_id as charge_id");
            $this->db->select("charge.reconcile_money as charge_money");
            
            // JOIN句作成
            $this->db->join(V_CUSTOMER_INFO." customer ", "bill.customer_disp_name=customer.customer_disp_name", "LEFT" );
            $this->db->join(T_CREDIT_MNG." mng ", "bill.bill_no=mng.bill_no and mng.delete_flg='".FLG_OFF."'", "LEFT" );
            $this->db->join(V_CREDIT_TRANSFER_DATA." transfer ", "mng.credit_mng_id=transfer.credit_mng_id", "LEFT");
            $this->db->join(V_CREDIT_CHARGE_DATA." charge "
                    , "mng.credit_mng_id=charge.credit_mng_id and transfer.credit_data_id=charge.relate_credit_data_id", "LEFT");
            
            // WHERE句作成
            $this->db->where("bill.credit_type in ('".CREDIT_TYPE_OTHER."', '".CREDIT_TYPE_BEFORE."')");
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            $data = $this->get_input_condition();
            if($data['credit_status'] == CREDIT_STATUS_ON) {
                // リミット設定
                $this->db->limit(PER_PAGE_CNT, $start);
            }
            
            // ORDER句の設定
            $this->db->order_by("customer.customer_furi", "asc");
            $this->db->order_by("bill.bill_date", "asc");
            
            return $this->select();
        }
        
    /**
	 * 入金データの取得
	 *
	 * @access	public
     * @param  string $name
     * @param  int $id
     * @param  string $status
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_credit_data($name, $id, $status) {
        
            // テーブル設定
            $this->m_tbl_name = T_CREDIT_RECIEVED;
            
            $this->m_prefix = "credit";
            
            $this->db->select("credit.customer_disp_name");
            $this->db->select("credit.credit_received_id");
            $this->db->select("credit.balance_money");
            $this->db->select("credit.credit_date");
            
            // WHERE句作成
            $this->db->where(array("credit.customer_disp_name" => $name));
            
            if($status <> CREDIT_STATUS_ON) {
                $this->db->where("credit.balance_money > 0");
            }
            
            if(!empty($id)) {
                $this->db->where(array("credit.credit_received_id" => $id));
            }
            
            // ORDER句の設定
            $this->db->order_by("credit.credit_date", "asc");            
            $this->db->order_by("credit.balance_money", "asc");
            
            return $this->select();
        }
        
    /**
	 * 表示用の一覧データを取得
	 *
	 * @access public
     * @param  int $total
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function get_disp_list_data(&$total) 
        {
            
            // 検索条件を設定
            $condition = $this->create_search_condition();
            
            $start = $this->uri->segment(4);
            
            // 一覧を取得(請求情報)
            $list_bill = $this->get_list_data($condition, $start);
            
            $total = 0;
            $data = $this->get_input_condition();
            if($data['credit_status'] == CREDIT_STATUS_ON) {
                $total = $this->get_list_cnt($condition);
            }
            
            $i = 0;
            $bill_cnt =0;
            $res = array();
            foreach ($list_bill as $key => $val) {
                
                if($this->_chk_dup_customer($list_bill, $key)) {
                    $bill_cnt = 0;
                } else {
                    $bill_cnt++;
                    $i--;
                }
                
                $res[$i]['customer_disp_name'] = $val->customer_disp_name;
                $res[$i]['credit_received_id'] = $val->credit_received_id;
                $res[$i]['reconcile_status'] = $val->reconcile_status;
                $res[$i]['bill_info'][$bill_cnt]['credit_mng_id'] = $val->credit_mng_id;
                $res[$i]['bill_info'][$bill_cnt]['bill_mng_id'] = $val->bill_mng_id;
                $res[$i]['bill_info'][$bill_cnt]['bill_no'] = $val->bill_no;
                $res[$i]['bill_info'][$bill_cnt]['disp_bill_no'] = get_anchor("/bill/bill_cutoff_print/bill_disp/".$val->bill_no."?win_type=win", $val->bill_no, array("target" => "_blank"));
                $res[$i]['bill_info'][$bill_cnt]['bill_date'] = slash_date($val->bill_date);
                $res[$i]['bill_info'][$bill_cnt]['disp_bill_money'] = money_sep($val->bill_money);
                $res[$i]['bill_info'][$bill_cnt]['bill_money'] = $val->bill_money;
                $res[$i]['bill_info'][$bill_cnt]['del_date'] = slash_date($val->reconcile_date);
                $res[$i]['bill_info'][$bill_cnt]['credit_data_id'] = slash_date($val->credit_data_id);
                $res[$i]['bill_info'][$bill_cnt]['charge_money'] = $val->charge_money;
                $res[$i]['bill_info'][$bill_cnt]['reconcile_money'] = $val->reconcile_money;
                $res[$i]['bill_info'][$bill_cnt]['disp_reconcile_money'] = money_sep($val->reconcile_money);
                $res[$i]['bill_info'][$bill_cnt]['charge_id'] = $val->charge_id;
                
                $i++;
            }
            
            // 入金情報設定
            $credit = array();
            $iCnt = count($res);
            for($i=0; $i<$iCnt; $i++) {
                
                // 入金情報
                $credit = $this->get_credit_data($res[$i]['customer_disp_name'], $res[$i]['credit_received_id'], $res[$i]['reconcile_status']);
                
                // 入金情報
                if(count($credit) == 0) {
                    unset($res[$i]);
                } else {
                    
                    for($j=0; $j<count($credit); $j++) {
                        $res[$i]['credit_info'][$j]['credit_received_id'] = isset($credit[$j]->credit_received_id) ? $credit[$j]->credit_received_id : "";
                        $res[$i]['credit_info'][$j]['credit_date'] = isset($credit[$j]->credit_received_id) ? slash_date($credit[$j]->credit_date) : "";
                        $res[$i]['credit_info'][$j]['disp_balance_money'] = isset($credit[$j]->credit_received_id) ? money_sep($credit[$j]->balance_money) : "";
                        $res[$i]['credit_info'][$j]['balance_money'] = isset($credit[$j]->credit_received_id) ? $credit[$j]->balance_money : "";
                    }
                }
            
            }
            
            // 再採番
            sort($res);

            // 検索条件で設定した物を抽出
            $res = $this->_get_search_result($res);
            
            // 並び替え
            $this->_order_list($res);
            
            return $res;
            
        }
        
    /**
	 * 作成したリストを並び替える
	 *
	 * @access private
     * @param  array $res
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _order_list(&$res)
        {
             
             $i= 0;
             foreach ($res as $val) {
                 usort($val['credit_info'], array($this, 'compare_by_date'));
                 unset($res[$i]['credit_info']);
                 $res[$i]['credit_info'] = $val['credit_info'];
                 if(isset($_POST['regist'])) {
                     $j = 0;
                     $post = $_POST['seq'];
                     foreach ($res[$i]['credit_info'] as $val) {
                         
                         if(isset($_POST['seq']["_".$val['credit_received_id']])) {
                             $seq = $_POST['seq']["_".$val['credit_received_id']];
                             $res[$i]['credit_info'][$j]['seq'] = $seq;
                             unset($post["_".$val['credit_received_id']]);
                         } else {
                             $res[$i]['credit_info'][$j]['seq'] = "";
                         }
                         $j++;
                     }

                     sort($post);
                     $cnt=0;
                     foreach ($res[$i]['credit_info'] as $key=>$val) {
                         if($val['seq'] != "") continue;
                         $res[$i]['credit_info'][$key]['seq'] = $post[$cnt];
                         $cnt++;
                     }

                     
                     usort($res[$i]['credit_info'], array($this, 'compare_by_seq'));

                     
                 }

                 $i++;
             }
            
             
        }
        
    /**
	 * usortの自作関数
	 *
	 * @access private
     * @param  array $a
     * @param  array $b
	 * @return array
	 * @author kita Yasuhiro
	 */
        function compare_by_date($a, $b) {
            
            $result = strcmp($a["credit_date"], $b["credit_date"]);
            
            if(empty($a["credit_date"])) return $result * -1;
            if(empty($b["credit_date"])) return $result * -1;
            
            if($result == 0) {
                $result = strcmp($a['balance_money'], $b['balance_money']);
            }
            
            return $result;
        }
        
    /**
	 * usortの自作関数
	 *
	 * @access private
     * @param  array $a
     * @param  array $b
	 * @return array
	 * @author kita Yasuhiro
	 */
        function compare_by_seq($a, $b) {
            
            $result = $a["seq"] - $b["seq"];
            
            if($result == 0) {
                $result = strcmp($a['credit_date'], $b['credit_date']) * -1;
            }
            
            return $result;
        }
        
    /**
	 * 得意先名称のブレークチェック
	 *
	 * @access private
     * @param  array $list
     * @param  int $key
	 * @return array
	 * @author kita Yasuhiro
	 */
         private function _chk_dup_customer($list, $key) 
        {
            if($key == 0) return true;
            
            if($list[$key]->customer_disp_name == $list[$key-1]->customer_disp_name) {
                return false;
            } else {
                return true;
            }
            
        }
        
    /**
	 * 配列の検索
	 *
	 * @access private
     * @param  array $ary
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_search_result($ary)
        {
            
            $res = array();

            
            // 条件によって配列を検索する
            $data = $this->get_input_condition();
            switch ($data["other_rb"]) {
                case "1" :   $res =  $this->_get_eq_data($ary); break;
                case "2" :   $res = $this->_get_error_little_data($ary); break;
                case "3" :   $res =  $this->_get_error_large_data($ary); break;
                case "4" :   $res =  $ary; break;
                default :  $res =  $this->_get_eq_data($ary); break;
            }
            
            // 請求テーブルと入金テーブルの配列件数を合わせる
            foreach ($res as $key => $value) {
                
                $bill_cnt = count($value['bill_info']);
                $credit_cnt = count($value['credit_info']);
                
                if($bill_cnt < $credit_cnt) {
                    $diff_cnt = $credit_cnt - $bill_cnt;
                    for($i=0; $i<$diff_cnt; $i++) {
                        $res[$key]['bill_info'][$bill_cnt + $i]['credit_mng_id'] = "";
                        $res[$key]['bill_info'][$bill_cnt + $i]['bill_mng_id'] = "";
                        $res[$key]['bill_info'][$bill_cnt + $i]['disp_bill_no'] = "";
                        $res[$key]['bill_info'][$bill_cnt + $i]['bill_no'] = "";
                        $res[$key]['bill_info'][$bill_cnt + $i]['bill_date'] = "";
                        $res[$key]['bill_info'][$bill_cnt + $i]['disp_bill_money'] = "";
                        $res[$key]['bill_info'][$bill_cnt + $i]['bill_money'] = "";
                        $res[$key]['bill_info'][$bill_cnt + $i]['del_date'] = "";
                        $res[$key]['bill_info'][$bill_cnt + $i]['credit_data_id'] = "";
                        $res[$key]['bill_info'][$bill_cnt + $i]['charge_money'] = "";
                        $res[$key]['bill_info'][$bill_cnt + $i]['reconcile_money'] = "";
                        $res[$key]['bill_info'][$bill_cnt + $i]['disp_reconcile_money'] = "";
                        $res[$key]['bill_info'][$bill_cnt + $i]['charge_id'] = "";
                    }
                } else if($bill_cnt > $credit_cnt) {
                    $diff_cnt = $bill_cnt - $credit_cnt;
                    for($i=0; $i<$diff_cnt; $i++) {
                        $res[$key]['credit_info'][$credit_cnt + $i]['credit_received_id'] =  "";
                        $res[$key]['credit_info'][$credit_cnt + $i]['credit_date'] = "";
                        $res[$key]['credit_info'][$credit_cnt + $i]['disp_balance_money'] = "";
                        $res[$key]['credit_info'][$credit_cnt + $i]['balance_money'] = "";
                    }
                }
                
                if($bill_cnt == 0 && $credit_cnt == 0) {
                    unset($res[$key]);
                }
                
                
            }
            
            sort($res);
            return $res;
        
        }
        
    /**
	 * 請求額と入金額が一致するデータを取得
	 *
	 * @access private
     * @param  array $ary
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_eq_data($ary) 
        {
            
            $res = $ary;
            
            $credit_res = array();
            foreach ($ary as $key => $val) {
                
                foreach ($val['bill_info'] as $key_bill => $bill) {
                    
                    $bFlg = false;
                    foreach ($val['credit_info'] as $credit) {
                        
                        if($bill['bill_money'] == $credit['balance_money']) {
                            
                            $flg = false;
                            foreach ($credit_res as $credit_value) {
                                if($credit_value['credit_received_id'] == $credit['credit_received_id']) {
                                    $flg = true;
                                    $bFlg = true;
                                }
                            }
                            if($flg == false) {
                                $credit_res[] = $credit;
                                $bFlg = true;
                            }
                        }
                        
                    }
                    
                    if($bFlg == false) {
                        unset($res[$key]['bill_info'][$key_bill]);
                    }
                    
                }
                
                unset($res[$key]['credit_info']);
                $res[$key]['credit_info'] = $credit_res;
                sort($res[$key]['bill_info']);
                $credit_res = array();
                
            }
            
            return $res;
            
        }
        
    /**
	 * 請求額と入金額の差が1,000円未満のデータを取得
	 *
	 * @access private
     * @param  array $ary
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_error_little_data($ary) 
        {
            
            $res = $ary;
            
            $credit_res = array();
            foreach ($ary as $key => $val) {
                
                foreach ($val['bill_info'] as $key_bill => $bill) {
                    
                    $bFlg = false;
                    foreach ($val['credit_info'] as $credit) {
                        
                        $little = $bill['bill_money'] - $credit['balance_money'];
                        if($little < 0 ) $little = $little * -1;
                        
                        if($little < 1000) {
                            $credit_res[] = $credit;
                            $bFlg = true;
                        }
                        
                    }
                    
                    if($bFlg == false) {
                        unset($res[$key]['bill_info'][$key_bill]);
                    }
                    
                }
                
                $credit_res = array_unique($credit_res, SORT_REGULAR);
                sort($credit_res);
                unset($res[$key]['credit_info']);
                $res[$key]['credit_info'] = $credit_res;
                sort($res[$key]['bill_info']);
                $credit_res = array();
                
            }
            
            return $res;
            
        }
        
    /**
	 * 請求額と入金額の差が1,000円以上のデータを取得
	 *
	 * @access private
     * @param  array $ary
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_error_large_data($ary) 
        {
            
            $res = $ary;
            
            $credit_res = array();
            foreach ($ary as $key => $val) {
                
                foreach ($val['bill_info'] as $key_bill => $bill) {
                    
                    $bFlg = false;
                    foreach ($val['credit_info'] as $credit) {
                        
                        $little = $bill['bill_money'] - $credit['balance_money'];
                        if($little < 0 ) $little = $little * -1;
                        
                        if($little > 1000) {
                            $credit_res[] = $credit;
                            $bFlg = true;
                        }
                        
                    }
                    
                    if($bFlg == false) {
                        unset($res[$key]['bill_info'][$key_bill]);
                    }
                    
                }
                
                $credit_res = array_unique($credit_res, SORT_REGULAR);
                sort($credit_res);
                unset($res[$key]['credit_info']);
                $res[$key]['credit_info'] = $credit_res;
                sort($res[$key]['bill_info']);
                $credit_res = array();
                
            }
            
            return $res;
            
        }
        
    /**
	 * 登録データを取得
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_regist_data() 
        {
            
            $res = array();
            $input = $_POST;
            
            $i=0;
            $sum_money = 0;
            foreach ($input['set_target_chk'] as $index) {
                
                $target = array_keys($input['credit_received_id'], $index);
                
                // 消込管理データ
                $res[$i]['mng']['bill_mng_id'] = $input['bill_mng_id'][$target[0]];         // 請求管理ID
                $res[$i]['mng']['bill_no'] = $input['bill_no'][$target[0]];
                $res[$i]['mng']['bill_money'] = $input['bill_money'][$target[0]];
                
                if($input['bill_money'][$target[0]] < $input['balance_money'][$target[0]]) {
                    $input['balance_money'][$target[0]] = $input['bill_money'][$target[0]];
                }
                
                // 消込データ
                $res[$i]['data'][0]['reconcile_date'] = $input['del_date'][$target[0]];
                $res[$i]['data'][0]['reconcile_money'] = $input['balance_money'][$target[0]];
                $res[$i]['data'][0]['credit_received_id'] = $input['credit_received_id'][$target[0]];
                $sum_money = $sum_money + $input['balance_money'][$target[0]];
                
                $res[$i]['data'][0]['reconcile_type'] = RECONCILE_TYPE_FURI;
                if(!empty($input['charge_money'][$target[0]])) {
                    $res[$i]['data'][1]['reconcile_date'] = $input['del_date'][$target[0]];
                    $res[$i]['data'][1]['reconcile_money'] = $input['charge_money'][$target[0]];
                    $res[$i]['data'][1]['reconcile_type'] = RECONCILE_TYPE_FURI_TESU;
                    $res[$i]['data'][1]['credit_received_id'] = $input['credit_received_id'][$target[0]];
                    $sum_money = $sum_money + $input['charge_money'][$target[0]];
                }
                
                $res[$i]['mng']['sum_credit_money'] = $sum_money;
                $res[$i]['mng']['sum_balance_money'] = $input['bill_money'][$target[0]] - $sum_money;
                
                $i++;
                $sum_money = 0;
            }
            
            return $res;
            
        }
        
    /**
	 * 削除用データを取得
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_delete_data() 
        {
            
            $res = array();
            $input = $_POST;
            
            $i=0;
            foreach ($input['set_target_chk'] as $index) {
                $target = array_keys($input['credit_data_id'], $index);
                
                // 戻す金額を取得
                $money = $this->get_cancel_money($input['credit_data_id'][$target[0]]);
                $sum_money = 0;
                foreach ($money as $value) {
                    if($value->reconcile_type == RECONCILE_TYPE_FURI) {
                        $res[$i]['transfer_money'] = $value->reconcile_money;
                    }
                    $sum_money = $sum_money + $value->reconcile_money;
                }
                $res[$i]['sum_money'] = $sum_money;
                $res[$i]['credit_mng_id'] = $input['credit_mng_id'][$target[0]];
                $res[$i]['credit_received_id'] = $money[0]->credit_received_id;
                $res[$i]['credit_data_id'] = $input['credit_data_id'][$target[0]];
                $res[$i]['charge_id'] = $input['charge_id'][$target[0]];
                $res[$i]['charge_money'] = empty($input['charge_money'][$target[0]]) ? 0 : $input['charge_money'][$target[0]];
                
                $i++;
            }
            
            return $res;
            
        }

	/**
	 * 請求書情報の件数を取得する
	 *
	 * @access public
	 * @param array $bill_ary
	 * @return array
	 */
		public function get_bill_count($bill_ary)
		{
			$this->m_tbl_name = T_BILL_MNG;
			$this->db->select('bill_mng_id');
			$this->db->where_in('bill_mng_id', $bill_ary);

			return $this->select();

		}

	/**
	 * 入金情報の件数を取得する
	 *
	 * @access public
	 * @param array $received_ary
	 * @return array
	 */
		public function get_received_count($received_ary)
		{
			$this->m_tbl_name = T_CREDIT_RECIEVED;
			$this->db->select('credit_received_id');
			$this->db->where_in('credit_received_id', $received_ary);

			return $this->select();

		}
}

/* End of file transfer_del_all_mdl.php */
/* Location: ./application/model/credit/transfer_del_all_mdl.php */