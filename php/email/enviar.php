<?php
$mensaje = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Confirm Email</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <style>
            body {
              font-family: "Roboto", sans-serif;
                -webkit-font-smoothing:antialiased;
                -webkit-text-size-adjust:none;
                width: 100%;
                height: 100%;
                color: #37302d;
                background: #ffffff;
              }
            
              h1, h2, h3 {
                padding: 0;
                margin: 0;
                color: #444444;
                font-weight: 400;
                line-height: 110%;
              }

            .card{
              width: 38rem;
              border: 1px solid #cacaca;
              border-radius: 10px;

            }
            
            .card h5{
                font-size: 1.5em;
                text-align: center;
                padding: 10px;   
                margin: 0px;
                color:  #011848;
                border-bottom: 3px solid #6C95EB;
            }

            .card-body{
              color: #3d3d3d;
              padding: 10px;              
            }

            .card-body h5{
              font-size: 1.2em;
              text-align: left;
              padding: 0px 10px;   
              margin: 0px;
              color: #C00000;
                border-bottom: 0px;
            }

            .card-body p{
              text-align: left;
              line-height: 1.5em;
            }
        </style>
    </head>
    <body>
        <div class="card">
          <h5>PREINSCRIPCION DESDE LA PAGINA</h5>
          <div class="card-body">
            <h5 class="card-title">PROGRAMA: '.$programa.'</h5>
            <p class="card-text">
                Datos de contacto:<br><br>
                Fecha: '.date().'<br>
                Nombre: '.$primerNombre.' '.$segundoNombre.' '.$primerApellido.' '.$segundoApellido.'<br>
                celular: '.$celular.' 
                Email: '.$email.'
            </p>            
          </div>
        </div>
    </body>
</html>';
echo "Hola desde el enviar";
require("config_email.php");
$obj = new Correo();
//$obj->para = "info@funtedcol.com.co";
$obj->para = "josealf7@gmail.com";
$obj->asunto = "Preinscripción";
$obj->mensaje = $mensaje;
$obj->enviar();



