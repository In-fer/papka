<?php
$day = 8;
if ($day > 7) {                                                 // проверка на неверность дня недели
    echo "Неизвестный день";
}
else                                                            // проверка на рабочий или выходной день недели
echo ($day <= 5) ? "Это рабочий день" : "Это выходной день";
?>
