<?php
    $objPreinscripcion = new Preinscripcion();   
    $estado = 1;  
    if(isset($_GET['mod'])){
        $estado = $_GET['mod'];
    }   
    $objPreinscripcion->estado = $estado;
?>

<table class="table table-striped table-sm data-table">
<thead>
    <tr>
    <th>Código</th>
    <th>Primer Nombre</th>
    <th>Segundo Nombre</th>
    <th>Primer Apellido</th>
    <th>Segundo Apellido</th>
    <th>Tipo Documento</th>
    <th>Numero Documento</th>
    <th>Correo</th>
    <th>Teléfono</th>
    <th>Programa</th>
    <th>Fecha de reg</th>
    <th>Acciones</th>
    </tr>
</thead>
<tbody>
    <?php
    foreach ($objPreinscripcion->listar() as $preinscipcion) {    
        $objPrograma = new Programa();
        $objPrograma->id =  $preinscipcion['programa'];      
    ?>
    <tr>
    <td><?php echo $preinscipcion['id']; ?></td>
    <td><?php echo $preinscipcion['PrimerNombre']; ?></td>
    <td><?php echo $preinscipcion['SegundoNombre']; ?></td>
    <td><?php echo $preinscipcion['PrimerApellido']; ?></td>
    <td><?php echo $preinscipcion['SegundoApellido']; ?></td>
    <td><?php echo $preinscipcion['tipoDocumento']; ?></td>
    <td><?php echo $preinscipcion['documento']; ?></td>
    <td><?php echo $preinscipcion['email']; ?></td>
    <td><?php echo $preinscipcion['telefono']; ?></td>            
    <td>
        <?php 
        foreach ($objPrograma->cargar() as $programa) {
            echo $programa['nombre'];
        }  
        
        ?>
    </td>
    <td><?php echo $preinscipcion['fechaIngreso']; ?></td>
    <td>
        <?php if($estado < 3){ ?>
            <button class="btn btn-info  btn-sm" onclick="cambiarEstado('<?php echo $preinscipcion['id']; ?>','<?php echo $estado+1; ?>')" title="Cambiar a estado matriculado"><i class="fa fa-flag"> </i></button>
        <?php }  ?>
        <button class="btn btn-danger btn-sm" onclick="eliminarRegistro('<?php echo $preinscipcion['id']; ?>','<?php echo $estado; ?>')"><i class="fa fa-trash"> </i></button>
        
    </td>
    </tr>
    <?php
    }
    ?>
</tbody>
</table>
