<?php

class Circulo implements FormaGeometrica {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * $this->raio * $this->raio;
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->raio;
    }
}

/*
Explicação no arquivo Teste.php
*/