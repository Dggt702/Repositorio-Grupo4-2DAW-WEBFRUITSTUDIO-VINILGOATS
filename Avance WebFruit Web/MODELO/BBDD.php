<?php

class BBDD {
        public static function conectar(){
           $server="localhost";
           $dbname="bdd_vnbros";
           $user="admin_vb";
           $password="";

            try{
                $connection = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
                $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $connection;
            } catch(PDOException $e){
                die("ERROR: ".$e->getMessage());
            }

           
        }
    }
?>