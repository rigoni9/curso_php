<?php

// "Ctrl + S" salva o programa;

const CPF = '1234567890'; //constantes são sempre em maiusculas e separadas por anderline _
const VELOCIDADE_DA_LUZ = '320K|s2';

//tipos de dados primitivos.
$string = "Olá <b><i>mundo!</b></i><br>"; // <br/> ou <br> usado para pular de linha
echo $string;
$string = 'Joao do caminhao'; //override = substituir o que existia
echo $string;
$nomePessoa = "Ariel"; //style guide Camel case (sempre utilizar esse metodo na aula)
$nome_pessoa = "Ariel"; // style guide Snake Case
$inteiro = 2;
$float = 2.5; //números reais
$double = 2.5468; //números reais com mais casas depois da vírgula
$char = 'a'; //apenas um caracter


// tipos de dados estruturais
$array = array(); // versoes antigas do php 5.0 - 7.0
$array_short = []; // versoes mais novas do php 7.0+

$objeto = new stdClass(); // POO (programacao orientada ao objeto) - OOP
$classe = new stdClass();

// POO - OOPs
class Caneta { //classe sempre comeca com maiusculo
    // Atributos e/ou Propriedades
    public const PLASTICO = true;
    public $nome;
    public $cor;
    public $tipoMaterial = "Plastico"; //Pode ser alterado se o usuario trocar o nome
    public $tipoMaterial1 = self::PLASTICO; // true
    public $dimensoes;
    public $tipo;

    // metodos e/ou funcoes
    public function escrever () { // funcao sempre comeca com minusculo/ sempre usar o verbo no infinitivo

    }
}
// na linha "TERMINAL" digito
// sudo service apache2 status "senha qwe123!"

echo "<br>CPF: " . CPF;

$x = 10 + 20;
$soma = 10 + 10;
echo "<br> soma: " . $soma;
echo "<br> soma: " . $x;

$a = 10;
$b = 20;
$X = $a + $b;
echo "<br> x: " . $X;

// Tema de cada sera fazer a tabuada (6, 7) e mostrar na tela.

/*

== (igual/comparação) 
>= (maior igual)
<= (menor igual)
&& (e)
|| (ou)
= (atribuição)
. (concatenação)
% (módulo - pega o resto da divisão)

if / else / else if - se senão

if (CONDIÇÃO) {
    o que queremos executar/validar
} else  if{
    outra condição
} else {
    outra CONDIÇÃO
}

*Exercicio 1:
*Atribuir um valor para uma variavel chamada numero.
*e vamos informar ao usuario, se este numero é par ou impar.

*/

$numero = 10;

if ($numero % 2 == 0) {
    echo "<br>É PAR!";
} else {
    echo "<br>É ÍMPAR";
}

