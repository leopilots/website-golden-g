<?php 
if (isset($_POST['cart-product'])) 
{
    include("con_db.php");
    session_start();
    if(strlen($_POST['size']) >= 1 && strlen($_POST['color']) >= 1 && strlen($_POST['quantity']) >= 1) 
    {
        if(strlen($_SESSION['user_id']) >= 1) {
            $size = trim($_POST['size']);
            $color = trim($_POST['color']);
            $quantity = trim($_POST['quantity']);

            // Obtener datos del producto
            $product_name = trim($_POST['product_name']);
            $product_image = trim($_POST['product_image']);
            $product_file_name = trim($_POST['product_file_name']);
            $price = trim($_POST['price']);
            $price2 = $price * $quantity;

            // Obtener el correo del usuario
            $user_email = $_SESSION['user_email'];

            // Consulta para verificar si los campos principales están vacíos
            $check_sql = "SELECT C_PRODUCT, C_PRODUCT2, C_PRODUCT3, C_PRODUCT4, C_PRODUCT5, C_PRODUCT6, C_PRODUCT7, C_PRODUCT8, C_PRODUCT9, C_PRODUCT10 FROM users WHERE email = ?";
            $stmt_check = mysqli_prepare($conex, $check_sql);

            if ($stmt_check) {
                mysqli_stmt_bind_param($stmt_check, "s", $user_email);
                mysqli_stmt_execute($stmt_check);
                mysqli_stmt_bind_result($stmt_check, $existing_product, $existing_product2, $existing_product3, $existing_product4, $existing_product5, $existing_product6,
                $existing_product7, $existing_product8, $existing_product9, $existing_product10);
                mysqli_stmt_fetch($stmt_check);
                mysqli_stmt_close($stmt_check);

                // Verificar si los campos principales están vacíos y definir la consulta de inserción
                if (empty($existing_product)) {
                    // Campos principales están vacíos
                    $sql = "UPDATE users SET C_PRODUCT = ?, C_PRODUCT_IMAGE = ?, C_PRODUCT_SIZE = ?, C_PRODUCT_COLOR = ?, C_PRODUCT_QUANTITY = ?, C_PRODUCT_URL = ?, C_PRODUCT_PRICE = ?, C_PRODUCT_BUY = ? WHERE EMAIL = ?";
                    $_SESSION['user_cart_product'] = $product_name;
                    $_SESSION['user_cart_product_img'] = $product_image;
                    $_SESSION['user_cart_product_size'] = $size;
                    $_SESSION['user_cart_product_color'] = $color;
                    $_SESSION['user_cart_product_quantity'] = $quantity;
                    $_SESSION['user_cart_product_url'] = $product_file_name;
                    $_SESSION['user_cart_product_price'] = $price;
                    $_SESSION['user_cart_product_buy'] = $price2;

                } else if (empty($existing_product2)) {
                    // Campos principales están llenos, pero los campos alternativos están vacíos
                    $sql = "UPDATE users SET C_PRODUCT2 = ?, C_PRODUCT_IMAGE2 = ?, C_PRODUCT_SIZE2 = ?, C_PRODUCT_COLOR2 = ?, C_PRODUCT_QUANTITY2 = ?, C_PRODUCT_URL2 = ?, C_PRODUCT_PRICE2 = ?, C_PRODUCT_BUY2 = ? WHERE EMAIL = ?";
                    $_SESSION['user_cart_product2'] = $product_name;
                    $_SESSION['user_cart_product_img2'] = $product_image;
                    $_SESSION['user_cart_product_size2'] = $size;
                    $_SESSION['user_cart_product_color2'] = $color;
                    $_SESSION['user_cart_product_quantity2'] = $quantity;
                    $_SESSION['user_cart_product_url2'] = $product_file_name;
                    $_SESSION['user_cart_product_price2'] = $price;
                    $_SESSION['user_cart_product_buy2'] = $price2;
                } else if (empty($existing_product3)) {
                    $sql = "UPDATE users SET C_PRODUCT3 = ?, C_PRODUCT_IMAGE3 = ?, C_PRODUCT_SIZE3 = ?, C_PRODUCT_COLOR3 = ?, C_PRODUCT_QUANTITY3 = ?, C_PRODUCT_URL3 = ?, C_PRODUCT_PRICE3 = ?, C_PRODUCT_BUY3 = ? WHERE EMAIL = ?";
                    $_SESSION['user_cart_product3'] = $product_name;
                    $_SESSION['user_cart_product_img3'] = $product_image;
                    $_SESSION['user_cart_product_size3'] = $size;
                    $_SESSION['user_cart_product_color3'] = $color;
                    $_SESSION['user_cart_product_quantity3'] = $quantity;
                    $_SESSION['user_cart_product_url3'] = $product_file_name;
                    $_SESSION['user_cart_product_price3'] = $price;
                    $_SESSION['user_cart_product_buy3'] = $price2;
                } else if (empty($existing_product4)) {
                    $sql = "UPDATE users SET C_PRODUCT4 = ?, C_PRODUCT_IMAGE4 = ?, C_PRODUCT_SIZE4 = ?, C_PRODUCT_COLOR4 = ?, C_PRODUCT_QUANTITY4 = ?, C_PRODUCT_URL4 = ?, C_PRODUCT_PRICE4 = ?, C_PRODUCT_BUY4 = ? WHERE EMAIL = ?";
                    $_SESSION['user_cart_product4'] = $product_name;
                    $_SESSION['user_cart_product_img4'] = $product_image;
                    $_SESSION['user_cart_product_size4'] = $size;
                    $_SESSION['user_cart_product_color4'] = $color;
                    $_SESSION['user_cart_product_quantity4'] = $quantity;
                    $_SESSION['user_cart_product_url4'] = $product_file_name;
                    $_SESSION['user_cart_product_price4'] = $price;
                    $_SESSION['user_cart_product_buy4'] = $price2;
                } else if (empty($existing_product5)) {
                    $sql = "UPDATE users SET C_PRODUCT5 = ?, C_PRODUCT_IMAGE5 = ?, C_PRODUCT_SIZE5 = ?, C_PRODUCT_COLOR5 = ?, C_PRODUCT_QUANTITY5 = ?, C_PRODUCT_URL5 = ?, C_PRODUCT_PRICE5 = ?, C_PRODUCT_BUY5 = ? WHERE EMAIL = ?";
                    $_SESSION['user_cart_product5'] = $product_name;
                    $_SESSION['user_cart_product_img5'] = $product_image;
                    $_SESSION['user_cart_product_size5'] = $size;
                    $_SESSION['user_cart_product_color5'] = $color;
                    $_SESSION['user_cart_product_quantity5'] = $quantity;
                    $_SESSION['user_cart_product_url5'] = $product_file_name;
                    $_SESSION['user_cart_product_price5'] = $price;
                    $_SESSION['user_cart_product_buy5'] = $price2;
                } else if (empty($existing_product6)) {
                    $sql = "UPDATE users SET C_PRODUCT6 = ?, C_PRODUCT_IMAGE6 = ?, C_PRODUCT_SIZE6 = ?, C_PRODUCT_COLOR6 = ?, C_PRODUCT_QUANTITY6 = ?, C_PRODUCT_URL6 = ?, C_PRODUCT_PRICE6 = ?, C_PRODUCT_BUY6 = ? WHERE EMAIL = ?";
                    $_SESSION['user_cart_product6'] = $product_name;
                    $_SESSION['user_cart_product_img6'] = $product_image;
                    $_SESSION['user_cart_product_size6'] = $size;
                    $_SESSION['user_cart_product_color6'] = $color;
                    $_SESSION['user_cart_product_quantity6'] = $quantity;
                    $_SESSION['user_cart_product_url6'] = $product_file_name;
                    $_SESSION['user_cart_product_price6'] = $price;
                    $_SESSION['user_cart_product_buy6'] = $price2;
                } else if (empty($existing_product7)) {
                    $sql = "UPDATE users SET C_PRODUCT7 = ?, C_PRODUCT_IMAGE7 = ?, C_PRODUCT_SIZE7 = ?, C_PRODUCT_COLOR7 = ?, C_PRODUCT_QUANTITY7 = ?, C_PRODUCT_URL7 = ?, C_PRODUCT_PRICE7 = ?, C_PRODUCT_BUY7 = ? WHERE EMAIL = ?";
                    $_SESSION['user_cart_product7'] = $product_name;
                    $_SESSION['user_cart_product_img7'] = $product_image;
                    $_SESSION['user_cart_product_size7'] = $size;
                    $_SESSION['user_cart_product_color7'] = $color;
                    $_SESSION['user_cart_product_quantity7'] = $quantity;
                    $_SESSION['user_cart_product_url7'] = $product_file_name;
                    $_SESSION['user_cart_product_price7'] = $price;
                    $_SESSION['user_cart_product_buy7'] = $price2;
                } else if (empty($existing_product8)) {
                    $sql = "UPDATE users SET C_PRODUCT8 = ?, C_PRODUCT_IMAGE8 = ?, C_PRODUCT_SIZE8 = ?, C_PRODUCT_COLOR8 = ?, C_PRODUCT_QUANTITY8 = ?, C_PRODUCT_URL8 = ?, C_PRODUCT_PRICE8 = ?, C_PRODUCT_BUY8 = ? WHERE EMAIL = ?";
                    $_SESSION['user_cart_product8'] = $product_name;
                    $_SESSION['user_cart_product_img8'] = $product_image;
                    $_SESSION['user_cart_product_size8'] = $size;
                    $_SESSION['user_cart_product_color8'] = $color;
                    $_SESSION['user_cart_product_quantity8'] = $quantity;
                    $_SESSION['user_cart_product_url8'] = $product_file_name;
                    $_SESSION['user_cart_product_price8'] = $price;
                    $_SESSION['user_cart_product_buy8'] = $price2;
                } else if (empty($existing_product9)) {
                    $sql = "UPDATE users SET C_PRODUCT9 = ?, C_PRODUCT_IMAGE9 = ?, C_PRODUCT_SIZE9 = ?, C_PRODUCT_COLOR9 = ?, C_PRODUCT_QUANTITY9 = ?, C_PRODUCT_URL9 = ?, C_PRODUCT_PRICE9 = ?, C_PRODUCT_BUY9 = ? WHERE EMAIL = ?";
                    $_SESSION['user_cart_product9'] = $product_name;
                    $_SESSION['user_cart_product_img9'] = $product_image;
                    $_SESSION['user_cart_product_size9'] = $size;
                    $_SESSION['user_cart_product_color9'] = $color;
                    $_SESSION['user_cart_product_quantity9'] = $quantity;
                    $_SESSION['user_cart_product_url9'] = $product_file_name;
                    $_SESSION['user_cart_product_price9'] = $price;
                    $_SESSION['user_cart_product_buy9'] = $price2;
                } else if (empty($existing_product10)) {
                    $sql = "UPDATE users SET C_PRODUCT10 = ?, C_PRODUCT_IMAGE10 = ?, C_PRODUCT_SIZE10 = ?, C_PRODUCT_COLOR10 = ?, C_PRODUCT_QUANTITY10 = ?, C_PRODUCT_URL10 = ?, C_PRODUCT_PRICE10 = ?, C_PRODUCT_BUY10 = ? WHERE EMAIL = ?";
                    $_SESSION['user_cart_product10'] = $product_name;
                    $_SESSION['user_cart_product_img10'] = $product_image;
                    $_SESSION['user_cart_product_size10'] = $size;
                    $_SESSION['user_cart_product_color10'] = $color;
                    $_SESSION['user_cart_product_quantity10'] = $quantity;
                    $_SESSION['user_cart_product_url10'] = $product_file_name;
                    $_SESSION['user_cart_product_price10'] = $price;
                    $_SESSION['user_cart_product_buy10'] = $price2;
                } else {
                    ?> 
                    <div class="r-alert-overlay">
                        <div class="r-alert">
                            <div class="r-alert-message">
                                No se puede añadir más productos, ya que los campos están llenos, por favor vacio tu carrito comprando los productos.
                            </div>
                            <div class="r-alert-buttons">
                                <a href="http://localhost/goldeng/"><button class="r-alert-home">Aceptar</button></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    exit;
                }

                // Preparar la consulta
                $stmt_update = mysqli_prepare($conex, $sql);

                if ($stmt_update) {
                    // Vincular los parámetros a la consulta
                    mysqli_stmt_bind_param($stmt_update, "sssssssss", $product_name, $product_image, $size, $color, $quantity, $product_file_name, $price, $price2, $user_email);

                    // Ejecutar la consulta
                    if (mysqli_stmt_execute($stmt_update)) {
                        header('Location: ../mycart.php'); 
                        exit();
                    } else {
                        ?> 
                        <div class="r-alert-overlay">
                            <div class="r-alert">
                                <div class="r-alert-message">
                                    Error al guardar los datos en la base de datos.
                                </div>
                                <div class="r-alert-buttons">
                                    <a href="http://localhost/goldeng/"><button class="r-alert-home">Aceptar</button></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    mysqli_stmt_close($stmt_update);
                } else {
                    ?> 
                    <div class="r-alert-overlay">
                        <div class="r-alert">
                            <div class="r-alert-message">
                                Error al preparar la consulta.
                            </div>
                            <div class="r-alert-buttons">
                                <a href="http://localhost/goldeng/"><button class="r-alert-home">Aceptar</button></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                ?> 
                <div class="r-alert-overlay">
                    <div class="r-alert">
                        <div class="r-alert-message">
                            Error al preparar la consulta de verificación.
                        </div>
                        <div class="r-alert-buttons">
                            <a href="http://localhost/goldeng/"><button class="r-alert-home">Aceptar</button></a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    }   
}
?>
