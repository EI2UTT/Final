<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    
    class DisenoServicio extends Models
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


    public function mostrarcentros()
    {


        $stmt = self::$pdo->prepare("select * from $this->table where servicio=1");

        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);


        return  json_encode($resultados);
    }

    public function mostrarsnacks()
    {


        $stmt = self::$pdo->prepare("select * from $this->table where servicio=2");

        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);


        return  json_encode($resultados);
    }

    public function mostrarbanquetes()
    {


        $stmt = self::$pdo->prepare("select * from $this->table where servicio=3");

        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);


        return  json_encode($resultados);
    }
    }
