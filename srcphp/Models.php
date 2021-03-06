<?php
    
    namespace proyecto;

use Exception;
use PDO;
    use proyecto\Conexion;
    use function json_encode;

    class Models
    {
        /**
         * Models constructor.
         */
        protected $filleable = [];
        public static $pdo = null;
        protected $table = "";
        protected  $id="";
        
        public function __construct()
        {
            $cc = new  Conexion("detalles", "localhost", "root", "admin");
            self::$pdo = $cc->getPDO();
        }
        public function create(array $obj)
        {
            $campos = "(";
            $valores = "(";
            $long = count($obj);
            $i = 0;
            foreach ($obj as $prop => $val) {
                $i++;
                $campos .= $prop;
                $campos .= $long > $i ? "," : "";
                
                $valores .= ":" . $prop;
                $valores .= $long > $i ? "," : "";
            }
            $campos .= " )";
            $valores .= " )";
            
            $stmt = self::$pdo->prepare("INSERT INTO $this->table   $campos VALUES  $valores");
            
            foreach ($obj as $prop => $val) {
                $stmt->bindValue(":$prop", $val);
            }
            
            
            $stmt->execute();
        }
        public function save()
        {
            $ob = [];
            foreach ($this->filleable as $campo) {
               
                $ob[$campo] = $this->$campo;
            
            }
            $this->create($ob);
        }
        public function all(){
          
          
            $stmt = self::$pdo->prepare("select * from $this->table");

            $stmt->execute();

            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);


            return  json_encode($resultados);
        }
        
        
        public function delete($id){
            
            try{
                $cid= $this->id!=""?$this->id:"id";
                $stmt = self::$pdo->prepare("delete from $this->table where $cid=:id");
                $stmt->bindParam(":id",$id);
                $stmt->execute();
                }
            catch (Exception $e) {
                return $e;
            }
        }
        public function deleteAll(){
            $stmt = self::$pdo->prepare("delete  from $this->table ");
            $stmt->execute();
        }
        public function find($id){
            $cid= $this->id!=""?$this->id:"id";
            $stmt = self::$pdo->prepare("select *  from $this->table  where  $cid=:id");
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
            if($resultados==null){
                return  json_encode([]);
            }
            return  json_encode($resultados[0]);
        }
        public function mostrar($id_cliente){
            $cid= $this->id_cliente!=""?$this->id_cliente:"id_cliente";
            $stmt = self::$pdo->prepare("select *  from $this->table where  $cid=:id_cliente");
            $stmt->bindParam(":id_cliente",$id_cliente);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
            if($resultados==null){
                return  json_encode([]);
            }
            return  json_encode($resultados[0]);
        }
        public function eliminardestickers($nombredispro)
        {
        try {
            $cid = $this->nombredispro != "" ? $this->nombredispro : "nombredispro";
            $stmt = self::$pdo->prepare("delete from dise??oproductos where $cid=:nombredispro");
            $stmt->bindParam(":nombredispro", $nombredispro);
            $stmt->execute();
        } catch (Exception $e) {
            return $e;
        }
        }
        public function mostrarpedidos()
        { 
        try {
            $cid = $this->nombredispro != "" ? $this->nombredispro : "nombredispro";
            $stmt = self::$pdo->prepare("SELECT DISTINCT 
            ped.id_pedido,
             c.nomcliente,
              ped.fechaevento,
              ped.tituloevento,
               ped.fraseprod,
                e.nomevento,
                ds.nombredisser,
                dp.nombredispro
                 FROM Pedidos AS ped 
                 INNER JOIN disser_pedidos AS disser ON ped.id_pedido= disser.pedido 
                 LEFT JOIN dispro_pedidos AS dispp ON ped.id_pedido=dispp.pedido 
                 INNER JOIN clientes AS c ON ped.cliente=c.id_cliente 
                 LEFT JOIN eventos AS e ON ped.evento=e.id_evento 
                 LEFT JOIN dise??oservicios AS ds ON disser.servicio= ds.id_dis_ser 
                 LEFT JOIN dise??oproductos AS dp ON dispp.producto=dp.id_dis_pro 
                 LEFT JOIN servicios AS s ON ds.servicio=s.id_servicio 
                 LEFT JOIN productos AS p ON dp.producto=p.id_producto
                 WHERE ped.id_pedido = disser.pedido AND ped.id_pedido = dispp.pedido");
            $stmt->bindParam(":nombredispro", $nombredispro);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
            return  json_encode($resultados);
        } catch (Exception $e) {
            return $e;
        }
        }
    }
?>