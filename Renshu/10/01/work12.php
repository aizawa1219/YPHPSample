<?php
    session_start();

    $name = "";
    $age = "";
    $hobby = "";
    
    //　（１）セッション削除ボタンを押すと、セッション情報が削除される処理をここに追加
    if (!empty($_POST) && isset($_POST["action_delete"])) {
        //セッション削除処理
        $_SESSION = [];
        session_destroy();
      }
      

    // セッションに値があれば各変数に代入する
    if (!empty($_SESSION)) {
        if (isset($_SESSION["name"])) {
            $name = $_SESSION["name"];
        }
        if (isset($_SESSION["age"])) {
            $age = $_SESSION["age"];
        }
        if (isset($_SESSION["hobby"])) {
            $hobby = $_SESSION["hobby"];
        }        
    }

    // POSTに値があれば、各変数に代入する。同時にPOST値をセッションにも書き込む
    if (!empty($_POST)) {
        if (isset($_POST["name"])) {
            $name = $_POST["name"];
            $_SESSION["name"] = $name;
        }
        if (isset($_POST["age"])) {
            $age = $_POST["age"];
            $_SESSION["age"] = $age;
        }
        if (isset($_POST["hobby"])) {
            $hobby = $_POST["hobby"];
            $_SESSION["hobby"] = $hobby;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク12</title>
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
<form action="work12.php" method="post">
  <table>
    <tr>
      <th>名前</th>
      <td>
      <?php if ($name == "") { ?>
        <input type="text" class="form-control" name="name" value="<?= $name; ?>">
      <?php } else { ?>
        <?= $name; ?>さん、こんにちは
      <?php } ?>
      </td></tr>
    <tr>
      <th>年齢</th>
      <td>
        <input type="text" class="form-control" name="age" value="<?= $age; ?>">
      </td>
    </tr>
    <tr>
      <th>趣味</th>
      <td>
        <input type="text" class="form-control" name="hobby" value="<?= $hobby; ?>">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <input type="submit" name="action_register" class="btn btn-info" value="セッション登録">
        <input type="submit" name="action_delete" class="btn btn-danger" value="セッション削除">
      </td>
    </tr>
  </table>
</form>
</body>
</html>
