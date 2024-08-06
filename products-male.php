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
    <main>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Buscar productos" onkeyup="filterProducts()">
        </div>
        <h2>ROPA DE HOMBRE</h2>
        <div class="catalog-container" id="catalogContainer">
            <?php
            include("php/con_db.php");

            $sql = "SELECT * FROM products";
            $result = mysqli_query($conex, $sql);

            for ($i = 0; $i < $result->num_rows; $i++) {
                $row = $result->fetch_assoc();
                if($row['SECTION'] == 1 || $row['SECTION'] == 3) {
                    ?>
                    <div class="top-p" data-name="<?php echo htmlspecialchars($row['NAME']); ?>">
                        <?php echo "<a href='http://localhost/goldeng/product/{$row['ID']}.php'>"; ?>
                            <img src="<?php echo htmlspecialchars($row['IMAGE']); ?>" alt="Producto">
                            <?php if($row['OFFER'] == 1) { ?> <span class="offer">En Oferta</span> <?php } ?>
                            <?php if($row['STOCK'] == 0) { ?> <span class="spent">Agotado</span> <?php } ?>
                        </a>
                        <div class="info">
                            <span class="price">€<?php echo htmlspecialchars($row['PRICE']); ?></span>
                            <p><?php echo htmlspecialchars($row['DESCRIPTION']); ?></p>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
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
    <script src="http://localhost/goldeng/assets/js/products.js"></script>
    <script src="http://localhost/goldeng/assets/js/main.js"></script>
</body>
</html>