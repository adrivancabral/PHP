<?php
$saldo = 100;
echo "Saldo inicial: R$ $saldo <br>"; // Armazena valores variados
$saldo = 250;
echo "Novo saldo: R$ $saldo"; // Dessa forma é permitido alteração
?>
<br>

<?php
define("NOME", "Adrivan"); // Armazena valores fixos
define("IDADE", 30);
echo NOME; // Dessa forma não aceita alteração nos dados
echo IDADE;
?>
<br>

<?php
const TAXA = 0.10;
echo TAXA;
?>
<br>

<?php 
$nomeUsuario = "Adrivan";
define("NOME_SISTEMA", "Lenny Grana");
echo $nomeUsuario ; // O nome de usuario pode mudar de acordo com quem fez o login 
echo NOME_SISTEMA; // O nome do sistema é o mesmo independente da situação
?> 
<br>
<!-- Tipos de dados em PHP -->


<!-- String (texto) -->
<?php
$nome = "Adrivan";
$cidade = "São Pedro da Aldeia";

echo $nome; 
echo $cidade;
?>
<br>


<!-- Interger (número inteiro) -->
 <?php
 $idade = 30;
 $quantidade = 15;
 $temperatura = -5;
 ?>
<br>


<!-- Float (número decimal) -->
<?php
$altura = 1.75;
$preco = 49.99;
$temperatura = 36.5; // utilizar sempre ponto como separar decimal
?>
<br>


<!-- Boolean (verdadeiro ou falso) -->
 <?php
 $usuarioLogado = true; 
 $contaBloqueada = false;
 ?>
<br>
 <?php
 $usuarioLogado = false;
 if ($usuarioLogado) {
    echo "Bem vindo ao sistema!";
 } else {
    echo "Faça login para continuar.";
 }
 ?>
<br>

<!-- Array (Coleção de valores) -->
 <?php
 $frutas = ["Maçã", "Banana", "Uva"];
 echo $frutas[2];
 ?>

<?php
$usuario = [
    "nome" => "Adrivan",
    "idade" => 30,
    "cidade" => "São Pedro da Aldeia"
];
echo $usuario["nome"];
?>

<!-- NULL (Ausência de valor) -->
<?php
$telefone = null;
?>
<br>

<!-- Decobrindo o tipo de uma variável: var_dump() --> 
<?php
$nome = "Adrivan";
$idade = 30;
$altura = 1.71;
$usuarioLogado = true;

var_dump($nome);
var_dump($idade);
var_dump($altura);
var_dump($usuarioLogado);
?>

<?php
$idade = 30;
echo gettype($idade); // Só apresenta o tipo, no Var_dump() apresenta o tipo e o valor
?>


