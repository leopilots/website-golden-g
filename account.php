<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Está es una empresa dedicada al dropshipping.">
    <link rel="icon" type="image/ico" href="img/brand/favicon.ico">
    <title>Golden G | Mi Cuenta</title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/db90717a15.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
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
                <a href="#">Mi Carrito</a>
            </li>
            <li>
                <a href="#">Mis compras</a>
            </li>
            <li>
                <a href="php/logout.php">Cerrar sesión</a>
            </li>
        </ul>
    </nav>
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
</body>
</html>