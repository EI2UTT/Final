<?php
    
    namespace proyecto;
    
    use Exception;
    

   try{
        require("../../vendor/autoload.php");
  
        extract($_POST);
        $c = new DisenoProducto();
        
        
      echo  ( $c->mostrarstickers());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }
?>