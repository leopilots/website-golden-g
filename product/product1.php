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
    <title>Golden G | Nombre del Producto</title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/db90717a15.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/1-product.css">
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
        <div class="product-container">
            <section class="product-gallery">
                <div class="thumbnail-container">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/S52c4feac78a0485fb00ad12abb1cd3c3S/Camiseta-estampada-con-letras-Anti-Social-Media-Club-ropa-de-calle-con-cita-blusas-de-manga.jpg_.webp" alt="Miniatura 1" class="thumbnail" data-full="https://ae-pic-a1.aliexpress-media.com/kf/S52c4feac78a0485fb00ad12abb1cd3c3S/Camiseta-estampada-con-letras-Anti-Social-Media-Club-ropa-de-calle-con-cita-blusas-de-manga.jpg_.webp">
                    <img src="https://ae-pic-a1.aliexpress-media.com/kf/S5b76cd95bda341a4a985a68791a658a8Y/Camiseta-estampada-con-letras-Anti-Social-Media-Club-ropa-de-calle-con-cita-blusas-de-manga.jpg_.webp" alt="Miniatura 2" class="thumbnail" data-full="https://ae-pic-a1.aliexpress-media.com/kf/S5b76cd95bda341a4a985a68791a658a8Y/Camiseta-estampada-con-letras-Anti-Social-Media-Club-ropa-de-calle-con-cita-blusas-de-manga.jpg_.webp">
                    <!--<img src="https://ae-pic-a1.aliexpress-media.com/kf/Sfeb8daad08d6425c8e579ed7fd326ccey.jpg_640x640.jpg_.webp" alt="Miniatura 3" class="thumbnail" data-full="https://ae-pic-a1.aliexpress-media.com/kf/Sfeb8daad08d6425c8e579ed7fd326ccey.jpg_640x640.jpg_.webp">-->
                </div>
                <div class="main-image-container">
                    <img id="main-image" src="https://ae-pic-a1.aliexpress-media.com/kf/S52c4feac78a0485fb00ad12abb1cd3c3S/Camiseta-estampada-con-letras-Anti-Social-Media-Club-ropa-de-calle-con-cita-blusas-de-manga.jpg_.webp" alt="Imagen principal del producto">
                </div>
            </section>
            <section class="product-details">
                <h2>Camiseta Antisocial Media Club</h2>
                <p class="price">€96.00</p>
                <p class="description">Una camiseta unisex de alta calidad, ideal para ocasiones casuales y eventos informales.</p>
                <form>
                    <label for="size">Talla:</label>
                    <select id="size" name="size">
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option> 
                    </select>
                    <div class="details-space"></div>
                    <label for="color">Color:</label>
                    <select id="color" name="color">
                        <option value="negro">Negro</option>
                        <option value="blanco">Blanco</option>
                    </select>
                    <div class="details-space"></div>
                    <label for="quantity">Cantidad:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                    <div class="details-space"></div>
                    <button type="submit">Añadir al carrito</button>
                </form>
            </section>
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
    <script src="http://localhost/goldeng/assets/js/1-product.js"></script>
    <script src="http://localhost/goldeng/assets/js/main.js"></script>
</body>
</html>