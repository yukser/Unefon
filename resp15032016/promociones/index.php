<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - Promociones</title>
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

<style type="text/css">

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
    <?php  
        require_once('../includes/sidemenu.php'); 
    ?> 
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
        <section class="inner-intro bg-img12 parallax">
            <?php  
				require_once('../includes/breadcrumb.php'); 
			?>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- Work Detail Section -->
        <section id="promociones" class="ptb-sm-10">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-care">
                        <h1>Promociones Unefon</h1>
                        <h2 class="port-copy">Aprovecha de las mejores promociones.</h2>
                    </div>
                </div>
        </section>
        <!-- End Work Detail Section -->
    
        <!-- Galería de promociones-->

        <!-- Work Detail Section -->
        <section class="pttop">
            <div class="container">
                <!-- work Filter -->
                <!-- Filter de promociones comentada-->
                <!--div class="row"> 
                    <ul class="container-filter categories-filter">
                        <li><a class="categories active" data-filter="*">Todas</a></li>
                        <li><a class="categories" data-filter=".recarga30">Recarga 30</a></li>
                        <li><a class="categories" data-filter=".recarga50">Recarga 50</a></li>
                        <li><a class="categories" data-filter=".recarga100">Recarga 100</a></li>
                    </ul>
                </div-->
                <!-- End work Filter -->
                <div class="row container-grid nf-col-3">
                    <div class="nf-item recarga50 spacing">
                        <div class="item-box">
                            <a class="cbox-gallary1" href="../img/promos/promociones-switching-200.png" title="Bookmarksgrove right at">
                                <img alt="1" src="../img/promos/promociones-switching-200.png" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                       <h5>Trae tu número de otra compañía a Unefon</h5>
                                        <!--p>Y llévate el doble de tiempo aire todos los días</p-->
                                        <p>&nbsp;</p>
                                        <a href="recarga-200.php" class="btn_promos btn">Ver más aquí</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item recarga50 spacing">
                        <div class="item-box">
                            <a class="cbox-gallary1" href="../img/promos/Promo-1800_828x1101.png" title="Bookmarksgrove right at">
                                <img alt="1" src="../img/promos/Promo-1800_828x1101.png" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                       <h5>Nadie te da tanto como Unefon</span></h5>
                                       <p>&nbsp;</p>
                                        <a href="1800.php" class="btn_promos btn">Ver más aquí</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Work Detail Section -->


        <!-- Termina galería de promociones -->

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
