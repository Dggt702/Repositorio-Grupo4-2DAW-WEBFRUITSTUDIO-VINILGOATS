<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require_once "BBDD.php";
class Usuario{
    private $nombre;
    private $correo;
    private $contraseña;
    private $sexo;
    private $fechaDeNacimiento;
    private $direccion;
    private $pais;
    private $dni;
    private $tarjetaDeCredito;
    private $notificaciones;
    private $revistaDigital;

    
    public function __construct($nombre, $correo, $contraseña,$sexo="", $fechaDeNacimiento="", $direccion="", $pais="", $dni="", $tarjetaDeCredito="", $notificaciones="", $revistaDigital="") {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
        $this->sexo = $sexo;
        $this->fechaDeNacimiento = $fechaDeNacimiento;
        $this->direccion = $direccion;
        $this->pais = $pais;
        $this->dni = $dni;
        $this->tarjetaDeCredito = $tarjetaDeCredito;
        $this->notificaciones = $notificaciones;
        $this->revistaDigital = $revistaDigital;
    }

    
    public function getNombre() {
        return $this->nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getContraseña() {
        return $this->contraseña;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getFechaDeNacimiento() {
        return $this->fechaDeNacimiento;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getPais() {
        return $this->pais;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getTarjetaDeCredito() {
        return $this->tarjetaDeCredito;
    }

    public function getNotificaciones() {
        return $this->notificaciones;
    }

    public function getRevistaDigital() {
        return $this->revistaDigital;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setCorreo($correo): void {
        $this->correo = $correo;
    }

    public function setContraseña($contraseña): void {
        $this->contraseña = $contraseña;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    public function setFechaDeNacimiento($fechaDeNacimiento): void {
        $this->fechaDeNacimiento = $fechaDeNacimiento;
    }

    public function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    public function setPais($pais): void {
        $this->pais = $pais;
    }

    public function setDni($dni): void {
        $this->dni = $dni;
    }

    public function setTarjetaDeCredito($tarjetaDeCredito): void {
        $this->tarjetaDeCredito = $tarjetaDeCredito;
    }

    public function setNotificaciones($notificaciones): void {
        $this->notificaciones = $notificaciones;
    }

    public function setRevistaDigital($revistaDigital): void {
        $this->revistaDigital = $revistaDigital;
    }



}

class Usuarios{
    private $listaUsuarios = array();

    public function __construct() {
        $this->listaUsuarios;
    }
    
    public function getListaUsuarios(){
        $conn = new BBDD();
        $sql = "SELECT * FROM usuarios";
        $resul = $conn->$this->mysql->query($sql);
        while($fila =$resul->fetch_row()){
            array_push($this->listaUsuarios,new Usuario($fila[0],$fila[1],$fila[2],$fila[3],$fila[4],$fila[5],$fila[6],$fila[7],$fila[8],$fila[9],$fila[10]));
        }
        return $this->listaUsuarios; 

    }
    

}