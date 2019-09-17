<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY Ftp
 *
 * 独自のFtpクラス
 *
 * @package    application
 * @subpackage libraries
 * @author        Kanake Ryuma
 * @link        http://www.datalyze.co.jp
 */
class MY_Ftp extends CI_FTP
{

    /**
     * コンストラクタ
     *
     * @access public
     * @author    Kanake Ryuma
     */
    public function __construct()
    {
        // ファイル操作のヘルパーを読み込み
        $CI =& get_instance();
        $CI->load->helper('file');

        parent::__construct();
    }

    /**
     * FTPの接続を行う
     * 返り値として「TRUE:接続に成功 FALSE:接続に失敗」
     *
     * @access public
     * @param  array $config FTPのコンフィグファイル
     * @return boolean
     * @author Kanake Ryuma
     */
    public function connect($config = array())
    {
        // FTPの接続を行う
        return parent::connect($config);
    }

    /**
     * 指定されたFTPサーバー内のファイルを読み込み内容を返す
     *
     * @access public
     * @param  string $file_path 読み込むファイルのフルパス
     * @return boolean
     * @author Kanake Ryuma
     */
    public function read_file($file_path)
    {
        // テンポラリディレクトリのファイルパス
        $temp_file_path = FTP_TEMP_PATH . basename($file_path);

        // ファイルをテンポラリディレクトリにダウンロードする
        $this->download($file_path, $temp_file_path);

        // ファイルの読み込み処理
        $read_string = read_file($temp_file_path);

        // ダウンロードしたファイルを削除して後始末
        @unlink($temp_file_path);

        return $read_string;
    }

    /**
     * 指定されたFTPサーバー内のファイルの内容を書き換える
     *
     * @access public
     * @param  string $file_path 読み込むファイルのフルパス
     * @param  string $string 書き込む文字列
     * @param  string $mode ab：追加  wb：書き換え
     * @return boolean
     * @author Kanake Ryuma
     */
    public function write_file($file_path, $string, $mode = 'wb')
    {
        // テンポラリディレクトリのファイルパス
        $temp_file_path = FTP_TEMP_PATH . basename($file_path);

        // ファイルをテンポラリディレクトリにダウンロードする
        $this->download($file_path, $temp_file_path);

        // ファイルの書き込みを行う
        $result = write_file($temp_file_path, $string, $mode);

        // 書き込みに成功した場合はファイルを上書きアップロードする
        if ($result === true) {
            // ファイルのアップロードを行う
            $result = $this->upload($temp_file_path, $file_path);

            // アップロードしたファイルを削除して後始末
            @unlink($temp_file_path);

            return $result;
        } else {
            // ダウンロードしたファイルを削除して後始末
            @unlink($temp_file_path);

            return false;
        }
    }
}

/* End of file MY_Ftp.php */
/* Location: ./application/libraries/MY_Ftp.php */