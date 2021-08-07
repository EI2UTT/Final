<?php
    
    namespace proyecto;
    
    use Exception;
    try {
        require("../vendor/autoload.php");
        $auth = new Auth();
        if (!$auth->getUser()) {
            header("Location:inicio-sesion.html");
            exit();
        }
    } catch (Exception $e) {
        echo($e->getMessage());
    }

