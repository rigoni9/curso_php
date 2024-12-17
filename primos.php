<?php

/*
Dado um numero informado pelo usuario, informar se e um numero primo.
*/

// Função para verificar se o número é primo

$numero = 10;
function verificarPrimo($numero) {
    
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Se o número for divisível por qualquer número entre 2 e sua raiz quadrada, não é primo
        }
    }

    return true; // Caso contrário, o número é primo
}

// Testando a função com o número 7
$numero = 7;
if (verificarPrimo($numero)) {
    echo "O número $numero é primo.";
} else {
    echo "O número $numero não é primo.";
}
