<?php

#GENERATOR

function fila() {
    yield "Ismael";
    yield "Mel";
    yield "Lex";
    yield "Lana";
}

$ordem = fila();

var_dump($ordem->current()); //A pessoa de cima
var_dump($ordem->next()); // Próximo da fila
var_dump($ordem->current()); //Pessoa de cima
var_dump($ordem->next());
