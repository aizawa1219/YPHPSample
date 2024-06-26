<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$num = 10;

echo "ようこそ。<br/>\n";
echo "<hr/>\n";

switch($num){
    case 0:
        echo "在庫切れです。<br/>\n";
        break;

    case1:
    case2:
    case3:
        echo "在庫が僅少です。<br/>\n";
        break;
    
        default:
        echo "在庫があります。<br/>\n";
        break;
}

echo "<hr>\n";
echo "ごゆっくりお過ごしください。<br/>\n";

?>

</table>

</body>
</heml>
