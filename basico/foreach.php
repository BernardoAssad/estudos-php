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

$contasCorrentes[] = [
    'titular' => 'Vavá',
    'saldo' => 4000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

/* Nesse exemplo, quis demonstrar que caso estejamos trabalhando com array associativo, é necessário tomar cuidado, neste caso em específico, não ocorreu
nenhum problema TÃO GRAVE, nesse aprendizado pois, quando adicionamos um elemento na array sem passar todos os parâmetros necessários, como o CPF, como o
outro exemplo antes desse, o PHP pega o primeiro índice, neste caso o CPF, e adiciona mais 1 ao final, e como temos CPFs fim 00,01 e 02, o que ele achou foi
o 03. Mas caso estejamos trabalhando com números de processos, ou até mesmo CPFs reais, isso não seria uma boa ideia. */

$contasCorrentes = [
    '123.456.789-00' => [
        'titular' => 'Barbosa',
        'saldo' => 5000   
    ],
    '123.456.789-01' => [
        'titular' => 'Ademir',
        'saldo' => 8900
    ],
    '123.456.789-02' => [
        'titular' => 'Edmundo',
        'saldo' => 456
    ]
];

$contasCorrentes[] = [
    'titular' => 'Vavá',
    'saldo' => 4000
];

$contasCorrentes[] = [
    'titular' => 'Alecssandro',
    'saldo' => 200
];

$contasCorrentes['123.456.789.03'] = [
    'titular' => 'Bebeto',
    'saldo' => 900
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

/* Nesse exemplo deu um problema na hora de imprimir o CPF do titular Vavá, pelo motivo de ser uma string, não tem como o PHP fazer um jeito de integrar o
índice na array de uma forma específica. A forma que ele implementou foi que como não temos nenhum índice numérico neste caso, ele coloca o primeiro índice
de um array, já que não passamos para ele um parâmetro específico. Então por isso que, ficou 0 Vavá no output, 1 Alecssandro e 123.456.789-03 Bebeto */