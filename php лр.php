<table border = "1">
<?php
$cols = 7;                                                          // столбцы
$rows = 9;                                                          // строки
for ($tr = 1; $tr <= $rows; $tr++){                                 // кол-во строк
  echo "<tr>";
  for ($td = 1; $td <= $cols; $td++){                               // кол-во столбцов
    if ($tr == 1 || $td == 1){                                      // проверка для окраски ячейки
      echo "<th style='background-color:yellow;font-weight:900'>",
      $tr * $td, "</th>";
    }    else{
      echo "<td>", $tr * $td, "</th>";
    }
  }
  echo "</tr>";
}
?>
</table>
