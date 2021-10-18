<?php
if (count($_POST) > 0) {
    $login = sha1(trim($_POST['login']));
    $password = sha1(trim($_POST['password']));
    if ($login == 'd6ac022931a66a2bcc244db91818ebec76ce5e18' & $password == '40bd001563085fc35165329ea1ff5c5ecbdbbeef') { //Mike 123
        header("Location: authorization.php");
    }
}
?>
<link rel="stylesheet" href="css/reg_auth.css">

<div class="reg">
    <h1>Форма регистрации</h1>
    <form method="post">
        <input type="text" name="login" placeholder="Введите логин"><br>
        <input type="email" name="email" placeholder="Введите Email"><br>
        <input type="password" name="password" placeholder="Введите пароль"><br>
        <button style="color: green" type="submit ">Зарегистрировать</button>
    </form>
    <br>
    <p>Если вы зарегистрированы, тогда нажмите <a href="authorization.php">здесь</a>.</p>
    <p>Вернуться на <a href="site.php">главную</a>.</p>
</div>