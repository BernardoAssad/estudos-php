<?php

class Pessoa
{
    private $nome;
    private $idade;
    private $genero;

    public function __construct($nome, $idade, $genero) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->genero = $genero;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setGenero($genero) {    
        $this->genero = $genero;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade($idade) {
        return $this->idade;
    }

    public function getGenero($genero) {
        return $this->genero;
    }

}

/* 
Classe pessoa com método construtor e setters e getters padrões que estão sendo utilizados no arquivo ContaBancaria
Os atributos são privados para dar uma maior segurança ao código, e conseguimos alterar esses dados com os setters, e pegar os dados com os getters.
O método construtor basicamente instancia um objeto da classe, no caso, Pessoa, então, para instanciar uma "Pessoa", precisamos fornecer os atributos pedidos
no método construtor, que no caso é, nome, idade e gênero.
*/