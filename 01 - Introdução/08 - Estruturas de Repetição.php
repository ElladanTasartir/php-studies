<?php

// For
$noticias = [
    'Notícia 1',
    'Notícia 2',
    'Notícia 3',
    'Notícia 4',
    'Notícia 5',
    'Notícia 6',
    'Notícia 7',
    'Notícia 8',
    'Notícia 9'
];

for ($i = 0; $i < count($noticias); $i++) {
    // Count é uma função do php que fala qual o número de elementos presentes num array, por exemplo
    echo $noticias[$i] . '<br>';
}

echo '<br> Fim do For clássico <br>';

// Foreach
echo '<br>';

foreach ($noticias as $noticia) {
    echo $noticia . '<br>';
}

// Pode se escrever dessa forma para conseguir as chaves no foreach:
echo '<br>';
echo '<br>';

foreach ($noticias as $chave => $noticia) {
    echo $chave . ' => ' . $noticia . '<br>';
}

echo '<br>';
echo '<br>';

$i = 0;

//  while
while ($i < count($noticias)) {
    echo $noticias[$i] . '<br>';
    $i++;
}

echo '<br>';
echo '<br>';

$i = 0;
//  do-while
do {
    echo $noticias[$i] . '<br>';
    $i++;
} while ($i < count($noticias));
