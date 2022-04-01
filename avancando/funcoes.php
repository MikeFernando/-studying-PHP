<?php

function displayMessage($message) {

    echo $message . PHP_EOL;

}


function withdraw( $conta, $value ) {

    if ($value > $conta['saldo']) {

        displayMessage("Você não pode sacar, saldo insuficiente!");

    } else {

        echo $conta['saldo'] -= $value;

    }

    return $conta;

}


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


$contasCorrentes['123.456.789-10'] = withdraw($contasCorrentes['123.456.789-10'], 500);


foreach ( $contasCorrentes as $cpf => $conta ) {

    displayMessage($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}   