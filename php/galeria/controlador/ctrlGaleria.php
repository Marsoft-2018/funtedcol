<?php
    require("../modelo/conexion.php");
    require("../modelo/categorias.php");
    require("../modelo/galeria.php");


    $accion = "";
    if(isset($_REQUEST['accion'])){
        $accion = $_REQUEST['accion'];
    }

    switch ($accion) {
        case 'listar':
            $objGaleria = new Galeria();
            include("../vista/lista.php");
            break;
        case 'cargar':
            $objGaleria = new Galeria();
            var_dump($objGaleria->cargar());
            break;
        case "Agregar": case "Modificar":
                $objGaleria = new Galeria();   
                $objCategoria = new Categoria();
                $objCategoria->id = $_POST['idCategoria'];
                foreach($objCategoria->cargar() as $cat){
                    $categoria = $cat['nombre'];
                }
                if(isset($_FILES['imagen'])){
                    $archivo = $_FILES['imagen'];
                    $tipo       = $archivo["type"];
                    $nombreTemp = $archivo["tmp_name"];
                    $tamanho    = $archivo["size"];
                    $destino    = "../../../images/galeria/".$categoria."/";
                    $ext = substr( strrchr($archivo["name"], '.'), 1);
                    $nombreIMG  = $archivo["name"];
                    //var_dump($archivo);
                    @unlink($destino.$nombreIMG);
                    $resultado = @move_uploaded_file($nombreTemp, $destino.$nombreIMG);
                    if ($resultado){
                        $objGaleria->imagen = $nombreIMG;                
                    } else {
                        $objGaleria->imagen = "default.png"; 
                    }
                }else{
                   $objGaleria->imagen = "default.png"; 
                }
                $objGaleria->id            =  $_POST['id'];
                $objGaleria->idCategoria   =  $_POST['idCategoria'];
                $objGaleria->descripcion   =  $_POST['descripcion'];
                $objGaleria->anho          =  $_POST['anho'];
                if ($accion == "Agregar") {
                    $objGaleria->agregar();
                }else{
                    $objGaleria->modificar();
                }
            break;
        case "Nuevo" : case "Editar":

            $objGaleria = new Galeria();
            include("../vista/formulario.php");
            break;
        case 'Eliminar':
            $objGaleria = new Galeria();
            $objGaleria->id = $_POST['id'];
            $objGaleria->eliminar();
            break;
        
        default:
            # code...
            break;
    }
?>