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

function capitalName(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}