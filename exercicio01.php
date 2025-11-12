<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["idade"];
    if($numero >= 0){
        echo "<p>Numero Positivo.</p>";
    } else {
        echo "<p>Numero Negativo.</p>";
    }
}  
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Verifique seu numero</h2>
<form action="" method="post">
    
    <label for="numero">Numero</label>
    <input type="number" name="number" min="0" required>
    <button type="submit">Verificar Numero</button>





</form> 
</div>

</body>
</html>