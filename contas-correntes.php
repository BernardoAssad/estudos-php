<?php

$conta1 = [
    'titular' => 'Bernardo',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Roberto',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Romário',
    'saldo' => 852
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}


/* Aqui temos um conceito um pouco diferente em trabalhar com arrays, porém já tinha visto na linguagem LUA. Esse tipo de array, se chama array associativa,
que ao invés de deixarmos a linguagem definir o índice (chaves) da array, nós mesmos definimos. O que acontece é que, em algumas linguagens, como PHP, quando não
definimos o índice, como por exemplo, 'titular', ele nos dá 0, 1, 2 e assim sucessivamente como índices, e esse método se chama, array númerica. No caso
acima, onde nós definimos qual é o índice se chama array associativa. */