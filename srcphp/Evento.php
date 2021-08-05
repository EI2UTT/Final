<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    class Evento extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["nomevento"];
        protected $table = "eventos";
        public $nomevento = "";  
    }
