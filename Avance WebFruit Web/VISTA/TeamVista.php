<?php
require_once("../MODELO/TeamModel.php");
require_once("../MODELO/Album.php");

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
            
            $ret.='<div class="container-fluid col-lg-3 col-sm-4 col-6 mb-4 mt-2">
                        <div class="bg-dark text-light rounded align-items-center p-4 row-product">
                            <img class=" col-12 rounded" src="../IMG/VINILOS/'.$album->getImagen().'"  alt="Vinilo '.$i.'"/>
                                <a class="link-warning text-light text-decoration-none display fw-bold" href="./info.php?idAlbum='.$album->getId().'">'.$album->getNombre().'</a>
                                <h6 class="fw-light">'.$artista->getNombre().'</h6>
                                <p class="">'.$album->getPrecio().' €</p>
                                <button class="btn btn-primary btn-add-cart">Añadir al carrito</button>
                        </div>
                    </div>
            ';
        }
        $ret.='</div>';
        return $ret;
    }    

    public static function informacionDelAlbum($id){
        //Lo que hace este método es imprimir la información de acuerdo a la id del álbum que recibe por parámetro
        //Para mostrar toda la información de la base de datos.
        $album = TeamModel::getAlbum($id);



        if($album==null){
            $rend = '
            <div class="d-flex justify-content-center">
                <div class="bg-dark col-6 alert alert-success mt-5 justify-content-center text-light" role="alert">
                    <h4 class="alert-heading text-center">ALBUM NO ENCONTRADO</h4>
                    <p class="alert-heading text-center">A menos que seas un viajero en el tiempo, todavía no hay un album con esa "id"</p>
                    <hr>
                    <p class="alert-heading text-center">Intenta introducir un álbum válido</p>
                </div>
            </div>';

        }else{
            $artista = TeamModel::getArtista($album->getIdArtista());
            $nombreArtista=$artista->getNombre(); 
            $rend ='
            <div class="row justify-content-center align-items-center mt-5">
            <div class="col-4">
                <img class="w-100 rounded border border-light" src="../IMG/VINILOS/'.$album->getImagen().'" alt="">
            </div>
            <div class="col-7">
                <p class="display-4 fw-bold text-center text-warning">'.$album->getNombre().'-'.$nombreArtista.'</p>
                <table class="table table-dark table-hover ">
                    <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Duración</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            </tr>
                          
                            
                        </tbody>
                    </table>
                </div>
            </div>        
            '; 
        }

        return $rend;
    }

    //METODOS PARA EL CRUD

    public static function imprimirTipoInsercion($tipoInsercion){
        $ret="<form method='POST' action='../CONTROLADOR/grabar.php' enctype='multipart/form-data'>";
        if($tipoInsercion=="album"){
            $ret.='
                <div class="container-fluid row text-light ml-2 col-6">
                    <div class="input-group m-1">
                        <span class="input-group-text">Nombre del Album:</span  >
                        <input class="form-control" name="nAlbum" type="text"/>
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
            $ret.=' <div class="container-fluid row text-light ml-2 col-6">
            <div class="input-group m-1">
                <span class="input-group-text">Nombre del Artista:</span  >
                <input class="form-control" name="nArtista" type="text"/>
            </div>
            <div class="input-group m-1">
                <span class="input-group-text">Descripcion:</span  >
                <input class="form-control" name="descripcion" type="text"/>
            </div>
            ';

        }else{
            $ret.="<h2>No se ha encontrando el tipo de insercion que se quiere hacer</h2>";
        }
        $ret.='<div class="input-group m-1">
        <input class="btn btn-warning" name="submitForm" type="submit"/>
        </div>';
        $ret.="</form>";
        return $ret;
    }


}
?>

