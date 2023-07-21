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