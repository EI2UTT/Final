<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    class Producto extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["nomprod"];
        protected $table = "productos";
        public $nomprod = "";  
    }
