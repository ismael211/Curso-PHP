<?php

//TODO: Crie três variáveis: preço, desconto e frete sendo os valores 1000.00, 10 e 35.49 respectivamente
$preco = 1000.00;
$descont = 10;
$frete = 35.49;
//TODO: Em uma linha crie uma variavel chamada total que conterá o desconto aplicado ao valor e no final somado o frete.
$total = ($preco - $preco * 0.10) + $frete;
//TODO: Crie uma variável chamada compra que conterá um valor boolean verdadeiro se o valor da variável total for até o valor do preço e menor que mil e vinte.
if($total < 1000 && $total < 1020){
    $compra = true;
}
//TODO: Exibir com var_dump no final as variáveis total e compra.
var_dump($total);
var_dump($compra);
/*
$preco = 1000.00;
$desconto = 10;
$frete = 35.49;

$total = ($preco * (1 - ($desconto / 100))) + $frete;

$compra = $total <= $preco && $total < 1020;

var_dump($compra);
var_dump($total);
*/