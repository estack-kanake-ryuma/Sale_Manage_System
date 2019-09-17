<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MY Html helper
 *
 * 独自のHtml helperファイル
 *
 * @package	application
 * @subpackage helpers
 * @author	Kita Yasuhiro
 * @link	http://www.datalyze.co.jp
 */

if ( ! function_exists('get_anchor'))
{
	/**
	 * Get Anchor
	 *
	 * aタグを生成する
	 *
	 * @access	public
	 * @param	string $url
	 * @param	string $str
	 * @param	array $option
	 * @return	string
	 */
	function get_anchor($url, $str, $option=null)
	{
		$ary = array();
                if(!empty($option)) {
                    foreach($option as $key=>$value) {
                            $ary[] = $key.'="'.$value.'"';
                    }
                }
                
                if(empty($url)) {
                    return '<a '.implode(' ', $ary).'>'.$str.'</a>';
                } else {
                    return '<a href="'.$url.'" '.implode(' ', $ary).'>'.$str.'</a>';
                }
                
		
	}
}

if ( ! function_exists('get_memo'))
{
    /**
    * Get Anchor
    *
    * aタグを生成する
    *
    * @access	public
    * @param	string $val
    * @return	string
    */
    function get_memo($val) 
    {
        
        if(empty($val)) return "";
        
        $str = '<img class="tooltip" src="'.IMG_PATH.'/memo.gif" popup="#TITLE#" />';
        
        $str = str_replace("#TITLE#", nl2br($val), $str);
        
        return $str;
        
    }
    
}

if ( ! function_exists('get_span_red'))
{
    /**
    * Get Span Red
    *
    * 文字を赤くする
    *
    * @access	public
    * @param	string $val
    * @return	string
    */
    function get_span_red($val) 
    {
        
        if(empty($val) && $val != "0") return "";
        
        $str = '<span class="red">#VALUE#</span>';
        
        $str = str_replace("#VALUE#", nl2br($val), $str);
        
        return $str;
        
    }
    
}

if ( ! function_exists('get_span_yellow'))
{
    /**
    * Get Span Red
    *
    * 文字を赤くする
    *
    * @access	public
    * @param	string $val
    * @return	string
    */
    function get_span_yellow($val) 
    {
        
        if(empty($val)) return "";
        
        $str = '<span class="yellow">#VALUE#</span>';
        
        $str = str_replace("#VALUE#", nl2br($val), $str);
        
        return $str;
        
    }
    
}

if ( ! function_exists('get_arrow'))
{
    
    /**
    * Get Span Red
    *
    * 文字を赤くする
    *
    * @access	public
    * @param	string $val
    * @return	string
    */
    function get_arrow($val) 
    {
        
        $str = '<img src="'.IMG_PATH.'#NAME#.gif" />';
        if($val == 0) {
            $str = str_replace("#NAME#", "line", $str);
        } else if($val > 0) {
            $str = str_replace("#NAME#", "arrow_up", $str);
        } else if($val < 0) {
            $str = str_replace("#NAME#", "arrow_down", $str);
        }
        
        return $str;
    }
    
}


if ( ! function_exists('get_back_url'))
{

    /**
    * Get Back URL
    *
    * セッションに入っている一つ前のURLを返却する
    *
    * @access	public
    * @param	string $val
    * @return	string
    */
    function get_back_url() 
    {
        $ci =& get_instance();
        
        $data = $ci->session->userdata(SS_KEY_BEF_KEY);
        
        isset($data[SS_KEY_BACK_URL]) ? $url = $data[SS_KEY_BACK_URL] : $url = "";
        
        return $url;
        
    }
    
}

/* End of file MY_html_helper.php */
/* Location: ./application/helpers/MY_html_helper.php */