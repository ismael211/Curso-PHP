<?php
//WHILE

$x = 0;
/*
while ((int)date("s") % 2 === 0){
    $x++;
}

var_dump($x);
*/
//--------------------------------------
//DO-WHILE
do {
    $x++;
}while ((int)date("s") % 2 === 0);

var_dump($x);