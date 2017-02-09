<?php
class Conta {
    public $numero; //atributo do objeto
    public $saldo; //atributo do objeto
    public static $contador; //atributo da classe


    public function __construct() {
      self::$contador++; //para acessar atributo static
    }

    public static function zeraContador() {
      self::$contador = 0;
    }
}
