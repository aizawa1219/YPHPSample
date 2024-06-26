<?php session_start(); ?>

<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<h2>商品のご選択</h2>
<hr/>

<?php

if (!isset($_SESSION["count"])){
    $_SESSION["count"] = 1;
    echo "はじめてのおこしですね。<br/>\n";
}
else{
    $_SESSION["count"]++;
    echo "{$_SESSION["count"]}回目のおこしですね。<br/>\n";
}

?>


</body>
</heml>
