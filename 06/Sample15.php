<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$data[0][0] = "東京";
$data[0][1] = 32;
$data[0][2] = 25;
$data[1][0] = "名古屋";
$data[1][1] = 28;
$data[1][2] = 21;
$data[2][0] = "大阪";
$data[2][1] = 27;
$data[2][2] = 20;
$data[3][0] = "京都";
$data[3][1] = 26;
$data[3][2] = 19;
$data[4][0] = "福岡";
$data[4][1] = 27;
$data[4][2] = 22;

?>

<table border="2">
<tr bgcolor="#AAAAAA">
    <th>都市名</th>
    <th>最高気温</th>
    <th>最低気温</th>
</tr>

<?php

for ($i=0; $i<count($data); $i++){
    echo "<tr>";
    for ($j=0; $j<count($data[0]); $j++){
        echo "<td>{$data[$i][$j]}</td>";
    }
    echo "</tr>\n";
}

?>

</table>

</table>
</body>
</heml>
