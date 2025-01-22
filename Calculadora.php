<?php

class Calculadora {
    public $valor1 = 0;
    public $valor2 = 0;
    public $resultado = 0;
    public $operador = "";

    public function __construct($num1, $num2)
    {
        $this->set($num1, $num2);
    }

    public function set($num1, $num2)
    {
        $this->valor1 = $num1;
        $this->valor2 = $num2;
    }

    public function zerar()
    {
        $this->valor1 = 0;
        $this->valor2 = 0;
        $this->resultado = 0;
        $this->operador = "";
    }

    public function somar () {
        $this->operador = "+";
        $this->resultado = $this->valor1 + $this->valor2;
        
        return $this->__toString();    
    }

    public function subtrair () {
        $this->operador = "-";
        $this->resultado = $this->valor1 - $this->valor2;
        
        return $this->__toString();    
    }

    public function multiplicar () {
        $this->operador = "*";
        $this->resultado = $this->valor1 * $this->valor2;
        
        return $this->__toString();    
    }

    public function dividir () {
        if (empty($this->valor1) || empty($this->valor2)) {
            return "Não é possível executar divisão por zero.<br>";
        }

        $this->operador = "/";
        $this->resultado = $this->valor1 / $this->valor2;
        
        return $this->__toString();    
    }

    public function __toString()
    {
        if (empty($this->valor1) || empty($this->valor2)) {
            return "O resultado é: {$this->resultado}.<br>";
        }
        return "O resultado {$this->valor1} {$this->operador} {$this->valor2} é: {$this->resultado}<br>";
    }
    
}

$num1 = 8;
$num2 = 11;

$calculadora = new Calculadora ($num1, $num2);

echo $calculadora->somar();
echo $calculadora->multiplicar();
echo $calculadora->set(17, 9);
echo $calculadora->subtrair();
echo $calculadora->dividir();
$calculadora->zerar();
echo $calculadora->dividir();
echo $calculadora->somar();
echo $calculadora;