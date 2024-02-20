<?php

class Triangulo implements FormaGeometrica {
    private $lado1;
    private $lado2;
    private $lado3;

    public function __construct($lado1, $lado2, $lado3) {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function calcularArea() {
        $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
        return sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
    }

    public function calcularPerimetro() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }
}

/*
Explicação no arquivo Teste.php
*/