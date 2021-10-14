<?php
include 'day-night.php';
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
    <a href="table.php">Таблица Менделеева</a>
    <a href="flex-grid.php">Flex/Grid</a>
    <a href="works.php">Домашняя работа 08.10</a>
</header>
<img src="photo/i.jpg"
     style="max-width: 100vw;max-height: 100vh;display: flex; float:left; border: 15px double #76c14c;" alt>
<main class="main">
    <div class="fio">
        <div>Феоктистов Николай Владимирович</div>
    </div>
    <div class="info">
        <div>
            <?php
            echo "<p style='color:darkseagreen'> Я студент МГТУ. Учусь на 2 курсе. <br> Мне 18 лет.<br> Хобби: компьютерные игры.</p>"
            ?>
        </div>
    </div>
    <div class="like">
        <div>
            <?php
            echo "<p style='color:darkseagreen'> Все занятия, которые прошли понравились.<br> Спать не хотелось).</p>"
            ?>
        </div>
    </div>
    <div class="soglas-glas">
        <?php
        function soglas_glas()
        {
            $text = "Я студент МГТУ. Учусь на 2 курсе. Мне 18 лет. Хобби: компьютерные игры. Все занятия, которые прошли понравились. Спать не хотелось).";
            $pattern = '~(?<glas>[аеёиоуыэюя])|(?<soglas>[бвгджзйклмнпрстфхцчшщъь])~iu';
            preg_match_all($pattern, $text, $a);
            $glas = count(array_filter($a['glas']));
            $soglas = count(array_filter($a['soglas']));

            echo 'Гласных букв: ' . $glas . '<br />Согласных букв: ' . $soglas;
        }
        soglas_glas()
        ?>
    </div>
    <div class="count_words">
        <?php
        function count_words()
        {
            $text1 = "Я студент МГТУ. Учусь на 2 курсе. Мне 18 лет. Хобби: компьютерные игры. Все занятия, которые прошли понравились. Спать не хотелось).";
            echo "Всего слов: " . str_word_count($text1); // Почему 42?
        }

        count_words();
        ?>
    </div>
    <div class="date">
        <?php
        function d_t(){
            $date1 = date_create("19-12-2002");
            $date2 = date_create("now");
            $result = date_diff($date1, $date2);
            echo "Количество дней : " . $result->days;
        }
        d_t();
        ?>
    </div>
</main>
</body>
</html>