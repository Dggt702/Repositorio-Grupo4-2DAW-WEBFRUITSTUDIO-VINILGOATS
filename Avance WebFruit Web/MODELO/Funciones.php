<?php
require_once "Usuarios.php";
require_once "BBDD.php";
class Funciones extends BBDD{

    public function __construct() {
        parent::__construct();
    }

    public function grabar($usuario){
        $sql = "INSERT INTO usuarios(nombre,correo,contraseña,sexo,fecha_de_nacimiento,direccion,pais,DNI,tarjeta_de_credito,notificaciones,revista_digital) 
        VALUES('".$usuario->getNombre()."',
        '".$usuario->getCorreo()."',
        '".$usuario->getContraseña()."',
        '".$usuario->getSexo()."',
        '".$usuario->getFechaDeNacimiento()."',
        '".$usuario->getDireccion()."',
        '".$usuario->getPais()."',
        '".$usuario->getDni()."',
        '".$usuario->getTarjetaDeCredito()."',
        '".$usuario->getNotificaciones()."',
        '".$usuario->getRevistaDigital()."')";

        $resul=$this->mysql->query($sql);
        $ret=true;
        return $ret;

       

    }


    

}

?>