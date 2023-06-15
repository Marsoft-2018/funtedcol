<form  onsubmit="return registrar()">
    <div class="m-5">
        <div class="row">
            <div class="col mb-3">
                <label for="tipoRegistro" class="form-label">Tipo de registro</label>
                <select class="form-control" id="tipoRegistro" required>
                    <option value="">Seleccione...</option>
                    <option value="preinscripcion">Preinscripción</option>
                    <option value="matricula">Matricula</option>
                    <option value="certificacion">Certificación</option>
                </select>
            </div>     
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="priNombre" class="form-label">Primer nombre</label>
                <input type="text" class="form-control" id="priNombre" placeholder="Digita tu nombre aquí" required>
            </div>
            <div class="col mb-3">
                <label for="segNombre" class="form-label">Segundo nombre</label>
                <input type="text" class="form-control" id="segNombre" placeholder="Digita tu nombre aquí">
            </div>        
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="priApellido" class="form-label">Primer apellido</label>
                <input type="text" class="form-control" id="priApellido" placeholder="Digita tu apellido aquí" required>
            </div>
            <div class="col mb-3">
                <label for="segApellido" class="form-label">Segundo apellido</label>
                <input type="text" class="form-control" id="segApellido" placeholder="Digita tu apellido aquí">
            </div>        
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="tipoDocumento" class="form-label">Tipo de documento</label>
                <select class="form-control" id="tipoDocumento" required>
                    <option value="">Seleccione...</option>
                    <option value="TI">Tarjeta de identidad</option>
                    <option value="CC">Cédula de ciudadanía</option>
                    <option value="CE">Cédula de extranjería</option>
                    <option value="NES">Número de Secretaría</option>
                </select>
            </div>
            <div class="col mb-3">
                <label for="numeroDocumento" class="form-label">Numero de documento</label>
                <input type="text" class="form-control" id="numeroDocumento" >
            </div>        
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="telefono" class="form-label">Tel. Celular</label>
                <input type="text" class="form-control" id="telefono" placeholder="" required>
            </div>
            <div class="col mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="name@ejemplo.com" required>
            </div>        
        </div>
        <div class="row">        
            <div class="col mb-3">
                <label for="programa" class="form-label">Programas</label>
                <select class="form-select" id="programa" required>
                    <option selected value="">Selecciona..</option>
                    <?php
                        $objCategoria = new Categoria();
                        foreach ($objCategoria->listar() as $categoria) {
                            $objPrograma = new Programa();
                            $objPrograma->idCategoria = $categoria['id'];
                    ?>
                            <optgroup label="<?php echo $categoria['nombre'] ?>">
                    <?php     foreach ($objPrograma->listar_categoria() as $programa) {   ?>
                                <option value="<?php echo $programa['id'] ?>"><?php echo $programa['nombre'] ?></option>
                    <?php     }   ?>
                            </optgroup>
                    <?php   } ?>
                </select>
            </div>
        </div>
    </div>
    
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary "  data-bs-dismiss="modal">Agregar</button>
      </div>
</form>