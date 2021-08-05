<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    class Cliente extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["nomcliente", "telefono",  "correo", "passwordd"];
        protected $table = "clientes";
        public $nomcliente = "";
        public $telefono = "";
        public $correo = "";
        public $passwordd = "";    
    }
