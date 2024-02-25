<?php
    require_once "../MODELO/logInUsuarios.php";

    $usuarioLogeado=LogInUsuarios::usuarioRegistrado($_POST['Correo'],$_POST['Contraseña']);

    if($usuarioLogeado!=null){
        session_start();
        $_SESSION['usuarioLogeado']=$usuarioLogeado;
        header("Location:../VISTA/page2.php");
    }else{
        header("Location:../VISTA/landingPage.html");
    }

