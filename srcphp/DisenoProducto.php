<?php
    
    namespace proyecto;

use Exception;
use PDO;
    use function json_encode;

    
    class DisenoProducto extends Models
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

    public function mostrarstickers()
    {


        $stmt = self::$pdo->prepare("select * from $this->table where producto=1");

        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);


        return  json_encode($resultados);
    }
    public function mostrarinvitaciones()
    {


        $stmt = self::$pdo->prepare("select * from $this->table where producto=2");

        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);


        return  json_encode($resultados);
    }
    public function mostrartermos()
    {


        $stmt = self::$pdo->prepare("select * from $this->table where producto=3");

        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);


        return  json_encode($resultados);
    }

    public function eliminardestickers($id)
        {
        try {
            $cid = $this->id != "" ? $this->id : "id";
            $stmt = self::$pdo->prepare("delete from $this->table where $cid=:id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        } catch (Exception $e) {
            return $e;
        }
        }
    }
