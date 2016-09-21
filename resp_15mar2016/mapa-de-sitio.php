<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - Mapa de Sitio</title>
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

</head>

<script type="text/javascript">
function legales_lista()
{
$("#legales-lista").slideToggle("slow");    
}
</script>

<style type="text/css">
.inner-intro {height: 380px}
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
        <section class="inner-intro bg-img18 parallax">
            <div class="container">
                <div class="row title">
                      <div class="page-breadcrumb"><!-- Breadcrumb -->
                        <a href="home.html">Inicio <i class="fa fa-angle-right"></i></a> 
                        <span>Mapa de Sitio <i class="fa fa-angle-right"></i></span>
                    </div><!-- Breadcrumb -->
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- Work Detail Section -->
        <section id="generico" class="ptb-sm-10 pt-50">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                   <h1>Mapa de Sitio Unefon</h1>
                 </div>

                 <div class="col-md-8 col-md-offset-2 mp-col-1">
                    <br>
                    <h3><a href="index.php">Inicio</a></h3>
                    <h3><a href="equipos/index.php">Equipo</a></h3>
                    <h3>Paquetes</h3>
                    <ul class="">
                        <li><a href="paquetes/paquetes-unefon.php">Unefon Flex</a></li>
                        <li><a href="paquetes/por-segundo.php">Unefon por Segundo</a></li>
                    </ul>
                    <h3><a href="cambiate-a-unefon.php">Cámbiate a Unefon</a></h3>
                    <h3>Servicios</h3>
                    <ul class="">
                        <li><a href="servicios/facebook-switch.php">Facebook Switch</a></li>
                        <li><a href="servicios/pagas-tu.php">SMS Pagas tú</a></li>
                        <li><a href="servicios/pago-yo.php">SMS Pago yo</a></li>
                        <li><a href="servicios/apoyo-911.php">Apoyo 911</a></li>
                    </ul>
                    <h3>Comprar y recargar</h3>
                    <ul class="">
                        <li><a href="tiendas/index.php">Ubica tu tienda</a></li>
                        <li><a href="comprar/recarga-tiempo-aire.php">Recarga tiempo Aire</a></li>
                    </ul>
                    <h3><a href="promociones/index.php">Promociones</a></h3>

                 <div class="mp-col-2">
                    <h3><a href="cobertura/index.php">Cobertura</a></h3>
                    <h3><a class="toggle-menu menu-right push-body active">Atención a clientes</a></h3>
                 </div>

                 <div class="mp-col-3">
                    <h3>Legales</h3>
                    <ul class="">
                        <li><a href="legales/politicas-de-seguridad.php">Politicas de Seguridad</a></li>
                        <li><a href="legales/colaboracion-autoridades.php">Colaboración con Autoridades Mexicanas de Seguridad y Justicia</a></li>
                        <li><a href="legales/aviso-de-privacidad.php">Carta de derechos de Usuario de Servicios de Telecomunicaciones</a></li>
                        <li><a href="legales/contrato-adhesion.php">Contrato de Adhesión</a></li>
                        <li><a href="legales/registro-ift.php">Registros IFT</a></li>
                        <li><a href="legales/politica-uso-justo.php">Política de uso justo</a></li>
                    </ul>
                    <h3><a href="legales/aviso-de-privacidad.php">Aviso de privacidad</a></h3>
                    <h3><a href="noticias.php">Noticias</a></h3>
                    <h3><a href="#">Mapa de sitio</a></h3>
                 </div>   
        </div>

                </div>
            </div>
        </section>
        
<div class="spacer-30"></div>
        <!-- final de Cuerpo de texto-->

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
