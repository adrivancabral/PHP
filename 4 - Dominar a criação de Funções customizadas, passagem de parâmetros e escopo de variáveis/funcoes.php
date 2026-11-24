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

// Podemos usar a mesma função várias vezes
function apresentarUsuario($nome1) {
    echo "Olá, $nome1! <br>";
}
apresentarUsuario("Adrivan");
apresentarUsuario("Maria");
apresentarUsuario("João");
echo "<br>";

// Podemos utilizar varios parametros 
function cadastrarProduto($nome, $preco, $quantidade) {
    echo "Produto: $nome <br>";
    echo "Preço: R$ $preco <br>";
    echo "Quantidade: $quantidade";
}
cadastrarProduto("Teclado", 120, 5);
echo "<br>";

// 3 - Diferença entre echo e return 
//echo - simplesmente exibe uma informação
function somar($valor5, $valor6) {
    echo $valor5 + $valor6;
}
somar(10, 20);
echo "<br>";

//Return - devolve um resultado para quem chamou a função
function somar1($valor7, $valor8) {
    return $valor7 + $valor8;
}
$resultado = somar1(10, 20);
echo $resultado; // Usamos return porque podemos aproveitar o resultado em outras operações, Exemplo no arquivo "funcoes2.php"

?>