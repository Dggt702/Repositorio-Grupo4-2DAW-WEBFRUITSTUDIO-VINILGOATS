<?php
require_once "Usuarios.php";
require_once "Artista.php";
require_once "BBDD.php";
require_once "Album.php";

class TeamModel extends BBDD{

    public function __construct() {
        parent::__construct();
    }
// ============================
//OBTENER DE LA BASE DE DATOS
// ============================
    public static function getListaPaises(){
        $listaPaises = array();
        $sql = "SELECT * FROM paises";
        $resul = $this->mysql->query($sql);
        while($fila =$resul->fetch_row()){
            array_push($listaPaises,new Pais($fila[0]));
        }
        return $listaPaises; 
    
    }
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
    public static function getAlbum($id){
        $conn = BBDD::conectar();
        $stmt = $conn->prepare("SELECT * FROM albumes WHERE id_album = :id");
        $album = null;

        
        $stmt->bindParam(":id",$id);

        if($stmt->execute()){
            $fila = $stmt->fetch(PDO::FETCH_ASSOC);

            if($fila){
               $album = new Album($fila['id_album'],$fila['nombre'],$fila['id_artista'],$fila['precio'],$fila['stock'],$fila['imagen'],$fila['anio'],$fila['duracion']);
            }  
        }
        return $album;
    }

    public static function getArtista($id){
            $conn = BBDD::conectar();
            $stmt = $conn->prepare("SELECT * FROM artistas WHERE id_artista = :id");
            $stmt->bindParam(':id', $id);
            $artista=null;
            
            if($stmt->execute()){
                $fila = $stmt->fetch(PDO::FETCH_ASSOC);
                if($fila){
                    $artista = new Artista($fila['id_artista'],$fila['nombre'], $fila['descripcion']); 
                }
            }

            return $artista;
    }

    public static function getListaArtistas(){
        $listaArtistas= array();
        $conn = BBDD::conectar();
        $stmt = $conn->prepare("SELECT * FROM artistas");

        if($stmt->execute()){
            while($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
                array_push($listaArtistas,new Artista($fila['id_artista'],$fila['nombre'], $fila['descripcion']));
            }
        }

        return $listaArtistas;
    }

//===========================
//GRABAR EN LA BASE DE DATOS
//===========================
    public static function grabarUsuario($usuario){
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

    public static function grabarAlbum($album){
        $conn = BBDD::conectar();
        $ret = false;
        $sql = "INSERT INTO albumes(nombre, id_artista, precio, stock, anio, duracion, imagen) VALUES(:nombre, :id_artista, :precio, :stock, :anio, :duracion, :imagen)";
        $stmt = $conn->prepare($sql);

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

    public static function grabarArtista($artista){
        $conn = BBDD::conectar();
        $ret = false;

        $sql = "INSERT INTO artistas(nombre, descripcion) VALUES(:nombre, :descripcion)";
        $stmt = $conn->prepare($sql);

        $nombre = $artista->getNombre();
        $descripcion = $artista->getDescripcion();
  
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":descripcion",$descripcion);
      
        if($stmt->execute()){
            $ret = true;
        }
            return $ret;

    }

    public static function grabarCancion($cancion){
        $conn = BBDD::conectar();
        $ret = false;
        
        $sql = "INSERT INTO canciones(id_album,duracion,num_pista,nombre) VALUES(:id_album,:duracion,:num_pista,:nombre)";
        $stmt = $conn->prepare($sql);

        $nombre = $cancion->getNombre();
        $id_album = $cancion->getId_album();
        $duracion = $cancion->getDuracion();
        $num_pista = $cancion->getNum_pista();
  
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":id_album",$id_album);
        $stmt->bindParam(":num_pista",$num_pista);
        $stmt->bindParam(":duracion",$duracion);
        
        if($stmt->execute()){
            $ret = true;
        }
            return $ret;

    }

//===========================
// MÉTODOS DE COMPROBACIÓN
//===========================

public static function comprobacion($objeto){
    $ret = true;

    if($objeto instanceof Album){
        foreach(self::getListaAlbumes() as $album){
            if($objeto->getNombre() == $album->getNombre()){
                $ret=false;
            }
        }
    }elseif($objeto instanceof Cancion){

    }elseif($objeto instanceof Artista){

    }

    return $ret;
}


}

?>