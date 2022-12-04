<?php

include_once '../conexion/conexionBD.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/carrito.css">
    <title>Carrito de compras</title>
</head>
<body>
<main>
    <header>
        <nav>
            <div class="logo">
                <a href="../index.php"><img src="../img/pagina/logo.png" alt="SMART-X"></a>
            </div>
        </nav>
    </header>

<!-- Pago -->
    <div class="pago">
        <span class="total">Total a pagar $3454545</span>
        <button class="pagar">Pagar</button>
    </div>

<!-- Productos del carrito -->
<?php
    echo  "<div class='caja-carrito'>";
    $queryusuarios = mysqli_query($conexion, "SELECT * FROM pre_venta ORDER BY nd asc");
    $numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;
            echo "
        <div class='producto'>
        <img src='"; echo "../img/productos/"; echo $mostrar['img']; echo "'"; echo "alt='Chocomilk' class='img-producto'>
            <div class='texto-producto'>
            <h3 class='nombre-producto'>"; echo '<td>'.$mostrar['nombre'].'</td>'; echo "</h3>
            <span class='precio'>"; echo '<td>'.$mostrar['precio'].'</td>'; echo "</span><br>
            <button class='quitar-del-carrito'"; echo "href=\"pago.php?nd=$mostrar[id_producto]\")\""; echo "><img class='carrito' src='../img/pagina/carrito.svg' alt=''></button>
            </div>
            </div>
        ";       
    }echo "</div>";
    ?>

</main>
</body>
</html>