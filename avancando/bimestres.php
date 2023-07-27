<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));

/*
array_diff: Retorna um array com os elementos presentes no primeiro array que não estão presentes em nenhum dos arrays adicionais.
array_diff_key: Retorna um array com os elementos do primeiro array cujas chaves não estão presentes em nenhum dos arrays adicionais.
array_keys: Retorna um array contendo as chaves do array fornecido.
array_values: Retorna um array contendo os valores do array fornecido.
array_combine: Cria um novo array usando o primeiro array fornecido como chaves e o segundo array como valores.
array_flip: Troca as chaves por valores e os valores por chaves no array fornecido.
array_merge: Combina dois ou mais arrays em um único array, preservando as chaves originais e reindexando se os arrays têm chaves numéricas
*/
