<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MY Array helper
 *
 * 独自のArray helperファイル
 *
 * @package    application
 * @subpackage helpers
 * @author    Kita Yasuhiro
 * @link    http://www.datalyze.co.jp
 */

if (!function_exists('array_val')) {
    /**
     * Array Val
     *
     * 配列の値を取得するときにキーの存在を確認して取得する
     * 存在しない場合はデフォルト値を返す
     *
     * @access    public
     * @param    array $ary
     * @param    string $key
     * @param    string $default
     * @return    string
     */
    function array_val($ary, $key, $default = null)
    {

        if (!is_array($ary)) {
            return $default;
        }

        if (strstr($key, "[]")) {
            $key = str_replace("[]", "", $key);
        }

        return isset($ary[$key]) ? $ary[$key] : $default;

    }
}
if (!function_exists('change_null')) {

    /**
     * Change null
     *
     * 文字型以外の登録、更新処理時に空を挿入させないようにするための
     * Null変換処理
     *
     * @access    public
     * @param    array $ary
     */
    function change_null(&$ary)
    {
        foreach ($ary as $key => $value) {
            if ($value === "") {
                $ary[$key] = NULL;
            }
        }
    }

}

/* End of file MY_array_helper.php */
/* Location: ./application/helpers/MY_array_helper.php */