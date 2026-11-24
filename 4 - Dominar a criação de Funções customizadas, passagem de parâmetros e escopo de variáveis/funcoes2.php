<?php
function somar($valor1, $valor2) {
    return $valor1 + $valor2;
}
$total = somar(100, 50);
$desconto = 20;
$resultadoFinal = $total - $desconto;
echo $resultadoFinal;
echo "<br>";

// 4 - Parâmetros com valores padrão

function apresentarUsuario($nome = "Visitante") {
    echo "Olá, $nome!";
}
apresentarUsuario();
echo "<br>";

// O valor padrão só será utilizado quanto não fornecermos um argumento para aquele parâmetro
function cadastrarUsuario($nome1, $cidade = "Não informada") {
    echo "Nome: $nome1 <br>";
    echo "Cidade: $cidade <br>";
}
cadastrarUsuario("Adrivan");
echo "<br>";

// 5 - Escopo de variáveis - Escopo significa o ambiente no qual uma variável pode ser acessada.

// Escopo local - Uma variável criada dentro de uma função pertence àquela função

function calcular() {
    $saldo = 1000;
}
calcular();
echo $saldo; // O php apresentará um aviso de variável indefinida, porque $saldo foi criada dentro da função e não está disponível diretamente fora dela.
echo "<br>";
// Escopo Global - Uma variável criada fora de uma função pertence ao escopo global

$saldo = 1500;
function mostrarSaldo() {
    global $saldo; // permite acessar a variável global dentro da função 
    echo $saldo;
}
mostrarSaldo();
echo "<br>";

 // Passando a variável como parâmetro
 $saldo1 = 1500; 
 function mostrarSaldo1($valor) {
    echo $valor;
 } 
 mostrarSaldo1($saldo);
 echo "<br>";

?>