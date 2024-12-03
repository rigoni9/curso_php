<?php

const CPF = '1234567890';
const VELOCIDADE_DA_LUZ = '320K|s2';

//tipos de dados primitivos.
$string = "Um texto Qualquer";
$string = 'Joao do caminhao'; //override = substituir o que existia
$nomePessoa = "Ariel" //style guide Camel case (sempre utilizar esse metodo na aula)
string $nome_pessoa = "Ariel"; // style guide Snake Case
int $inteiro = 2;
float $float = 2.5; //números reais
double $double = 2.5468; //números reais com mais casas depois da vírgula
string $char = 'a'; //apenas um caracter


// tipos de dados estruturais
$array = array(); // versoes antigas do php 5.0 - 7.0
$array_short = []; // versoes mais novas do php 7.0+

$objeto = new stdClass(); // POO (programacao orientada ao objeto) - OOP
$classe = new stdClass();


class Caneta {
    // Atributos e/ou Propriedades
    public $nome;
    public $cor;
    public $material;
    public $dimensoes;
    public $tipo;

    // metodos e/ou funcoes
    public function escrever () {
        
    }
}