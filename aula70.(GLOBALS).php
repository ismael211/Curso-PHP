<?php

function qualquer() {

    $nome = 'hcode';
    global $idade;
    $idade = 30;
    $GLOBALS["nome"] = 'João';

    echo $GLOBALS['empresa']."<br/>"; //erro pois não existe
    echo $nome; //Será exibido a variavel, não O globals

}

qualquer();
echo "<br /> Fora da função: $nome <br/>"; //Será exibido o Globals
var_dump($GLOBALS); //Para ver o que existe no GLOBALS