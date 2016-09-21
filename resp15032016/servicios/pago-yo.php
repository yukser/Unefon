<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Pago Yo - UNEFON</title>
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
        <h5 class="white">Regístrate</h5>
        <div class="sign-in">
            <input class="input-sm form-full" type="email" aria-required="true" id="email" name="email" placeholder="Correo electrónico" value="" />
            <input class="input-sm form-full" type="password" aria-required="true" id="password" name="password" placeholder="Contraseña" value="" />
            <input type="submit" class="btn btn-md btn-color-b form-full" value="Entrar" />
            <a class="btn btn-md btn-color-b form-full">Quiero ser cliente</a>
        </div>
        <ul>
            <li><a target="_blank" href="index.html">Main Demo Page</a></li>
            <li><a href="../home.html">Home Default</a></li>
            <li><a href="portfolio-grid-2col.html">Portfolio</a></li>
            <li><a href="login-register.html">Login & Signup</a></li>
            <li><a href="faq-1.html">FAQ</a></li>
            <li><a href="about-1.html">About</a></li>
            <li><a href="service-1.html">Service</a></li>
            <li><a href="blog-grid-3col.html">Blog</a></li>
            <li><a href="404-error-1.html">404 Error</a></li>
            <li><a href="shop-checkout.html">Shopping Cart</a></li>
            <li><a href="contact-1.html">Contact Us</a></li>
        </ul>
    </section>
    <!--End Sidemenu -->

    <!-- Search menu Top -->
    <section class=" top-search-bar cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top">
        <div class="container">
            <div class="search-wraper">
                <input type="text" class="input-sm form-full" placeholder="Quieres buscar algo..." name="search" />
                <a class="search-bar-icon"><i class="fa fa-search"></i></a>
                <a class="bar-close toggle-menu menu-top push-body"><i class="ion ion-android-close"></i></a>
            </div>
        </div>
    </section>
    <!--End Search menu Top -->

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
                        <h1>SMS pago yo</h1>
                        <h2 class="port-copy">¡Invita un SMS a quién quieras!</h2>
                        <br>

              <p><strong>SMS PAGO YO</strong> te permite enviar mensajes de texto (SMS) a otros usuarios, pagando por anticipado el mensaje (SMS) de respuesta.</p>
              
              <!--p>Si deseas recibir automáticamente los mensajes sin confirmar, o dejar de recibirlos de algun número en específico ¡Agrégalos a tu lista!</p-->

            </div>
        </div>
    </div>
</section>
<div class="spacer-30"></div>
        <!-- End Work Detail Section -->

                <!-- Tab Section Section -->
        <section class="ptb-sm-80">
            <div class="container">
                <div class="row text-center">
                    <h3>Conoce como funciona</h3>
                </div>
                <div class="spacer-30"></div>
                <div class="row">
                    <!-- Tab Style1 -->
                    <div class="col-md-12">
                        <div class="tabs">
                            <ul>
                                <li><a href="#tabs-1">¿Cómo funciona?</a></li>
                                <li><a href="#tabs-2">Preguntas Frecuentes</a></li>
                            </ul>
                            <div class="ui-tab-content">
                                <div id="tabs-1">
                                    <ul>
                                        <li>1. Envía un sms anteponiendo 035 al número que deseas enviar. <br>Ej: 0355512121244</li><br>
                                        <li>2. Recibirás una notificación de entrega.</li><br>
                                        <li>3. El destinatario recibe tu mensaje y el siguiente texto: <br>Ej: "Responde sin cargo a este mensaje con la opción de responder, tú mensaje ya fue pagado por el remitente"</li><br>
                                        <li>4. Si el destinatario responde al mensaje, recibirá una notificación de entrega.</li><br>
                                        
                                    </ul>
                                </div>
                                <div id="tabs-2">
                                    <ul>
                                        <li><strong>1.- ¿Se puede elegir el contacto al que desea enviar el mensaje de texto desde la agenda?.</strong><br>
R= No, el número de destino debe ingresarse de manera manual.</li><br>
                                        <li><strong>2.- ¿Aparece el nombre del contacto que te envía mensaje SMS Pago Yo?.</strong><br>
R= No, únicamente aparece el número telefónico en el mensaje.</li><br>
                                        <li><strong>3.- ¿Qué pasa si el usuario destino no quiere responder o tiene el teléfono apagado?.</strong><br>
R= Se tendrán 24 hrs. para responder el mensaje SMS, en caso de no hacerlo, el usuario que envió el mensaje recibirá una notificación indicando que no fue utilizado el servicio.</li><br>
                                        <li><strong>4.- ¿La capacidad del mensaje se reduce por los textos pre definidos?.</strong><br>
R= No, el usuario seguirá teniendo 160 caracteres para redactar cada SMS.</li><br>
                                        <li><strong>5.- Bajo que condiciones no se puede enviar el SMS pre pagado.</strong><br>
R= Sólo por falta de saldo, o falla con el servicio.</li><br>
                                        <li><strong>6.- ¿En caso de que el usuario al que fue enviado el mensaje pre pagado no lo responda en un plazo de 24 hrs. se realizará el cobro al usuario que lo envió?.</strong><br>
R= Si, a partir que el mensaje es enviado se realiza el cobro de $ 2.50 IVA incluido.</li><br>
                                        <li><strong>7.- ¿El usuario destino puede recibir algún mensaje en caso de que el usuario que envía no tenga saldo?.</strong><br>
R= No, el usuario destino no recibe nada.
</li><br>
                                        <li><strong>8.- ¿Si el usuario que envía abona tiempo aire, se envía automáticamente el mensaje previo?.</strong><br>
R= No, después del abono el usuario deberá intentarlo de nuevo.</li><br>
                                        <li><strong>9.- ¿Si el usuario que envía no tiene saldo pero si mensajes SMS disponibles en su línea, el mensaje es enviado?.</strong><br>
R= No, el servicio de respuesta pre pagada sólo se puede utilizar con tiempo aire comprado o con cargo adicional a su factura.</li><br>
                                        <li><strong>10.- ¿El servicio aplica para envío de mensajes pre pagados solo a teléfonos Iusacell y Unefon?.</strong><br>
R= Si, el servicio solo podrá utilizarse entre usuarios Iusacell y Unefon.</li>
                                    </ul>
                                </div>

                            

                                <!-- Accordian -->
                    <div class="col-md-12 mt-30 plr-0">
                        <div class="accordion">
                            <div class="accordion-section restrictions">
                                <h5 class="accordion-title">Conoce aquí las restricciones</h5>
                                <div class="accordion-content defualt-hidden">
                                    <ul>
                                        <li>El usuario que enviará el mensaje de texto podrá hacerlo desde cualquier teléfono GSM. </li>
                                        <li>El envío del mensaje SMS Pago Yo deberá de ir sin espacio. </li>
                                        <li>El texto del mensaje no deberá exceder los 160 caracteres. </li>
                                        <li>El costo por cada respuesta pre-pagada es de $2.50 IVA incluido. </li>
                                        <li>Aplica únicamente a Nivel Nacional. </li>
                                        <li>Aplica para planes prepago con saldo real. </li>
                                        <li>Para planes libres, se realizará el cargo a factura. </li>
                                        <li>Los mensajes de confirmación no tienen costo para los usuarios del servicio. </li>
                                        <li>Servicio únicamente disponible para usuarios Iusacell y Unefon</li>
                                    </ul>
                                    <br>
                                    <p>Registro Público de Concesiones IFT: Constancia folio "011852"</p>
                                    <p>Consulta el <a href="data/pdf/registros_ift.pdf" target="_blank">registro</a> de la oferta comercial <a href="http://rpc.ift.org.mx/rpc/" target="_blank">aquí</a>.</p>
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
