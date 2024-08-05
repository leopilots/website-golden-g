<?php
session_start();

if (!isset(€_SESSION['user_id'])) {
    ?>
    <!-- terms -->
    <div id="terms-termsModal" class="terms-modal">
        <div class="terms-modal-content">
            <h2>Términos y Condiciones</h2>
            <p>Por favor, lea y acepte nuestros términos y condiciones para continuar utilizando este sitio web.</p>
            <p><a href="terms.html" target="_blank">Leer Términos y Condiciones</a></p>
            <div class="terms-modal-buttons">
                <button id="terms-acceptBtn">Aceptar</button>
                <button id="terms-rejectBtn">Rechazar</button>
            </div>
        </div>
    </div>
    <?php
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Está es una empresa dedicada al dropshipping.">
    <link rel="icon" type="image/ico" href="img/brand/favicon.ico">
    <title>Golden G | Ropa de Mujer</title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/db90717a15.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/products.css">
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
    <main>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Buscar productos" onkeyup="filterProducts()">
        </div>
        <h2>ROPA DE MUJER</h2>
        <div class="catalog-container" id="catalogContainer">
            <div class="top-p" data-name="Sueter blanco para mujer">
                <a href="producto4.html">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/H4be55873dea14405bee18ca1a622b4975.jpg_640x640.jpg_.webp" alt="Producto 4">
                    <!-- <span class="offer">En Oferta</span> -->
                </a>
                <div class="info">
                    <span class="price">€19.99</span>
                    <p>Sueter blanco para mujer</p>
                </div>
            </div>
            <div class="top-p" data-name="aop & Za-falda de cintura alta para mujer">
                <a href="producto9.html">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/S829e2a5f7eda4709bff5c7031acfcd08K/Taop-Za-falda-de-cintura-alta-para-mujer-prenda-holgada-e-informal-vers-til-de-longitud.jpg_.webp" alt="Producto 9">
                    <!-- <span class="offer">En Oferta</span> -->
                </a>
                <div class="info">
                    <span class="price">€39.99</span>
                    <p>aop & Za-falda de cintura alta para mujer</p>
                </div>
            </div>
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
    <script src="http://localhost/goldeng/assets/js/products.js"></script>
    <script src="http://localhost/goldeng/assets/js/main.js"></script>
</body>
</html>