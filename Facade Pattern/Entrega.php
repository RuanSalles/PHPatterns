<?php

class Entrega{
    public $endereco;
    public $cep;
    public $transportadora;

    public function calcularFrete(){
        return 200;
    }
}