<?php

class Funcionario {
    public $nome;
    public $salario;
}

$funcionario1 = new Funcionario;
$funcionario1->nome = "Marcelo Martins";
$funcionario1->salario = 1800.57;

$funcionario2 = new Funcionario;
$funcionario2->nome = "Rafael Cosentino";
$funcionario2->salario = 2000.88;

//echo "Nome do funcionario: $funcionario1->nome\n";
//echo "Salário: $funcionario1->salario\n";
