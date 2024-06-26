<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$a = 0;

for ($i=0; $i<5; $i++) {
    func();
}

function func(){
    global $a;
    $b = 0;
    static $c = 0;

    echo "<hr/>\n";
    echo "変数\$aは{$a}変数\$bは{$b}変数\cは{$c}です。<br/>\n";

    $a++;
    $b++;
    $c++;
}

?>

</table>

</body>
</heml>
