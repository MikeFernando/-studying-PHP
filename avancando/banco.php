<?php

$contasCorrentes = [
    '123.456.789-10'    => [
    'titular'           => 'Mike Fernando',
    'saldo'             => 2500
    ],

    '321.345.679-11'    => [
    'titular'           => 'Renê Hamilton',
    'saldo'             => 300
    ],
    
    '838.002.010-10'    => [
    'titular'           => 'Avelina Garcez',
    'saldo'             =>  3800
    ]
];

$contasCorrentes['123.456.789-10']['saldo'] -= 500;


if ( 500 > $contasCorrentes['321.345.679-11']['saldo'] ) {

    echo "Você não pode sacar, saldo insuficiente!" . PHP_EOL;

} else {

    $contasCorrentes['321.345.679-11']['saldo'] -= 500;
}



foreach ( $contasCorrentes as $cpf => $conta ) {

    echo $cpf . " " . $conta['titular'] . " " . $conta['saldo'] .PHP_EOL;
}   