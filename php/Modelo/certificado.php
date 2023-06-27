<?php
    class Certificado extends Conexion{
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
    
    public function cargar(){
        $this->sql = 'SELECT ins.id, CONCAT(PrimerNombre," ",SegundoNombre," ",PrimerApellido," ",SegundoApellido) AS nombre,documento,p.`nombre` as programa,p.intensidadHoras as horas,DAY(fechaIngreso) AS dia, MONTH(fechaIngreso) AS mes,YEAR(fechaIngreso) AS anho 
        FROM inscripciones ins
        INNER JOIN programas p ON p.`id` =  ins.`programa`
        WHERE (ins.id = ? OR documento = ?) AND ins.estado= 3';
        try {
            $stm = $this->conexion->prepare($this->sql);
            $stm->bindparam(1,$this->id);
            $stm->bindparam(2,$this->documento);
            $stm->execute();
            $this->datos = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $this->datos;
        } catch (PDOException $e) {
            print "Error, no se pudo cargar los datos, ".$e;
        }
    }

}

?>