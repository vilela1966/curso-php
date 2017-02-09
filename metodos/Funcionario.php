<?php

class Funcionario {
    public $nome;
    public $salario;

    public function aumentaSalario($valor) {
        $this->salario += $valor;
    }

    public function consultaDados() {
      echo "Nome do funcionário: $this->nome" . PHP_EOL;
      echo "Salário: $this->salario" . PHP_EOL;
    }
}
