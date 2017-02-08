<?php
require_once('Conta.php');
//spl_autoload_register();

class Agencia {
    public $numero;
    public $conta;
}

$agencia1 = new Agencia;
$agencia1->numero = 1234;
$agencia1->conta = $conta1;
//$agencia1->conta = $conta3;

$agencia2 = new Agencia;
$agencia2->numero = 5678;
$agencia2->conta = $conta2;

/*$agencia1 = new Agencia;
$agencia1->numero = 1234;
$agencia1->conta = $conta3;*/

echo "Número da Agência: $agencia1->numero\n";
echo "Número da conta: {$agencia1->conta->numero}\n";
echo "Saldo: {$agencia1->conta->saldo}\n";
echo "Limite: {$agencia1->conta->limite}\n\n";

echo "Número da Agência: $agencia2->numero\n";
echo "Número da conta: {$agencia2->conta->numero}\n";
echo "Saldo: {$agencia2->conta->saldo}\n";
echo "Limite: {$agencia2->conta->limite}\n\n";

/*echo "Número da Agência: $agencia1->numero\n";
echo "Número da conta: {$agencia1->conta->numero}\n";
echo "Saldo: {$agencia1->conta->saldo}\n";
echo "Limite: {$agencia1->conta->limite}\n\n";*/