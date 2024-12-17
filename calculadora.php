<?php

/**
 * operadores (+ - * /)
*/

$numero1 = 8;
$numero2 = 10;
$operador = "+";

if ($operador == "+") {
    $soma = $numero1 + $numero2;
    echo "A função é $numero1 + $numero2 = $soma";
} else if ($operador == "-") {
    echo "A função é $numero1 - $numero2 = " . ($numero1 - $numero2);
} else if ($operador == "*") {
    echo "A função é $numero1 * $numero2 = " . ($numero1 * $numero2);
} else if ($operador == "/") {
    echo "A função é $numero1 / $numero2 = " . ($numero1 / $numero2);
} else {
    echo "Operador inválido!<br> Use apenas + - * /";
}