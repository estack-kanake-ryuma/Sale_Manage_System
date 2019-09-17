<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MY Form helper
 *
 * 独自のForm helperファイル
 *
 * @package	application
 * @subpackage helpers
 * @author	Kita Yasuhiro
 * @link	http://www.datalyze.co.jp
 */

if ( ! function_exists('form_error_c_ary'))
{
	/**
	 * Form Error Custom Array
	 *
	 * エラー表示処理のカスタム処理の配列時
	 *
	 * @access	public
	 * @param	string $field
	 * @param	string $num
	 * @param	striing $err_place_id
	 * @return	string
	 */
	function form_error_c_ary($field = '', $num='', $err_place_id='')
	{
            if (FALSE === ($OBJ =& _get_validation_object())) {
                return '';
            }

            $prefix = '<p class="error"';
            if($err_place_id !== '') {
                $prefix .= 'errid="'.$err_place_id.'"';
            }
            $prefix .= '>';
            $suffix = '</p>';

            return $OBJ->error_ary($field, $num, $prefix, $suffix);
	}
}

if ( ! function_exists('form_error_disp_ary'))
{
	/**
	 * form_error_disp_ary
	 *
	 * Nameに配列が使用してあるメッセージを集約し出力する
	 *
	 * @access	public
	 * @param	array $ary
	 * @return	string
	 */
	function form_error_disp_ary($keys)
	{
            if (FALSE === ($obj =& _get_validation_object())) {
                return '';
            }
            
            $err = array();
            foreach ($keys as $val) {   
                $i=1;
                
                if (!isset($obj->_field_data[$val."[]"]["error"])) continue;
                
                if (!is_array($obj->_field_data[$val."[]"]["error"])) continue;
                
                foreach($obj->_field_data[$val."[]"]["error"] as $index => $val2) {
                    if($val2 != "") {
                        $err[$val2][] = $val."_td".($index + 1);
                        $i++;
                    }
                }
            }
            
            if(count($err) == 0) return "";
            
            $err_msg = "";
            foreach ($err as $key => $val) {
                $errid = "";
                $prefix = '<p class="error"';
                
                foreach ($val as $val2) {
                    if($val !== '') {
                        $errid .= $val2." ";
                    }
                }
                if($errid != "") {
                    $prefix .= 'errid="'.$errid.'"';
                }
                $prefix .= '>';
                $suffix = '</p>';
                
                $err_msg .= $prefix.$key.$suffix."\n";
            }
            
            return $err_msg;
            
            
        }
    
}


if ( ! function_exists('form_error_c'))
{
	/**
	 * Form Error Custom
	 *
	 * エラー表示処理のカスタム処理
	 *
	 * @access	public
	 * @param	string $field
	 * @param	string $err_place_id
	 * @return	string
	 */
	function form_error_c($field = '', $err_place_id='')
	{
            
            
                if (FALSE === ($OBJ =& _get_validation_object())) {
			return '';
		}

		$prefix = '<p class="error"';
                
		if($err_place_id !== '') {
                    $prefix .= 'errid="'.$err_place_id.'"';
		}
                
		$prefix .= '>';
		$suffix = '</p>';

		return $OBJ->error($field, $prefix, $suffix);
	}
}

if ( ! function_exists('set_value_c'))
{
    
	/**
	 * set_value_c
	 *
	 * セットバリューのカスタマイズ版
	 *
	 * @access	public
	 * @param	string $field
	 * @param	array $default
	 * @return	string
	 */
	function set_value_c($field = '', $default = array(), $index = null)
	{
            
            if($index !== null) {
                if(isset($default[$index])) {
                    $default = $default[$index];
                }
            }
                
            if(is_array($default)) {
                // 渡された配列からデフォルト値を検索し設定
                $default = array_val($default, $field);
            }
            
            if (FALSE === ($OBJ =& _get_validation_object())) {

                    if ( ! isset($_POST[$field])) {
                            return $default;
                    }

                    return form_prep($_POST[$field], $field);
            }

            return form_prep($OBJ->set_value($field, $default), $field);
            
        }
    
}

// ------------------------------------------------------------------------

/**
 * Set Select_c
 *
 * セットセレクトのカスタマイズ版
 *
 * @access	public
 * @param	string
 * @param	string
 * @param	array or bool
 * @return	string
 */
if ( ! function_exists('set_select_c'))
{
	function set_select_c($field = '', $value = '', $default = FALSE, $index = null)
	{
            
            if($index !== null) {
                if(isset($default[$index])) {
                    $default = $default[$index];
                }
            }
            
            // デフォルト値の設定を行う。
            if (is_array($default)) {
                $selected_val = array_val($default, $field);
                $default = selected_val($value, $selected_val);
            }
            
            
            $OBJ =& _get_validation_object();

            if ($OBJ === FALSE) {
                    if ( ! isset($_POST[$field])) {
                        if (count($_POST) === 0 AND $default == TRUE) {
                                return ' selected="selected"';
                        }
                        return '';
                    }

                    $field = $_POST[$field];

                    if (is_array($field)) {
                            if ( ! in_array($value, $field)) {
                                    return '';
                            }
                    } else {

                        if (($field == '' OR $value == '') OR ($field != $value)) {
                                return '';
                        }
                    }
                    return ' selected="selected"';
            }

            return $OBJ->set_select($field, $value, $default);
	}
}

// ------------------------------------------------------------------------

/**
 * Set Checkbox
 *
 * Let's you set the selected value of a checkbox via the value in the POST array.
 * If Form Validation is active it retrieves the info from the validation class
 *
 * @access	public
 * @param	string
 * @param	string
 * @param	bool
 * @return	string
 */
if ( ! function_exists('set_checkbox_c'))
{
	function set_checkbox_c($field = '', $value = '', $default = FALSE)
	{
            
            if (is_array($default)) {
                $search = str_replace("[]", "", $field);
                foreach ($default as $key => $val) {
                    
                    if(is_string($val)) {
                        if($value == $default[$field]) { 
                            $default = true;
                        }
                    } else {
                        if($val->$search == $value) {
                            $default = true;
                        }
                        
                    }
                    
                }
            }

            $OBJ =& _get_validation_object();

            if ($OBJ === FALSE) {
                if ( ! isset($_POST[$field])) {
                        if (count($_POST) === 0 AND $default == TRUE) {
                            return ' checked="checked"';
                        }
                        return '';
                }

                $field = $_POST[$field];

                    if (is_array($field)) {
                            if ( ! in_array($value, $field)) {
                                return '';
                            }
                    } else {
                        if (($field == '' OR $value == '') OR ($field != $value)) {
                            return '';
                        }
                    }

                    return ' checked="checked"';
		}

		return $OBJ->set_checkbox($field, $value, $default);
	}
}


// ------------------------------------------------------------------------

/**
 * Set Radio
 *
 * Let's you set the selected value of a radio field via info in the POST array.
 * If Form Validation is active it retrieves the info from the validation class
 *
 * @access	public
 * @param	string
 * @param	string
 * @param	bool
 * @return	string
 */
if ( ! function_exists('set_radio_c'))
{
        function set_radio_c($field = '', $value = '', $default = FALSE)
	{
            // デフォルト値の設定を行う。
            if (is_array($default)) {
                
                if(count($default) == 0) {
                    
                } else {
                    $selected_val = array_val($default, $field);
                    $default = selected_val($value, $selected_val);
                }
            }
            
            $OBJ =& _get_validation_object();

            if ($OBJ === FALSE) {
                if ( ! isset($_POST[$field])) {
                    if (count($_POST) === 0 AND $default == TRUE) {
                            return ' checked="checked"';
                    }
                    return '';
                }

                $field = $_POST[$field];

                if (is_array($field)) {
                    if ( ! in_array($value, $field)) {
                        return '';
                    }
                } else {
                    if (($field == '' OR $value == '') OR ($field != $value)) {
                            return '';
                    }
                }
                return ' checked="checked"';
            }

            return $OBJ->set_radio($field, $value, $default);
	}
}

if ( ! function_exists('selected_val'))
{
	/**
	 * Select Val
	 *
	 * セレクトボックス or ラジオボタンの選択、未選択の判別結果を取得
	 *
	 * @access	public
	 * @param	string $value
	 * @param	string $default
	 * @param  boolean $defaulg_flg
	 * @return	boolean
	 */
	function selected_val($value, $default, $defaulg_flg=false)
	{
		return ($value == $default)? true: $defaulg_flg;
	}
}

if ( ! function_exists('get_row_btn_name')) 
{
	/**
	 * get_row_btn_name
	 *
	 * ボタン名を返却する
	 *
	 * @access	public
	 * @param	string $index
	 * @return	string
	 */
	function get_row_btn_name($row_length, $index, $cnt=1)
	{
            if($cbt == 1) {
                if($row_length > 1) return "削除";

                return ($index == 1)? "クリア": "削除";
            } else {
                
                if($row_length > $cnt) return "削除";
                
                return ($index <= $cnt)? "クリア": "削除";
            }
            
	}
}

if ( ! function_exists('set_select_num'))
{
	/**
	 * Set Select
	 *
	 * Let's you set the selected value of a <select> menu via data in the POST array.
	 * If Form Validation is active it retrieves the info from the validation class
	 *
	 * @access	public
	 * @param	string $field
	 * @param	string $value
	 * @param	string $num
	 * @param	bool $default
	 * @return	string
	 */
	function set_select_num($field = '', $value = '', $default = FALSE, $num = '')
	{
            
            if($num !== '') {
                if(isset($default[$num])) {
                    $default = $default[$num];
                }
            }
            
            // デフォルト値の設定を行う。
            if (is_array($default)) {
                $selected_val = array_val($default, $field);
                $default = selected_val($value, $selected_val);
            }
            
            $OBJ =& _get_validation_object();

            if ($OBJ === FALSE) {
                    if ( ! isset($_POST[$field])) {
                        if (count($_POST) === 0 AND $default == TRUE) {
                                return ' selected="selected"';
                        }
                        return '';
                    }

                    $field = $_POST[$field];

                    if (is_array($field)) {
                        if ( ! in_array($value, $field)) {
                                return '';
                        }
                    } else {
                        if (($field == '' OR $value == '') OR ($field != $value)) {
                                return '';
                        }
                    }

                    return ' selected="selected"';
            }

            return $OBJ->set_select_num($field, $value, $num, $default);
	}
}

if ( ! function_exists('get_proc_ctrl'))
{
    	/**
	 * get_proc_ctrl
	 *
	 * 処理月によるボタンの非表示を判断し返却
	 *
	 * @access	public
	 * @param	string $date
	 * @return	string
	 */
	function get_proc_ctrl($date)
	{
            
            $ci =& get_instance();
            $proc = $ci->session->userdata(SS_KEY_PROC_MONTH);
            
            $target = date("Ym", strtotime($date));
            
            if($proc > $target){
                return "disabled=disabled";
            } 
            
            return "";
        }
    
}

if ( ! function_exists('get_proc_month_ctrl'))
{
    	/**
	 * get_proc_ctrl
	 *
	 * 処理月によるボタンの非表示を判断し返却
	 *
	 * @access	public
	 * @param	string $month
	 * @return	string
	 */
	function get_proc_month_ctrl($month)
	{
            
            $val = str_replace("/", "", $month);
            if(strlen($val) != 6) return "";
            
            $val = $val."01";
            
            $ci =& get_instance();
            $proc = $ci->session->userdata(SS_KEY_PROC_MONTH);
            
            $target = date("Ym", strtotime($val));
            
            if($proc > $target){
                return "disabled=disabled";
            } 
            
            return "";
        }
    
}

if ( ! function_exists('get_status_ctrl'))
{
    	/**
	 * get_proc_ctrl
	 *
	 * 処理月によるボタンの非表示を判断し返却
	 *
	 * @access	public
	 * @param	string $status
	 * @return	string
	 */
	function get_status_ctrl($status)
	{
            
            if($status == DATA_TYPE_CREDIT || $status == DATA_TYPE_CLOSE){
                return "disabled=disabled";
            } 
            
            return "";
        }
    
}

if ( ! function_exists('get_bill_status_ctrl'))
{
    	/**
	 * get_proc_ctrl
	 *
	 * 処理月によるボタンの非表示を判断し返却
	 *
	 * @access	public
	 * @param	string $date
	 * @param	string $id
	 * @param	striing $cutoff_flg
	 * @return	string
	 */
	function get_bill_status_ctrl($date, $id, $cutoff_flg=true)
	{
            
            $ci =& get_instance();
            
            $proc = $ci->session->userdata(SS_KEY_PROC_MONTH);
            
            $target = date("Ym", strtotime($date));
            
            if($proc > $target) {
                return "disabled=disabled";
            } else {
                
                if(!empty($id)) {
                    return "disabled=disabled";
                }
                
            }
            
            return "";
        }
    
}

if ( ! function_exists('get_cutoff_cancel_ctrl'))
{
    	/**
	 * get_proc_ctrl
	 *
	 * 処理月によるボタンの非表示を判断し返却
	 *
	 * @access	public
	 * @param	string $field
	 * @param	string $num
	 * @param	striing $err_place_id
	 * @return	string
	 */
	function get_cutoff_cancel_ctrl($date)
	{
            
            $ci =& get_instance();
            
            $proc = $ci->session->userdata(SS_KEY_PROC_MONTH);
            
            $target = date("Ym", strtotime($date));
            
            if($proc <= $target) {
                return "disabled=disabled";
            }
            
            return "";
        }
    
}

if ( ! function_exists('get_bill_status_btn_ctrl'))
{
    	/**
	 * get_bill_status_btn_ctrl
	 *
	 * 処理月によるボタンの非表示を判断し返却
	 *
	 * @access	public
	 * @param	string $date
	 * @param	string $id
	 * @param	striing $cutoff_flg
	 * @return	string
	 */
	function get_bill_status_btn_ctrl($date, $id, $credit_id)
	{
            
            $ci =& get_instance();
            
            $proc = $ci->session->userdata(SS_KEY_PROC_MONTH);
            
            $target = date("Ym", strtotime($date));
            
            if($proc > $target) {
                return "disabled=disabled";
            } else {
                if(empty($id)) {
                    return "disabled=disabled";
                }
                
                if(!empty($credit_id)) {
                    return "disabled=disabled";
                }
                
            }
            
            return "";
        }
    
}


    

/* End of file MY_form_helper.php */
/* Location: ./application/helpers/MY_form_helper.php */