<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    
    class DiseñoServicio extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["nombredisser","descripcion","fotodisser","servicio","cantidadpersonas"];
        protected $table = "diseñoservicios";
        public $nombredisser = "";
        public $descripcion = ""; 
        public $fotodisser = "";
        public $servicio = "";
        public $cantidadpersonas = "";
    }
