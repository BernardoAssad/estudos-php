<?php

class Pedido {
    private $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function __toString() {
        return "Pedido #$this->numero";
    }
}

/*
Explicação no arquivo Cliente.pho
*/