<!DOCTYPE html>
<html>
<head>
<title>ワーク10</title>
<style type="text/css">
form {
    width: 500px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    background-color: #b5eafc;
}
table{
    width: 100%;
}
th {
    text-align:right;
    font-weight:normal;
}
td {
    text-align:left;
}
input.form-control {
    padding: 2px 5px;
    width: 80%;
    line-height: 25px;
}
input.btn {
    padding: 2px 5px;
    height: 40px;
    width: 100px;
}
select.form-control, option {
    height: 40px;
    display: block;
}
</style>
</head>
<body>
  <?php
    //1番目//6番目
    $template_name = Controller::getTemplateName(); //staticをつけたメンバ変数「クラス名::」をつけて利用する。
    //4番目//9番目
    require ($template_name);
  ?>
</body>
</html>