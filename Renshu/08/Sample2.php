<!DOCTYPE html1>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$car1 = new Car(1234, 25.5);
$car2 = new Car(2345, -30.5);

?>

<table border="2">
<tr bgcolor="#AAAAAA">
    <th>ナンバー</th>
    <th>ガソリン</th>
</tr>

<?php

echo "<tr><td>";
echo $car1->getnumber();
echo "</td><td>";
echo $car1->getgasoline();
echo "</td></tr>";

echo "<tr><td>";
echo $car2->getnumber();
echo "</td><td>";
echo $car2->getgasoline();
echo "</td></tr>";

?>

</table>

<?php

?>

<?php

class Car{
    private $number = 1111;
    private $gasoline = 20.0;

    //コンストラクタ
    public function __construct($nm, $ga){
        $this->number = $nm;
        if ($ga > 0){
            $this->gasoline = $ga;
        }
        else{
            //$this->gasoline = 0;
        }
    }
    public function getnumber(){return $this->number;}
    public function getgasoline(){return $this->gasoline;}
}

?>

</body>
</heml>
