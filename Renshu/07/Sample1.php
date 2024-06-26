<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$a = 5;
$b = 10;

echo "1番目の数値は{$a}です。<br/>\n";

echo "2番目の数値は{$b}です。<br/>\n";

$mi = mini($a, $b);

echo "<br/>最小値は{$mi}です。\n";

function mini($x, $y){
    if($x >= $y){
        return $y;
    }
    else{
        return $x;
    }
}

?>

</table>

</body>
</heml>
