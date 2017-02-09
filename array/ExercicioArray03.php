<?php

$soma = 0;
$media = 0;
for($i = 1; $i < count($argv); $i++) {
  echo "Números: $argv[$i]" . PHP_EOL;
  $soma += $i;
}
//$media = $soma / (count($argv) - 1);
//echo "Média: $media" . PHP_EOL;
echo $soma . PHP_EOL;
echo (count($argv) - 1) . PHP_EOL;
//echo "Média: $media" . PHP_EOL;
