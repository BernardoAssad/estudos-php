<?php

$notas = [
    [
        'aluno' => 'Arabella',
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
    // if ($nota1['nota'] > $nota2['nota']) {
    //     return -1;
    // }

    // if ($nota2['nota'] > $nota1['nota']) {
    //     return 1;
    // }

    // return 0;
    return $nota2['nota'] <=> $nota1['nota'];
}

sort($notas);
rsort($notas);
asort($notas);
arsort($notas);
ksort($notas);
krsort($notas);
usort($notas, 'ordenaNotas');
var_dump($notas);

/*
    Neste arquivo, fiz o uso de algumas funções diferentes. O sort serve para ordenarmos uma array de alguma forma, seja ela alfabética ou númerica crescente.
    Além dela, também usamos usort, a diferença é que o usort ou user sort é uma forma de ordenarmos a array de um jeito que nós preferimos, então criei a
    função chamada ordenaNotas e passei como parâmetro para o usort a array e a function. Além dessas também usei o var_dump que é uma função bem interessante
    para vermos como está sendo executada a estrutura de algo que estamos utilizando.

    O rsort coloca a array em ordem decrescente

    O asort ou arsort coloca uma array associativa em ordem, o asort em crescente e o arsort ao contrário.

    O ksort ordena de forma crescente os índices das arrays, por exemplo: ['Ademir'] => 5 | ['Barbosa'] => 1; Caso façamos isso, o Ademir virá primeiro na 
    ordem crescente. O krsort a mesma coisa, porém em ordem decrescente. 

    O código que está comentado na function ordenaNotas, está para mostrar que o jeito padrão de fazer um usort é daquele jeito, basicamente, comparamos 
    uma nota da array com uma outra, caso a nota 1 seja maior que a nota 2, irá fazer de forma decrescente, caso contrário, fará de forma crescente.
    No fim, clocamos um return 0 para caso forem iguais, deixar normal.

    Porém isso tudo facilitou com o operador de espaçonave <=>, que ele faz a mesma coisa só que em uma linha. Se nota2 for menor que nota 1 irá decrescer,
    se for = fica normal e se for maior fica em ordem crescente. Para ordenarmos em ordem crescente, basta colocar nota <=> nota2 ao ínves do que está.
*/