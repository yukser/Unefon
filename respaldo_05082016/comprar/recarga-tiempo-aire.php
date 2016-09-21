<!DOCTYPE HTML>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8" />
	<link rel="canonical" href="http://www.unefon.com.mx/" />
    <title>UNEFON - ¿Dónde recargar?</title>
    <meta name="keywords" content="celulares, unefon, recarga, puntos de recarga, tiempo aire"/>
	<meta name="description" content="Unefon es una compa&ntilde;&iacute;a de telefon&iacute;a m&oacute;vil con servicios de prepago."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    
    <!-- Facebook Tags -->    
    <meta property="og:url" content="http://www.unefon.com.mx/comprar/recarga-tiempo-aire.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Unefon - Recarga tiempo aire" />
    <meta property="og:description" content="Recarga tiempo aire en México y Estados Unidos en más de 400,000 establecimientos." />
    <meta property="og:image" content="" />
    
    <!-- Twitter Tags -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Unefon" />
    <meta name="twitter:creator" content="@Unefon" />
    <meta property="og:url" content="http://www.unefon.com.mx/comprar/recarga-tiempo-aire.php" />
    <meta property="og:title" content="Unefon - Recarga tiempo aire" />
    <meta property="og:description" content="Recarga tiempo aire en México y Estados Unidos en más de 400,000 establecimientos." />
    <meta property="og:image" content="" />

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />
    <link rel="icon" type="image/png" href="../img/favicon.png"/>
    <link rel="apple-touch-icon" href="../img/favicon.png"/>

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

            <div id="content"></div>
        
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
                        <li id="filter1" onClick="recargar_lados()" class="aaction categories btn_prefilter light-color btn-active"><span>Dónde recargar en MÉX</span></li>
                        <li id="filter2" onClick="recargar_bancos()" class="aaction categories btn_prefilter light-color"><span>Dónde recargar en USA</span></li>
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
                        <li><a class="aaction categories active" data-filter="*" aria-label="Todos" title="Todos" id="idtodos"><span>Todos</span></a></li>
                        <li><a class="aaction categories" data-filter=".recargabancomex" aria-label="Bancos" title="Bancos" id="idbanci"><span>Bancos</span></a></li>
                        <li><a class="aaction categories" data-filter=".recargamex" aria-label="Puntos de Recarga" title="Puntos de Recarga" id="idpuntos"><span>Puntos de Recarga</span></a></li>
                        <!--li><a class="categories" data-filter=".recarga100">Recarga 100</a></li-->
                    </ul>
                </div>
                <!-- End work Filter -->
                <div class="row container-grid">

                    <div class="nf-item recargamex">
                        <div class="item-box">
                             <img alt="Unefon - Best buy" title="Unefon - Best buy" src="../img/data/best_buy.png" />
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Del Sol" title="Unefon - Del Sol" src="../img/data/del_sol.png" />
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Fabricas de Francia" title="Unefon - Fabricas de Francia" src="../img/data/fabricas_francia.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Farmacia Roma" title="Unefon - Farmacia Roma" src="../img/data/farmacia_roma.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Farmacias Benavides" title="Unefon - Farmacias Benavide" src="../img/data/farmacias_benavides.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Flecha Amarilla" title="Unefon - Flecha Amarilla" src="../img/data/flecha_amarilla.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Kiosko" title="Unefon - Kiosko" src="../img/data/kiosko.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Ley" title="Unefon - Ley" src="../img/data/ley.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Mz" title="Unefon - Mz" src="../img/data/mz.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Officemax" title="Unefon - Officemax" src="../img/data/officemax.png"/>
                        </div>
                    </div> 
                    
                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Price Shoes" title="Unefon - Price Shoes" src="../img/data/price_shoes.png"/>
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Smart" title="Unefon - Smart" src="../img/data/s_mart.png"/>
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Santa Fe" title="Unefon - Santa Fe" src="../img/data/santa_fe.png"/>
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Sears" title="Unefon - Sears" src="../img/data/sears-150x100.png"/>
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Super City" title="Unefon - Super City" src="../img/data/super_city.png"/>
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Super Farmacia" title="Unefon - Super Farmacia" src="../img/data/super_farmacia.png"/>
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - ADO" title="Unefon - ADO" src="../img/data/ado.png"/>
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Bodega Aurrera" title="Unefon - Bodega Aurrera" src="../img/data/bodega_aurrera.png"/>
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - C&A" title="Unefon - C&A" src="../img/data/CA.png"/>
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Chedrahui" title="Unefon - Chedrahui" src="../img/data/chedrahui_200.png"/>
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Comercial Mexicana" title="Unefon - Comercial Mexicana" src="../img/data/comercial_mexicana.png"/>
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Coppel" title="Unefon - Coppel" src="../img/data/coppel-150x100.png"/>
                        </div>
                    </div> 

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Elektra" title="Unefon - Elektra" src="../img/data/elektra-150x100.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Famsa" title="Unefon - Famsa" src="../img/data/famsa-150x100.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Liverpool" title="Unefon - Liverpool" src="../img/data/liverpool-150x100.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Oxxo" title="Unefon - Oxxo" src="../img/data/oxxo.png"/>
                        </div>
                    </div>

                     <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Palacio de Hierro" title="Unefon - Palacio de Hierro" src="../img/data/palacio_hierro.png"/>
                        </div>
                    </div> 

                     <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Sanborns" title="Unefon - Sanborns" src="../img/data/sanborns.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Seven Eleven" title="Unefon - Seven Eleven" src="../img/data/seven_eleven.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Soriana" title="Unefon - Soriana" src="../img/data/soriana.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Suburbia" title="Unefon - Suburbia" src="../img/data/suburbia.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Union" title="Unefon - Union" src="../img/data/union.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Waldos" title="Unefon - Waldos" src="../img/data/waldos.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Walmart" title="Unefon - Walmart" src="../img/data/walmart-150x100.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Office Depot" title="Unefon - Office Depot" src="../img/data/office_depot.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Extra" title="Unefon - Extra" src="../img/data/extra.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - K" title="Unefon - K" src="../img/data/k.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Farmapronto" title="Unefon - Farmapronto" src="../img/data/farmapronto.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Farmacias del Ahorro" title="Unefon - Farmacias del Ahorro" src="../img/data/farmacias_del_ahorro.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Superama" title="Unefon - Superama" src="../img/data/superama.png"/>
                        </div>
                    </div>

            <!--Recargar en Bancos-->
                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - Banamex" title="Unefon - Banamex" src="../img/data/banamex.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - Banco Azteca" title="Unefon - Banco Azteca" src="../img/data/banco_azteca.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - Banco Bajio" title="Unefon - Banco Bajio" src="../img/data/banco_bajio.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - Bancomer" title="Unefon - Bancomer" src="../img/data/bancomer.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - Banjercito" title="Unefon - Banjercito" src="../img/data/banjercito.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - Banorte" title="Unefon - Banorte" src="../img/data/banorte.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - Banregio" title="Unefon - Banregi" src="../img/data/banregio.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - HSBC" title="Unefon - HSBC" src="../img/data/hsbc.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - Inbursa" title="Unefon - Inbursa" src="../img/data/inbursa.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - Ixe" title="Unefon - Ixe" src="../img/data/ixe.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - Santander" title="Unefon - Santander" src="../img/data/santander.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - Scotiabank" title="Unefon - Scotiaban" src="../img/data/scotiabank.png"/>
                        </div>
                    </div>

                    <div class="nf-item recargabancomex">
                        <div class="item-box">
                                <img alt="Unefon - Seguros Afirme" title="Unefon - Seguros Afirme" src="../img/data/seguros_afirme.png"/>
                        </div>
                    </div>
                    
                     <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Muebles America" title="Unefon - Muebles America" src="../img/data/muebles_america.jpg"/>
                        </div>
                    </div>
                    
                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Mobo" title="Unefon - Mobo" src="../img/data/mobo.png"/>
                        </div>
                    </div>
                    
                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Mycel" title="Unefon - Mycel" src="../img/data/mycel.png"/>
                        </div>
                    </div>
                    
                    <div class="nf-item recargamex">
                        <div class="item-box">
                                <img alt="Unefon - Red Quiubo" title="Unefon - Red Quiubo" src="../img/data/red_quiubo.png"/>
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
                                <a class="cbox-gallary1" href="https://www.xoom.com/signIn?null" aria-label="Recarga tu saldo en Xoom" target="_blank" title="Recarga tu saldo en Xoom">
                                    <img alt="Xoom" alt="Xoom" src="../img/data/xoom.png">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <a href="https://www.xoom.com/signIn?null" target="_blank" aria-label="Recarga desde aquí" class="btn_promos btn">Recarga desde aquí</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="nf-item online spacing">
                            <div class="item-box">
                                <a class="cbox-gallary1" href="https://www.ding.com/countries/central-north-america/mexico/recharge-unefon" target="_blank" title="Recarga tu saldo en ding" aria-label="Recarga tu saldo en ding">
                                    <img alt="Ding" alt="Ding" src="../img/data/ding.jpg">
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <a href="https://www.ding.com/countries/central-north-america/mexico/recharge-unefon" target="_blank" class="btn_promos btn" aria-label="Recarga desde aquí">Recarga desde aquí</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="nf-item online spacing">
                            <div class="item-box">
                                <a class="cbox-gallary1" href="https://moneygram.transferto.com/" target="_blank" title="Recarga tu saldo en Moneygram" aria-label="Recarga tu saldo en Moneygram">
                                    <img alt="Moneygram" title="Moneygram" src="../img/data/moneygram2.png"/>
                                    <div class="item-mask">
                                        <div class="item-caption">
                                            <a href="https://moneygram.transferto.com/" target="_blank" class="btn_promos btn" aria-label="Recarga desde aquí">Recarga desde aquí</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>     
                <!--Termina Puntos de recarga  en USA-->

                <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="Unefon - Boss Revolutio" title="Unefon - Boss Revolutio" src="../img/data/boss_revolution.png"/>
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="Unefon - K" title="Unefon - K" src="../img/data/k.png"/>
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="Unefon - Dollar General" title="Unefon - Dollar General" src="../img/data/dollar_general.png"/>
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="Unefon - La Nacional" title="Unefon - La Nacional" src="../img/data/la_nacional.png"/>
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="Unefon - America Transfer" title="Unefon - America Transfer" src="../img/data/america_transfer.png"/>
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="Unefon - Moneygram" title="Unefon - Moneygram" src="../img/data/moneygram2-thumb.png"/>
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="Unefon - Rite Aid" title="Unefon - Rite Aid" src="../img/data/rite_aid.png"/>
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="Unefon - Uniteller" title="Unefon - Uniteller" src="../img/data/uniteller.png"/>
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                 <img alt="Unefon - Walgreens" title="Unefon - Walgreens" src="../img/data/walgreens.png"/>
                            </div>
                        </div>

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="Unefon - Walmart" title="Unefon - Walmart" src="../img/data/walmart-150x100.png"/>
                            </div>
                        </div> 

                        <div class="nf-item bancosusa">
                            <div class="item-box">
                                    <img alt="Unefon - Seguros Afirme" title="Unefon - Seguros Afirme" src="../img/data/seguros_afirme.png"/>
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
                        <p>Compra tu equipo Unefon, en más de 3,000 tiendas en toda la república.</p>
                         <a href="../tiendas/index.php" class="aaction btn btn-md btn-white" aria-label="Donde comprar" title="Donde comprar" id="dondecompre"><span>Donde comprar</span></a>
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

        <!-- Redes sociales section -->
        <section id="recarga" class="wow fadeIn ptb-50 pt-sm-10 text-center">
            <div class="container"><!-- container-->
                 <div class="col-md-12"><!-- .col-->
                     <center><h2>Síguenos en nuestras redes sociales</h2></center>
                             <div class="row"><!-- .row-->
                                 <div class="spacer-30"></div>
                                     <div id="redes" class="wow fadeIn text-center container"><!-- #redes-->
                                         <ul class="social">
                                            <li><a target="_blank" href="https://www.facebook.com/unefon" aria-label="Facebook Oficial Unefon" title="Facebook Oficial Unefon" class="aaction" id="faceune"><span><i class="fa fa-facebook"></i></span></a></li>
                                            <li><a target="_blank" href="https://twitter.com/Unefon" aria-label="Twitter Oficial Unefon" title="Twitter Oficial Unefon" class="aaction" id="twitune"><span><i class="fa fa-twitter"></i></span></a></li>
                                            <li><a target="_blank" href="https://www.youtube.com/user/Unefonoficial" aria-label="Youtube Oficial Unefon" title="Youtube Oficial Unefon" class="aaction" id="youune"><span><i class="fa fa-youtube"></i></span></a></li>
                                            <li><a target="_blank" href="https://www.instagram.com/unefonmx/" aria-label="Instagram Oficial Unefon" title="Instagram Oficial Unefon" class="aaction" id="instaune"><span><i class="fa fa-instagram"></i></span></a></li>
                                        </ul>
                                    </div><!-- .redes-->
                             </div><!-- .row-->
                 </div><!-- .col-->
             </div><!-- .container-->
        </section>
        <!-- End redes sociales section -->

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
