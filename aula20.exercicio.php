<?php
    //1. Crie très variáveis para armazenar o seu nome, idade e esporte predileto.
    $name = 'Ismael';
    $age = 21;
    $sport = 'Futebol';

    //2. Crie um array com três tecnologias que você pretende aprender.
    $tech = ['PHP', 'JavaScript', 'React'];

    //3. Converta a variável com a idade para string e mostre com var_dump o valor dela antes e depois da conversão.
    var_dump($age);
    settype($age, 'string');
    var_dump($age);

    //4. Imprima na tela os valores de nome, idade e esporte criados no escopo global por meio de uma função.
    function execicio(){
        global $name;
        global $age;
        global $sport;

        echo '<br>';
        echo "Nome: $name";
        echo '<br>';
        echo "Idade: $age";
        echo '<br>';
        echo "Esporte preferido: $sport";
    }

    execicio();