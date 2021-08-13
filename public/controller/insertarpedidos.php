<?php
    
    namespace proyecto;
    
    use Exception;
    

   try{
        require("../../vendor/autoload.php");
  
        extract($_POST);
        $c = new Pedido();
        $c->evento=$evento;
        $c->fechaevento=$fechaevento;
        $c->lugarevento=$lugarevento;
        $c->save();
        $c->mostrar(1);
      
      echo  json_encode( $c->all());
    
    } catch (Exception $e) {
           echo($e->getMessage());
    }
//
