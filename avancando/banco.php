<?php

require "funcoes.php";

$contasCorrentes = [
    '111.456.789-11'    => [
    'titular'           => 'Mike Fernando',
    'saldo'             => 2500
    ],

    '222.345.679-22'    => [
    'titular'           => 'Renê Hamilton',
    'saldo'             => 300
    ],
    
    '333.456.789-33'    => [
    'titular'           => 'Avelina Garcez',
    'saldo'             =>  3800
    ]
];


$contasCorrentes['111.456.789-11'] = withdraw($contasCorrentes['111.456.789-11'], 500);
$contasCorrentes['222.345.679-22'] = deposit($contasCorrentes['222.345.679-22'], 700);


foreach ( $contasCorrentes as $cpf => $conta ) {

    displayMessage(
        "$cpf
        {$conta['titular']}
        {$conta['saldo']}"
    );
}  