<?php setcookie("count", true); ?>

<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<h2>店内のご案内</h2>
<hr/>

<?php

if (!isset($_COOKIE["count"])){
    echo "はじめてのおこしですね。<br/>\n";
}
else{
    echo "毎度ありがとうございます。<br/>\n";
}

?>

</body>
</heml>
