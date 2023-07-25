<?php

$idade = 14;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos e acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar sozinho.';
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade e está acompanhado(a)." . PHP_EOL;
    echo 'Pode entrar acompanhado.';
} else {
    echo "Você tem $idade anos e não está acompanhado" . PHP_EOL;
    echo 'Não pode entrar';
}

echo PHP_EOL . "Tchau!";


/* Neste arquivo, aprendi sobre operadores lógicos e condições em PHP, if, else if e else. Sei que existe uma expressão em PHP chamada match, irei me 
aprofundar nela mais para frente. Além dela, também existe a declaração do switch que serve para controlar fluxos, também irei aprender mais sobre.
Conceito deste arquivo é bem importante e crucial para o meu desenvolvimento.

OBS: Caso depois do operador lógico e condição tenha apenas uma instrução sendo executada, é possível omitir as chaves, porém não é recomendado.
*/