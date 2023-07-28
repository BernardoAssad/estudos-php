<?php

function geraEmail(string $nome): void
{
    $conteudoEmail = <<<'FIM'
    Olá, $nome!
    
    Estamos entrando em contato para
    {motivo do contato}
    
    {assinatura}

    FIM;

    echo $conteudoEmail;
}

geraEmail('Vinicius Dias');

/*
heredoc: Permite criar strings multilinhas com substituição de variáveis, usando a sintaxe <<<NOMEIDENTIFICADOR ... NOMEIDENTIFICADOR;"
nowdoc: Similiar ao heredoc, mas não interpreta variáveis variáveis ou caracteres de escape, usando a sintaxe 'LABEL' .., LABEL;'

Essas duas funções servem basicamente para escrever strings grandes de uma forma mais fácil e organizada, como o exemplo, um modelo de email. O NOMEIDENTIFICADOR
pode ser qualquer nome.
*/