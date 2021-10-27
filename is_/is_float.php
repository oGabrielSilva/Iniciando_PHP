<?php
  $t = 'Teste de string';
  $n = 11.5;

  if(!is_float($t)) {
    echo "'$t' é uma string, passou no if, não é um float";
  }

  echo '<br>';
  
  if(is_float($n)) {
    echo "Enquanto $n não é uma string, é um decimal. Passou no if";
  }
?>