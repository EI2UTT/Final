<?php
    
    namespace proyecto;
    
    use Exception;
    

   try{
        require("../../vendor/autoload.php");
  
        extract($_POST);
        $s = new DiseñoServicio();
        $s->nombredisser=$nombredisser;
        $s->descripcion=$descripcion;
        $s->fotodisser=$fotodisser;
        $s->servicio=$servicio;
        $s->cantidadpersonas=$cantidadpersonas;
        $s->save();
      
      echo  json_encode( $s->all());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }
    



