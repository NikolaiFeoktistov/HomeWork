<?php
$time =date("H:i:s");
if (($time > "08:00") && ($time < "20:00"))//8.00 и 20.00
{
    echo "<link rel='stylesheet' href='css/light.css'> ";
}
else {
    echo "<link rel='stylesheet' href='css/night.css'>";
}
