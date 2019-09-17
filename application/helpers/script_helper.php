<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * script helper
 *
 * 独自のJavaScript動作のhelperファイル
 *
 * @package	application
 * @subpackage helpers
 * @author	Kita Yasuhiro
 * @link	http://www.datalyze.co.jp
 */

if ( ! function_exists('alert_href'))
{
	/**
	 * Alert Href
	 *
	 * alertとlocation.hrefを行うスクリプトの文字列を返す
	 *
	 * @access	public
	 * @param	string $msg
	 * @param	string $href
	 * @return	string
	 */
	function alert_href($msg, $href)
	{
		return "alert('".$msg."');location.href='".$href."';";
	}
}


/* End of file script_helper.php */
/* Location: ./application/helpers/script_helper.php */