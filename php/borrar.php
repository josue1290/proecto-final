<?php
include_once '../conexion/conexionBD.php';

mysqli_query($conexion, "DELETE FROM pre_venta");
    

    header("location:carrito.php");
?>