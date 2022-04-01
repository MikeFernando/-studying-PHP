<?php

$conta1 = [
    'titular'   => 'Mike Fernando',
    'saldo'     => 5000
];

$conta2 = [
    'titular'   => 'Sueli Garcez',
    'saldo'     => 3800
];

$conta3 = [
    'titular'   => 'Renê Hamilton',
    'saldo'     => 270
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ( $i = 0; $i < count($contasCorrentes); $i++) { 
    
    echo $contasCorrentes[$i] ['saldo'] .PHP_EOL;
}
