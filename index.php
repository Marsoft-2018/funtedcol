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
    <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
 -->
    <!-- Bootstrap 4 CSS-->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->

     <!-- Site Metas --><!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>    
    <?php 
      include("paginas/barraContacto.php");
      include("paginas/barraContactoLateral.php"); 
      include("paginas/navBar.php"); 
    ?>
    
    <div id="carouselExampleCaptions" class="carousel slide mt-0" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/Imagen2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/Imagen11.png" class="d-block w-100" alt="...">
            <!-- <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div> -->
            </div>
            <div class="carousel-item">
            <img src="img/Imagen1.png" class="d-block w-100" alt="...">
            <!-- <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div> -->
            </div>
            <div class="carousel-item">
            <img src="img/Imagen10.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">                
                <p style="text-align: right;font-size:6px;"><a href="https://www.freepik.es/foto-gratis/cierrese-arriba-globo-cristalino-que-descansa-sobre-hierba-bosque_5016918.htm#query=mundo&position=26&from_view=keyword&track=sph">Imagen de jcomp</a> en Freepik</p>
            </div><!--  -->
            </div>
            <div class="carousel-item">
              <img src="img/Imagen12.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row gx-5 m-3 mb-4">
      <h3 style="text-align: center; font-size:3em;margin-top:60px;margin-bottom:60px;">PROGRAMAS TÉCNICOS LABORALES</h3>
    </div>
    <section class="programas" style="display: flex; justify-content: center;">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-5">
        <div class="card m-2" style="width: 100%; height:100%">
          <img src="img/Recursos_Humanos.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            
            <h2 class="card-title" style="color: #c00000;">Auxiliar Contable y Financiero</h2>
            <p class="card-text">La carrera técnica de Auxiliar Contable y Financiero de FUNTEDCOL Realizan la medición y reconocimiento de las transacciones contables y financieras, realizan procesos de liquidación de impuestos, cuantifican costos y registran las operaciones de flujos monetarios, verifican inventarios, depuran y apoyan la elaboración de informes, comprobantes y documentos relacionados con empresa o personas naturales. Son empleados por el sector público y privado.</p>
            <a href="paginas/index.php?pro=AuxiliarContable" class="btn btn-danger">Ver más</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-5">
        <div class="card m-2" style="width: 100%; height:100%">
            <img src="img/syso.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title" style="color: #c00000;">Seguridad ocupacional y laboral</h2>
              <p class="card-text">El técnico en SEGURIDAD OCUPACIONAL Y LABORAL de FUNTEDCOL estará en la capacidad de Apoyar la inspección, capacitaciones, manejo de indicadores de gestión y condiciones de los lugares de trabajo, SG-SST, además tramitan las incapacidades ante las administradoras de riesgo, procesan información y ayudan en las actividades de los sistemas de seguridad en el trabajo, ambientales y de seguridad industrial. Están empleados por empresas públicas y privadas.</p>
              <a href="paginas/index.php?pro=SeguridadOcupacional" class="btn btn-danger">Ver más</a>              
            </div>
          </div>
          </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-5">
          <div class="card m-2" style="width: 100%; height:100%">
            <img src="img/administrativo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              
              <h2 class="card-title" style="color: #c00000;">Auxiliar administrativo</h2>
              <p class="card-text">La carrera en AUXILIAR ADMINISTRATIVO de FUNTEDCOL forma técnicos laborales que están en la capacidad de realizar actividades de organización y gestión de archivos, servicio al cliente, entre otras. Además tiene las competencias para registrar las operaciones contables de una compañía, elaborar la nómina y hacer análisis financieros.</p>
              <a href="paginas/index.php?pro=AuxiliarAdministrativo" class="btn btn-danger">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-5">
          <div class="card m-2" style="width: 100%; height:100%">
            <img src="img/primeraInfancia.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              
              <h2 class="card-title" style="color: #c00000;">Auxiliar en Primera Infancia</h2>
              <p class="card-text">
                La carrera AUXILIAR EN PRIMERA INFANCIA de FUNTEDCOL estará en capacidad de cuidar y atender niños de edad preescolar en sus espacios recreativos y educativos, suministrándoles alimentos y loncheras, haciendo acompañamiento en sus juegos y asistiendo al profesor en la programación de clases; el auxiliar apoyara en el cuidado de los derechos de la primera infancia con especial énfasis en el desarrollo integral del niño, basado en la construcción de autonomía y competencias a través de proyectos y otras técnicas didácticas, además Prestan servicio de apoyo en actividades educativas bajo la supervisión de un educador infantil, orientadas a promover el desarrollo integral de las niñas y los niños en la educación inicial y pre-escolar.
              </p>
              <a href="#" class="btn btn-danger">Ver más</a>
            </div>
          </div>
        </div>
    </div>
    </section>
    <?php include("paginas/videos.php"); ?>        
    <div class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('');" id="quienesSomos">
      <div class="container">
        <div class="row text-right align-items-center">
            <div class="col-md-12"  style="background-color: rgba(250,250,250,0.2); padding: 15px;">
                <div class="mision-vision text-right" >
                    <h1 style="color: #000;">QUIENES SOMOS</h1>
                    <p style="color: #000; font-size: 1.3em; text-align:justify;">                      
                      El Objeto Social de FUNTEDCOL, es la de ser una Institución formadora y capacitadora de jóvenes y adultos teniendo en cuenta las necesidades de las personas para el Trabajo y el Desarrollo del Talento Humano, mediante la formación integral en aspecto académicos y por competencias laborales generales y específicas, así, como las organizativas, comunicativas, técnicas y tecnológicas, las Intelectuales, interpersonales, personales, las emprendedoras, facilitando el desarrollo de habilidades y destrezas para el trabajo, artesanal, artístico recreacional,   en los diferentes sectores de la producción, la distribución, y de los servicios; para ser líderes capaces de montar sus propias microempresas, que respondan a las necesidades de la comunidad y del entorno empresarial, impulsando el desarrollo sostenible a nivel local, regional, nacional y se articulen en el mundo globalizado de la economía de hoy.<br><br>
                      Aspectos Legales: Los aspectos legales son los cimientos en que se apoya FUNTEDCOL, para su funcionamiento, especialmente el art. 67 de la Constitución Política de Colombia, que expresa que la educación es un derecho de la persona y un servicio público que tiene una función social; en la Ley 30 de 1992, en la Ley 115 General de la Educación del año 1994, que en sus diferentes artículos fundamenta las bases del Sistema Educativo Colombiano en su Título I, Disposiciones Preliminares y en los siguientes artículos:
                      El artículo2º -Servicios Educativos: Comprende el conjunto de Normas Jurídicas, los programas curriculares, la educación formal e informal, de los establecimientos educativos, las instituciones sociales (estatales o Privadas) con funciones educativas, culturales y recreativas, los recursos humanos, tecnológicos, metodológicos, materiales, administrativos y financieros, articulados en procesos y estructuras para alcanzarlos objetivos de la educación.
                    </p>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('img/fondos/mision.jpg');" id="mision">
      <div class="container" >
          <div class="row">
              <div class="col" style="background-color: #c0000033; padding: 15px;">
                  <div class="mision-vision text-left">
                      <h1>MISION</h1>
                      <p style="color: #fff; font-size: 1.2em;text-align:justify;">FUNTEDCOL es un grupo multidisciplinario de profesionales que creamos, desarrollamos, implementamos y ofrecemos servicios educativos con altos estándares de calidad, en las áreas de formación para el Trabajo y Desarrollo Humano, actuando como un elemento de conocimiento en el recurso humano y en valores éticos, comprometidos en aplicar los principios de la calidad, integridad, espíritu de servicio y cumplimiento. Que contribuye al crecimiento económico y social de la comunidad, mediante la capacitación integral de sus estudiantes, en técnicos y tecnólogos idóneos para que se vinculen al sector productivos, bien sea, local, regional y/o nacional.
                      </p>
                  </div>
              </div>
              <div class="col" style="display: flex; justify-content: center; align-items: strech;">
                <img src="img/mision.png" alt="">
              </div>
          </div>
      </div>
  </div>
  
  <div class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('img/fondos/fondo2.png');" id="vision">
    <div class="container">
        <div class="row text-right align-items-center">
              <div class="col" style="display: flex; justify-content: center; align-items: strech;">
                <img src="img/vision.png" alt="">
              </div>
            <div class="col"  style="background-color: rgba(0,0,0,0.2); padding: 15px;">
                <div class="mision-vision text-right">
                    <h1>VISION</h1>
                    <p style="color: #fff; font-size: 1.2em;text-align:justify;">                      
                      Para el año 2025, la Fundación Trabajando por la Educación y el Desarrollo de Colombia “FUNTEDCOL “Educando para el Futuro”, será reconocido a nivel regional y nacional por su excelente nivel académico en todos sus programas, contando con una infraestructura propia y moderna, un equipo de trabajo idóneo y comprometido con la satisfacción de nuestros estudiantes y la mejora continua de los procesos. Convirtiéndose en la mejor alternativa de formación para los montemarianos y colombianos en general.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>	
  
    <div class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('');" id="vision">
      <div class="container">
        <div class="row text-right align-items-center">
          <div class="col"  style="background-color: rgba(250,250,250,0.2); padding: 15px;">
            <div class="mision-vision text-right" >
              <h1 style="color: #000;">FILOSOFÍA</h1>
              <p style="color: #000; font-size: 1.3em;text-align:justify;">                      
                La institución asume como compromiso el trabajar incansablemente por una construcción colectiva de valores como: la responsabilidad, autoestima, tolerancia, respeto, afecto, amistad, solidaridad, ternura, civismo, sentido de pertenencia, transparencia, equidad, justicia, espíritu de progreso y emprendimiento. De igual forma, se propende por la formación de un ser humano integral en donde él mismo sea artífice de su propio desarrollo.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>	
    <div id="simbolos" class="parallax section lb" data-stellar-background-ratio="0.7" style="background:url('img/fondos/5594016.jpg') repeat; ">
      <div class="container">
        <div class="section-title text-center">
            <h3>SIMBOLOS INSTITUCIONALES</h3>
        </div><!-- end title -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft simbolo" data-wow-duration="1.5s" data-wow-delay="0.2s">
            <div class="card mb-4 shadow-sm imgSimbolo">
              <img src="img/escudoG.png" alt="" class="escudo"  style="margin-top: 10px;">
              <div class="card-body">
                  <h3>ESCUDO</h3>
                  <p class="card-text">
                    
                  </p>              
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight simbolo" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <div class="card mb-4 shadow-sm imgSimbolo">
              <img src="img/bandera.png" alt="" class="bandera"  style="margin-top: 10px;">
              <div class="card-body">
                  <h3>BANDERA</h3>
                  <p class="card-text">
                    La Bandera del Instituto, está compuesta por dos franjas horizontales de igual tamaño y una en el medio color ocre, una de color rojo y la otra de color blanco. La cual debemos portar como estandarte con respeto y amor en todos los actos públicos y privados e izarla junto con el pabellón nacional.                          
                  </p>              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('uploads/barra_03.jpg');" id="himno">    
        <h1 style="color: #000;text-align: center; font-size: 3em; margin-bottom:40px;">HIMNO</h1>
        <hr>
        <div class="container">
          <div class="row text-center align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
              <div class="mision-vision text-left">
                <p style="color: #000; font-size: 1.1em; background-color: rgba(250,250,250,0.6); padding:5px;">
                  Coro<br>
                  Caminando la senda trazada<br>
                  obtenemos el triunfo final<br>
                  “Educamos para el futuro”<br>
                  con autonomía, solidaridad y equidad.<br>
                  I<br>
                  Soleadas montañas es el marco<br>
                  con que la naturaleza nos recrea<br>
                  Funtedcol el pilar apreciado<br>
                  que el Gran Hacedor obsequió.
                  <br>
                  Coro<br>
                  Caminando la senda trazada<br>
                  obtenemos el triunfo final<br>
                  “Educamos para el futuro”<br>
                  con autonomía, solidaridad y equidad.<br>
                </p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
              <div class="mision-vision text-left">
                <p style="color: #000; font-size: 1.1em; background-color: rgba(250,250,250,0.6); padding:5px;">
                  II<br>
                  El éxito con avidez me llama<br>
                  gestor de cambio será mi Misión,<br>
                  enarbolo la inclusión comunitaria<br>
                  como signo de mi convicción.
                  <br>
                  Coro<br>
                  Caminando la senda trazada<br>
                  obtenemos el triunfo final<br>
                  “Educamos para el futuro”<br>
                  con autonomía, solidaridad y equidad.
                  <br>
                  III<br>
                  La Fundación, me cobija en su pecho<br>
                  educado con imparcialidad<br>
                  para enfrentar con fe y entusiasmo<br>
                  mi ingreso al mercado laboral.
                </p>
              </div>
            </div>
            <h4 style="text-align:right;">Autor: Dr. Moises Eduardo Morante</h4>
          </div>
        </div>
      </div> 
    </div>
    <div class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('');" id="diplomados">
      <div class="container">
        <div class="row text-right">
          <div class="col-md"  style="background-color: rgba(250,50,250,0.2); padding: 15px; color: #000;">
            <div class="text-right" >
              <h1 style="color: #000;text-align:center;font-size:2em;">DIPLOMADOS</h1>
              <hr>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div style="width: 95%;">
                    <img src="img/curso1.jpeg" alt="" style="width:100%;">  
                  </div>                        
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">  
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                      <ul style="color: #000; font-size: 1.3em;">              
                        <li>	Seguridad Social</li>
                        <li>	Seguridad Y Salud En El Trabajo</li>
                        <li>	Auditor Interno Hseq</li>
                        <li>	Gestión Documental Y Administración De Archivos</li>
                        <li>	Auditoría Y Control Interno</li>
                        <li>	Matemáticas Financieras</li>
                        <li>	Finanzas</li>
                        <li>	Gerencia Financiera</li>
                        <li>	Normas Internacionales De Información Financiera (Pymes</li>
                        <li>	Nómina Y Prestaciones Sociales</li>
                      </ul>  
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                      <ul style="color: #000; font-size: 1.3em;">
                        <li>	Gestión De Recursos Humanos</li>
                        <li>	Neuropedagogía Infantil</li>
                        <li>	Docencia Universitaria</li>
                        <li>	Educación Especial</li>
                        <li>	Educación Infantil</li>
                        <li>	Neuroeducación</li>
                        <li>	Pedagogía Basada En Competencias</li>
                        <li>	Prevención Del Abuso Sexual Infantil</li>
                        <li>	Neurodesarrollo, Educacion Y Psicologia Del Desarrollo Infantil</li>
                      </ul>                            
                    </div>
                        
                  </div>                
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   
    <div class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('');" id="cursosSalud">
      <div class="container">
        <div class="row text-right">
          <div class="col-md-12"  style="background-color: rgba(50,50,250,0.2); padding: 15px; color: #000;">
            <div class="text-right" >
              <h1 style="color: #000;text-align:center;font-size:2em;">CURSOS SALUD</h1>
              <hr>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                      <ul>            
                        <li> Soporte Vital Basico (Bls)</li>
                        <li> Soporte Vital Avanzado (Acls)</li>
                        <li> Gestion Del Duelo</li>
                        <li> Humanizacion De Servicios En Salud</li>
                        <li> Seguridad Del Paciente</li>
                        <li> Cuidado Del Auxiliar De Enfermería Al Adulto Críticamente Enfermo</li>
                        <li> Inducción A Bacteriología Y Laboratorio Clínico</li>
                        <li> Bioseguridad Y Laboratorio Clínico</li>
                        <li> Toma De Muestras En Tml Y Análisis</li>
                        <li> Toma De Muestras Especiales</li>
                        <li> Citología</li>
                        <li> Atencion Integrada De Las Enfermedades Prevalentes De La Infancia (Aiepi Clinico)</li>
                      </ul>  
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                      <ul>            
                        <li> Atencion Integrada De Las Enfermedades Prevalentes De La Infancia  (Aiepi Comunitario)</li>
                        <li> Atencion A Victimas De Violencia Sexual</li>
                        <li> Atencion A Victimas De Ataques Con Agentes Quimicos</li>
                        <li> Manejo Integral De Salud De Victimas De Violencia Sexual</li>
                        <li> Atencion De Pacientes Con Cuidados Paliativos</li>
                        <li> Cuidados Paliativos</li>
                        <li> Bioseguridad Covid-19</li>
                        <li> Aplicación De Inmunobiologicos (Vacunacion)</li>
                        <li> Aplicación De Inmunobiologicos Covid-19</li>
                        <li> Estrategia Iami</li>
                        <li> Primeros Auxilios</li>
                      </ul>                             
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div style="width: 95%;">
                    <img src="img/curso3.jpg" alt="" style="width:100%;">
                  </div>                        
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   
    <div class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('');" id="cursosAdmin">
      <div class="container">
        <div class="row text-right">
          <div class="col-md-12"  style="background-color: rgba(50,150,20,0.2); padding: 15px; color: #000;">
            <div class="text-right" >
              <div class="row">
                <h1 style="color: #000;">Cursos Administrativos</h1>
                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                  <ul style="color: #000; font-size: 1.3em;">
                    <li>Manejo De Caja Registradora</li>
                    <li>Servicio Al Cliente</li>
                    <li>Mercadeo Y Ventas</li>
                    <li>Higiene Y Manipulacion De Alimentos</li>
                  </ul> 
                  <br><br>
                  <h1>Cursos De Belleza</h1> 
                  <ul style="color: #000; font-size: 1.3em;">
                    <li> Limpieza Facial</li>
                    <li> Depilacion, Diseño De Cejas Y Extensiones De Pestañas</li>
                    <li> Maquillaje</li>
                    <li> Uñas (Semipermanente, Pres On, Acliricas)</li>
                  </ul>
                  <br><br>
                  <h1 style="color: #000;">Otros cursos</h1>
                  <ul style="color: #000; font-size: 1.3em;">
                    <li> Trabajo Seguro En Alturas</li>
                    <li> Seguridad Y Salud En El Trabajo</li>
                    <li> Office (Word, Excel, Powerpoint</li>
                    <li> Excel Basico</li>
                    <li> Excel Avanzado</li>
                    <li> Manejo De Extintores</li>
                    <li> Rescate En Alturas</li>
                  </ul>         
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                  <div style="width: 95%;">
                    <img src="img/curso2.jpg" alt="" style="width:100%;">   
                  </div>                       
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <div class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('');" id="diplomados">
      <div class="container">
        <div class="row text-right">
          <div class="col-md-12"  style="background-color: rgba(250,150,50,0.2); padding: 15px; color: #000;">
            <div class="text-right" >
              <h1 style="color: #000;text-align:center;font-size:2em;">SEMINARIOS</h1>
              <hr>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">   
                  <div style="width: 95%;">
                    <img src="img/seminario.jpg" alt="" style="width:100%;">   
                  </div>                      
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <ul style="color: #000; font-size: 1.3em;">              
                        <li> Alta Gerencia</li>
                        <li> Gerencia De Marketing</li>
                        <li> Gerencia Financiera</li>
                        <li> Psicologia Del Desarrollo Infantil</li>
                        <li> Marketing Digital</li>
                        <li> Legislacion Laboral</li>
                        <li> Prevencion De Riesgos Laborales En Ambientes De Trabajo</li>
                        <li> Gestion Empresarial</li>
                      </ul>  
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <ul style="color: #000; font-size: 1.3em;">
                        <li> Psicologia Del Desarrollo Infantil</li>
                        <li> Instalaciones De Paneles Solares</li>
                        <li> Energias Renovables</li>
                        <li> Toxicologia Farmacologica</li>
                        <li> Farmacocinetica, Farmacodinamia Y Farmacovigilancia</li>
                        <li> Responsabilidad Social Empresarial</li>
                      </ul>
                  </div>                      
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
      
 <hr>
  <div class="row">
      <div>
        <div class="row text-right align-items-center">
          <div class="col-md-12"  style="background-color: rgba(250,250,250,0.2);">
            <div class="mision-vision text-right" >
              <h1 style="color: #000; margin-left: 60px;">NUESTROS ALIADOS</h1>
              <div class="aliados">
                <img src="img/aliados/Bomberos San jacinto.png" alt="">
                <img src="img/aliados/CEFICC.png" alt="">
                <img src="img/aliados/CEPRODENT.png" alt="">
                <img src="img/aliados/CORUNIVERSITEC.png" alt="">
                <img src="img/aliados/HSEQ DE LA COSTA.jpeg" alt="">
                <img src="img/aliados/HSEQ MMM PNG.png" alt="">
                <img src="img/aliados/leon 13.jpeg" alt="">
                <img src="img/aliados/R URIBE.jpg" alt="">
                <img src="img/aliados/UPLE.png" alt="">
                <img src="img/aliados/iti.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <hr> 
  <?php include("paginas/mapa.php"); ?>
  <?php include("paginas/footer.php"); ?>
  <a href="#" id="scroll-arriba" class="btnIrArriba"><i class="fa fa-angle-up"></i></a>
                         
  <div class="modal fade exampleModalCenter" id="exampleModalCenter2" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
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
              require("php/Modelo/conexion.php");
              require("php/Modelo/categoria.php");
              require("php/Modelo/programa.php");
            ?>
            <form class="formPreinscripcion">
              <div>
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
                          <input type="text" class="form-control" id="numeroDocumento" required>
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
                  <div class="row">
                      <div class="col">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                              <label class="form-check-label" for="flexCheckChecked">
                                  He leído y acepto la <a href="paginas/?pag=autorizacionDatos" target="_blank" style="font-weight: bold; font-size: 11px"> Política de Tratamiento de Datos Personales</a>            										
                              </label>
                          </div>
                      </div>
                  </div>
              </div>            
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <!-- <button type="buttom" class="btn btn-primary" onclick="preinscribir()" >Preisncribirme</button> -->
                <button type="submit" class="btn btn-primary" >Preisncribirme</button>
              </div>
              <div class="row">
                <div class="col" id="respuesta">
                    
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>