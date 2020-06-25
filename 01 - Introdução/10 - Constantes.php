<?php
// define para definir constantes
// primeiro parâmetro é o nome da constante, depois o valor
define('CONSTANTE', '192.168.0.1');
define('HOST', 'minha.api.com.br');


echo CONSTANTE;
echo '<br>';
echo HOST;

// defined verifica se a constante já foi definida
if (!defined('HOST')) {
    echo '<br>NÁO, HOST NÃO DEFINIDO';
} else {
    echo '<br>HOST DEFINIDO';
}

// outra forma de definir constantes é
const TOKEN = 'xyz';
// const é mais performático é que o const é declarado em tempo de compilação, enquanto o define() tempo de execução
// não se pode usar o define dentro de classes ou interfaces, já o const, pode

echo '<br>' . TOKEN;
