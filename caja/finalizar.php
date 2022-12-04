<?php
include_once("../conexion/conexionBD.php");
 
$nd = $_GET['nd'];
$pago= 'realizado';
mysqli_query($conexion, "UPDATE pre_venta SET estatus='1' WHERE id_producto=$nd");

// mysqli_query($conexion, "UPDATE mesa1 SET pago='realizado' WHERE pago='procesando'");

 
header("Location:caja.php");

?>