<?php
//EXEMPLO
$country = null;

if ($session !== null){ //Se sessão não estiver vazia
    $user = $session->user; //User pega o usuario

    if ($user !== null){ // Se usuario não estiver vazio
        $address = $user->getAddress(); //Pega o endereço do usuario

        if ($address !== null){ //Se endereço não estiver vazio
            $country = $address->country; //Pega o pais do endereço

        }
    }
}

//OPERADOR NULLSAFE
#$country = $session?->user?->getAddress()?->country;


//NULL COALESCE
$nome = $_POST['nome']?? 'Não autorizado'; //Se POST nome não tiver nada, recebe a frase

//Operador logico - NavSpace
$a = 10;
$b = 10;

$c = $a <=> $b; //Se a>b o resultado é 1, Se b>a da -1, se são iguais 0
echo $c;

//------------------AULA 26 ------------------------------------
//DESLOCAMENTO DE BITS
$valorA =32;
$qtd = 2;
$valorA = $valorA << $qtd;
echo $valorA;

//128   64  32  16  8   4   2   1
// 0    0   1   0   0   0   0   0

//0100 0000 = 64

//1010 = 10