<?php
    class Preinscripcion extends Conexion{
    public $id;
    public $PrimerNombre;
    public $SegundoNombre;
    public $PrimerApellido;
    public $SegundoApellido;
    public $tipoDocumento;
    public $documento;
    public $programa;
    public $telefono;
    public $email;
    public $estado;
    public $fecha_reg;
    private $sql;
    private $datos;
    public function listar(){
        $this->sql = "SELECT * FROM inscripciones";
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
        $this->sql = "SELECT * FROM inscripciones WHERE id = ?";
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
        $this->sql = "INSERT INTO inscripciones(PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,tipoDocumento,documento,programa,telefono,email) VALUES(?,?,?,?,?,?,?,?,?)";
          try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->PrimerNombre);
            $stm->bindparam(2,$this->SegundoNombre);
            $stm->bindparam(3,$this->PrimerApellido);
            $stm->bindparam(4,$this->SegundoApellido);
            $stm->bindparam(5,$this->tipoDocumento);
            $stm->bindparam(6,$this->documento);
            $stm->bindparam(7,$this->programa);
            $stm->bindparam(8,$this->telefono);
            $stm->bindparam(9,$this->email);
            if($stm->execute()){
                echo "Registro agregado con éxito";
            }
        } catch (PDOException $e) {
            print "Error, no se pudo agregar los datos, ".$e;
        }
    }

    public function modificar(){
        $this->sql = "UPDATE inscripciones SET PrimerNombre =?,SegundoNombre =?,PrimerApellido =?,SegundoApellido =?,tipoDocumento =?,documento =?,programa =?,telefono =?,email =? WHERE id = ?";
          try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->PrimerNombre);
            $stm->bindparam(2,$this->SegundoNombre);
            $stm->bindparam(3,$this->PrimerApellido);
            $stm->bindparam(4,$this->SegundoApellido);
            $stm->bindparam(5,$this->tipoDocumento);
            $stm->bindparam(6,$this->documento);
            $stm->bindparam(7,$this->programa);
            $stm->bindparam(8,$this->telefono);
            $stm->bindparam(9,$this->email);
            $stm->bindparam(10,$this->id);         
            if($stm->execute()){
                echo "Registro modificado con éxito";
            }
        } catch (PDOException $e) {
            print "Error, no se pudo modificar los datos, ".$e;
        }
    }

    public function eliminar(){
        $this->sql = "DELETE FROM inscripciones WHERE id = ?";
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