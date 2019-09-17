<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MY String helper
 *
 * 独自のString helperファイル
 *
 * @package	application
 * @subpackage helpers
 * @author	Kita Yasuhiro
 * @link	http://www.datalyze.co.jp
 */

if ( ! function_exists('slash_date'))
{
	/**
	 * Slash date
	 *
	 * 日付をスラッシュ区切りに変換する。またデフォルト値の場合は空を返す
	 *
	 * @access	public
	 * @param	string $value
	 * @return	string
	 */
	function slash_date($value)
	{
            if($value == MAX_DATE) {
                return "未定";
            }
            
            return ($value == DATE_NULL)? '': str_replace('-', '/', $value);
	}
}

if ( ! function_exists('change_date_format'))
{
	/**
	 * Change date format
	 *
	 * 日付をスラッシュ区切りに変換する。またデフォルト値の場合は空を返す
	 *
	 * @access	public
	 * @param	string $date
	 * @param	string $format
	 * @return	string
	 */
	function change_date_format($date, $format)
	{
		if(strlen($date) != 10) {
			return $date;
		}

		$date_ary = explode('/', $date);
		if(count($date_ary) != 3)
		{
			return $date;
		}

		$date = str_replace('/', '-', $date);

		return date($format, strtotime(date($date)));

	}
}

if ( ! function_exists('phone_number'))
{
	/**
	 * Phone number
	 *
	 * 電話番号形式の文字の形成を行う
	 *
	 * @access	public
	 * @param	string $num1
	 * @param	string $num2
	 * @param	string $num3
	 * @return	string
	 */
	function phone_number($num1, $num2, $num3)
	{
		if(!empty($num1) && !empty($num2) && !empty($num3)) {
			return $num1.'-'.$num2.'-'.$num3;
		}

		return '';
	}
}


if ( ! function_exists('post_number'))
{
	/**
	 * Post number
	 *
	 * 郵便番号の文字の形成を行う
	 *
	 * @access	public
	 * @param	string $num1
	 * @param	string $num2
	 * @return	string
	 */
	function post_number($num1, $num2)
	{
		if(!empty($num1) && !empty($num2)) {
			return $num1.'-'.$num2;
		}

		return '';
	}
}

if ( ! function_exists('money_sep'))
{
	/**
	 * Money Sep
	 *
	 * 金額の表示形式に変換する
	 *
	 * @access	public
	 * @param	string $value
	 * @return	string
	 */
	function money_sep($value)
	{
		if(is_numeric($value)) {
			return number_format($value);
		} else if(is_float($value)) {
                        $position = strpos($value, '.');
			return number_format($value, strlen($value)-$position-1, '.');
		}

		return $value;
	}
}


if ( ! function_exists('erase_money_sep'))
{
	/**
	 * Erase Money Sep
	 *
	 * 金額のカンマを取り除く
	 *
	 * @access	public
	 * @param	string $value
	 * @return	string
	 */
	function erase_money_sep($value)
	{
            if(!is_string($value)) return $value;

            return str_replace(',', '', $value);
	}
}


if ( ! function_exists('clip_str'))
{
	/**
	 * Clip Str
	 *
	 * 文字列の省略表示
	 *
	 * @access	public
	 * @param	string $str
	 * @param	int $count
	 * @return	string
	 */
	function clip_str($str, $count)
	{
		return (mb_strlen($str) > $count)? mb_substr($str, 0, $count).'…' : $str;
	}
}

if ( ! function_exists('address_str')) {
	/**
	 * address_str
	 *
	 * 住所と建物名を連結し返却する
	 *
	 * @access	public
	 * @param	string $num1
	 * @param	string $num2
	 * @return	string
	 */
	function address_str($addr, $buil_name, $break_flg = false)
	{
            if(empty($addr) && empty($buil_name)) {
                return '';
            } else {
                if($break_flg) {
                    return $addr."<br />".$buil_name;
                } else {
                    return $addr.$buil_name;
                }

            }
            return '';
	}
}
        
if ( ! function_exists('cutoff_date_str')) 
{
    	/**
	 * cutoff_date_str
	 *
	 * 締日の表示文字列を返却する
	 *
	 * @access	public
	 * @param	string $val
	 * @return	string
	 */
         function cutoff_date_str($val)
         {
             if(empty($val)){
                 return "未設定";
             } else {
                 
                 if($val == "31") {
                     return "月末";
                 } else {
                     return $val."日";
                 }
                 
             }
             
             return '';
             
         }

}

if ( ! function_exists('card_print_str'))
{
        /**
	 * card_print_str
	 *
	 * 納品書印字区分表示文字列を返却
	 *
	 * @access	public
	 * @param	string $val
	 * @return	string
	 */
        function card_print_str($val) {
        
            if($val == FLG_OFF) {
                return "しない";
            } else if($val == FLG_ON) {
                return "する";
            } else {
                return "";
            }
            
        }
    
    
}

if ( ! function_exists('cnt_info_str')) 
{
    	/**
	 * cnt_info_str
	 *
	 * 一覧の件数文字列を作成し返却
	 *
	 * @access	public
	 * @param	string $val
	 * @return	string
	 */
         function cut_info_str($total, $start, $end) {
         
            if(empty($total) OR empty($end)) {
                return "";
            }
            
            if(empty($start)) {
                $start = 0;
            }
            
            return "全".$total."件".nbs(1).($start + 1)."件目～".($start+$end)."件目を表示";
             
         }
}

if ( ! function_exists('change_per_str')) 
{
    
    	/**
	 * change_per_str
	 *
	 * ％表記の文字列を返却
	 *
	 * @access	public
	 * @param	string $val
	 * @return	string
	 */
         function change_per_str($val) {
         
            if(empty($val)) {
                return "";
            }
            return change_tax_intval($val)."%";
             
         }
}

if ( ! function_exists('explode_val_str')) 
{
    
  	/**
	 * explode_val_str
	 *
	 * 分割した配列の指定された文字列を返却する
	 *
	 * @access	public
	 * @param $str string
     * @param $id integer
     * @param $name string
     * @return string
	 */
         function explode_val_str($str, &$id, &$name) {
         
             $ary = explode(",", $str);
             
             // 分割した結果配列が一つしかない場合
             if(count($ary) == 1) return $str;
             
             $id = $ary[0];
             $name = $ary[1];
         }
}

if ( ! function_exists('get_range_str')) 
{
    
    	/**
	 * 指定された期間の文言を返却する
	 *
	 * @access	public
	 * @param	string $val
	 */
         function get_range_str($month, $date, $target_from, $target_to="") {
         
             if(empty($date)) {
                 
                 $date_ary = explode("/", $month);
                 
                 $from = $month."/01";
                 $to = $month."/".get_month_endday($date_ary[0], $date_ary[1]);
                 
                 if($month == substr($target_to, 0, 7)) {
                     $to = $target_to;
                 }
                 
                 return "【".$from." ～ ".$to."  計】";
                 
             } else {
                 
                 $from = get_cutoff_date($month."/01", $date, "b");
                 
                 if($from <= $target_from) {
                    $from =  $target_from;
                 }
                 
                 $to = get_cutoff_date($month."/01", $date, "a");
                 
                 if($to >= $target_to) {
                     $to = $target_to;
                 }
                 
                 return "【".$from." ～ ".$to."  計】";
             }
             
         }
}

if ( ! function_exists('convert_sep_date'))
{

	/**
	 * convert_sep_date
	 *
	 * 区切り文字でくぎられていない日付(8文字日付)に
	 * 区切り文字を追加する
	 *
	 * @access	public
	 * @param  string $str
	 * @param  string $delimiter
	 * @return string
	 */
	function convert_sep_date($str, $delimiter='/') {

		// ８文字以外の場合は変換しない
		if(strlen($str) != 8) {
			return $str;
		}

		return substr($str, 0 ,4).$delimiter.substr($str, 4, 2).$delimiter.substr($str, 6, 2);
	}
}



/* End of file MY_string_helper.php */
/* Location: ./application/helpers/MY_string_helper.php */