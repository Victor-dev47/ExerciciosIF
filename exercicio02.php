<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ($numero % 2 == 0) {
        echo "<p>O número $numero é PAR.</p>";
    } else {
        echo "<p>O número $numero é ÍMPAR.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Par ou Ímpar</title>
</head>
<body>
    <h2>Verifique se o número é par ou ímpar</h2>
    <form action="" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>