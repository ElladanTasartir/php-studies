<?php
$fruta = 'Laranja';

switch ($fruta) {
    case 'Laranja':
        echo 'Laranja';
        break;
    case 'Maçã':
        echo 'Maçã';
        break;
    default:
        echo 'Não identificado';
        break;
}

echo '<br>';

// Basicamente igual toda outra linguagem

/* if ($fruta === 'Maçã') {
    echo 'É uma maçã';
    // Else if é junto, ou seja, elseif
} elseif ($fruta === 'Laranja') {
    echo 'É uma Laranja';
} else {
    echo 'Não identificado';
} */
