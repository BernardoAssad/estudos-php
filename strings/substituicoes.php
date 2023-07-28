<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

echo str_replace(
    ['poxa', 'caramba'],
    ['p', 'c'],
    $texto
) . PHP_EOL;

echo strtr($texto, 'poxa', '***@') . PHP_EOL;
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL;

/*
strtr: Substitui caracteres ou conjuntos de caracteres em uma string de acordo com uma tabela própria do HTML de substituições
str_replace: Substitui todas as ocorrências de uma substring por outra em uma string

strtr substitui caracteres, str_replace palavras.
Uma observação interessante sobre o str_replace é que o primeiro parametro é o que queremos colocar, pode ser uma array de palavrões por exemplo, o segundo 
parâmetro é para o que queremos mudar e pode ser apenas uma string para todas as alteração, porém, se for uma array também, temos que fazer todas as 
substituições para todos os elementos da array que queremos trocar, caso contrário, ficará um espaço vazio na hora da troca.

No caso que usei strtr utilizei a variável $texto para ser a que será alterada, 'poxa' como a cadeia de caracteres que seria alterado, ou seja, a execução 
desse algoritmo resultou na alteração de todas as letras "p", "o", "x" e "a". NO exemplo de baixo, exemplifiquei uma forma de alterarmos palavras com strtr.
*/