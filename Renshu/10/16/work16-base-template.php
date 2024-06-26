<!DOCTYPE html>
<html>
<head>
<title>ワーク16</title>
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
    //現在のactionを取得し、移動するページを指定する
    $template_name = Controller::getTemplateName();
    //ここに定義したらいい
    //ここで$error_Messageを定義したらview側でも使えるようになる
    require ($template_name);//指定されたページを読み込む
  ?>
</body>
</html>
