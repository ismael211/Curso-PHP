<?php
/*    TRATAMENTO DE ERRO

    $result = @file("alsdfjsafasdf") or die('Não foi possivel encontrar');

-----------------------------------------------------------------------------------
$produto = `dir`; //Vai simular a função shell exec ou exec

echo "<pre>$produto</pre>";

--------------------------------------------------------
OPERADORES DE INCREMENTO E DECREMENTO
$a = 10;

echo $a * 2;

 se ++a acontece a soma antes de qualquer coisa
 se a++ acontece depois de tudo
*/
$firstName = 'Ismael';
$lastName = 'Silva';

$name = $firstName ." " . $lastName;

var_dump($name);

echo '<br>';

//RECEBIMENTO COM CONCATENAÇÃO

$texto = 'A ANTIGA filosofia grega repartia-se em três ciências: a Física, a Ética e a Lógica..';
$texto .= ' Esta divisão está inteiramente de acordo com a natureza das coisas, nem temos que';
$texto .= ' introduzir-lhe qualquer espécie de aperfeiçoamento, a não ser acrescentar o princípio em';
$texto .= ' que ela se baseia, para que desse modo possamos, por um lado, possuir a certeza de ela';
$texto .= ' ser completa e, por outro lado, determinar com exatidão as subdivisões necessárias.';

echo $texto;

//MOSTRAR TEXTO
$texto2 = <<<VARIAVEL
<pre>
A ANTIGA filosofia grega repartia-se em três ciências: a Física, a Ética e a Lógica..
Esta divisão está inteiramente de acordo com a natureza das coisas, nem temos que
introduzir-lhe qualquer espécie de aperfeiçoamento, a não ser acrescentar o princípio em
que ela se baseia, para que desse modo possamos, por um lado, possuir a certeza de ela
ser completa e, por outro lado, determinar com exatidão as subdivisões necessárias.
</pre>
VARIAVEL;

echo $texto2;

//-------------------------------------------------------------
//ARRAYS

//-----------------------
class Carro {

}

class Moto{


}
$fusca = new Carro();

var_dump($fusca instanceof Carro);
var_dump($fusca instanceof Moto);