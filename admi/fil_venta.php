<?php
include_once("../conexion/conexionBD.php"); 


$fecha1 = $_POST['fecha1']; 
$fecha2	= $_POST['fecha2'];

?>
<html>
<head>    
		<title>Smart House</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../style2.css" />
		<link rel="stylesheet" href="../css/found.css" />

</head>



<body>
<div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
<table>
	<img src="../img/iconosh2.png">
			<div id="barrabuscar">
		<form method="POST">
		<a onclick="location.href='../index.php'">Logout</a>
        <a onclick="location.href='../admi/lis_emp.php'">Empleados</a>
        <a onclick="location.href='../admi/admi.php'">Productos</a>
		</form>
		</div>
		
		<tr><th colspan="2"><h1>VENTAS TOTALES</h1></tr>
			<tr>
			<th>fechas</th>
			<th>Numero de Ventas</th>
            
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conexion, "SELECT id_venta FROM ventas where id_venta like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($conexion, "SELECT id_ventas,count(*) as Total_ventas from ventas where fecha between '$fecha1' and '$fecha2'");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
            echo "<tr>";
			echo "<td>".$fecha1." ___".$fecha2."</td>";
            echo "<td>".$mostrar['Total_ventas']."</td>";
}
        ?>
    </table>

    <table>		
		<tr><th colspan="4"><h1>VENTAS</h1><th colspan="2"><a style="font-weight: normal; font-size: 14px;" onclick="location.href='../admi/venta.php'">Regresar</a></th></tr>
			<tr>
			<th>Nro</th>
			<th>Nd</th>
			<th>No. Producto</th>
            <th>Total</th>
            <th>Fecha</th>
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conexion, "SELECT id_venta FROM ventas where id_venta like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($conexion, "SELECT * from ventas where fecha between '$fecha1' and '$fecha2'");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
            echo "<tr>";
			echo "<td>".$numerofila."</td>";
            echo "<td>".$mostrar['id_ventas']."</td>";
            echo "<td>".$mostrar['id_producto']."</td>";
            echo "<td>".$mostrar['total_venta']."</td>";    
			echo "<td>".$mostrar['fecha']."</td>";  
			  


}
        ?>
    </table>

</body>
</html>
