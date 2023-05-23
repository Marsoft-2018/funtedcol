<?php
    abstract class Conexion {
 /*
        //conexion local pc
        private $host = "localhost";
        private $bdt ="funtedco_bdt";
        private $usuario= "root";
        private $password = "";

        //conexion local hosting
        private $host = "localhost";
        private $bdt ="funtedco_bdt";
        private $usuario= "funtedco_root";
        private $password = "?4*NnfwLeay]";
        */

        //conexion remota Pc - hosting
        private $host = "51.222.104.17";
        private $bdt ="funtedco_bdt";
        private $usuario= "funtedco_root";
        private $password = "?4*NnfwLeay]";
        
        private $dns;
        protected $conexion;
        public function __construct(){
            $this->dns = "mysql:host=".$this->host;
            $this->dns .= ";dbname=".$this->bdt;
            try{
                $this->conexion = new PDO($this->dns,$this->usuario,$this->password);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->conexion->query("SET NAMES 'utf8';");
                //echo "Conexion exitosa";

            }catch(PDOException $error){
                echo "Error al tratar de conectarse con la base de datos: ".$error;
            }
        }
    }
?>