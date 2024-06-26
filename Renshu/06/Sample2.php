<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$test = [80, 60, 22, 50, 75];

$num = 0;

?>

<table border="2">
<tr bgcolor="#AAAAAA">
    <th>番号</th>
    <th>点数</th>
</tr>

<?php

foreach ($test as $id => $value){
    echo "<tr><td>{$id}</td><td>{$value}</td></tr>\n";
   if ($value > 70){
    $num++;
   }
}

//$val = max($test);

?>

</table>

<?php
//これはtableの外で記述しないといけない。
echo "</br>70点以上の学生は{$num}人です。";

?>

</body>
</heml>
