<?php

$array = '1 2 3 4';

var_dump(explode(' ', $array, 2));

/* explode - transforma strings em arrays onde ' ' é o separador, $array a variável e 2 é até onde vai "cortar essa variável" e transformar em outro elemento 
da array o resto. Então, nesse caso o 1 ficaria em um elemento e o '2 3 4' em outro.
*/