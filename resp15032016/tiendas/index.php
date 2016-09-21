<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - Ubica tu tienda</title>
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
    
    <!-- ESTYLO DEL LOCALIZADOR DE TIENDAS -INICIO- -->
    <link href="css/st_style.css" rel="stylesheet" type="text/css"/>
    <!-- ESTYLO DEL LOCALIZADOR DE TIENDAS -FIN -->
    
    

</head>

<script type="text/javascript">
function legales_lista()
{
$("#legales-lista").slideToggle("slow");    
}
</script>

<style type="text/css">
.inner-intro {
    height: 400px !important;
}

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
        <section class="inner-intro bg-img12 parallax">
            <?php  
				require_once('../includes/breadcrumb.php'); 
			?> 
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- Area de conetenido -->
        <section class="ptb-sm-10 ptcontent">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1>Ubica tu tienda</h1>
                        <h2 class="port-copy">Compra tu equipo Unefon, en más de 20 000 tiendas en toda la república.</h2>
                    </div>
                    <div class="spacer-30"></div>
                </div>
            </div>
        </section>    

     <section id="main-content">
         <div class="container"><!-- container -->
             <div class="row"><!-- row -->
                <div class="col-md-5" id="izsuperior"> <!-- .col-4 -->               
                    
                    <!-- Caja de busqueda por tienda-->
                    <div id="cajabusquedatienda">
                        <div class="col-md-12 plr-0">
                            <h3>Busca por estado</h3>
                        </div>
                    
                        <div class="col-md-12 plr-0">
                            <select on class="form-control" name="ddm_estado" id="ddm_estado">
                                <option value="00" selected="selected" disabled="disabled">-- Selecciona Estado --</option>        
                                <option value="1">Aguascalientes</option>
                                <option value="2">Baja California</option>
                                <option value="3">Baja California Sur</option>  
                                <option value="4">Campeche</option>
                                <option value="5">Chiapas</option>
                                <option value="6">Chihuahua</option>
                                <option value="7">Coahuila</option>
                                <option value="8">Colima</option>
                                <option value="9">Distrito Federal</option>
                                <option value="10">Durango</option>
                                <option value="11">Estado de Mexico</option>
                                <option value="12">Guanajuato</option>
                                <option value="13">Guerrero</option>
                                <option value="14">Hidalgo</option>
                                <option value="15">Jalisco</option>
                                <option value="16">Michoacan</option>
                                <option value="17">Morelos</option>
                                <option value="18">Nayarit</option>
                                <option value="19">Nuevo Leon</option>
                                <option value="20">Oaxaca</option>
                                <option value="21">Puebla</option>
                                <option value="22">Queretaro</option>
                                <option value="23">Quintana Roo</option>
                                <option value="24">San Luis Potosi</option>
                                <option value="25">Sinaloa</option>
                                <option value="26">Sonora</option>
                                <option value="27">Tabasco</option>
                                <option value="28">Tamaulipas</option>
                                <option value="29">Tlaxcala</option>
                                <option value="30">Veracruz</option>
                                <option value="31">Yucatan</option>
                                <option value="32">Zacatecas</option>
                            </select>
                            
                            <div class="results">
                                <select class="desp_1 form-control" id="municipio" name="municipio">
                                    <option value="ninguno" selected="selected" disabled="disabled">-- Selecciona Delegacion/Municipio --</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- //Termina Caja de busqueda por Tienda -->
                    
                    <!-- Caja de busqueda por codigo postal-->
                    <div id="cajabusquedacp">
                        <div class="col-md-12 plr-0">
                            <h3>Busca por c&oacute;digo postal</h3>
                            <input class="busqueda_cp" name="txt_cp" id="txt_cp" type="text" placeholder="Tu código postal" />
                            <input name="btn_cp" id="btn_cp" type="button" value="Buscar" class="btn_locator"/>
                        </div>
                    </div><!-- // Termina caja codigo postal-->
                                        
                   <div id="not-m">           
                        <div class="col-md-12 col-sm-12 col-xs-12 plr-0">
                         <p class="ptcross"><i class="fa fa-map-marker"></i> Para conocer la dirección de las tiendas da clic en los pines rojos</p>
                        </div>

                     <div class="col-md-12 plr-0 ptcross">
                        <h4>Compra en línea tu Unefon en las siguientes tiendas.</h4>
                       
                       <div class="col-md-4 col-sm-4 pl-0">
                       <a href="http://www2.coppel.com/SearchDisplay?searchTermScope=&searchType=1000&filterTerm=&maxPrice=&top_category=&showResultsPage=true&langId=-5&beginIndex=0&advancedSearch=&sType=SimpleSearch&metaData=&pageSize=&manufacturer=&resultCatEntryType=2&catalogId=10001&pageView=grid&searchTerm=celulares&minPrice=&urlLangId=-5&categoryId=13029&storeId=12759" target="_blank">
                       <img src="images/coppel.png" alt="ubica tu tienda" title="Coppel locator" width="auto" height="auto" /></a>
                       </div>

                        <div class="col-md-4 col-sm-4 pl-0">
                        <a href="http://www.elektra.com.mx/Departments?fldc=19&dc=1909" target="_blank">
                        <img  src="images/elektra.png" alt="ubica tu tienda" title="elektra locator" width="auto" height="auto" /></a>
                        </div>

                        <div class="col-md-4 col-sm-4 pl-0">
                        <a href="http://www.walmart.com.mx/Celulares/Smartphones/l-telefonos-smart-unefon" target="_blank">
                        <img  src="images/walmart.png" alt="ubica tu tienda" title="walmart locator" width="auto" height="auto" /></a>
                        </div>
                     </div>
                    </div>                  
                                        
                </div><!-- .col-4-->
                
                <!-- Cajas de los mapas-->
                <div class="col-md-7" id="cajasdemapas">
                    <!--Caja de menu por cadena-->
                    <div class="recipiente" id="menucadena"></div>
                    
                    <label id="lbl_tienda"></label><br />
                    <div id="map"></div>
                    <div id="map2"></div>
                </div>
                
                <!--Compra en línea mobile only-->
                <div id="only-m">
                         <div class="col-md-12 col-sm-12 col-xs-12">
                         <p class="ptcross"><i class="fa fa-map-marker"></i> Para conocer la dirección de las tiendas da clic en los pines rojos</p>
                         </div>
                     <div class="col-md-12 logos-izq">
                        
                        <h4>Compra en línea tu Unefon en las siguientes tiendas.</h4>
                        
                        <a href="http://www2.coppel.com/SearchDisplay?searchTermScope=&searchType=1000&filterTerm=&maxPrice=&top_category=&showResultsPage=true&langId=-5&beginIndex=0&advancedSearch=&sType=SimpleSearch&metaData=&pageSize=&manufacturer=&resultCatEntryType=2&catalogId=10001&pageView=grid&searchTerm=celulares&minPrice=&urlLangId=-5&categoryId=13029&storeId=12759" target="_blank">
                        <img src="images/coppel.png" alt="ubica tu tienda" title="Coppel locator" width="auto" height="auto" /></a>
                        <a href="http://www.elektra.com.mx/Departments?fldc=19&dc=1909" target="_blank">
                        <img  src="images/elektra.png" alt="ubica tu tienda" title="elektra locator" width="auto" height="auto" /></a>
                        <a href="http://www.walmart.com.mx/Celulares/Smartphones/l-telefonos-smart-unefon" target="_blank">
                        <img src="images/walmart.png" alt="ubica tu tienda" title="walmart locator" width="auto" height="auto" /></a>

                     </div>
                </div>
                <!--Termina Compra en línea mobile only-->      
            </div>
         </div>
        </section>        
        
        <div class="spacer-30"></div>
        <!-- final de Cuerpo de texto-->

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
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    
    <!--Libreria de jquery-->
    <script src="js/controlador_plano.js" type="text/javascript"></script>

</body>
</html>
