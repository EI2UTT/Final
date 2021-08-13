<?php

namespace proyecto;
use PDO;
USE Exception;
    class Conexionb{
        public static function Conectar(){
            define('servidor', 'localhost');
            define('nombre_bd', 'detalles');
            define('usuario', 'root');
            define('password', 'admin');	
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
            try{
                $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);
                return $conexion;
            }catch (Exception $e){
                die("El error de Conexión es: ". $e->getMessage());
            }
        }
    }
?>