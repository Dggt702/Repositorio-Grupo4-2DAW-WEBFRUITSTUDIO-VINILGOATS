<?php

class Artista{
    private $id;
    private $nombre;
    private $descripcion;

    public function __construct($nombre, $id, $descripcion) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion(){
        return $this->getDescripcion;
    }

}

?>