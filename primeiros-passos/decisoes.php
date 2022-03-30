<?php

$idade = 15;
$numeroDePessoas = 3;


echo "Você só pode entrar sozinho se tiver mais que 18 anos!" .PHP_EOL;
echo "A partir de 16, somente acompanhado!" . PHP_EOL;

if ( $idade >= 18) {

    echo "Você tem $idade." . PHP_EOL; 
    echo "Pode entrar!";

} else if ( $idade >= 16 && $numeroDePessoas > 1 ) {

    echo "Você tem $idade." . PHP_EOL; 
    echo "Pode entrar";

} else {

    echo "Você tem $idade." . PHP_EOL;
    echo "Não pode entrar!";
}