<?php
  require("../php/Modelo/conexion.php");
  require("../php/Modelo/usuario.php");
$datos = null;
if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
  $objUsuario = new Usuario();
  $objUsuario->usuario   =  $_POST['usuario'];
  $objUsuario->contrasena   =  $_POST['contrasena'];
  foreach ($objUsuario->cargar() as $usuario) {
    $datos = $usuario['usuario'];
  }
  if($datos == null){
      header( 'Location: index.php' ) ;
      die();
  }
}else{
  header( 'Location: index.php' ) ;
  die();
}
  require("../php/Modelo/categoria.php");
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
  <nav class="nav nav-pills nav-fill navbar-expand-lg p-1">
  <?php
  $mod = 1;
    if(isset($_GET['mod'])){
      $mod = $_GET['mod'];
    }
  ?>
    
    <a class="nav-link <?php if($mod == 1){ echo 'active'; } ?>" aria-current="page" href="index.php?mod=1"><i class="fa fa-ticket"></i> Preinscripciones</a>
    <a class="nav-link <?php if($mod == 2){ echo 'active'; } ?>" href="index.php?mod=2"><i class="fa fa-book"></i> Matriculas</a>
    <a class="nav-link <?php if($mod == 3){ echo 'active'; } ?>" href="index.php?mod=3"><i class="fa fa-mortar-board"></i> Cerificaciones</a>
  </nav> 
  <div class="row">
    <div class="col m-4">
      <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-plus"> </i> Nuevo</button>
    </div>
  </div>
  <div class="row">
    <div class="col p-5" id="respuesta"></div>
  </div>
    <div id="modulos" style="padding:20px; min-height: 450px;">        
        <?php
          include("listado.php");
        ?>
      
    </div>                
 <hr>
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalCenterTitle">Formulario de registro</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">         
        <?php
          include("formulario.php");
        ?>
      </div>
    </div>
  </div>
  </div>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>