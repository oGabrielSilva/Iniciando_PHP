<?php 
  // $arr = [1, 2, 'Olá', 'Mundo'];

  // $var = implode(', ', $arr);
  // echo $var . '<br>';

  $list = ['Arroz', 'Cerveja', 'Café', 'Carne'];

  function setLine($list) {
    return 'Você comprou: ' . implode(', ', $list) . '.<br>';
  }

  echo setLine($list);
?>