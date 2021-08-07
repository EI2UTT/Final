<?php
    
    namespace proyecto;
    
    use Exception;
    

   try{
        require("../../vendor/autoload.php");
  
        extract($_POST);
        $u = new Login();
         echo ( $u->login($correo,$passwordd));
        //  $u->save();
      
      //echo  json_encode( $u->all());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }