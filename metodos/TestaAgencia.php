<?php
require_once('Agencia.php');

$agencia1 = new Agencia(1234);
$agencia2 = new Agencia(5678);

echo "Agência: $agencia1->numero" . PHP_EOL;
echo "Agência: $agencia2->numero" . PHP_EOL;
