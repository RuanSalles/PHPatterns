<?php

require "./Estoque.php";
require "./Entrega.php";
require "./Pagamento.php";

class CompraFacade{
    public static function finalizarCompra($idProduto,$endereco,$cep,$transportadora,$meioDePagamento){
        $valorDoProduto = Estoque::retornarPrecoDoProdutoPeloID($idProduto);
        $entrega = new Entrega();
        $entrega->endereco = $endereco;
        $entrega->cep = $cep;
        $entrega->transportadora = $transportadora;
        $valorDoFrete = $entrega->calcularFrete();
        $valorTotal = $valorDoProduto + $valorDoFrete;
        if($meioDePagamento == 1){
            Pagamento::pagarComCartao($valorTotal);
        }else{
            Pagamento::pagarComBoleto($valorTotal);
        }
    }
}