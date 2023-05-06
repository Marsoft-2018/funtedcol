<div class="container" style="margin-top: 60px;">
    <h3>LISTA DE FOTOS EN LA GALERIA</h3>
    <table class="table table-striped" style="margin-top: 30px;">
        <thead>
            <tr>
                <th>id</th>
                <th>Categoría</th>
                <th>Imágen</th>
                <th>Descripción</th>
                <th>Año</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($objGaleria->listar() as $foto) {
                $carpeta_img = "C - ";
                $objCarpeta = new Categoria();
                $objCarpeta->id = $foto['idCategoria'];
                foreach($objCarpeta->cargar() as $r_categoria){
                    $carpeta_img = $r_categoria['nombre'];
                }
                ?>
                <tr>
                    <td><?php echo $foto['id'] ?></td>
                    <td><?php echo $carpeta_img ?></td>
                    <td><img src="../../../images/galeria/<?php echo $carpeta_img ?>/<?php echo $foto['imagen'] ?>" class="img-fluid" style="width: 100px;"></td>
                    <td><?php echo $foto['descripcion'] ?></td>
                    <td><?php echo $foto['anho'] ?></td>
                    <td><button onclick="editarGaleria('<?php echo $foto['id'] ?>')" class="btn btn-warning"><i class="fa fa-pencil">Editar</i></button> | <button onclick="eliminarFoto('<?php echo $foto['id'] ?>')"  class="btn btn-danger"><i class="fa fa-trash">Eliminar</i></button></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>