<?php
    $imagen = "";
    $descripcion = "";
    $id = "";
    $idCategoria = "";
    $carpeta = "";
    $funcionBoton = "agregarFoto()";
    if(isset($_REQUEST['id'])){
        $objGaleria->id = $_REQUEST['id'];
        foreach ($objGaleria->cargar() as $foto) {
            $id = $foto['id'];
            $idCategoria = $foto['idCategoria'];
            $imagen = $foto['imagen'];
            $descripcion = $foto['descripcion'];
            $anho = $foto['anho'];
            $estado = $foto['estado'];
            $funcionBoton = "modificarFoto('".$id."')";
            $objCarpeta = new Categoria();
            $objCarpeta->id = $foto['idCategoria'];
            foreach($objCarpeta->cargar() as $r_categoria){
                $carpeta = $r_categoria['nombre'];
            }
        }
    }
?>
<div class="container">   
    <header ><h2>Formulario para Fotos</h2></header> 
    <div class="row">
        <div class="col-md-6" style="background-color: #efefdf; color:#000;">
            <label for="imagen" style="display: block; width: 100%; background-color: #e0e0df; color:#000;"><b>Imagen:</b></label>
            <div style="height:400px; background-color:#3d3d3d;">
            <?php
                if(isset($imagen)){?>
                    <img src="../../../images/galeria/<?php echo $carpeta ?>/<?php echo $imagen ?>" alt="" class="previsualizar img-fluid"  style="height: 100%;">
                <?php
                    }else{
                ?>
                    <img src="" alt="" class="previsualizar img-fluid" style="width: 300px; height: 100%;">
                <?php
                    }

            ?>
            </div>
            <input type="file" id="imagen" value="<?php echo $imagen; ?>" class="imagen form-control py-1" onchange="previsualizar(this)" placeholder=""><br>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="progreso" ><span id="porcentaje"></span></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-lg-12">
                    <label for=""><b>Codigo:</b></label>
                    <input type="text" id="id" value="<?php echo $id; ?>" class="form-control" placeholder=""><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for=""><b>Categoría</b></label>
                    <select class="form form-control js-example-basic-single"
                    name="state" style="width: 100%;" id="idCategoria">
                        <option value="">Seleccione...</option>
                        <?php
                            $objCat = new Categoria();
                            $objCat->id = $idCategoria;
                            foreach($objCat->listar() as $category){
                                $catSel = "";
                                if($category['id'] == $idCategoria){
                                    $catSel = "selected";
                                }
                                ?>
                                <option value="<?php echo $category['id'] ?>" <?php echo $catSel ?>><?php echo $category['nombre'] ?></option>
                                <?php
                            }
                        ?>                        
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for=""><b>Descripcion:</b></label>
                    <textarea name="descripcion"  id="descripcion" class="form-control" cols="30" rows="3"><?php echo $descripcion; ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for=""><b>Año:</b></label>
                    <input type="number" id="anho" value="<?php echo $anho; ?>" class="form-control" placeholder=""><br>
                </div>                
            </div>
        
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" onclick="nuevaFoto()">Nueva</button>
                    <button type="button" class="btn btn-info" onclick="listar_galeria()">Lista</button>
                    <button type="button"  class="btn btn-success" onclick="<?php echo $funcionBoton?>">Guardar</button>
                    <button type="button"  class="btn btn-danger" onclick="eliminarFoto('<?php echo $id; ?>')">Eliminar</button>
                </div>
            </div>
        </div>        
    </div>
    
</div>
