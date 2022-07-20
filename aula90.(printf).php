<?php

print "Exibe um texto na tela!\n";

$formato = "Existem %d animais no %s, com maior quantidade no %s"; //A porcentagem serve como um parametro para saber o tipo de dado q será substituido
//d = decimal e s = string | nesse exemplo

printf($formato, 50000, "Brasil", "Amazonas");