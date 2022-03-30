<?php

$idade = 17;

echo "Você só pode entrar se tiver maior que 18 anos!" .PHP_EOL;

if ( $idade >= 18) {

    echo "Você tem $idade." . PHP_EOL; 
    echo "Pode entrar!";

} else {
    echo "Você não pode entrar!";
}