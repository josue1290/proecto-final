<?php
include_once("../conexion/conexionBD.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/productos.css">
    <title>Productos</title>
</head>
<body>
<header>
    <?php
        include "./header.php"
    ?>
</header>
<main>
<!-- Esto es la parte de filtros para los produtos -->
<aside class="filtros">
    <h1 class="titulo-filtros">Filtros</h1>
    <h3>Precio</h3>
    <input type="button" class="mayor-menor" value="Menor a mayor"><br>
    <input type="button" class="mayor-menor" value="Mayor a menor">
    <form action="" method="POST"><br>
        <h3>Entre precio</h3>
        <p>Precio mínimo</p>
        <input type="number" class="min-precio" placeholder="$300">
        <p>Precio máximo</p>
        <input type="number" class="max-precio" placeholder="$6,000">
        <input type="button" class="buscar-filtro" value="Buscar">
    </form>
</aside>

<?php
echo "<div class='caja-productos'>";
    $queryusuarios = mysqli_query($conexion, "SELECT * FROM productos where estatus='0' ORDER BY id_producto asc");
    $numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;
            echo "
            <div class='producto'> 
                <img src='"; echo "../img/productos/"; echo $mostrar['img']; echo "'"; echo "alt='Chocomilk' class='img-producto'>
                <div class='texto-producto'>
                    <h3 class='nombre-producto'>"; echo '<td>'.$mostrar['nombre'].'</td>'; echo "</h3>
                    <span class='precio'>"; echo '<td>'.$mostrar['precio'].'</td>'; echo "</span><br>
                    <button class='agregar-carrito'"; echo "href=\"pago.php?nd=$mostrar[id_producto]\")\""; echo "><img class='carrito' src='../img/pagina/carrito.svg' alt=''></button>
                </div>
            </div>
        ";
        
        }echo "</div>";
?>
<!-- Esto es el footer -->
<footer>
    <?php
        include "footer.php"
    ?>
</footer>
<script src="/js/header.js"></script>
</main>
</body>
</html>