<?php

$multiplicador = 5;

for ($i = 1; $i <= 10; $i++) {
    $resultado = $multiplicador * $i;
    echo "$multiplicador '*' $i = $resultado" . PHP_EOL;
}

/* Desafio bem simples e ótimo para o começo de aprendizagem de uma linguagem também. Tabuada de 5, no caso em específico, onde a varíável multiplicador é o
número a ser feita a tabuada, fiz um for de 1 até 10, e uma variável para pegar o contador que está no momento do loop e multiplicar pelo multiplicador e 
assim printando uma sentença a cada loop de cada resultado.