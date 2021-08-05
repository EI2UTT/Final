<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    class Disser_pedido extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["pedido", "servicio"];
        protected $table = "disser_pedidos";
        public $pedido= "";
        public $servicio= ""; 
    }
