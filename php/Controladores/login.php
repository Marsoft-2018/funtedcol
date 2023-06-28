<?php
    require("../modelo/conexion.php");
    require("../modelo/usuario.php");

    // $request_body = file_get_contents('php://input');
    // $data = json_decode($request_body, true);


    $accion = "";
    if(isset($_REQUEST['accion'])){
        $accion = $_REQUEST['accion'];
    }elseif (isset($_POST['accion'])){
        $accion = $_POST['accion'];
    }
    
    switch ($accion) {
        case 'cambiarPassword':
            $objUsuario = new Usuario();
            $objUsuario->usuario   =  $_REQUEST['usuario'];
            $objUsuario->contrasena   =  $_REQUEST['contrasena'];
            echo $objUsuario->cambiarPassword();
            break;
        case 'listar':
            $objUsuario = new Usuario();
            include("../vista/lista.php");
            break;
        case 'login':
            $objUsuario = new Usuario();
            $objUsuario->usuario   =  $_POST['usuario'];
            $objUsuario->contrasena   =  $_POST['contrasena'];
            echo json_encode($objUsuario->cargar());
            break;
        case "Agregar": case "Modificar":
                $objUsuario = new Usuario();   
                $objUsuario->id       =  $_POST['id'];
                $objUsuario->usuario   =  $_POST['usuario'];
                $objUsuario->contrasena   =  $_POST['contrasena'];
                if ($accion == "Agregar") {
                    $objUsuario->agregar();
                }else{
                    $objUsuario->modificar();
                }
            break;
        case "Nuevo" : case "Editar":

            $objUsuario = new Usuario();
            include("../vista/formulario.php");
            break;
        case 'Eliminar':
            $objUsuario = new Usuario();
            $objUsuario->id = $_POST['id'];
            $objUsuario->eliminar();
            break;     
        
    }
?>