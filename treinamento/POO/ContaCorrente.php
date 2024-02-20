<?php

require_once 'Pessoa.php';
require_once 'ContaBancaria.php';

class ContaCorrente extends ContaBancaria {
    public $taxaManutencao;

    public function __construct($numeroConta, $saldo, Pessoa $titular, $taxaManutencao) {
        parent::__construct($numeroConta, $saldo, $titular);
        $this->taxaManutencao = $taxaManutencao;
    }

    public function sacar($valor) {
        $valorComTaxa = $valor + $this->taxaManutencao;

        if ($valorComTaxa > 0 && $valorComTaxa <= $this->verificarSaldo()) {
            $this->saldo -= $valorComTaxa;
            echo "Saque de R$$valor realizado com sucesso. | Novo saldo: R$$this->saldo\n.";
        } else {
            echo "Saldo insuficiente ou valor inválido para saque.\n";
        }
    }
}

$titularContaCorrente = new Pessoa("Galdames", 27, "Masculino");
$contaCorrente = new ContaCorrente("987654", 2000, $titularContaCorrente, 10);

$contaCorrente->verificarSaldo();

$contaCorrente->sacar(500);
$contaCorrente->verificarSaldo();

$contaCorrente->sacar(1600);

/*
A herança é um conceito fundamental na Programação Orientada a Objetos que permite criar novas classes aproveitando as características de uma classe já 
existente. Em termos simples, é como herdar características de seus pais na vida real.
Nesse caso, temos uma classe chamada ContaCorrente que está herdando de outra classe chamada ContaBancaria. Essa relação de herança implica que a ContaCorrente
possui todos os atributos e métodos da ContaBancaria, mas também pode adicionar ou modificar seu próprio comportamento.
A classe ContaCorrente tem um atributo adicional chamado taxaManutencao. No método construtor (__construct), ela chama o construtor da classe pai 
(ContaBancaria) usando parent::__construct(...), garantindo que os atributos da classe pai sejam inicializados corretamente.
Além disso, o método sacar é sobrescrito na classe ContaCorrente. Isso significa que a versão específica da ContaCorrente desse método é executada em vez da 
versão da classe pai. No exemplo, a ContaCorrente adiciona a lógica para aplicar a taxa de manutenção ao saldo antes de realizar o saque.
*/