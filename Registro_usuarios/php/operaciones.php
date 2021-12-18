<?php
    require("php/conexion.php");
    class Operaciones{
        private $resultado  = null;

        function __construct(){
            $this -> conexion = new mysqli(SERVIDOR, USUARIO, PW, BD);
        }
        function consultar($consulta){
            return $this->conexion->query($consulta);
        }
        function altaRegistro(){
            $consulta = "INSERT INTO  usuarios (nombre, correo, passwd) VALUES('".$_POST['nombre']."','".$_POST['correo']."','".$_POST['contrasena']."');";
            $this-> consultar($consulta);
            session_start();
            /*$idUsuario = $this ->resultado ->fetch_assoc();*/
           /* $_SESSION['idUsuario'] = 'Juan';
            echo $_SESSION['idUsuario'] .'<br>';
            echo session_id();    */       
        }

    }
?>