<?php

function sacar(array $conta, float $valorASacar): array 
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem(mensagem: "Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem(mensagem:"Depósitos precisam ser positivos.");
    }

    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}


/*
Neste arquivo, está as funções que estão sendo exportadas para o arquivo banco.php. Irei colocar alguns comentários para especificar algumas coisas deste
arquivo. Na linha 30, na declaração da função titularComLetrasMaiusculas coloquei como parâmetro array &$conta, onde o sinal de "&" significa que estamos
passando o valor da variável como parâmetro e não a referência. Tomar cuidado com isso, pois, quando passamos como valor a função é permitida de alterar
toda a execução. Se passarmos como referência, será basicamente clonado aquele dado e não deixará de existir o outro.
*/