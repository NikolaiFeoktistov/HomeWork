<?php
$str = 'Open the file 123.png';
echo "<pre>";
    if (mb_substr($str, -4, 20) === ".png") {
        echo "Да" . "<br>";
}
    else echo "Не судьба";
?>