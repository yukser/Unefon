<!DOCTYPE HTML>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8" />
    <link rel="canonical" href="http://www.unefon.com.mx/" />
    <title>UNEFON - ¿Dónde recargar?</title>
    <meta name="description" content="Localiza tu punto de recarga mas cercano Unefon." />
    <meta name="keywords" content="celulares, unefon, recarga, portabilidad, redes sociales, cobertura, smartphone"/>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/favicon.png" />

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/oferta.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="css/xmodal.css" rel="stylesheet" type="text/css" />
    
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
	
	
	</script>
	
	<style type="text/css">
	
	#bancos {display: none;}
	
	 @media all and (max-width: 450px){ 
	.inner-intro {
		height: 300px !important;
	  }
	}
	
	</style>

</head>




<body class="full-intro">

    

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
        <section class="inner-intro bg-img15 parallax">
            <?php  
				require_once('includes/breadcrumb.php'); 
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
                        <li><a class="categories active" data-filter="*" aria-label="Todos" title="Todos">Todos</a></li>
                        <li><a class="categories" data-filter=".recargabancomex" aria-label="Bancos" title="Bancos">Bancos</a></li>
                        <li><a class="categories" data-filter=".recargamex" aria-label="Puntos de Recarga" title="Puntos de Recarga">Puntos de Recarga</a></li>
                        <!--li><a class="categories" data-filter=".recarga100">Recarga 100</a></li-->
                    </ul>
                </div>
                <!-- End work Filter -->
                <div class="row container-grid">

                    <div class="nf-item recargamex">
                        <div class="item-box">
                             <img alt="Best Buy" title="Best Buy" src="img/data/best_buy.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Del sol" title="Del sol" src="img/data/del_sol.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Fabricas Francia" title="Fabricas Francia" src="img/data/fabricas_francia.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Farmacia Roma" tilte="Farmacia Roma" src="img/data/farmacia_roma.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Farmacias Benavides" tilte="Farmacias Benavides"  src="img/data/farmacias_benavides.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Flecha Amarilla" tilte="Flecha Amarilla" src="img/data/flecha_amarilla.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                        	<img alt="kiosko" tilte="kiosko" src="img/data/kiosko.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Ley" tilte="Ley" src="img/data/ley.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Mz" tilte="Mz" src="img/data/mz.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Officemax" tilte="Officemax" src="img/data/officemax.png">
                        </div>
                    </div> 
                    
                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Price Shoes" tilte="Price Shoes" src="img/data/price_shoes.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Smart" tilte="Smart" src="img/data/s_mart.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Santa Fe" tilte="Santa Fe" src="img/data/santa_fe.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Sears" tilte="Sears" src="img/data/sears-150x100.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Super City" tilte="Super City" src="img/data/super_city.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Super Farmacia" tilte="Super Farmacia" src="img/data/super_farmacia.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="ADO" tilte="ADO" src="img/data/ado.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" tilte="" src="img/data/bodega_aurrera.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" tilte="" src="img/data/CA.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Chedrahui" tilte="Chedrahui" src="img/data/chedrahui_200.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Comercial Mexicana" tilte="Comercial Mexicana" src="img/data/comercial_mexicana.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="1" tilte="" src="img/data/coppel-150x100.png">
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Coppel" tilte="Coppel" src="img/data/elektra-150x100.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Famsa" tilte="Famsa" src="img/data/famsa-150x100.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Liverpool" tilte="Liverpool" src="img/data/liverpool-150x100.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Oxxo" tilte="Oxxo" src="img/data/oxxo.png">
                        </div>
                    </div>

                     <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Palacio Hierro" tilte="Palacio Hierro" src="img/data/palacio_hierro.png">
                        </div>
                    </div> 

                     <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Sanborns" tilte="Sanborns" src="img/data/sanborns.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Seven Eleven" tilte="Seven Eleven" src="img/data/seven_eleven.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Soriana" tilte="Soriana" src="img/data/soriana.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Suburbia" tilte="Suburbia" src="img/data/suburbia.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Union" tilte="Union" src="img/data/union.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Waldos" tilte="Waldos" src="img/data/waldos.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Walmart" tilte="Walmart" src="img/data/walmart-150x100.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Office Depot" tilte="Office Depot" src="img/data/office_depot.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Extra" tilte="Extra" src="img/data/extra.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="K" tilte="K" src="img/data/k.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Farmapronto" tilte="Farmapronto" src="img/data/farmapronto.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Farmacias del Ahorro" tilte="Farmacias del Ahorro" src="img/data/farmacias_del_ahorro.png">
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Superama" tilte="Superama" src="img/data/superama.png">
                        </div>
                    </div>

            <!--Recargar en Bancos-->
                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Banamex" tilte="Banamex" src="img/data/banamex.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Banco Azteca" tilte="Banco Azteca" src="img/data/banco_azteca.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Banco Bajio" tilte="Banco Bajio" src="img/data/banco_bajio.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Bancomer" tilte="Bancomer" src="img/data/bancomer.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Banjercito" tilte="Banjercito" src="img/data/banjercito.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Banorte" tilte="Banorte" src="img/data/banorte.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Banregio" tilte="Banregio" src="img/data/banregio.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="HSBC" tilte="HSBC" src="img/data/hsbc.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Inbursa" tilte="Inbursa" src="img/data/inbursa.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="IXE" tilte="IXE" src="img/data/ixe.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Santander" tilte="Santander" src="img/data/santander.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Scotiabank" tilte="Scotiabank" src="img/data/scotiabank.png">
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Seguros Afirme" tilte="Seguros Afirme" src="img/data/seguros_afirme.png">
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
                            <li><a class="categories active" data-filter="*" aria-label="Todas" title="Todas">Todas</a></li>
                            <li><a class="categories" data-filter=".online" aria-label="Recarga en línea" title="Recarga en línea">Recarga en línea</a></li>
                            <li><a class="categories" data-filter=".bancosusa" aria-label="Establecimientos en USA" title="Establecimientos en USA">Establecimientos en USA</a></li>
                            <!--li><a class="categories" data-filter=".recarga100">Recarga 100</a></li-->
                        </ul>
                    </div>
                    <!-- End work Filter -->
                    <div class="row container-grid">

                <!--Puntos de recarga en USA-->
                        <div class="nf-item online spacing">
                            <div class="item-box">
                                <a class="cbox-gallary1" href="https://www.ding.com/countries/central-north-america/mexico/recharge-unefon" target="_blank" aria-label="Recarga tu saldo en ding" title="Recarga tu saldo en ding">
                                    <img alt="1" tilte="" src="img/data/ding.jpg">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <a href="https://www.ding.com/countries/central-north-america/mexico/recharge-unefon" target="_blank" class="btn_promos btn" aria-label="Recarga desde aquí" title="Recarga desde aquí">Recarga desde aquí</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="nf-item online spacing">
                            <div class="item-box">
                                <a class="cbox-gallary1" href="https://moneygram.transferto.com/" title="Recarga tu saldo en Moneygram" aria-label="Recarga tu saldo en Moneygram">
                                    <img alt="1" tilte="" src="img/data/moneygram2.png">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <a href="https://moneygram.transferto.com/" class="btn_promos btn" title="Recarga desde aquí" aria-label="Recarga desde aquí">Recarga desde aquí</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>     
                <!--Termina Puntos de recarga  en USA-->

                <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="Boss Revolution" tilte="Boss Revolution" src="img/data/boss_revolution.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="K" tilte="K" src="img/data/k.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="Dollar General" tilte="Dollar General" src="img/data/dollar_general.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="La Nacional" tilte="La Nacional" src="img/data/la_nacional.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="America Transfer" tilte="America Transfer" src="img/data/america_transfer.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="Moneygram" tilte="Moneygram" src="img/data/moneygram2-thumb.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="Rite Aid" tilte="Rite Aid" src="img/data/rite_aid.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="Uniteller" tilte="Uniteller" src="img/data/uniteller.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="Walgreens" tilte="Walgreens" src="img/data/walgreens.png">
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="Walmart" tilte="Walmart" src="img/data/walmart-150x100.png">
                            </div>
                        </div> 

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="Seguros Afirme" tilte="Seguros Afirme" src="img/data/seguros_afirme.png">
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
        <section id="cross" class="fadeIn ptcross text-center dark-color">
        <div class="row no-pddng">
            <div class="col-md-12 equipo ptcross">
               <h3>¿Aún no tienes tu equipo Unefon?</h3>
                <!-- work Filter -->
                        <p>Compra tu equipo Unefon, en más de 20 000 tiendas en toda la república.</p>
                         <a href="tiendas" class="btn btn-md btn-white" aria-label="Donde comprar" title="Donde comprar">Donde comprar</a>
                </div>

              <!--div class="col-md-6 donde ptcross">
               <h3>¿Dónde puedo hacer mis recargas?</h3-->
                <!-- work Filter -->
                        <!--p>Recarga tu saldo Unefon en más de 20 000 establecimientos en toda la República Mexicana y en el Extranjero.</p>
                         <a href="#" class="btn btn-md btn-white">Ver puntos de recarga</a>
                </div>
                </div-->
                <!-- End work Filter -->
        </section>

        <!-- End CrossSaling Section -->
       <!-- Recarga Section -->
        <section id="recarga" class="wow fadeIn ptb-50 pt-sm-10 text-center">
            <div class="container">
            <div class="col-md-12">
                <center><h2>Descarga la app Mi Unefon.</h2></center>
                </div>
                <!-- work Filter -->
                <div class="row">
                        <p class="recarga-aqui">Recarga y consulta tus minutos y megas de manera rápida y segura.</p>
                         <div class="spacer-30"></div>
                         <div>
                     <a href="https://play.google.com/store/apps/details?id=com.unefon.miunefon" target="_blank" class="btn btn-md btn-white mlrb-10" aria-label="Descargar" title="Descargar">
                     <i class="unefon icon-android"></i> Descargar</a>
                     <a href="https://itunes.apple.com/mx/app/mi-unefon/id868285890?mt=8" target="_blank" class="btn btn-md btn-white" aria-label="Descargar" title="Descargar">
                     <i class="unefon icon-appleinc"></i> Descargar</a></div>
                </div>
                <!-- End work Filter -->
            </div>
        </section>
        <!-- End Recarga Section -->
       <!--Footer Block-->
       <!-- Social Media Section -->
        <section id="redes" class="wow fadeIn pt-care pt-sm-80 text-center">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/" aria-label="Facebook Oficial Unefon." title="Facebook Oficial Unefon."><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://www.twitter.com/" aria-label="Twitter Oficial Unefon." title="Twitter Oficial Unefon."><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/" aria-label="Youtube Oficial Unefon." title="Youtube Oficial Unefon."><i class="fa fa-youtube"></i></a></li>
                            <li><a target="_blank" href="https://instagram.com/" aria-label="Instagram Oficial Unefon." title="Instagram Oficial Unefon."><i class="fa fa-instagram"></i></a></li>
                        </ul>
                </div>
                <!-- End work Filter -->
            </div>
        </section>
        <!-- End Social Media Section -->


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
