<?php

$idade = 19;
$salario = 1550.90;
$divisao = 10 / 3;

$texto = "Olá mundo!";

$verdadeiro = true;
$falso = false;


echo "Tipo da variável idade: " . gettype($idade);
echo " ";
echo "Tipo da variável salário: " . gettype($salario);
echo " ";
echo "Resultado da divisão (10 / 3): " . $divisao;
echo " ";
echo "Tipo da variável texto: " . gettype($texto);
echo " ";
echo "Tipo da variável verdadeiro: " . gettype($verdadeiro);
echo " ";
echo "Tipo da variável falso: " . gettype($falso);
echo " ";


/* Aqui estão todos os tipos de dados primitivos, booleans, string, int e double. Usei a função gettype para retornar qual o tipo da variável apresentada.
O PHP por ser uma linguagem de baixa tipagem, não necessita da declaração do tipo da variável, porém, com o gettype podemos ver qual tipo de dado estamos 
tratando.

Dados primitivos:

- Inteiro
- Decimal(float | double)
- Boolean
- String
*/