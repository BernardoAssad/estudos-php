<?php

//   Exemplo 1:

for ($contador = 1; $contador <=15; $contador++) {
    echo "#$contador" . PHP_EOL;
}

//  Exemplo 2: (Trabalhando com exceção)

for ($contador = 1; $contador <=15; $contador++) {
    if ($contador != 13) {
        echo "#$contador" . PHP_EOL;
    }
}

//  Exemplo 3: (Trabalhando com exceção com boas práticas no momento que estou aprendendo)

for ($contador = 1; $contador <=15; $contador++) {
    if ($contador == 13) {
        continue;
        // break; -- Aqui a execução pararia no 12.
    }

    echo "#$contador" . PHP_EOL;
}

/*Laço de repetição com for para também printar de 1 a 15, o for é bem importante e usado por ser um loop mais controlado e seguro,
em alguns casos é mais eficiente. Utilizamos o while quando não sabemos quando o loop se encerrará, e o for quando temos uma variável de controle para
definir a saída do laço.

Exemplo 1: De uma forma bem básica sem exceções nenhuma, apenas printando de 1 a 15.

Exemplo 2: Uma exceção que é para pular o número 13, fiz de uma forma básica, adicionei um if para verificar se o contador está em um número diferente de 13,
caso true, ele printa o número atual da repetição, caso false, não faz nada.

Exemplo 3: De acordo com o que aprendi, até o momento, uma boa forma de trabalhar com exceções é trabalhando com elas primeiro, então, utilizei 
$contador == 13, caso true, ele continua o código e pula essa instrução, nesse caso específico. Fora do operador lógico, coloquei para printar o número
que está sendo repetido. Talvez tenha uma função melhor do que o continue neste caso. O break que coloquei como comentário, foi um exemplo para mostrar
que caso adicionado, ele pararia o loop e printaria até o 12. */