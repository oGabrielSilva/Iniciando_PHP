<?php 
  include_once("Method/class.php");
  include_once("Method/extends.php");

  $cell = new Cell;
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

  //Tablet 
  echo '<br>Tablet: ';

  $tablet = new Tablet;

  $tablet->setOwner("Biel");
  $tablet->setBrand("Samsung");

  print_r($tablet);

  echo '<br>Owner: ';
  echo $tablet->owner() . ';<br>';

  echo 'Brand: ';
  echo $tablet->brand() . ';<br>';

  echo "Attachment: " . $tablet->attachment() . '.<br>';

  echo '<br>Testando as const diretamente: <br>';

  echo $tablet::ATTACHMENT;

  echo '<br>';

  echo $tablet::ATTACHMENT2;
?>