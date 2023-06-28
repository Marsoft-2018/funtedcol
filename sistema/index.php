<?php
  
  if(session_start()){    
    session_destroy();
  }
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
    <link rel="shortcut icon" href="../../img/icono.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="css/bootstrap.min.css"> -->
     <!-- Site Metas --><!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


  </head>
  <body> 
    <div>
      <hr>
        <div class="row mt-5 mb-5">
            <div class="col" style="display: flex; justify-content: center; flex-flow:column nowrap; text-align:center; padding:60px">
                <div class="container" style="border-radius:12px; padding:50px; width:70%;">
                    <img src="../img/escudoG.png" alt="" style="width: 25%;" class="mb-2">
                    <h3 class="mb-2">Login</h3>
                    <form action="panel.php" method="post">
                        <input type="text" class="form form-control mt-2" name="usuario" placeholder="Usuario" required>
                        <input type="password" class="form form-control mt-2" name="contrasena" placeholder="Contraseña" required>
                        <hr>
                        <button type="submit" class="btn btn-danger btn-lg mt-2" style="width: 100%;">Ingresar</button>
                    </form>
                </div>
            </div>
            <div class="col" style="height: 100%; display: flex; justify-content: start; flex-flow:column nowrap; align-items:center; background: linear-gradient(195deg,#c00000,#623237); color: #fff; text-align: center;padding:35px;">
                <h1 class="mb-2">FUNTEDCOL</h1>
                <div style="min-height: 50%; max-height:70%;width:90%;">
                    <img src="../img/login.jpg" alt="" style="width: 70%;">
                </div>                 
                <footer class="mt-2" >
                    <p>
                    Aprobada por la Secretaria de Educación de Bolívar Mediante Licencia de Funcionamiento Resolución 2487 de 2022; </br>
                    establecida por el Decreto 4904 de 2009, Decreto 1075 de 2015, Ley G/ral de Educación 115 de 1994.</br>
                    </br>
                    E-mail: funtedcol2018@gmail.com - info@funtedcol.com.co - director@funtedcol.com.co
                    </br>
                    Teléfono: 3242943174
                    </p>
                    </br>
                </footer>
            </div>
        </div>
      <hr>
    </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>