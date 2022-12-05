<?php
include_once "../conexion/conexionBD.php";
 
$nd = $_GET['nd'];

$consulta="SELECT * FROM productos WHERE id_producto=$nd";
    $query_consulta=mysqli_query($conexion,$consulta);
    while ($consulta2=mysqli_fetch_array($query_consulta))
    {
        $nd2 = $consulta2['id_producto'];
        $nombre2 = $consulta2['nombre'];
        $precio2 = $consulta2['precio'];
        $img =  $consulta2['img'];
    }
    
    $unidades = '1';
    
    
    $existe = mysqli_query($conexion, "SELECT * FROM pre_venta where id_producto=$nd2");
    while ($consulta3=mysqli_fetch_array($existe))
    {
        $nd3 = $consulta3['id_producto'];
        $unidades2 = $consulta3['unidades'];
        
    }

    if($unidades2 == 1){
        mysqli_query($conexion, "DELETE FROM pre_venta where id_producto = $nd");
        mysqli_query($conexion, "UPDATE productos SET inventario = inventario + $unidades where id_producto = $nd");
    }
    else{
    mysqli_query($conexion, "UPDATE pre_venta SET  unidades  = unidades - $unidades, precio = precio - $precio2 where id_producto=$nd2");
    mysqli_query($conexion, "UPDATE productos SET inventario = inventario + $unidades where id_producto = $nd");
    }

    header("location:carrito.php");

?>