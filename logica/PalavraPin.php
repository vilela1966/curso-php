<?php

$multiplo = 4;
for ($i = 1; $i <= 100; $i++) {
      if ($i == $multiplo) {
            echo "PIN" . ", ";
            $multiplo += 4;
      } else {
            echo $i . ", " ;
      }
}
echo PHP_EOL;
