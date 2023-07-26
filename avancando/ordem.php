<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

sort($notas);
usort($notas, 'ordenaNotas');
var_dump($notas);

/*
    Neste arquivo, fiz o uso de algumas funções diferentes. O sort serve para ordenarmos uma array de alguma forma, seja ela alfabética ou númerica crescente.
    Além dela, também usamos usort, a diferença é que o usort ou user sort é uma forma de ordenarmos a array de um jeito que nós preferimos, então criei a
    função chamada ordenaNotas e passei como parâmetro para o usort a array e a function. Além dessas também usei o var_dump que é uma função bem interessante
    para vermos como está sendo executada a estrutura de algo que estamos utilizando. 
*/