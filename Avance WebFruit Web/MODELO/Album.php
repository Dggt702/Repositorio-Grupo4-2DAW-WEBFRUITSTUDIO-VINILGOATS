<?php

class Album{
    private $id;
    private $nombre;
    private $idArtista;
    private $precio;
    private $stock;
    private $imagen;
    private $anio;
    private $duracion;
    
    public function __construct($id="", $nombre, $idArtista, $precio, $stock, $imagen,$anio, $duracion) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->idArtista = $idArtista;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->imagen = $imagen;
        $this->anio = $anio;
        $this->duracion = $duracion;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getIdArtista() {
        return $this->idArtista;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function getAnio() {
        return $this->anio;
    }

    public function getDuracion() {
        return $this->duracion;
    }

    
}

?>