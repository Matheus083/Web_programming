<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baseMaior = floatval($_POST['baseMaior']);
    $baseMenor = floatval($_POST['baseMenor']);
    $altura = floatval($_POST['altura']);

    // Fórmula da área do trapézio
    $area = (($baseMaior + $baseMenor) * $altura) / 2;

    echo "<h2>Resultado</h2>";
    echo "A área do trapézio é: <strong>" . number_format($area, 2, ',', '.') . " unidades²</strong>";
} else {
    echo "Acesse o formulário para calcular a área.";
}
?>
