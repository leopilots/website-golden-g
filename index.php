<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Está es una empresa dedicada al dropshipping.">
    <link rel="icon" type="image/ico" href="img/brand/favicon.ico">
    <title>Golden G | Inicio</title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/db90717a15.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
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
    <!-- about -->
    <div class="about-main">
        <div class="about-img">
            <img src="img/brand/favicon.ico" alt="brand">
        </div>
        <div class="about-text">
            <p>En Golgen G, nos especializamos en la venta de una amplia gama de productos de vestimen a través del modelo de dropshipping. 
                Nos comprometemos a ofrecer a nuestros clientes lo mejor en términos de seguridad y calidad, asegurando que cada 
                experiencia de compra sea satisfactoria y confiable.</p>
            <a href="about.php">Conocer más</a>
        </div>
    </div>
    <!-- main -->
    <main>
        <!-- most s-products -->
         <section>
            <div class="s-products">
                <h2>Productos más vendidos</h2>
                <div class="sp-slider">
                    <div class="sp-slider-wrapper">
                      <div class="sp-slide">
                        <img src="https://ae-pic-a1.aliexpress-media.com/kf/S52c4feac78a0485fb00ad12abb1cd3c3S/Camiseta-estampada-con-letras-Anti-Social-Media-Club-ropa-de-calle-con-cita-blusas-de-manga.jpg_.webp" alt="Producto N°1"></a>
                        <a href="topproducts.php" class="sp-overlay">Camiseta Antisocial media Club<br>€120 -20%<br>€96</a>
                      </div>
                      <div class="sp-slide">
                        <img src="https://ae-pic-a1.aliexpress-media.com/kf/Sf180df1a5b6c44c8a2a81c54401faa962/Jeans-Retro-y2k-Harajuku-High-Street-Jeans-sueltos-con-bolsillo-de-Hip-Hop-para-hombres-y.jpg_.webp" alt="Producto N°2">
                        <a href="topproducts.php" class="sp-overlay">Jeans Cargo<br>€100 -20%<br>€80</a>
                      </div>
                      <div class="sp-slide">
                        <img src="https://ae-pic-a1.aliexpress-media.com/kf/S71c58d08f19d4ac4943f4b7972a2b9dep/Chaqueta-de-b-isbol-con-capucha-para-hombre-y-mujer-abrigo-grueso-y-c-lido-con.jpg_.webp" alt="Producto N°3">
                        <a href="topproducts.php" class="sp-overlay">Jacket Varsity<br>€200 -20%<br>€160</a>
                      </div>
                    </div>
                </div>
                <a href="#" class="sp-a">Más Productos</a>
            </div>
         </section>
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
</body>
</html>