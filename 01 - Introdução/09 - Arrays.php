<?php
//declaração de um array
// Colocando o índice e essa seta para o item, conseguimos definir em qual posição do array ele será inciado
// Entretanto, o php itera sobre esses arrays na ordem que declaramos, tanto no foreach quanto no print_r
$filmes = array(2 => 'Filme 1', 1 => 'Filme 2', 'Filme 3', 'Filme 4');

foreach ($filmes as $filme) {
    echo $filme . '<br>';
} // ou

// Maneira de inserir um dado no final do array;
$filmes[] = 'Filme 5';

$filmes[] = 'Filme 6';

print_r($filmes);

echo '<br><br>';

// Array associativo
$pessoa = array(
    'nome' => 'Erick',
    'idade' => 20,
    'profissao' => 'Desenvolvedor'
);

// O array associativo pode receber strings como chaves sem problema algum 
echo $pessoa['nome'];
echo '<br>';

print_r($pessoa);

$pessoa2 = array(
    'nome' => 'Pedro',
    'idade' => 25,
    'profissao' => 'Designer'
);

$pessoas = array(
    $pessoa,
    $pessoa2
);

echo '<br><br>';
// Nested list
// Tática para imprimir um array formatado
echo '<pre>';
var_dump($pessoas);
echo '</pre>';

$lista = ['nome' => 'lista'];

echo '<br><br>';

print_r($lista);
