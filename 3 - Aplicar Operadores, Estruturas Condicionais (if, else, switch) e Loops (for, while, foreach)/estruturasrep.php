<?php
// Estruturas de Repetição (Loops) - Permitem executar um mesmo bloco de código várias vezes, sem precisar escrever o mesmo código repetidamente.

// for      	Quando sabemos quantas repetições queremos
// while    	Quando dependemos de uma condição
// do while 	Quando precisamos executar pelo menos uma vez
// foreach	    Quando queremos percorrer arrays

// 1 - FOR - É utilizado quando sabemos quantas vezes queremos repetir uma operação.

for ($i = 1; $i <= 5; $i++) { // Começa o contador em 1, até que o valor fique em 5 (não deixa o valor passar de 5) e sempre adicionando +1 ao ultimo valor mostrado.
    echo "Número: $i <br>";
}
echo "<br>";

for ($dia = 1; $dia <= 7; $dia++) {
    echo "Dia: $dia <br>";
    }
echo "<br>";

// 2 = WHILE - Executa um bloco de código enquanto determinada condição for verdadeira.

$contador = 1;

while ($contador <= 5) {
    echo "Número: $contador <br>";
    $contador++;
}
echo "<br>";

$saldo = 0;
$deposito = 100;

while ($saldo < 500) { // Enquanto saldo for menor que 500 os depositos continuam.
    $saldo += $deposito;
    echo "Saldo atual: R$ $saldo <br>";
}
echo "<br>";

// 3 - DO WHILE - Segue o mesmo de while porém o código é executado ao menos uma vez, mesmo que a condição seja falsa.

$numero = 10;

do {
    echo "Executando código"; // Mesmo que o $numero seja maior que 5, o código é executado antes da verificação da condição.
    $numero++;
} while ($numero < 5);

echo "<br>";

// 4 - FOREACH - É utilizado para percorrer arrays.

$receitas = [150, 200, 350, 100, 500];

foreach ($receitas as $receita) { // Traz o resutado com cada elemento da array.
    echo "Receita: R$ $receita <br>"; // Variável que recebe cada elemento durante a repetição
}
echo "<br>";

// FOREACH com chave de valor - Acessar a chave e o valor de cada elemento.

$receitas1 = [
    "Salário" => 2500,
    "Freelance" => 500,
    "Outros" => 200
];
foreach ($receitas1 as $categoria => $valor) {
    echo "$categoria: R$ $valor <br>";
}
echo "<br>";
?>
