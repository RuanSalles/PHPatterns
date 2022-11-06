<?php

class Pagamento{
    public static function pagarComCartao($valor){
        echo "Pagamento de R$ $valor com Cartão de Crédito" . PHP_EOL;
    }

    public static function pagarComBoleto($valor){
        echo "Pagamento de R$ $valor no Boleto Bancário" . PHP_EOL;
    }
}