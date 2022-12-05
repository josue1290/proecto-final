<?php 
include_once("../conexion/conexionBD.php");
include_once("../admi/admi.php");

$codigo = $_GET['nd'];
 
$querybuscar = mysqli_query($conexion, "SELECT * FROM productos WHERE id_producto=$codigo");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $id = $mostrar['id_producto'];
    $nombre = $mostrar['nombre'];
    $marca = $mostrar['marcha'];    
	$descripcion = $mostrar['descripcion'];  
	$precio = $mostrar['precio'];  
	$inventario= $mostrar['inventario'];  
}
?>
<html>
<head>    
		<title>Descripcion</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Descripcion del producto</th></tr>
        <tr> 
                <td>No. Producto</td>
                <td><input value="<?php echo $id;?>" disabled></td>
            </tr>
            <tr> 
                <td>Nombre</td>
                <td><input value="<?php echo $nombre;?>" disabled></td>
            </tr>
            <tr> 
                <td>Marca</td>
                <td><input value="<?php echo $marca;?>"  disabled></td>
            </tr>
            <tr> 
                <td>Descripcion</td>
                <td><input value="<?php echo $descripcion;?>" disabled></td>
            </tr> 
            <tr> 
                <td>Precio</td>
                <td><input  name="precio" value="<?php echo $precio;?>"></td>
            </tr> 
            <tr> 
                <td>Stock</td>
                <td><input name="inventario" value="<?php echo $inventario;?>"></td>
            </tr>
            <tr>
				
                <td colspan="2">
				<a href="../admi/admi.php">Cerrar</a>
				<input type="submit" name="btnmodificar" value="Modificar">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
	
	if(isset($_POST['btnmodificar']))
{    
    $precio = $_POST['precio'];
    $inventario = $_POST['inventario'];    

    $querymodificar = mysqli_query($conexion, "UPDATE productos 
    SET 
    precio=$precio,
    inventario=$inventario,  
   
    WHERE id_producto=$id");

  	// echo "<script>window.location= '../admi/admi.php' </script>";
    
}
?>