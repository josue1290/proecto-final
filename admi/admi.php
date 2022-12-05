<?php
include_once("../conexion/conexionBD.php"); 
?>
<html>
<head>    
		<title>Smart House</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/found.css" />

</head>

<style>
    
    .bajo{
        font-family: sans-serif;
        font-size: 20px;
        color:black;
    }
    .bajo div{
        width: 30%;
        height: 35%;
        padding:0;
        margin:0;
        background-color:red;
        border-radius:50%;
	    text-decoration: none;
    }
    .medio{
        font-family: sans-serif;
        color:black;
        font-size: 20px;
    }
    .medio div{
        width: 30%;
        height: 35%;
        padding:0;
        margin:0;
        background-color:yellow;
        border-radius:50%;
	    text-decoration: none;
    }
    .alto{
        font-family: sans-serif;
        font-size: 20px;
    }
    .alto div{
        width: 30%;
        height: 35%;
        padding:0;
        margin:0;
        color:white;
        background-color: green;
        border-radius:50%;
	    text-decoration: none;
    }

</style>

<body>
    <div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
    <table>
	<img src="../img/iconosh2.png">
		<div id="barrabuscar">
		    <form method="POST">
	            <a onclick="location.href='../index.php'">Logout</a>
	            <a onclick="location.href='../admi/proyectos.php'">Proyectos</a>
                <a onclick="location.href='../admi/lis_emp.php'">Empleados</a>
                <a onclick="location.href='../admi/venta.php'">Ventas</a>
                <a onclick="location.href='../admi/tic_admi.php'">Reportes</a>
		    </form>
		</div>
			<tr><th colspan="5"><h1>Productos</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
			<tr>
		    <th>Nro</th>
		    <th>Modelo</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Stock</th>
            <th>Acción</th>
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conexion, "SELECT id_producto,nombre FROM productos where estatus='0' like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($conexion, "SELECT * FROM productos where estatus='0' ORDER BY id_producto asc");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
            echo "<tr>";
			echo "<td>".$numerofila."</td>";
			echo "<td>".$mostrar['id_producto']."</td>";
            echo "<td>".$mostrar['nombre']."</td>";
            echo "<td>".$mostrar['marcha']."</td>";     
            switch ($mostrar['inventario']) {
                case ($mostrar['inventario']<=10):
                    echo "<td class=bajo><div>".$mostrar['inventario']."</div></td>";
                    break;
                case  ($mostrar['inventario']<=20):
                    echo "<td  class=medio><div>".$mostrar['inventario']."</div></td>";
                    break;
                case ($mostrar['inventario']>=21):
                    echo "<td class=alto><div>".$mostrar['inventario']."</div></td>";
                    break;
            };
            // else{
            //     echo "<td>".$mostrar['inventario']."</td>";
            // };   
             
            echo "<td style='width:26%'> <a href=\"../admi/detalles_prod.php?nd=$mostrar[id_producto]\">Detalles</a> | <a href=\"eliminar.php?nd=$mostrar[id_producto]\" onClick=\"return confirm('¿Estás seguro de eliminar el producto $mostrar[nombre]?')\">Eliminar</a>  </td>";           
}
        ?>
    </table>
    
<script>
function abrirform() {
  document.getElementById("formregistrar").style.display = "block";
  
}

function cancelarform() {
  document.getElementById("formregistrar").style.display = "none";
}

</script>
<div class="caja_popup" id="formregistrar">
  <form action="agregar.php" class="contenedor_popup" method="POST" enctype="multipart/form-data">
        <table>
		<tr><th colspan="2">Nuevo Producto</th></tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="nombre" required></td>
            </tr>
            <tr> 
                <td>Marca</td>
                <td><input type="text" name="marca" required></td>
            </tr>
            <tr> 
                <td>Descripcion</td>
                <td><input type="text" name="descripcion" required></td>
            </tr> 
            <tr> 
                <td>Precio</td>
                <td><input type="text" name="precio" required></td>
            </tr> 
            <tr> 
                <td>Stock</td>
                <td><input type="text" name="inventario" required></td>
            </tr>
            <!-- <tr> 
                <td>Imagen</td>
                <td><input type="file" name="imagen" required></td>
            </tr> -->
            <tr> 	
               <td colspan="2">
				   <button type="button" onclick="cancelarform()">Cancelar</button>
                   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿La informacion es correcta?');">
			</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>