<?php
session_start();
require 'con_db.php';

if (!isset($_SESSION['user_email'])) {
    header('Location: ../login.php'); 
    exit();
}

$user_email = $_SESSION['user_email'];

if (isset($_POST['product'])) {
    $product_to_delete = $_POST['product'];

    // Verificar si el producto a borrar es el primero o el segundo
    if ($_SESSION['user_cart_product'] === $product_to_delete) {
        $query = "UPDATE users SET C_PRODUCT = NULL, C_PRODUCT_IMAGE = NULL, C_PRODUCT_SIZE = NULL, C_PRODUCT_COLOR = NULL, C_PRODUCT_QUANTITY = NULL, C_PRODUCT_URL = NULL, C_PRODUCT_PRICE = NULL, C_PRODUCT_BUY = NULL WHERE EMAIL = ?";
    } elseif ($_SESSION['user_cart_product2'] === $product_to_delete) {
        $query = "UPDATE users SET C_PRODUCT2 = NULL, C_PRODUCT_IMAGE2 = NULL, C_PRODUCT_SIZE2 = NULL, C_PRODUCT_COLOR2 = NULL, C_PRODUCT_QUANTITY2 = NULL, C_PRODUCT_URL2 = NULL, C_PRODUCT_PRICE2 = NULL, C_PRODUCT_BUY2 = NULL WHERE EMAIL = ?";
    } elseif ($_SESSION['user_cart_product3'] === $product_to_delete) {
        $query = "UPDATE users SET C_PRODUCT3 = NULL, C_PRODUCT_IMAGE3 = NULL, C_PRODUCT_SIZE3 = NULL, C_PRODUCT_COLOR3 = NULL, C_PRODUCT_QUANTITY3 = NULL, C_PRODUCT_URL3 = NULL, C_PRODUCT_PRICE3 = NULL, C_PRODUCT_BUY3 = NULL WHERE EMAIL = ?";
    } elseif ($_SESSION['user_cart_product4'] === $product_to_delete) {
        $query = "UPDATE users SET C_PRODUCT4 = NULL, C_PRODUCT_IMAGE4 = NULL, C_PRODUCT_SIZE4 = NULL, C_PRODUCT_COLOR4 = NULL, C_PRODUCT_QUANTITY4 = NULL, C_PRODUCT_URL4 = NULL, C_PRODUCT_PRICE4 = NULL, C_PRODUCT_BUY4 = NULL WHERE EMAIL = ?";
    } elseif ($_SESSION['user_cart_product5'] === $product_to_delete) {
        $query = "UPDATE users SET C_PRODUCT5 = NULL, C_PRODUCT_IMAGE5 = NULL, C_PRODUCT_SIZE5 = NULL, C_PRODUCT_COLOR5 = NULL, C_PRODUCT_QUANTITY5 = NULL, C_PRODUCT_URL5 = NULL, C_PRODUCT_PRICE5 = NULL, C_PRODUCT_BUY5 = NULL WHERE EMAIL = ?";
    } elseif ($_SESSION['user_cart_product6'] === $product_to_delete) {
        $query = "UPDATE users SET C_PRODUCT6 = NULL, C_PRODUCT_IMAGE6 = NULL, C_PRODUCT_SIZE6 = NULL, C_PRODUCT_COLOR6 = NULL, C_PRODUCT_QUANTITY6 = NULL, C_PRODUCT_URL6 = NULL, C_PRODUCT_PRICE6 = NULL, C_PRODUCT_BUY6 = NULL WHERE EMAIL = ?";
    } elseif ($_SESSION['user_cart_product7'] === $product_to_delete) {
        $query = "UPDATE users SET C_PRODUCT7 = NULL, C_PRODUCT_IMAGE7 = NULL, C_PRODUCT_SIZE7 = NULL, C_PRODUCT_COLOR7 = NULL, C_PRODUCT_QUANTITY7 = NULL, C_PRODUCT_URL7 = NULL, C_PRODUCT_PRICE7 = NULL, C_PRODUCT_BUY7 = NULL WHERE EMAIL = ?";
    } elseif ($_SESSION['user_cart_product8'] === $product_to_delete) {
        $query = "UPDATE users SET C_PRODUCT8 = NULL, C_PRODUCT_IMAGE8 = NULL, C_PRODUCT_SIZE8 = NULL, C_PRODUCT_COLOR8 = NULL, C_PRODUCT_QUANTITY8 = NULL, C_PRODUCT_URL8 = NULL, C_PRODUCT_PRICE8 = NULL, C_PRODUCT_BUY8 = NULL WHERE EMAIL = ?";
    } elseif ($_SESSION['user_cart_product9'] === $product_to_delete) {
        $query = "UPDATE users SET C_PRODUCT9 = NULL, C_PRODUCT_IMAGE9 = NULL, C_PRODUCT_SIZE9 = NULL, C_PRODUCT_COLOR9 = NULL, C_PRODUCT_QUANTITY9 = NULL, C_PRODUCT_URL9 = NULL, C_PRODUCT_PRICE9 = NULL, C_PRODUCT_BUY9 = NULL WHERE EMAIL = ?";
    } elseif ($_SESSION['user_cart_product10'] === $product_to_delete) {
        $query = "UPDATE users SET C_PRODUCT10 = NULL, C_PRODUCT_IMAGE10 = NULL, C_PRODUCT_SIZE10 = NULL, C_PRODUCT_COLOR10 = NULL, C_PRODUCT_QUANTITY10 = NULL, C_PRODUCT_URL10 = NULL, C_PRODUCT_PRICE10 = NULL, C_PRODUCT_BUY10 = NULL WHERE EMAIL = ?";
    }

    // Preparar y ejecutar la consulta
    if (isset($query)) {
        $stmt = $conex->prepare($query);
        $stmt->bind_param('s', $user_email);

        if ($stmt->execute()) {
            // Borrar el producto de la sesión también
            if ($_SESSION['user_cart_product'] === $product_to_delete) {
                $_SESSION['user_cart_product'] = "";
                $_SESSION['user_cart_product_img'] = "";
                $_SESSION['user_cart_product_size'] = "";
                $_SESSION['user_cart_product_color'] = "";
                $_SESSION['user_cart_product_quantity'] = 0;
                $_SESSION['user_cart_product_url'] = "";
                $_SESSION['user_cart_product_price'] = 0;
                $_SESSION['user_cart_product_buy'] = "";
            } elseif ($_SESSION['user_cart_product2'] === $product_to_delete) {
                $_SESSION['user_cart_product2'] = "";
                $_SESSION['user_cart_product_img2'] = "";
                $_SESSION['user_cart_product_size2'] = "";
                $_SESSION['user_cart_product_color2'] = "";
                $_SESSION['user_cart_product_quantity2'] = 0;
                $_SESSION['user_cart_product_url2'] = "";
                $_SESSION['user_cart_product_price2'] = 0;
                $_SESSION['user_cart_product_buy2'] = "";
            } elseif ($_SESSION['user_cart_product3'] === $product_to_delete) {
                $_SESSION['user_cart_product3'] = "";
                $_SESSION['user_cart_product_img3'] = "";
                $_SESSION['user_cart_product_size3'] = "";
                $_SESSION['user_cart_product_color3'] = "";
                $_SESSION['user_cart_product_quantity3'] = 0;
                $_SESSION['user_cart_product_url3'] = "";
                $_SESSION['user_cart_product_price3'] = 0;
                $_SESSION['user_cart_product_buy3'] = "";
            } elseif ($_SESSION['user_cart_product4'] === $product_to_delete) {
                $_SESSION['user_cart_product4'] = "";
                $_SESSION['user_cart_product_img4'] = "";
                $_SESSION['user_cart_product_size4'] = "";
                $_SESSION['user_cart_product_color4'] = "";
                $_SESSION['user_cart_product_quantity4'] = 0;
                $_SESSION['user_cart_product_url4'] = "";
                $_SESSION['user_cart_product_price4'] = 0;
                $_SESSION['user_cart_product_buy4'] = "";
            } elseif ($_SESSION['user_cart_product5'] === $product_to_delete) {
                $_SESSION['user_cart_product5'] = "";
                $_SESSION['user_cart_product_img5'] = "";
                $_SESSION['user_cart_product_size5'] = "";
                $_SESSION['user_cart_product_color5'] = "";
                $_SESSION['user_cart_product_quantity5'] = 0;
                $_SESSION['user_cart_product_url5'] = "";
                $_SESSION['user_cart_product_price5'] = 0;
                $_SESSION['user_cart_product_buy5'] = "";
            } elseif ($_SESSION['user_cart_product6'] === $product_to_delete) {
                $_SESSION['user_cart_product6'] = "";
                $_SESSION['user_cart_product_img6'] = "";
                $_SESSION['user_cart_product_size6'] = "";
                $_SESSION['user_cart_product_color6'] = "";
                $_SESSION['user_cart_product_quantity6'] = 0;
                $_SESSION['user_cart_product_url6'] = "";
                $_SESSION['user_cart_product_price6'] = 0;
                $_SESSION['user_cart_product_buy6'] = "";
            } elseif ($_SESSION['user_cart_product7'] === $product_to_delete) {
                $_SESSION['user_cart_product7'] = "";
                $_SESSION['user_cart_product_img7'] = "";
                $_SESSION['user_cart_product_size7'] = "";
                $_SESSION['user_cart_product_color7'] = "";
                $_SESSION['user_cart_product_quantity7'] = 0;
                $_SESSION['user_cart_product_url7'] = "";
                $_SESSION['user_cart_product_price7'] = 0;
                $_SESSION['user_cart_product_buy7'] = "";
            } elseif ($_SESSION['user_cart_product8'] === $product_to_delete) {
                $_SESSION['user_cart_product8'] = "";
                $_SESSION['user_cart_product_img8'] = "";
                $_SESSION['user_cart_product_size8'] = "";
                $_SESSION['user_cart_product_color8'] = "";
                $_SESSION['user_cart_product_quantity8'] = 0;
                $_SESSION['user_cart_product_url8'] = "";
                $_SESSION['user_cart_product_price8'] = 0;
                $_SESSION['user_cart_product_buy8'] = "";
            } elseif ($_SESSION['user_cart_product9'] === $product_to_delete) {
                $_SESSION['user_cart_product9'] = "";
                $_SESSION['user_cart_product_img9'] = "";
                $_SESSION['user_cart_product_size9'] = "";
                $_SESSION['user_cart_product_color9'] = "";
                $_SESSION['user_cart_product_quantity9'] = 0;
                $_SESSION['user_cart_product_url9'] = "";
                $_SESSION['user_cart_product_price9'] = 0;
                $_SESSION['user_cart_product_buy9'] = "";
            } elseif ($_SESSION['user_cart_product10'] === $product_to_delete) {
                $_SESSION['user_cart_product10'] = "";
                $_SESSION['user_cart_product_img10'] = "";
                $_SESSION['user_cart_product_size10'] = "";
                $_SESSION['user_cart_product_color10'] = "";
                $_SESSION['user_cart_product_quantity10'] = 0;
                $_SESSION['user_cart_product_url10'] = "";
                $_SESSION['user_cart_product_price10'] = 0;
                $_SESSION['user_cart_product_buy10'] = "";
            }
            echo "Producto eliminado.";
        } else {
            echo "Error al eliminar el producto.";
        }

        $stmt->close();
    }
}
$conex->close();
?>