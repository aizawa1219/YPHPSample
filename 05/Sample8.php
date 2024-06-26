<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>


<?php

$ch = 0;

for ($i=0; $i<5; $i++){
    for ($j=0; $j<5; $j++){
        if($ch == 0){
            echo "<img src=\"{$ch}.jpg\"/>";
            $ch = 1;
        }
        else{
            echo "<img src=\"{$ch}.jpg\"/>";
            $ch = 0;
        }
    }
    echo "<br/>\n";
}

?>


</body>
</heml>
