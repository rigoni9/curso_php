<?php
/**
 * dados 3 medidas informadas pelo usuário, dia qual é o tipo do triângulo:
 * 1 - equilátero
 * 2 - isóceles
 * 3 - escaleno
 */

$ladoA = 10;
$ladoB = 10;
$ladoC = 10;

if ($ladoA == $ladoB && $ladoB == $ladoC) {
    echo "As medidas informadas formam um triângulo Equilátero.";
} else if ($ladoA == $ladoB && $ladoB != $ladoC || $ladoA == $ladoC && $ladoC != $ladoB || $ladoB == $ladoC && $ladoA != $ladoB) {
    echo "As medidas informadas formam um triângulo Isóceles.";
} else if ($ladoA != $ladoB && $ladoA != $ladoC && $ladoB != $ladoC) {
    echo "As medidas informadas formam um triângulo Escaleno.";
}


