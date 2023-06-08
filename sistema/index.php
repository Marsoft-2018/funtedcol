<?php
  require("../php/Modelo/conexion.php");
  require("../php/Modelo/programa.php");
  require("../php/Modelo/preinscripcion.php");
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
    <title>Funtedcol</title>
    <meta name="keywords" content="institución de educación para el trabajo y desarrollo humano, El Carmen de Bolívar">
    <meta name="description" content="FUNTEDCOL es un grupo multidisciplinario de profesionales que creamos, desarrollamos, implementamos y ofrecemos servicios educativos con altos estándares de calidad, en las áreas de formación para el Trabajo y Desarrollo Humano">
    <meta name="author" content="Ing. Jose Alfredo Tapia">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../img/icono.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="css/bootstrap.min.css"> -->
     <!-- Site Metas --><!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="../js/modernizer.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


  </head>
  <body> 
  <header class="mt-0" 
    style="display: flex; 
    flex-flow:row nowrap; 
    justify-content: start; 
    align-items: center;
    background: linear-gradient(245deg,#c00000,#ed3237); 
    color: #fff; text-align: center; padding: 20px;">
    <img src="../img/escudo.png" alt="" width="60" height="54" class="d-inline-block align-text-top">
    <h2 style="color: #fff;">
        Sistema - control de preiscipciones, matriculas y certificaciones
    </h2>
  </header> 
  <nav class="nav nav-pills nav-fill navbar-expand-lg">
  <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-ticket"></i> Preinscripciones</a>
  <a class="nav-link" href="#"><i class="fa fa-book"></i> Matriculas</a>
  <a class="nav-link" href="#"><i class="fa fa-mortar-board"></i> Cerificaciones</a>
</nav>  
    <div id="modulos" style="padding:20px;">
      <?php
        $objPreinscripcion = new Preinscripcion();        
      ?>

      <table class="table table-striped table-sm data-table">
        <thead>
          <tr>
            <th>Num</th>
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
              <button class="btn btn-warning  btn-sm" onclick="editar('<?php echo $preinscipcion['id']; ?>')"><i class="fa fa-edit"> </i></button>
              <button class="btn btn-danger btn-sm" onclick="eliminar('<?php echo $preinscipcion['id']; ?>')"><i class="fa fa-trash"> </i></button>
              
            </td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>

    </div>                
 <hr>
  <footer class="mt-5" style="display: flex; justify-content: center; flex-flow:column nowrap; background: linear-gradient(245deg,#c00000,#ed3237); color: #fff; text-align: center; padding: 60px;">
    <p>
      Sistema - control de preiscipciones, matriculas y certificaciones
    </p>
    </br>
  </footer>
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="../js/main.js"></script>

  </body>
</html>