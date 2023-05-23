<?php
    require("../php/Modelo/conexion.php");
    require("../php/Modelo/programa.php");
?>

<div>
    <div class="row">
        <div class="col mb-3">
            <label for="priApellido" class="form-label">Primer nombre</label>
            <input type="text" class="form-control" id="priApellido" placeholder="Digita tu nombre aquí">
        </div>
        <div class="col mb-3">
            <label for="segNombre" class="form-label">Segundo nombre</label>
            <input type="text" class="form-control" id="segNombre" placeholder="Digita tu nombre aquí">
        </div>        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="priApellido" class="form-label">Primer apellido</label>
            <input type="text" class="form-control" id="priApellido" placeholder="Digita tu apellido aquí">
        </div>
        <div class="col mb-3">
            <label for="segApellido" class="form-label">Segundo apellido</label>
            <input type="text" class="form-control" id="segApellido" placeholder="Digita tu apellido aquí">
        </div>        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="email" class="form-control" id="celular" placeholder="">
        </div>
        <div class="col mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="name@ejemplo.com">
        </div>        
    </div>
    <div class="row">        
        <div class="col mb-3">
            <?php
                $objPrograma = new Programa();

            ?>
            <label for="email" class="form-label">Programas</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Selecciona..</option>
                <?php
                foreach ($objPrograma->listar() as $programa) {
                ?>
                <option value="<?php echo $programa['id'] ?>"><?php echo $programa['nombre'] ?></option>
                
                <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                <label class="form-check-label" for="flexCheckChecked">
                    He leído y acepto la <a href="?pag=autorizacionDatos" target="_blank" style="font-weight: bold; font-size: 11px"> Política de Tratamiento de Datos Personales</a>            										
                </label>
            </div>
        </div>
    </div>
</div>