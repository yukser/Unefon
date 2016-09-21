<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - Oferta</title>
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
function open_faq()
{ 
$("#contenedor_faq").fadeIn("slow");
$('html').animate({ scrollTop: 0 }, 'slow'); return true; 
}
 
function close_faq()
{   
$("#contenedor_faq").fadeOut("slow");
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
        <section class="inner-intro bg-img11 parallax">
            <?php  
				require_once('../includes/breadcrumb.php'); 
			?>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- Work Detail Section -->
        <section id="paquetes" class="ptb-sm-10">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pt-care">
                        <h1>Paquetes Unefon</h1>
                        <h2 class="port-copy">Los paquetes más atractivos con cada recarga.</h2>
                        <ul class="beneficios-paquetes">
                            <li>Whatsapp <b>ilimitado</b> con tus recargas de <b>$50 pesos</b></li>
                            <li>Redes sociales <b>ilimitadas</b> desde la recarga de <b>$150 pesos</b></li>
                            <li>Tarifa de <b>$0.75 pesos</b> recargas de <b>$10 pesos</b></li>
                            <li>Úsalo en <b>MEX/USA/CAN</b> sin cargos extras por <b>roaming</b></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <img src="../img/full/oferta-banner2.jpg" alt="oferta Unefon" width="auto" height="auto">  
                    </div>
                </div>
        </section>
        <!-- End Work Detail Section -->

        <!-- Oferta Flex -->
        <section id="tabla-oferta" class="ptcontent ptb-sm-10">
            <div class="container"><!-- container -->
                <!-- work Filter -->
                <div clas="row"><!-- row -->
                    
                    <div class="col-md-12 plr-0"><!-- Recargas -->
                        <div class="col-md-2 pl-0"><!-- Pasos izquierda -->
                         <h3>Recarga</h3>
                        <div class="col-md-12 plr-0"><!-- Col-md-12 -->

                            <div class="ten-twenty">
                            <p class="pfs-10-20"><span>$</span>10-<span>$</span>20</p>
                            </div>
                            <div class="tab-oferta1">
                                <p class="tab-text-izq-1"><span>$</span>0.75</p>
                                <p class="tab-text-izq-2">MB/MIN/SMS</p>
                            </div>

                            <div class="num-gratis hidden-xs hidden-sm visible-lg visible-md"><!-- Número GRATIS -->
                                <p class="ng-texto"><span class="cinco-gigante">5</span>números gratis</p>
                            </div>

                            <div class="verde_nuevo visible-xs visible-sm hidden-md hidden-lg"><!-- Número GRATIS -->
                                 <p>5 números gratis</p>
                            </div>

                            <div class="wapp"><!-- Whatsapp ilimitado -->
                                <p>Ilimitado<sup>(6)</sup>
                                     <img src="../img/logos/wapp_ilimitado.jpg" alt="redes ilimitadas" height="auto" width="auto"></p>
                            </div>

                            <div class="rprip"><!-- Radio Prip -->
                                <p>Radio Prip $0.01 x seg</p>
                            </div>

                        <div class="dias-recarga"><!-- Días limite -->
                                <p>7 a 15 días</p>
                        </div>

                        </div><!-- Col-md-12 -->

                         

                        </div><!-- Cierra Columna recargas 10-20 -->

                        <div class="col-md-10 plr-0"><!-- Paquetes -->
                         <h3>Paquetes</h3>
                            <div class="col-md-3 plr-0"><!-- Recargas precio col-1 -->

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $30 -->
                            <p class="pfs-adeals"><span>$</span>30</p>
                            <div class="tab-adeals"><!-- MB -->
                                <p class="adeals-title">40</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados</strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas f-t-wa</p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado</p></div>
                                <div class="dias-recarga"><p>7 días</p></div>
                            </div>
                                </div>

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $50 -->
                            <p class="pfs-adeals"><span>$</span>50</p>
                            <div class="tab-adeals">
                                <p class="adeals-title">100</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados</strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas f-t-wa</p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado</p></div>
                                <div class="dias-recarga"><p>7 días</p></div>
                            </div>
                                </div>
                            </div><!-- Termina Recargas precio col-1 -->

                            <div class="col-md-3 plr-0"><!-- Recargas precio col-2 -->

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $100 -->
                            <p class="pfs-adeals"><span>$</span>100</p>
                            <div class="tab-adeals">
                                <p class="adeals-title">350</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados</strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas f-t-wa</p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado</p></div>
                                <div class="dias-recarga"><p>7 días</p></div>
                            </div>
                                </div>

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $150 -->
                            <p class="pfs-adeals"><span>$</span>150</p>
                            <div class="tab-adeals">
                                <p class="adeals-title">600</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados</strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas f-t-wa</p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado</p></div>
                                <div class="dias-recarga"><p>7 días</p></div>
                            </div>
                                </div>

                            </div><!-- Termina Recargas precio col-2 -->


                            <div class="col-md-3 plr-0"><!-- Recargas precio col-3 -->

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $200 -->
                            <p class="pfs-adeals"><span>$</span>200</p>
                            <div class="tab-adeals">
                                <p class="adeals-title">1,200</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados</strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas f-t-wa</p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado</p></div>
                                <div class="dias-recarga"><p>7 días</p></div>
                            </div>
                                </div>

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $300 -->
                            <p class="pfs-adeals"><span>$</span>300</p>
                            <div class="tab-adeals">
                                <p class="adeals-title">2,000</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados</strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas f-t-wa</p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado</p></div>
                                <div class="dias-recarga"><p>7 días</p></div>
                            </div>
                                </div>
                            </div><!-- Termina Recargas precio col-3 -->

                            <div class="col-md-3 plr-0"><!-- Recargas precio col-4 -->

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $200 -->
                            <p class="pfs-adeals"><span>$</span>500</p>
                            <div class="tab-adeals">
                                <p class="adeals-title">3,500</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados</strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas f-t-wa</p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado</p></div>
                                <div class="dias-recarga"><p>7 días</p></div>
                            </div>
                                </div>

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $300 -->
                            <p class="pfs-adeals"><span>$</span>1000</p>
                            <div class="tab-adeals">
                                <p class="adeals-title">7,000</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados</strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas f-t-wa</p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado</p></div>
                                <div class="dias-recarga"><p>7 días</p></div>
                            </div>
                                </div>
                            </div><!-- Termina Recargas precio col-4 -->

                            <div class="col-md-12 plr-0 hidden_mobile"><!-- Llamadas y mensajes ilimitados -->

                                <div class="tab-llamadas">
                                    <p class="llamadas-p-1">Llamadas y mensajes MEX/USA/CAN</p>
                                    <p class="llamadas-p-2">ilimitados</p>
                                </div>

                                <div class="tab-redes">
                                    <p>Ilimitadas<sup>(4)</sup>
                                     <img src="img/logos/redes_ilimitadas.jpg" alt="redes ilimitadas" height="auto" width="auto"></p>
                                </div>

                                <div class="tab-radio-prip">
                                    <p>Radio Prip Ilimitado</p>
                                </div>

                            </div><!-- Llamadas y mensajes ilimitados -->

                            <div class="col-md-12 plr-0 hidden_mobile"><!-- Días limite -->
                                <div class="col-md-3 plr-0">
                                    <div class="col-md-6 recarga-col-1 plr-0"><p>7 días</p></div>
                                    <div class="col-md-6 recarga-col-1 plr-0"><p>20 días</p></div>
                                </div>

                                <div class="col-md-6 plr-0 recarga-col-2">
                                    <p>30 días</p>
                                </div>

                                 <div class="col-md-3 plr-0">
                                    <div class="col-md-6 recarga-col-3 plr-0"><p>&nbsp;</p></div>
                                    <div class="col-md-6 recarga-col-4 plr-0"><p>60 días</p></div>
                                </div>
                        </div>
                            
                        </div>
                    </div>

                    <div class="col-md-12 roaming-tabla">Sin cargos extras por Roaming en MEX/USA/CAN</div><!-- Roaming Tabla --> 

                </div> <!-- row --> 
            </div><!-- container -->
        </section>
        <!-- Termina Pasos Portabilidad Section --> 

        <!--Cámbiate Section-->
        <!--section id="cambiate" class="wow fadeIn ptcross">
            <div class="container">
            <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <p class="port-copy to-landing">No lo pienses más y cámbiate a <strong>Unefon.</strong><br>
                            <span class="redux-p">¿Tienes alguna duda? Consulta las preguntas frecuentes.</span></p>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                        <div onClick="open_faq()" class="mas_btn" href="portabilidad.html" target="_blank"></div>
                </div>
            </div>
            </div>
        </section-->
        <!-- Termina Cámbiate Section-->

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

<!-- ==============================================
    CAJA PREGUNTAS FRECUENTES
    =============================================== --> 
    
<div id="contenedor_faq" onClick="close_faq()"><!--CONTENEDOR_BING-->
     <div class="cuerpo_faq"> <!--caja Main-->
         <div onClick="close_faq()" class="cerrar">cerrar</div>
         <h2>Preguntas Frecuentes</h2>

<h3>¿Que es portabilidad?</h3>
<p>Es el proceso que te permite cambiarte de compañía a cualquier usuario Persona física conservando su número de teléfono.</p>

<h3>¿Quién puede solicitar la portabilidad?</h3>
<p>Únicamente la podrá solicitar el usuario de la línea.</p>

<h3>¿Cuáles son los requisitos para realizar una portabilidad?</h3>
<p>Contar con número activo de otra compañía.</p>

<h3>¿Durante el trámite de mi Portabilidad me puedo quedar sin servicio?</h3>
<p>No, tu compañía actual te debe dar el servicio hasta la fecha de tu portabilidad.</p>

<h3>¿El trámite de Portabilidad tiene algún costo?</h3>
<p>No, es un trámite gratis.</p>

<h3>¿Cual es el tiempo de proceso de Portabilidad?</h3>
<p>Si quieres que se ejecute en 24 horas, o en cualquiera de los siguientes 4 días.</p>

<h3>¿Como me informaran que mi número ya fue portado?</h3>
<p>Vía mensaje de texto recibe respuesta de la solicitud si fue aprobada o rechazada.</p>

</div><!--Termina caja-->   

</div><!--CONTENEDOR_BING-->

<!-- ==============================================
    CAJA PREGUNTAS FRECUENTES
    =============================================== --> 


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
