<?php

require_once "PizzaFactory.php";

$fabricaPizza = new PizzaFactory();

$produto = $fabricaPizza->criarComida(1);

var_dump($produto);