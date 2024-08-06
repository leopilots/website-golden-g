<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Está es una empresa dedicada al dropshipping.">
    <link rel="icon" type="image/ico" href="img/brand/favicon.ico">
    <title>Golden G | Registro</title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/db90717a15.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/register.css">
</head>
<body>
    <!-- offer -->
    <?php
    session_start();  
    if($_SESSION['user_firstbuy'] == 0) {
        ?>
        <div class="offer">
            <div><p>PROMOCIÓN: ¡Disfruta de envío gratis en tu primera compra!</p></div>
        </div>
        <?php
    } else {
        ?>
        <div class="offer">
            <div><p>NO HAY PROMOCIONES ACTUALMENTE.</p></div>
        </div>
        <?php
    }
    ?>
    <!-- header -->
    <header>
        <div class="header-container">
            <h1>Golden G</h1>
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- navegation -->
    <nav class="nav-main">
        <ul class="nav-menu">
            <li>
                <a href="http://localhost/goldeng/">Inicio</a>
            </li>
            <li class="nav-submenu">
                <a href="#">Productos</a>
                <ul class="nav-hijos">
                    <li><a href="http://localhost/goldeng/products-male.php">Ropa de Hombre</a></li>
                    <li><a href="http://localhost/goldeng/products-female.php">Ropa de Mujer</a></li>
                </ul>
            </li>
            <li>
                <a href="http://localhost/goldeng/topproducts.php">Más vendidos</a>
            </li>
            <li>
                <a href="http://localhost/goldeng/about.php">Conocer más</a>
            </li>
            <li>
                <a href="http://localhost/goldeng/account.php">Mi cuenta</a>
            </li>
        </ul>
    </nav>
    <!-- register -->
    <main>
        <div class="register-main">
            <form method="post">
                <h1>Registro</h1>
                <input class="register-n" type="text" name="name" placeholder="Nombre" maxlength="50">
                <input class="register-n" type="text" name="lastname" placeholder="Apellido" maxlength="50">
                <input type="email" name="email" placeholder="Correo electrónico" maxlength="255">
                <input type="password" name="password" placeholder="Contraseña" minlength="8" maxlength="50">
                <input type="submit" name="register" value="Registrarse">
                <p style="text-align: center; color: #fff; margin-top: 20px;" >¿Ya tienes una cuenta? Puedes iniciar sesión <a style="color: #ccc" href="./login.php">aquí</a>.</p>
            </form>
        </div>
    </main>
     <!-- footer -->
    <footer> 
        <div class="footer-back">
            <p>© 2024 Copyright:</p>
            <h2>Golden G</h2>
        </div>
        <div>
            <a href="http://localhost/goldeng/terms.php">Términos y condiciones</a>
        </div>
    </footer>
    <!-- javascript -->
    <script src="http://localhost/goldeng/assets/js/main.js"></script>
    <!-- php -->
    <?php 
        include("php/register.php");
    ?>
</body>
</html>