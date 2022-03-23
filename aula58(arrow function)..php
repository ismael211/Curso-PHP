<?php
//ARROW Function

$valor = 3;

$somar = fn($a, $b) => $a + $b * $valor;

echo $somar(10, 25);

//Equivalente a

$somar = function($a, $b) use ($valor) {
    return $a + $b * $valor;
};

echo $somar(10, 25);