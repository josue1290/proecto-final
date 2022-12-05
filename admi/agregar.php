<?php include_once("../conexion/conexionBD.php"); 
    
    $nombre 	= $_POST['nombre'];
    $marca 	= $_POST['marca'];
    $descripcion 	= $_POST['descripcion'];
    $precio	= $_POST['precio'];
    $inventario 	= $_POST['inventario'];

    $img='no jala';
    $estatus='0';
    
	mysqli_query($conexion, "INSERT INTO productos(nombre,marcha,descripcion,precio,inventario,estatus,img) 
    VALUES('$nombre','$marca','$descripcion',$precio,$inventario, $estatus, '$img')");
    
header("Location:../admi/admi.php");
	

?>