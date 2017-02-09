<?php

// CUR003 - estou definindo a posição (chave) do array
//$cursos = array("CUR003" => "Python", "Ruby", "MatemáGica");

// criando e criando e adicionando um array
//$cursos = array();
$cursos = array("Python", "Ruby", "MatemáGica");

//$cursos[] = "Loǵica de Progamação com Java"; //adicionando

//$cursos[] = "HTML, CSS e JS"; //adicionando

// exibir elemento da chave 0
echo "$cursos[0]" . PHP_EOL;

// tentando exibir um elemento de uma chave inexistente
//echo "$cursos[6]" . PHP_EOL;

// tamanho do array
echo count($cursos) . PHP_EOL;

// var_dump($cursos);

echo "percorrer um array com ---for---"  . PHP_EOL;;
for($i = 0; $i < count($cursos); $i++) {
    echo "Curso: $cursos[$i]" . PHP_EOL;
}

// melhor forma de percorrer um array foreach do que o for
// foreach é só leitura, não consigo inicializar um array
// nao tem controle da variável de iteração
echo "percorrer um array com ---foreach---"  . PHP_EOL;;
foreach ($cursos as $i => $valor) {
  echo "Chave: $i, Valor: $valor" . PHP_EOL;
}
