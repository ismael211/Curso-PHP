<?php

//adcionar e remover contra barras nos caracteres q podem dar problema em uma string

$msg = "Caixa d'agua";

echo addslashes($msg);

echo stripslashes($msg);