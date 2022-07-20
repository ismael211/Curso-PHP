<?php

//Função para o parametro não ser execultado e vir como texto

$html = '<a href="https://hcode.com.br/blog">Acesse</a>';

// echo htmlentities($html);

$db = 'um link puxado do banco';

echo html_entity_decode($db);
//Faz o processo reverso do primeiro exemplo