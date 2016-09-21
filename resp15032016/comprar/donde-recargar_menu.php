<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - Dónde recargar</title>
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
function recargar_lados()
{ 
$("#establecimientos").fadeIn("slow");
$("#bancos").fadeOut("slow");
$( "#filter1" ).addClass( "btn-active");
$( "#filter2" ).removeClass( "btn-active");
}
 
function recargar_bancos()
{
$("#bancos").slideToggle("slow");    
$("#establecimientos").fadeOut("slow");
$( "#filter2" ).addClass( "btn-active");
$( "#filter1" ).removeClass( "btn-active");
}

function legales_lista()
{
$("#legales-lista").slideToggle("slow");    
}

</script>

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
               <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
               <li><a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
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
        <section class="inner-intro bg-img15 parallax">
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
                        <h1>Recarga tiempo aire</h1>
                        <h2 class="port-copy">Recarga en México y en USA en más de 400 mil establecimientos.</h2>
                    </div>
                </div>
        </section>
        <!-- End Work Detail Section -->
    
        <!-- Galería de promociones-->

               </section>
        <!-- End Work Detail Section -->

        <section class="pttop">
                <div class="container">
                    <!-- work Filter -->
                    <div class="row">
                        <ul class="container-filter light-color">
                        <li id="filter1" onClick="recargar_lados()" class="categories btn_prefilter light-color btn-active">Dónde recargar en MÉX</li>
                        <li id="filter2" onClick="recargar_bancos()" class="categories btn_prefilter light-color">Dónde recargar en USA</li>
                    </ul>
                    </div>
                </div>
        </section> 

<!-- ==============================================
    Begin First filter
    =============================================== --> 
        <section id="establecimientos">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                    <ul class="container-filter categories-filter">
                        <li><a class="categories active" data-filter="*">Todos</a></li>
                        <li><a class="categories" data-filter=".recargabancomex">Bancos</a></li>
                        <li><a class="categories" data-filter=".recargamex">Puntos de Recarga</a></li>
                        <!--li><a class="categories" data-filter=".recarga100">Recarga 100</a></li-->
                    </ul>
                </div>
                <!-- End work Filter -->
                <div class="row container-grid">

                    <div class="nf-item recargamex">
                        <div class="item-box">
                             <img alt="1" src="../img/data/best_buy.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/del_sol.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/fabricas_francia.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/farmacia_roma.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/farmacias_benavides.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/flecha_amarilla.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/kiosko.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/ley.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/mz.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/officemax.png">
                        </div>
                    </div> 
                    
                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/price_shoes.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/s_mart.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/santa_fe.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/sears-150x100.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/super_city.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/super_farmacia.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/ado.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/bodega_aurrera.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/CA.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/chedrahui_200.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/comercial_mexicana.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/coppel-150x100.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/elektra-150x100.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/famsa-150x100.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/liverpool-150x100.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/oxxo.png">
                        </div>
                    </div>

                     <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/palacio_hierro.png">
                        </div>
                    </div> 

                     <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/sanborns.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/seven_eleven.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/soriana.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/suburbia.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/union.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/waldos.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/walmart-150x100.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/office_depot.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/extra.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/k.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/farmapronto.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/farmacias_del_ahorro.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/superama.png">
                        </div>
                    </div>

            <!--Recargar en Bancos-->
                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/banamex.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/banco_azteca.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/banco_bajio.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/bancomer.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/banjercito.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/banorte.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/banregio.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/hsbc.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/inbursa.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/ixe.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/santander.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/scotiabank.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="1" src="../img/data/seguros_afirme.png">
                        </div>
                    </div>
                        
            <!--Termina Recargar en Bancos-->       


                </div>

            </div>
        </section>
        <!-- ==============================================
    End of First filter
    =============================================== --> 

<!-- ==============================================
    Begin Second filter
    =============================================== --> 
            <section id="bancos">
                <div class="container">
                    <!-- work Filter -->
                    <div class="row">
                        <ul class="container-filter categories-filter">
                            <li><a class="categories active" data-filter="*">Todas</a></li>
                            <li><a class="categories" data-filter=".online">Recarga en línea</a></li>
                            <li><a class="categories" data-filter=".bancosusa">Establecimientos en USA</a></li>
                            <!--li><a class="categories" data-filter=".recarga100">Recarga 100</a></li-->
                        </ul>
                    </div>
                    <!-- End work Filter -->
                    <div class="row container-grid">

                <!--Puntos de recarga en USA-->
                        <div class="nf-item online spacing">
                            <div class="item-box">
                                <a class="cbox-gallary1" href="https://www.ding.com/countries/central-north-america/mexico/recharge-unefon" target="_blank" title="Recarga tu saldo en ding">
                                    <img alt="1" src="img/data/ding.jpg">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <a href="https://www.ding.com/countries/central-north-america/mexico/recharge-unefon" target="_blank" class="btn_promos btn">Recarga desde aquí</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="nf-item online spacing">
                            <div class="item-box">
                                <a class="cbox-gallary1" href="https://moneygram.transferto.com/" title="Recarga tu saldo en Moneygram">
                                    <img alt="1" src="../img/data/moneygram2.png">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <a href="https://moneygram.transferto.com/" class="btn_promos btn">Recarga desde aquí</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>     
                <!--Termina Puntos de recarga  en USA-->

                <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="1" src="../img/data/boss_revolution.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="1" src="../img/data/k.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="1" src="../img/data/dollar_general.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="1" src="../img/data/la_nacional.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="1" src="../img/data/america_transfer.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="1" src="../img/data/moneygram2-thumb.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="1" src="../img/data/rite_aid.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="1" src="../img/data/uniteller.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="1" src="../img/data/walgreens.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="1" src="../img/data/walmart-150x100.png">
                            </div>
                        </div> 

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="1" src="../img/data/seguros_afirme.png">
                            </div>
                        </div>    

                    </div>

                </div>

            </section>
<!-- ==============================================
    End of second filter
    =============================================== --> 


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
