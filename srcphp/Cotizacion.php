<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    class Cotizacion extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["anticipo", "totalpagar", "pedidoservicio", "pedidoproducto", "notas"];
        protected $table = "cotizaciones";
        public $anticipo = "";
        public $totalpagar = "";
        public $pedidoservicio = "";
        public $pedidoproducto = "";
        public $notas = "";   
    }
