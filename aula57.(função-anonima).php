<?php
//Função anônima, sendo atribuida na variavel
    $curso = function($nome) {

        echo("Curso: ". $nome);
    };

    $curso('PHP 8'); 

    function somar($a, $b, $callback) {

        $callback($a + $b);
    }

    $fn = function($resultado) use ($curso) {//O use é útil apenas para funções anonimas, serve para adicionar variaveis a função

        echo $curso;

        var_dump($resultado);
    };

    somar(5, 10, $fn);