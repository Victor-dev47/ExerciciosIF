<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    
if ($numero % 3 == 0 && $numero % 5 == 0) {

        echo "<p>Multiplo de 3 e 5.</p>";
    } else {
        echo "<p>Não é múltiplo de 3 e 5.</p>";
    }
}  
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Verifique seu numero</h2>
<form action="" method="post">
    
    <label for="numero">Numero</label>
    <input type="number" name="numero" min="0" required>
    <button type="submit">Verificar Numero</button>





</form> 
</div>

</body>
</html>