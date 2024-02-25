<?php


    class BBDD_PDO{

        public static function datosConectar(){
            $direccion=dirname(__FILE__);
            $json=file_get_contents($direccion."/datosBBDD.json");
            return json_decode($json,true);
        }

        public static function conectar(){

            $datosConexion=self::datosConectar();

            try{
                $conexion=new PDO("mysql:host:=$datosConexion[server];dbname=$datosConexion[db]",$datosConexion["user"],$datosConexion["password"]);
                $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $conexion;
            }catch(PDOException $e){
                die('Error a la hora de conectar a la base de datos'.$e->getMessage());
            }

        }

    }