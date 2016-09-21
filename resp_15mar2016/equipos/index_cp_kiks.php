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
                    <a href="en-construccion.html" target="_blank"> <strong>Úbicalos</strong></a></li> 
            </ul>          
        </div>
            <div class="atn_redes">
            <center>    
            <ul class="social">
               <li><a target="_blank" href="https://www.facebook.com/unefon"><i class="fa fa-facebook"></i></a></li>
               <li><a target="_blank" href="https://twitter.com/Unefon"><i class="fa fa-twitter"></i></a></li>
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
                    <div class="col-md-3 col-sm-3 mt-xs-3">

                        <!-- Shop Categories -->
                        <div id="filter-phones" class="sidebar-widget">
                        <h4>Filtrar equipo por:</h4>    
                        <div class="line-separator"></div>           
                            <h5>Marcas</h5>
                            <ul class="container-filter categories-filter" id="brandconten">
                                <!--<li><a class="categories" data-filter=".alcatel">Alcatel</a></li>
                                <li><a class="categories" data-filter=".huawei">Huawei</a></li>
                                <li><a class="categories" data-filter=".lg">LG</a></li>
                                <li><a class="categories" data-filter=".motorola">Motorola</a></li>
                                <li><a class="categories" data-filter=".samsung">Samsung</a></li>
                                <li><a class="categories" data-filter=".sony">Sony</a></li>
                                <li><a class="categories" data-filter=".zte">ZTE</a></li>
                                <li><a class="categories" data-filter="*">Todos</a></li>-->
                            </ul>
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
                                        <option>Modelos Recientes</option>
                                        <option>Populares</option>
                                        <option>por Marca</option>
                                        <option>por orden Alfabético</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <!-- End Sort List -->

                        <!-- Shop Item -->
                        <div class="row container-grid">
						<!--***********aqui van los eauipos-->
                        
                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 nf-item alcatel todos 2g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/ch_alcatel_pixi-3-5.jpg" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a href="equipos/pd.html" class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info"><a href="shop-detail.html">
                                            <h6 class="shop-item-name">Alcatel</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Pixi 3.5</span></div>
                                        
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 nf-item alcatel todos 2g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/ch_alcatel_pixi-4.jpg" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                            <h6 class="shop-item-name">Alcatel</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Pixi 4.0</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 nf-item alcatel todos 2g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/ch_alcatel_pixi-4-5.jpg" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                            <h6 class="shop-item-name">Alcatel</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Pixi 4.5</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 nf-item alcatel todos 3g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/ch_alcatel_idol-3.jpg" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Alcatel</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Idol 3</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 nf-item alcatel todos 2g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Alcatel</h6>
                                        </a>
                                        <div class="shop-item-price"><span>3022</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 nf-item alcatel todos 2g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Alcatel</h6>
                                        </a>
                                        <div class="shop-item-price"><span>1050</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 nf-item huawei todos 3g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Huawei</h6>
                                        </a>
                                        <div class="shop-item-price"><span>G7</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 huawei todos 3g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/ch_huawei_g-elite.jpg" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Huawei</h6>
                                        </a>
                                        <div class="shop-item-price"><span>G Elite</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 nf-item huawei todos 3g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Huawei</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Y520</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 lg todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">LG</h6>
                                        </a>
                                        <div class="shop-item-price"><span>C90</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 lg todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">LG</h6>
                                        </a>
                                        <div class="shop-item-price"><span>G Stylo</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 lg todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">LG</h6>
                                        </a>
                                        <div class="shop-item-price"><span>G Max</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 lg todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">LG</h6>
                                        </a>
                                        <div class="shop-item-price"><span>G3 Stylus</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 lg todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">LG</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Y90 Magna</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 lg todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">LG</h6>
                                        </a>
                                        <div class="shop-item-price"><span>LY YK Leon</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 motorola todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Motorola</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Moto G2</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info motorola todos 4g">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Motorola</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Moto G3</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Motorola</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Moto E2</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 motorola todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Motorola</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Moto X Play</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 samsung todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Samsung</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Galaxy E5</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 samsung todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Samsung</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Grand Neo Plus</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 samsung todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Samsung</h6>
                                        </a>
                                        <div class="shop-item-price"><span>J1</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 samsung todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Samsung</h6>
                                        </a>
                                        <div class="shop-item-price"><span>J5</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 samsung todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Samsung</h6>
                                        </a>
                                        <div class="shop-item-price"><span>J7</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 sony todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Sony</h6>
                                        </a>
                                        <div class="shop-item-price"><span>E4</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 sony todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">Sony</h6>
                                        </a>
                                        <div class="shop-item-price"><span>M4</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 zte todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                           <h6 class="shop-item-name">ZTE</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Blade A465</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 zte todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                            <h6 class="shop-item-name">ZTE</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Blade A475</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                            <div class="nf-item col-md-4 col-sm-6 col-xs-12 mb-30 zte todos 4g">
                                <div class="item-box">
                                    <!-- Shop item images -->
                                    <div class="shop-item">
                                        <div class="item-img">
                                            <img src="img/equipo_ejemplo.png" />
                                        </div>
                                        <div class="item-mask">
                                            <div class="item-mask-detail">
                                                <div class="item-mask-detail-ele">
                                                    <a class="btn btn btn_promos"><i class="fa fa-search"></i>Ver equipo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Shop item images -->

                                    <!-- Shop item info -->
                                    <div class="shop-item-info">
                                        <a href="shop-detail.html">
                                            <h6 class="shop-item-name">ZTE</h6>
                                        </a>
                                        <div class="shop-item-price"><span>Kiss 2 Max</span></div>
                                    </div>
                                    <!-- Shop item info -->
                                </div>
                            </div>

                        </div>
                        <!-- End Shop Item -->

                        <!-- Pagination Nav -->
                        <!--div class="pagination-nav text-left mtb-30">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div-->
                        <!-- End Pagination Nav -->
                    </div>

                </div>
            </div>
        </section>
        <!-- End Shop Item Section -->

        <!-- CrossSaling Section -->
        <section id="cross" class="fadeIn ptcross text-center light-color">
        <div class="row no-pddng">
            <div class="col-md-6 equipo ptcross">
               <h3>¿Aún no tienes tu equipo Unefon?</h3>
                <!-- work Filter -->
                        <p>Compra tu equipo Unefon, en más de 20 000 tiendas en toda la república.</p>
                         <a href="#" class="btn btn-md btn-white">Donde comprar</a>
                </div>

              <div class="col-md-6 donde ptcross">
               <h3>¿Dónde puedo hacer mis recargas?</h3>
                <!-- work Filter -->
                        <p>Recarga tu saldo Unefon en más de 20 000 establecimientos en toda la República Mexicana y en el Extranjero.</p>
                         <a href="#" class="btn btn-md btn-white">Ver puntos de recarga</a>
                </div>
                </div>
                <!-- End work Filter -->
        </section>

        <!-- End CrossSaling Section -->

        <!-- Recarga Section -->
        <section id="recarga" class="wow fadeIn pttop pt-sm-10 text-center">
            <div class="container">
            <div class="col-md-12">
                <center><h2>Recarga tu Unefon</h2></center>
                </div>
                <!-- work Filter -->
                <div class="row">
                        <p class="recarga-aqui">Recarga tu saldo en línea de manera rápida y segura.</p>
                         <div class="spacer-30"></div>
                         <div><a class="btn btn-md btn-white">Recarga tu saldo aquí</a></div>
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
                            <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                            <li><a target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                </div>
                <!-- End work Filter -->
            </div>
        </section>
        <!-- End Social Media Section -->


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
