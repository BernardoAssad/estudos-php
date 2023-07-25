<?php

$peso = 82;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de: $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo ";
} elseif ($imc < 25) {
    echo "dentro ";
} else {
    echo "acima ";
}

echo "do recomendado.";

/* Desafio para calcular o IMC de uma pessoa, onde as variáveis peso e altura são fundamentais para a resolução e atribuição da variável imc, onde faz o
cálculo corretamente. Coloquei uma sentença para printar o valor do IMC e abaixo uma estrutura de operadores lógicos para ver como estava a classificação do
IMC da pessoa. E por fim, concatente também uma outra string "do recomendado." para finalizar a sentença e ficar coerente e completa. */