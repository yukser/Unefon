<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Te regresamos tiempo aire - UNEFON</title>
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

</head>

<script type="text/javascript">
function legales_lista()
{
$("#legales-lista").slideToggle("slow");    
}
</script>

<style type="text/css">
    .bg-imggoogleplay {
    background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("../img/full/UNF_Bn_home_slider_desktop_google_play.jpg");
} 

.actline_landing{
    border-bottom: 3px solid #ffc600; 
    padding-bottom: 15px; 
    width: auto !important;
    float: left;
    font-family: '../fonts/gloriola/gloriolaregular',sans-serif;
}

@media all and (max-width: 450px){
    .bg-imggoogleplay {
    background-image: url("../img/full/UNF_Bn_home_slider_desktop_google_play.jpg");
    background-size: auto 100% !important;
    background-position: -150px 70px !important;
    }

    .actline_landing{width: 61% !important;}
} 

@media (max-width: 320px){
.bg-imggoogleplay {background-position: -190px 70px !important;}

.actline_landing{width: 48% !important;}

}    

h1.emulate {
    border: none !important;
font-weight: normal !important;
font-size: 47px;
line-height: 55px;
font-family: '../fonts/gloriola/gloriolamedium';
text-align: center;
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

.tickets {
    text-align: center; 
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
.tickets p {
    background: #00A9CE; 
    color: #fff; 
    padding: 15px;  
    font-size: 22px;
    margin: 0px 0px 1px 0px;
}
.tickets .th {
    background: #FFC600;   
    font-size: 20px;
    padding: 10px 15px;
}

.tickets .td1 {
    background: #F2F2F2;   
    font-size: 20px;
    padding: 13px;
    border-left: 1px solid #fff;
    border-right: 1px solid #fff;
    border-bottom: 2px solid #fff;
    border-top: none;
}

.tickets .td2 {
    background: #CCCCCC;   
    font-size: 20px;
    padding: 13px;
    border-left: 1px solid #fff;
    border-right: 1px solid #fff;
    border-bottom: 2px solid #fff;
    border-top: none;
}

.beneficios-premio {
    float: left;
    width: 100%;
}

.beneficios-premio .greenli {
    background: #43B02A;
    display: block;
    position: relative;
    border-radius: 4px;
    float: left;
    height: 80px;
}

.beneficios-premio ul {
    list-style: none;
    width: 295px;
    padding-top: 11px;
    padding-bottom: 10px;
    display: block;
    margin: 0px auto;
}

.beneficios-premio p {
    background: #00A9CE;
    border-radius: 4px;
    float: left;
    margin: 0px;
    padding: 10px 20px;
    font-size: 20px;
    text-align: center;
    width: 100%;
}

.beneficios-premio ul li {
    float: left;
    font-size: 28px;
    margin: 0px 10px;
    padding: 15px 0px;
}

.beneficios-premio ul li.prip {
    font-size: 23px;
    padding-top: 17px;
}

.beneficios-premio .fa-plus {
    font-size: 25px;
    text-align: center;
    float: left;
    padding-top: 30px;
    width: 100%;

}
.beneficios-premio span {
    float: left;
    padding: 30px;
    font-size: 30px;
    font-family: '../fonts/gloriola/gloriolamedium';
    background: #FFC600;
    border-radius: 4px;
    text-align: center;
    width: 100%;

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
    h1.emulate {
    font-size: 40px;
    line-height: 45px;
}
.tickets .th {
    font-size: 19px;
    padding: 13px 15px;
    min-height: 75px;
}
.tickets p {
    font-size: 20px;
    line-height: 25px;
}
#generico h2{
    margin: 0px 0px 20px;
}
p.emulate {
    line-height: 32px;
}
.beneficios-premio .fa-plus {
    padding: 15px 0px;
}
.beneficios-premio ul li {
    font-size: 22px;
    margin: 0px 5px;
}
.beneficios-premio ul li.prip {
    font-size: 20px;
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
        <section style="background-position: left 0px;" class="inner-intro bg-imggoogleplay parallax parallax-background2">
            <div class="container">
                <div class="row title">
                    <h2 class="h2 actline_landing">Este verano<br> di todo con canciones</h2>
                        <!--span class="verde">Hazte escuchar y estrena equipo hasta con el 20% de descuento</span></h2-->
                    <div class="page-breadcrumb">
                        <span style="color:#2d2d2d;"><a href="../index.php" style="color:#2d2d2d;"> Inicio</a> > <a href="index.php" style="color:#2d2d2d; font-weight:100;">Promociones</a> > Te regresamos tiempo aire</span>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->


        <!-- Work Detail Section -->
        <section id="generico" class="ptb-sm-10 plr-0">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-care">
                        <h1 class="emulate">Porque con una canción puedes decir mucho.</h1>
                        <img class="xs-hidden sm-hidden" src="../img/promos/bn_promo_google_play.png" alt="Te damos gratis 3 meses de Google Play Música">
                        <img class="visible-xs" src="../img/promos/bn_promo_google_play_mobile.png" alt="Te damos gratis 3 meses de Google Play Música">
                        <p class="emulate text-center">Además compra un smartphone y te regresamos <span>el valor del equipo en tiempo aire</span><sup>(2)</sup>.</p>
                    </div>
                </div>
        
        <div class="col-md-12 plr-0 promos-legales" style="float: left;">
            <p class="justify">
                <strong>Vigencia del 15 de Julio al 4 de Septiembre 2016.</strong> Google Play Música™ es una marca registrada por Google Inc. 
                <span class="blue">(1)</span> Para disfrutar la promoción es necesario descargar y suscribirse a la App de Google Play Música a través de Google Play (la descarga y el uso de la aplicación consume datos); 
                los primeros 3 meses serán otorgados gratuitamente. El servicio puede cancelarse en cualquier momento desde la App Google Play Música. La promoción no aplica si se ha aprovechado 
                el periodo gratuito de 30 días que ya ofrece Google Play Música. Una vez terminado el periodo de la promoción de 90 días, la suscripción tendrá un costo mensual de $99 (IVA incluido) 
                que se debitará del saldo comprado. Se debe contar con saldo de beneficios o tiempo aire comprado disponible para renovar la aplicación, de lo contrario, se desactivará el servicio 
                hasta que se realice una recarga. <span class="blue">(2)</span> Consulta equipos participantes y disponibilidad en el punto de venta. En la compra de un equipo participante recibe el valor del equipo en tiempo aire de regalo, 
                que se otorgará de manera diferida en 6 meses sujeto a que la primera recarga del mes sea mínima de $100 y podrá utilizarse a una tarifa de $0.75 por MIN/SMS/MB. 
                El tiempo aire de regalo tiene la misma vigencia que la recarga realizada y no es acumulable. Las vigencias de las recargas de $100 = 25 días, de $150 a $500 = 30 días y de $1,000 = 60 días. <strong>Precios incluyen IVA.​</strong></p>


                  

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
