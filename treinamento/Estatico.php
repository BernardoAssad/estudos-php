<?php

class Calculadora {
    public static function somar($num1, $num2) {
        return $num1 + $num2;
    }

    public static function subtrair($num1, $num2) {
        return $num1 - $num2;
    }

    public static function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    public static function dividir($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Erro: divisão por zero.";
        }
    }
}

$resultadoSoma = Calculadora::somar(5, 3);
echo "Soma: $resultadoSoma\n";

$resultadoSubtracao = Calculadora::subtrair(8, 3);
echo "Subtração: $resultadoSubtracao\n";

$resultadoMultiplicacao = Calculadora::multiplicar(4, 6);
echo "Multiplicação: $resultadoMultiplicacao\n";

$resultadoDivisao = Calculadora::dividir(10, 2);
echo "Divisão: $resultadoDivisao\n";

$resultadoDivisaoPorZero = Calculadora::dividir(8, 0);
echo "Divisão por zero: $resultadoDivisaoPorZero\n";


/*
Métodos estáticos em Programação Orientada a Objetos são métodos que pertencem à classe em si, e não a instâncias específicas dessa classe. Eles podem ser 
chamados diretamente na classe, sem a necessidade de criar uma instância da classe. Ou seja, são métodos estáticos são associados à classe em vez de a 
instâncias individuais da classe
*/