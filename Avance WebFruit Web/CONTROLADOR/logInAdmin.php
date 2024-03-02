<?php

    require_once "../MODELO/logInUsuarios.php";
    
    if(isset($_POST['correoAdmin']) && isset($_POST['passwordAdmin'])){
        $usuarioAdmin=LogInUsuarios::logInAdmin($_POST['correoAdmin'],$_POST['passwordAdmin']);
        
        if($usuarioAdmin!=null){
            session_start();
            $_SESSION["usuarioAdmin"]=$usuarioAdmin;
            header("Location:../VISTA/page2Administrador.php");
        }else{
            header("Location:../VISTA/logInAdministrador.php");
        }
    
    
    
    
    }   