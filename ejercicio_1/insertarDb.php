<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1; mostrarDatos.php">
    <title>Document</title>
</head>
<body>
    <?php
include 'conexion.php';
$TituloNoticia=$_POST['TituloNoticia'];
$CuerpoNoticia=$_POST['CuerpoNoticia'];
$Categoria=$_POST['Categoria'];
$AutorNoticia=$_POST['AutorNoticia'];
include 'subirImagen.php';
            $sql="INSERT INTO noticia
            (Titulo,Cuerpo,Categoria,Autor,imagen) 
            values('$TituloNoticia','$CuerpoNoticia','$Categoria','$AutorNoticia', '$target_file')";
if($conexion->query($sql)===TRUE)
{
    echo "Los registros se ingresaron con éxito";
}
else
{
    echo "Error en el ingreso".$sql."<br>".$conexion->error;
}
$conexion->close();
?>
</body>
</html>

<!--
           
            
           
        -->