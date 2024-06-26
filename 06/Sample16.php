<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$data = [
    ["東京", 32, 25],
    ["名古屋", 28, 21],
    ["大阪", 27, 20],
    ["京都", 26, 19],
    ["福岡", 27, 22]
];

?>

<table border="2">
<tr bgcolor="#AAAAAA">
    <th>都市名</th>
    <th>最高気温</th>
    <th>最低気温</th>
</tr>

<?php

foreach ($data as $city){ //初めに東京のデータ、次に名古屋のデータと一つずつ渡される。
    echo "<tr>";
    foreach($city as $value){
        echo "<td>{$value}</td>";
    }
    echo "</tr>\n";
}

?>

</table>

</body>
</heml>
