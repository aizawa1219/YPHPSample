<?php

require_once("Controller.class.php"); //ファイルをこのページに引っ張ってきて追加したイメージ
require_once("Logic.class.php"); //ファイルをこのページに引っ張ってきて追加したイメージ
require_once("Data.class.php"); //ファイルをこのページに引っ張ってきて追加したイメージ

$logic = new Logic();
$logic->setData(new Data()); //$data=new Data() Data{$name,age,hobby,id,password,is_authenticated}
Controller::setLogic($logic);
Controller::execute();
?>
