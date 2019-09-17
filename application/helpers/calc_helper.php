<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * calc helper
 *
 * 独自の計算処理のhelperファイル
 *
 * @package	application
 * @subpackage helpers
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */

if ( ! function_exists('inner_tax_calc'))
{
	/**
	 * Inner Tax calc
	 *
	 * 合計金額から内消費税を算出する。
	 * 小数点以下は必ず切り捨てます。
	 *
	 * @access	public
	 * @param	string $value
	 * @param	float $tax
	 * @return	string
	 */
	function inner_tax_calc($value, $tax)
	{
		$price = $value;

		if($tax < 1)
		{
			$tax = 1 + floatval($tax);
		}
		else if($tax > 2)
		{
			$tax = $tax / 100 + 1;
		}

		if(is_numeric($value))
		{
			$price = $value - (intval($value) / floatval($tax));
		}
		else if(is_float($value))
		{
			$price = floatval($value) / floatval($tax);
		}

		return round($price, 0);
	}
}

if ( ! function_exists('change_tax_intval'))
{

	/**
	 * change_tax_intval
	 *
	 * 少数点の税率を％計算に置き換える
         * 
	 * @access	public
	 * @param	string $value
	 * @return	string
	 */
	function change_tax_intval($value)
	{
            return ($value * 100);
        }
    
}

if ( ! function_exists('calc_inc_dec_rate')) 
{

    	/**
	 * calc_inc_dec_rate
	 *
	 * 増減率を計算し返却する
         * 
	 * @access	public
	 * @param	string $value
	 * @return	string
	 */
	function calc_inc_dec_rate($now, $last)
	{
            if(empty($last)) return 100.0;
            
            $res1 = $now - $last;
            
            $res2 = ($res1 / $last) * 100;
            
            return round($res2, 1);
            
        }

    
    
}

/* End of file calc_helper.php */
/* Location: ./application/helpers/calc_helper.php */