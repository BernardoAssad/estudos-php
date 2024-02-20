<?php

require_once 'Pedido.php';

class Cliente {
    private $nome;
    private $pedidos;

    public function __construct($nome) {
        $this->nome = $nome;
        $this->pedidos = [];
    }

    public function adicionarPedido(Pedido $pedido) {
        $this->pedidos[] = $pedido;
    }

    public function listarPedidos() {
        echo "Pedidos do cliente $this->nome:\n";
        foreach ($this->pedidos as $pedido) {
            echo "- $pedido\n";
        }
    }
}

$cliente = new Cliente("Payet");

$pedido1 = new Pedido(1);
$pedido2 = new Pedido(2);

$cliente->adicionarPedido($pedido1);
$cliente->adicionarPedido($pedido2);

$cliente->listarPedidos();

/*
A associação é um conceito na Programação Orientada a Objetos que descreve a relação entre duas ou mais classes. É como a conexão entre objetos em um sistema,
refletindo a maneira como objetos interagem e colaboram entre si. Nesse caso, temos duas classes: Cliente e Pedido, que exemplificam uma relação de associação.
Um cliente pode ter vários pedidos, e essa relação é modelada através dos métodos na classe Cliente. O método adicionarPedido na classe Cliente permite
associar um pedido a um cliente. Dessa forma, um cliente pode manter uma coleção de pedidos. O método listarPedidos na classe Cliente mostra como essa 
associação pode ser utilizada para listar os pedidos de um cliente específico.
*/
