<!DOCTYPE html>
<html>
<head>
<title>ワーク14</title>
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
    //1
    $template_name = Controller::getTemplateName();
    //4→form.php
    require ($template_name);
  ?>
</body>
</html>

