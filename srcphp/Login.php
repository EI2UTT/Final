<?php
    
    namespace proyecto;
 

    use PDO;
    use function json_encode;

    class Login extends Models
    {
        /**
         * @var array
         */
       protected $filleable = [
           "nomcliente", 
           "telefono",  
           "correo", 
           "passwordd"];
        protected $table = "clientes";
        public $nomcliente = "";
        public $telefono = "";
        public $correo = "";
        public $passwordd = "";     

        public function login($correo,$passwordd){
            $respuesta=[];
            $stmt = self::$pdo->prepare("select *  from $this->table  where  correo=:correo and passwordd=:passwordd");
            $stmt->bindParam(":correo",$correo);
            $stmt->bindParam(":passwordd",$passwordd);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

           if($resultados){
                $respuesta["acceso"]=true;
                $respuesta["usuario"]=$resultados[0];
                $auth=new Auth();
                $auth->setUser($resultados[0]);
               return  json_encode($respuesta);
            }
            $respuesta["acceso"]=false;
            $respuesta["usuario"]=[];
            return  json_encode($respuesta);
            
            
        }
    
        public function find_name($name){
        
            $stmt = self::$pdo->prepare("select *  from $this->table  where  nombre=:name");
            $stmt->bindParam(":name",$name);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
            if($resultados==null){
                return  json_encode([]);
            }
            return  json_encode($resultados[0]);
        }


        
    }
