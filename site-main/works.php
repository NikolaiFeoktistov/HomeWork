<?php
include 'day-night.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--    <script type="text/javascript" src="snow.js"></script>-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZ 08.10</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dz-08.10.css">
</head>
<body>
<img src="photo/download.jpg"
     style="width: 100px;height: 100px; display:block;float:left;border: 15px double #ffe100;" alt>
<header class="header">
    <a href="site.php">Главная</a>
    <a>Домашняя работа 08.10 </a>
    <a href="table.php">Таблица Менделеева</a>
    <a href="flex-grid.php">Flex/Grid</a>
</header>
<main class="start">
    <a><b>Задача №1</b></a>
    <div class="z-1">
        <?php
        echo "<br>" . "Посчитать количество членов семьи Ivanov, Petrov, Smith. Посчитать количество Ivan (1),Kate(2), Tom(1) и т.д." . "<br>";
        $arr = array(
            'Ivanov' => array('Ivan', 'Kate', 'Tom'),
            'Petrov' => array('Bob', 'Ann', 'Tanya'),
            'Smith' => array('Kate', 'Same'));
        echo "<pre>";
        echo "Количество членов в каждой семьи:" . "<br>";
        echo "<pre>";
        echo "Ivanov" . ' - ' . count($arr['Ivanov']) . ' ' . "человека" . "<br>";
        echo "Petrov" . ' - ' . count($arr['Petrov']) . ' ' . "человека" . "<br>";
        echo "Smith" . ' - ' . count($arr['Smith']) . ' ' . "человека" . "<br>";
        $first_family = implode(",", $arr['Ivanov']); //implode — Объединяет элементы массива в строку
        $second_family = implode(",", $arr['Petrov']);
        $three_family = implode(",", $arr['Smith']);
        $full_family = $first_family . $second_family . $three_family;
        echo "<pre>";
        echo "Имя Kate встречается" . " " . substr_count($full_family, 'Kate') . " раза" . "<br>"; //substr_count — Возвращает число вхождений подстроки
        echo "Имя Ivan встречается" . " " . substr_count($full_family, 'Ivan') . " раза" . "<br>";
        echo "Имя Tom встречается" . " " . substr_count($full_family, 'Tom') . " раза" . "<br>";
        echo "Имя Bob встречается" . " " . substr_count($full_family, 'Bob') . " раза" . "<br>";
        echo "Имя Ann встречается" . " " . substr_count($full_family, 'Ann') . " раза" . "<br>";
        echo "Имя Same встречается" . " " . substr_count($full_family, 'Same') . " раза" . "<br>";
        ?>
    </div>
    <a><b>Задача №2</b></a>
    <div class="z-2">
        <?php
        echo "<br>" . "Создать массив размера n, заполненный случайными числами. Вывести каждый элемент массива с новой строки.  <br>  Все четные элементы массива необходимо вывести жирным шрифтом." . "<br>";
        echo "<pre>";
        $arr = array();
        for ($i = 0; $i <= 10; $i++) {
            $arr = (mt_rand(1, 20));
            if ($arr % 2 == 0) {
                echo "<b>$arr</b> <br>";
            } else echo "$arr <br>";
        }
        ?>
    </div>
    <a><b>Задача №3</b></a>
    <div class="z-3">
        <?php
        echo "<br>" . "Создать двумерный массив произвольной длины, содержащий строковые значения. <br> Необходимо вывести все элементы массива, начинающиеся на А <br>";
        echo "<pre>";
        $arr = array(
            'Eat' => array('Арбуз', 'Дыня', 'Огурец'),
            'Animal' => array('Тигр', 'Аист', 'Зебра'),
            'Name' => array('Катя', 'Дима', 'Андрей'),
        );
        print_r($arr);
        foreach ($arr['Eat'] as $words) {
            if (mb_substr($words, 0, 1) === "А") {
                echo $words . "<br>";
            }

        }
        foreach ($arr['Animal'] as $words) {
            if (mb_substr($words, 0, 1) === "А") {
                echo $words . "<br>";
            }
        }
        foreach ($arr['Name'] as $words) {
            if (mb_substr($words, 0, 1) === "А") {
                echo $words . "<br>";
            }
        }
        ?>
    </div>
    <a><b>Задача №4</b></a>
    <div class="z-4">
        <?php
        echo "<br>" . "Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива и <br> количество элементов массива для каждого измерения. <br>";
        echo "<pre>";
        $arr4 = array(
            'First-free' => [1, 2, 3],
            'Four-six' => [4, 5, 6],
            'Seven-nine' => [7, 8, 9],
        );
        echo "Общее количество элементов: " . count($arr4, COUNT_RECURSIVE) . "<br>";
        echo "Число элементов в 1ом массиве: " . count($arr4['First-free'], COUNT_RECURSIVE) . "<br>";
        echo "Число элементов во 2ом массиве: " . count($arr4['Four-six'], COUNT_RECURSIVE) . "<br>";
        echo "Число элементов в 3ем массиве: " . count($arr4['Seven-nine'], COUNT_RECURSIVE) . "<br>";
        ?>
    </div>
</main>
</body>
</html>
