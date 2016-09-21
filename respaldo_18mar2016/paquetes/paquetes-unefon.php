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
function legales_lista()
{
$("#legales-lista").slideToggle("slow");    
}
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
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-care">
                        <h1>Paquetes Unefon</h1>
                        <h2 class="port-copy">Los mejores paquetes ilimitados.</h2>
                        <ul class="beneficios-paquetes">
                            <li>Redes Sociales <b>Ilimitadas</b> a partir de tu recarga de <b>$30 pesos</b></li>
                            <li>Además, <b>MIN/SMS</b> ilimitados al recargar <b>$100</b></li>
                            <li>Tarifa de <b>$0.75 pesos</b> recargas de <b>$10 pesos</b></li>
                            <li>Úsalo en <b>MEX/USA/CAN</b> sin cargos extras por <b>roaming</b></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 hidden-sm col-xs-12">
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
                        <div class="col-md-2 col-sm-12 col-xs-12 pl-0 recarga_m"><!-- Pasos izquierda -->
                         <h3>Recarga<sup>(1)</sup></h3>
                        <div class="col-md-12 plr-0"><!-- Col-md-12 -->

                            <div class="ten-twenty">
                            <p class="pfs-10-20"><span>$</span>10-<span>$</span>20*</p>
                            </div>
                            <div class="tab-oferta1">
                                <p class="tab-text-izq-1"><span>$</span>0.75</p>
                                <p class="tab-text-izq-2">MB/MIN/SMS<sup>(3)</sup></p>
                            </div>

                            <div class="num-gratis hidden-xs hidden-sm visible-lg visible-md"><!-- Número GRATIS -->
                                <p class="ng-texto"><span class="cinco-gigante">5</span>números gratis<sup>(4)</sup></p>
                            </div>

                            <div class="verde_nuevo visible-xs visible-sm hidden-md hidden-lg"><!-- Número GRATIS -->
                                 <p>5 números gratis<sup>(4)</sup></p>
                            </div>

                            <div class="wapp"><!-- Whatsapp ilimitado -->
                                <p>Ilimitado<sup>(6)</sup>
                                     <i class="ion ion-social-whatsapp"></i></p>
                            </div>

                            <div class="rprip"><!-- Radio Prip -->
                                <p>Radio Prip $0.01 x seg</p>
                            </div>

                        <div class="dias-recarga"><!-- Días limite -->
                                <p>7 días</p>
                        </div>

                        </div><!-- Col-md-12 -->

                         

                        </div><!-- Cierra Columna recargas 10-20 -->

                        <div class="col-md-10 plr-0"><!-- Paquetes -->
                         <h3>Paquetes<sup>(2)</sup></h3>
                            <div class="col-md-3 plr-0"><!-- Recargas precio col-1 -->

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $30 -->
                            <p class="pfs-adeals"><span>$</span>30*</p>
                            <div class="tab-adeals"><!-- MB -->
                                <p class="adeals-title">40</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados<sup>(5)</sup></strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas <sup>(6)</sup><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="ion ion-social-whatsapp"></i></p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado<sup>(7)</sup></p></div>
                                <div class="dias-recarga"><p>7 días</p></div>
                            </div>
                                </div>

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $50 -->
                            <p class="pfs-adeals"><span>$</span>50*</p>
                            <div class="tab-adeals">
                                <p class="adeals-title">100</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados<sup>(5)</sup></strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas <sup>(6)</sup><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="ion ion-social-whatsapp"></i></p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado<sup>(7)</sup></p></div>
                                <div class="dias-recarga"><p>15 días</p></div>
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
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados<sup>(5)</sup></strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas <sup>(6)</sup><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="ion ion-social-whatsapp"></i></p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado<sup>(7)</sup></p></div>
                                <div class="dias-recarga"><p>30 días</p></div>
                            </div>
                                </div>

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $150 -->
                            <p class="pfs-adeals"><span>$</span>150</p>
                            <div class="tab-adeals">
                                <p class="adeals-title">600</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados<sup>(5)</sup></strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas <sup>(6)</sup><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="ion ion-social-whatsapp"></i></p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado<sup>(7)</sup></p></div>
                                <div class="dias-recarga"><p>30 días</p></div>
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
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados<sup>(5)</sup></strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas <sup>(6)</sup><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="ion ion-social-whatsapp"></i></p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado<sup>(7)</sup></p></div>
                                <div class="dias-recarga"><p>30 días</p></div>
                            </div>
                                </div>

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $300 -->
                            <p class="pfs-adeals"><span>$</span>300</p>
                            <div class="tab-adeals">
                                <p class="adeals-title">2,000</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados<sup>(5)</sup></strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas <sup>(6)</sup><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="ion ion-social-whatsapp"></i></p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado<sup>(7)</sup></p></div>
                                <div class="dias-recarga"><p>30 días</p></div>
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
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados<sup>(5)</sup></strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas <sup>(6)</sup><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="ion ion-social-whatsapp"></i></p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado<sup>(7)</sup></p></div>
                                <div class="dias-recarga"><p>30 días</p></div>
                            </div>
                                </div>

                                <div class="col-md-6 all-deals pl-3 plr-0"><!-- $300 -->
                            <p class="pfs-adeals"><span>$</span>1000</p>
                            <div class="tab-adeals">
                                <p class="adeals-title">7,000</p>
                                <p class="adeals-subtitle">MB</p>
                            </div>
                            <div class="desk-hidden"><!-- Show in mobile -->
                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados<sup>(5)</sup></strong> MEX/USA/CAN</p></div>
                                <div class="tab-redes-invert"><p>ilimitadas <sup>(6)</sup><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="ion ion-social-whatsapp"></i></p></div>
                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado<sup>(7)</sup></p></div>
                                <div class="dias-recarga"><p>60 días</p></div>
                            </div>
                                </div>
                            </div><!-- Termina Recargas precio col-4 -->

                            <div class="col-md-12 plr-0 hidden_mobile"><!-- Llamadas y mensajes ilimitados -->

                                <div class="tab-llamadas">
                                    <p class="llamadas-p-1">Llamadas y mensajes MEX/USA/CAN</p>
                                    <p class="llamadas-p-2">ilimitados<sup>(5)</sup></p>
                                </div>

                                <div class="tab-redes">
                                    <p>Ilimitadas<sup>(6)</sup>
                                     <i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="ion ion-social-whatsapp"></i></p>
                                </div>

                                <div class="tab-radio-prip">
                                    <p>Radio Prip Ilimitado<sup>(7)</sup></p>
                                </div>

                            </div><!-- Llamadas y mensajes ilimitados -->

                            <div class="col-md-12 plr-0 hidden_mobile"><!-- Días limite -->
                                <div class="col-md-3 plr-0">
                                    <div class="col-md-6 recarga-col-1 plr-0"><p>7 días</p></div>
                                    <div class="col-md-6 recarga-col-1 plr-0"><p>15 días</p></div>
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

                    <div class="col-md-12 promos-legales plr-0">
                                <br>
                                <div class="justify">
                                    <p><b>Promoción y oferta disponible al 31 de Julio de 2016</b>. Aplica únicamente para dispositivos móviles con tecnología GSM, HSPA y/o 4G (LTE); Aplica política de uso justo, 
                                     disponible para tu consulta <a href="../legales/politica-uso-justo.php" target="_blank">aquí</a>.
                                     <br>
                                     <span class="blue">(1)</span> La recarga de $10 está sujeta a la disponibilidad del punto de venta; La tarifa dependerá de la recarga realizada, la tarifa de $10 , 
                                     $20 y $30 es de $0.75 por MIN/SMS/MB; La vigencia de la recarga y beneficios de $10, $20 Y $30 = 7 días 
                                     <span class="blue">(2)</span> A partir de las recargas de $30 o más el abono se convierte de manera automática en paquetes de beneficios, que se puede utilizar en MIN/SMS/MB y además 
                                     otorgan servicios ilimitados de redes sociales Facebook (Facebook Messenger), Twitter, Whatsapp y radio Prip®. Estos paquetes funcionan de manera similar a un plan, además te permite 
                                     realizar compra de aplicaciones, contenido o cualquier otro escenario no incluido en los beneficios de la recarga; A partir de la recarga de $30 puedes aprovechar tu bolsa de dinero para navegar más. 
                                     La vigencia de los beneficios de $50 es de 15 días, de $100 a $500 = 30 días y los de $1,000 = 60 días. 
                                     <span class="blue">(3)</span> Los minutos y sms todo destino aplican a cualquier número de cualquier compañía de México, Estados Unidos y Canadá; Los MB para navegación. 
                                     <span class="blue">(4)</span> El usuario podrá registrar cualquier número de cualquier compañía de México, Estados Unidos y Canadá como número gratis para llamar y enviar mensajes ilimitadamente, 
                                     se activa por primera vez sin costo marcando al 050, los cambios posteriores tienen un costo de $49 por número. 
                                     <span class="blue">(5)</span> Los minutos y/o mensajes todo destino ilimitados aplican para llamadas salientes 
                                     a cualquier número de cualquier compañía de México, Estados Unidos y Canadá. 
                                     <span class="blue">(6)</span> El uso de las redes sociales aplica únicamente cuando el usuario se encuentre dentro de las aplicaciones 
                                     Facebook (incluye Facebook Messenger), Twitter y Whatsapp instaladas en el Smartphone; Cualquier acceso a ligas externas, llamadas de voz o video-llamadas por cualquier aplicación se 
                                     contabilizará como consumo adicional y se debitará del Tiempo Aire o Saldo de Beneficios y se cobrará de acuerdo a la tarifa del paquete seleccionado. La recarga de $10 - $20 incluye Whatsapp 
                                     y las recargas de $30 o más incluyen Facebook, Twitter y Whatsapp. 
                                     <span class="blue">(7)</span> Para hacer uso del Radio Prip®, deberás descargar la aplicación Radio Prip® (la descarga consume datos); el servicio sólo 
                                     está disponible para equipos con sistema operativo Android v.4.0 o superior y iOS 7 o superior. En recargas de $10 a $20 el consumo de Radio es bajo demanda a $0.06 por 6 segundos de uso, a 
                                     partir de la recarga de $30 en adelante radio Prip® es ilimitado durante la vigencia de los beneficios. PRIP es una marca registrada de NII Holdings, INC. <b>Precios Incluyen IVA</b><br>
                                         <br>
                                         Consulta el registro de la oferta comercial <a href="../legales/registro-ift.php" target="_blank">aquí</a>.
                                     </p>
                            </div>

                </div> <!-- row --> 
            </div><!-- container -->
        </section>
        <!-- Termina Pasos Portabilidad Section --> 

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
