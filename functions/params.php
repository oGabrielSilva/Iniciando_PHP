<?php 
  function testWithParams($a) {
    echo "O valor do argumento é: $a. <br>";
    echo 'Não se pode criar functions com params e não os mandar';
  }

  testWithParams(1, 22);

  echo '<br>';
  echo 'PHP ignora argumentos não esperados na function';
?>