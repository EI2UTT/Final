<?php

namespace proyecto;

use PDO;
use Exception;
include_once 'conexionb.php';
$objeto = new Conexionb();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';
$id_pedido= (isset($_POST['id_pedido'])) ? $_POST['id_pedido'] : '';
$nombredispro = (isset($_POST['nombredispro'])) ? $_POST['nombredispro'] : '';
$nombredisser = (isset($_POST['nombredisser'])) ? $_POST['nombredisser'] : '';
$pedido = (isset($_POST['pedido'])) ? $_POST['pedido'] : '';
$producto = (isset($_POST['producto'])) ? $_POST['producto'] : '';
$cantidad = (isset($_POST['cantidad'])) ? $_POST['cantidad'] : '';
$servicio = (isset($_POST['servicio'])) ? $_POST['servicio'] : '';

switch($opcion){
    case 1:
        $consulta = "DELETE FROM diseñoservicios WHERE nombredisser='$nombredisser' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break; 
    case 2:
        $consulta = "UPDATE pedidos SET estado='$estado' WHERE id='$id_pedido' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        break;    
    case 3:
        try{
        $consulta = "DELETE FROM diseñoproductos WHERE nombredispro='$nombredispro' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        }
        catch(Exception $e){
            return $e;
        }                          
        break;         
    case 4:
        $consulta = "INSERT INTO dispro_pedidos (pedido, producto, cantidad) VALUES('$pedido','$producto','$cantidad') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;  
    case 5:
        $consulta = "INSERT INTO disser_pedidos (pedido, servicio) VALUES('$pedido','$servicio') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;        
}