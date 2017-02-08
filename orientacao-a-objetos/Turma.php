<?php

class Turma {
    public $periodo;
    public $serie;
    public $sigla;
    public $tipoDeEnsino;
}

$periodoTarde = new Turma;
$periodoTarde->serie = 8;
$periodoTarde->sigla = "A";
$periodoTarde->tipoDeEnsino = "Fundamental";

$periodoManha = new Turma;
$periodoManha->serie = 5;
$periodoManha->sigla = "B";
$periodoManha->tipoDeEnsino = "Fundamental";
