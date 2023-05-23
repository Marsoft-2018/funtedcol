<?php
    require("../modelo/conexion.php");
    require("../modelo/programa.php");
    


    $accion = "";
    if(isset($_REQUEST['accion'])){
        $accion = $_REQUEST['accion'];
    }

    switch ($accion) {
        case 'listar':
            $objPrograma = new Programa();
            include("../vista/lista.php");
            break;
        case 'cargar':
            $objPrograma = new Programa();
            var_dump($objPrograma->cargar());
            break;
        case "Agregar": case "Modificar":
                $objPrograma = new Programa();   
                $objPrograma->id       =  $_POST['id'];
                $objPrograma->nombre   =  $_POST['nombre'];
                $objPrograma->descripcion   =  $_POST['descripcion'];
                if ($accion == "Agregar") {
                    $objPrograma->agregar();
                }else{
                    $objPrograma->modificar();
                }
            break;
        case "Nuevo" : case "Editar":

            $objPrograma = new Programa();
            include("../vista/formulario.php");
            break;
        case 'Eliminar':
            $objPrograma = new Programa();
            $objPrograma->id = $_POST['id'];
            $objPrograma->eliminar();
            break;
        
        default:
            # code...
            break;
    }
?>