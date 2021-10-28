<?php 
  $array = [1, 2, 3];
  echo 'echo não carrega arrays, usamos print_r: ';
  print_r($array);
  echo '<br>';
  echo 'Mas podemos usar o echo para os itens dentro do array: ';
  echo $array[2];
  echo '<br>Sorte a nossa que podemos adicionar vários tipos de dados dentro do mesmo: ';
  $arr = ['Name', 88, true];
  print_r($arr);
?>