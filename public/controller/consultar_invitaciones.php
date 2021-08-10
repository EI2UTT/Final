<?php
    
    namespace proyecto;
    
    use Exception;
    

   try{
        require("../../vendor/autoload.php");
  
        extract($_POST);
        $c = new DisenoProducto();
        
        
      echo  ( $c->mostrarinvitaciones());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }
?>