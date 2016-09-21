<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - Por segundo</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <link rel="apple-touch-icon" href="../img/favicon.png">

    <!-- CSS -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/oferta.css" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="../css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="../css/xmodal.css" rel="stylesheet" type="text/css" />

</head>


<script type="text/javascript">
function open_faq()
{ 
$("#contenedor_faq").fadeIn("slow");
$('html').animate({ scrollTop: 0 }, 'slow'); return true; 
}
 
function close_faq()
{   
$("#contenedor_faq").fadeOut("slow");
}
</script>

<style type="text/css">
/*.inner-intro {
    height: 400px !important;
}*/

 @media all and (max-width: 450px){ 
.inner-intro {
    height: 300px !important;
  }
}

</style>

<body class="full-intro">

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Sidemenu -->
    <section class="side-menu cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
        <a class="menu-close toggle-menu menu-right push-body"><i class="ion ion-android-close"></i></a>
        <h5 class="white">Regístrate y nos comunicaremos contigo</h5>
        <div class="sign-in">
            <input class="input-sm form-full" type="email" aria-required="true" id="email" name="email" placeholder="Correo electrónico" value="" />
            <!--input class="input-sm form-full" type="password" aria-required="true" id="password" name="password" placeholder="Contraseña" value="" /-->
            <input type="submit" class="btn btn-md btn-color-b form-full" value="ENVÍAR" />
            <!--a class="btn btn-md btn-color-b form-full">Quiero ser cliente</a-->
        </div>
        <!--Empiezan datos para atención a clientes-->
        <div class="contactos">
            <h5>Atención a clientes.</h5>
                <h6>Vía telefónica te atendemos las 24 horas.</h6>
             <ul class="list-unstyled">
                 <li><i class="fa fa-home"></i> Línea directa:
                    <a href="tel:+018003330050"><strong>018003330050</strong></a></li>
                 
                 <li><i class="fa fa-user"></i> Desde tu Unefon:
                    <a href="tel:+050"><strong>Marca 050</strong></a></li>
                 
                 <li><i class="fa fa-suitcase"></i> Desde U.S.A: 
                    <a href="tel:+018005590687"><strong>018005590687</strong></a></li>
                 
                 <li><i class="fa fa-comments"></i> Chat: 
                    <a href="http://200.34.221.27/SightMaxAgentInterface/PreChatSurvey.aspx?%20accountID=2&amp;siteID=2&amp;queueID=4&amp;A%20spxAutoDetectCookieSupport=1" target="_blank"><strong>Click Aquí </strong></a></li>

                 <li><i class="fa fa-map-marker"></i> Centros de Atención: 
                    <a href="#" target="_blank"> <strong>Úbicalos</strong></a></li> 
            </ul>          
        </div>
            <div class="atn_redes">
            <center>    
            <ul class="social">
               <li><a target="_blank" href="https://www.facebook.com/unefon"><i class="fa fa-facebook"></i></a></li>
               <li><a target="_blank" href="https://twitter.com/Unefon"><i class="fa fa-twitter"></i></a></li>
            </ul>
            </center> 
            <div>
        <!--Terminan datos para atención a clientes-->    

    </section>
    <!--End Sidemenu -->

    <!-- Site Wraper -->
    <div class="wrapper">

        <!-- HEADER -->
        <?php  
			require_once('../includes/menu.php'); 
		?>
        <!-- END HEADER -->

        <!-- CONTENT --------------------------------------------------------------------------------->

        <!-- Intro Section -->
        <section class="inner-intro bg-img17 parallax">
            <?php  
				require_once('../includes/breadcrumb.php'); 
			?> 
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- Work Detail Section -->
        <section id="generico" class="ptb-sm-10 plr-0">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-care">
                        <h1>Paquetes por segundo</h1>
                        <h2 class="port-copy">¡Paga solamente lo que consumes!</h2>
                        <br>

              <p>Porque todas tus llamadas se cobran por segundo con una tarifa de $0.03 el segundo. Cuando te cambies a <strong>UNEFON por segundo</strong> el saldo que tienes acumulado costará <strong>$0.03 el segundo</strong> y tus siguientes recargas, desde $10, se cobrarán a $0.03 el segundo a Todo México, E.U. y Canadá.</p>
              <br>
              <p>Cámbiate a Unefon por Segundo por $10*, marcando al *773.</p>
              <!--p>Si deseas recibir automáticamente los mensajes sin confirmar, o dejar de recibirlos de algun número en específico ¡Agrégalos a tu lista!</p-->
            </div>
        </div>
    </div>
</section>
        <!-- End Work Detail Section -->

                <!-- Tab Section Section -->
        <section class="ptb-sm-80">
            <div class="container">
                <div class="row">
                    <!-- Tab Style1 -->
                    <div class="col-md-12">
                        <div class="tabs">
                            <div class="ui-tab-content">
                                <!-- Accordian -->
                    <div class="col-md-12 mt-30 plr-0">
                        <div class="accordion">
                            <div class="accordion-section restrictions">
                                <h5 class="accordion-title">Legales:</h5>
                                <div class="accordion-content defualt-hidden">
                                    <ul>
                                        <li>El costo por el cambio es $10</li>
                                        <li>Sólo aplica para prepagos Unefon con tecnología GSM</li>
                                        <li>Cambio sólo a oferta Flex</li>
                                        <li>Número de Inscripción ante IFT 37512</li>
                                        <li>Número de Inscripción ante IFT 37512.</li>
                                    </ul>
                                    <br>
                                    <p>Consulta el <a href="http://www.unefon.com.mx/data/pdf/registros_ift.pdf" target="_blank">registro</a> de la oferta comercial <a href="http://rpc.ift.org.mx/rpc/" target="_blank">aquí</a>.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordian -->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Tab Section Section -->

         <!-- CrossSaling Section -->
        <?php 
			require_once('../includes/crosssaling.php'); 
		?>
        <!-- End CrossSaling Section -->


        <!-- END CONTENT ---------------------------------------------------------------------------->

        <!-- FOOTER -->
        <?php  
			require_once('../includes/footer.php'); 
		?>
        <!-- END FOOTER -->

        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

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

    <script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="../js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="../js/plugin/background-check.min.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="../js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="../js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="../js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="../js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="../js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="../js/plugin/jPushMenu.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="../js/plugin/mediaelement-and-player.min.js"></script>
    <script src="../js/theme.js" type="text/javascript"></script>
    <script src="../js/navigation.js" type="text/javascript"></script>

</body>
</html>
