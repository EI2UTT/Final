<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    class Servicio extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["nomservicio"];
        protected $table = "servicios";
        public $nomservicio = ""; 
    }
