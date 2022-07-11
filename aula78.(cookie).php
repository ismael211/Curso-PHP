<?php

$f = new ReflectionFunction("setcookie"); 

//var_dump($f->getParameters()); Para ver os parametros da função


$cookie_name = "cookie_test";
$cookie_value = "5";
setcookie($cookie_name, $cookie_value); 

if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
