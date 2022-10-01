<?php
?>
<!DOCTYPE html>

<html lang="en">

   <!-- Cree una página web que contenga un formulario donde se registren noticias,
   los campos que debe tener son: 1-título, 2-cuerpo de la noticia, 3-categoria, 4-imagen
   y autor de la noticia. Procesar los datos para validar que los campos enviados
   no estén vacíos, validar que solo se envíe un archivo de tipo imágen y de máximo
   1MB, almacenar los datos en una base de datos llamada multimedia_prueba_1
   (Debe adjuntar la base de datos a los archivos que se entregarán).

    Cree otra página web que muestre en una tabla los datos de la base de datos
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./estilo.css" type="text/css">
    </head>
    <body>
        <header>
            <h1>El espectador</h1>
        </header>
        <menubar>
            <ul>
                <li>
                    <a href="index.php">Ingresar Noticias</a>
                </li>
                
                <li><a href="mostrarDatos.php">mostrarDatos</a></li>
            </ul>
            
        </menubar>
        <main>

            <div class="texto_centrado">Noticias</div>
            <!--include 'conn.php';
            $sql="SELECT * FROM registro_de_vehiculos";
            $resultado = $conexion->query($sql);
            if ($resultado->num_rows > 0) {

                while ($row=$resultado->fetch_assoc()) {
                    echo "<a href='verauto.php?id=".$row['Patente']."'><bloqueindividual>";
                        echo "<seccion><img src='".$row['Imagen_vehiculo']."'></seccion>";
                        echo "<seccion><h2>".$row['Marca']."</h2><h3>".$row['Modelo']."</h3><p>".$row['Descripcion']."</p></seccion>";
                    echo "</bloqueindividual></a>";
                }
            }-->
            <?php
            include 'conexion.php';
            $sql="SELECT * FROM noticia";
            $resultado = $conexion->query($sql);
            if ($resultado->num_rows > 0) {
                while ($row=$resultado->fetch_assoc()) {
                    echo "<article> <h2>".$row['Titulo']."</h2>";
                    echo "<cajita class='ajustarizquierda'> <p>".$row['Cuerpo']."</p> ";
                    echo "<p>".$row['Categoria']."</p> ";
                    echo "<p>".$row['Autor']."</p> </cajita> ";
                    echo "<cajita class='ajustarderecha'> <img src='".$row['imagen']."'> </cajita> </article>";
                }
            }
            ?>
           
        </main>
        <footer>
            <h3>Visita nuestras redes sociales xd</h3>
            <img src="imagenes/redesSociales.jpg">
        </footer>
        
    </body>
</html>