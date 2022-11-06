<?php
require_once "ContaPoupanca.php";
require_once "ContaCorrente.php";
require_once "Conta.php";
$conta = new ContaPoupanca('0123', '2020', 'Ruan Sales', 75);
var_dump($conta) . PHP_EOL;
$conta->sacar(28);
$conta->saldo();

$conta2 = new ContaCorrente('1234', '09876', 'Danzel', 920);
var_dump($conta2)  . PHP_EOL;
$conta2->sacar(200);
$conta2->saldo();


