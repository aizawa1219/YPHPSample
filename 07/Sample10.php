<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$a = 0;

echo "変数\$aが使えます。<br/>\n";
echo "変数\$aの値は{$a}です。<br/>\n";
//echo "変数\$bの値は{$b}です。<br/>\n";
//echo "変数\$cの値は{$c}です。<br/>\n";

funcB();
funcC();

function funcB(){
    global $a;
    $b = 1;

    echo "<hr/>\n";
    echo "funcB関数では変数\$bが使えます。<br/>\n";
    echo "変数\$aの値は{$a}です。<br/>\n";
    echo "変数\$bの値は{$b}です。<br/>\n";
    //echo "変数\$cの値は{$c}です。<br/>\n";
    echo "<hr/>\n";
}

function funcC(){
    global $a;
    $c = 2;

    echo "<hr/>\n";
    echo "funcB関数では変数\$cが使えます。<br/>\n";
    echo "変数\$aの値は{$a}です。<br/>\n";
    //echo "変数\$bの値は{$b}です。<br/>\n";
    echo "変数\$cの値は{$c}です。<br/>\n";
    echo "<hr/>\n";
}

?>

</table>

</body>
</heml>
