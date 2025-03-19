<?php

require_once "./Database.php";

class ContaBancaria {
    public string $titular = "";
    public string $destinatario = "";
    public float $saldo = 0;

    private $bancoDeDados;
    
    public function __construct($bancoDeDados)
    {
        $this->bancoDeDados = $bancoDeDados;
    }

    private function processarDadosVisualizacao($dados)
    {
        foreach ($dados as $idx => $linha) {
            echo "Id: $linha->id Nome: $linha->nome_titular Saldo: $linha->saldo";   
            echo "<br>";
        }
    }

    private function obterDadosConta($idConta) {
        $sql = "SELECT * FROM conta_bancaria WHERE id = '$idConta';";

        return $this->bancoDeDados->execQuery($sql);
    }

    public function criarConta(string $nome, float $valor = 0.0)
    {
        $sql = "INSERT INTO conta_bancaria (nome_titular, saldo) VALUES ('$nome', $valor);";
        $idConta = $this->bancoDeDados->execQuery($sql);
        $this->extrato($idConta);
    }

    public function sacar($idConta, $valor)
    {
        if (empty($idConta)) {
            return "Erro, id da conta está em branco ou é inváldo!";
        }

        $dadosConta = $this->obterDadosConta($idConta);

        if (empty($dadosConta)) {
            return "Erro ao obter a conta. Conta inexistente. verifique o ID informado.";
        }

        $saldo = $dadosConta[0]->saldo;
        $valorTmp = $saldo - $valor;

        $sql = "UPDATE conta_bancaria SET saldo=$valorTmp WHERE id='$idConta';";
        $this->bancoDeDados->execQuery($sql);
    }

    public function depositar($idConta, $valor)
    {
        if (empty($idConta)) {
            return "Erro, id da conta está em branco ou é inváldo!";
        }

        $dadosConta = $this->obterDadosConta($idConta);

        if (empty($dadosConta)) {
            return "Erro ao obter a conta. Conta inexistente. verifique o ID informado.";
        }

        $saldo = $dadosConta[0]->saldo;
        $valorTmp = $saldo + $valor;

        $sql = "UPDATE conta_bancaria SET saldo=$valorTmp WHERE id='$idConta';";
        $this->bancoDeDados->execQuery($sql);
    }

    public function pix($contaOrigem, $contaDestino, $valor)
    {
        $this->sacar($contaOrigem, $valor);
        $this->depositar($contaDestino, $valor);     
    }

    public function listarContas()
    {
        $sql = "SELECT * FROM conta_bancaria;";
        $dados = $this->bancoDeDados->execQuery($sql);
        $this->processarDadosVisualizacao($dados);
    }

    public function extrato($idConta) {

        if (empty($idConta)) {
            echo "Erro, id da conta está em branco ou é inváldo!";
            exit;
        }

        $sql = "SELECT * FROM conta_bancaria WHERE id = '$idConta';";
        $dados = $this->bancoDeDados->execQuery($sql);
        $this->processarDadosVisualizacao($dados);
    }
}

$id = $_REQUEST["id"] ?? 0;
$saldoMin = $_REQUEST["saldoMin"] ?? 0;
$saldoMax = $_REQUEST["saldoMax"] ?? 0;
$nomeTitular = $_REQUEST["nomeTitular"] ?? "";

$conta = new ContaBancaria($bancoDeDados);
echo $conta->pix(10, 1, 520);
echo $conta->listarContas();