<?php
require_once("../MODELO/TeamModel.php");

class TeamVista{
    
    
    public function __construct() {
    }
    //METODOS PARA LA PAGINA WEB
    public static function imprimirFilaAlbum($listaAlbumes){     
        //Este método trae imprime por parametro un array de la lista de álbumes que haya en la base de datos
        //Luego los mete en cajas con sus respectivos precios, y autores musicales.
        $ret='<div class="container-group row container-vinilos mt-1">';
        $i = 0;
        foreach ($listaAlbumes as $album){
            $artista = TeamModel::getArtista($album->getIdArtista());
            $i++;
            
            $ret.='<div class="container-fluid col-3">
                        <div class="bg-dark text-light rounded align-items-center p-4">
                            <img class=" col-12 rounded" src="../IMG/VINILOS/'.$album->getUrlImagen().'"  alt="Vinilo '.$i.'"/>
                                <a class="link-warning text-light text-decoration-none display fw-bold" href="./infoDiscos.html">'.$artista->getNombre().'</a>
                                <p class="fw-light">'.$album->getNombre().'</p>
                                <p class="">Precio: '.$album->getPrecio().' €</p>
                                <button class="btn btn-primary btn-add-cart">Añadir al carrito</button>
                        </div>
                    </div>
            ';
        }
        $ret.='</div>';
        return $ret;
    }    

    //METODOS PARA EL CRUD

    public static function imprimirTipoInsercion($tipoInsercion){
        $ret="<form method='POST' action='../CONTROLADOR/grabar.php'>";
        if($tipoInsercion=="album"){
            $ret.='
                <div class="container-fluid row text-light ml-2 col-6">
                    <div class="input-group m-1">
                        <span class="input-group-text">Nombre del Album:</span  >
                        <input class="form-control" type="text"/>
                    </div>
                <div class="input-group m-1">
                    <span class="input-group-text">Autor del album:</span>
                    <select class="form-select" name="autor" required>
                    <option disabled hidden selected>Selecciona un Artista</option>
        ';
        foreach(TeamModel::getListaArtistas() as $artista){
            $ret.='<option value="'.$artista->getId().'">'.$artista->getNombre().'</option>';
        }
                    
            
                $ret.='
                    </select>
                    </div>
                    <div class="input-group m-1">
                        <span class="input-group-text">Año de publicación:</span>
                        <input class="form-control" name="anio" type="number" min="1900" max="2090" required/>
                    </div>
                     
                    <div class="input-group m-1">
                        <span class="input-group-text">Precio:</span>
                        <input class="form-control" name="precio" type="number" step="0.01" min="1" max="1000" required/>
                    </div>

                    <div class="input-group m-1">
                        <span class="input-group-text">Stock:</span>
                        <input class="form-control" name="stock" type="number" min="0" max="100" required/>
                    </div>

                    <div class="input-group m-1">
                        <span class="input-group-text">Duracion:</span>
                        <input class="form-control" placeholder="horas" name="horas" type="number" min="0" max="1000" required/>     
                        <input class="form-control" placeholder="minutos" name="minutos" type="number" min="0" max="59" required/>
                        <input class="form-control" placeholder="segundos" name="segundos" type="number" min="0" max="59" required/>
                    </div>

                    <div class="input-group m-1">
                        <span class="input-group-text">Imagen del Album:</</span>
                        <input name="imgAlbum" type="file" required>
                    </div>
            <div>
            ';

            
        }elseif($tipoInsercion=="cancion"){

        }elseif($tipoInsercion=="artista"){

        }else{
            $ret.="<h2>No se ha encontrando el tipo de insercion que se quiere hacer</h2>";
        }

        $ret.="</form>";
        return $ret;
    }


}
?>

