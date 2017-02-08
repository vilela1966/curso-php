php <?php
require_once('Cliente.php');
//spl_autoload_register();

class CartaoDeCredito {
    public $numero;
    public $dataDeValidade;
    public $cliente;
}

$cartao1 = new CartaoDeCredito;
$cartao1->numero = 111111;
$cartao1->dataDeValidade = "01/01/2013";
$cartao1->cliente = $cliente1;

$cartao2 = new CartaoDeCredito;
$cartao2->numero = 222222;
$cartao2->dataDeValidade = "01/01/2014";
$cartao2->cliente = $cliente2;

/*$cartao3 = new CartaoDeCredito;
$cartao3->numero = 333333;
$cartao3->dataDeValidade = "01/01/2016";
$cartao3->cliente = $cliente3;*/

echo "Nome do cliente: {$cartao1->cliente->nome}\n";
echo "Código: {$cartao1->cliente->codigo}\n";
echo "Número do cartão: $cartao1->numero\n";
echo "Data de validade: $cartao1->dataDeValidade\n\n";

echo "Nome do cliente: {$cartao2->cliente->nome}\n";
echo "Código: {$cartao2->cliente->codigo}\n";
echo "Número do cartão: $cartao2->numero\n";
echo "Data de validade: $cartao2->dataDeValidade\n\n";
