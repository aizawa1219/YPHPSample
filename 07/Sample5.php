<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$product = "鉛筆";
$price = 50;

buy($product, $price);

//buy関数の定義
function buy($pr, $pc){
    echo "<hr/>\n";
    echo "商品「{$pr}」を{$pc}円でお買い上げいただきました。<br/>\n";
    echo "<hr/>\n";
}

?>

</body>
</heml>
