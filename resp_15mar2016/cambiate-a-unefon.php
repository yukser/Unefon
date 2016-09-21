<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - Portabilidad</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="css/xmodal.css" rel="stylesheet" type="text/css" />

</head>

<script type="text/javascript">

function open_video()
{ 
$("#contenedor_video").fadeIn("slow");
$('html').animate({ scrollTop: 0 }, 'slow'); return true; 
}
 
function close_video()
{   
$("#contenedor_video").fadeOut("slow");
}
function open_faq()
{
$("#contenedor_faq").fadeIn("slow");
$('html,body').animate({ scrollTop: 0 }, 'slow');
}
 
function close_faq()
{   
$("#contenedor_faq").fadeOut("slow");
}

function legales_lista()
{
$("#legales-lista").slideToggle("slow");    
}
</script>

<body class="full-intro">

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Sidemenu -->
    <?php  
        require_once('includes/sidemenu.php'); 
    ?> 
    <!--End Sidemenu -->

    <!-- Site Wraper -->
    <div class="wrapper">

        <!-- HEADER -->
        <?php  
            require_once('includes/menu.php'); 
        ?>
        <!-- END HEADER -->

        <!-- CONTENT --------------------------------------------------------------------------------->

        <!-- Intro Section -->
        <section class="inner-intro bg-img10 parallax">
            <?php  
				require_once('includes/breadcrumb.php'); 
			?>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- Work Detail Section -->
        <section class="ptcontent ptb-sm-10">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1>Cámbiate a Unefon</h1>
                        <h2 class="port-copy">Disfruta de los mejores beneficios, con tu mismo número.</h2>
                    </div>
                    <div class="col-md-12 port-text">
                        <!--p>Portabilidad es el derecho a conservar tu número al momento de cambiarte a cualquiera de las compañías de telefonía móvil que te otorgan el servicio.</p-->
                        <br>
                         <p class=""><strong>Sólo sigue estos 3 sencillos pasos:</strong></p>
                    </div>
                </div>
        </section>
        <!-- End Work Detail Section -->

        <!-- Pasos portabilidad -->
        <section class="ptcontent ptb-sm-10">
            <div class="container"><!-- container -->
                <!-- work Filter -->
                <div clas="row"><!-- row -->
                    <div class="col-md-6 plr-0"><!-- Pasos izquierda -->

                          <div class="col-md-6 col-sm-6 plr-0"><!-- Paso1 -->
                             <div class="megabullet1">   
                             <img src="img/megabullets/mg-bullet_1_portabilidad.png" alt="Obtén tu portabilidad" height="168" width="auto">
                             </div>
                             <div class="step-int gris_1">
                              <img src="img/portabilidad/portabilidad-obten-tu-nip.png" alt="portabilidad" height="auto" width="auto">
                              <p> •   Envía un SMS al <strong>051</strong> con la palabra <strong>NIP o marca al <strong>051</strong>.</strong><br>
                              </p>
                                 </div>
                          </div><!-- Termina Paso1 -->

                          <div class="col-md-6 col-sm-6 plr-0"><!-- Paso2 -->
                             <div class="megabullet2">   
                             <img src="img/megabullets/mg-bullet_2_portabilidad.png" alt="Obtén tu portabilidad" height="168" width="auto">
                             </div>
                             <div class="step-int gris_2">
                             <img src="http://www.unefon.com.mx/assets/images/portabilidad/stores.png" alt="portabilidad" height="auto" width="auto">
                             <p>Ten a la mano los siguientes datos:<br>
                                <br>
                                • <strong>Datos del INE, CURP o nombre, fecha y lugar de nacimiento</strong>.<br></p>
                             </div>
                          </div><!-- Termina Paso2 -->

                          <div class="col-md-12 plr-0 porta-imagen1"><!-- Imagen izquierda 1 -->
                             <div style="background: #FDAC2A">   
                             <img src="img/full/portabilidad-banner5.jpg" alt="portabilidad" height="auto" width="auto">
                             </div>
                          </div><!-- Termina Imagen izquierda 1 -->

                      </div><!-- Termina Pasos izquierda -->

                      <div class="col-md-6 plr-0"><!-- Pasos derecha -->

                         <div class="col-md-12 plr-0 porta-imagen2"><!-- Imagen derecha 2-->  
                         <img src="img/full/portabilidad-banner3.jpg" alt="portabilidad" height="auto" width="auto">
                         </div>

                         <div class="col-md-6 col-sm-6 plr-0"><!-- Paso3 -->
                         <div class="megabullet3">   
                         <img src="img/megabullets/mg-bullet_3_portabilidad.png" alt="Obtén tu portabilidad" height="168" width="auto">
                         </div>
                         <div class="step-int gris_1">
                         <img src="img/portabilidad/portabilidad-punto-de-venta.png" alt="portabilidad" height="auto" width="auto">
                         <p> • La fecha de cambio puede ser <strong>en 24 horas o hasta 4 días hábiles</strong> a partir de levantar la solicitud.<a class="tipped" data-title="Si la solicitud es entregada antes<br>de las 17:00 hrs. de lunes a sábado,<br>te informaremos, el mismo día, si ha<br>sido rechazada o aprobada. Si la<br>solicitud es posterior a las 17:01 hrs,<br>de lunes a sábado, domingo o días<br>festivos, la respuesta será al siguiente<br>día entre las 11:00 y 13:00 hrs." data-tipper-options='{"direction":"bottom"}'><b><sup>(1)</sup></b></a></p>

                         </div>
                         </div><!-- Termina Paso3 -->

                         <div class="col-md-6 col-sm-6 plr-0"><!-- Paso4 -->
                         <div class="megabullet4">   
                         <img src="img/megabullets/mg-bullet_4_portabilidad.png" alt="Obtén tu portabilidad" height="168" width="auto">
                         </div>
                         <div class="step-int gris_2">
                         <img src="img/portabilidad/portabilidad-bienvenido-a-unefon.png" alt="portabilidad" height="auto" width="auto">
                         <p>•  Además te regalamos <strong>hasta $200 de tiempo aire GRATIS</strong> de por vida</a></p>
                         </div>
                         </div><!-- Termina Paso4 -->
                     </div><!-- Terminan Pasos derecha -->

                     <div class="col-md-12 promos-legales plr-0">
                                <div class="justify">
                                    <p>(1) Si la solicitud es entregada antes de las 17:00 hrs. de lunes a sábado, te informaremos, el mismo día, si ha sido rechazada o aprobada. Si la solicitud es posterior a las 17:01 hrs, de lunes a sábado, domingo o días festivos, la respuesta será al siguiente día entre las 11:00 y 13:00 hrs.</p>
                            </div>

                </div> <!-- row --> 
            </div><!-- container -->
        </section>
        <!-- Termina Pasos Portabilidad Section --> 

        <!--Cámbiate Section-->
        <section id="cambiate" class="wow fadeIn ptcross">
            <div class="container">
            <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <p class="port-copy to-landing">Cámbiate a <strong>Unefon.</strong><br>
                            <span class="redux-p">¿Tienes dudas? Revisa nuestras preguntas frecuentes.</span></p>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                        <div onClick="open_faq()" class="mas_btn" href="portabilidad.html" target="_blank"></div>
                </div>
            </div>
            </div>
        </section>
        <!-- Termina Cámbiate Section-->

        <!-- CrossSaling Section -->
        <?php 
			require_once('includes/crosssaling.php'); 
		?>
        <!-- End CrossSaling Section -->


        <!-- END CONTENT ---------------------------------------------------------------------------->

        <!-- FOOTER -->
        <?php  
            require_once('includes/footer.php'); 
        ?>
        <!-- END FOOTER -->

        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

<!-- ==============================================
    VIDEO PORTABILIDAD
    =============================================== --> 
    
<div id="contenedor_video" onClick="close_video()"><!--CONTENEDOR_VIDEO-->
          <div class="container">
                <!-- work Filter -->
                <div class="row video_portabilidad">
            <center>
                <div onClick="close_video()" class="cerrar">cerrar</div>
                <div class="videoWrapper">
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/d8fKjPTEnu4" frameborder="0" allowfullscreen></iframe>
                </div>
            </center>
        </div>   
</div><!--Termina caja-->   

</div><!--CONTENEDOR_VIDEO-->

<!-- ==============================================
    VIDEO PORTABILIDAD
    =============================================== -->

<!-- ==============================================
    CAJA PREGUNTAS FRECUENTES
    =============================================== --> 
    
<div id="contenedor_faq" onClick="close_faq()"><!--CONTENEDOR_BING-->
     <div class="cuerpo_faq"> <!--caja Main-->
         <div onClick="close_faq()" class="cerrar">cerrar</div>
         <h2>Preguntas Frecuentes</h2>

<h3>¿Que es portabilidad?</h3>
<p>Es el proceso que te permite cambiarte de compañía a cualquier usuario Persona física conservando su número de teléfono.</p>

<h3>¿Quién puede solicitar la portabilidad?</h3>
<p>Únicamente la podrá solicitar el usuario de la línea.</p>

<h3>¿Cuáles son los requisitos para realizar una portabilidad?</h3>
<p>Contar con número activo de otra compañía.</p>

<h3>¿Durante el trámite de mi Portabilidad me puedo quedar sin servicio?</h3>
<p>No, tu compañía actual te debe dar el servicio hasta la fecha de tu portabilidad.</p>

<h3>¿El trámite de Portabilidad tiene algún costo?</h3>
<p>No, es un trámite gratis.</p>

<h3>¿Cual es el tiempo de proceso de Portabilidad?</h3>
<p>Si quieres que se ejecute en 24 horas, o en cualquiera de los siguientes 4 días.</p>

<h3>¿Como me informaran que mi número ya fue portado?</h3>
<p>Vía mensaje de texto recibe respuesta de la solicitud si fue aprobada o rechazada.</p>

</div><!--Termina caja-->   

</div><!--CONTENEDOR_BING-->

<!-- ==============================================
    CAJA PREGUNTAS FRECUENTES
    =============================================== --> 


    </div>
    <!-- Site Wraper End -->


    <!-- JS -->

    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="js/plugin/background-check.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/jPushMenu.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="js/plugin/mediaelement-and-player.min.js"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>

</body>
</html>
