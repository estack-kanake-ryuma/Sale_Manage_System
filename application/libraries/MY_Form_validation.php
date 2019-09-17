<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY Form validation
 *
 * 独自のForm validationクラス
 *
 * @package    application
 * @subpackage libraries
 * @author        Kita Yasuhiro
 * @link        http://www.datalyze.co.jp
 */
class MY_Form_validation extends CI_Form_validation
{

    /**
     * コンストラクタ
     *
     * @access public
     * @author    Kita Yasuhiro
     */
    public function __construct($rules = array())
    {
        parent::__construct($rules);
    }

    /**
     * ひらがなチェック
     *
     * @access public
     * @param    string $str
     * @return boolean
     * @author Kita Yasuhiro
     */
    public function hiragana($str)
    {
        $pattern = "/[^ぁ-んー]+/u";

        if ($str == '') {
            return true;
        }

        return (preg_match($pattern, $str)) ? false : true;
    }

    /**
     * 金額チェック
     *
     * @access public
     * @param    string $str
     * @return boolean
     * @author Kita Yasuhiro
     */
    public function money($str)
    {

        $pattern = "/^(0|-?([1-9][0-9]{0,2}(,[0-9]{3})*?))$/";

        if ($str == '') {
            return true;
        }

        return (preg_match($pattern, $str)) ? true : false;
    }

    /**
     * 消込金額チェック
     *
     * @access public
     * @param    string $str
     * @return boolean
     * @author Kita Yasuhiro
     */
    public function rec_money($str)
    {

        $pattern = "/^(([1-9][0-9]{0,2}(,[0-9]{3})*?))$/";

        if ($str == '') {
            return true;
        }

        return (preg_match($pattern, $str)) ? true : false;
    }

    /**
     * 報告書Noチェック
     *
     * @access public
     * @param    string $str
     * @return boolean
     * @author Kita Yasuhiro
     */
    public function report_no($str)
    {
        // 入力チェックのパターン
        $pattern = "/^([a-zA-Z0-9]{8}|[a-zA-Z0-9]{10})$/";

        if ($str == '') {
            return true;
        }

        return (preg_match($pattern, $str)) ? true : false;
    }


    /**
     * 日付の妥当性チェック
     *
     * @access public
     * @param    string $str
     * @return boolean
     * @author Kita Yasuhiro
     */
    public function date($str)
    {
        if ($str == '') {
            return true;
        }

        if (strlen($str) != 10) {
            return false;
        }

        $date = explode('/', $str);

        if (count($date) != 3) {
            return false;
        }

        return (checkdate($date[1], $date[2], $date[0])) ? true : false;
    }

    /**
     * 年月の妥当性チェック
     *
     * @access public
     * @param    string $str
     * @return boolean
     * @author Kita Yasuhiro
     */
    public function yearmonth($str)
    {
        if ($str == '') {
            return true;
        }

        if (strlen($str) != 7) {
            return false;
        }

        $date = explode('/', $str);

        if (count($date) != 2) {
            return false;
        }

        return (checkdate($date[1], "01", $date[0])) ? true : false;
    }

    /**
     * 半角文字チェック
     *
     * @access public
     * @param    string $str
     * @return boolean
     * @author Kita Yasuhiro
     */
    public function half_str($str)
    {
        if ($str == '') {
            return true;
        }

        return (strlen($str) === mb_strlen($str)) ? true : false;
    }

    /**
     * 時間の妥当性チェック
     *
     * @access public
     * @param    string $str
     * @return boolean
     * @author Kita Yasuhiro
     */
    public function time($str)
    {
        if ($str == '') {
            return true;
        }

        return (strtotime($str) === -1) ? false : true;
    }

    /**
     * 郵便番号の妥当性チェック
     *
     * @access public
     * @param  string $str
     * @param  string $field
     * @return boolean
     * @author Kanake Ryuma
     */
    public function post_no($str, $field)
    {

        global $_POST;

        // 郵便番号のいずれかでエラーが起きている場合はチェックを行わない
        if (!empty($this->_field_data[$field . '_1']['error'])
            || !empty($this->_field_data[$field . '_2']['error'])
        ) {
            return true;
        }
        // 郵便番号の３桁、４桁を取得する
        $post_no_1 = $_POST[$field . '_1'];
        $post_no_2 = $_POST[$field . '_2'];

        // 郵便番号でどちらかが入力されていない場合はエラー
        if ($post_no_1 !== '' || $post_no_2 !== '') {
            if ($post_no_1 == '' || $post_no_2 == '') {
                return false;
            }
        }

        return true;
    }

    /**
     * 電話番号、FAX番号の妥当性チェック
     *
     * @access public
     * @param  string $str
     * @param  string $field
     * @return boolean
     * @author Kanake Ryuma
     */
    public function tel_no($str, $field)
    {

        global $_POST;

        // 電話番号のいずれかでエラーが起きている場合はチェックを行わない
        if (!empty($this->_field_data[$field . '_1']['error'])
            || !empty($this->_field_data[$field . '_2']['error'])
            || !empty($this->_field_data[$field . '_3']['error'])
        ) {
            return true;
        }

        // 電話番号を取得する
        $tel_no_1 = $_POST[$field . '_1'];
        $tel_no_2 = $_POST[$field . '_2'];
        $tel_no_3 = $_POST[$field . '_3'];

        // 郵便番号でどちらかが入力されていない場合はエラー
        if ($tel_no_1 !== '' || $tel_no_2 !== '' || $tel_no_3 !== '') {
            if ($tel_no_1 == '' || $tel_no_2 == '' || $tel_no_3 == '') {
                return false;
            }
        }

        return true;
    }

    /**
     * Set Select
     *
     * @access    public
     * @param    string $field
     * @param    string $value
     * @param  string $num
     * @param    boolean $default
     * @return    string
     */
    public function set_select_num($field = '', $value = '', $num = '', $default = FALSE)
    {
        if (!isset($this->_field_data[$field]) OR !isset($this->_field_data[$field]['postdata']) OR $num === '') {
            if ($default === TRUE AND count($this->_field_data) === 0) {
                return ' selected="selected"';
            }
            return '';
        }

        $field = $this->_field_data[$field]['postdata'];

        if (is_array($field)) {
            if (array_key_exists($num, $field) && $value == $field[$num]) {
                return ' selected="selected"';
            }
        }

        return '';

    }

    /**
     * Get Error Message Array
     *
     * 配列形式のフォームのエラーメッセージを取得する
     *
     * @access    public
     * @param    string $field
     * @param  string $num
     * @param  string $prefix
     * @param  string $suffix
     * @return    string
     */
    function error_ary($field = '', $num = '', $prefix = '', $suffix = '')
    {
        if (!isset($this->_field_data[$field]['error'][$num]) OR $this->_field_data[$field]['error'][$num] == '') {
            return '';
        }

        if ($prefix == '') {
            $prefix = $this->_error_prefix;
        }

        if ($suffix == '') {
            $suffix = $this->_error_suffix;
        }

        return $prefix . $this->_field_data[$field]['error'][$num] . $suffix;
    }
}

/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */