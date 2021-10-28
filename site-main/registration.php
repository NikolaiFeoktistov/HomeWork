<?php
session_start();
require_once("secondary_header.php");
?>
<html>
<body>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"

<div class="reg">
    <h1>Форма регистрации</h1>
    <form action="check_reg.php" method="post">
        <input type="text" name="login" minlength="3" maxlength="100" required placeholder="Введите логин"><br>
        <input type="password" name="password" minlength="5" maxlength="32" required placeholder="Введите пароль"><br>
        <input style="color: green" type="submit" name="submit_register" value="Зарегистрироваться">
    </form>
    <br>
    <p>Если вы зарегистрированы, тогда нажмите <a href="authorization.php">здесь</a>.</p>
</div>
</body>
</html>