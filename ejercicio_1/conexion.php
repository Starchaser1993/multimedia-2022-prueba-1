<?php
$host="localhost";
$usuario="root";
$contrasena="";
$bd="multimedia_prueba_1";
$conexion=new mysqli($host,$usuario,$contrasena,$bd);
if($conexion->connect_error){
    die("error de conexion".conexion->connect_error);
}
?>