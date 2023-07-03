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
    <?php   
      include("barraContacto.php"); 
      include("barraContactoLateral.php"); 
    ?> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light"  style="background-color: rgb(192,0,0); margin: 0px; color:#000;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../img/escudo.png" alt="" width="60" height="54" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="color:#000;">
          <ul class="navbar-nav"  style="color:#000;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-university"></i> Institución
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"  style="color:#000;">
              <li><a class="dropdown-item" href="../#quienesSomos"><i class="fa fa-building"></i> Quines somos</a></li>
                <li><a class="dropdown-item" href="../#mision"><i class="fa fa-compass"></i> Misión</a></li>
                <li><a class="dropdown-item" href="../#vision"><i class="fa fa-eye"></i> Visión</a></li>
                <li><a class="dropdown-item" href="../#simbolos"><i class="fa fa-flag"></i> Símbolos institucionales</a></li>
                <li><a class="dropdown-item" href="../#licencia"><i class="fa fa-book"></i> Licencia y resoluciones</a></li>
                <li><a class="dropdown-item" href="index.php?pag=administracion"><i class="fa fa-sitemap"></i> Administracion</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bookmark-o"></i> Programas Técnicos Laborales
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="index.php?pro=SeguridadOcupacional"><i class="fa fa-heartbeat"></i> Seguridad ocupacional y laboral</a></li>
                <li><a class="dropdown-item" href="index.php?pro=AuxiliarAdministrativo"><i class="fa fa-line-chart"></i> Auxiliar Administrativo</a></li>
                <li><a class="dropdown-item" href="index.php?pro=AuxiliarRecursosHumanos"><i class="fa fa-empire"></i> Auxiliar en Recursos Humanos</a></li>
                <li><a class="dropdown-item" href="index.php?pro=AuxiliarContable"><i class="fa fa-money"></i> Auxiliar Contable y Financiero</a></li>
                <li><a class="dropdown-item" href="index.php?pro=AuxiliarPrimeraInfancia"><i class="fa fa-child"></i> Auxiliar en Educación para la Primera Infancia</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-comments-o"></i> Auxiliar En Mercadeo Y Ventas</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-plug"></i> Electricidad residencial</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-medkit"></i> Auxiliar en Servicios Farmacéuticos en Convenio con CEPRODENT</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-bicycle"></i> Entrenamiento Deportivo</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-desktop"></i> Auxiliar En Sistemas Informáticos</a></li>
              </ul>
            </li><li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-graduation-cap"></i> Diplomados y cursos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="../index.php#diplomados"><i class="fa  fa-dot-circle-o"></i> Diplomados</a></li>
                <li><a class="dropdown-item" href="../index.php#seminarios"><i class="fa  fa-dot-circle-o"></i> Seminarios</a></li>
                <li><a class="dropdown-item" href="../index.php#cursosSalud"><i class="fa  fa-dot-circle-o"></i> Cursos salud</a></li>
                <li><a class="dropdown-item" href="../index.php#cursosAdmin"><i class="fa  fa-dot-circle-o"></i> Cursos Administrativos</a></li>
                <li><a class="dropdown-item" href="../index.php#cursosAdmin"><i class="fa  fa-dot-circle-o"></i> Cursos de Belleza</a></li>
                <li><a class="dropdown-item" href="../index.php#cursosAdmin"><i class="fa  fa-dot-circle-o"></i> Otros cursos</a></li>
                </ul>              
            </li>            
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                    <i class="fa fa-clipboard"></i> Preinscripción
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../sistema/certificados/index.php" target="_blank"><i class="fa fa-bookmark-o"></i> Descargar cetificado</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div>
      <?php
      if(isset($_REQUEST['pro'])){
        $pagina = $_REQUEST['pro'];
        include "programas/$pagina.php";
      }else{
        $pagina = $_REQUEST['pag'];
        include "$pagina.php";
      }
       
      ?>
    </div>                
 <hr>
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalCenterTitle">Formulario de Preinscripción</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Déjanos tus datos y te llamaremos a darte una asesoría personalizada. 
          Recuerda que la preinscripción no tiene ningún costo y no te compromete a realizar el proceso de matrícula.
        </p>
        <hr>
        <?php
          include("programas/preinscripcion.php");
        ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalTelefono" tabindex="-2" aria-labelledby="modalTelefonoTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="modalTelefonoTitle">Nuestra Línea de Servicio al Cliente</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Llama al siguiente número: <h3>(+57) 324 294 3174</h3> 
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div> <!-- -->

<?php   
  include("footer.php"); 
 ?> 
    <a href="#" id="scroll-arriba" class="btnIrArriba"><i class="fa fa-angle-up"></i></a>

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