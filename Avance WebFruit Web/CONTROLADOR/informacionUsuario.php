<?php

require_once "../MODELO/logInUsuarios.php";
$informacionUsuario=LogInUsuarios::mostrarInformacionUsuario($_SESSION["usuarioLogeado"]);
