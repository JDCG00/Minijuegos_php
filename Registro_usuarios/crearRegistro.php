<?php
    require("conexion.php");
    $conexion = new mysqli(SERVIDOR, USUARIO, PW, BD);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Inicio</title>
</head>
<body>
    <header></header>
    <main>
        <form action="" class="form-login">
            <h5>Registro</h5>
            <input class="controles" type="email" name="correo" placeholder="Correo">
            <input class="controles" type="text" name="usuario" placeholder="Usuario">
            <input class="controles" type="password" name="contrasena" placeholder="Contraseña">
            <input class="controles" type="password" name="repetirContra" placeholder="Repita contraseña">
            <input class="botones" type="submit" name="" value="Registrar">
            <div id="div-a"><a href="../inicio.php">Inicio</a></div>                        
        </form>
    </main>    
</body>
</html>
<?php

?>