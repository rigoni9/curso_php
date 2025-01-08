<?php
/***
 * 1º - Recriar o exercício da tabuada utilizando funções;
 * 2º - Encontrar os 10 primeiros numeros pares e os 10 primeiros numeros impares;
 * 3º - Encontrar os 10 primeiros numeros primos, a partir do 10;
 * 4º - Ordenar em ordem crescente o array [10, 5, 2, 30, 85, 14];
 *      Saida esperada: [2, 5, 10, 14, 30, 85]; Não utilizar funções nativas do php como asort, usort e sort;
 */

 //Exercício n° 1:
$valor = 10;

echo "Tabuada do numero $valor: <br>";
function tabuada($valor) {
    for ($i = 0; $i <= 10; $i++) {
        $soma = $valor * $i;
        echo "<br>$valor * $i = $soma;";
    }
}
tabuada($valor);

//Exercício n° 2:
$pares = [];
$impares = [];

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        $pares[] = $i;
    }else {
        $impares[] = $i;
    }
}

echo "<br><br>Pares: " . implode(", ", $pares) . "<br>"; 
echo "Impares: " . implode(", ", $impares) . "<br>"; 




//Exercício n°3:
$numero = 100;

$limitador = $numero -1;

$primo = true;
$primos = [];
for ($i = 10; $i <= $limitador; $i++) {
    $resto = $numero % $i;
    if ($resto == 0) {
        $primo = false;
        break;
    }else {
        $primos[] = $i;
        echo "<br> Primos: " . implode(", ", $primos) . "<br>";
    }
}

