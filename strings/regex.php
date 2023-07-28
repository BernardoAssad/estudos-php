<?php

$telefones = ['(11) 99999 - 9999', '(21) 99999 - 9999', '(22) 2222 - 2222'];

foreach ($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
    $telefoneValido = preg_match(
        $regex,
        $telefone,
        $correspondencia
    );

    if ($telefoneValido) {
        echo 'Telefone válido'. PHP_EOL;
    } else {
        echo 'Telefone inválido'. PHP_EOL;
    }

    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}

/*
    Regex é expressões regulares, algo muito complexo no mundo de programação, aqui, aprendi algo bem básico e superficial diante de toda a imensidão do 
    conhecimento existente sobre regex. Irei explicar um pouco sobre o que fiz aqui nesse arquivo.

    Expressões regulares é um conjunto de caracteres utilizando uma sintaxe predefinida que pode ser aplicado a um texto ou string.

    Dentro do foreach que está em um loop percorrendo cada número do array $telefones, criei a variável regex $regex. Essa variável está recebendo uma 
    expressão regular para validar e extrair as informações dos números de telefone.
    "^": indica ó ínicio da string
    "\(": representa o caractere de parêntese aberto
    `([0-9]{2})`: captura dois dígitos (números de 0 a 9) dentro de parênteses e os armazena na primeira captura, onde [0-9] quer dizer que o número será de 
    0 até 9, e serão 2 números, definido por {2}. Pode ser alfabético também [a-n]
    "\)": representa o caractere do parêntese fechado
    ``: representa um espaço em branco.
    ``(9?[0-9]{4} - [0-9]{4})`: Captura um número de telefone, nesse caso, onde o dígito 9 é opcional, indicado por: `9?`, seguido de quatro dígitos e um 
    hífen, e outros quatro dígitos.
    $: significa que é o final da string.

    A função preg_match é para testar se o número de telefone corresponde à regex definida. Se for true, a variável $telefoneValido será true (1), se não, 
    será false (0).

    A função preg_replace é utilizada para substituir o número de telefone original pelo número formatado pela regex.
*/
