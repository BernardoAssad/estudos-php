<?php

$jogadores2023 = [
    'Gabriel',
    'Rayan',
    'Jair',
    'Marlon Gomes',
    'Maicon'
];

$jogadores1998 = [
    'Romário',
    'Edmundo',
    'Juninho',
    'Felipe'
];

$jogadores2024 = [...$jogadores2023, 'Léo Jardim', ...$jogadores1998];
array_push($jogadores2024, 'Cristiano', 'Phillipe', 'Lionel');
$jogadores2024[] = 'Neymar';

array_unshift($jogadores2024, 'Bernardo', 'Raniel');

echo array_shift($jogadores2024) . PHP_EOL;

echo array_pop($jogadores2024) . PHP_EOL;

var_dump($jogadores2024);


/*
$array[] = 'array';: Adiciona a string 'array' ao final do array.
array_shift: Remove e retorna o primeiro elemento de um array.
array_unshift: Adiciona um ou mais elementos no início de um array.
array_pop: Remove e retorna o último elemento de um array.
array_push: Adiciona um ou mais elementos no final de um array.
$array = [... $array2, 'array', ... "$array3]: Cria um novo array concatenando os elementos do $array2, a string 'array', e os elementos do $array3.
filter(): Filtra elementos de um array utilizando uma função de callback fornecida.
map(): Cria um novo array aplicando uma função de callback a cada elemento do array original.
reduce(): Reduz os elementos de um array a um único valor aplicando uma função de callback.
*/