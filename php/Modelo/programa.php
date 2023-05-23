<?php
    class Programa extends Conexion{
    public $id;
    public $nombre;
    public $descripcion;
    public $estado;
    public $fecha_reg;
    private $sql;
    private $datos;
    public function listar(){
        $this->sql = "SELECT * FROM programas";
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
        $this->sql = "SELECT * FROM programas WHERE id = ?";
        try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->id);
            $stm->execute();
            $this->datos = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $this->datos;
        } catch (PDOException $e) {
            print "Error, no se pudo cargar los datos, ".$e;
        }
    }

    public function agregar(){
        $this->sql = "INSERT INTO programas(nombre,descripcion) VALUES(?,?)";
          try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->nombre);
            $stm->bindparam(2,$this->descripcion);
            if($stm->execute()){
                echo "Registro agregado con éxito";
            }
        } catch (PDOException $e) {
            print "Error, no se pudo agregar los datos, ".$e;
        }
    }

    public function modificar(){
        $this->sql = "UPDATE programas SET nombre =?, descripcion =? WHERE id = ?";
          try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->nombre);
            $stm->bindparam(2,$this->descripcion);
            $stm->bindparam(3,$this->id);         
            if($stm->execute()){
                echo "Registro modificado con éxito";
            }
        } catch (PDOException $e) {
            print "Error, no se pudo modificar los datos, ".$e;
        }
    }

    public function eliminar(){
        $this->sql = "DELETE FROM programas WHERE id = ?";
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
}

?>