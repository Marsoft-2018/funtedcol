<?php   
    require("../modelo/conexion.php");
    require("../modelo/categorias.php");
    require("../modelo/galeria.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Panel galeria</title><!-- Basic -->
    <meta name="keywords" content="Colegio san rafael, el Carmen de Bólivar">
    <meta name="description" content="Colegio san rafael, el Carmen de Bólivar">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../../../images/logos/logo_32.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../../../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/font-awesome.css" />
    <style>
        body{
            background-color: #12447C;
        }
        main{
            padding: 40px 30px 30px;
            background: #fff;
            border-radius: 5px;
            border-top: 5px solid #feb806;
            border-bottom: 5px solid #feb806;
            margin-top: 60px;
        }
    </style>
</head>
<body>
    <header></header>
    <main class="container">
        <div class="formulario" id="formulario">
            <?php 
                include("formulario.php");            
            ?>
        </div>
        <div class="listad2" id="listad2">
        </div>
    </main>

<a href="#" id="scroll-to-top" class="dmtop global-radius show"><i class="fa fa-angle-up"></i></a>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<!-- ALL JS FILES -->
<script src="../../../js/all.js"></script>
<script src="../../../js/galeria.js"></script>  


</body>
</html>