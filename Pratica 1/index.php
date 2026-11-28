<?php
$numeros = [15, 28, 10, 45, 32, 8, -52, 20];

$quantidade = 0;
$soma = 0;
$media = 0;
$pares = 0;
$impares = 0;
$maiorNumero = $numeros[0];
$menorNumero = $numeros[0];

foreach ($numeros as $numero) {
    $quantidade++;
    $soma += $numero;
    
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }

    if ($numero > $maiorNumero) {
        $maiorNumero = $numero;
    }

    if ($numero < $menorNumero) {
        $menorNumero = $numero;
    }

    $media = $soma / $quantidade;
}

echo "Relatório Numérico <br><br>";
echo "Análise dos dados informados <br><br>";
echo "Quantidade: <br> $quantidade <br><br>";
echo "Soma: <br> $soma <br><br>";
echo "Pares / Ímpares: <br> $pares / $impares <br><br>";
echo "Maior número: <br> $maiorNumero <br><br>";
echo "Menor número: <br> $menorNumero <br><br>";
echo "Média: <br>" . number_format($media, 2, ',','.') . "<br>";
?>