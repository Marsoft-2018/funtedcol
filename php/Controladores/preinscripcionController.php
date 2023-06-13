<?php
    require("../Modelo/conexion.php");
    require("../Modelo/programa.php");
    require("../Modelo/preinscripcion.php");
    
    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);

    $accion = "";
    if(isset($data['accion'])){
        $accion = $data['accion'];
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
            $objPrograma = new Programa();
            $objPrograma->id = $data['programa'];
            $programa = "";
            foreach ($objPrograma->cargar() as $campo) {
                $programa = $campo['nombre'];
            }

                $objPreinscripcion = new Preinscripcion();   
                if(isset($data['id'])){
                    $objPreinscripcion->id       =  $data['id'];
                }
                $objPreinscripcion->PrimerNombre = $data['primerNombre'];
                $objPreinscripcion->SegundoNombre = $data['segundoNombre'];
                $objPreinscripcion->PrimerApellido = $data['primerApellido'];
                $objPreinscripcion->SegundoApellido = $data['segundoApellido'];
                $objPreinscripcion->tipoDocumento = $data['tipoDocumento'];
                $objPreinscripcion->documento = $data['documento'];
                $objPreinscripcion->programa = $data['programa'];
                $objPreinscripcion->telefono = $data['telefono'];
                $objPreinscripcion->email = $data['email'];
                $objPreinscripcion->estado = $data['estado'];
                if ($accion == "Agregar") {
                    if($objPreinscripcion->agregar() && $objPreinscripcion->estado == 1){
                        include("../email/enviar.php");
                    }
                    //echo "Esta en la opcion agregar del controlador";
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
            $objPreinscripcion->id = $data['id'];
            $objPreinscripcion->eliminar();
            break;
        case 'cambiarEstado':
            $objPreinscripcion = new Preinscripcion();
            $objPreinscripcion->id = $data['id'];
            $objPreinscripcion->estado = $data['estado'];
            $objPreinscripcion->cambiarEstado();
            break;

            
        
        default:
            echo "No llego ninguna acción";
            break;
    }
?>