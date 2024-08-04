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
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
    <!-- offer -->
    <div class="offer">
        <div>
            <p>PROMOCIÓN: ¡Disfruta de envío gratis en tu primera compra!</p>
        </div>
    </div>
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
                <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="#">Productos</a>
            </li>
            <li>
                <a href="topproducts.php">Más vendidos</a>
            </li>
            <li>
                <a href="about.php">Conocer más</a>
            </li>
            <li>
                <a href="account.php">Mi cuenta</a>
            </li>
        </ul>
    </nav>
    <!-- register -->
    <main>
        <div class="register-main">
            <form method="post">
                <h1>Registro</h1>
                <input type="email" name="email" placeholder="Correo electrónico">
                <input type="password" name="password" placeholder="Contraseña">
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
            <a href="#">Términos y condiciones</a>
        </div>
    </footer>
    <!-- javascript -->
    <script src="js/main.js"></script>
    <!-- php -->
    <?php 
        include("php/register.php");
    ?>
</body>
</html>