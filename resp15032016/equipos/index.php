<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - Equipos</title>
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
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="../css/jquery-ui.css" rel="stylesheet" type="text/css" />

</head>

<script type="text/javascript">
function legales_lista()
{
	$("#legales-lista").slideToggle("slow");
}
</script>

<body class="full-intro background--dark">

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Sidemenu -->
    <section class="side-menu cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
        <?php  
				require_once('../includes/sidemenu.php'); 
			?>
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
        <section class="inner-intro bg-img18 light-color parallax parallax-background2">
            <?php  
				require_once('../includes/breadcrumb.php'); 
			?> 
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->


        <!-- Work Detail Section -->
        <section class="ptcontent ptb-sm-10">

            <div class="container">
                <!-- work Filter -->
                <div class="row plr-0">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <h1>Equipos UNEFON</h1>
                     <h2>Conoce todos los equipos que tenemos para ti</h2>
                 </div>
             </div>
             </div>

            <div class="container pt-50">
                <div class="row">
                    <!-- Left Sidebar -->
                    <div class="col-md-3 col-sm-3 mt-xs-3" >

                        <!-- Shop Categories -->
                        <div id="filter-phones" class="sidebar-widget">
                        <h4>Filtrar equipo por:</h4>
                        <div class="line-separator"></div>           
                            <h5>Marcas</h5>
                            
                            <ul class="container-filter categories-filter" id="brandconten"></ul>
                            
                         <div class="line-separator"></div>            
                            <h5>Tecnología</h5>
                            <ul class="container-filter categories-filter">
                                <li><a class="categories" data-filter=".2g">2G</a></li>
                                <li><a class="categories" data-filter=".3g">3G</a></li>
                                <li><a class="categories" data-filter=".4g">4G</a></li>
                            </ul>

                            <!--button value="" type="submit" class="btn btn-xs btn-black pull-right">Filtrar</button-->
                        </div>
                        <!-- End Shop Categories -->

                    </div>
                    <!-- End Left Sidebar -->

                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <!-- Sort List -->
                        <div class="shop-filter mb-15">
                            <!--div class="float-right float-none-xs">
                                <p>1–12 of 13 resultados</p>
                            </div-->
                            <div class="float-left float-none-xs">
                                <form>
                                    <label>Ordenar por</label>
                                    <select class="input-md round">
                                        <option>Modelos destacados</option>
                                        <option>Nombre del equipo</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <!-- End Sort List -->

                        <!-- Shop Item -->
                        <div class="row container-grid" id="fichas-grid"></div>
                        <!-- End Shop Item -->

                    
                    </div>

                </div>
            </div>
        </section>
        <!-- End Shop Item Section -->

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
	<script src="js/ctrlequipos.js"></script>
    
</body>
</html>
