<?php

class Cancion{
    
    private $id;
    private $id_album;
    private $nombre;
    private $duracion;
    private $num_pista;

    public function __construct($id, $id_album, $nombre, $duracion, $num_pista){
        $this->id = $id;
        $this->id_album=$id_album;
        $this->nombre=$nombre;
        $this->duracion = $duracion;
        $this->num_pista = $num_pista;
    }
    public function getId() {
        return $this->id;
    }

    public function getId_album() {
        return $this->id_album;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDuracion() {
        return $this->duracion;
    }

    public function getNum_pista() {
        return $this->num_pista;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setId_album($id_album): void {
        $this->id_album = $id_album;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setDuracion($duracion): void {
        $this->duracion = $duracion;
    }

    public function setNum_pista($num_pista): void {
        $this->num_pista = $num_pista;
    }


}
?>