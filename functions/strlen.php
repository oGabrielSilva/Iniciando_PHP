<?php 
  $str = 'Um exemplo para utilizar a function strlen';
  echo strlen($str). '<br>';
  $counter = 0;
  
  for ($i = 0; $i < strlen($str); $i++) {
    if($str[$i] === 'a') {
      $counter++;
      echo $str[$i] . '<br>';
    }
  }
  echo $counter;
?>