<?php
    require("../modelo/conexion.php");
    require("../modelo/preinscripcion.php");
    


    $accion = "";
    if(isset($_REQUEST['accion'])){
        $accion = $_REQUEST['accion'];
    }

    switch ($accion) {
        case 'listar':
            $objPreinscripcion = new Preinscripcion();
            include("../vista/lista.php");
            break;
        case 'cargar':
            $objPreinscripcion = new Preinscripcion();
            var_dump($objPreinscripcion->cargar());
            break;
        case "Agregar": case "Modificar":
                $objPreinscripcion = new Preinscripcion();   
                if(isset($_REQUEST['id'])){
                    $objPreinscripcion->id       =  $_POST['id'];
                }
                $objPreinscripcion->PrimerNombre = $_POST['PrimerNombre'];
                $objPreinscripcion->SegundoNombre = $_POST['SegundoNombre'];
                $objPreinscripcion->PrimerApellido = $_POST['PrimerApellido'];
                $objPreinscripcion->SegundoApellido = $_POST['SegundoApellido'];
                $objPreinscripcion->tipoDocumento = $_POST['tipoDocumento'];
                $objPreinscripcion->documento = $_POST['documento'];
                $objPreinscripcion->programa = $_POST['programa'];
                $objPreinscripcion->telefono = $_POST['telefono'];
                $objPreinscripcion->email = $_POST['email'];
                if ($accion == "Agregar") {
                    $objPreinscripcion->agregar();
                }else{
                    $objPreinscripcion->modificar();
                }
            break;
        case "Nuevo" : case "Editar":

            $objPreinscripcion = new Preinscripcion();
            include("../vista/formulario.php");
            break;
        case 'Eliminar':
            $objPreinscripcion = new Preinscripcion();
            $objPreinscripcion->id = $_POST['id'];
            $objPreinscripcion->eliminar();
            break;
        
        default:
            # code...
            break;
    }
?>