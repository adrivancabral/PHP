<?php
// Funções personalizadas.

// 1 - Uma função é um bloco de código criado para executar uma tarefa especifica.

// exemplo sem função - > Se precisar fazer esse cálculo em dez lugares diferentes, terá que repetir o código.
 $receitas = 1500;
 $despesas = 500;

 $saldo = $receitas - $despesas;

 echo $saldo;
 echo "<br>";

// Exemplo com função -> estrutura reutilizável:
function calcularSaldo() {
    $receitas1 = 1500;
    $despesas1 = 500;

    $saldo1 = $receitas1 - $despesas1;

    echo $saldo1;
}

calcularSaldo(); // Chama a função, faz o código ser executado
echo "<br>";

// 2 - Funções com parâmetros:
function calcularSaldo2($receitas2, $despesas2) {
    $saldo2 = $receitas2 - $despesas2;
    echo $saldo2;
}
calcularSaldo2(1500, 500);
echo "<br>";

// Podemos utilizar a mesma função várias vezes
?>