<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salario = $_POST["salario"];
    $compra = $_POST["compra"];
      $limite = $salario * 0.40;
 if ($compra <= $limite) {
        echo "<h3>Crédito aprovado!</h3>";
    } else {
        echo "<h3>Crédito negado! Valor da compra excede 40% do salário.</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Verifique seu Crédito</h2>
<form action="" method="post">
        <label>Informe seu salário:</label>
        <input type="number" name="salario" step="0.01" required><br><br>

        <label>Informe o valor da compra:</label>
        <input type="number" name="compra" step="0.01" required><br><br>

        <button type="submit">Verificar</button>
</form> 
</div>

</body>
</html>