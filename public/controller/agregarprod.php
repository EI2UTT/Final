<?php
    
    namespace proyecto;
    
    use Exception;
    
   try{
        require("../../vendor/autoload.php");
        if(isset($_POST)){
          extract($_POST);
          $resultado="";
          $p = new DisenoProducto();
          $p->fotodispro=$_FILES['imagen'] ['name'];
            $tmp_name =$_FILES['imagen'] ['tmp_name'];
            $error =$_FILES['imagen'] ['error'];
            $size =$_FILES['imagen'] ['size'];
            $max_size = 1024 * 1024 * 1;
            $type =$_FILES['imagen'] ['type'];
          $p->nombredispro=$nombredispro;
          $p->descripcion=$descripcion;
          $p->producto=$producto;
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
            $ruta=__DIR__ .'\imagenes\\' .$_FILES['imagen'] ['name'];
            move_uploaded_file($tmp_name,$ruta);
            $resultado="exito";
          }
        }
        $p->save();
        
      echo  json_encode( $p->all());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }







       
       
       
       
       






