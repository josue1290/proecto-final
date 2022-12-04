<?php 
include_once("../conexion/conexionBD.php");
include_once("../vendedor/mesa1.php");

$codigo = $_GET['nd'];
 
$querybuscar = mysqli_query($conexion, "SELECT * FROM productos WHERE id_producto=$codigo");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $id = $mostrar['id_producto'];
    $nombre = $mostrar['nombre'];  
	$precio = $mostrar['precio'];  
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
                <td><input name="id" value="<?php echo $id;?>" disabled></td>
            </tr>
            <tr> 
                <td>Nombre</td>
                <td><input name="nombre" value="<?php echo $nombre;?>" disabled></td>
            </tr> 
            <tr> 
                <td>Precio</td>
                <td><input  name="precio" value="<?php echo $precio;?>" disabled></td>
            </tr> 
            <tr> 
                <td>Unidades</td>
                <td><input type="number" name="unidades"></td>
            </tr>
            <tr>
				
                <td colspan="2">
				<a href="../vendedor/mesa1.php">Cerrar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Es correcto el numero de unidades que desea comprar?');">
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
    $id = $mostrar['id_producto'];
    $nombre = $mostrar['nombre'];  
	$precio = $mostrar['precio'];  
	$unidades= $mostrar['unidades']; 

    $querymodificar = mysqli_query($conexion, "INSERT INTO pre_venta 
    VALUES
    id=$id, 
    nombre=$nombre,
    precio=$precio, 
	unidades=$unidades,
    now(),
   
    WHERE id_producto=$id");

  	// echo "<script>window.location= '../vendedor/mesa1.php' </script>";
    
}
?>