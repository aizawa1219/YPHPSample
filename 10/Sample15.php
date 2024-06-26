<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<form action="http://localhost/YPHPSample/10/Sample15.php" method="post">
タイトル：<input type ="text" name="sbj"/><br/>
宛先：<input type ="text" name="to"/><br/>
<textarea rows="10" cols="50" name="msg"></textarea><br/>
<input type="submit" value="送信"/>
</form>

<?php
mb_language("ja");
mb_internal_encoding('UTF-8');

$to = isset($_POST["to"]) ? $_POST["to"] : null;
$sbj = isset($_POST["sbj"]) ? $_POST["sbj"] : null;
$msg = isset($_POST["msg"]) ? $_POST["msg"] : null;
$hdr = 'From:aizawa.ikutaka@no1s.biz' . "\r\n"; 

if(isset($_POST["to"]))
{
  if(mb_send_mail($to, $sbj, $msg, $hdr)) {
      echo "送信しました。\n";
  } else {
      echo "送信に失敗しました。\n";
  }
}

?>

</body>
</html>
