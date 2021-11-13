<?php
  include_once('class.php');
  include_once('extends.php');

  //Variável para teste

  $cell = new Cell;

  $tablet = new Tablet;

  $cell->setOwner("Miguel");
  $cell->setBrand("Motorola");
  
  print_r($cell);
  echo '<br>';

  echo 'Owner: ';
  echo $cell->owner() . ';<br>';

  echo 'Brand: ';
  echo $cell->brand() . ';<br>';

  echo "Attachment: " . $cell->attachment() . '.<br>';

  echo '<br>Testando as const diretamente: <br>';

  echo $cell::ATTACHMENT;

  echo '<br>';

  echo $cell::ATTACHMENT2;

  echo '<br>';

  //Instanceo

print_r($tablet);

echo '<br>';

if($tablet instanceof Cell) {
  echo 'Tablet é uma instanceof de Cell';
}
