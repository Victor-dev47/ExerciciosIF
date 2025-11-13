<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salario = $_POST["salario"];
    if ($salario <= 2000) {
        echo "<p>Isento de Imposto.</p>";
    } else {
        $imposto = $salario * 0.275;
        echo "<h3>O valor do imposto é: R$ " . number_format($imposto, 2, ',', '.') . "</h3>";
    }
}
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio07</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Calcular imposto de renda</h2>
        <form action="" method="post">

            <label>Informe seu salário:</label>
            <input type="number" name="salario" step="0.01" required>
            <button type="submit">Calcular</button>

        </form>
    </div>

</body>

</html>