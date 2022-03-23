<?php
// set_exception_handler trata exceção

function manipuladorDeExcecao($exception)
{
    var_dump($exception);

    echo $exception->getMessage()."<br/>"; //Mostra a mensagem
    echo $exception->getFile()."<br/>"; //Mostra o arquivo q está dando a exceção
    echo $exception->getLine()."<br/>"; //Mostra a linha
}

set_exception_handler("manipuladorDeExcecao");

class SenhaException extends Exception {}

$nome = "Ismael";
$senha = "123";

try {
    if (!$nome) {
        throw new Exception("Essa é minha exceção!");
    }

    if (strlen($senha) < 6) {

        throw new SenhaException("Senha é fraca.");

    }

} catch(Exception $e) { //Não é necessario passar uma variavel no php8 

    var_dump($e);

} finally {

    var_dump("Final");

}




//php 8
$exibeErro = fn($erro) => throw new Exception($erro);

echo $exibeErro("Deu erro! Throw expression!");

