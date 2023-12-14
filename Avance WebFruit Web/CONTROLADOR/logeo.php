<?php

require_once "../MODELO/Usuarios.php";
require_once "../MODELO/Funciones.php";

if (isset($_POST["submit"])){

    $nombre=$_POST["cNombre"];
    $correo=$_POST["campoCorreo"];
    $contraseña=$_POST["campoContraseña"];
    

    if (isset($_POST["sexo"])){
    
    $sexo=$_POST["sexo"];
    $fechaNacimiento=$_POST["fechaNacimiento"];
    $direccion=$_POST["direccion"];
    $pais=$_POST["pais"];
    $dni=$_POST["dni"];
    $numTarjeta=$_POST["numTarjeta"];
    
    $notificaciones=$_POST["notificaciones"];
    if($notificaciones==0){
        $notificaciones=true;
    }else{
        $notificaciones=false;
    }

    $revistaDigital=$_POST["revistaDigital"];
    if($revistaDigital==0){
        $revistaDigital=true;
    }else{
        $revistaDigital=false;
    }
    
        $usuario= new Usuario($nombre,$correo,$contraseña,$sexo,$fechaNacimiento,$direccion,$pais,$dni,$numTarjeta,$notificaciones,$revistaDigital);
    
    }else{
        $usuario= new Usuario($nombre,$correo,$contraseña);
    }  

    $proceso = new Funciones();
    $proceso->grabar($usuario);
    header ("Location: ../VISTA/landingPage.html");
}

?>