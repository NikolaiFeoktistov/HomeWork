<?php
session_start();
$name = $_SESSION['user_name'];
$to = "email";
$content = $_POST['comment'];
if (isset($_POST['comment'])) {
    mail($to, "Text", $content);

}
?>
<link rel="stylesheet" href="css/hello.css">
<div style="text-align: center;">
    <h1>Добро пожаловать <?echo "$name"?></h1>
</div>
<form method="post">
    <input style="margin-left: 30%;text-align:center;width:800px; height: 300px" type="text" name="comment"
           placeholder="Напишите комментарий"><br>
    <div class=footer>
        <a href="bitrix.php">Bitrix</a>
        <a href="site.php">Вернуться на главную</a>
        <a href="fact.php">Fact.digital</a>
    </div>
    <div class="output">
        <?php
        echo "Последняя страница, которую вы посетили: ".$_SESSION['page'];
        ?>
    </div>
</form>

