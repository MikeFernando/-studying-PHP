<?php

require "funcoes.php";

$contasCorrentes = [
    '111.456.789-11'    => [
    'titular'           => 'Mike',
    'saldo'             => 2500
    ],

    '222.345.679-22'    => [
    'titular'           => 'João',
    'saldo'             => 300
    ],
    
    '333.456.789-33'    => [
    'titular'           => 'Maria',
    'saldo'             =>  3800
    ]
];

capitalnName($contasCorrentes['333.456.789-33']);


$contasCorrentes['111.456.789-11'] = withdraw($contasCorrentes['111.456.789-11'], 500);
$contasCorrentes['222.345.679-22'] = deposit($contasCorrentes['222.345.679-22'], 700);


foreach ( $contasCorrentes as $cpf => $conta ) {

    displayMessage(
        "$cpf
        {$conta['titular']}
        {$conta['saldo']}"
    );
}  