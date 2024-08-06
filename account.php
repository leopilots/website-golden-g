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
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/responsive.css">
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
                <a href="http://localhost/goldeng/">Inicio</a>
            </li>
            <li>
                <a href="#">Mi Carrito</a>
            </li>
            <li>
                <a href="#">Mis compras</a>
            </li>
            <?php
            if($_SESSION['user_admin'] > 1) {
                ?>
                <li>
                    <a href="http://localhost/goldeng/admin/createproduct.php">Nuevo Producto</a>
                </li>
                <?php
            }
            ?>
            <li>
                <a href="http://localhost/goldeng/php/logout.php">Cerrar sesión</a>
            </li>
        </ul>
    </nav>
    <main>
        <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!. Esperemos que estés contento con nuestro servicio.</h2>
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
</body>
</html>