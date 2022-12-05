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
    $estatus = '0';
    
    $existe = mysqli_query($conexion, "SELECT * FROM pre_venta where id_producto=$nd2");
    $filas=mysqli_fetch_array($existe);
    
    if($filas==false){
        mysqli_query($conexion, "INSERT INTO pre_venta (img,id_producto,nombre,precio,unidades,fecha,estatus) VALUES ('$img',$nd2,'$nombre2',$precio2,$unidades, now(),$estatus)");
        
        mysqli_query($conexion, "UPDATE productos SET inventario = inventario - $unidades where id_producto = $nd");
    }
    else{
        mysqli_query($conexion, "UPDATE pre_venta SET  unidades  = unidades + $unidades, precio = precio + $precio2 where id_producto=$nd2");
        mysqli_query($conexion, "UPDATE productos SET inventario = inventario - $unidades where id_producto = $nd");
    }


    header("location:productos.php");

?>