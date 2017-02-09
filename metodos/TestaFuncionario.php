<?php
require_once('Funcionario.php');

$funcionario1 = new Funcionario;
$funcionario1->nome = "Marcelo Martins";
$funcionario1->salario = 1800.57;

$funcionario1->consultaDados();

$funcionario1->aumentaSalario($funcionario1->salario * 0.2);
echo "Salário após aumento: $funcionario1->salario" . PHP_EOL;
