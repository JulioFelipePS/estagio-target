<?php

$data = json_decode(file_get_contents('arquivo.json'), true);
$faturamento = $data['faturamento_diario'];
$menorValor = null;
$maiorValor = null;
$somaFaturamento = 0;
$diasComFaturamento = 0;
$diasAcimaDaMedia = 0;

foreach ($faturamento as $valor) {
    if (!is_null($valor) && $valor > 0) {
        if (is_null($menorValor) || $valor < $menorValor) {
            $menorValor = $valor;
        }
        if (is_null($maiorValor) || $valor > $maiorValor) {
            $maiorValor = $valor;
        }
        $somaFaturamento += $valor;
        $diasComFaturamento++;
    }
}
$mediaMensal = $somaFaturamento / $diasComFaturamento;
foreach ($faturamento as $valor) {
    if (!is_null($valor) && $valor > $mediaMensal) {
        $diasAcimaDaMedia++;
    }
}
// Exibir os resultados
echo "Menor valor de faturamento: R$ " . number_format($menorValor, 2, ',', '.') . "\n";
echo "Maior valor de faturamento: R$ " . number_format($maiorValor, 2, ',', '.') . "\n";
echo "Número de dias com faturamento acima da média: $diasAcimaDaMedia\n";
?>