<?php
include '../php/con_db.php';
session_start();

// Obtiene la ruta completa del archivo y luego le quita la extensión
$filePath = $_SERVER['PHP_SELF'];
$fileNameWithExtension = basename($filePath);
$fileNameWithoutExtension = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);

// Product info
$sqlproduct = "SELECT * FROM products WHERE ID = $fileNameWithoutExtension";
$resultproduct = mysqli_query($conex, $sqlproduct);

$row = mysqli_fetch_assoc($resultproduct);

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
    <title>Golden G | <?php echo htmlspecialchars($row['NAME']); ?></title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/db90717a15.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/1-product.css">
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
                    <img src="<?php echo htmlspecialchars($row['IMAGE']); ?>" alt="Miniatura 1" class="thumbnail" data-full="<?php echo htmlspecialchars($row['IMAGE']); ?>">
                    <?php if(strlen($row['IMAGE2']) >= 1) { ?> <img src="<?php echo htmlspecialchars($row['IMAGE2']); ?>" alt="Miniatura 2" class="thumbnail" data-full="<?php echo htmlspecialchars($row['IMAGE2']); ?>"> <?php } ?>
                    <?php if(strlen($row['IMAGE3']) >= 1) { ?> <img src="<?php echo htmlspecialchars($row['IMAGE3']); ?>" alt="Miniatura 3" class="thumbnail" data-full="<?php echo htmlspecialchars($row['IMAGE3']); ?>"> <?php } ?>
                </div>
                <div class="main-image-container">
                    <img id="main-image" src="<?php echo htmlspecialchars($row['IMAGE']); ?>" alt="Imagen principal del producto">
                </div>
            </section>
            <section class="product-details">
                <h2><?php echo htmlspecialchars($row['NAME']); ?></h2>
                <p class="price">€<?php echo htmlspecialchars($row['PRICE']); ?></p>
                <p class="description"><?php echo htmlspecialchars($row['DESCRIPTION']); ?></p>
                <form method="post" action="../php/cart-product.php">
                    <!-- Campos ocultos para pasar los datos del producto -->
                    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($row['NAME']); ?>">
                    <input type="hidden" name="product_image" value="<?php echo htmlspecialchars($row['IMAGE']); ?>">
                    <input type="hidden" name="product_file_name" value="<?php echo htmlspecialchars($fileNameWithExtension); ?>">
                    <input type="hidden" name="price" value="<?php echo htmlspecialchars($row['PRICE']); ?>">
                    <label for="size">Talla:</label>
                    <select id="size" name="size">
                        <?php if($row['SIZE_XS'] >= 1) { ?> <option value="xs">XS</option> <?php } ?>
                        <?php if($row['SIZE_S'] >= 1) { ?> <option value="s">S</option> <?php } ?>
                        <?php if($row['SIZE_M'] >= 1) { ?> <option value="m">M</option> <?php } ?>
                        <?php if($row['SIZE_L'] >= 1) { ?> <option value="l">L</option> <?php } ?>
                        <?php if($row['SIZE_XL'] >= 1) { ?> <option value="xl">XL</option> <?php } ?>
                    </select>
                    <div class="details-space"></div>
                    <label for="color">Color:</label>
                    <select id="color" name="color">
                        <?php if($row['WHITE'] == 1) { ?> <option value="Blanco">Blanco</option> <?php } ?>
                        <?php if($row['BLACK'] == 1) { ?> <option value="Negro">Negro</option> <?php } ?>
                        <?php if($row['BLUE'] == 1) { ?> <option value="Azul">Azul</option> <?php } ?>
                        <?php if($row['RED'] == 1) { ?> <option value="Rojo">Rojo</option> <?php } ?>
                        <?php if($row['BROWN'] == 1) { ?> <option value="Café">Café</option> <?php } ?>
                        <?php if($row['GRAY'] == 1) { ?> <option value="Gris">Gris</option> <?php } ?>
                        <?php if($row['GREEN'] == 1) { ?> <option value="Verde">Verde</option> <?php } ?>
                        <?php if($row['ORANGE'] == 1) { ?> <option value="Naranja">Naranja</option> <?php } ?>
                        <?php if($row['PINK'] == 1) { ?> <option value="Rosado">Rosado</option> <?php } ?>
                        <?php if($row['YELLOW'] == 1) { ?> <option value="Amarillo">Amarillo</option> <?php } ?>
                    </select>
                    <div class="details-space"></div>
                    <?php if($row['STOCK'] >= 1) { ?>
                        <label for="quantity">Cantidad:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                        <div class="details-space"></div>
                        <button type="submit" name="cart-product">Añadir al carrito</button>
                    <?php } ?>
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
            <a href="http://localhost/goldeng/terms.php">Términos y condiciones</a>
        </div>
    </footer>
    <!-- javascript -->
    <script src="http://localhost/goldeng/assets/js/1-product.js"></script>
    <script src="http://localhost/goldeng/assets/js/main.js"></script>
</body>
</html>