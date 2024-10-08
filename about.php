<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    ?>
    <!-- terms -->
    <div id="terms-termsModal" class="terms-modal">
        <div class="terms-modal-content">
            <h2>Términos y Condiciones</h2>
            <p>Por favor, lea y acepte nuestros términos y condiciones para continuar utilizando este sitio web.</p>
            <p><a href="http://localhost/goldeng/terms.php" target="_blank">Leer Términos y Condiciones</a></p>
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
    <link rel="icon" type="image/ico" href="http://localhost/goldeng/img/brand/favicon.ico">
    <title>Golden G | Conocer Más</title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/db90717a15.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/about.css">
</head>
<body>
    <!-- offer -->
   <?php
    if (!isset($_SESSION['user_id'])) {
        ?>
        <div class="offer">
            <div><p>PROMOCIÓN: ¡Disfruta de envío gratis en tu primera compra!</p></div>
        </div>
        <?php
    }
    else if ($_SESSION['user_firstbuy'] == 1) {
        ?>
        <div class="offer">
            <div><p>NO HAY PROMOCIONES ACTUALMENTE.</p></div>
        </div>
        <?php
    } else {
        ?>
        <div class="offer">
            <div><p>PROMOCIÓN: ¡Disfruta de envío gratis en tu primera compra!</p></div>
        </div>
        <?php
    }
    ?>
    <!-- header -->
    <header>
        <div class="header-container">
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
    <!-- about more -->
    <main>
        <div class="about">
            <img src="img/brand/logo.png" alt="">
            <p>
                En Golden G, nos especializamos en la venta de una amplia gama de productos de vestimenta a través 
                del modelo de dropshipping. Nuestro compromiso es ofrecer a nuestros clientes una experiencia de 
                compra única y de alta calidad. Para ello, seleccionamos cuidadosamente a nuestros proveedores para 
                asegurarnos de que cada artículo cumpla con los más altos estándares de calidad y seguridad. Entendemos 
                la importancia de la confianza al comprar en línea, por lo que nos esforzamos por garantizar una plataforma 
                segura y transparente. Desde prendas de moda casual hasta ropa más formal, en Golden G ofrecemos opciones 
                para todos los gustos y necesidades. Además, nos enorgullece proporcionar un servicio al cliente excepcional, 
                siempre dispuestos a ayudar y resolver cualquier inquietud que nuestros clientes puedan tener. Con cada compra, 
                buscamos no solo satisfacer, sino superar las expectativas, creando una experiencia de compra positiva y memorable 
                para cada cliente.
                <br>
                Esta empresa fue fundada por Gernot Ramiro, con García Leonardo como desarrollador encargado de la creación y mantenimiento del sitio web.
            </p>
        </div>
        <div class="contact">
            <<div class="contact-container">
                <h2>CONTÁCTANOS</h2>
                <form id="contact-form">
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje:</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">Enviar</button>
                    </div>
                </form>
                <div id="response-message"></div>
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
            <a href="http://localhost/goldeng/terms.php">Términos y condiciones</a>
        </div>
    </footer>
    <!-- javascript -->
    <script src="http://localhost/goldeng/assets/js/contact.js"></script>
    <script src="http://localhost/goldeng/assets/js/main.js"></script>
</body>
</html>
