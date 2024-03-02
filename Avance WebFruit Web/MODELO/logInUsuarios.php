<?php
    require_once "BBDD_PDO.php";
    class LogInUsuarios{

    public static function usuarioRegistrado($user,$password){
            
        $conexion=BBDD_PDO::conectar();

        $sql="select * from usuarios where correo=:correo and contraseña=:password";
        $stmt=$conexion->prepare($sql);
        $correoConSignos=htmlentities(addslashes($user));
        $stmt->bindParam(":correo",$correoConSignos);
        $stmt->bindParam(":password",$password);
        $stmt->execute();
        $exist=$stmt->rowCount();
        

        if($exist!=0){
            session_start();
            return $user;
        }else{
            return null;
        }
        
    }

    public static function mostrarInformacionUsuario($correo){
            
        $conexion=BBDD_PDO::conectar();

        $sql="select nombre,correo,sexo,fecha_de_nacimiento,direccion,pais,DNI,tarjeta_de_credito from usuarios where correo=:correo";
        $stmt=$conexion->prepare($sql);
        $stmt->bindParam(":correo",$correo);
        if($stmt->execute()){
            $resultados=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        }  
    }

    public static function logInAdmin($email,$password){

        $conexion=BBDD_PDO::conectar();

        $sql="select * from adminLogin where email= :email and password= :password";
        $stmt=$conexion->prepare($sql);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":password",$password);
        $stmt->execute();
        $existe=$stmt->rowCount();

        if($existe!=0){
            session_start();
            return $email;
        }else{
            return null;
        }


    }

    public static function mostrarInformacionAdmin($email){
            
        $conexion=BBDD_PDO::conectar();

        $sql="select id,nombre, email from adminlogin where email=:email";
        $stmt=$conexion->prepare($sql);
        $stmt->bindParam(":email",$email);
        if($stmt->execute()){
            $resultados=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        }  
    }






 }