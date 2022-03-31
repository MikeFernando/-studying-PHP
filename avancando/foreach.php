<?php

$contasCorrentes = [
    12345678910     => [
        'titular'   => 'Mike Fernando',
        'saldo'     => 2500
    ],

    321345679011    => [
        'titular'   => 'Renê Hamilton',
        'saldo'     => 270
    ],
    
    838002010010    => [
        'titular'   => 'Sueli Garcez',
        'saldo'     =>  3800
    ]
];

foreach ( $contasCorrentes as $key => $conta ) {

    echo $key .PHP_EOL;
}   