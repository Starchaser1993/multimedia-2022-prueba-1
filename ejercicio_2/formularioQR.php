<?php
require_once('conexion.php');
if(empty($_POST['nombre']) || empty($_POST['apellido'])){
echo"Ingrese sus datos";
}else{
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    
    $query="INSERT INTO usuario(nombre, apellido, imagen) VALUES('$nombre', '$apellido')";
    $resultado=$conexion->query($query);
    if($resultado){
        echo "Se ingresaron los datos correctamente";
    }else{
        echo "No se ingresaron los datos correctamente";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingrese su información personal</h1>
    <form method="POST" enctype="multipart/form-data" action="resultado.php">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="Apellido">
        <br><br>
      
        <input type="submit" value="enviar fomulario">
</body>
</html>