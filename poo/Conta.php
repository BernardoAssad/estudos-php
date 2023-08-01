<?php

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo;

    public function sacar (float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível.";
        } else {
            $this->saldo -= $valorASacar;
        }
    }
}


/* Aqui criamos um arquivo chamado Conta.php, repare que o nome deste arquivo começa com letra maiuscula, isso porque, em POO, costumamos colocar a primeira
letra do nome do arquivo em maiúsculo. 

Dentro deste arquivo, temos nossa classe Conta, ela será responsável por ter todos os atributos necessários para instanciarmos um objeto do tipo Conta, que
nesse caso é o nome da classe defininda.

No php, podemos usar o interactive shell para fazer algumas execuções e testes com esses conhecimentos já adquiridos. Usei o terminal do próprio VSCODE para 
poder fazer esses testes. Para começarmos a usar o terminal com execução do PHP, é necessário ter o PHP instalado na máquina, com isso, basta digitar o 
seguinte comando no terminal:

php -a

Pronto, estamos executando PHP no terminal, percebemos isso, pois no terminal está "php > " antes da entrada do teclado. Se formos abrir todo o projeto de 
forma como está nesse repositório GIT, deveremos começar requerendo o arquivo Conta.php, que é o que vamos utilizar no momento. Para isso, usaremos o comando
no terminal:

require 'estudos-php/poo/Conta.php';

Com isso, já estaremos aptos para fazer execuções com o conteúdo deste arquivo no terminal. Primeira execução, iremos criar uma variável para ser um novo 
objeto do tipo conta. Para isso, usaremos o comando:

$primeiraConta = new Conta();

Agora, temos um objeto chamado primeiraConta do tipo Conta. Para definirmos os atributos necessários agora, executamos:

$primeiraConta->cpfTitular = '123.456.789-00';
$primeiraConta->nomeTitular = 'Bernardo';
$primeiraConta->saldo = 5000;

Aqui, definimos os 3 atributos da classe. O sinal de -> quer dizer que naquele atributo do objeto anterior.

Importante deixar claro também um conhecimento entre VALOR X REFERÊNCIA. Caso declaramos uma variável qualquer recebendo a primeiraConta e alterarmos os 
valores dessa variável, ela mudará também do objeto primeiraConta, pois, os dois se REFEREM ao mesmo endereço de origem. É diferente, caso, criarmos uma 
variável $x recebendo o valor 2, e uma variável $y recebendo $x. Se printarmos $y, logicamente, teremos 2 como resultado, porém, se fizermos $y++, o valor 
que teremos será 3 e $x continuará sendo 2. Isso porque, nesse caso, se passam VALORES e não REFERÊNCIAS.

A palavra public vem da mesma ideia do Java, onde public quer dizer que todo o código pode acessar esta funcionalidade. Private é ao contrário disso, assim 
como em Java.

Criei o primeiro método (função dentro de uma classe), nesse caso, esse método tem a funcionalidade de retirar dinheiro de uma conta, ou seja, sacar. 
Fiz uma lógica bem simples, porém usei uma função diferente, que é o $this. O this também tem no Java e serve para o mesmo propósito. Basicamente, quando 
estamos trabalhando com o paradigma de orientação a objetos, quando queremos passar uma referẽncia que é a que está invocando aquele método, utilizamos a 
palavra $this. Ou seja, caso tenhamos o objeto $primeiraConta e queiramos sacar, utilizariamos o comando:

$primeiraConta->sacar(1000);

Com isso, sacaria 1000 reais da conta, ou não, caso o saldo fosse insuficiente. A palavra $this tem extrema importância na criação desse código, pois, caso 
tenhamos uma $segundaConta por exemplo, funcionaria a invocação do método, pelo motivo dessa funcionalidade do $this servir exatamente para isso. Resumindo, 
a variável $this faz referência à instãncia do objeto em que o método é chamado.

*/