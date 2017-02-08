<?php

class Conta {
    public $numero;
    public $saldo;
    public $limite;
}

$conta1 = new Conta;
$conta1->numero = 36;
$conta1->saldo = 800;
$conta1->limite = 200;

$conta2 = new Conta;
$conta2->numero = 66;
$conta2->saldo = 1200;
$conta2->limite = 300;

$conta3 = new Conta;
$conta3->numero = 22;
$conta3->saldo = 1300;
$conta3->limite = 300;

/*echo "Número da conta: {$conta1->conta->numero}\n";
echo "Saldo: {$conta1->conta->saldo}\n";
echo "Limite: {$conta1->conta->limite}\n\n";*/

/*echo "Número da cota: $conta2->numero\n";
echo "Saldo: $conta2->saldo\n";
echo "Limite: $conta2->limite\n";*/
