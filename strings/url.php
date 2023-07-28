<?php

$url = 'http://alura.com.br/';

if (str_starts_with($url, 'https')) {
    echo 'É uma URL segura';
} else {
    echo 'Não é uma URL segura';
}

echo PHP_EOL;

if (str_ends_with($url, '.br')) {
    echo 'É um domínio do Brasil';
} else {
    echo 'É não um domínio do Brasil';
}

echo PHP_EOL;

// str_starts_with - Para saber se a variável começa com aquela string
// str_ends_with - Para saber se a variável termina com aquela string
