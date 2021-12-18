<?php
    require("php/conexion.php");
    class Operaciones{
        
        function __construct(){
            $this -> conexion = new mysqli(SERVIDOR, USUARIO, PW, BD);
        }
        function consultar($consulta){
            return $this->conexion->query($consulta);
        }
        function altaRegistro(){
            $consulta = "INSERT INTO  usuarios (nombre, correo, passwd) VALUES('".$_POST['nombre']."','".$_POST['correo']."','".$_POST['contrasena']."');";
            $this-> consultar($consulta);           
        }
        
    }
?>