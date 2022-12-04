<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/contacto.css">
    <title>Contácto</title>
</head>
<body>
<!-- Esto es el header -->
<header>
    <?php
        include "./header.php"
    ?>
</header>
<main>
    <div class="caja-formulario">
        <form action="" class="formulario">
            <h1 class="titulo">Contácto</h1>
            <h3 class="text-nombre">Nombre completo:</h3>
            <input type="text" maxlength="50" class="nombre" placeholder=" Escribe tu nombre" required>
            <h3 class="text-correo">Correo electrónico:</h3>
            <input type="email" class="correo" maxlength="80" placeholder=" ejemplo@ejemplo.com" required>
            <h3 class="text-problematica">Descripción:</h3>
            <textarea rows="5" class="problematica" maxlength="255" placeholder=" Escribe tu pregunta o mensaje" required></textarea>
            <input type="submit" class="btn-enviar" value="Enviar">
            <input type="reset" class="btn-cancelar" value="Cancelar">
        </form>
    </div>
    <footer>
        <?php
            include "footer.php"
        ?>
    </footer>
    <script src="/js/header.js"></script>
</main>
</body>
</html>