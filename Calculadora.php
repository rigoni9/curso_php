<?php

class Calculadora {
    public $valor1 = 0;
    public $valor2 = 0;
    public $resultado = 0;

    public function somar () {
        $soma = $valor1 + $valor2;
        $resultado = $soma;
        echo "$resultado";
    }

    public function __toString()
    {
        return $this->resultado;
    }

}

somar ();

