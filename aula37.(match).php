<?php
//FUNÇÃO NOVA DO PHP 8
$msg = "100";

$retorno = match($msg) {
    "100" => "SUCESSO",
    "300" => "Redirect",
    "40" => "erro",
    default => "Padrão"
};

var_dump($retorno);