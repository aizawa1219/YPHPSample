<?php session_start(); ?>

<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<h2>店内のご案内</h2>
<hr/>

<?php

echo "</hr>";

//ページに訪れた履歴がなければ
if (!isset($_SESSION["name"])){
    echo "<form action=\"http://localhost/YPHPSample/Renshu/10/Sample1.php\"
         method=\"post\">";
    echo "お客様のお名前をどうぞ<input type=\"text\" name=\"name\"/><br/>\n";
    echo "<input type=\"submit\" value=\"送信\"/><br/>\n";
}
//履歴があれば
else{
    echo "{$_SESSION["name"]}さんいらっしゃいませ。<br/>\n";
}

//フォームが送信されれば以下を表示
if (isset($_POST["name"])){
    //echo "{$_POST["name"]}さんいらっしゃいませ。<br/>\n";  //解答には無かった
    $_SESSION["name"] = $_POST["name"];  //セッションに保存
}

?>

</body>
</heml>
