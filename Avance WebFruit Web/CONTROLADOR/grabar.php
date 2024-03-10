<?php
require_once("../MODELO/Album.php");
require_once("../MODELO/TeamModel.php");


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
    TeamModel::grabarAlbum($album);

    header("Location: ../VISTA/InterfazAdministrador.php");

}elseif($_POST["nArtista"]){
    $nombreArtista = $_POST["nArtista"];
    $descripcion = $_POST["descripcion"];


    header("Location: ../VISTA/InterfazAdministrador.php");
}elseif($_POST["nCancion"]){
    
}


?>