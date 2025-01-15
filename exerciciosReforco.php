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

$inicio = 10; 
$qtdPrimos = 10; 
$primos = []; 

for ($numeroPrimo = $inicio; count($primos) < $qtdPrimos; $numeroPrimo++) { //count - conta os números dentro de uma array
    $divisores = 0; 
    for ($i = 2; $i < $numeroPrimo; $i++) {
        if ($numeroPrimo % $i == 0) { 
            $divisores++;
            break; 
        }
    }
        if ($divisores == 0) {
            $primos[] = $numeroPrimo; // adicionando os números primos dentro de lista
        }
    }
echo "Os 10 primeiros números primos a partdir de $inicio são: " . implode(", ", $primos);
echo "<br>";
echo "<br>";

//Exercício n°4:

echo "Array desordenado <br> [10] [5] [2] [30] [85] [14]";

$array = [ 10, 5, 2, 30, 85, 14];
//         0, 1, 2,  3,  4,  5

$tam = count($array) -1; // 6 - 1 = 5

for ($i = 0; $i < $tam; $i++ ) {       
    for ($j = $tam; $j > 0; $j--) {
        $anterior = $j -1;

        if ($array[$anterior] > $array[$j]) {
            $temp = $array[$anterior];
            $array[$anterior] = $array[$j];
            $array[$j] = $temp;
        }
    }

    if ($array[$i] < $array[$j]) {
        $temp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;
    }
}

echo "<br><br>Array Ordenado<br>";
foreach($array as $resultado){
    echo "[$resultado] ";
}