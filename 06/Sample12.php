<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$stock = ["みかん"=>80, "いちご"=>60, "りんご"=>22, "もも"=>50, "くり"=>75];

?>

<h3>並べ替え前</h3>
<table border="2">
<tr bgcolor="#AAAAAA">
    <th>商品名</th>
    <th>個数</th>
</tr>

<?php

foreach($stock as $key => $value){
    echo "<tr><td>{$key}</td><td>{$value}個</td></tr>\n";
}

ksort($stock);

?>

</table>

<h3>並べ替え後</h3>
<table border="2">
<tr bgcolor="#AAAAAA">
    <th>商品名</th>
    <th>個数</th>
</tr>

<?php

foreach($stock as $key => $value){
    echo "<tr><td>{$key}</td><td>{$value}個</td></tr>\n";
}

?>

</table>
</body>
</heml>
