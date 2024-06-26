<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$stock["みかん"] = 80;
$stock["いちご"] = 60;
$stock["りんご"] = 22;
$stock["もも"] = 50;
$stock["くり"] = 57;

?>

<table border="2">
<tr bgcolor="#AAAAAA">
    <th>在庫状況</th>
</tr>

<?php

echo "<tr><td>みかんは{$stock["みかん"]}個です。</tr></td>\n";
echo "<tr><td>いちごは{$stock["いちご"]}個です。</tr></td>\n";
echo "<tr><td>りんごは{$stock["りんご"]}個です。</tr></td>\n";
echo "<tr><td>ももは{$stock["もも"]}個です。</tr></td>\n";
echo "<tr><td>くりは{$stock["くり"]}個です。</tr></td>\n";

?>

</table>
</body>
</heml>
