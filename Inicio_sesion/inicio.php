<?php
    require("php/conexion.php");
    $conexion = new mysqli(SERVIDOR, USUARIO, PW, BD);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Inicio</title>
</head>
<body>
    <header></header>
    <main>
        <form action="" class="form-login">
            <h5>Login</h5>
            <input class="controles" type="text" name="usuario" value="" placeholder="Usuario">
            <input class="controles" type="password" name="contrasena" value="" placeholder="Contraseña">
            <input class="botones" type="submit" name="" value="Ingresar">
            <div id="div-a"><a href="php/crearRegistro.php">Crear cuenta</a></div>
        </form>
    </main>    
</body>
</html>