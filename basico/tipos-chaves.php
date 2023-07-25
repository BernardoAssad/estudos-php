<?php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}

/* Esse arquivo é bem importante para o entendimento dos tipos de dados em índices de arrays. O PHP só aceita números inteiros ou strings como chaves para 
arrays. No primeiro caso, o índice 1 é igual a 'a'. Depois, o índice '1' é igual a 'b' e no output dá b, pois o PHP, quando tem um número em string ele 
converte para número. 1.5 igual 'c', subescreve também pois, não aceita decimal, então ignora tudo depois do ponto. true igual a 'd'. True é igual a 1
False = 0 então, o resultado final é 'd'.*/