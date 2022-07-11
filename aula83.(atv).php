<?php


/**
 * 
 * TODO: Crie um cookie armazenando um produto
 * TODO: Recupere os dados do cookie gravado, verifique se o usuário possui o cookie, exiba: "Ganhe 5% de desconto para comprar: exiba o valor do cookie"
 * 
 */



$cookie_name = "my_cookie";
$cookie_value = "pau no cu da hcode";
setcookie($cookie_name, $cookie_value); 

if(!isset($_COOKIE[$cookie_name])) {
  echo $cookie_name . "' Não existe!";
} else {
  echo "Ganhe 5% de desconto para comprar: " . $_COOKIE[$cookie_name];
}

