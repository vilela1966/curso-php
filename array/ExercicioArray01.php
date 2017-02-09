<?php

//var_dump($argv);

for($i = 1; $i < count($argv); $i++) {
  echo "Chave: $i - Valor: $argv[$i]" . PHP_EOL;
}
