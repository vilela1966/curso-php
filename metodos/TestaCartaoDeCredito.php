<?php
require_once('CartaoDeCredito.php');

$cartao1 = new CartaoDeCredito(111111);
$cartao1->dataDeValidade = "01/01/2013";

$cartao2 = new CartaoDeCredito(222222);
$cartao2->dataDeValidade = "01/01/2014";

echo "Cartão de Crédito: $cartao1->numero" . PHP_EOL;
echo "Data de validade: $cartao1->dataDeValidade" . PHP_EOL;
echo "Cartão de Crédito: $cartao2->numero" . PHP_EOL;
echo "Data de validade: $cartao2->dataDeValidade" . PHP_EOL;
