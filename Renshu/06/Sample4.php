<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$chat = [
    ["8月1日", "東京に行きました"],
    ["8月2日", "今日は晴れでした"],
    ["8月5日", "明日から休暇です"],
    ["8月7日", "帰省します"],
    ["8月8日", "到着しました"]
];


?>

<table border="2">
<tr bgcolor="#AAAAAA">
    <th>日付</th>
    <th>タイトル</th>
</tr>

<?php

foreach ($chat as $dairy){ //初めにインデックスが入る？
    echo "<tr>";
    foreach ($dairy as $value){
        echo "<td>{$value}</td>";
    }
    echo "</tr>\n";
}
    

//$val = max($test);

?>

</table>

<?php

//変数の中身を確認
foreach ($chat as $dairy){
    echo "<pre>";
    var_dump($dairy);
    foreach ($dairy as $value){
        echo "<pre>";
        var_dump($value);
    }
}

?>


</body>
</heml>
