<?php
    include_once("../conexion/conexionBD.php"); 
 
$nombre = $_POST['nombre'];
$correo  = $_POST['correo'];
$descripcion =   $_POST['descripcion'];


    mysqli_query($conexion, "INSERT INTO contactanos (nombre,correo,descripcion,fecha) VALUES ('$nombre','$correo','$descripcion', now())");
    

    header("location:../php/contacto.php");

?>