<?php

// 1 - Operadores Aritméticos

// +	Adição  	    $a + $b
// -	Subtração   	    $a - $b
// *	Multiplicação   	$a * $b
// /	Divisão	            $a / $b
// %	Resto da divisão    $a % $b
// **	Potenciação 	    $a ** $b

$valor1 = 20;
$valor2 = 5;

echo $valor1 + $valor2; // 25
echo "<br>";

echo $valor1 - $valor2; // 15 
echo "<br>";

echo $valor1 * $valor2; // 100
echo "<br>";

echo $valor1 / $valor2; // 4
echo "<br>";

echo $valor1 % $valor2; // 0 Resto da divisão
echo "<br>";

echo $valor1 ** $valor2; // 3200000 (20 a quinta potência)
echo "<br>";

// 2 - Operadores de atribuição - Usados para atribuir ou atualizar valores de variáveis.

// =	    $x = 10	    Atribui 10
// +=	    $x += 5 	$x = $x + 5
// -=	    $x -= 5	    $x = $x - 5
// *=	    $x *= 2	    $x =$x * 2
// /=	    $x /= 2	    $x =$x / 2
// %=	    $x %= 2	    $x =$x % 2

$saldo = 500;
$saldo += 200; // Não preciso escrever $saldo = $saldo + 200, o operador += faz isso.
echo $saldo; // 700

$saldo -= 100;
echo "<br>";
echo $saldo; //600
echo "<br>";

// 3 - Operadores de comparação - Comparam dois valores e retornam um resultado booleano: true ou false. 

// ==	Igual
// ===	Idêntico (valor e tipo)
// !=	Diferente
// !==	Não idêntico
// >	Maior que
// <	Menor que
// >=	Maior ou igual
// <=	Menor ou igual

$numero = 10;

var_dump($numero == "10"); // Esta comparando somente os valores e nao o tipo = true

echo "<br>";

var_dump($numero === "10"); // Compara o valor e tambem o tipo, como "10" é uma string e nao um numero 10, o valor que volta é false.
echo "<br>";

// 4 - Operadores lógicos - Utilizados para combinar condições

// &&   	E (AND)
// ||    	OU (OR)
// !        NÃO (NOT)

$idade = 30;
$possuiCNH = true;

var_dump($idade >= 18 && $possuiCNH === true); // true , se tivesse usado || só uma delas precisaria ser verdadeira
echo "<br>";

// 5 -  Operadores de incremento e decremento - Utilizados para aumentar ou diminuir o valor de uma variável em uma unidade

$contador = 5;
$contador++;
echo $contador; // 6
echo "<br>";

$contador--;
echo $contador; // 5

?>
