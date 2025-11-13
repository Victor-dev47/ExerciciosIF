<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $compra = $_POST["valor"];

    if ($compra > 100) {
        echo "<p>Você ganhou um desconto.</p>";
    } else {
        echo "<p>Valor da sua compra: R$ $compra</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Valor da sua compra</h2>
        <form action="" method="post">
            <label for="valor">Valor</label>
            <input type="number" name="valor" min="1" required>
            <button type="submit">Verificar valor</button>
        </form>
    </div>
</body>
</html>