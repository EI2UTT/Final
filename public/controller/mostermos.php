<?php
include_once("../srcphp/ConexionB.php");

$sentencia = $base_de_datos-> query("SELECT * FROM diseñoproductos WHERE producto = 3;");
$diseñosproducto = $sentencia -> fetchALL(PDO::FETCH_OBJ);
?>