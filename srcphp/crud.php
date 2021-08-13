<?php

namespace proyecto;

use PDO;
use Exception;
include_once 'conexionb.php';
$objeto = new Conexionb();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$nombredispro = (isset($_POST['nombredispro'])) ? $_POST['nombredispro'] : '';
$nombredisser = (isset($_POST['nombredisser'])) ? $_POST['nombredisser'] : '';

switch($opcion){
    case 1:
        $consulta = "DELETE FROM diseñoservicios WHERE nombredisser='$nombredisser' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break; 
    case 2:
        $consulta = "DELETE FROM diseñoproductos WHERE nombredispro='$nombredispro' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break; 
    case 3:
        $consulta = "DELETE FROM diseñoproductos WHERE nombredispro='$nombredispro' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;         
    case 4:
        $consulta = "DELETE FROM diseñoproductos WHERE nombredispro='$nombredispro' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break; 
}