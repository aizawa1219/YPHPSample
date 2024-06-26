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

    if($num <= 0){
        echo "在庫切れです。<br/>\n";
    }
    elseif($num <= 3){
        echo "在庫が僅少です。<br/>\n";
    }
    else{
        echo "在庫があります。<br/>\n";
    }

    echo "<hr/>\n";
    echo "ごゆっくりお過ごしください。<br/>\n";

    ?>

</table>

</body>
</heml>
