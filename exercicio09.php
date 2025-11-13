<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distancia = $_POST["distancia"];
    $curta = $_POST["curta"];
    $longa = $_POST["longa"];

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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Verifique sua  distancia</h2>
<form action="" method="post">
    
    <label for="numero">Numero</label>
    <input type="numero" name="numero"required><br><br>
    <button type="submit">Verificar Numero</button>


</form> 
</div>
</body>
</html>