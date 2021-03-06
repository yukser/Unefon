﻿<!DOCTYPE HTML>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8" />
    <title>UNEFON - HOME</title>
    <meta name="keywords" content="unefon, prepago, movil, mi unefon, atencion a clientes unefon" />
    <meta name="description" content="Unefon es una compa&ntilde;&iacute;a de telefon&iacute;a m&oacute;vil con servicios de prepago." />
    <link rel="canonical" href="http://www.unefon.com.mx/" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="expires" content="0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	
    <!-- Facebook Tags -->    
    <meta property="og:url" content="http://www.unefon.com.mx/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Unefon - Los mejores paquetes y equipos en prepago" />
    <meta property="og:description" content="Unefon te ofrece servicios de telefonía y una gran variedad de equipos en prepago con los que dejarás de contar minutos y empezarás a contar experiencias ¡Hazte escuchar!" />
    <meta property="og:image" content="" />
    
    <!-- Twitter Tags -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Unefon" />
    <meta name="twitter:creator" content="@Unefon" />
    <meta property="og:url" content="http://www.unefon.com.mx/" />
    <meta property="og:title" content="Unefon - Los mejores paquetes y equipos en prepago" />
    <meta property="og:description" content="Unefon te ofrece servicios de telefonía y una gran variedad de equipos en prepago con los que dejarás de contar minutos y empezarás a contar experiencias ¡Hazte escuchar!" />
    <meta property="og:image" content="" />
    
    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/favicon.png" />

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="css/xmodal.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        function open_video() {

            $("#contenedor_video").fadeIn("slow");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
            $("html,body").addClass("scroll_cero");

            $("#video-unefon")[0].src += "&autoplay=1";
            ev.preventDefault();
        }

        function close_video() {

            var urlvid = "//www.youtube.com/embed/T97curC3TJQ?rel=0";
            $('#video-unefon').attr('src', '');
            $('#video-unefon').attr('src', urlvid);

            $("#contenedor_video").fadeOut("slow");
            $('html,body').animate({
                scrollTop: 500
            }, 'slow');
            $("html,body").removeClass("scroll_cero");
        }

        function legales_lista() {
            $("#legales-lista").slideToggle("slow");
        }
    </script>
    <style type="text/css">
        .background--light .header a {
            color: #fff;
        }
        
        .h2-promo {
            font-size: 45px !important;
        }
        
        .menostop-2 {
            top: 30% !important;
            position: absolute;
        }
        
        .devices_promo1 {
            width: 51%;
            letter-spacing: 0px;
            border-bottom: 3px solid #ffc600;
            padding-bottom: 15px;
            margin-bottom: 0px;
        }
        
        .activation-auto {
            float: left;
            width: auto;
            margin-bottom: 25px;
        }
        
        .promo1-copy {
            width: 54% !important;
        }
        
        p.chip {
            font-size: 43px !important;
            font-weight: 200 !important;
            width: 54%;
            text-align: left;
            line-height: 55px;
            margin-top: -10%;
        }
        
        .chip-copy {
            font-size: 30px;
            text-align: left;
            line-height: 50px;
            width: auto;
            border-top: 2px solid #ffc600;
            float: left;
        }
        
        @media all and (max-width: 1024px) {
            .h2-promo {
                font-size: 50px !important;
            }
            p.chip {
                font-size: 35px !important;
                font-weight: 200 !important;
                width: 54%;
                text-align: left;
                line-height: 55px;
                margin-top: -10%;
            }
        }
        
        @media all and (max-width: 980px) {
            .activation-auto {
                width: 50%;
                font-size: 20px;
                line-height: 24px;
                margin-bottom: 10px;
            }
            .h2-promo {
                font-size: 40px !important;
            }
            .menostop-2 {
                top: 20% !important;
                position: absolute;
            }
        }
        
        @media all and (max-width: 768px) {
            .devices_promo1 {
                width: 100%;
                font-size: 34px;
            }
            .activation-auto {
                width: auto;
            }
            .menostop-2 {
                top: 10% !important;
                position: absolute;
            }
            .background--light .header a {
                color: #2d2d2d !important;
            }
            p.chip {
                font-size: 35px !important;
                font-weight: 200 !important;
                width: 60%;
                text-align: left;
                line-height: 50px;
                margin-top: -12%;
            }
            .chip-copy {
                font-size: 25px;
            }
        }
        
        @media all and (max-width: 450px) {
            .devices_promo1 {
                width: 50%;
                font-size: 25px !important;
                line-height: 30px !important;
            }
            .menostop-2 {
                top: 20% !important;
                position: absolute;
            }
            .activation-auto {
                width: 95%;
                margin-bottom: 5px;
                font-size: 15px !important;
            }
            .h2-promo {
                font-size: 35px !important;
                line-height: 40px !important;
            }
            p.chip {
                font-size: 35px !important;
                width: 96%;
                line-height: 45px;
                margin-top: -20%;
            }
            .chip-copy {
                font-size: 18px;
                line-height: 25px;
                padding: 10px 0px;
            }
        }
        
        @media all and (max-width: 320px) {
            p.chip {
                font-size: 25px !important;
                width: 96%;
                text-align: left;
                line-height: 35px;
                margin-top: -30%;
            }
            .chip-copy {
                font-size: 20px;
                line-height: 25px;
                padding-top: 15px;
            }
        }
        
        .black-copy {
            color: #000 !important;
            width: 51%;
            line-height: 120%;
            padding-top: 15px;
        }
        
        .main-black {
            color: #000 !important;
            width: 51%;
            line-height: 120%;
            padding-top: 15px;
        }
        
        @media all and (max-width: 980px) {
            .black-copy {
                width: 43%;
            }
        }
        
        @media all and (max-width: 450px) {
            .black-copy {
                line-height: 20px;
                width: 90%;
            }
        }
        /*Loyalty styles*/
        
        .twolines {
            line-height: 50px;
            width: 51% !important;
        }
        
        .second_line,
        .third_line {
            font-family: '../fonts/gloriola/gloriolaregular', sans-serif;
            font-size: 20px;
            line-height: 32px;
            float: left;
            width: 100%;
            text-align: left;
        }
        
        .enfasis_line {
            font-weight: bold;
        }
        
        .second_line {
            padding-top: 5px;
            font-size: 23px;
        }
        
        .third_line {
            font-size: 30px;
            font-weight: bold;
            padding-top: 10px;
        }
        
        .mega_number {
            font-size: 60px;
            font-weight: bold;
            font-family: '../fonts/gloriola/gloriolabold', sans-serif;
        }
        
        p.w_loyalty {
            border-top: 2px solid #ffc600;
            font-weight: normal;
            width: auto;
            text-align: left;
            color: #131313;
            font-size: 25px;
            line-height: 40px;
            float: left;
            margin: 0px;
            padding: 15px 0px;
        }
        
        @media all and (max-width: 1024px) {
            p.we_loyalty {
                font-size: 22px !important;
                width: auto !important;
                padding-bottom: 0px;
            }
            .second_line {
                font-size: 20px !important;
            }
        }
        
        @media all and (max-width: 980px) {
            .lesstop {
                margin-top: 10% !important;
            }
            .twolines {
                width: 100% !important;
            }
            .second_line,
            .third_line {
                width: 60%;
            }
            .second_line {
                border-top: 2px solid #ffc600;
            }
            .w_loyalty {
                width: 100%;
                float: left;
                display: none;
            }
        }
        
        @media all and (max-width: 450px) {
            .lesstop {
                margin-top: -10% !important;
            }
            .twolines {
                width: 82% !important;
                font-size: 24px !important;
                line-height: 27px !important;
            }
            .second_line {
                font-size: 16px !important;
                padding-top: 0px;
                line-height: 25px !important;
            }
            .third_line {
                font-size: 18px !important;
                padding-top: 0px;
            }
            .mega_number {
                font-size: 40px !important;
            }
            .second_line,
            .third_line {
                width: 60%;
            }
            .second_line {
                border-top: 2px solid #ffc600;
            }
            .w_loyalty {
                width: 100%;
                float: left;
                display: none;
                line-height: 20px !important;
            }
        }
        
        @media all and (max-width: 320px) {
            .second_line,
            .third_line {
                width: 70%;
            }
        }
		
		/*decuento 10*/
		.padres {width:50%;}
		.padres-copy {width: 45%; padding-top: 15px;}
		.gp_logo {
			width: 78px !important;
			float: left;
			margin-right: 10px;
		}
		
		@media all and (max-width: 450px){
		.gp_logo {
			width: 55px !important;
			float: left;
			margin-right: 8px;
		}
		.padres-copy {
			width: 70%;
			padding-top: 15px;
			font-size: 18px !important;
			line-height: 22px;
		}
		}
		
		@media all and (max-width: 320px){
		.padres-copy {
			width: 80%;
			padding-top: 15px;
			font-size: 18px !important;
			line-height: 22px;
		}
		}
		
		p.whitepayday-copy {		
			width: 40%;
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

                <!-- CONTENT -->

                <!-- Intro Section -->
                <section class="hero">
                    <!-- Intro Scroll Down -->
                    <div class="intro-scroll-down"> <a class="aaction scroll-down" href="#portabilidad" aria-label="Continúa leyendo" title="Continúa leyendo" id="gifmouse"><span><span class="mouse"> <span class="mouse-dot"></span> </span> </span></a> </div>
                    <!-- End Intro Scroll Down -->

                    <!-- Hero Slider Section -->
                    <div class="flexslider fullscreen-carousel hero-slider-1 parallax parallax-section1">
                        <ul class="slides">
                        
                       		<!--<li onclick="location.href='promociones/alcatel-descuento.php'">
                      <img class="xs-hidden sm-hidden"  src="img/full/UNF_Bn_landing_desktop_alcatel_julio.jpg" alt="Al estrenar cel, estrenas selfies, likes y memes." title="Al estrenar cel, estrenas selfies, likes y memes." />
                      <img class="visible-xs" src="img/full/home_descuento20_mobile1.png" alt="banner-1" alt="Al estrenar cel, estrenas selfies, likes y memes." title="Al estrenar cel, estrenas selfies, likes y memes." />
                              <div class="overlay-hero">
                                <div class="container caption-hero dark-color">
                                  <div class="inner-caption">
                                    <div class="left_tslider">
                                      <div style="float: left; width: 100%"> 
                                      <p class="chip" style="color: #fff">Al estrenar cel, estrenas selfies, likes y memes.</p>
                                    </div>
                                    <div style="float: left; width: 100%"> 
                                      <p class="whitepayday-copy" style="color: #fff">Estrena un <span class="boldercopy">smartphone Alcatel Pixi con 10% de descuento.</span></p>
                                    </div>
                                      <div class="extend"><a href="promociones/alcatel-descuento.php" class="btn btn-md btn-white" aria-label="Activa tu chip Unefon" title="Activa tu chip Unefon">Ver estos equipos</a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>-->
                        
                        	<li onclick="location.href='promociones/te-regresamos-tiempo-aire.php'">
                      <img class="xs-hidden sm-hidden"  src="img/full/UNF_Bn_home_slider_desktop_google_play_3.jpg" alt="Estrena cel sin sentir que lo compraste." title="Estrena cel sin sentir que lo compraste." />
                      <img class="visible-xs" src="img/full/UNF_Bn_home_slider_mobile_google_play.jpg" alt="banner-1" alt="Estrena cel sin sentir que lo compraste." title="Estrena cel sin sentir que lo compraste." />
                              <div class="overlay-hero">
                                <div class="container caption-hero dark-color">
                                  <div class="inner-caption">
                                    <div class="left_tslider">
                                      <div style="float: left; width: 100%">
                                        <p class="padres">Este verano <br>di todo con canciones.</p>
                                        <p class="padres-copy"><img class="gp_logo" src="img/full/google_play_logo.png" alt="3 meses de Google Play Música" title="3 meses de Google Play Música." />Te damos gratis<span class="boldercopy"> 3 meses de Google Play Música.</p>
                                    </div>
                                      <div class="extend"><a href="promociones/te-regresamos-tiempo-aire.php" class="btn btn-md btn-white" aria-label="Activa tu chip Unefon" title="Activa tu chip Unefon">Ver esta promoción</a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            
                            <!--<li onclick="location.href='promociones/descuento-10.php'">
                      <img class="xs-hidden sm-hidden"  src="img/full/UNF_Bn_home_descuento10.jpg" alt="El mejor momento de estrenar cel, es ahora" title="El mejor momento de estrenar cel, es ahora" />
                      <img class="visible-xs" src="img/full/home_descuento20_white.png" alt="banner-1" alt="El mejor momento de estrenar cel, es ahora" title="El mejor momento de estrenar cel, es ahora." />
                              <div class="overlay-hero">
                                <div class="container caption-hero dark-color">
                                  <div class="inner-caption">
                                    <div class="left_tslider">
                                      <div style="float: left; width: 100%"> 
                                      <p class="chip">El mejor momento <br>de estrenar cel, es ahora.</p>
                                    </div>
                                    <div style="float: left; width: 100%"> 
                                      <p class="whitepayday-copy">Estrena un <span class="boldercopy">smartphone ZTE con 10% de descuento.</span></p>
                                    </div>
                                      <div class="extend"><a href="promociones/descuento-10.php" class="btn btn-md btn-white" aria-label="Activa tu chip Unefon" title="Activa tu chip Unefon">Ver estos equipos</a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>-->
                            
                            <li onclick="location.href='promociones/lealtad.php'">
                                <img class="xs-hidden sm-hidden" src="img/full/UNF_Bn_home_slider_desktop_loyalty.jpg" alt="Dale un poco de onda a tu papá" title="Dale un poco de onda a tu papá" />
                                <img class="visible-xs" src="img/full/UNF_Bn_home_slider_mobile_loyalty_2.jpg" alt="banner-1" alt="descuento 20%" title="descuento 20%" />
                                <div class="overlay-hero">
                                    <div class="container caption-hero">
                                        <div class="inner-caption">

                                            <div class="left_tslider lesstop">
                                                <div style="float: left; width: 100%;">
                                                    <p class="whitepayday twolines">Entre más tiempo te quedas, más te consentimos.</p>
                                                </div>
                                                <div style="float: left; width: 100%;">
                                                    <p class="w_loyalty">Porque con muy poco puedes recibir mucho.</p>
                                                </div>
                                                <p class="second_line">Con nuestro <span class="enfasis_line">Programa de Lealtad</span>, llévate hasta</p>
                                                <p class="third_line">$<span class="mega_number">1,800</span>al año</p>

                                                <div class="extend"><a href="promociones/lealtad.php" class="btn btn-md btn-white" aria-label="Descúbrelo" title="Descúbrelo">Descúbrelo</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                           

                            <li onclick="location.href='promociones/recarga-200.php'"> <img class="xs-hidden" src="img/full/unefon-mainbanner-promo-200.png" draggable="false" alt="Unefon te regala hasta 200 de tiempo aire." title="Unefon te regala hasta 200 de tiempo aire." /> <img class="visible-xs" src="img/full/unefon-mainbanner-promo-200-mobile.png" alt="Unefon te regala hasta 200 de tiempo aire." title="Unefon te regala hasta 200 de tiempo aire." />
                                <div class="overlay-hero">
                                    <div class="container caption-hero light-color">
                                        <div class="inner-caption">
                                            <div class="center_slider">
                                                <div class="extend"><a href="promociones/recarga-200.php" class="btn btn-md btn-white" aria-label="Descubre la promoció de recarga 200." title="Descubre la promoció de recarga 200.">Conoce más aquí</a></div>
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

                <!-- Video Section -->
                <section id="tagline" class="pt-50 ptb-sm-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6"> <a onClick="open_video()" aria-label="Video; ¡Hazte escuchar!" title="Video; ¡Hazte escuchar!" class="aaction" id="videosection"><span><img class="playvideo_photo" src="img/unefon_campana_google_play_video_play.jpg" alt="Con Unefon puedes decir lo que quieras, cuando quieras." height="auto" width="auto" title="¿Aún vives con mamá?" /> </span></a> </div>
                            <div class="col-md-6">
                                <h1 id="hache1index" style="font-size:1px; color:#FFC600; margin:0; padding:0; border:none; line-height:0; font-weight:0;">Con Unefon ¡Hazte escuchar!</h1>
                                <h3 class="h3">Cuando tu papá<br>
								 cree que está en onda.<br>
                                Descubre por qué.<br>
                                <br>
        ¡Hazte escuchar!</h3>
                            </div>
                        </div>
                    </div>
        </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Video Section-->

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
                <div class="col-md-3 megabullet1"> <img src="img/megabullets/mg-bullet_1_portabilidad.png" alt="Obtén tu NIP de portabilidad" title="Obtén tu NIP de portabilidad" height="188" width="auto" /> </div>
                <div class="col-md-3 megabullet2"> <img src="img/megabullets/mg-bullet_2_portabilidad.png" alt="Identifica al aseror de Portabilidad." title="Identifica al aseror de Portabilidad." height="188" width="auto" /> </div>
                <div class="col-md-3 megabullet3"> <img src="img/megabullets/mg-bullet_3_portabilidad.png" alt="En 24 horas tu número será cambiado" title="En 24 horas tu número será cambiado" height="188" width="auto" /> </div>
                <div class="col-md-3 megabullet4"> <img src="img/megabullets/mg-bullet_4_portabilidad.png" alt="Bienvenido a Unefon" height="188" title="Bienvenido a Unefon" width="auto" /> </div>
            </div>
        </section>
        <!-- End Statement Section -->

        <!--Cámbiate Section-->
        <section id="cambiate" class="wow fadeIn ptb-30 plr-0 ptb-sm-10">
            <div class="row">
                <div class="container">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <p class="port-copy to-landing">Ya no hay límites para decir lo que piensas.
                            <br>
                            <span class="redux-p">Cámbiate a <strong>Unefon</strong>.</span></p>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12"> <a class="aaction mas_btn" href="cambiate-a-unefon.php" aria-label="Cámbiate a Unefon" title="Cámbiate a Unefon" id="plusaction"><span>Ver más</span></a> </div>
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
                            <div class="item"> <img class="visible-sm visible-md visible-lg" src="img/full/promo1.png" alt="Trae tu numero de otra compañía y Unefon te regala hasta 200 de tiempo aire" title="Trae tu numero de otra compañía y Unefon te regala hasta 200 de tiempo aire" /> <img onclick="location.href='promociones/recarga-200.php'" class="visible-xs" src="img/full/promo-200_mobil.png" title="Trae tu numero de otra compañía y Unefon te regala hasta 200 de tiempo aire" alt="Trae tu numero de otra compañía y Unefon te regala hasta 200 de tiempo aire" />
                                <!-- Content -->
                                <div class="full-wraper">
                                    <div class="content-caption light-color"> <a href="promociones/recarga-200.php" class="aaction btn-promos sdc-green xs-hidden" aria-label="Promoción recarga 200." title="Promoción recarga 200." id="slide200"><span>Conoce más aquí</span></a> </div>
                                </div>
                                <!-- End Content -->
                            </div>
                            <div class="item"> <img class="visible-sm visible-md visible-lg" src="img/full/promo2.png" alt="Activa tu chip con nosotros y te damos hasta 1800" title="Activa tu chip con nosotros y te damos hasta 1800" /> <img onclick="location.href='promociones/1800.php'" class="visible-xs" src="img/full/promo-1800_mobil.png" alt="Activa tu chip con nosotros y te damos hasta 1800" title="Activa tu chip con nosotros y te damos hasta 1800" />
                                <!-- Content -->
                                <div class="full-wraper">
                                    <div class="content-caption light-color"> <a href="promociones/1800.php" class="btn-promos sdc-blue xs-hidden" aria-label="Promoción 1800." title="Promoción 1800.">Conoce más aquí</a> </div>
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
            <div class="container">
                <!-- container-->
                <div class="col-md-12">
                    <!-- .col-->
                    <center>
                        <h2>Síguenos en nuestras redes sociales</h2>
                    </center>
                    <div class="row">
                        <!-- .row-->
                        <div class="spacer-30"></div>
                        <div id="redes" class="wow fadeIn text-center container">
                            <!-- #redes-->
                            <ul class="social">
                                <li><a target="_blank" href="https://www.facebook.com/unefon" aria-label="Facebook Oficial Unefon." title="Facebook Oficial Unefon." class="aaction" id="face"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/Unefon" aria-label="Twitter Oficial Unefon." title="Twitter Oficial Unefon." class="aaction" id="twit"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com/user/Unefonoficial" aria-label="Youtube Oficial Unefon." title="Youtube Oficial Unefon." class="aaction" id="you"><i class="fa fa-youtube"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/unefonmx/" aria-label="Instagram Oficial Unefon." title="Instagram Oficial Unefon." class="aaction" id="insta"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- .redes-->
                    </div>
                    <!-- .row-->
                </div>
                <!-- .col-->
            </div>
            <!-- .container-->
        </section>
        <!-- End Recarga Section -->

        <!-- Cross Section -->
        <section id="cross" class="fadeIn text-center dark-color">
            <div class="row no-pddng">
                <div class="col-md-6 equipo ptcross">
                    <h3>¿Aún no tienes tu equipo Unefon?</h3>
                    <!-- work Filter -->
                    <p>Compra tu equipo Unefon, en más de 3,000 tiendas en toda la república.</p>
                    <a href="tiendas/index.php" class="aaction btn btn-md btn-white" aria-label="Dónde Comprar Unefon." title="Dónde Comprar Unefon." id="csdonde"><span>Donde comprar</span></a> </div>
                <div class="col-md-6 donde ptcross">
                    <h3>¿Dónde puedo hacer mis recargas?</h3>
                    <!-- work Filter -->
                    <p>Recarga en México y en USA en más de 400 mil establecimientos.</p>
                    <a href="comprar/recarga-tiempo-aire.php" class="aaction btn btn-md btn-white" aria-label="Dónde Recargar" title="Dónde Recargar" id="csrecarga"><span>Ver puntos de recarga</span></a> </div>
            </div>
            <!-- End work Filter -->
        </section>
        <!-- End Cross Section -->

        <!-- Prefooter Section -->
        <section id="we-care" class="fadeIn pt-care pt-sm-20 dark-color">
            <!-- 3 column Content START -->
            <div class="row no-pddng">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!--footer news-->

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <!--cuadro1-->
                        <div class="col-md-4 col-sm-2 col-xs-4 no-right"> <img data-src="img/prefooter/fb_switch.jpg" class="img-responsive" alt="Entra a Facebook desde tu Unefon sin importar el monto de tus recargas" src="img/prefooter/fb_switch.jpg" data-holder-rendered="true" title="Entra a Facebook desde tu Unefon sin importar el monto de tus recargas" /> </div>
                        <div class="col-md-8 col-sm-10 col-xs-8">
                            <h3 class="semi-bold">Facebook Switch</h3>
                            <p>Entra a Facebook desde tu Unefon sin importar el monto de tus recargas. Con Unefon, tú eliges como compartir en tus redes.</p>
                            <a href="servicios/facebook-switch.php" class="aaction pref-btn" aria-label="Conce Facebook Switch." title="Conce Facebook Switch." id="faceswitch"><span>Conoce más aquí</span></a> </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <!--cuadro2-->
                        <div class="col-md-4 col-sm-2 col-xs-4 no-right"> <img data-src="img/prefooter/nos_importa.jpg" class="img-responsive" alt="Nos importa México" title="Nos importa México" src="img/prefooter/nos_importa.jpg" data-holder-rendered="true" /> </div>
                        <div class="col-md-8 col-sm-10 col-xs-8">
                            <h3 class="semi-bold">Nos importa México</h3>
                            <p>Unidos para brindar una experiencia móvil más segura y confiable.</p>
                            <a href="http://www.gsma.com/latinamerica/es/nosimporta" target="_blank" class="aaction pref-btn" aria-label="Nos importa México." title="Nos importa México." id="importamex"><span>Conoce más aquí</span></a> </div>
                    </div>
                </div>
            </div>
            <!-- 3 column Content END -->
        </section>

        <!-- End Prefooter Section -->

        <!--Footer Block-->
        <!-- Social Media Section -->
        <section id="redess" class="pt-care pt-sm-80">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                    <div class="spacer-30"></div>
                </div>
                <!-- End work Filter -->
            </div>
        </section>
        <!-- End Social Media Section -->

        <!-- VIDEO SPOT -->

        <div id="contenedor_video" onClick="close_video()">
            <!--CONTENEDOR_VIDEO-->
            <div class="container">
                <!-- work Filter -->
                <div class="row video_portabilidad">
                    <center>
                        <div onClick="close_video()" class="cerrar" tabindex="100">cerrar</div>
                        <div class="videoWrapper">
                            <iframe id="video-unefon" width="1280" height="720" src="//www.youtube.com/embed/T97curC3TJQ?rel=0" frameborder="0" allowfullscreenm title="Unefon Hazte escuchar"></iframe>
                        </div>
                    </center>
                </div>
            </div>
            <!--Termina caja-->

        </div>
        <!--CONTENEDOR_VIDEO-->
        <!-- VIDEO SPOT -->

        <!-- END CONTENT -->

        <!-- FOOTER -->
        <?php  
		require_once('includes/footer.php'); 
		?>
            <!-- END FOOTER -->

            <!-- Scroll Top -->
            <a class="scroll-top" aria-label="Scroll Top" title="Scroll Top"> <i class="fa fa-angle-double-up"></i> </a>
            <!-- End Scroll Top -->

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
            
            <!-- Addthis.com -->
			<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57969c8ddf4e1425"></script>-->

</body>

</html>