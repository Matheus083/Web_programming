<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salarioFixo = floatval($_POST['salario']);
    $vendas = floatval($_POST['vendas']);

    // Calculando comissão (4% das vendas)
    $comissao = $vendas * 0.04;

    // Salário final = salário fixo + comissão
    $salarioFinal = $salarioFixo + $comissao;

    echo "<h2>Resultado</h2>";
    echo "Comissão: <strong>R$ " . number_format($comissao, 2, ',', '.') . "</strong><br>";
    echo "Salário final: <strong>R$ " . number_format($salarioFinal, 2, ',', '.') . "</strong>";
} else {
    echo "Acesse o formulário para calcular o salário.";
}
?>
