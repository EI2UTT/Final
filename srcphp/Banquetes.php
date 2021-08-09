<?php 
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    class TipoServicios extends Models
    {
        /**
         * @var array
         */
        protected $filleable = ["nomservicio"];
        protected $table = "servicios";
        public $nomservicio = "";
    
    }
            
    class Servicios extends Models
    {
        /**
         * @var array
         */
        protected $filleable = [
            "id_dis_ser", "nombredisser", "descripcion", "servicio", "cantidadpersonas", "fotodisser"];
        protected $table = "diseñoservicios";
        public $nombredisser = "";
        public $descripcion = "";
        public $servicio = "";
        public $cantidadpersonas = "";
        public $fotodisser = "";
    }