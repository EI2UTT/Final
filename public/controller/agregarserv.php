<?php
    
    namespace proyecto;
    
    use Exception;
    
   try{
        require("../../vendor/autoload.php");
        if(isset($_POST)){
          extract($_POST);
          $resultado="";
        $s = new DisenoServicio();
        $s->fotodisser=$_FILES['file'] ['name'];
          $tmp_name =$_FILES['file'] ['tmp_name'];
          $error =$_FILES['file'] ['error'];
          $size =$_FILES['file'] ['size'];
          $max_size = 1024 * 1024 * 1;
          $type =$_FILES['file'] ['type'];
        $s->nombredisser=$nombredisser;
        $s->descripcion=$descripcion;
        $s->servicio=$servicio;
        $s->cantidadpersonas=$cantidadpersonas;
          if($error){
            $resultado="esta mal";
          }
          else if($size>$max_size){
            $resultado="esta muy grande";
          }
          else if($type !='image/jpg' && $type !='image/png' && $type !='image/gif'){
            $resultado="ta bien";
          }
          else{
            $ruta=__DIR__ .'\imagenes\\' .$_FILES['file'] ['name'];
            move_uploaded_file($tmp_name,$ruta);
            $resultado="exito";
          }
        }
        $s->save();
        
      echo  json_encode( $s->all());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }






