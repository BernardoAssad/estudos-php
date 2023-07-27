<?php

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];
// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

extract($dados);
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));

/*
extract() = importa variáveis de uma array associativa para a tabela de símbolos atual (transforma as chaves em nomes de variáveis e atribui os valores 
correspondentes). Como no exemplo, acima, a função extract pegou os índices nome, nota e idade e os transformou em variáveis.
compact(): O inverso do extract, cria um array contendo as variáveis e seus valores existentes no escopo atual.
/*