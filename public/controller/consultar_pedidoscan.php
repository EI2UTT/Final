<?php
    
    namespace proyecto;
    
    use Exception;
    

   try{
        require("../../vendor/autoload.php");
  
        extract($_POST);
        $c = new Pedido();
        
        
      echo  ( $c->mostrarped_cancelado());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }
?>