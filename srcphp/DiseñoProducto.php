<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    
    class DiseñoProducto extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["nombredispro","descripcion","fotodispro","producto"];
        protected $table = "diseñoproductos";
        public $nombredispro = "";
        public $descripcion = "";
        public $fotodispro = "";
        public $producto = ""; 
    }
