<?php
    
    namespace proyecto;
    
    use Exception;
    

   try{
        require("../../vendor/autoload.php");
  
        extract($_POST);
        $c = new Cliente();
        $c->nomcliente=$nomcliente;
        $c->telefono=$telefono;
        $c->correo=$correo;
        $c->passwordd=$passwordd;
        $c->save();
      
      echo  json_encode( $c->all());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }
//






