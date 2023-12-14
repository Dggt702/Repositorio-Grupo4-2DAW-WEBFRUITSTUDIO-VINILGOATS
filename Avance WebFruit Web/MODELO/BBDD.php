<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */


class BBDD {
   
    private $servidor;
    private $usuario;
    private $password; 
    private $nombre;
    public $mysql;
    
    public function __construct() {
        $this->usuario = "dioggo"; 
        $this->password = "";
        $this->nombre="bdd_vnbros";
        $this->servidor="localhost";
        $this->mysql = new mysqli($this->servidor, $this->usuario, $this->password, $this->nombre);
        if ($this->mysql->connect_errno) {
                 
            die("error de conexión: " . $mysql->connect_error);
            
       
               
        }
}
}

?>