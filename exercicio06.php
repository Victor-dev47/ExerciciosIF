<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];

 if( $numero1 >= $numero2) {
  echo"o primeiro numero é maior";
 }elseif($numero2 >= $numero3) {
  echo"o segundo numero é maior";
 }elseif($numero3 >= $numero1) {
  echo"o terceiro numero é maior";
 }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio06-Maior de 3 numeros </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Verifique seu numero</h2>
<form action="" method="post">
    
    <label>numero1</label>
        <input type="number" name="numero1" required><br><br>

        <label>numero2</label>
        <input type="number" name="numero2" required><br><br>

        <label>numero3</label>
        <input type="number" name="numero3" required><br><br>
    <button type="submit">Encontrar Maior Numero</button>
</form> 
</div>
</body>
</html>
