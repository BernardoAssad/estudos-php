<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-00' => [
        'titular' => 'Barbosa',
        'saldo' => 5000   
    ],
    '123.456.789-01' => [
        'titular' => 'Ademir',
        'saldo' => 8900
    ],
    '123.456.789-02' => [
        'titular' => 'Edmundo',
        'saldo' => 456
    ]
];

$contasCorrentes['123.456.789-00'] = sacar($contasCorrentes['123.456.789-00'], valorASacar:500);
$contasCorrentes['123.456.789-01'] = sacar($contasCorrentes['123.456.789-01'], valorASacar:900);
$contasCorrentes['123.456.789-02'] = sacar($contasCorrentes['123.456.789-02'], valorASacar:500);

$contasCorrentes['123.456.789-00'] = depositar($contasCorrentes['123.456.789-00'], 700);
$contasCorrentes['123.456.789-01'] = depositar($contasCorrentes['123.456.789-01'], 1000);
$contasCorrentes['123.456.789-02'] = depositar($contasCorrentes['123.456.789-02'], 1000);

foreach ($contasCorrentes as $cpf => $conta) {
    // exibeMensagem(mensagem:$cpf . " " . $conta['titular'] . ' ' .  $conta['saldo']);
    // exibeMensagem("$cpf $conta[titular] $conta[saldo]");
    titularComLetrasMaiusculas($conta);
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}



/* 
OBS: Deixarei tudo explicado aqui, porém separarei esse arquivo com a execução e outro com as funcoes, chamado funcoes.php

Neste arquivo obtive muito conhecimento da sintaxe em PHP. Primeiro sobre funções, servem para separar funcionalidades do código em partes menores e 
reutilizáveis, isto é, podemos criar uma função e chamá-la sempre que quiser para executar um processo e retornar um valor único. A diferença de função
para subrotina é que função sempre retorna um valor único, subrotina retorna diversas variáveis ou não retorna nada.

A sintaxe das funções é bem básica e semelhante a linguagens que já estudei, como Python e .LUA, utilizamos o termo reservado que é:
function nomeDaFunção(tipoDoParametro: parametro): tipoDeDadoQueRetornará {}. O tipo de parâmetro é importante declarar para que dificulte os
erros de tipagem de variáveis. Por exemplo, caso eu colocasse uma string na função de sacar daria um erro, com a formalização do tipo do dado, é mais simples
de encontrar o erro. Não é necessário toda função ter parâmetros, apenas terá quando a função para funcionar, precisar de um ou mais dados atribuídos a ela
para executar tal ação. Também, não é necessário específicar o tipo de dado que a função irá retornar, mas também ajuda no controle e segurança do projeto,
e caso a função não retorne nada, esse dado não existirá.

Na invocação das funções, na linha 45, por exemplo, coloquei a conta corrente 123.456.789-00 recebendo a função sacar. Isto quer dizer que, nesta mesma
conta, dentro da array contasCorrentes, a função sacar, irá fazer a funcionalidade dela, que é retirar dinheiro do saldo da conta, e o valor foi de 500.
Na linha 49, na mesma conta recebendo a função depositar, que no caso, depositou 700. Note que na linha 45 eu coloquei o parâmetro valorASacar:500, nesta
linha não coloquei, justamente para deixar claro que é possível atribuir valor dos dois jeitos.

Além das funções, também aprendi alguns metódos eficientes para printar mensagens com algumas estruturas mais complexas, como é o caso das arrays 
associativas. Na linha 54, tem um metódo que é funcional porém mais amador que é concatenando com espaços entre ' '. Na linha abaixo, temos um outro método
que printa tudo de uma vez com o uso das " no começo e no final e desse jeito imprime tudo certo, porém, não é recomendado pelo motivo de usarmos 
inadequadamente as arrays, como: $conta[titular] sem o uso das ''. Na linha 56, está o jeito correto e usual de imprimir mensagens com arrays associativas.
Fazemos o uso de " no começo e no fim também, porém, as arrays, colocamos entre {} e adicionamos as '' do jeito correto de utilizar as arrays associativas.

Utilizei uma funcionalidade chamada require_once. Esta funcionalidade funciona como se fosse um import. Ela permite importar, incluir, incorporar, outros 
arquivos, neste arquivo. O que eu fiz foi o require_once ou seja, ele irá requerir que um arquivo seja importado para este, porém o _once, significa que 
ele será incorporado, porém, nos dá a segurança de que se ele já foi incluído não será novamente. O require_once é uma forma mais segura do require. Além
do require, existe o include, o include faz o mesmo que o require, porém não necessariamente irá importar o arquivo caso dê algum problema. Com o require, 
caso o programa não ache o arquivo requirido, ele parará a execução e nos retornará um erro. Caso o include não ache o arquivo, ele continuará a execução
e nos dará um alerta.
*/