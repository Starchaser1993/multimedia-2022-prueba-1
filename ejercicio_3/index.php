<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"></form>
    <h1>Ingrese valores de la ecuacion</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="valor1">Valor 1: </label>
        <input type="text" name="valor1" id="valor1">
        <br><br>
        <label for="valor2">Valor 2: </label>
        <input type="text" name="valor2" id="valor2">
        <br><br>
        <label for="valor3">Valor 3: </label>
        <input type="text" name="valor3" id="valor3">
        <br><br>
      
        <input type="submit" value="Calcular">
        <?php
$a = 1.0;
$b = -2.0;
$c = 1.0;

$resultado_pos= (($b-1) + (sqrt(($b**2) - (4 *$a * $c))) / (2*$a));
$resultado_neg= (($b-1) - (sqrt(($b**2) - (4 *$a * $c))) / (2*$a));
echo "X1=".$resultado_pos."<br>";
echo "X2=".$resultado_pos."<br>";
?>
</body>
</html>