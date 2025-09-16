<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);

    $media = ($nota1 + $nota2) / 2;

    echo "O aluno <strong>$nome</strong> ficou com <strong>" . number_format($media, 1, ',', '.') . "</strong> de média.";
} else {
    echo "Acesse o formulário para calcular a média.";
}
?>
