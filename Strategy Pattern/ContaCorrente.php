<?php

require_once "ContaBancariaInterface.php";
require_once "Conta.php";

class ContaCorrente extends Conta implements ContaBancariaInterface
{
    public $juros = 0.03;

    public function __construct($agencia, $numeroConta, $cliente, $saldo)
    {
        $this->agencia = $agencia;
        $this->numeroConta = $numeroConta;
        $this->cliente = $cliente;
        $this->saldo = $saldo;
    }

    public function depositar($valor)
    {
        $this->saldo+= $valor;
    }

    public function sacar($valor){
        $calculoJuros = $valor * $this->juros;

        if($this->saldo < $valor) {
            echo "Saldo insuficiente, operação não realizada";
            exit;
        }

        return $this->saldo -= $valor + $calculoJuros;
    }

    public function saldo(){
        echo "Saldo da Conta Corrente é: $this->saldo" . PHP_EOL;
    }
}