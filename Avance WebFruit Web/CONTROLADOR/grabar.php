<?php
require_once("../MODELO/Album.php");
require_once("../MODELO/Artista.php");
require_once("../MODELO/TeamModel.php");
require_once("../MODELO/Cancion.php");


if(isset($_POST["nAlbum"])){
//PARA LA IMAGEN
    $nombreImg = $_FILES["imgAlbum"]["name"];
    $tipoImg = $_FILES["imgAlbum"]["type"];
    $sizeImg = $_FILES["imgAlbum"]["size"];

    var_dump($tipoImg);

    $carpetaDestino=$_SERVER["DOCUMENT_ROOT"]."/Repositorio-Grupo4-2DAW-WEBFRUITSTUDIO-VINILGOATS/Avance WebFruit Web/IMG/VINILOS/";

    move_uploaded_file($_FILES["imgAlbum"]["tmp_name"],$carpetaDestino.$nombreImg);

    //PARA LOS DATOS
    $nombre = $_POST["nAlbum"];
    $autor = $_POST["autor"];
    $anio = $_POST["anio"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    $horas = $_POST["horas"];
    $minutos = $_POST["minutos"];
    $segundos = $_POST["segundos"]; 
    $duracion = date ("$horas:$minutos:$segundos");


    $album = new Album("",$nombre,$autor,$precio,$stock,$nombreImg,$anio,$duracion);

    if(TeamModel::comprobacion($album)){
        TeamModel::grabarAlbum($album);
        header("Location: ../VISTA/InterfazAdministrador.php");
    }else{
        TeamVista::insercionRepetida();
    }
    

}elseif(isset($_POST["nArtista"])){
    $nombreArtista = $_POST["nArtista"];
    $descripcion = $_POST["descripcion"];

    $artista = new Artista("",$nombreArtista,$descripcion);
    TeamModel::grabarArtista($artista);

    header("Location: ../VISTA/InterfazAdministrador.php");
}elseif($_POST["nCancion"]){
    
    $nombre = $_POST["nCancion"];
    $album = $_POST["album"];   
    $posicion = $_POST["posicion"];

    $horas = $_POST["horas"];
    $minutos = $_POST["minutos"];
    $segundos = $_POST["segundos"]; 

    $duracion = date("$horas:$minutos:$segundos");

    $cancion = new Cancion("",$album,$nombre,$duracion,$posicion);
    TeamModel::grabarCancion($cancion);
    header("Location: ../VISTA/InterfazAdministrador.php");
}


?>