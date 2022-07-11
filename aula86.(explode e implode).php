<?php

$msg = "one|two|three";

// var_dump(explode("|", $msg)); //transforma em um array cada valor

// var_dump(explode("|", $msg, 2)); //limita o tamanho do array

//var_dump(explode("|", $msg, -1)); //Retira o item da ultima posição

$colors = ['blue', 'white', 'black'];

var_dump(implode('|', $colors));