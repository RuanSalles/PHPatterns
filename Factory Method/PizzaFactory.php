<?php
require_once "ComidaFactory.php";
require_once "PizzaEnum.php";
require_once "Pizza.php";

class PizzaFactory implements ComidaFactory
{
    public $sabores = [
        1 => [
            'sabor' => 'Calabresa',
            'ingredientes' => [
                'molho de tomate',
                'queijo mussarela',
                'calabresa',
                'oregano'
            ]
        ],
        2 => [
            'sabor' => 'Quatro Queijos',
            'ingredientes' => [
                'molho de tomate',
                'queijo mussarela',
                'queijo prato',
                'queijo cheddar',
                'queijo porvolone'
            ]
        ]
    ];

    public function verificaId($id)
    {
        return SaboresPizza::from($id);
    }

    public function criarComida($id): Pizza
    {
        $sabor = $this->verificaId($id);
        $pizza = new Pizza();
        $data = $this->sabores[$sabor->value]; 
        $pizza->sabor = $data['sabor'];
        $pizza->ingredientes = $data['ingredientes'];
        $pizza->valor = 29.00;
        $pizza->tipo = "Pizza";

        return $pizza;
    }
}