<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<table border="2">
    <tr bgcolor="#AAAAAA">
        <th>文字列</th>
    </tr>

    <?php

    $msg1 = "こんにちは";
    $msg2 = "さようなら";
    $msg3 = "またあした";

    echo "<tr><td>" . $msg1 . $msg2 . "</td></tr>\n";
    echo "<tr><td>" . $msg2 . $msg3 . "</td></tr>\n";
    echo "<tr><td>" . $msg1 . $msg3 . "</td></tr>\n";

    ?>

</table>

</body>
</heml>
