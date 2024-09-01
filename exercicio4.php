<?php
$faturamento = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53
];

$totalFaturamento = array_sum($faturamento);
foreach ($faturamento as $estado => $valor) {
    $percentual = ($valor / $totalFaturamento) * 100;
    echo "Estado: $estado - Percentual: " . number_format($percentual, 2, ',', '.') . "%\n";
}
?>
