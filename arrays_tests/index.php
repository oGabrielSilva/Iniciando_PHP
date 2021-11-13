<?php
  $arr = [[[123, 33, 'Abc'], 1], [1, 2, 3]];
  $h = 'Hello';
  print_r($arr);
  echo "<br>Elm: {$arr[0][0][2]}";
  echo "<br>Elm: $arr[0][0][2]";
  echo "<br>Elm: {strtoupper($h)}";
  echo '<br>' . strtoupper($h);
  echo '<br>' . strtoupper($arr[0][0][2]);
?>