<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>


<?php

$stop = 3;

echo "商品{$stop}までしか販売しておりません。<br/>\n";
echo "<hr/>\n";

for ($i=0; $i<5; $i++){
    if($i == $stop){
        continue;
    }
    echo "商品{$i}を表示します。<br/>\n";
}

echo "<hr/>\n";
echo "商品は以上です。<br/>\n";

?>


</body>
</heml>
