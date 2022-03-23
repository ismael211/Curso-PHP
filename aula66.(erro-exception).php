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

throw new Exception("Essa é minha exceção!");