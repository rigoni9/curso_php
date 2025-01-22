<?php

class ContaBancaria {
    public $titular = "";
    public $saldo = 0;
    public $destinatario = "";
    public $historico = [];

    public function sacar() {}
    public function depositar() {}
    public function verSaldo() {}
    public function pix() {}
    public function extrato() {
        $this->historico = [
            "odair" => [
                "ariel" => 20.50
            ],
            "ariel" => [
                "diego" => 50
            ]
            ];

            foreach($this->historico as $titular => $destinatarios) {
                foreach($destinatarios as $destinatario => $valor) {
                    echo "Titular: $titular Destinatário: $destinatario Valor: R$$valor.<br>";
                }
            }
    }


}

$conta = new ContaBancaria();
echo $conta->extrato();
