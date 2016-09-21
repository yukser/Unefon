<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Plan de Lealtad - UNEFON</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="../image/png" href="../img/favicon.png">
    <link rel="apple-touch-icon" href="../img/favicon.png">

    <!-- CSS -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="../css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="../css/oferta.css" rel="stylesheet" type="text/css" />

</head>

<script type="text/javascript">
function legales_lista()
{
$("#legales-lista").slideToggle("slow");    
}
</script>

<style type="text/css">
.bg-imglealtad{
    background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("../img/full/UNF_Bn_home_slider_desktop_loyalty.jpg");
} 

@media all and (max-width: 450px){
    .bg-imglealtad {
    background-image: url("../img/full/UNF_Bn_home_slider_mobile_loyalty.jpg");
    background-size: auto 100% !important;
    background-position: center 70px !important;
    }
}    

h1.emulate {
    border: none !important;
    font-weight: normal !important;
    font-size: 70px;
    line-height: 85px;
    font-family: '../fonts/gloriola/gloriolaregular';
}

h2.emulate {
    font-weight: normal !important;
    font-size: 50px;
    font-family: '../fonts/gloriola/gloriolaregular';
    width: 100%;
    margin: 0px !important;
    padding: 0px;
}
p.emulate {
    font-weight: normal !important;
    font-size: 25px;
    font-family: '../fonts/gloriola/gloriolaregular';
    width: 100%;
    margin: 40px 0px;
    padding: 0px;
    float: left;
}
p.emulate span{
    color: #00A9CE;
    font-family: '../fonts/gloriola/gloriolamedium';
}

h1.emulate span {
    font-family: '../fonts/gloriola/gloriolamedium';
    font-weight: 700 !important;
}
#generico h2,
.tickets h2 {
    font-weight: normal;
    margin: 30px 0px;
    display: block;
    float: left;
}
#generico h2 span,
.tickets h2 span{
    font-size: 30px;
    color: #00A9CE;
}


.mecanica ol li {
    font-size: 18px;
    margin: 13px 0px;
}

.mecanica img {
    margin: 30px 0px 0px;
}


@media all and (max-width: 990px){
.beneficios-premio .fa-plus {
    padding: 15px 0px;
}
.beneficios-premio p {
    padding: 25px;
}
.tickets .td2,
.tickets .td1 {
    font-size: 18px;
    min-height: 80px;
}
}

@media all and (max-width: 450px){
    h2.h2{margin-top:-10% !important;}

    h1.emulate {
    font-size: 40px;
    line-height: 55px;
}
#generico h2{
    margin: 0px 0px 20px;
}
p.emulate {
    line-height: 32px;
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
        <section style="background-position: left 0px;" class="inner-intro bg-imglealtad parallax parallax-background2">
            <div class="container">
                <div class="row title">
                    <h2 class="h2" style="border-bottom: 3px solid #ffc600; padding-bottom: 15px; width: 60%; float: left;">Entre más tiempo te quedes, más te consentimos.<br></h2>
                        <!--span class="verde">Hazte escuchar y estrena equipo hasta con el 20% de descuento</span></h2-->
                    <div class="page-breadcrumb">
                        <span style="color:#2d2d2d;"><a href="../index.php" style="color:#2d2d2d;"> Inicio</a> > <a href="index.php" style="color:#2d2d2d; font-weight:100;">Promociones</a> > Día del padre</span>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->


        <!-- Work Detail Section -->
        <!--section class="pt-50">
            <div class="container benefits">
                <div class="row">
                    <div class="col-md-12">
                        <img class="item-container" src="../img/promos/bn_promo_padres.png" alt="1">
                    </div>
                </div>
        </section-->
        <!-- Work Detail Section -->
        <section id="generico" class="ptb-sm-10 plr-0">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-care mecanica">
                    <h1>Premiamos tu lealtad al momento</h1>
                     <h2>Aprovecha nuestro atractivo <span>Plan de Lealtad</span> y obtén tiempo aire  para que disfrutes navegando más, ¡recuerda que entre más antigüedad tengas mayor es la recompensa!</h2>
                        <p>Mecánica:</p>
                             <ol>
                                <li> Aplica únicamente para lineas en Oferta Unefon Flex. El saldo de regalo se aplica a partir del segundo mes.</li>
                                <li> Para recibirlo,  realiza una recarga mínima de $50 en tu primer recarga de cada mes.</li>
                                <li> El tiempo aire de regalo te brinda una tarifa de $0.75 por MB.</li>
                                <li> La vigencia de tu saldo de regalo será la misma que la de la recarga realizada.</li>
                             </ol>
                    </div>
                 </div>

                 <div class="row plr-0 pt-care loyalty_desktop" style="margin-bottom: 30px;"><!-- TABLA LEALTAD ESCRITORIO -->

                <!--Hilera 1-->   
                    <div class="col-lg-12 col-md-12"><!--div 12 -->
                        <div class="col-lg-2 col-md-2 mini_mes">Mes</div>

                        <div class="col-lg-10 col-md-10 plr-0">
                            <div class="col-lg-1 col-md-1 azul_pl-3">2</div>
                            <div class="col-lg-1 col-md-1 azul_pl-3">3</div>
                            <div class="col-lg-1 col-md-1 azul_pl-3">4</div>
                            <div class="col-lg-1 col-md-1 azul_pl-3">5</div>
                            <div class="col-lg-1 col-md-1 azul_pl-3">6</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3">7</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3">8</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3">9</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3">10</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3">11</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3">12</div>
                            <div class="col-lg-1 col-md-1 gris_pl-3">13+</div>
                        </div>

                    </div><!-- End div 12 -->
                    <!--End Hilera 1-->

                    <!--Hilera 2-->   
                    <div class="col-lg-12 col-md-12"><!--div 12 -->
                        <div class="col-lg-2 col-md-2 lealtad_recarga"><p>Recarga</p>
                            <span class="mini_number">$</span><span class="big_number">100</span> </div>

                        <div class="col-lg-10 col-md-10 plr-0">
                             <div class="col-lg-12 col-md-12 plr-0">
                                <div class="col-lg-11 col-md-11 plr-0 bck_unefon_yellow">En total recibes <span class="mini_number">$</span><span class="big_number">1,800</span> de regalo al año para navegar más</div>
                                <div class="col-lg-1 col-md-1 plr-0 bck_light_gray">&nbsp;</div>
                            </div>

                            <div class="col-lg-1 col-md-1 azul_pl-3 lealtad_benefits">$120</div>
                            <div class="col-lg-1 col-md-1 azul_pl-3 lealtad_benefits">$120</div>
                            <div class="col-lg-1 col-md-1 azul_pl-3 lealtad_benefits">$120</div>
                            <div class="col-lg-1 col-md-1 azul_pl-3 lealtad_benefits">$120</div>
                            <div class="col-lg-1 col-md-1 azul_pl-3 lealtad_benefits">$120</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3 lealtad_benefits">$200</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3 lealtad_benefits">$200</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3 lealtad_benefits">$200</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3 lealtad_benefits">$200</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3 lealtad_benefits">$200</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3 lealtad_benefits">$200</div>
                            <div class="col-lg-1 col-md-1 gris_pl-3 lealtad_benefits">$200</div>
                        </div>

                    </div><!-- End div 12 -->
                    <!--End Hilera 2-->

                    <!--Hilera 3-->   
                    <div class="col-lg-12 col-md-12"><!--div 12 -->
                        <div class="col-lg-2 col-md-2 lealtad_recarga"><p>Recarga</p>
                            <span class="mini_number">$</span><span class="big_number">50</span></div>

                        <div class="col-lg-10 col-md-10 plr-0">
                             <div class="col-lg-12 col-md-12 plr-0">
                                <div class="col-lg-11 col-md-11 plr-0 bck_unefon_yellow">En total recibes <span class="mini_number">$</span><span class="big_number">750</span> de regalo al año para navegar más</div>
                                <div class="col-lg-1 col-md-1 plr-0 bck_light_gray">&nbsp;</div>
                            </div>

                            <div class="col-lg-1 col-md-1 azul_pl-3 lealtad_benefits">$60</div>
                            <div class="col-lg-1 col-md-1 azul_pl-3 lealtad_benefits">$60</div>
                            <div class="col-lg-1 col-md-1 azul_pl-3 lealtad_benefits">$60</div>
                            <div class="col-lg-1 col-md-1 azul_pl-3 lealtad_benefits">$60</div>
                            <div class="col-lg-1 col-md-1 azul_pl-3 lealtad_benefits">$60</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3 lealtad_benefits">$75</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3 lealtad_benefits">$75</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3 lealtad_benefits">$75</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3 lealtad_benefits">$75</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3 lealtad_benefits">$75</div>
                            <div class="col-lg-1 col-md-1 verde_pl-3 lealtad_benefits">$75</div>
                            <div class="col-lg-1 col-md-1 gris_pl-3 lealtad_benefits">$100</div>
                        </div>

                    </div><!-- End div 12 -->
                    <!--End Hilera 3-->


                 </div><!-- End div row -->
                 <!---->
                 <div class="row plr-0 pt-care loyalty_mobile"><!-- TABLA LEALTAD MOBILE -->

                <!--Tabla mobile 1-->   
                    <div class="col-md-12 col-xs-12"><!--div 12 -->
                        <div class="col-md-12 col-xs-12 mini_mes l_mob_recarga"><p>Recarga
                        <span class="mini_number">$</span><span class="big_number">100</span> cada mes</p></div>

                        <div class="col-md-12 col-xs-12 azul_pl-3 lealtad_benefits">
                        Recibe <span class="mini_number">$</span><span class="big_number">120</span><br>                            
                        del mes 2 al mes 6<br>
                        </div>

                        <div class="col-md-12 col-xs-12 verde_pl-3 lealtad_benefits">
                        Recibe <span class="mini_number">$</span><span class="big_number">200</span><br>
                        del mes 7 al 12<br>
                        </div>

                        <div class="col-md-12 col-xs-12 bck_unefon_yellow">
                        En total recibes <span class="mini_number">$</span><span class="big_number">1,800</span> 
                        de regalo al año para navegar más
                        </div>

                        <div class="col-md-12 col-xs-12 gris_pl-3 lealtad_benefits">
                        Del mes 13 en adelante<br>
                        Recibe <span class="mini_number">$</span><span class="big_number">200</span><br>
                        </div>
                    </div><!-- End div 12 -->
                    <!--End tabla mobile 1-->

                    <!--Tabla mobile 2-->   
                   <div class="col-md-12 col-xs-12"><!--div 12 -->
                        <div class="col-md-12 col-xs-12 mini_mes l_mob_recarga"><p>Recarga
                        <span class="mini_number">$</span><span class="big_number">50</span> cada mes</p></div>

                        <div class="col-md-12 col-xs-12 azul_pl-3 lealtad_benefits">
                        Recibe <span class="mini_number">$</span><span class="big_number">60</span><br>                            
                        del mes 2 al mes 6<br>
                        </div>

                        <div class="col-md-12 col-xs-12 verde_pl-3 lealtad_benefits">
                        Recibe <span class="mini_number">$</span><span class="big_number">75</span><br>
                        del mes 7 al 12<br>
                        </div>

                        <div class="col-md-12 col-xs-12 bck_unefon_yellow">
                        En total recibes <span class="mini_number">$</span><span class="big_number">750</span> 
                        de regalo al año para navegar más
                        </div>

                        <div class="col-md-12 col-xs-12 gris_pl-3 lealtad_benefits">
                        Del mes 13 en adelante<br>
                        Recibe <span class="mini_number">$</span><span class="big_number">100</span><br>
                        </div>
                    </div><!-- End div 12 -->
                    <!--End tabla mobile 2-->


                 </div><!-- End div row -->

        
        <div class="col-md-12 promos-legales plr-0">
            <p class="justify">
                <strong>Promoción válida al 31 de agosto del 2016.</strong>
                Oferta disponible únicamente para dispositivos móviles con tecnología GSM, HSPA y/o 4G (LTE). <span class="blue">(1)</span> Para que el cliente obtenga los $750 su primera recarga de cada mes mínimo de $50 
                (cincuenta pesos 00/100 M.N) en un solo pago para recibir $60 de tiempo aire de regalo del mes 2 al mes 6 a partir de la activación de la línea; A partir del mes 7 de la activación de la línea, 
                el tiempo aire de regalo será de $75 al realizar su primer recarga de cada mes mínimo de $50 (cincuenta pesos 00/100 M.N) en un solo pago. 
                <span class="blue">(2)</span> Para los $1800 su primera recarga de cada mes mínimo de $100 (cien pesos 00/100 M.N) en un solo pago para recibir $120 de tiempo aire 
                de regalo del mes 2 al mes 6 a partir de la activación de la línea. A partir del mes 7 de la activación de la línea, 
                el tiempo aire de regalo será de $200 al realizar su primer recarga de cada mes mínimo de $100 (cien pesos 00/100 M.N) en un solo pago. 
                Para recibir el tiempo aire de regalo la línea debe permanecer activa en Unefon Flex. Usuario activo es todo aquel número que contó con saldo o vigencia en los últimos 90 días. 
                El tiempo aire de regalo tiene una tarifa de $0.75 por MIN/SMS/MB desde y hacia México, Estados Unidos y Canadá. La vigencia del tiempo aire de regalo en la recarga de $50 = 10 días, 
                $100 = 25 días, de $150 a $500 es de 30 días, no es acumulable. <strong>Precios incluyen IVA.</strong>
                </p>
        </div>
    </div>

</section>
        <!-- End Work Detail Section -->

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
