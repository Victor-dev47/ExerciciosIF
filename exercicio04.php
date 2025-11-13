<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperatura = $_POST["temperatura"];
    if($temperatura >= 30){
        echo "<p>Está quente hoje.$temperatura</p>";
    } else {
        echo "<p>Temperatura de hoje. .$temperatura</p>";
    }
}  
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio04</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Verifique a temperatura</h2>
<form action="" method="post">
    
    <label for="numero">temperatura</label>
    <input type="number" name="temperatura" min="0" required>
    <button type="submit">Verificar temperatura</button>





</form> 
</div>

</body>
</html>