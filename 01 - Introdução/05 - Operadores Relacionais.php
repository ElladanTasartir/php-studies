<?php 

  $a = true;
  $b = false;
  
  if ($a == $b) {
    echo 'Comparação verdadeira';
  } else {
    echo 'Comparação falsa';
  }

  /* Existe o operador de comparação === igual js para comparar tipo e igualdade de valor */

  echo ($a === true);
  echo (10 === '10');

  var_dump($a); /* Fala informações sobre a variável enviada como argumento */
?>