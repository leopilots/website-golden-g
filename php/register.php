<?php 
include("con_db.php");

if(isset($_POST['register'])) 
{
    if(strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1) 
    {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);

        // Verificar si el correo ya existe
        $email = mysqli_real_escape_string($conex, $email);
        $sql = "SELECT * FROM users WHERE EMAIL = '$email'";
        $result = mysqli_query($conex, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            // Si el correo ya existe, mostrar un mensaje de error
            ?> 
            <div class="r-alert-overlay">
                <div class="r-alert">
                    <div class="r-alert-message">
                        Error: Este correo electrónico ya está siendo utilizado.
                    </div>
                    <div class="r-alert-buttons">
                        <a href="./singin.php"><button class="r-alert-home">Intentar de nuevo</button></a>
                    </div>
                </div>
            </div>
            <?php
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $consulta = "INSERT INTO users(EMAIL, PASSWORD, NAME, LASTNAME) VALUES ('$email', '$hashedPassword', '$name', '$lastname')";
            $resultado = mysqli_query($conex, $consulta);

            if($resultado) {
                header('Location: ./index.php');
                exit();
            } else {
                // Manejo de error en la inserción
                ?> 
                <div class="r-alert-overlay">
                    <div class="r-alert">
                        <div class="r-alert-message">
                            Error: Ha ocurrido un problema. Por favor, inténtelo de nuevo más tarde.
                        </div>
                        <div class="r-alert-buttons">
                            <a href="./singin.php"><button class="r-alert-accept">Aceptar</button></a>
                            <a href="./index.php"><button class="r-alert-home">Inicio</button></a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    }   
    else  {
        // Mensaje de error si no se llenan todos los campos
        ?> 
        <div class="r-alert-overlay">
            <div class="r-alert">
                <div class="r-alert-message">
                    Registro fallido: No se pudo completar el registro. Por favor, asegúrese de rellenar todos los campos requeridos.
                </div>
                <div class="r-alert-buttons">
                    <a href="./singin.php"><button class="r-alert-accept">Aceptar</button></a>
                    <a href="./index.php"><button class="r-alert-home">Inicio</button></a>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
