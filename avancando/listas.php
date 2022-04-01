<?php

$listaIdades = [21, 30, 60, 38, 17, 91, 8];

$listaIdades[count($listaIdades)] = 71;

foreach ($listaIdades as $idade) {

    echo $idade . PHP_EOL;

}
