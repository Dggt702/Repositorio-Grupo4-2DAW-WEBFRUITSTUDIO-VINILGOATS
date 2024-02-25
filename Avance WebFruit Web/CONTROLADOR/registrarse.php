<?php

require_once "../MODELO/Usuarios.php";
require_once "../MODELO/TeamModel.php";

if (isset($_POST["submit"])){
    $nombre = $_POST["cNombre"];
    $correo = $_POST["campoCorreo"];
    $contraseña = $_POST["campoContraseña"];

    if(isset($_POST["numTarjeta"])){
        
        $sexo = $_POST["sexo"];
        $fechaNacimiento = $_POST["fechaNacimiento"];
        $direccion = $_POST["direccion"];
        $pais = $_POST["pais"];
        $dni = $_POST["dni"];
        $numTarjeta = $_POST["numTarjeta"];
        $notificaciones = isset($_POST["notificaciones"]) ? ($_POST["notificaciones"] == 1) : false;
        $revistaDigital = isset($_POST["revistaDigital"]) ? ($_POST["revistaDigital"] == 1) : false;
     
        $usuario = new Usuario($nombre, $correo, $contraseña, $sexo, $fechaNacimiento, $direccion, $pais, $dni, $numTarjeta, $notificaciones, $revistaDigital);
    } else {
    
        $usuario = new Usuario($nombre, $correo, $contraseña);
    }

    if(TeamModel::grabar($usuario)){
        header("Location: ../VISTA/page2.html");
    }
}


    
?>