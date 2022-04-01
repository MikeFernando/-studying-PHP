<?php

for ($contador = 1; $contador <= 15; $contador++) {

    if ($contador == 13) {
        continue;
        // or break;
    }

    echo "#$contador" .PHP_EOL;

}