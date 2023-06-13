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
        $this->sql = "SELECT * FROM inscripciones WHERE estado = '".$this->estado."'";
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
        $this->sql = "INSERT INTO inscripciones(PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,tipoDocumento,documento,programa,telefono,email,estado) VALUES(?,?,?,?,?,?,?,?,?,?)";
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
            $stm->bindparam(10,$this->estado);
            if($stm->execute()){
                echo "<div class='alert alert-success' role='alert'>
                    Gracias por realizar tu preinscripción pronto nos pondremos en contacto contigo.<br>
                    Te has preinscrito con éxito.<br>
                </div>";
                return true;
            }
        } catch (PDOException $e) {
            echo "<div class='alert alert-danger' role='alert'>
                    Tienes problemas para preinscribirte?<br>
                    Si no puedes realizar el proceso desde la página puedes ponerte en contacto con nosotros desde nuestra líena de atención<br>
                    con gusto te ayudaremos.
                </div>";
        }
    }

    public function modificar(){
        $this->sql = "UPDATE inscripciones SET PrimerNombre =?,SegundoNombre =?,PrimerApellido =?,SegundoApellido =?,tipoDocumento =?,documento =?,programa =?,telefono =?,email =?, estado =?  WHERE id = ?";
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
            $stm->bindparam(10,$this->estado);
            $stm->bindparam(11,$this->id);         
            if($stm->execute()){
                echo "<div class='alert alert-success' role='alert'>
                    Registro modificado con éxito.<br>
                </div>";
            }
        } catch (PDOException $e) {
            echo "<div class='alert alert-danger' role='alert'>
                    Error al tratar de modificar el registro<br>
                    ".$e."
                </div>";
        }
    }

    public function cambiarEstado(){
        $this->sql = "UPDATE inscripciones SET estado =?  WHERE id = ?";
          try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->estado);
            $stm->bindparam(2,$this->id);         
            if($stm->execute()){
                echo "<div class='alert alert-success' role='alert'>
                    Registro modificado con éxito.<br>
                </div>";
            }
        } catch (PDOException $e) {
            echo "<div class='alert alert-danger' role='alert'>
                    Error al tratar de modificar el registro<br>
                    ".$e."
                </div>";
        }
    }

    public function eliminar(){
        $this->sql = "DELETE FROM inscripciones WHERE id = ?";
          try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->id);         
            if($stm->execute()){
                echo "<div class='alert alert-success' role='alert'>
                    Registro elimidado con éxito.<br>
                </div>";
            }
        } catch (PDOException $e) {
            echo "<div class='alert alert-danger' role='alert'>
                    Error al tratar de eliminar el registro<br>
                    ".$e."
                </div>";
        }
    }
}

?>