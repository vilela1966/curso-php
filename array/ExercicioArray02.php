<?php

//$array = array("Mamão", "Banana", "Pera", "Abacate");
//sort($array);
//$array[] = ("Mamão", "Banana", "Pera", "Abacate");

sort($argv);
for($i = 0; $i < count($argv); $i++) {
  echo "$argv[$i]" . PHP_EOL;
}
// foreach ($argv as $i => $valor) {
//   echo $valor . PHP_EOL;
// }
