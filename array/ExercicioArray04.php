<?php

$maior = 0;

for($i = 1; $i < count($argv); $i++) {
  if ($argv[$i] > $maior) {
    $maior = $argv[$i];
  }
}
echo "O maior número da sequência é: $maior" . PHP_EOL;
