<?php
$a = array(
    "Понедельник",
    "Вторник",
    "Среда",
    "Четверг",
    "Пятница",
    "Суббота",
    "Воскресение"
    );
$q = 1;
foreach ($a as $value) {
    echo $value . " - день " . $q . "-й<br>";
    $q++;
}
?>