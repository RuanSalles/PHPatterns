<?php

interface ContaBancariaInterface
{
    public function depositar($valor);
    public function sacar($valor);
    public function saldo();
}