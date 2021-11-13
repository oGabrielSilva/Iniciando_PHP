<?php
  $f = 'frase de teste para manipular strings <br>';
  $f2 = 'FRASE DE TESTE PARA MANIPULAR STRINGS';

  //ucfirst
  echo 'Testando com ucfirst <br>';
  echo ucfirst($f);

  //ucwords
  echo 'Testando com ucwords <br>';
  echo ucwords($f);

  //strtoupper
  echo 'Testando com strtoupper <br>';
  echo strtoupper($f);

  //strtolower
  echo 'Testando com strtolower <br>';
  echo strtolower($f2);
  echo '<br><br>';
?>

<?php
  $tags = '<p>Um parágrafo</p><div>Uma div</div><pre>Um texto em tags pre</pre><script>console.log("Um script")</script>';

  echo $tags;

  echo '<br>';

  echo strip_tags($tags);
?>

<?php
  $r = '*';
  for ($i = 0; $i <= 1000; $i++) {
    echo str_repeat($r, $i) . '<br>';
  }
?>
