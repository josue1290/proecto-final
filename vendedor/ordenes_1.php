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
    }
    
    // $nd3 = $nd2;
    // $nombre3 = $nombre2;
    // $precio3 = $precio2;

    // echo $nd3;
    // echo $nombre3;
    // echo $precio3;

    mysqli_query($conexion, "INSERT INTO pre_venta (id_producto,nombre,precio,fecha) VALUES ($nd2,'$nombre2',$precio2, now())");
    

    header("location:../vendedor/mesa1.php");

?>