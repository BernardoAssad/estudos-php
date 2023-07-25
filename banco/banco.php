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

titularComLetrasMaiusculas($contasCorrentes['123.456.789-00']);
titularComLetrasMaiusculas($contasCorrentes['123.456.789-01']);
titularComLetrasMaiusculas($contasCorrentes['123.456.789-02']);

// unset ($contasCorrentes['123.456.789-00']);

echo "<ul>";   
foreach ($contasCorrentes as $cpf => $conta) {
    // list('titular' => $titular, 'saldo' => $saldo) = $conta;
    // ['titular' => $titular, 'saldo' => $saldo] = $conta;
    // exibeMensagem("$cpf $titular $saldo");    
    // exibeMensagem(mensagem:$cpf . " " . $conta['titular'] . ' ' .  $conta['saldo']);
    // exibeMensagem("$cpf $conta[titular] $conta[saldo]");
    // exibeConta($conta);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) {?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>


<?php
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

Na invocação das funções, no arquivo de funcoes.php, por exemplo, coloquei a conta corrente 123.456.789-00 recebendo a função sacar. Isto quer dizer que, nesta mesma
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

Dentro do foreach adicionei uma mudança, list('titular' => $titular, 'saldo' => $saldo) = $conta; Esta linha, neste caso está passando o índice titular 
para uma variável $titular, a mesma coisa com o índice saldo. E isso tudo está sendo referido a variável $conta do foreach. Na linha comentada abaixo dela 
é uma forma semelhante de fazer esta função, porém com o list é algo mais "elegante".

A função unset que está comentada, serve para excluir uma variável da memória. No caso 

Criei uma função chamada exibeConta, onde a declaração dela está em funcoes.php. Criei ela para exibir a conta em um servidor PHP de um jeito mais amigável 
com HTML. Criei um echo "<ul>"; para poder iniciar uma lista, no arquivo funcoes.php declarei para aparecer e no fim fechei a ul.

Após isso, decidi comentar a invocação da função exibeConta() para criar um HTML no PHP. Fechei o PHP inicial para começar um arquivo HTML. Nele, fiz uma
estrutura simples HTML com dl para descrição e para deixar mais elegante o código. No meio do <dl> abri <?php e juntei com o HTML para poder fazer uso 
das variáveis que criei no documento PHP, e também usar o foreach para agilizar o processo. Para imprimir a variável do PHP no HTML, usei <?= que faz uma 
espécie de echo com a variável para usarmos com outra linguagem e por fim fechei com ?>.

*/
?>