<?php
//SWITCH
$name = 'Ismaell';

switch($name){
    case "Ismael":
    case 'Ismaell';
        echo "O $name é o mais lindo do grupo!";
    break;
    default; //equivalente ao else
        echo 'Ele é lindo';
}