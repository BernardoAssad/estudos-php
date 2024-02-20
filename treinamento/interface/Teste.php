<?php

require_once 'FormaGeometrica.php';
require_once 'Quadrado.php';
require_once 'Circulo.php';
require_once 'Triangulo.php';

$quadrado = new Quadrado(5);
$circulo = new Circulo(3);
$triangulo = new Triangulo(4, 5, 6);

echo "Área do quadrado: " . $quadrado->calcularArea() . "\n";
echo "Perímetro do quadrado: " . $quadrado->calcularPerimetro() . "\n";

echo "Área do círculo: " . $circulo->calcularArea() . "\n";
echo "Perímetro do círculo: " . $circulo->calcularPerimetro() . "\n";

echo "Área do triângulo: " . $triangulo->calcularArea() . "\n";
echo "Perímetro do triângulo: " . $triangulo->calcularPerimetro() . "\n";

/*
Interfaces em programação orientada a objetos são como acordos ou contratos que definem quais comportamentos uma classe deve ter. Imagine que você está criando
um conjunto de regras para diferentes tipos de objetos. Essas regras dizem o que cada objeto deve ser capaz de fazer, mas não se importam exatamente como isso
será feito.
Nesse exemplo, a interface FormaGeometrica é esse conjunto de regras. Ela declara que qualquer classe que a implementar deve ter métodos para calcular a área 
e o perímetro. Pense nisso como um contrato que as classes concordam em seguir: "Se você quiser ser uma forma geométrica, precisa saber como calcular a área 
e o perímetro."
*/

