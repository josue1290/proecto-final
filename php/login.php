<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>Inicio de sesión y registro</title>
</head>
<body>
<main>
<header>
    <nav>
        <div class="logo">
            <a href="/index.php"><img src="/img/pagina/logo.png" alt="SMART-X"></a>
        </div>
    </nav>
</header>

<!-- Login y registro de usuarios -->
<div class="caja-login-registro">
    <div class="caja-login">
        <div class="registro">
            <h2>Registrarse</h2>
            <form action="">
                <h3 class="text-nombre">Nombre completo:</h3>
                <input type="text" placeholder=" Escribe tu nombre completo" class="nombre" required>
                <h3 class="text-correo">Correo electrónico:</h3>
                <input type="text" placeholder=" ejemplo@ejemplo.com" class="correo" required>
                <h3 class="text-correo">Contraseña:</h3>
                <input type="password" placeholder=" Escribe tu contraseña" class="password" required>
                <h3 class="text-correo">Confirma tu contraseña:</h3>
                <input type="password" placeholder=" Vuelve a escribir tu contraseña" class="password2" required>
                <input type="checkbox" class="lei-terminos" required><h3 class="texto-terminos">He leído y acepto los <a href="/php/politicas.php">términos y condiciones</a>.</>
                <input type="submit" class="registrar" value="Registrarme">
            </form>
        </div>
        <div class="login">
            <h2>Iniciar sesión</h2>
            <form action="check-login.php" method="post">
                <h3 class="text-correo">Correo electrónico:</h3>
                <input type="text" name="correo" placeholder=" ejemplo@ejemplo.com" class="correo">
                <h3 class="text-correo">Contraseña:</h3>
                <input type="password" name="pass" placeholder=" Escribe tu contraseña" class="pass">
                <input type="submit" class="iniciar" value="Iniciar sesión">
            </form>
        </div>
    </div>
</div>

<!-- Esto es el footer -->
<footer>
    <?php
        include "./footer.php"
    ?>
</footer>
</main>
</body>
</html>