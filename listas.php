<?php

// $idadeList = array(19,20,25,38,14,50,84); Outra forma de definir array
$idadeList = [19,20,25,38,14,50,84];

// $idadeBarbosa = $idadeList[0];
// $idadeAdemir = $idadeList[1];
// $idadeEdmundo = $idadeList[2];

list($idadeBarbosa, $idadeAdemir, $idadeEdmundo) = $idadeList;

$idadeList[7] = 20;
$idadeList[count($idadeList)] = 33;
$idadeList[] = 45;


foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

/* Introdução básica a arrays em PHP, a forma mais utilizade de declarar arrays é a que está na variável $idadeList, e a que está comentada é uma forma 
existente do PHP também. Lembrando conhecimentos básicos de programação, o PHP também é uma das linguagens que as arrays começam do índice 0. 

Atualização após a criação do arquivo foreach: Aprendi a colocar mais dados em uma array de forma dinãmica e simples, na linha 6, eu coloquei $idadeList[7] =
20; Para adicionar 20 na posição 7 da minha array, que é a última, caso eu colocasse 5, por exemplo, ela substituiria o 50, que é o índice 5 atual e iria
virar 20. Na linha 7, coloquei $idadeList[count($idadeList)] = 33; Para adicionar no fim de toda a contagem de índices da array. E na linha 8, o jeito mais
eficaz de adicionar ao fim da array, basta colocar: $idadeList[] = 45; Deixando dentro das chaves vazio, o PHP entende que é para adicionar ao final da lista
o que está pedindo.

OBS: A partir da linha 6 até a 10, onde eu criei algumas variáveis para receber idades, estará integrada ao arquivo banco.php. A linha 6,7 e 8 que estão
comentadas, está para dizer que criar uma variável para receber cada elemento da lista de uma forma que o índice seja sequencial, é o mesmo que implementarmos
a funcionalidade da list($variaveis) = $array.
*/
