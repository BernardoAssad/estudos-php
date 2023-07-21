<?php

$conta1 = [
    'titular' => 'Barbosa',
    'saldo' => 5000
];

$conta2 = [
    'titular' => 'Ademir',
    'saldo' => 8900
];

$conta3 = [
    'titular' => 'Edmundo',
    'saldo' => 456
];

$contasCorrentes = [
    $conta1, 
    $conta2, 
    $conta3
];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

$contasCorrentes = [
    12345678900 => $conta1, 
    12345678901 => $conta2, 
    12345678902 => $conta3
];

foreach ($contasCorrentes as $cpf => $conta) {
     echo $cpf . PHP_EOL;
}



/* Neste arquivo, obtive um conhecimento bem importante, o foreach. foreach funciona basicamente da mesma forma que o for, porém não preciso saber a 
quantidade de índices e muito menos o valor deles. O foreach é um for para cada elemento de uma array, ou seja, na minha array contasCorrentes, ela possui
3 arrays dentro dela, que no foreach será passada por todas para obter um resultado. O conceito de foreach é para escrever menos linhas de códigos
quando somos capazes de querer alguma informação igual entre todos os elementos de uma array sem precisar saber o índice deles. A estrutura é simples,
foreach ($arrayDoForeach as $nomeDoElemento) {}. O array do foreach pode ser qualquer array que eu queria passar instruções afim de receber resultados de
todos os elementos dentro dessa lista. E o nome do elemento será o nome de cada elemento da array que dentro do foreach iremos referir assim.

Além desse exemplo, criei 2 outros exemplos abaixo, um da array e outro do foreach, para mostrar, que caso tenhamos índices númericos, ou nesse caso,
um CPF ficctício, podemos usar a estrutura do foreach diferente, onde adicionamos um campo chamado cpf recebendo a conta, para dizer que o índice de cada
conta do array é chamado de cpf. Nesse caso, eu quis pegar o número do CPF de cada conta, então só pedi para printar o parâmetro CPF e pronto.*/

$contasCorrentes = [
    12345678900 => [
        'titular' => 'Barbosa',
        'saldo' => 5000   
    ],
    12345678901 => [
        'titular' => 'Ademir',
        'saldo' => 8900
    ],
    12345678902 => [
        'titular' => 'Edmundo',
        'saldo' => 456
    ]
];

$contasCorrentes[12345678903] = [
    'titular' => 'Vavá',
    'saldo' => 4000
];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

// Nesse outro exemplo, quis demonstrar que é possível adicionar um item deste jeito em um array associativo e fazer um foreach nele também.