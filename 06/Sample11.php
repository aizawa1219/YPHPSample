<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$test = [22, 80, 75, 60, 50];

sort($test);

?>

<h3>昇順</h3>
<table border="2">
<tr bgcolor="#AAAAAA">
    <th>番号</th>
    <th>点数</th>
</tr>

<?php

foreach($test as $id => $value){
    echo "<tr><td>{$id}</td><td>{$value}個</td></tr>\n";
}

rsort($test);

?>

</table>

<h3>降順</h3>
<table border="2">
<tr bgcolor="#AAAAAA">
    <th>番号</th>
    <th>点数</th>
</tr>

<?php

foreach($test as $id => $value){
    echo "<tr><td>{$id}</td><td>{$value}個</td></tr>\n";
}

?>

</table>
</body>
</heml>
