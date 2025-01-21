<?php
/**
 * Criar um algoritimo que simula o funcionamento de um calendário.
 * Variáveis: $data = '01/01/2025'
 * Validar a data.
 * Validar se o ano é bissexto.
 * Dica: If else, 
 * $mes = (int) $mes - Converte para um número inteiro
 */
// 31 / 01 / 2025
// 01 2 34 5 6789 (10 caracteres)


 $data = "29/01/2100";

 $dia = substr($data, 0, 2); //primeiro número é a casa, segundo número é a quantidade de casas.
 $mes = substr($data, 3, 2);
 $ano = substr($data, 6, 4);

function bissexto($ano) {
    // Verifica se o ano é bissexto
    return (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0));
}

function meses($mes) {
    // Verifica se o mês é válido
    return ($mes >= 1 && $mes <= 12);
}

if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {
    if ($dia <= 31) {
        echo "Data válida.<br>";
    } else {
        echo "Dia inválido.<br>";
    }
} else if ($mes == 02 && bissexto($ano)) {  // Passando o ano para bissexto
    if ($dia <= 29) {
        echo "Data válida.<br>";
    } else {
        echo "Dia inválido.<br>";
    }
} else if ($mes == 02 && !bissexto($ano)) {  // Passando o ano para bissexto
    if ($dia <= 28) {
        echo "Data válida.<br>";
    } else {
        echo "Dia inválido.<br>";
    }
} else if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
    if ($dia <= 30) {
        echo "Data válida.<br>";
    } else {
        echo "Dia inválido.<br>";
    }
} else {
    echo "Mês inválido.<br>";
}

// Verificando se o ano é bissexto
if (bissexto($ano)) {
    echo "$ano é um ano bissexto.<br>";
} else {
    echo "$ano não é um ano bissexto.<br>";
}

// Verificando se o mês é válido
if (meses($mes)) {
    echo "$mes é um mês válido.<br>";
} else {
    echo "$mes é inválido, digite entre 01 e 12.<br>";
}

echo "A data é $dia/$mes/$ano.<br>";
?>
