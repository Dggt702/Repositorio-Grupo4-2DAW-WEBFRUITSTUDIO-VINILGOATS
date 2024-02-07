<?php
require_once "Usuarios.php";
require_once "BBDD.php";

class TeamModel extends BBDD{

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

    public function getListaPaises(){
        $listaPaises = array();
        $sql = "SELECT * FROM paises";
        $resul = $this->mysql->query($sql);
        while($fila =$resul->fetch_row()){
            array_push($listaPaises,new Pais($fila[0]));
        }
        return $this->getListaPaises; 
    
    }

    public function getListaUsuarios(){
        $listaUsuarios = array();
            $sql = "SELECT * FROM usuarios";
            $resul = $this->mysql->query($sql);
            while($fila =$resul->fetch_row()){
                array_push($this->listaUsuarios,new Usuario($fila[0],$fila[1],$fila[2],$fila[3],$fila[4],$fila[5],$fila[6],$fila[7],$fila[8],$fila[9],$fila[10]));
            }
            return $this->listaUsuarios; 
    }

    public function getArtista($id){
        $sql = "SELECT * FROM artistas WHERE id=".$id."";
        $resul = $this->mysql->query($sql);
        $fila =$resul->fetch_row()
        $artista=new Usuario($fila[0],$fila[1],$fila[2],$fila[3],$fila[4],$fila[5],$fila[6],$fila[7],$fila[8],$fila[9],$fila[10]));
        return $artista; 
    }


    

}

?>