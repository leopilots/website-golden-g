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
                $_SESSION['user_id'] = $row['ID']; // Guarda el ID del usuario en la sesión
                $_SESSION['user_email'] = $row['EMAIL']; // Guarda el email del usuario en la sesión
                header('Location: ./account.php'); // Redirige a la página principal de usuario
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
