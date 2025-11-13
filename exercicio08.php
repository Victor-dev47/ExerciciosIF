<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    
    if ($numero % 10 == 0) {
        echo "<p>O número tem 0 no final $numero .</p>";
    } else {
        echo "<p>O número não tem 0 no final $numero.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio08</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="container">
<body>
    <h2>Verifique se o número final é zero</h2>
    <form action="" method="post">
        <label for="numero">Digite um número:</label>
        <input type="numero" name="numero" required><br><br>
        <button type="submit">Verificar</button>
    </form>
    </div>
</body>
</html>