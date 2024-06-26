<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$product = "鉛筆";

buy($product);

function buy($pr){
    echo "<hr/>\n";
    echo "商品「{$pr}」をお買い上げいただきました。<br/>\n";
    echo "<hr/>\n";
}

?>

</body>
</heml>
