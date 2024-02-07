<?php

class Album{
    private $id;
    private $nombre;
    private $idArtista;
    private $precio;
    private $stock;
    private $urlImagen;
    private $anio;
    private $duracion;
    
    public function __construct($id, $nombre, $idArtista, $precio, $stock, $urlImagen, $anio, $duracion) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->idArtista = $idArtista;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->urlImagen = $urlImagen;
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

    public function getUrlImagen() {
        return $this->urlImagen;
    }

    public function getAnio() {
        return $this->anio;
    }

    public function getDuracion() {
        return $this->duracion;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setIdArtista($idArtista): void {
        $this->idArtista = $idArtista;
    }

    public function setPrecio($precio): void {
        $this->precio = $precio;
    }

    public function setStock($stock): void {
        $this->stock = $stock;
    }

    public function setUrlImagen($urlImagen): void {
        $this->urlImagen = $urlImagen;
    }

    public function setAnio($anio): void {
        $this->anio = $anio;
    }

    public function setDuracion($duracion): void {
        $this->duracion = $duracion;
    }

    
}

?>