<?php
/*
Crie três variáveis, $autorizado, $admin e $nome. Avalie se a variável $autorizado for
igual a verdadeiro e $admin igual a verdadeiro escreva na tela: "Área administrativa, $nome, Bem vindo!"
*/
$autorizado = true;
$admin = true;
$nome = "Ismael";

if ($autorizado == true && $admin == true) {
    echo "Área administrativa, $nome, Bem vindo!<br><br>";
}

/**
* TODO: Crie quatro variáveis, $qtd, $valUnit, $subTotal e $frete. A variável
* $subTotal receberá $qtd multicplicado por $valUnit. Se o cliente comprar acima de 3
* unidades aplique um desconto em $subTotal de 10% do valor da compra, caso contrário aplique
* um desconto de 5%. Em seguida será somado o valor de frete em $subTotal para a massa de teste utilize:
* $qtd = 2; $valUnit = 1200.00; $frete = 40.00
* TODO: Exibir com var_dump no final o valor total cobrado.

$qtd = 4;
$valUnit = 1200.00;
$frete = 40.00;
$subTotal = $qtd * $valUnit;
if ($qtd > 3) {
    $subTotal = $subTotal - ($subTotal*0.10);
}
else {
    $subTotal = $subTotal - ($subTotal*0.05);
}
$subTotal += $frete;

echo var_dump($subTotal);

*/
/*
* TODO: Crie um contador para ir de 1920 a 2022.
* TODO: Este contador precisa armazenar uma instrução HTML dentro de uma variável string $option
com a seguinte estrutura: '<option value="$valor">$valor</option>'.
* TODO: Crie um condição dentro deste contador, se o $ano for igual a 2021 imprima o atributo
selected conforme a estrutura a seguir: <option value="$valor" selected="selected">$valor</option>
*/
echo "<select>";
for ($c = 1920; $c < 2022; $c++) {
    echo "<option value='$c' " . ($c == 2021 ? "selected='selected'" : "") . ">$c</option>";
}
echo "</select>";
/*
* TODO: Crie um arquivo chamado exercicio-03-a.php declarando duas constantes IDIOMA = "pt_BR";
LOCALE = "America/Sao_Paulo";
* TODO: Crie um arquivo chamado exercicio-03-b.php incluindo de forma obrigatorio o arquivo
anterior, e crie uma condição, para o IDIOMA seja "pt_BR" e o LOCALE seja "America/Sao_Paulo"
Imprima na tela: Idioma: Português, Fuso Horário: -3:00
*/
 