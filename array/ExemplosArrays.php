<?php

// CUR003 - estou definindo a posição (chave) do array
//$cursos = array("CUR003" => "Python", "Ruby", "MatemáGica");

$cursos = array("Python", "Ruby", "MatemáGica"); //adicionando

$cursos[] = "Loǵica de Progamação com Java"; //adicionando

$cursos[] = "HTML, CSS e JS"; //adicionando

// var_dump($cursos);

// percorrer um array
// for($i = 0; $i < count($cursos); $i++) {
//     echo "Curso: $cursos[$i]" . PHP_EOL;
// }

// melhor forma de percorrer um array foreach do que o for
foreach ($cursos as $i => $valor) {
  echo "Chave: $i, Valor: $valor" . PHP_EOL;
}
