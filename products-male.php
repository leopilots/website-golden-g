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
    <title>Golden G | Ropa de Hombre</title>
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
        <h2>ROPA DE HOMBRE</h2>
        <div class="catalog-container" id="catalogContainer">
            <div class="top-p" data-name="Camiseta Antisocial Media Club">
                <a href="http://localhost/goldeng/product/product1.php">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/S52c4feac78a0485fb00ad12abb1cd3c3S/Camiseta-estampada-con-letras-Anti-Social-Media-Club-ropa-de-calle-con-cita-blusas-de-manga.jpg_.webp" alt="Producto 1">
                    <span class="offer">En Oferta</span>
                </a>
                <div class="info">
                    <span class="price">€96.00</span>
                    <p>Camiseta Antisocial Media Club</p>
                </div>
            </div>
            <div class="top-p" data-name="Sudadera con capucha de Jake Webber Johnnie Guilbert Merch para hombre y mujer">
                <a href="producto10.html">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/S428cd6ab22524a91b74b5ae7b732a736v/Sudadera-con-capucha-de-Jake-Webber-Johnnie-Guilbert-Merch-para-hombre-y-mujer-Jersey-Unisex-ch.jpg_.webp" alt="Producto 10">
                    <span class="spent">Agotado</span>
                </a>
                <div class="info">
                    <span class="price">€54.99</span>
                    <p>Sudadera con capucha de Jake Webber Johnnie Guilbert Merch para hombre y mujer</p>
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