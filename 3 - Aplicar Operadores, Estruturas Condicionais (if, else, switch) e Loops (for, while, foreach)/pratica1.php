<?php
$receitas = [1500, 500, 300, 200];
$despesas = [500, 250, 150, 100];
$totalReceitas = 0;
$totalDespesas = 0;

// soma de receitas 
foreach ($receitas as $receita) {
    $totalReceitas += $receita;
}
// soma de despesas
foreach ($despesas as $despesa) {
    $totalDespesas += $despesa;
}
// calculo de saldo
$saldo = $totalReceitas - $totalDespesas;
// Exibindo resultados
echo "Total de receitas: R$ $totalReceitas <br>";
echo "Total de despesas: R$ $totalDespesas <br>";
echo "Saldo: R$ $saldo <br>";
// Verificando situação financeira 
if ($saldo > 0) {
    echo "Saldo positivo";
} elseif ($saldo < 0) {
    echo "Saldo negativo";
} else {
    echo "Saldo zerado";
}
?>