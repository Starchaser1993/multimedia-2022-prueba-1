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
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="formulario.php">Ingresar Noticia</a>
                </li>
                <li><a href="mostrarDatos.php">mostrarDatos</a></li>
            </ul>
            
        </menubar>

        <main>

            <div class="texto_centrado">Noticias</div>
            
            <article>
                <h2>Suben de precio las GPU</h2>
                <cajita class="ajustarderecha">
                    <img src="imagenes/gpu.jpg">
                </cajita>
                <cajita class="ajustarizquierda">
                    <p>
                    Los ensambladores no quieren perder dinero, el precio de las GPUs aumentará. 
                    Según los últimos rumores de la industria, los precios de las GPUs comenzarían
                     a estabilizarse en breve e incluso aumentar en un futuro cercano. 
                    </p>
                
                </cajita>
                
                
                
                
            </article>
        </main>
        <footer>
            <h3>Visita nuestras redes sociales</h3>
            <img src="imagenes/redesSociales.jpg">
        </footer>
        
    </body>
</html>