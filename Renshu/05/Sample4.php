<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">

<?php

for ($i=1; $i<=10; $i++){
    if ($i%2==1){
        echo "<tr bgcolor=\"#AAAAAA\">";
    }
    else{
        echo "<tr>";
    }
    echo "<td>商品{$i}を表示します。</td></tr>\n";
    }
    

?>

</table>

</table>
</body>
</heml>
