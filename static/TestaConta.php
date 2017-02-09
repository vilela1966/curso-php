<?php
require_once('Conta.php');

echo "Contador inicial: " . Conta::$contador . PHP_EOL;

$conta1 = new Conta;
$conta1->numero = 11;
$conta1->saldo = 600;

$conta2 = new Conta;
$conta2->numero = 14;
$conta2->saldo = 900;

echo "Contador final: " . Conta::$contador . PHP_EOL;

Conta::zeraContador();

echo "Zera contador: " . Conta::$contador . PHP_EOL;
