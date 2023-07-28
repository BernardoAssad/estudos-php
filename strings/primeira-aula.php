<?php

$nome = 'Bernardo Assad';

$ehDaMinhaFamilia = str_contains($nome, 'Assad');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}

// str_contains - Verifica se há o texto pedido em uma variável
