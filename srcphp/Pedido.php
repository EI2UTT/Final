<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    class Pedido extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["cliente", "fecha", "estatus", "fechaevento", "lugarevento", 
        "nomevento", "fraseprod"];
        protected $table = "pedidos";
        public $cliente= "";
        public $fecha= "";
        public $estatus= "";
        public $fechaevento= "";
        public $lugarevento= "";
        public $nomevento= "";
        public $fraseprod= "";
    }
