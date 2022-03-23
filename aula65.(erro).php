<?php
// * set_error_handler Manipula erros

set_error_handler(function($errno, $errstr, $errfile, $errline) {

    var_dump("Número: ", $errno);
    var_dump("Número: ", $errstr);
    var_dump("Número: ", $errfile);
    var_dump("Número: ", $errline);

}); 