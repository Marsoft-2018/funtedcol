<?php
include ('Dao.php');
class contacto extends Dao {
    public $nombre;
    public $empresa;
    public $telefono;
	public $email;
	public $mensaje;
    
   public function  __construct($nombre,$empresa,$telefono,$email,$mensaje){
		$this->nombre = $nombre;
		$this->empresa = $empresa;
        $this->telefono = $telefono;
        $this->email = $email;  
		$this->mensaje = $mensaje;     
   } 
   public function getnombre( ){
		return $this->nombre;
   }
         public function getempresa( ){
             return $this->empresa;
         }
          public function gettelefono( ){
                return $this->telefono;
          }
		  public function getemail( ){
                return $this->email;
          }
        public function getmensaje( ){
                return $this->mensaje;
          }
   
    public function	setnombre($nom){
		return $this->nombre =$nom;
    }
     public function	setempresa($emp){
                return $this->empresa =$emp;
     }
      public function	settelefono($tel){
                return $this->telefono=$tel;
      
      }
	   public function	setemail ($email){
                return $this->email=$email;
      
      }
	   public function	setmensaje($men){
                return $this->mensaje=$men;
      
      }

   public function insertar() {
      $this->conectar();
      $this->seleccionar_DB();
      $consulta="INSERT INTO contacto(nombre,empresa,telefono,email,mensaje)VALUES('".$this->nombre."','".$this->empresa."','".$this->telefono."','".$this->email."','".$this->mensaje."')";
      $resultado=mysql_query($consulta,$this->conexion_bd);
      $this->desconectar();
      if(!$resultado){
          throw new Exception("no se pudo conectar a la base de datos".mysql_error());
          
      }
      
   }
  public function consultar() { 
     $this->conectar();
     $this->seleccionar_DB();
     $query = "SELECT * FROM contacto";
     $result = mysql_query ($query,  $this->conexion_bd);
     $nfilas = mysql_num_rows($result);
     for ($i=0; $i<$nfilas; $i++){         
         $fila = mysql_fetch_array($result);
         //$lista[$i]= new contacto($fila["nombre"], $fila["empresa"], $fila["telefono"],$fila["email"]					         $fila["mensaje"]);
         
     }
	 mysql_close ($this->conexion_bd);
 	 return $lista;
  }
  
}


?>
