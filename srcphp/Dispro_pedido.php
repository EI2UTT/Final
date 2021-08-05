<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    class Dispro_pedido extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["pedido", "producto", "cantidad"];
        protected $table = "dispro_pedidos";
        public $pedido= "";
        public $producto= "";
        public $cantidad= "";   
    }
