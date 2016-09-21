<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Back to school - UNEFON</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="icon" type="../image/png" href="../img/favicon.png" />
    <link rel="apple-touch-icon" href="../img/favicon.png" />

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
    h1.emulate {
        border: none !important;
        font-weight: normal !important;
        font-size: 70px;
        line-height: 85px;
        font-family: '../fonts/gloriola/gloriolaregular';
    }

    h2.emulate {
        font-weight: normal !important;
        font-size: 35px;
		line-height: 40px;
        font-family: '../fonts/gloriola/gloriolaregular';
        width: 100%;
        margin: 0px 0px 20px 0px !important;
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

    h2.emulate span {
        font-family: '../fonts/gloriola/gloriolamedium';
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
        font-size: 18px;
        padding: 10px 15px;
    }

    .tickets .td1 {
        background: #F2F2F2;
        font-size: 18px;
        padding: 13px;
        border-left: 1px solid #fff;
        border-right: 1px solid #fff;
        border-bottom: 2px solid #fff;
        border-top: none;
    }

    .tickets .td2 {
        background: #CCCCCC;
        font-size: 18px;
        padding: 13px;
        border-left: 1px solid #fff;
        border-right: 1px solid #fff;
        border-bottom: 2px solid #fff;
        border-top: none;
    }
	.fecha_t {
        height: 260px;
		padding-top: 100px !important;
    }
	
	.full-intro .inner-intro .container .title h2{width: 83%;}

    @media all and (max-width: 990px){
        .tickets .td2,
        .tickets .td1 {
            font-size: 18px;
        }
		.tickets .th {
			min-height:80px;
			padding-top: 15px;
			}
    }
	
	@media all and (max-width: 768px){
		.tickets .th {
			min-height:90px;
			padding-top: 8px;
			}
		.fecha_t {padding-top: 50px !important;}
    }

    @media all and (max-width: 450px){
        h1.emulate {
            font-size: 40px;
            line-height: 55px;
        }
        .tickets .th {
            font-size: 19px;
            padding: 13px 15px;
            min-height: auto;
            margin-top: 10px;
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
        .fecha_t {
         height: auto;
		 padding: 20px 0px !important;
        }
    }

    .bold-text{
        font-family: '../fonts/gloriola/gloriolamedium';
        font-weight: 600 !important;
    }

    .text-size-normal{
        margin: 0 0 10px;
        font-size: 20px;
        line-height: 30px;
        text-align: justify;
    }

    .img-align{
        padding-top: 36px;
    }

    @media all and (max-width: 990px){
        .img-align{
            padding-top: 38px;
        }
        .h2{
            font-size: 39px !important;
        }
        .emulate{
            font-size: 40px !important;
            line-height: 50px !important;
        }
    }

    @media all and (max-width: 680px){

        .img-align{
            padding-top: 68px;
        }

        .h2{
            font-size: 23px !important;
            line-height: 36px !important;
        }

        .emulate{
            font-size: 30px !important;
            line-height: 50px !important;
        }
    }

    @media all and (max-width: 550px){

        .img-align{
            padding-top: 68px;
        }

        .h2{
            font-size: 23px !important;
            line-height: 36px !important;
        }
		.full-intro .inner-intro .container .title h2{margin-top: 15px; width: 90%;}
    }

    @media all and (max-width: 450px){

        .img-align{
            padding-top: 68px;
        }

        .h2{
            font-size: 18px !important;
        }
        .emulate{
            font-size: 20px !important;
            line-height: 40px !important;
        }
    }


    .tr_blue {
        background: #00A9CE;
        color: white;
    }

    .tr_one {
        background: #F2F2F2;
    }

    .tr_two {
        background: #CCCCCC;
    }

    .table-center{
        text-align: center;
        font-size: 13px;
        padding-top: 15px;
        padding-bottom: 15px;
    }

    @media all and (min-width: 970px) {
        .table-center{
            font-size: 16px;
        }
    }

    .table-center .table-header-yellow{
        background-color: #fcc333;
        color: #323232;

    }

    .table-center th{
        text-align: center;
    }

    .table-center thead th {
        border: 2px #FFF solid;
    }

    .table>tbody>tr>td {
        border-right: 2px solid #FFF;
        border-bottom: 2px solid #FFF;
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
    <section style="background-position: left 0px;" class="inner-intro promo-interior1 light-color parallax parallax-background2">
        <div class="container">
            <div class="row title">
                <br>
                <div class="col-xs-8 col-sm-8 col-md-6">
                    <h2 class="h2" style="border-bottom: 3px solid #ffc600; color: #fff; padding-bottom: 19px;">Este Back to School también necesitarás clases de manejo. </h2>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-5">
                    <img class="img-responsive img-align" src="../img/promos/coche.png" alt="Coche Back to School" title="Coche Back to School" />
                </div>
                <div class="page-breadcrumb">
                    <span style="color:#2d2d2d;"><a href="../index.php" style="color:#2d2d2d;" aria-label="Index Unefon" title="Index Unefon"> Inicio</a> > <a href="index.php" style="color:#2d2d2d; font-weight:100;" aria-label="Index Promociones" title="Index Promociones">Promociones</a> > Back to school</span>
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
                    <h1>Regresa a clases en un AUTO</h1>
                    <h2 class="emulate" style="line-height: 48px">Adquiere un Smartphone </span>  y participa para ganar uno de los <span>4 Chevrolet Spark que tenemos para ti. </span></h2>
                    <br>
                    <br>
                </div>
            </div>
            <br>
                <div class="col-md-8 col-md-offset-2 fadeIn ptcross text-center">
                        <a href="../data/pdf/registro-promocion-back-to-school-ekt.pdf" target="_blank" class="btn-comprar" aria-label="Consulta aquí las bases" title="Consulta aquí las bases">Consulta aquí las bases</a>
                </div>
                    <div class="row">  
                        <div class="col-md-12 promos-legales">
                            <p class="justify">
                                <strong>Vigencia del 8 de agosto al 4 de septiembre de 2016.</strong> <span class="blue">(1)</span> Por cada recarga de $150 o más, 
                                o en la compra de un equipo más tu recarga de $150 o más, el usuario obtendrá boletos electrónicos para participar por uno de los 156 monederos electrónicos. 
                                La cantidad de boletos otorgada es de acuerdo a la  recarga realizada. ($150.00 pesos = 2 boletos, $200.00 pesos = 6 boletos, $300.00 = 10 boletos, $500.00 = 15 
                                boletos y $1,000.00 pesos =20 boletos, Compra de equipo = 10 boletos más el número de boletos correspondientes a la recarga realizada). 
                                Los usuarios que cuenten con el mayor número de boletos a la semana, se harán acreedores a recibir uno de los monederos electrónicos Master Card, 
                                este monedero no tiene vigencia de uso y no se cambiará por su valor en efectivo. Precios incluyen IVA. Aplica únicamente para Unefon.</p>
                         </div>
                     </div>
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
