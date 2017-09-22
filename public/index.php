<?php
require_once '../src/app/db/mysql.php';
require_once '../src/models/user.php';
use Models\User;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>
<body>
    <div style="width:300px">
        <form action="#" id="loginform" method="post">
            <fieldset >
                <legend>Login From</legend>
            <div>
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario">
            </div>
            <div>
                <label for="passwd">Contraseña:</label>
                <input type="text" name="passwd" id="passwd">
            </div>
                </form>
                <div>
                    <a href="remember.php">olvidaste tu contraseña?</a>
                </div>
                <button type"submit">Iniciar sesion </button>
                <hr>
                ¿No tienes una cuenta?
                <a href="signup.php"> Registrate aqui</a>
            </fieldset>
        
    </div>
</body>
</html>