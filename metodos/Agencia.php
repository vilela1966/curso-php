<?php
require_once('Conta.php');
//spl_autoload_register();

class Agencia {
    public $numero;
    public $conta;

    public function __construct($numero) {
        $this->numero = $numero;
    }
}
