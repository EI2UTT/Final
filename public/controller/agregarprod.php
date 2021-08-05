<?php
    
    namespace proyecto;
    
    use Exception;
    

   try{
        require("../../vendor/autoload.php");
  
        extract($_POST);
        $p = new DiseñoProducto();
        $p->Nombre=$Nombre;
        $p->Descripcion=$Descripcion;
        $p->Foto=$Foto;
        $p->Nota=$Nota;
        $p->SERVICIO=$SERVICIO;
        $p->EVENTO=$EVENTO;
        $p->save();
        
      echo  json_encode( $p->all());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }
//






