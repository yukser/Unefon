<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - Apoyo-911</title>
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
                        <h1>Apoyo 911</h1>
                        <h2 class="port-copy">El apoyo 911 te protege ante emergencias</h2>
                        <br>
                        <p>Si cuentas con un equipo prepago, plan híbrido PVC y PUC, solicita tu asistencia marcando <strong>*911<strong> ó </strong>01800 333 0911</strong>.</p>
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
                    <!-- Contenido apoyo 911 -->
                    <div class="col-sm-8">                       
                                <h3>¿Cuánto cuesta?</h3>
                                <p class="cuerpo-txt">El servicio lo puedes obtener por sólo <strong>$5 SEMANALES</strong>.</p>
                                <br>
                                <h3>¿Cómo Activar?</h3>
                                <p class="cuerpo-txt">Envía un <strong>SMS con la palabra ALTA</strong> al 9110 y forma parte de APOYO911.</p>
                                <br>
                                <h3>¿Cómo Cancelar?</h3>
                                <p class="cuerpo-txt">Para cancelar la suscripción, envía un <strong>SMS con la palabra BAJA</strong> a la marcación 9110.</p>
                        </div>
                        <div class="col-sm-4">
                            
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
