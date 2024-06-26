<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$product = ["鉛筆", "消しゴム", "定規", "コンパス", "ボールペン"];


?>

<table border="2">
<tr bgcolor="#AAAAAA">
    <th>商品名</th>
</tr>

<?php

echo "<tr><td>" . current($product) . "</td></tr>";
next($product);
echo "<tr><td>" . current($product) . "</td></tr>";
next($product);
echo "<tr><td>" . current($product) . "</td></tr>";
prev($product);
echo "<tr><td>" . current($product) . "</td></tr>";
reset($product);
echo "<tr><td>" . current($product) . "</td></tr>";

?>

</table>

</table>
</body>
</heml>
