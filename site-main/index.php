<?
//$now = new DateTime();
//echo $now-> format('H:i:s'), "\n";
//echo strtotime("now"), "\n";
if (strtotime("now") > 1633582800 && strtotime("now") < 1633626000) //8.00 и 20.00
{
    echo "<link rel='stylesheet' href='css/light.css'> ";
}
else echo "<link rel='stylesheet' href='css/night.css'>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--    <script type="text/javascript" src="snow.js"></script>-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My site</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<img src="photo/download.jpg"
     style="width: 100px;height: 100px; display:block;float:left;border: 15px double #ffe100;" alt>
<header class="header">
    <a>Мой первый сайт</a>
    <a href="table.html">Таблица Менделеева</a>
    <a href="flex-grid.html">Flex/Grid</a>
</header>
<img src="photo/i.jpg"
     style="max-width: 100vw;max-height: 100vh;display: flex; float:left; border: 15px double #76c14c;" alt>
<main class="main">
    <div class="fio">
        <div>Феоктистов Николай Владимирович</div>
    </div>
    <div class="info">
        <div>Я студент МГТУ. Учусь на 2 курсе.<br> Мне 18 лет.<br> Хобби: компьютерные игры.</div>
    </div>
    <div class="like">
        <div>Все занятия, которые прошли понравились.<br> Спать не хотелось)</div>
    </div>
</main>
</body>
</html>