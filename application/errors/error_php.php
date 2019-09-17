<?php
if(ENVIRONMENT != 'development') {
	// 各種画面表示情報の設定
	$heading = 'システムエラーが発生しました';
	$message = 'システムエラーが発生しました。処理続行できません。<br/>システム管理者へ連絡してください。';
	$url = '/';
	$link_message = '→ ログイン画面に戻る';
	// 共通点プレートの読み込み
	require_once('common/master.php');
} else {
?>
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: <?php echo $severity; ?></p>
<p>Message:  <?php echo $message; ?></p>
<p>Filename: <?php echo $filepath; ?></p>
<p>Line Number: <?php echo $line; ?></p>

</div>
<?php } ?>