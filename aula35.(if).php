<?php

$a = 10;
$b = $a - 1;

if ($a > $b){
    echo "Sim";
}elseif ($b > $a){
    echo "Não";
}
else{
    echo 'São iguais';
}

//OPERADOR TERNARIO - If de uma linha só

echo (false) ? "Ismael":"Henrique";