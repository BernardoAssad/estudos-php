<?php

class Animal {
    public function fazerSom() {
        echo "Som de animal!\n";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "Au Au!\n";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "Miau!\n";
    }
}

class Passaro extends Animal {
    public function fazerSom() {
        echo "Fiiu Fiiu!\n";
    }
}

$animal = new Animal();
$animal->fazerSom(); 

$cachorro = new Cachorro();
$cachorro->fazerSom();

$gato = new Gato();
$gato->fazerSom();

$passaro = new Passaro();
$passaro->fazerSom();  

/*
O polimorfismo é como dar a diferentes objetos a capacidade de responder ao mesmo pedido, mesmo que cada objeto responda de uma maneira única. É como se 
cada objeto pudesse "fazer o que é pedido", mas de uma maneira que faz sentido para ele. Isso ajuda a escrever código mais flexível, onde diferentes partes 
podem ser trocadas facilmente sem quebrar o resto do programa, ou seja, é uma maneira de tornar o código mais inteligente e adaptável.
*/