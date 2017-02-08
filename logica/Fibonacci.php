<?php

$atual = 1;
$anterior = 0;
$auxiliar = 0;
$fibonacci = "";

echo $atual . ", " ;

for ($i = 0; $i < 10; $i++) {
    $auxiliar = $anterior;
    $anterior = $atual;
    $atual = $anterior + $auxiliar;
    $fibonacci .= $atual . ", ";
}
echo $fibonacci . PHP_EOL;
