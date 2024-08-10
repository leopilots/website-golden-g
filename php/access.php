<?php
include("con_db.php");
session_start();

if(isset($_POST['login'])) 
{
    if(strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) 
    {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $email = mysqli_real_escape_string($conex, $email);
        $password = mysqli_real_escape_string($conex, $password);

        // Verificar usuario y contraseña
        $sql = "SELECT * FROM users WHERE EMAIL = '$email'";
        $result = mysqli_query($conex, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Suponiendo que estás usando password_hash para almacenar contraseñas
            if (password_verify($password, $row['PASSWORD'])) {
                // Iniciar sesión                
                // Guarda los datos de la DB del usuario a su sesión
                $_SESSION['user_id'] = $row['ID'];
                $_SESSION['user_email'] = $row['EMAIL'];
                $_SESSION['user_name'] = $row['NAME'];
                $_SESSION['user_lastname'] = $row['LASTNAME'];
                $_SESSION['user_admin'] = $row['ADMIN'];
                $_SESSION['user_firstbuy'] = $row['FIRSTBUY'];
                $_SESSION['user_purchases'] = $row['PURCHASES'];

                $_SESSION['user_cart_product'] = $row['C_PRODUCT'];
                $_SESSION['user_cart_product_img'] = $row['C_PRODUCT_IMAGE'];
                $_SESSION['user_cart_product_size'] = $row['C_PRODUCT_SIZE'];
                $_SESSION['user_cart_product_color'] = $row['C_PRODUCT_COLOR'];
                $_SESSION['user_cart_product_quantity'] = $row['C_PRODUCT_QUANTITY'];
                $_SESSION['user_cart_product_url'] = $row['C_PRODUCT_URL'];
                $_SESSION['user_cart_product_price'] = $row['C_PRODUCT_PRICE'];
                $_SESSION['user_cart_product_buy'] = $row['C_PRODUCT_BUY'];

                $_SESSION['user_cart_product2'] = $row['C_PRODUCT2'];
                $_SESSION['user_cart_product_img2'] = $row['C_PRODUCT_IMAGE2'];
                $_SESSION['user_cart_product_size2'] = $row['C_PRODUCT_SIZE2'];
                $_SESSION['user_cart_product_color2'] = $row['C_PRODUCT_COLOR2'];
                $_SESSION['user_cart_product_quantity2'] = $row['C_PRODUCT_QUANTITY2'];
                $_SESSION['user_cart_product_url2'] = $row['C_PRODUCT_URL2'];
                $_SESSION['user_cart_product_price2'] = $row['C_PRODUCT_PRICE2']; 
                $_SESSION['user_cart_product_buy2'] = $row['C_PRODUCT_BUY2'];

                $_SESSION['user_cart_product3'] = $row['C_PRODUCT3'];
                $_SESSION['user_cart_product_img3'] = $row['C_PRODUCT_IMAGE3'];
                $_SESSION['user_cart_product_size3'] = $row['C_PRODUCT_SIZE3'];
                $_SESSION['user_cart_product_color3'] = $row['C_PRODUCT_COLOR3'];
                $_SESSION['user_cart_product_quantity3'] = $row['C_PRODUCT_QUANTITY3'];
                $_SESSION['user_cart_product_url3'] = $row['C_PRODUCT_URL3'];
                $_SESSION['user_cart_product_price3'] = $row['C_PRODUCT_PRICE3'];
                $_SESSION['user_cart_product_buy3'] = $row['C_PRODUCT_BUY3'];
                
                $_SESSION['user_cart_product4'] = $row['C_PRODUCT4'];
                $_SESSION['user_cart_product_img4'] = $row['C_PRODUCT_IMAGE4'];
                $_SESSION['user_cart_product_size4'] = $row['C_PRODUCT_SIZE4'];
                $_SESSION['user_cart_product_color4'] = $row['C_PRODUCT_COLOR4'];
                $_SESSION['user_cart_product_quantity4'] = $row['C_PRODUCT_QUANTITY4'];
                $_SESSION['user_cart_product_url4'] = $row['C_PRODUCT_URL4'];
                $_SESSION['user_cart_product_price4'] = $row['C_PRODUCT_PRICE4'];
                $_SESSION['user_cart_product_buy4'] = $row['C_PRODUCT_BUY4'];

                $_SESSION['user_cart_product5'] = $row['C_PRODUCT5'];
                $_SESSION['user_cart_product_img5'] = $row['C_PRODUCT_IMAGE5'];
                $_SESSION['user_cart_product_size5'] = $row['C_PRODUCT_SIZE5'];
                $_SESSION['user_cart_product_color5'] = $row['C_PRODUCT_COLOR5'];
                $_SESSION['user_cart_product_quantity5'] = $row['C_PRODUCT_QUANTITY5'];
                $_SESSION['user_cart_product_url5'] = $row['C_PRODUCT_URL5'];
                $_SESSION['user_cart_product_price5'] = $row['C_PRODUCT_PRICE5'];
                $_SESSION['user_cart_product_buy5'] = $row['C_PRODUCT_BUY5'];

                $_SESSION['user_cart_product6'] = $row['C_PRODUCT6'];
                $_SESSION['user_cart_product_img6'] = $row['C_PRODUCT_IMAGE6'];
                $_SESSION['user_cart_product_size6'] = $row['C_PRODUCT_SIZE6'];
                $_SESSION['user_cart_product_color6'] = $row['C_PRODUCT_COLOR6'];
                $_SESSION['user_cart_product_quantity6'] = $row['C_PRODUCT_QUANTITY6'];
                $_SESSION['user_cart_product_url6'] = $row['C_PRODUCT_URL6'];
                $_SESSION['user_cart_product_price6'] = $row['C_PRODUCT_PRICE6'];
                $_SESSION['user_cart_product_buy6'] = $row['C_PRODUCT_BUY6'];

                $_SESSION['user_cart_product7'] = $row['C_PRODUCT7'];
                $_SESSION['user_cart_product_img7'] = $row['C_PRODUCT_IMAGE7'];
                $_SESSION['user_cart_product_size7'] = $row['C_PRODUCT_SIZE7'];
                $_SESSION['user_cart_product_color7'] = $row['C_PRODUCT_COLOR7'];
                $_SESSION['user_cart_product_quantity7'] = $row['C_PRODUCT_QUANTITY7'];
                $_SESSION['user_cart_product_url7'] = $row['C_PRODUCT_URL7'];
                $_SESSION['user_cart_product_price7'] = $row['C_PRODUCT_PRICE7'];
                $_SESSION['user_cart_product_buy7'] = $row['C_PRODUCT_BUY7'];

                $_SESSION['user_cart_product8'] = $row['C_PRODUCT8'];
                $_SESSION['user_cart_product_img8'] = $row['C_PRODUCT_IMAGE8'];
                $_SESSION['user_cart_product_size8'] = $row['C_PRODUCT_SIZE8'];
                $_SESSION['user_cart_product_color8'] = $row['C_PRODUCT_COLOR8'];
                $_SESSION['user_cart_product_quantity8'] = $row['C_PRODUCT_QUANTITY8'];
                $_SESSION['user_cart_product_url8'] = $row['C_PRODUCT_URL8'];
                $_SESSION['user_cart_product_price8'] = $row['C_PRODUCT_PRICE8'];
                $_SESSION['user_cart_product_buy8'] = $row['C_PRODUCT_BUY8'];

                $_SESSION['user_cart_product9'] = $row['C_PRODUCT9'];
                $_SESSION['user_cart_product_img9'] = $row['C_PRODUCT_IMAGE9'];
                $_SESSION['user_cart_product_size9'] = $row['C_PRODUCT_SIZE9'];
                $_SESSION['user_cart_product_color9'] = $row['C_PRODUCT_COLOR9'];
                $_SESSION['user_cart_product_quantity9'] = $row['C_PRODUCT_QUANTITY9'];
                $_SESSION['user_cart_product_url9'] = $row['C_PRODUCT_URL9'];
                $_SESSION['user_cart_product_price9'] = $row['C_PRODUCT_PRICE9'];
                $_SESSION['user_cart_product_buy9'] = $row['C_PRODUCT_BUY9'];

                $_SESSION['user_cart_product10'] = $row['C_PRODUCT10'];
                $_SESSION['user_cart_product_img10'] = $row['C_PRODUCT_IMAGE10'];
                $_SESSION['user_cart_product_size10'] = $row['C_PRODUCT_SIZE10'];
                $_SESSION['user_cart_product_color10'] = $row['C_PRODUCT_COLOR10'];
                $_SESSION['user_cart_product_quantity10'] = $row['C_PRODUCT_QUANTITY10'];
                $_SESSION['user_cart_product_url10'] = $row['C_PRODUCT_URL10'];
                $_SESSION['user_cart_product_price10'] = $row['C_PRODUCT_PRICE10'];
                $_SESSION['user_cart_product_buy10'] = $row['C_PRODUCT_BUY10'];

                header('Location: http://localhost/goldeng/account.php');
                exit();
            } else {
                ?> 
                <div class="r-alert-overlay">
                    <div class="r-alert">
                        <div class="r-alert-message">
                            La contraseña no es correcta, intenta de nuevo por favor.
                        </div>
                        <div class="r-alert-buttons">
                            <a href="./login.php"><button class="r-alert-home">Intentar de nuevo</button></a>
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
                        No existe ningun usuario con este correo electrónico.
                    </div>
                    <div class="r-alert-buttons">
                        <a href="./login.php"><button class="r-alert-accept">Aceptar</button></a>
                        <a href="./index.php"><button class="r-alert-home">Registro</button></a>
                    </div>
                </div>
            </div>
            <?php
        }
    } 
    else 
    {
        ?> 
        <div class="r-alert-overlay">
            <div class="r-alert">
                <div class="r-alert-message">
                    Por favor, asegúrese de rellenar todos los campos requeridos.
                </div>
                <div class="r-alert-buttons">
                    <a href="./login.php"><button class="r-alert-accept">Aceptar</button></a>
                    <a href="./index.php"><button class="r-alert-home">Inicio</button></a>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
