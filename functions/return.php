<?php
  function test($a, $b) {
    return $a + $b;
  }

  echo test(50, 19) . '<br>';
  $a = test(10, 22);
  echo $a . '<br>';

  $aa = test($a, 200);
  echo $aa . '<br>';
  $bb = test($a, $aa);
  echo "$a + $aa = $bb" . '<br>';
?>