<?php

class Estoque{
    public static function retornarPrecoDoProdutoPeloID($id){
        if($id == 10){
            return 1000;
        }else{
            return 0;
        }
    }
}