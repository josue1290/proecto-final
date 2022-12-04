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
    <input type="submit" onclick="location.href='price_min-max.php'"  class="mayor-menor" value="Menor a mayor"><br>
    <input type="submit" onclick="location.href='price_max-min.php'" class="mayor-menor" value="Mayor a menor">
    <form action="fil_price.php" method="POST"><br>
        <h3>Entre precio</h3>
        <p>Precio mínimo</p>
        <input type="number" name="min" class="min-precio" placeholder="$300">
        <p>Precio máximo</p>
        <input type="number" name="max" class="max-precio" placeholder="$6,000">
        <input type="submit" class="buscar-filtro" value="Buscar"  />
    </form>
</aside>

<?php
echo "<div class='caja-productos'>";
    $queryusuarios = mysqli_query($conexion, "SELECT * from productos order by precio asc");
    $numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;
            echo "
            <div class='producto'> 
                <img src='"; echo "../img/productos/"; echo $mostrar['img']; echo "'"; echo "alt='Chocomilk' class='img-producto'>
                <div class='texto-producto'>
                    <h3 class='nombre-producto'>"; echo '<td>'.$mostrar['nombre'].'</td>'; echo "</h3>
                    <span class='precio'>"; echo '<td>'.$mostrar['precio'].'</td>'; echo "</span><br>
                    "; echo "<a  href=\"pago.php?nd=$mostrar[id_producto]\""; echo "><button class='agregar-carrito'><img class='carrito' src='../img/pagina/carrito.svg' alt=''></button>
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