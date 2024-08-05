<?php
session_start();

if (!isset($_SESSION['user_id'])) {
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
    <title>Golden G | Productos más vendidos</title>
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
    <!-- products -->
    <main>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Buscar productos" onkeyup="filterProducts()">
        </div>

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
            <div class="top-p" data-name="Jeans Cargo para mujer">
                <a href="producto2.html">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/Sf180df1a5b6c44c8a2a81c54401faa962/Jeans-Retro-y2k-Harajuku-High-Street-Jeans-sueltos-con-bolsillo-de-Hip-Hop-para-hombres-y.jpg_.webp" alt="Producto 2">
                    <span class="offer">En Oferta</span>
                </a>
                <div class="info">
                    <span class="price">€80.00</span>
                    <p>Jeans Cargo para mujer</p>
                </div>
            </div>
            <div class="top-p" data-name="Jacket Varsity">
                <a href="producto3.html">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/S71c58d08f19d4ac4943f4b7972a2b9dep/Chaqueta-de-b-isbol-con-capucha-para-hombre-y-mujer-abrigo-grueso-y-c-lido-con.jpg_.webp" alt="Producto 3">
                    <span class="offer">En Oferta</span>
                </a>
                <div class="info">
                    <span class="price">€160.00</span>
                    <p>Jacket Varsity</p>
                </div>
            </div>
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
            <div class="top-p" data-name="Chaqueta universitaria con letras bordadas para hombre y mujer">
                <a href="producto5.html">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/Sbcf421a5a52f4c3b8991977d05cf3af6i/Chaqueta-universitaria-con-letras-bordadas-para-hombre-y-mujer-chaqueta-de-b-isbol-de-Hip-Hop.jpg_.webp" alt="Producto 5">
                    <!-- <span class="offer">En Oferta</span> -->
                </a>
                <div class="info">
                    <span class="price">€19.99</span>
                    <p>Chaqueta universitaria con letras bordadas para hombre y mujer</p>
                </div>
            </div>
            <div class="top-p" data-name="Sturniolo-sudaderas con capucha de Triplets para hombre y mujer">
                <a href="producto6.html">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/S6bf3299ef24f4d0c9df63a949cae2edbV/Sturniolo-sudaderas-con-capucha-de-Triplets-para-hombre-y-mujer-ropa-de-calle-informal-con-estampado.jpg_.webp" alt="Producto 6">
                    <!-- <span class="offer">En Oferta</span> -->
                </a>
                <div class="info">
                    <span class="price">€59.99</span>
                    <p>Sturniolo-sudaderas con capucha de Triplets para hombre y mujer</p>
                </div>
            </div>
            <div class="top-p" data-name="Camiseta de estilo Harajuku Y2K para hombre">
                <a href="producto7.html">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/S0f5de2d21d554b16a0a4071265a38e78o/Camiseta-de-estilo-Harajuku-Y2K-para-hombre-ropa-de-calle-Vintage-Popular-Hip-Hop-informal-Joker.jpg_.webp" alt="Producto 7">
                    <!-- <span class="offer">En Oferta</span> -->
                </a>
                <div class="info">
                    <span class="price">€34.99</span>
                    <p>Camiseta de estilo Harajuku Y2K para hombre</p>
                </div>
            </div>
            <div class="top-p" data-name="EE-pantalones cortos deportivos para hombre">
                <a href="producto8.html">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/S5b0ba22da0bc4a4e87059b7cbc431c83X/EE-pantalones-cortos-deportivos-para-hombre-shorts-informales-con-dise-o-de-la-ciudad-de-Nueva.jpg_.webp" alt="Producto 8">
                    <span class="spent">Agotado</span>
                </a>
                <div class="info">
                    <span class="price">€44.99</span>
                    <p>EE-pantalones cortos deportivos para hombre</p>
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
