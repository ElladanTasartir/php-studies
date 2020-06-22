<?php

  $name = 'PHP';

  function getName() {
    global $name;
    /* $GLOBALS['name']; Funciona da mesma forma que global $name, acessamos a variável no escopo global */
    /* Dessa forma, declaramos que $name é a variável $name global, então
    podemos atribuíla diretamente dentro da função */
    $name = 'Erick';
    echo $name;
  }

  getName();
  echo $name;
?>