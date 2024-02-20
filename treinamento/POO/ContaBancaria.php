<?php

require_once 'Pessoa.php';

class ContaBancaria {
    private $numeroConta;
    private $saldo;
    private $titular;

    public function __construct($numeroConta, $saldo, Pessoa $titular) {
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
        $this->titular = $titular;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$$valor realizado com sucesso. | Novo saldo: R$$this->saldo\n.";
        } else {
            echo "Valor inválido para depósito.\n";
        }
    }

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$$valor realizado com sucesso. | Novo saldo: R$$this->saldo\n.";
        } else {
            echo "Saldo insuficiente ou valor inválido para saque.\n";
        }
    }

    public function verificarSaldo() {
        echo "Saldo atual: R$$this->saldo\n.";
    }
}


$titular = new Pessoa("Medel", 36, "Masculino");
$conta = new ContaBancaria("123456", 1000, $titular);

$conta->verificarSaldo(); 

$conta->depositar(500);
$conta->verificarSaldo(); 

$conta->sacar(200);
$conta->verificarSaldo();

$conta->sacar(1500);

/*
Classe ContaBancaria com alguns conceitos interessantes. 
Método construtor com $numeroConta, $saldo e $titular, note que, esse $titular está sendo uma variavel do tipo Pessoa, então sabemos que é um objeto da classe
Pessoa, com os atributos necessários para esse instanciamento. Alguns métodos básicos de operações como depositar, sacar e verificar o saldo.

No exemplo prático, eu crio uma variável que recebe o objeto Pessoa com os atributos fornecidos, depois faço a mesma coisa para a variável $conta, e com isso 
faço as operações necessárias.
*/