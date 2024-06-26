<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$str = ["Hello", "GoodBye", "Thankyou"];

?>

<table border="2">
<tr bgcolor="#AAAAAA">
    <th>文字列</th>
    <th>大文字</th>
    <th>小文字</th>
    <th>逆順</th>
    <th>戦略</th>
</tr>

<?php

foreach ($str as $value){
    echo "<tr><td>{$value}</td><td>";
    echo strtoupper($value); //大文字にする
    echo "</td><td>";
    echo strtolower($value); //小文字にする
    echo "</td><td>";
    echo strrev($value);  //逆順にする
    echo "</td><td>";
    echo substr($value, 0, 3);  //文字列の一部を取り出す
    echo "</td></tr>\n";
}

?>

</table>

</body>
</heml>
