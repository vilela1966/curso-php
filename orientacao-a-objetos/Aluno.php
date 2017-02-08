<?php
require_once('Turma.php');

class Aluno {
    public $nome;
    public $rg;
    public $dataNascimento;
    public $turma;
}

$aluno1 = new Aluno;
$aluno1->nome = "Márcia Bastos";
$aluno1->rg = "33333333-3";
$aluno1->dataNascimento = "02/04/1985";
$aluno1->turma = $periodoTarde;

$aluno2 = new Aluno;
$aluno2->nome = "Gisele Camargo";
$aluno2->rg = "222222222-2";
$aluno2->dataNascimento = "30/10/1984";
$aluno2->turma = $periodoManha;

echo "Nome do aluno: $aluno1->nome\n";
echo "RG: $aluno1->rg\n";
echo "Data de nascimento: $aluno1->dataNascimento\n";
echo "Turma: {$aluno1->turma->serie}\n";
echo "Sigla: {$aluno1->turma->sigla}\n";
echo "Tipo de ensino: {$aluno1->turma->tipoDeEnsino}\n\n";

echo "Nome do aluno: $aluno2->nome\n";
echo "RG: $aluno2->rg\n";
echo "Data de nascimento: $aluno2->dataNascimento\n";
echo "Turma: {$aluno2->turma->serie}\n";
echo "Sigla: {$aluno2->turma->sigla}\n";
echo "Tipo de ensino: {$aluno2->turma->tipoDeEnsino}\n\n";