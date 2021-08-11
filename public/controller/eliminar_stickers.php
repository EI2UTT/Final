<?php
    
    namespace proyecto;
    
    use Exception;
    

   try{
        require("../../vendor/autoload.php");
  
        extract($_POST);
        $c = new DisenoProducto();
        $c->eliminardestickers(17);
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }
?>