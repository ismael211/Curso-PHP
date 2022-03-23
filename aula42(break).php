<?php
//BREAK
/*
$leitura = 20;
$arq = 250;

while ($leitura <= $arq) {

    if($leitura == 80) {
        echo 'Saindo do laço';
        break;
    }
$leitura += 20;
echo $leitura."<br />";
}
*/

for ($x = 1; $x <= 10; $x++) {
    echo '<br>';
    for ($y = 1; $y <= 10; $y++){
        if ($x * $y > 25) {
            break 2; //Break 2 para os dois for
        }
        echo $x ."x". $y ."=". $x*$y."<br>";
    }
}
echo 'Gostasse?';