<?php
$day = 7;
switch ($day) {
  case 1:                     // проверка на рабочие дни недели
  case 2:
  case 3:
  case 4:
  case 5:
    echo "Это рабочий день";
    break;
  case 6:                     // проверка на выходные дни недели
  case 7:
    echo "Это выходной день";
    break;
  default:                    // нет такого дня недели
    echo "Неизвестный день";
    break;
}
?>
