<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php'); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Está es una empresa dedicada al dropshipping.">
    <link rel="icon" type="image/ico" href="http://localhost/goldeng/img/brand/favicon.ico">
    <title>Golden G | Mi Carrito</title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/db90717a15.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/goldeng/assets/css/mycart.css">
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
            <li><a href="http://localhost/goldeng/">Inicio</a></li>
            <li><a href="http://localhost/goldeng/mycart.php">Mi Carrito</a></li>
            <li><a href="#">Mis compras</a></li>
            <?php if($_SESSION['user_admin'] > 1) { ?>
                <li><a href="http://localhost/goldeng/admin/createproduct.php">Nuevo Producto</a></li>
            <?php } ?>
            <li><a href="http://localhost/goldeng/php/logout.php">Cerrar sesión</a></li>
        </ul>
    </nav>
    <!-- products mycart -->
    <main>
        <?php if(strlen($_SESSION['user_cart_product']) >= 1) { ?>
            <div class="product-card">
                <a href='http://localhost/goldeng/product/<?php echo htmlspecialchars($_SESSION['user_cart_product_url']); ?>'>
                    <img src="<?php echo htmlspecialchars($_SESSION['user_cart_product_img']); ?>" alt="Producto">
                </a>
                <div class="product-info">
                    <p><?php echo htmlspecialchars($_SESSION['user_cart_product']); ?></p>
                    <p>Precio: €<?php echo htmlspecialchars($_SESSION['user_cart_product_buy']); ?></p>
                    <p>Talla: <?php echo htmlspecialchars($_SESSION['user_cart_product_size']); ?> | <?php echo htmlspecialchars($_SESSION['user_cart_product_color']); ?></p>
                    <p>Cantidad: <?php echo htmlspecialchars($_SESSION['user_cart_product_quantity']); ?></p>
                    <button onclick="deleteProduct('<?php echo htmlspecialchars($_SESSION['user_cart_product']); ?>')">BORRAR</button>
                </div>
            </div>
        <?php } ?>

        <?php if(strlen($_SESSION['user_cart_product2']) >= 1) { ?>
            <div class="product-card">
                <a href='http://localhost/goldeng/product/<?php echo htmlspecialchars($_SESSION['user_cart_product_url2']); ?>'>
                    <img src="<?php echo htmlspecialchars($_SESSION['user_cart_product_img2']); ?>" alt="Producto">
                </a>
                <div class="product-info">
                    <p><?php echo htmlspecialchars($_SESSION['user_cart_product2']); ?></p>
                    <p>Precio: €<?php echo htmlspecialchars($_SESSION['user_cart_product_buy2']); ?></p>
                    <p>Talla: <?php echo htmlspecialchars($_SESSION['user_cart_product_size2']); ?> | <?php echo htmlspecialchars($_SESSION['user_cart_product_color2']); ?></p>
                    <p>Cantidad: <?php echo htmlspecialchars($_SESSION['user_cart_product_quantity2']); ?></p>
                    <button onclick="deleteProduct('<?php echo htmlspecialchars($_SESSION['user_cart_product2']); ?>')">BORRAR</button>
                </div>
            </div>
        <?php } ?>

        <?php if(strlen($_SESSION['user_cart_product3']) >= 1) { ?>
            <div class="product-card">
                <a href='http://localhost/goldeng/product/<?php echo htmlspecialchars($_SESSION['user_cart_product_url3']); ?>'>
                    <img src="<?php echo htmlspecialchars($_SESSION['user_cart_product_img3']); ?>" alt="Producto">
                </a>
                <div class="product-info">
                    <p><?php echo htmlspecialchars($_SESSION['user_cart_product3']); ?></p>
                    <p>Precio: €<?php echo htmlspecialchars($_SESSION['user_cart_product_buy3']); ?></p>
                    <p>Talla: <?php echo htmlspecialchars($_SESSION['user_cart_product_size3']); ?> | <?php echo htmlspecialchars($_SESSION['user_cart_product_color3']); ?></p>
                    <p>Cantidad: <?php echo htmlspecialchars($_SESSION['user_cart_product_quantity3']); ?></p>
                    <button onclick="deleteProduct('<?php echo htmlspecialchars($_SESSION['user_cart_product3']); ?>')">BORRAR</button>
                </div>
            </div>
        <?php } ?>

        <?php if(strlen($_SESSION['user_cart_product4']) >= 1) { ?>
            <div class="product-card">
                <a href='http://localhost/goldeng/product/<?php echo htmlspecialchars($_SESSION['user_cart_product_url4']); ?>'>
                    <img src="<?php echo htmlspecialchars($_SESSION['user_cart_product_img4']); ?>" alt="Producto">
                </a>
                <div class="product-info">
                    <p><?php echo htmlspecialchars($_SESSION['user_cart_product4']); ?></p>
                    <p>Precio: €<?php echo htmlspecialchars($_SESSION['user_cart_product_buy4']); ?></p>
                    <p>Talla: <?php echo htmlspecialchars($_SESSION['user_cart_product_size4']); ?> | <?php echo htmlspecialchars($_SESSION['user_cart_product_color4']); ?></p>
                    <p>Cantidad: <?php echo htmlspecialchars($_SESSION['user_cart_product_quantity4']); ?></p>
                    <button onclick="deleteProduct('<?php echo htmlspecialchars($_SESSION['user_cart_product4']); ?>')">BORRAR</button>
                </div>
            </div>
        <?php } ?>

        <?php if(strlen($_SESSION['user_cart_product5']) >= 1) { ?>
            <div class="product-card">
                <a href='http://localhost/goldeng/product/<?php echo htmlspecialchars($_SESSION['user_cart_product_url5']); ?>'>
                    <img src="<?php echo htmlspecialchars($_SESSION['user_cart_product_img5']); ?>" alt="Producto">
                </a>
                <div class="product-info">
                    <p><?php echo htmlspecialchars($_SESSION['user_cart_product5']); ?></p>
                    <p>Precio: €<?php echo htmlspecialchars($_SESSION['user_cart_product_buy5']); ?></p>
                    <p>Talla: <?php echo htmlspecialchars($_SESSION['user_cart_product_size5']); ?> | <?php echo htmlspecialchars($_SESSION['user_cart_product_color5']); ?></p>
                    <p>Cantidad: <?php echo htmlspecialchars($_SESSION['user_cart_product_quantity5']); ?></p>
                    <button onclick="deleteProduct('<?php echo htmlspecialchars($_SESSION['user_cart_product5']); ?>')">BORRAR</button>
                </div>
            </div>
        <?php } ?>

        <?php if(strlen($_SESSION['user_cart_product6']) >= 1) { ?>
            <div class="product-card">
                <a href='http://localhost/goldeng/product/<?php echo htmlspecialchars($_SESSION['user_cart_product_url6']); ?>'>
                    <img src="<?php echo htmlspecialchars($_SESSION['user_cart_product_img6']); ?>" alt="Producto">
                </a>
                <div class="product-info">
                    <p><?php echo htmlspecialchars($_SESSION['user_cart_product6']); ?></p>
                    <p>Precio: €<?php echo htmlspecialchars($_SESSION['user_cart_product_buy6']); ?></p>
                    <p>Talla: <?php echo htmlspecialchars($_SESSION['user_cart_product_size6']); ?> | <?php echo htmlspecialchars($_SESSION['user_cart_product_color6']); ?></p>
                    <p>Cantidad: <?php echo htmlspecialchars($_SESSION['user_cart_product_quantity6']); ?></p>
                    <button onclick="deleteProduct('<?php echo htmlspecialchars($_SESSION['user_cart_product6']); ?>')">BORRAR</button>
                </div>
            </div>
        <?php } ?>

        <?php if(strlen($_SESSION['user_cart_product7']) >= 1) { ?>
            <div class="product-card">
                <a href='http://localhost/goldeng/product/<?php echo htmlspecialchars($_SESSION['user_cart_product_url7']); ?>'>
                    <img src="<?php echo htmlspecialchars($_SESSION['user_cart_product_img7']); ?>" alt="Producto">
                </a>
                <div class="product-info">
                    <p><?php echo htmlspecialchars($_SESSION['user_cart_product7']); ?></p>
                    <p>Precio: €<?php echo htmlspecialchars($_SESSION['user_cart_product_buy7']); ?></p>
                    <p>Talla: <?php echo htmlspecialchars($_SESSION['user_cart_product_size7']); ?> | <?php echo htmlspecialchars($_SESSION['user_cart_product_color7']); ?></p>
                    <p>Cantidad: <?php echo htmlspecialchars($_SESSION['user_cart_product_quantity7']); ?></p>
                    <button onclick="deleteProduct('<?php echo htmlspecialchars($_SESSION['user_cart_product7']); ?>')">BORRAR</button>
                </div>
            </div>
        <?php } ?>

        <?php if(strlen($_SESSION['user_cart_product8']) >= 1) { ?>
            <div class="product-card">
                <a href='http://localhost/goldeng/product/<?php echo htmlspecialchars($_SESSION['user_cart_product_url8']); ?>'>
                    <img src="<?php echo htmlspecialchars($_SESSION['user_cart_product_img8']); ?>" alt="Producto">
                </a>
                <div class="product-info">
                    <p><?php echo htmlspecialchars($_SESSION['user_cart_product8']); ?></p>
                    <p>Precio: €<?php echo htmlspecialchars($_SESSION['user_cart_product_buy8']); ?></p>
                    <p>Talla: <?php echo htmlspecialchars($_SESSION['user_cart_product_size8']); ?> | <?php echo htmlspecialchars($_SESSION['user_cart_product_color8']); ?></p>
                    <p>Cantidad: <?php echo htmlspecialchars($_SESSION['user_cart_product_quantity8']); ?></p>
                    <button onclick="deleteProduct('<?php echo htmlspecialchars($_SESSION['user_cart_product8']); ?>')">BORRAR</button>
                </div>
            </div>
        <?php } ?>

        <?php if(strlen($_SESSION['user_cart_product9']) >= 1) { ?>
            <div class="product-card">
                <a href='http://localhost/goldeng/product/<?php echo htmlspecialchars($_SESSION['user_cart_product_url9']); ?>'>
                    <img src="<?php echo htmlspecialchars($_SESSION['user_cart_product_img9']); ?>" alt="Producto">
                </a>
                <div class="product-info">
                    <p><?php echo htmlspecialchars($_SESSION['user_cart_product9']); ?></p>
                    <p>Precio: €<?php echo htmlspecialchars($_SESSION['user_cart_product_buy9']); ?></p>
                    <p>Talla: <?php echo htmlspecialchars($_SESSION['user_cart_product_size9']); ?> | <?php echo htmlspecialchars($_SESSION['user_cart_product_color9']); ?></p>
                    <p>Cantidad: <?php echo htmlspecialchars($_SESSION['user_cart_product_quantity9']); ?></p>
                    <button onclick="deleteProduct('<?php echo htmlspecialchars($_SESSION['user_cart_product9']); ?>')">BORRAR</button>
                </div>
            </div>
        <?php } ?>

        <?php if(strlen($_SESSION['user_cart_product10']) >= 1) { ?>
            <div class="product-card">
                <a href='http://localhost/goldeng/product/<?php echo htmlspecialchars($_SESSION['user_cart_product_url10']); ?>'>
                    <img src="<?php echo htmlspecialchars($_SESSION['user_cart_product_img10']); ?>" alt="Producto">
                </a>
                <div class="product-info">
                    <p><?php echo htmlspecialchars($_SESSION['user_cart_product10']); ?></p>
                    <p>Precio: €<?php echo htmlspecialchars($_SESSION['user_cart_product_buy10']); ?></p>
                    <p>Talla: <?php echo htmlspecialchars($_SESSION['user_cart_product_size10']); ?> | <?php echo htmlspecialchars($_SESSION['user_cart_product_color10']); ?></p>
                    <p>Cantidad: <?php echo htmlspecialchars($_SESSION['user_cart_product_quantity10']); ?></p>
                    <button onclick="deleteProduct('<?php echo htmlspecialchars($_SESSION['user_cart_product10']); ?>')">BORRAR</button>
                </div>
            </div>
        <?php } ?>
    </main>
    <!-- buy product -->
    <div class="purchase-info">
        <div class="left">
            <p>* Al continuar, declaro que he leído y acepto las Condiciones de Compra y entiendo la <a href="#">Política de Privacidad</a> de Golden G.</p>
        </div>
        <div class="right">
            <p><strong>TOTAL</strong><br>€ <?php 
            $total = (float)$_SESSION['user_cart_product_buy'] 
            + (float)$_SESSION['user_cart_product_buy2'] 
            + (float)$_SESSION['user_cart_product_buy3'] 
            + (float)$_SESSION['user_cart_product_buy4'] 
            + (float)$_SESSION['user_cart_product_buy5'] 
            + (float)$_SESSION['user_cart_product_buy6'] 
            + (float)$_SESSION['user_cart_product_buy7'] 
            + (float)$_SESSION['user_cart_product_buy8'] 
            + (float)$_SESSION['user_cart_product_buy9'] 
            + (float)$_SESSION['user_cart_product_buy10'];
            echo number_format($total, 2, ',', '.'); ?> <br>* IMPUESTOS INCLUIDOS</p>
            <button>COMPRAR</button>
        </div>
    </div>
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
    
    <!-- JavaScript para manejar la eliminación -->
    <script>
    function deleteProduct(product) {
        if (confirm("¿Estás seguro de que deseas eliminar este producto del carrito?")) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost/goldeng/php/deletecart.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onload = function () {
                if (xhr.status === 200) {
                    alert(xhr.responseText);
                    window.location.reload(); // Recargar la página para reflejar los cambios
                } else {
                    alert("Error al intentar eliminar el producto.");
                }
            };
            xhr.send("product=" + encodeURIComponent(product));
        }
    }
    </script>
</body>
</html>
