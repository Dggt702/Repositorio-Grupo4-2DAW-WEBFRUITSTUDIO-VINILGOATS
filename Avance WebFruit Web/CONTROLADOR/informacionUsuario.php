<?php

require_once "../MODELO/logInUsuarios.php";
if(isset($_SESSION["usuarioLogeado"])){
    $informacionUsuario=LogInUsuarios::mostrarInformacionUsuario($_SESSION["usuarioLogeado"]);
}elseif(isset($_SESSION["usuarioAdmin"])){
    $informacionUsuario=LogInUsuarios::mostrarInformacionAdmin($_SESSION["usuarioAdmin"]);
}
