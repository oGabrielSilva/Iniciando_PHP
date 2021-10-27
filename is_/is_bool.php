<?php
  $boolean = true;

  if(is_bool($boolean)) {
    echo 'Variável passou no if.';
  }

  if(!0) {
    echo '<br>0 pode ser considerado falso';
  }

  if(1) {
    echo '<br>1 pode ser considerado true';
  }

  if(0 == false) {
    echo '<br>Usando também operadores de igualdade';
  }
?>