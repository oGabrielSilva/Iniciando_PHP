<?php 
  class Pessoa {
    public $name;
    function talk() {
      echo "$this->name está falando";
    }
  }

  $diana = new Pessoa();
  $diana->name = 'Diana';
  echo $diana->name;
  echo '<br>';
  $diana->talk();
  echo '<br>';
  print_r($diana);
?>