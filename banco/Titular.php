<?php

class Titular
{
    private $cpf;
    private $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 2) {
            echo "Nome precisa ter pelo menos 2 caracteres";
            exit();
        }
    }
}

/*
Essa classe titular possui várias caracteristicas padrões do paradigma de orientação a objetos, como metodos privados, $cpf e $nome, a função __construct, 
explicado no arquivo Conta.php, que recebe um objeto da classe CPF, e um nome, para poder instanciar o objeto da classe Titular. Dentro dessa construção, 
também há a função de validaNomeTitular que é uma função para validar o nome do titular que verifica se o nome da pessoa tem pelo menos 2 caracteres. E outras
funções padrões (getters)
*/