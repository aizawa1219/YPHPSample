<form action="work14.php" method="post">
    <h1>申し込みありがとうございました</h1>
    <p>以下の情報で申し込みを受け付けました</p>
    <table>
        <tr><th>名前</th><td><?= $data->getName(); ?></td></tr>
        <tr><th>年齢</th><td><?= $data->getAge(); ?></td></tr>
        <tr><th>趣味</th><td><?= $data->getHobby(); ?></td></tr>
    </table>
</form>
