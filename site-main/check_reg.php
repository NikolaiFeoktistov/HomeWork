<?php

$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

$password = md5($password. "qazwsxedc");

$mysql = new mysqli('localhost', 'Nikolai', 'Kolyan123q', 'testreg') or die("Ошибка");
$mysql->query("INSERT INTO `users` (`login`, `password`) 
VALUES('$login', '$password')");

$mysql->close();

header('Location: site.php');
?>

