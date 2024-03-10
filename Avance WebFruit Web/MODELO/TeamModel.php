<?php
require_once "Usuarios.php";
require_once "Artista.php";
require_once "BBDD.php";

class TeamModel extends BBDD{

    public function __construct() {
        parent::__construct();
    }

    public static function grabar($usuario){
        $conn = BBDD::conectar();
        $stmt = $conn->prepare("INSERT INTO usuarios(nombre,correo,contraseña,sexo,fecha_de_nacimiento,direccion,pais,DNI,tarjeta_de_credito,notificaciones,revista_digital) 
        VALUES(:nombre,:correo,:pass,:sexo,:fNacimiento,:direccion,:pais,:dni,:tarjetaDeCredito,:notificaciones,:revista)");
        
        $nombre = $usuario->getNombre();
        $correo = $usuario->getCorreo();
        $contraseña = $usuario->getContraseña();
        $sexo = $usuario->getSexo();
        $fNacimiento = $usuario->getFechaDeNacimiento();
        $direccion =  $usuario->getDireccion();
        $pais = $usuario->getPais();
        $dni = $usuario->getDni();
        $tarjetaDeCredito = $usuario->getTarjetaDeCredito();
        $notificaciones = $usuario->getNotificaciones();
        $revista = $usuario->getRevistaDigital();

        $stmt->bindParam(':nombre',$nombre);
        $stmt->bindParam(':correo',$correo);
        $stmt->bindParam(':pass',$contraseña);
        $stmt->bindParam(':sexo',$sexo);
        $stmt->bindParam(':fNacimiento',$fNacimiento);
        $stmt->bindParam(':direccion',$direccion);
        $stmt->bindParam(':pais',$pais);
        $stmt->bindParam(':dni',$dni);
        $stmt->bindParam(':tarjetaDeCredito',$tarjetaDeCredito);
        $stmt->bindParam(':notificaciones',$notificaciones);
        $stmt->bindParam(':revista',$revista);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public static function getListaPaises(){
        $listaPaises = array();
        $sql = "SELECT * FROM paises";
        $resul = $this->mysql->query($sql);
        while($fila =$resul->fetch_row()){
            array_push($listaPaises,new Pais($fila[0]));
        }
        return $listaPaises; 
    
    }
/*
    public static function getListaUsuarios(){
        $listaUsuarios = array();
            $sql = "SELECT * FROM usuarios";
            $resul = $this->mysql->query($sql);
            while($fila =$resul->fetch_row()){
                array_push($this->listaUsuarios,new Usuario($fila[0],$fila[1],$fila[2],$fila[3],$fila[4],$fila[5],$fila[6],$fila[7],$fila[8],$fila[9],$fila[10]));
            }
            return $listaUsuarios; 
    }
*/
    public static function getListaAlbumes(){
        $listaAlbumes = array();
        $conn = BBDD::conectar();        
        $stmt = $conn->prepare("SELECT * FROM albumes");

        if($stmt->execute()){
            while($fila= $stmt->fetch(PDO::FETCH_ASSOC)){
                array_push($listaAlbumes,new Album($fila['id_album'],$fila['nombre'],$fila['id_artista'],$fila['precio'],$fila['stock'],$fila['imagen'],$fila['anio'],$fila['duracion']));
            }
        }
            return $listaAlbumes; 
    }

    public static function getArtista($id){
            $conn = BBDD::conectar();
            $stmt = $conn->prepare("SELECT * FROM artistas WHERE id_artista = :id");
            $stmt->bindParam(':id', $id);
            
            if($stmt->execute()){
                $fila = $stmt->fetch(PDO::FETCH_ASSOC);
                $artista = new Artista($fila['nombre'], $fila['id_artista'], $fila['descripcion']); 
            }

            return $artista;
    }

    public static function getListaArtistas(){
        $listaArtistas= array();
        $conn = BBDD::conectar();
        $stmt = $conn->prepare("SELECT * FROM artistas");

        if($stmt->execute()){
            while($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
                array_push($listaArtistas,new Artista($fila['nombre'], $fila['id_artista'], $fila['descripcion']));
            }
        }

        return $listaArtistas;
    }

    public static function grabarAlbum($album){
        $conn = BBDD::conectar();
        $ret = false;
        $sql = "INSERT INTO albumes(nombre, id_artista, precio, stock, anio, duracion, imagen) VALUES(:nombre, :id_artista, :precio, :stock, :anio, :duracion, :imagen)";
        $stmt = $conn->prepare($sql);

        $relacionidAlbum = $conn->prepare("INSERT INTO artista/album(id_album,id_artista) VALUES(:idAlbum,:idArtista)");

        $nombre = $album->getNombre();
        $idArtista = $album->getIdArtista();
        $precio = $album->getPrecio();
        $stock = $album->getStock();
        $anio = $album->getAnio();
        $duracion = $album->getDuracion();
        $imagen = $album->getImagen();
  

        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":id_artista",$idArtista);
        $stmt->bindParam(":precio",$precio);
        $stmt->bindParam(":stock",$stock);
        $stmt->bindParam(":anio",$anio);
        $stmt->bindParam(":duracion",$duracion);
        $stmt->bindParam(":imagen",$imagen);
   

        if($stmt->execute()){
            $ret = true;
        }
            return $ret;

    }

}

?>