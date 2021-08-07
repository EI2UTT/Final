<?php
$contraseña="admin";
$usuario="root";
$nombrebd="detalles";
try{
$base_de_datos= new PDO('mysql:host=localhost;dbname='.$nombrebd,$usuario,$contraseña);
//echo "<script>alert('La conexion se realizo correctamente')</script>";
}
catch(Exception $e){
    echo "<script>alert('ERROR')</script>".$e->getMessage();
}
?>