<?php
    class Galeria extends Conexion{
    public $id;
    public $idCategoria;
    public $imagen;
    public $descripcion;
    public $anho;
    public $estado;
    public $fecha_reg;
    private $sql;
    private $datos;
    public function listar(){
        $this->sql = "SELECT * FROM galeria ORDER BY RAND()";
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
        $this->sql = "SELECT * FROM galeria WHERE id = ?";
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
        $this->sql = "INSERT INTO galeria(idCategoria,imagen,descripcion,anho) VALUES(?,?,?,?)";
          try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->idCategoria);
            $stm->bindparam(2,$this->imagen);
            $stm->bindparam(3,$this->descripcion);
            $stm->bindparam(4,$this->anho);            
            if($stm->execute()){
                echo "Registro agregado con éxito";
            }
        } catch (PDOException $e) {
            print "Error, no se pudo agregar los datos, ".$e;
        }
    }

    public function modificar(){
        $this->sql = "UPDATE galeria SET idCategoria =?, carpeta =?, imagen =?, descripcion =?, anho=? WHERE id = ?";
          try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->idCategoria);
            $stm->bindparam(2,$this->carpeta);
            $stm->bindparam(3,$this->imagen);
            $stm->bindparam(4,$this->descripcion);
            $stm->bindparam(5,$this->anho);
            $stm->bindparam(6,$this->id);         
            if($stm->execute()){
                echo "Registro agregado con éxito";
            }
        } catch (PDOException $e) {
            print "Error, no se pudo modificar los datos, ".$e;
        }
    }

    public function eliminar(){
        $this->sql = "DELETE FROM galeria WHERE id = ?";
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