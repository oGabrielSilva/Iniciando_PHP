<?php
  $t = 'Teste de string';
  $n = 11;

  if(!is_int($t)) {
    echo "'$t' é uma string, passou no if";
  }

  echo '<br>';
  
  if(is_int($n)) {
    echo "Enquanto $n não é uma string, é um inteiro. Passou no if";
  }
?>