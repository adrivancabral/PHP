<?php

// Estruturas condicionais - Permite o programa tomar decisões de acordo com determinadas condições.

// 1 - IF - Executa um bloco de código somente quando a condição é verdadeira.

$idade = 20;

if ($idade >= 18) { // Se a idade for maior ou igual a 18 a mensagem será exibida, se não for nada acontecerá.
    echo "Maior de idade";
}
echo "<br>";

// 2 - IF e ELSE - O else permite executar um segundo bloco quando a condição do if for falsa.

$idade2 = 17;

if ($idade2 >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}

echo "<br>";

// 3 = IF, ELSEIF e ELSE - O elseif permite verificar várias condições diferentes.

$nota = 10; 

if ($nota >= 9) {
    echo "Exelente!";
} elseif ($nota >= 7) {
    echo "Aprovado!";
} elseif ($nota >= 5) {
    echo "Recuperção!";
} else {
    echo "Reprovado!";
}

echo "<br>";

// 4 - SWITCH - É utilizado quando precisamos comparar uma variável com diferentes valores específicos; 

$opcao = 2;

switch ($opcao) {
    case 1:
        echo "Cadastrar receita";
        break; // Encerra o switch depois de executar o bloco correspondente
    case 2:
        echo "Cadastrar despesa";
        break;
    case 3: 
        echo "Cadastrar saldo";
        break;
    default: // É executado quando nenhum dos case corresponde ao valor informado
        echo "Opção inválida";
}

?>