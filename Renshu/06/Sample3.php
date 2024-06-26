<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$words = ["a", "l", "g", "e", "b", "r", "a"];

$text = "";

$change_words = [];

?>

<table border="2">
<tr>
    <td>変換前</td>

<?php

$text = implode($words);

echo "<td>{$text}</td></tr>\n";

//これでも連結された文字列が出る
foreach($words as $value){
    echo $value;
}

//$val = max($test);

?>

<tr>
    <td>変換後</td>

<?php

for ($i=0; $i<count($words); $i++) {
    if ($words[$i] == "a") {
        $words[$i] = "b";
    }
}

$change_text = implode($words);

echo "<td>{$change_text}</td></tr>\n";

?>

</table>

<?php
//これはtableの外で記述しないといけない。
//echo "</br>70点以上の学生は{$num}人です。";

?>

</body>
</heml>
