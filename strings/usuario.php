<?php

$email = 'bernardo@gmail.com';
$senha = 'áéíóú';

echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

if (strlen($senha) >= 8) {
    echo 'Senha segura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

/*
mb_strlen - Verifica o tamanho de uma string com a biblioteca mb_string
strlen - Verifica o tamanho de uma string sem a biblioteca mb_string, o que é ruim, pois como nossa seha possui 5 caracteres especiais, a strlen diz que
a senha é segura pois caractere especial conta mais de um byte. 
strpos - Descobre a posição de um caractere dentro de uma string
substr - Cria uma substring a partir de outra string, basta passar o nome da variável que está a string, a posição para começar a substring e aonde terminará, 
caso não coloque um termíno, a substring irá até o fim da string.
mb_strtoupper - Coloca uma string toda em letra maiúscula
*/
