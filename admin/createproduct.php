<?php
    session_start();  

    if($_SESSION['user_admin'] < 9) {
        header('Location: http://localhost/goldeng/');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Está es una empresa dedicada al dropshipping.">
    <link rel="icon" type="image/ico" href="http://localhost/goldeng/img/brand/favicon.ico">
    <title>Golden G | Crear Nuevo Producto</title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/db90717a15.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/createproduct.css">
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
                <a href="http://localhost/goldeng/account.php">Mi cuenta</a>
            </li>
        </ul>
    </nav>
    <!-- register -->
    <main>
        <div class="r-product-main">
            <form method="post">
                <h1>Crear un Nuevo Producto</h1>
                <input type="text" name="name" placeholder="Nombre del Producto (Obligatorio)">
                <label>Sección del Producto</label>
                <input type="number" name="section" placeholder="Hombre - Mujer - Unisex" min="1" max="3">
                <label>Imagenes del Producto</label>
                <input type="url" name="image1" placeholder="Imagen 1 (Obligatorio)">
                <input type="url" name="image2" placeholder="Imagen 2">
                <input type="url" name="image3" placeholder="Imagen 3">
                <label>Descripción del Producto</label>
                <input type="text" name="description" placeholder="Descripción (Obligatorio)">
                <label>Cantidad por C/U de tallas</label>
                <input type="number" name="xs" placeholder="Talla XS" min="0">
                <input type="number" name="s" placeholder="Talla S" min="0">
                <input type="number" name="m" placeholder="Talla M" min="0">
                <input type="number" name="l" placeholder="Talla L" min="0">
                <input type="number" name="xl" placeholder="Talla XL" min="0">
                <label>Los colores que tiene el producto</label>
                <input type="number" name="WHITE" placeholder="Blanco" min="0" max="1">
                <input type="number" name="BLACK" placeholder="Negro" min="0" max="1">
                <input type="number" name="BLUE" placeholder="Azul" min="0" max="1">
                <input type="number" name="RED" placeholder="Rojo" min="0" max="1">
                <input type="number" name="BROWN" placeholder="Café" min="0" max="1">
                <input type="number" name="GRAY" placeholder="Gris" min="0" max="1">
                <input type="number" name="GREEN" placeholder="Verde" min="0" max="1">
                <input type="number" name="ORANGE" placeholder="Naranja" min="0" max="1">
                <input type="number" name="PINK" placeholder="Rosado" min="0" max="1">
                <input type="number" name="YELLOW" placeholder="Amarillo" min="0" max="1">
                <label>Precio por Unidad del Producto</label>
                <input type="number" name="price" placeholder="Precio" min="1">
                <input type="url" name="provider" placeholder="Link del proveedor del producto" minlength="1">
                <input type="submit" name="createproduct" value="Crear Producto">
            </form>
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
    <script src="http://localhost/goldeng/assets/js/main.js"></script>
    <!-- php -->
    <?php 
        include '../php/newproduct.php';
    ?>
</body>
</html>