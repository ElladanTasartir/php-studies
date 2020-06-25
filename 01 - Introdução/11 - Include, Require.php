<?php

// Traz o conteúdo do arquivo chamado dentro do script atual, funções, classes dos outros arquivos também podem ser chamadas quando se dá um include
include "09 - Arrays.php";
echo '<br>Include normal<br>';
include_once "09 - Arrays.php"; // Não permite que esse arquivo seja incluído mais que uma vez, ele examina se já foi incluído e se já tiver sido
// Também pode ser chamado da seguinte maneira: 
echo '<br>include_once aqui<br>';
include("09 - Arrays.php");
echo '<br>include como função<br>';
// Ele não inclui
require "09 - Arrays.php";
echo '<br>Require aqui<br>';
require_once "09 - Arrays.php";
echo '<br>Require_once aqui<br>';

// A diferença entre o include e o require é que no caso do require, caso o arquivo não exista, ele para completamente o script, lança um fatal error
// No caso do include, ele lança um warning, mas o script continua executando suas instruções
