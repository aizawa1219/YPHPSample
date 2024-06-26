<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$ptr = ["Apple", "GoodBye", "Thankyou"];
$str = ["Hello", "GoodBye", "Thankyou"];

?>

<table border="2">
<tr bgcolor="#AAAAAA">
    <th>パターン</th>
    <th>文字列</th>
    <th>マッチ</th>
</tr>

<?php

foreach ($ptr as $valueptr){
    foreach($str as $valuestr){

        echo "<tr><td>{$valueptr}</td><td>{$valuestr}</td>";

        $mt = preg_match("/". $valueptr . "/", $valuestr) ? "○" : "×";

        echo "<td>{$mt}</td></tr>\n";
    }
}

?>

</table>

</body>
</heml>
