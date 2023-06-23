<?php
require("../../php/Modelo/conexion.php");
require("../../php/Modelo/programa.php");
require("../../php/Modelo/certificado.php");

// $request_body = file_get_contents('php://input');
// $data = json_decode($request_body, true);

$objCertificacion = new Certificado();
$id = "";
$documento = "";
if(isset($_REQUEST['id'])){
    $objCertificacion->id = $_REQUEST['id'];
}
if(isset($_REQUEST['documento'])){
    $objCertificacion->documento = $_REQUEST['documento'];
}


ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado</title>
    <style>
        body{
            background: linear-gradient(180deg,#050823,#080d3c);
        }
        .container{
            position: relative;
            border: 1px solid #cecece;
            border-radius: 10px;
            background: url("http://<?php echo $_SERVER['HTTP_HOST']; ?>/funtedcol/img/marcaAgua.png");
            background-color: #fff;
            background-position: center;
            background-size: 25%;
            background-repeat:no-repeat;
            text-align: center;
            height: 710px;
        }
        .escudos{
            position: relative;
            width: 71%;
            height: 60px;
            margin: auto;
            margin-top: 30px;            
            margin-left: 90px;
            margin-right: 150px;
            z-index: 50;
        }
        .escudos div{
            width: 100px;
            height: 100px;
            float: left;
        }
        .escudos .escudo1{
            width: 100px;
            height: 100px;
            float: left;
        }
        .escudos .escudo2{
            width: 100px;
            height: 100px;
            float: right;
        }
        .escudos div img{
            width: 100%;
            height: 100%;
        }
        .banda{
            position: absolute;
            top: 0px;
            right: 0px;
            width: 250px;
            height: 100%;
            z-index: -1;
        }
        .banda img{
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .cabecera *{
            margin: 0;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .cabecera{
            margin: 0 auto;
            width: 65%;
            z-index: 52;
        }

        .cabecera h1{
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 2.5em;
            letter-spacing: 2px;
        }

        .cabecera h2{
            margin-top: 25px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1em;
            letter-spacing: 2px;
        }
        .cabecera h4{
            font-size: 1em;
        }
        .cabecera p{
            font-size: 0.7em;
        }
        .estudiante .nombre{
            display: block;
            width: 70%;
            margin: auto;
            margin-top: 10px;
            font-family: "Edwardian Script ITC";
            font-size: 2em;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .estudiante .documento{
            margin-top: 5px;
            font-size: 1em;
        }
        .formacion .programa{
            display: block;
            width: 70%;
            margin: auto;
            margin-top: 1px;
            font-size: 1.2em;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        /*
        .estudiante h2{
            margin-top: 25px;
            font-family: "Edwardian Script ITC";
            font-size: 2.5em;
            letter-spacing: 2px;
        }*/
        .bandaVerificacion{
            margin-top: 65px;
            width: 95%;
            font-size: 10px;
            z-index: 50;
            text-align: left;
            padding-left: 100px;
        }
        .firmas{
            position: relative;
            width: 80%;
            height: 55px;
            margin-top: 10px;
            margin-left: 40px;
            margin-bottom: 10px;
            margin-right: 150px;
        }
        .firmas .firma1{
            float: left;
            width: 200px;
            height: 60px;
            z-index: 50;
            margin-left: 100px;
        }
        .firmas .firma2{
            float: right;
            width: 200px;
            height: 60px;
            z-index: 50;
            margin-right: 100px;
        }
        .firmas div img{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="escudos">
            <div class="escudo1">
                <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/funtedcol/sistema/certificados/img/escudoColombia.jpg" alt="">
            </div>
            <div class="escudo2">
                <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/funtedcol/img/escudoG.png" alt="">
            </div>
        </div>             
        <div class="banda">
            <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/funtedcol/sistema/certificados/img/bandaDiploma.png" alt="">
        </div>
        <div class="cabecera">
            <h1>FUNTEDCOL</h1>
            <h4>INSTITUCION DE EDUCACION PARA EL TRABAJO Y DESARROLLO HUMANO</h4>
            <h3>FUNDACIÓN TRABAJANDO POR LA EDUCACIÓN Y EL DESARROLLO DE COLOMBIA</h3>
            <p>
                Aprobada por la Secretaria de Educación de Bolívar Mediante Licencia de Funcionamiento Resolución 2487 de 2022; establecida<br>por el Decreto 4904 de 2009, Decreto 1075 de 2015, Ley G/ral de Educación 115 de 1994.
            </p>
            <h2>CERTIFICA QUE</h2>
        </div>
        <?php
            foreach ($objCertificacion->cargar() as $certificado) {
        ?>
        
        <div class="estudiante">
            <h2 class="nombre"><?php echo $certificado['nombre']; ?></h2>
            <h3 class="documento">Documento de Identidad N° <?php echo $certificado['documento']; ?></h3>
            <p>Cursó y aprobó la Formación Teórico – Práctica</p>
            <div class="formacion">
               <h2 class="programa"><?php echo $certificado['programa']; ?></h2>
               <p>
                    Con una intensidad de: 40 horas
                    Ciudad y fecha de expedición: Carmen de Bolívar <?php echo $certificado['dia']; ?> de <?php echo $certificado['mes']; ?> del <?php echo $certificado['anho']; ?>
               </p>
            </div>
        </div> 
        
        <?php
            }
        ?>
        <div class="firmas">
            <div class="firma1">
                <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/funtedcol/sistema/certificados/img/firmaDirector.jpg" alt="">
                <h5>
                    RONALD PALENCIA BUELVAS<br>
                    DIRECTOR
                </h5>
            </div>
            <div class="firma2">
                <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/funtedcol/sistema/certificados/img/firmaCoordinadora.jpg" alt="">
                <h5>
                    YEIMYS DIAZ HERRERA<br>
                    COORD. ACADEMICA
                </h5>
            </div>
        </div>  
        <div class="bandaVerificacion">
            <p><br><br>
                <strong>REGISTRO:</strong>0039392122 0025 
                Consulte la autenticidad de este documento 
                <strong>E-mail</strong>: funtedcol2018@gmail.com 
                <strong>Teléfono</strong>: 3002621973 - 3242943174
            </p>
        </div>
    </div>
</body>
</html>
<?php
$html = ob_get_clean();
//echo $html;
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$pdf = new Dompdf();
$opciones = $pdf->getOptions();
$opciones->set(array('isRemoteEnabled'=>true));
$pdf->setOptions($opciones);
//$pdf->loadHtml("Hola desde el pdf");
$pdf->loadHtml($html);
$pdf->setPaper('letter','landscape');
//$pdf->setPaper('A4','landscape');
$pdf->render();
$pdf->stream("certificacion.pdf",array("Attachment"=>false));
?>