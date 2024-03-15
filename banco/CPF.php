<?php

class CPF
{
    private $numero;

    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            echo "CPF inválido";
            exit();
        }
        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}

/* 
Esta classe representa um modelo de CPF, com isso, possui um atributo $numero privado e uma função __construct, e utilizamos uma função chamada filter_var
que recebe 3 parametros, a variavel $numero e o FILTER_VALIDATE_REGEXP e uma array, dessa forma conseguimos validar o cpf de acordo com uma regex (expressão
regular), e com isso, está sendo definido, uma sequencia de 3 numeros de 0-9 separado por ., isso ocorre 3 vezes, até que muda o padrão e coloca um "-" e uma
sequência de 2 numeros de 0-9. Com isso, validando uma regex e afirmando caso seja um padrão como: 000.000.000-00. 
*/