<!DOCTYPE html>
<html>
<head>
<title>ワーク1</title>
<style type="text/css">
form {
    width: 500px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    background-color: #b5eafc;
}
table {
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
select.form-control {
    padding: 2px 5px;
    width: 40%;
    line-height: 25px;
}
input.btn {
    padding: 2px 5px;
    height: 40px;
    width: 100px;
}
</style>
</head>
<body>

<?php

$name = "";
$age = "";
$hobby = "";
$prefecture = "";
$movie = "";

?>

<?php
//フォームよりも上に記述しないと反映されない
if(isset($_POST["name"])){
    $name = $_POST["name"];
    // echo "<div>".$_POST["name"]."</div>";
} 

if(isset($_POST["age"])){
    $age = $_POST["age"];
    // echo "<div>".$_POST["age"]."</div>";
} 

if(isset($_POST["hobby"])){
    $hobby = $_POST["hobby"];
    // echo "<div>".$_POST["hobby"]."</div>";
} 

if(isset($_POST["prefecture"])){
    $prefecture = $_POST["prefecture"];
    // echo "<div>".$_POST["prefecture"]."</div>";
} 

if(isset($_POST["movie"])){
    $movie = $_POST["movie"];
    // echo "<div>".$_POST["movie"]."</div>";
} 

?>

<form action="work4.php" method="post">
    <h1 class="col-md-12 text-center">フォーム</h1>
    <table>
        <tr><th>名前</th><td><input type="text" class="form-control" name="name" value="<?php echo $name; ?>"></td></tr>
        <tr><th>年齢</th><td><input type="text" class="form-control" name="age" value="<?php echo $age; ?>"></td></tr>
        <tr><th>趣味</th><td><input type="text" class="form-control" name="hobby" value="<?php echo $hobby; ?>"></td></tr>
        <tr><th>都道府県</th><td>
            <select class="form-control" name="prefecture">
                <option value="">選択してください</option>
                <option value="tokyo" <?php if($prefecture == "tokyo") print "selected=\"selected\""; ?>>東京</option>
                <option value="kanagawa" <?php if($prefecture == "kanagawa") print "selected=\"selected\""; ?>>神奈川</option>
                <option value="chiba" <?php if($prefecture == "chiba") print "selected=\"selected\""; ?>>千葉</option>
                <option value="saitama" <?php if($prefecture == "saitama") print "selected=\"selected\""; ?>>埼玉</option>
            </select></td></tr>
        <tr><th><label for="movie" class="col-md-3 control-label">好きな映画</label></th><td>
            <label for="action">
                <input type="radio" id="action" name="movie" value="action" 
                <?php if($movie == "action") print "checked=\"checked\""; ?>/>
                アクション
            </label>
            <label for="comedy">
                <input type="radio" id="comedy" name="movie" value="comedy" 
                <?php if($movie == "comedy") print "checked=\"checked\""; ?>/>
                コメディ
            </label>
            <label for="suspense">
                <input type="radio" id="suspense" name="movie" value="suspense" 
                <?php if($movie == "suspense") print "checked=\"checked\""; ?>/>
                サスペンス
            </label>
            <label for="sf">
                <input type="radio" id="sf" name="movie" value="sf" 
                <?php if($movie == "sf") print "checked=\"checked\""; ?>/>
                SF
        </label></td></tr>

        <tr><th></th><td><input type="submit" class="btn" value="送信"></td></tr>
    </table>
    
</form>

<?php

// echo $hobby;

?>

</body>
</html>
