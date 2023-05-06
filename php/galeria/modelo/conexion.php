<?php
    abstract class Conexion {
        private $host = "localhost";
        private $bdt ="colegio7_pagina";
        private $usuario= "colegio7_root";
        private $password = "Sigest2021**";
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