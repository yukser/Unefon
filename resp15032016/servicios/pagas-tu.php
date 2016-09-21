<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - Pagas tú</title>
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
                        <h1>SMS pagas tú</h1>
                        <h2 class="port-copy">¿Te quedaste sin saldo y necesitas enviar un SMS?</h2>
                        <br>

              <p><strong>SMS PAGAS TÚ</strong> te permite enviar un sms a otro usuario de comunidad Unefon y otras compañías móviles para que el mensaje de texto le sea cobrado.</p>
              
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
                <div class="row">
                    <!-- Tab Style1 -->
                    <div class="col-md-12">
                        <div class="tabs">
                            <ul>
                                <li><a href="#tabs-1">¿Cómo funciona?</a></li>
                                <li><a href="#tabs-2">Contáctos frecuentes</a></li>
                                <li><a href="#tabs-3">Contáctos bloqueados</a></li>
                            </ul>
                            <div class="ui-tab-content">
                                <div id="tabs-1">
                                    <ul>
                                        <li>1. Envíar sms anteponiendo 033 al número que desea enviar. <strong>Ej: 0335512121244</strong></li>
                                        <br>
                                        <li>2. El que recibe el sms deberá responder con la palabra <strong>SI para aceptar</strong> el cargo del sms o <strong>NO para rechazarlo</strong>.<br>

                                       <strong>Ej: El numero 5512121244</strong> te envio un <strong>SMS PAGAS TÚ</strong>.<br>
                                       <br>
                                       Para aceptar el cargo de $2 <strong>responde SI a este mensaje o NO para rechazarlo</strong>.
                                    </li>
                                    <br>
                                    <li>3. Si el destinatario acepta el cargo, recibirá el sms que le enviaste, <strong>si responde NO, el sms no es entregado y no se cobra a ninguno</strong>.
                                    </li>
                                    <br>
                                    <p>Costo del servicio <strong>$2.00</strong> por mensaje aceptado por el remitente</p>
                                    </ul>
                                </div>
                                <div id="tabs-2">
                                    <ul>
                                        <p>A través de tus <strong>contáctos frecuentes</strong> puedes agregar números celulares de personas que deseas aceptar el cargo de <strong>$2</strong> en automático por cada <strong>SMS pagas tú</strong>, es decir:</p>
                                        <br>
                                        <li>Si envías un SMS al 2040 con la palabra Siempre y el número deseado, te estarán realizando el cargo en automático de $2 por cada <strong>SMS PAGAS TÚ</strong> que recibas de ese número (ya no recibirás el mensaje para preguntarte si deseas aceptar el cargo)<br>
                                        <strong>Ejemplo: Siempre 5512345678</strong></li>
                                        <br>
                                        <li>Si envías un SMS al 2040 con la palabra Quitar y el número deseado, removerás este número de tus <strong>CONTACTOS FRECUENTES</strong> por lo que volverás a recibir el mensaje para preguntarte si deseas aceptar el cargo de $2 por recibir el <strong>SMS PAGAS TÚ</strong> de este número<br>
                                            Ejemplo: <strong>Quitar 5512345678</strong></li>
                                            <br>
                                        <li>Si envías un SMS al 2040 con la palabra Aceptados, te mostrará todos los números celulares que se encuentran en tus <strong>CONTACTOS FRECUENTES</strong> y que son los que actualmente estas aceptado el cargo en automático de $2 por recibir cada <strong>SMS PAGAS TÚ</strong><br>
                                                Ejemplo: <strong>Aceptados</strong></li>
                                                <br>
                                        <li>Si envías un SMS al 2040 con la palabra Quitar todo, te permite remover todos los números de tus <strong>CONTACTOS FRECUENTES</strong> por lo que volverás a recibir el mensaje preguntando si deseas aceptar el cargo de $2 por recibir el <strong>SMS PAGAS TÚ</strong> de esos números<br>
                                            Ejemplo: <strong>Quitar todo</strong></li>
                                    </ul>
                                </div>

                            <div id="tabs-3">
                             <ul>
                 <p>A través de <strong>contáctos bloqueados</strong> puedes agregar números celulares de personas que no deseas recibir mensajes de <strong>SMS pagas tú</strong>, es decir:</p>
                 <br>
                 <li> Si envías un SMS al 2040 con la palabra Alta y el número deseado, dejarás de recibir <strong>SMS PAGAS TÚ</strong> de este número<br>
                 Por ejemplo: <strong>Alta 5512345678</strong></li>
                 <br>
                 <li> Si envías un SMS al 2040 con la palabra Baja y el número deseado, removerás este número de tus CONTACTOS BLOQUEADOS por lo que volverás a recibir mensajes de <strong>SMS PAGAS TÚ</strong> de este número<br>
                 Por ejemplo: <strong>Baja 5512345678</strong></li>
                 <br>
                 <li>Si envías un SMS al 2040 con la palabra Lista, te mostrará todos los números celulares que se encuentran en los <strong>CONTACTOS BLOQUEADOS</strong> y que son los que actualmente no estas recibiendo mensajes de SMS PAGAS TÚ<br>
                 Por ejemplo: <strong>Lista</strong></li>
                 <br>
                 <li>Si envías un SMS al 2040 con la palabra Baja todo, te permite remover todos los números de tus <strong>CONTACTOS BLOQUEADOS</strong> por lo que volverás a recibir mensajes de <strong>SMS PAGAS TÚ</strong> de esos números<br>
                 Por ejemplo: <strong>Baja todo</strong></li>
                             </ul>
                                </div>

                                <!-- Accordian -->
                    <div class="col-md-12 mt-30 plr-0">
                        <div class="accordion">
                            <div class="accordion-section restrictions">
                                <h5 class="accordion-title">Conoce aquí las restricciones</h5>
                                <div class="accordion-content defualt-hidden">
                                    <ul>
                                        <li>El usuario origen, quien enviará el sms lo podrá hacer desde cualquier teléfono GSM o CDMA</li>
            <li>Al usuario destino se le podrá hacer el cargo si cuenta con un teléfono GSM o CDMA</li>
            <li>Aplica sólo a nivel nacional</li>
            <li>Aplica para Iusacell y Unefon</li>
            <li>Prepago y Pospago*</li>
            <li>Para clientes Prepago e Híbridos se debita del saldo real y para clientes Pospago el cargo se realiza con cargo a la factura</li>
            <li>El cobro por aceptar el mensaje es de $2 (iva Incluido)</li>
            <li>El envío del SMS PAGAS TÚ debe ir sin espacio, ejemplo: 0335512121212</li>
            <li>El texto del SMS PAGAS TÚ no deberá exceder de los 160 caracteres</li>
                                    </ul>
                                    <br>
                                    <p>Registro Público de Concesiones IFT: Constancia folio "011852"</p>
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
