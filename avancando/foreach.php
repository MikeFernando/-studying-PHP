<?php

$contasCorrentes = [
    '123.456.789-10'    => [
    'titular'           => 'Baguera da Silva',
    'saldo'             => 2500
    ],

    '321.345.679-11'    => [
    'titular'           => 'Renê Hamilton',
    'saldo'             => 270
    ],
    
    '838.002.010-10'    => [
    'titular'           => 'Avelina Garcez',
    'saldo'             =>  3800
    ]
];

$contasCorrentes['288.787.148-01'] = [
    'titular'           => 'Sueli Garcez',
    'saldo'             => 1212
];

$contasCorrentes['494.208.978-69'] = [
    'titular'           => 'Mike Fernando',
    'saldo'             => 1313
];


foreach ( $contasCorrentes as $key => $conta ) {

    echo $key . " " . $conta['titular'] .PHP_EOL;
}   