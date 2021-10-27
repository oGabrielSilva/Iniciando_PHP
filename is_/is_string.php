<?php
  $t = 'Teste de string';
  $n = 11;

  if(is_string($t)) {
    echo "'$t' é uma string, passou no if";
  }

  echo '<br>';
  
  if(!is_string($n)) {
    echo "Enquanto $n não é uma string";
  }
?>