<?php
require_once('Conta.php');

$conta = new Conta(123);
//$conta->numero = 13;

//deposito de 700
$conta->deposita(700);
$conta->limite(100);

echo "Número da conta: $conta->numero" . PHP_EOL;
echo "Saldo: $conta->saldo" . PHP_EOL;

$resultado = $conta->saca(300);

if ($resultado) {
    echo "Saque efetuado com sucesso!" . PHP_EOL;
} else {
    echo "Saldo insuficiente!" . PHP_EOL;
}
echo "Saldo atual: $conta->saldo" . PHP_EOL;
