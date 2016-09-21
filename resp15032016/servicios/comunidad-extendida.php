<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - Comunidad Extendida</title>
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
            <li><a href="home.html">Home Default</a></li>
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
        <section class="inner-intro bg-img16 parallax">
            <?php  
				require_once('../includes/breadcrumb.php'); 
			?> 
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- Work Detail Section -->
        <section id="promociones" class="ptb-sm-10 plr-0">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-care">
                        <h1 class="text-center">Comunidad Extendida AT&T</h1>
                        <div class="comunidad col-md-10 col-md-offset-1">
                        <h2>Recarga desde <strong>$150</strong> pesos y obtén <strong class="stronzo">minutos y mensajes ilimitados</strong> de <strong>Comunidad extendida AT&T</strong></h2>
                        <p></p>
                  </div>
                </div>
        </section>
        <!-- End Work Detail Section -->
 
        <div class="spacer-30"></div>
<!-- Tab Section Section -->
        <section class="ptb-sm-10">
            <div class="container">
                <div class="row"><!-- .row-->
                  <div class="col-md-10 col-md-offset-1"><!-- .col -->
                    <div class="col-md-4 col-sm-12 col-xs-12 plr-0">   
                    <img src="../img/flags.png" alt="norteamérica" height="auto" width="auto">
                    </div>
                    <div class="col-md-8">
                    <p class="mt-xs-25 fl-taj">La comunidad extendida aplica entre usuarios de <strong>Nextel, Iusacell, Unefon, AT&T y Cricket</strong> en México, Estados Unidos y Canadá.</p>
                    </div>
          
                    <div><p class="legales">Aplica política de uso justo. Los minutos y SMS serán ilimitados mientras los números estén en la región  de México, Estados Unidos o Canadá. <strong>Precios Incluyen IVA<strong>.</p></div>
                   </div><!-- .col -->

            </div><!-- .row-->
        </div><!-- .container-->
        </section>
        <!-- End Tab Section Section -->        
        <div class="spacer-30"></div>

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
