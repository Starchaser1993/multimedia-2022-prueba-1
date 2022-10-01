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

            <form action="insertarDb.php" method="post" enctype="multipart/form-data">
            <label for="TituloNoticia">Titulo de la noticia: </label>
        <input type="text" name="TituloNoticia" id="TituloNoticia">
        <br><br>
        <label for="CuerpoNoticia">Cuerpo de la noticia: </label>
        <!--<input type="text" name="CuerpoNoticia" id="CuerpoNoticia" required>-->
        <textarea id = "CuerpoNoticia" name = "CuerpoNoticia" rows = "4" cols = "50" maxlength = "1000" required></textarea>
        <br><br>
        <label for="Categoria">Categoria: </label>
        <input type="text" name="Categoria" id="Categoria" required>
        <br><br>
        <label> imagen:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <br><br>
        <label for="AutorNoticia">Autor de la noticia: </label>
        <input type="text" name="AutorNoticia" id="AutorNoticia" required>
        <br><br>
        <input type="submit" value="enviar fomulario">
        <br></br>
            </form>
        </main>
        <footer>

        </footer>
        
    </body>
</html>