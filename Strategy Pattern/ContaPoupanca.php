<?php

require_once "ContaBancariaInterface.php";
require_once "Conta.php";

class ContaPoupanca extends Conta implements ContaBancariaInterface
{
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

        if($this->saldo < $valor) {
            echo "Saldo insuficiente, operação não realizada";
            exit;
        }

        return $this->saldo -= $valor;
    }

    public function saldo(){
        echo "Saldo da Conta Poupança é: $this->saldo" . PHP_EOL;
    }
}