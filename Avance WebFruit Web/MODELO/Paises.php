<?php


class Pais{

    private $nombre;

    public function __construct($nombre) {
        $this->nombre=$nombre;
    }


    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

}

class Paises{
    private $listaPaises = array();

    public function __construct() {
        $this->listaPaises;
    }
             
    public function getListaPaises(){
        $conn = new BBDD();
        $sql = "SELECT * FROM paises";
        $resul = $conn->$this->mysql->query($sql);
        while($fila =$resul->fetch_row()){
            array_push($this->listaPaises,new Pais($fila[0]));
        }
        return $this->getListaPaises; 

    }
    

}


?>