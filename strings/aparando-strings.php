<?php

$csv = ',.Bernardo Assad,19,.';

echo trim($csv, '.,') . PHP_EOL;
echo ltrim($csv, '.,') . PHP_EOL;
echo rtrim($csv, '.,') . PHP_EOL;

/*
trim - Remove todos elementos pedidos de toda a string, no caso, foi , e ,
ltrim - Remove elementos pedidos da parte esquerda da string
rtrim - Remove elementos pedidos da parte direita da string
*/
