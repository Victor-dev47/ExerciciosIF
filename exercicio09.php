<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distancia = $_POST["distancia"];
    $tipo = $_POST["tipo"];

    if ($tipo == "curta") {
        $valor = $distancia * 0.50;
        echo "<h3>O valor da viagem é: R$ " . number_format($valor, 2, ',', '.') . "</h3>";
    } elseif ($tipo == "longa") {
        $valor = $distancia * 0.35;
        echo "<h3>O valor da viagem é: R$ " . number_format($valor, 2, ',', '.') . "</h3>";
    } else {
        echo "<h3>Tipo de viagem inválido! Use 'curta' ou 'longa'.</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio09</title>
</head>
<h2>valor da viagem</h2>
        <form action="" method="post">
            <label for="distancia">Distância (km):</label>
            <input type="number" name="distancia" required><br><br>

            <label for="tipo">Tipo de viagem:</label>
            <select name="tipo" required>
                <option value="curta">Curta</option>
                <option value="longa">Longa</option>
            </select><br><br>

            <button type="submit">Calcular</button>
       </body>
</html>