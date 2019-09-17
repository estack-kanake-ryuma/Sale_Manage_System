<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * My date helper
 *
 * 独自の日付処理のhelperファイル
 *
 * @package	application
 * @subpackage helpers
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */

if ( ! function_exists('get_cutoff_date'))
{
	/**
	 * get_cutoff_date_from
	 *
     * 締日から開始年月日を判定し返却する
	 *
	 * @access	public
     * @param	string $bill_date
	 * @param	string $cutoff_date
	 * @param  string $type
	 * @return	string
	 */
	function get_cutoff_date($bill_date, $cutoff_date, $type)
	{
            
            if(empty($cutoff_date)) return null;
            
            $res = "";
            $date_arry = explode("/", $bill_date);
            
            // ちゃんとした月末日取得
            $end_day = $cutoff_date;
            if($end_day == "31") {
                $end_day = get_month_endday($date_arry[0], $date_arry[1]);
            }
            
            $month = $date_arry[1];
            If($cutoff_date < $date_arry[2]) {
                $month = date("m", strtotime($bill_date."1 month"));
            }
            
            if($type == "b") {
                $res = compute_month($date_arry[0], $month, $cutoff_date, -1);
                
                return date("Y/m/d", strtotime($res."1 day"));
            } else {
                if(strlen($end_day) == 1) $end_day = "0".$end_day;
                $res = $date_arry[0]."/".$month."/".$end_day;
                return $res;
            }
            
	}
}

if ( ! function_exists('compute_month'))
{
    /**
     * 年月日と加算月からnヶ月後、nヶ月前の日付を求める
     *
     * @param $year 年
     * @param $month 月
     * @param $day 日
     * @param $addMonths 加算月。マイナス指定でnヶ月前も設定可能
     * @return string
     */
    function compute_month($year, $month, $day, $addMonths) 
    {
        $month += $addMonths;
        
        if(empty($day)) $day = "31";
        
        $endDay = get_month_endday($year, $month);
        
        if($day > $endDay) $day = $endDay;
        $dt = mktime(0, 0, 0, $month, $day, $year);
        
        return date("Y/m/d", $dt);
    }
}

if ( ! function_exists('get_month_endday'))
{
    /**
     * 年月を指定して月末日を求める関数
     *
     * @param string $year 年
     * @param string $month 月
     * @return string
     */
    function get_month_endday($year, $month) {
        
        //mktime関数で日付を0にすると前月の末日を指定したことになります
        //$month + 1 をしていますが、結果13月のような値になっても自動で補正されます
        $dt = mktime(0, 0, 0, $month + 1, 0, $year);
        
        return date("d", $dt);
    }
}

/* End of file MY_date_helper.php */
/* Location: ./application/helpers/MY_date_helper.php */