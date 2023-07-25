<?php
$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero " . PHP_EOL; 
}

echo "Total: " . sizeof($array) . PHP_EOL;
echo "Total: " . count($array) . PHP_EOL;


/*
Foreach relembrando funciona como um for normal, porém passando em casa elemento da array, onde $array é a array do for, $numeral o índice e nomeNumero o 
elemento.

sizeof e count são semelhantes, ambos servem para contar quantos elementos a array tem.

No PHP a forma que array é programada é diferente, geralmente, em outras linguagens, caso tenha uma array de 3 elementos por exemplo, ficará em um espaço na
memória que tem 3 elementos, caso precise adicionar mais, os elementos sairão desses 3 espaços e procurarão um local na memória que tenha 4 espaços. No PHP
é diferente, a array é mapeada na memória e alocada de uma forma mais eficiente e performática.
*/