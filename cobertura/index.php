<!DOCTYPE HTML>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8" />
    <link rel="canonical" href="http://www.unefon.com.mx/" />
    <title>UNEFON - Cobertura</title>
    <meta name="keywords" content="celulares, unefon, recarga, portabilidad, redes sociales, cobertura, smartphone"/>
    <meta name="description" content="Unefon es una compa&ntilde;&iacute;a de telefon&iacute;a m&oacute;vil con servicios de prepago."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />
    <link rel="icon" type="image/png" href="../img/favicon.png" />
    <link rel="apple-touch-icon" href="../img/favicon.png" />

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

    <link rel="stylesheet" type="text/css" href="css/component.css" />


</head>

<script type="text/javascript">
    function legales_lista()
    {
        $("#legales-lista").slideToggle("slow");
    }
</script>

<style type="text/css">
    .inner-intro {
        height: 400px !important;
    }

    #mapal{
        height:600px;
        width:100%;
        border: 1px solid #43B02A;
    }

    .cobertura label {
        font-weight: 300;
        margin: 0px 0 10px 0;
        letter-spacing: 1px;
        font-size: 19px;
        line-height: 28px;
        color: #666;
        color: #323232;
        padding: 0px;
        width: 100%;
    }

    #btn_geocoder {
        display: inline-block;
        margin-bottom: 0;
        text-align: center;
        white-space: nowrap;
        cursor: pointer;
        background: #43B02A;
        font-size: 18px;
        color: #fff;
        letter-spacing: 1px;
        font-weight: 400;
        border: none !important;
        line-height: normal;
        border-radius: 2px;
    }

    .cobertura select,
    .cobertura input {
        border: 1px solid #ccc !important;
        border-radius: 2px;
        padding-left: 10px;
    }
    .cobertura select:focus,
    .cobertura input:focus {
        background: #F8F8F8;
        border: 1px solid #ffc600 !important;
        outline: 0;
    }

    .cobertura select {
        width: 100%;
        border: 1px solid #999;
    }

    .cobertura input {
        height: 42px;
        margin: 0px 2% 20px 2%;
        border: 1px solid #999;
        float: left;
        width: 46%;
    }

    #btn_geocoder:hover{
        background: #FFC643;
    }

    #floating-panel {
        position: absolute;
        top: 150px;
        left: 40%;
        z-index: 5;
        background-color:#FC0;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
    }

    @media (max-width: 991px) {
        .cobertura input{
            margin: 0px 4% 20px 0px;
            width: 46%;}
    }

    @media screen and (max-width: 320px){
        #floating-panel {
            position: absolute;
            top: 200px;
            left: 8%;
            z-index: 5;
            background-color:#FC0;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }

        #mapal{
            width:95%;
        }

    }

    @media all and (max-width: 450px){
        .inner-intro {
            height: 300px !important;
        }

        #mapal{
            height:400px;
            width:100%;
        }
    }


     /*================================ */

    .ac-custom {
        padding: 0 3em;
        max-width: 900px;
        margin: 0 auto;
    }

    .ac-custom ul,
    .ac-custom ol {
        list-style: none;
        padding: 0;
        margin: 0 auto;
        max-width: 800px;
    }

    .ac-custom li {
        margin: 0 auto;
        padding: 2em 0;
        position: relative;
    }

    .ac-custom label {
        display: inline-block;
        position: relative;
        font-size: 2em;
        padding: 0 0 0 80px;
        vertical-align: top;
        color: #2d2d2d;
        cursor: pointer;
        -webkit-transition: color 0.3s;
        transition: color 0.3s;
    }

    .ac-custom input[type="checkbox"],
    .ac-custom input[type="radio"],
    .ac-custom label::before {
        width: 50px;
        height: 50px;
        top: 50%;
        left: 0;
        margin-top: -25px;
        position: absolute;
        cursor: pointer;
    }

    .ac-custom input[type="checkbox"],
    .ac-custom input[type="radio"] {
        opacity: 0;
        -webkit-appearance: none;
        display: inline-block;
        vertical-align: middle;
        z-index: 100;
    }

    .ac-custom label::before {
        content: '';
        border: 4px solid #fff;
        -webkit-transition: opacity 0.3s;
        transition: opacity 0.3s;
    }

    .ac-radio label::before {
        border-radius: 50%;
    }

    .ac-custom input[type="checkbox"]:checked + label,
    .ac-custom input[type="radio"]:checked + label {
        color: #2d2d2d;
    }

    .ac-custom input[type="checkbox"]:checked + label::before,
    .ac-custom input[type="radio"]:checked + label::before {
        opacity: 0.8;
    }

    /* General SVG and path styles */

    .ac-custom svg {
        position: absolute;
        width: 40px;
        height: 40px;
        top: 50%;
        margin-top: -20px;
        left: 5px;
        pointer-events: none;
    }

    .ac-custom svg path {
        stroke: #F7CF4A;
        stroke-width: 13px;
        stroke-linecap: round;
        stroke-linejoin: round;
        fill: none;
    }

    /* Specific input, SVG and path styles */

    /* Circle */
    .ac-circle input[type="checkbox"],
    .ac-circle input[type="radio"],
    .ac-circle label::before {
        width: 30px;
        height: 30px;
        margin-top: -15px;
        left: 10px;
        position: absolute;
    }

    .ac-circle label::before {
        background-color: #fff;
        border: none;
    }

    .ac-circle svg {
        width: 70px;
        height: 70px;
        margin-top: -35px;
        left: -10px;
    }

    .ac-circle svg path {
        stroke-width: 5px;
    }

    /* Box Fill */
    .ac-boxfill svg path {
        stroke-width: 8px;
    }

    /* Swirl */
    .ac-swirl svg path {
        stroke-width: 8px;
    }

    /* List */
    .ac-list ol {
        list-style: decimal;
        list-style-position: inside;
    }

    .ac-list ol li {
        font-size: 2em;
        padding: 1em 1em 0 2em;
        text-indent: -40px;
    }

    .ac-list ol li label {
        font-size: 1em;
        text-indent: 0;
        padding-left: 30px;
    }

    .ac-list label::before {
        display: none;
    }

    .ac-list svg {
        width: 100%;
        height: 80px;
        left: 0;
        top: 1.2em;
        margin-top: 0;
    }

    .ac-list svg path {
        stroke-width: 4px;
    }

    /* Media Queries */
    @media screen and (max-width: 50em) {
        section {
            font-size: 80%;
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


    <!-- Work Detail Section -->
    <section class="ptcontent ptb-sm-10" id="content">
        <div class="container">
            <!-- work Filter -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1>Cobertura Unefon</h1>
                    <h2 class="port-copy">Cubrimos el mayor número de ciudades en la República Mexicana.</h2>
                </div>
                <div class="col-md-12 port-text">

                    <br>
                    <div class="col-md-4 col-xm-12 pl-0 cobertura">
                        <label>Selecciona un estado</label>
                        <select name="ddm_estado" id="ddm_estado" aria-label="Selecciona tu estado">
                            <option value="00" selected="selected" disabled="disabled">-- Selecciona --</option>
                            <option value="1">Aguascalientes</option>
                            <option value="2">Baja California</option>
                            <option value="3">Baja California Sur</option>
                            <option value="4">Campeche</option>
                            <option value="5">Chiapas</option>
                            <option value="6">Chihuahua</option>
                            <option value="7">Coahuila</option>
                            <option value="8">Colima</option>
                            <option value="9">Distrito Federal</option>
                            <option value="10">Durango</option>
                            <option value="11">Estado de Mexico</option>
                            <option value="12">Guanajuato</option>
                            <option value="13">Guerrero</option>
                            <option value="14">Hidalgo</option>
                            <option value="15">Jalisco</option>
                            <option value="16">Michoacan</option>
                            <option value="17">Morelos</option>
                            <option value="18">Nayarit</option>
                            <option value="19">Nuevo Leon</option>
                            <option value="20">Oaxaca</option>
                            <option value="21">Puebla</option>
                            <option value="22">Queretaro</option>
                            <option value="23">Quintana Roo</option>
                            <option value="24">San Luis Potosi</option>
                            <option value="25">Sinaloa</option>
                            <option value="26">Sonora</option>
                            <option value="27">Tabasco</option>
                            <option value="28">Tamaulipas</option>
                            <option value="29">Tlaxcala</option>
                            <option value="30">Veracruz</option>
                            <option value="31">Yucatan</option>
                            <option value="32">Zacatecas</option>
                        </select>

                    </div>

                    <div class="col-md-6 col-xm-12  pl-0 cobertura">

                        <!-- Seccion de estado -->
                        <label>&nbsp;&nbsp;Verifica la cobertura en tu localidad con tu C.P.</label>
                        <input id="txt_cp" type="text" placeholder="Tu código postal" aria-label="Ingresa tu CP">
                        <input id="btn_geocoder" type="button" value="Buscar">
                    </div>
                    <div class="spacer-30"></div>
                </div>
            </div>
    </section>
    <!-- End Work Detail Section -->

    <!-- Mapa width100% -->
    <!-- Map Section -->
    <section class="ptcontent ptb-sm-10">
        <div class="container">

            <!--<div>
                <input type="radio" id="chbx_ama" name="rdb_mapselect" /><label for="chbx_ama">Amarillo</label>
                <input type="radio" id="chbx_mora" name="rdb_mapselect" checked /><label for="chbx_mora">Morado</label>
            </div>-->

            <section>
                <form class="ac-custom ac-radio ac-fill" autocomplete="off">

                    <ul>
                        <li><input id="chbx_ama" name="rdb_mapselect" type="radio"><label for="chbx_ama">Amarillo</label></li>
                        <li><input id="chbx_mora" name="rdb_mapselect" type="radio"><label for="chbx_mora">Morado</label></li>
                    </ul>
                </form>
            </section>

            <div id="mapal"></div>
        </div>
    </section>

    <div class="spacer-30"></div>

    <!-- // Termina el area de conetenido -->
    <!-- final de Cuerpo de texto-->

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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgbTHdmhhXKfPuTnmJ-oZqPpafuX4rgGQ" type="text/javascript"></script>

<!--    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>-->

<script src="js/controlador_cobertura.js"></script>

<script src="js/svgcheckbx.js"></script>

</body>
</html>
