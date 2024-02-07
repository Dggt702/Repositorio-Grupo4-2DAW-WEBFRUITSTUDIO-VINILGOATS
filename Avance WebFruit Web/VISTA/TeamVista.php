<?php

class TeamVista{
    
    
    public function __construct() {
    }
    
    public function imprimirFilaAlbum($listaAlbumes){     
        $ret='';
        $i = 0;
        foreach ($listaAlbumes as $album){
            $tm = new TeamModel();
            $artista = $tm->getArtista();
            $i++;
            $ret.='<div class="col-md-3">'; 
            $ret.='<div class="vinilo">';
            $ret.='<img src="'.$album->getUrlImagen().'" alt="Vinilo "'.$i.'>';
            $ret.='<a href="./infoDiscos.html">'.$album->getNombre().'-'.$artista->getNombre().'</a>';
            $ret.='<p>Precio:'.$album->getPrecio().'€</p>';
            $ret.='<button>Añadir al carrito</button>';
        }
        return $ret;
    }    
}
?>