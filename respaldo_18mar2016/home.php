<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - HOME</title>
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
        <section class="hero">
            <!-- Intro Scroll Down -->
            <div class="intro-scroll-down">
                <a class="scroll-down" href="#portabilidad">
                    <span class="mouse">
                        <span class="mouse-dot"></span>
                    </span>
                </a>
            </div>
            <!-- End Intro Scroll Down -->

            <!-- Hero Slider Section -->
            <div class="flexslider fullscreen-carousel hero-slider-1 parallax parallax-section1">
                <ul class="slides">
                    <li>
                        <img class="xs-hidden"  src="img/full/UNF_Bn_home_slider_desktop_campana1.jpg" alt="banner-1" />
                        <img class="visible-xs" src="img/full/UNF_Bn_home_slider_mobile_campana1.jpg" alt="banner-2" />
                        <div class="overlay-hero">
                            <div class="container caption-hero light-color">
                                <div class="inner-caption">

                                <div class="left_tslider">
                                    <h2 class="h2">Que el límite sean tus historias, no tu prepago.</h2>
                                    <p class="slider-copy">Con muy poco puedes decir mucho.</p>
                                    <div><a href="cambiate-a-unefon.php" class="btn btn-md btn-white">Descúbrelo</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img class="xs-hidden"  src="img/full/UNF_Bn_home_slider_desktop_campana3_11mar.jpg" alt="Agency" draggable="false" />
                        <img class="visible-xs" src="img/full/UNF_Bn_home_slider_mobile_campana_11mar.jpg" alt="banner-2" />
                        <div class="overlay-hero">
                            <div class="container caption-hero light-color">
                                <div class="inner-caption">
                                    <div class="left_tslider">
                                    <h2 class="h2">A  nadie le gusta que le cuenten los minutos.</h2>
                                    <p class="slider-copy">Con muy poco puedes decir mucho.</p>
                                    <div><a href="paquetes/paquetes-unefon.php" class="btn btn-md btn-white">Descúbrelo</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img class="xs-hidden"  src="img/full/UNF_Bn_home_slider_desktop_campana4.jpg" alt="banner-1" />
                        <img class="visible-xs" src="img/full/UNF_Bn_home_slider_mobile_campana4.jpg" alt="banner-2" />
                        <div class="overlay-hero">
                            <div class="container caption-hero light-color">
                                <div class="inner-caption">

                                <div class="left_tslider">
                                    <h2 class="h2">Si algo “te gusta” demuéstralo.</h2>
                                    <p class="slider-copy">Con muy poco puedes decir mucho.</p>
                                    <div><a href="equipos/index.php" class="btn btn-md btn-white">Descúbrelo</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    

                </ul>
            </div>
            <!-- End Hero Slider Section -->
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->
        <section id="tagline" class="wow fadeIn pt-50 ptb-sm-30">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h3 class="h3">Exprésate con una llamada, mensaje o un like! Con Unefon puedes decir lo que quieras, cuando quieras!</h3>
                    </div>
                </div>

                    
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End About Section-->

        <!-- Portabilidad Video -->
        <section id="portabilidad" class="ptb-sm-10">
            <div class="row no-pddng">
                    <div class="col-md-6 plr-20">
                        <h2 class="pd-bt">Cámbiate a Unefon</h2>
                        <p class="port-copy-2">Disfruta de los mejores beneficios, con tu mismo número, el trámite es muy sencillo y <strong>totalmente gratis.</strong></p>
                        <p class="port-steps">Sólo sigue estos sencillos pasos:</p>
                    </div>

                    <div class="col-md-6 block2 bg-imgvideo">
                        <!--a class="cbox-playvideo" onClick="open_video()">
                        </a-->                        
                     </div>
            </div>
        </section>
        <!-- End Portabilidad Video Section -->

        <!-- Portabilidad Megabullets -->
        <section id="megabullets">
            <div class="row no-pddng">
                    <div class="col-md-3 megabullet1">
                    <img src="img/megabullets/mg-bullet_1_portabilidad.png" alt="Obtén tu portabilidad" height="188" width="auto">   
                    </div>

                    <div class="col-md-3 megabullet2">
                    <img src="img/megabullets/mg-bullet_2_portabilidad.png" alt="Obtén tu portabilidad" height="188" width="auto">
                    </div>

                    <div class="col-md-3 megabullet3">
                    <img src="img/megabullets/mg-bullet_3_portabilidad.png" alt="Obtén tu portabilidad" height="188" width="auto"> 
                    </div>

                    <div class="col-md-3 megabullet4">
                    <img src="img/megabullets/mg-bullet_4_portabilidad.png" alt="Obtén tu portabilidad" height="188" width="auto"> 
                    </div>
            </div>        
        </section>
        <!-- End Statement Section -->

        <!--Cámbiate Section-->
        <section id="cambiate" class="wow fadeIn ptb-30 plr-0 ptb-sm-10">
            <div class="row">
                <div class="container">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <p class="port-copy to-landing">Ya no hay límites para decir lo que piensas.<br>
                            <span class="redux-p">Cámbiate a <strong>Unefon</strong>.</span></p>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                        <a class="mas_btn" href="cambiate-a-unefon.php">Ver más</a>
                </div>
            </div>
            </div>
        </section>
        <!-- Termina Cámbiate Section-->

       <!--Slider de Promociones-->
        <section class="dark-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel image-slider o-flow-hidden">
                            <div class="item">
                                <img class="visible-sm visible-md visible-lg" src="img/full/promo1.png" alt="" />
                                <img onclick="location.href='promociones/recarga-200.php'" class="visible-xs" src="img/full/promo-200_mobil.png" alt="" />
                                <!-- Content -->
                    <div class="full-wraper">
                        <div class="content-caption light-color">
                                <a href="promociones/recarga-200.php" class="btn-promos sdc-green xs-hidden" href="en-construccion.html">Conoce más aquí</a>
                        </div>
                    </div>
                    <!-- End Content -->
                            </div>
                            <div class="item">
                                <img class="visible-sm visible-md visible-lg" src="img/full/promo2.png" alt="" />
                                <img onclick="location.href='promociones/1800.php'" class="visible-xs" src="img/full/promo-1800_mobil.png" alt="" />
                                <!-- Content -->
                    <div class="full-wraper">
                        <div class="content-caption light-color">
                                <a href="promociones/1800.php" class="btn-promos sdc-blue xs-hidden" href="en-construccion.html">Conoce más aquí</a>
                        </div>
                    </div>
                    <!-- End Content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Slider de Promociones -->

        <!-- Recarga Section -->
        <section id="recarga" class="wow fadeIn ptb-50 pt-sm-10 text-center">
            <div class="container"><!-- container-->
                 <div class="col-md-12"><!-- .col-->
                     <center><h2>Síguenos en nuestras redes sociales</h2></center>
                             <div class="row"><!-- .row-->
                                 <div class="spacer-30"></div>
                                     <div id="redes" class="wow fadeIn text-center container"><!-- #redes-->
                                         <ul class="social">
                                            <li><a target="_blank" href="https://www.facebook.com/unefon"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="https://twitter.com/Unefon"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="https://www.youtube.com/user/Unefonoficial"><i class="fa fa-youtube"></i></a></li>
                                            <li><a target="_blank" href="https://www.instagram.com/unefonmx/"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div><!-- .redes-->
                             </div><!-- .row-->
                 </div><!-- .col-->
             </div><!-- .container-->
        </section>
        <!-- End Recarga Section -->

        <!-- Cross Section -->
        <section id="cross" class="fadeIn text-center dark-color">
        <div class="row no-pddng">
            <div class="col-md-6 equipo ptcross">
               <h3>¿Aún no tienes tu equipo Unefon?</h3>
                <!-- work Filter -->
                        <p>Compra tu equipo Unefon, en más de 3,000 tiendas en toda la república.</p>
                         <a href="tiendas/index.php" class="btn btn-md btn-white">Donde comprar</a>
                </div>

              <div class="col-md-6 donde ptcross">
               <h3>¿Dónde puedo hacer mis recargas?</h3>
                <!-- work Filter -->
                        <p>Recarga en México y en USA en más de 400 mil establecimientos.</p>
                         <a href="comprar/recarga-tiempo-aire.php" class="btn btn-md btn-white">Ver puntos de recarga</a>
                </div>
                </div>
                <!-- End work Filter -->
        </section>
        <!-- End Cross Section -->

         <!-- Prefooter Section -->
        <section id="we-care" class="fadeIn pt-care pt-sm-20 dark-color">
        <!-- 3 column Content START -->
         <div class="row no-pddng">
                        <div class="col-md-12 col-sm-12 col-xs-12"><!--footer news-->

                             <div class="col-md-6 col-sm-12 col-xs-12"><!--cuadro1-->
                                <div class="col-md-4 col-sm-2 col-xs-4 no-right">
                                    <img data-src="img/prefooter/fb_switch.jpg" class="img-responsive" alt="140x140" src="img/prefooter/fb_switch.jpg" data-holder-rendered="true">
                                </div>
                                <div class="col-md-8 col-sm-10 col-xs-8">
                                 <h3 class="semi-bold">Facebook Switch</h3>
                                 <p>Entra a facebook desde tu Unefon sin importar el monto de tus recargas. Con Unefon, tú eliges como compartir en tus redes.</p>
                                 <a href="servicios/facebook-switch.php" class="pref-btn">Conoce más aquí</a>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12"><!--cuadro2-->
                                <div class="col-md-4 col-sm-2 col-xs-4 no-right">
                                    <img data-src="img/prefooter/nos_importa.jpg" class="img-responsive" alt="140x140" src="img/prefooter/nos_importa.jpg" data-holder-rendered="true">
                                </div>
                                <div class="col-md-8 col-sm-10 col-xs-8">
                                    <h3 class="semi-bold">Nos importa México</h3>
                                    <p>Unidos para brindar una experiencia móvil más segura y confiable.</p>
                                    <a href="http://www.gsma.com/latinamerica/es/nosimporta" target="_blank" class="pref-btn">Conoce más aquí</a>
                                </div>
                            </div>
                            </div>

                        </div>
                        <!-- 3 column Content END -->
                        </section>

        <!-- End Prefooter Section -->

       <!--Footer Block-->
       <!-- Social Media Section -->
        <section id="redes" class="pt-care pt-sm-80">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                        <div class="spacer-30"></div>
                </div>
                <!-- End work Filter -->
            </div>
        </section>
        <!-- End Social Media Section -->


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

    <script src="js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
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
