<?php
include_once("../srcphp/ConexionB.php");

$sentencia = $base_de_datos-> query("SELECT * FROM diseñoservicios WHERE servicio = 2;");
$diseñoservicio = $sentencia -> fetchALL(PDO::FETCH_OBJ);
//print_r($diseñoservicio);
?>
