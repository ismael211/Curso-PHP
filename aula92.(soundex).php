<?php
//Compara o som que duas palavras fazem, e retorna se são parecidas
$original = "soundecs";

$search = "soundex";

// var_dump(soundex($original) == soundex($search));

var_dump(metaphone($original) == metaphone($search)); //versão mais acurada