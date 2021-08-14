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

    public function mostrarped_Noverificado()
    {


        $stmt = self::$pdo->prepare("select * from $this->table WHERE estatus = 'No verificada'");

        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);


        return  json_encode($resultados);
    }
    public function mostrarped_verificado()
    {


        $stmt = self::$pdo->prepare("select * from $this->table WHERE estatus = 'Verificada'");

        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);


        return  json_encode($resultados);
    }
    public function mostrarped_cancelado()
    {


        $stmt = self::$pdo->prepare("select * from $this->table WHERE estatus = 'Cancelado'");

        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);


        return  json_encode($resultados);
    }
    }
