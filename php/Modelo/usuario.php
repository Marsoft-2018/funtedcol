<?php
    class Usuario extends Conexion{
    public $id;
    public $nombre;
    public $usuario;
    public $contrasena;
    public $estado;
    public $fecha_reg;
    private $sql;
    private $datos;
    public function listar(){
        $this->sql = "SELECT * FROM users ORDER BY id ASC";
        try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->execute();
            $this->datos = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $this->datos;
        } catch (PDOException $e) {
            print "Error, no se pudo cargar los datos, ".$e;
        }
    }

    public function cargar(){
        $this->sql = "SELECT * FROM users WHERE usuario = ? and contrasena = ? ";
        try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->usuario);
            $stm->bindparam(2,$this->contrasena);
            $stm->execute();
            $this->datos = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $this->datos;
        } catch (PDOException $e) {
            print "Error, no se pudo cargar los datos, ".$e;
        }
    }

    public function agregar(){
        $this->sql = "INSERT INTO users(usuario,contrasena) VALUES(?,?)";
          try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->usuario);
            $stm->bindparam(2,$this->contrasena);
            if($stm->execute()){
                echo "Registro agregado con éxito";
            }
        } catch (PDOException $e) {
            print "Error, no se pudo agregar los datos, ".$e;
        }
    }

    public function modificar(){
        $this->sql = "UPDATE users SET usuario =?, contrasena =? WHERE id = ?";
          try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->usuario);
            $stm->bindparam(2,$this->contrasena);
            $stm->bindparam(3,$this->id);         
            if($stm->execute()){
                echo "Registro modificado con éxito";
            }
        } catch (PDOException $e) {
            print "Error, no se pudo modificar los datos, ".$e;
        }
    }

    public function eliminar(){
        $this->sql = "DELETE FROM users WHERE id = ?";
          try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->id);         
            if($stm->execute()){
                echo "Registro eliminado con éxito";
            }
        } catch (PDOException $e) {
            print "Error, no se pudo eliminar los datos, ".$e;
        }
    }

    public function cambiarPassword(){
        $this->sql = "UPDATE users SET contrasena = ? WHERE usuario = ?";
          try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->contrasena);
            $stm->bindparam(2,$this->usuario);         
            if($stm->execute()){
                //$this->datos = ["mensaje"=>"Haz cambiado la contraseña con éxito"];
                $this->datos = "Haz cambiado la contraseña con éxito";
                return $this->datos;
            }
        } catch (PDOException $e) {
            $this->datos = "Error, no se pudo cambiar la contraseña, ".$e;
            return $this->datos;
        }
    }
}

?>