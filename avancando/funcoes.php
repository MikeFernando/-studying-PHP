<?php

function displayMessage( string $message)
{
    echo $message . PHP_EOL;
}

function withdraw( array $conta, float $valueWithdraw ): array
{

    if ($valueWithdraw > $conta['saldo']) {

        displayMessage("Você não pode sacar, saldo insuficiente!");

    } else {

        $conta['saldo'] -= $valueWithdraw;

    }

    return $conta;

}

function deposit(array $conta, float $valueDeposit): array
{
    if ( $valueDeposit > 0 ) {

        $conta['saldo'] += $valueDeposit;

    } else {
        
        displayMessage("Só é possivel depositar valores positivos!");
    }

    return $conta;
}

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


$contasCorrentes['111.456.789-11'] = withdraw($contasCorrentes['111.456.789-11'], 2000);
$contasCorrentes['222.345.679-22'] = deposit($contasCorrentes['222.345.679-22'], -700);


foreach ( $contasCorrentes as $cpf => $conta ) {

    displayMessage(
        "$cpf
        {$conta['titular']}
        {$conta['saldo']}"
    );
}  