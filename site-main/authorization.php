<?php
require_once("secondary_header.php");
?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"

<div class="auth">
    <h1>Форма авторизации</h1>
    <form action="check_auth.php" method="post">
        <input type="text" name="login" placeholder="Введите логин"><br>
        <input type="password" name="password" placeholder="Введите пароль"><br>
        <button style="color: green" type="submit">Авторизироваться</button>
    </form>
    <br>
    <p>Если вы не зарегистрированы, тогда нажмите <a href="registration.php">здесь</a>.</p>
</div>