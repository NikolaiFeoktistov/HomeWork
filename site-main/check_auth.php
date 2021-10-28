<?php
session_start();
$_SESSION['user_name']=$_POST['login'];
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password . "qazwsxedc");

$mysql = new mysqli('localhost', 'Nikolai', 'Kolyan123q', 'testreg') or die("Ошибка");

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc(); #конвертация в массив
if (count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}
else{
    header('Location: Hello.php');
}
setcookie('user', $user['name'], time() + 24 * 3600 * 30, "/");

$mysql->close();
?>