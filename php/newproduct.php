<?php 
include("con_db.php");

if(isset($_POST['createproduct']))  
{
    if(strlen($_POST['name']) >= 1 && strlen($_POST['image1']) >= 1 && strlen($_POST['description'])) 
    {
        $name = trim($_POST['name']);
        $section = trim($_POST['section']);
        $image1 = trim($_POST['image1']);
        $image2 = trim($_POST['image2']);
        $image3 = trim($_POST['image3']);
        $description = trim($_POST['description']);
        $size_xs = trim($_POST['xs']);
        $size_s = trim($_POST['s']);
        $size_m = trim($_POST['m']);
        $size_l = trim($_POST['l']);
        $size_xl = trim($_POST['xl']);
        $stock = $size_xs + $size_s + $size_m + $size_l + $size_xl;
        $price = trim($_POST['price']);
        $white = trim($_POST['WHITE']);
        $black = trim($_POST['BLACK']);
        $blue = trim($_POST['BLUE']);
        $red = trim($_POST['RED']);
        $brown = trim($_POST['BROWN']);
        $gray = trim($_POST['GRAY']);
        $green = trim($_POST['GREEN']);
        $orange = trim($_POST['ORANGE']);
        $pink = trim($_POST['PINK']);
        $yellow = trim($_POST['YELLOW']);
        $provider = trim($_POST['provider']);

        // Comprobar si el nombre del producto ya existe
        $stmt = $conex->prepare("SELECT COUNT(*) FROM products WHERE NAME = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 0) {
            // Si el producto ya existe, mostrar mensaje de error
            ?> 
            <div class="r-alert-overlay">
                <div class="r-alert">
                    <div class="r-alert-message">
                        No se pudo completar el registro del producto. Ya existe un producto con ese nombre.
                    </div>
                    <div class="r-alert-buttons">
                       <a href="http://localhost/goldeng/admin/createproduct.php"><button class="r-alert-home">Aceptar</button></a>
                    </div>
                </div>
            </div>
            <?php
        } else {
            // Si el producto no existe, proceder con la inserción
            $consulta = "INSERT INTO products(NAME, SECTION, IMAGE, IMAGE2, IMAGE3, DESCRIPTION, STOCK, SIZE_XS, SIZE_S, SIZE_M, SIZE_L, SIZE_XL, PRICE, WHITE, BLACK, BLUE, RED, BROWN, GRAY, GREEN, ORANGE, PINK, YELLOW, PROVIDER) 
            VALUES ('$name', '$section', '$image1', '$image2', '$image3', '$description', '$stock', '$size_xs', '$size_s', '$size_m', '$size_l', '$size_xl', '$price', '$white', '$black', '$blue', '$red', '$brown', '$gray', '$green', '$orange', '$pink', '$yellow', '$provider')";
            $resultado = mysqli_query($conex, $consulta);

            if($resultado) {
                // duplica y crear un archivo nuevo (revisar)
                $stmt = $conex->prepare("SELECT ID FROM products WHERE NAME = ?");
                $stmt->bind_param("s", $name);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();
                $productID = $row['ID'];

                $archivoOrigen = '../product/1.php';
                $archivoDestino = '../product/' . $productID . '.php';

                if (file_exists($archivoOrigen)) {
                    if (copy($archivoOrigen, $archivoDestino)) {
                        ?> 
                        <div class="r-alert-overlay">
                            <div class="r-alert">
                                <div class="r-alert-message">
                                    El producto <?php echo htmlspecialchars($_POST['name']);?> se creó correctamente.
                                </div>
                                <div class="r-alert-buttons">
                                    <?php
                                    if($section == 2) {
                                    ?> <a href="http://localhost/goldeng/products-female.php"><button class="r-alert-accept">Aceptar</button></a> <?php }
                                    else {
                                        ?> <a href="http://localhost/goldeng/products-male.php"><button class="r-alert-accept">Aceptar</button></a> <?php    
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        exit();
                    }
                }
            } else {
                ?> 
                <div class="r-alert-overlay">
                    <div class="r-alert">
                        <div class="r-alert-message">
                            Error: Ha ocurrido un problema. Por favor, inténtelo de nuevo más tarde.
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
    else  {
        ?> 
        <div class="r-alert-overlay">
            <div class="r-alert">
                <div class="r-alert-message">
                    No se pudo completar el registro del producto. Por favor, asegúrese de rellenar todos los campos requeridos.
                </div>
                <div class="r-alert-buttons">
                    <a href="http://localhost/goldeng/admin/createproduct.php"><button class="r-alert-home">Aceptar</button></a>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
