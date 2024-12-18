<?php
/**
 * dados 3 medidas informadas pelo usuário, dia qual é o tipo do triângulo:
 * 1 - equilátero
 * 2 - isóceles
 * 3 - escaleno
 */

$ladoA = 13;
$ladoB = 12;
$ladoC = 15;

$soma1 = $ladoA + $ladoB;
$soma2 = $ladoA + $ladoC;
$soma3 = $ladoB + $ladoC;

if ($soma1 < $ladoC || $soma2 < $ladoB || $soma3 < $ladoA) {
    echo "Não é um triângulo.";
} else if ($ladoA == $ladoB && $ladoB == $ladoC) {
    echo "As medidas informadas formam um triângulo Equilátero.";
} else if ($ladoA == $ladoB && $ladoB != $ladoC || $ladoA == $ladoC && $ladoC != $ladoB || $ladoB == $ladoC && $ladoA != $ladoB) {
    echo "As medidas informadas formam um triângulo Isóceles.";
} else if ($ladoA != $ladoB && $ladoA != $ladoC && $ladoB != $ladoC) {
    echo "As medidas informadas formam um triângulo Escaleno.";
}


