<?php

/***
 * TODO: Utilizando o bloco try, throw, cath crie uma condição para variavel $cpf, retire os sinais de ponto (.)
 e traço (-) da variavel, verifique se o conteúdo da variável é menor que 11, se for lance uma excessão, CPF inválido!.
 * 
 */

class acertoException extends Exception {}


$cpf = '051.570.942-56';

try {
    $ncpf = str_replace('.','', $cpf);
    $ue = str_replace('-','', $ncpf);

    if (strlen($ue)< 11){
        throw new Exception("CPF inválido!");

    }else{
        throw new acertoException("CPF válido!");
    }
    
} catch(Exception $e) { //Não é necessario passar uma variavel no php8 
    echo $e;

} finally {
    echo "\n Obrigado, volte sempre!";
}