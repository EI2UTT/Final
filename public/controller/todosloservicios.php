<?php
    
    namespace proyecto;
    
    use Exception;
    

   try{
        require("../../vendor/autoload.php");
  
        extract($_POST);
        $c = new DisenoServicio();
      
      echo  ( $c->all());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }
//