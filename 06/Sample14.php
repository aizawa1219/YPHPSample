<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$city1 = ["東京", "大阪", "京都"];
$city2 = ["神戸", "名古屋", "福岡"];

$world = array_merge($city1, $city2);

echo "<table border=\"2\">\n";
echo "<tr bgcolor=\"#AAAAAA\">\n";
echo "<th>順位</th>\n";
echo "<th>点数</th>\n";
echo "</tr>\n";

foreach($world as $i => $value){
    echo "<tr><td>{$i}</td><td>{$value}</td></tr>\n";
}

?>
</table>

</body>
</heml>
