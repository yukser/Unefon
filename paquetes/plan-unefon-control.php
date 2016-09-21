<!DOCTYPE HTML>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8" />
	<link rel="canonical" href="http://www.unefon.com.mx/" />
    <title>UNEFON - Oferta</title>
    <meta name="keywords" content="celulares, unefon, recarga, portabilidad, redes sociales, cobertura, smartphone"/>
	<meta name="description" content="Unefon es una compa&ntilde;&iacute;a de telefon&iacute;a m&oacute;vil con servicios de prepago."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico"/>
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

<style>
.bg-imgpuc {
    background-image: url(../img/full/UNF_Bn_landing_desktop_puc.jpg);
    background-size: cover;
    background-position: top center;
    background-repeat: no-repeat;
}

@media all and (max-width:450px) {
    .bg-imgpuc {
    background-image: url(../img/full/UNF_Bn_landing_desktop_puc.jpg);
    background-size: 800px auto;
    background-position: center 50px;
    background-repeat: no-repeat;
    background-attachment: fixed;}
}
	
</style>

<body class="full-intro">


	<?php //datos de la tabla


	$recargas = array(
		'40' => '53',
		'50' => '66',
		'60' => '100',
		'70' => '116',
		'80' => '133',
		'90' => '150',
		'100' => '250',
		'120' => '300',
		'140' => '350',
		'160' => '400',
		'180' => '450',
		'190' => '475',
		'200' => '500',
	);

	?>


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
        <section class="inner-intro bg-imgpuc parallax">
            <?php
				require_once('../includes/breadcrumb.php');
			?>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->
				<div id="content"></div>
        <!-- Work Detail Section -->
        <section id="paquetes" class="paquetes-title ptb-sm-10">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-care">
                        <h1>Plan Unefon Control (Exclusivo de Elektra)</h1>
                        <h2 class="port-copy">El Smartphone que quieres con servicio incluido.</h2>
                        <ul class="beneficios-paquetes">
                            <li>Facebook, Whatsapp, Twitter y Radio Prip incluidos </li>
                            <li>Llamadas y mensajes ilimitados </li>
                            <li>Pagos pequeños semanales</li>
                        </ul>
						<p>*Para más información acércate a tu promotor Unefon en tu tienda Elektra más cercana</p>
                    </div>
                    <!--div class="col-lg-6 col-md-6 hidden-sm col-xs-12">
                      <img src="../img/full/beneficios_puc.png" alt="oferta Unefon" title="oferta Unefon" width="auto" height="auto">
                    </div-->
                </div>
        </section>
        <!-- End Work Detail Section -->


        <!-- Oferta Flex -->
        <section class="ptcontent ptb-sm-10 tabla-puc">
            <div class="container"><!-- container -->
                <!-- work Filter -->
                <div clas="row"><!-- row -->
					<h2 class="titulo-tabla">Planes Unefon Control</h2>
                    <div class="col-md-12 plr-0"><!-- Recargas -->

                        <div class="col-md-3 col-sm-12 col-xs-12 pl-0 table-planes hidden_mobile"><!-- Pasos izquierda -->

	                        <div class="col-md-12 plr-0"><!-- Col-md-12 -->

	                            <div class="plan">
	                            <p class="pfs-10-20" style="text-align:right;">Plan<sup>(1)</sup></p>
	                            </div>

	                            <div class="renta">
	                                <p>Renta Semanal<sup>(2)</sup></p>
	                            </div>

								<div class="eventos">
	                                <p>Número de eventos<sup>(3)</sup></p>
	                            </div>

	                            <div class="minutos hidden-xs hidden-sm visible-lg visible-md"><!-- Número GRATIS -->
	                                <p class="ng-texto" style="color:#FFF;">Minutos y SMS</p>
	                            </div>

	                            <div class="redes">
	                                <p>Redes sociales<sup>(9)</sup></p>
	                            </div>

		                        <div class="radio">
		                                <p>Radio Prip<sup><i class="fa fa-registered" aria-hidden="true"></i>(10)</sup></p>
		                        </div>

	                        </div>

                        </div><!-- Cierra Columna recargas 10-20 -->

                    <div class="col-md-9 plr-0">

                        <div class="col-grid-1 recargas-table plr-0">

							<?php foreach($recargas as $key => $value) { ?>

								<div class="col-grid-13-1 detalles plr-0">
		                            <div class="plan">
										<p><span>Plan&nbsp;</span><?= $key ?></p>
									</div>
		                            <div class="costo">
		                                <p class="adeals-title"><?= "$".$key ?><span>&nbsp;Renta semanal</span></p>
		                            </div>
									<div class="eventos">
		                                <p class="adeals-title space"><?= $value ?></p>
										<?php echo ($key < 60) ? "<p class='adeals-title sub'>Min/SMS/MB</p>" : "<p class='adeals-title sub-g'>MB<sup>(4)</sup></p>" ?>
		                            </div>
		                            <?php if($key >= 60) { ?>
										<div class="desk-hidden"><!-- This block is for plans witch cost is higher or iqual $60 -->
			                                <div class="tab-llamadas"><p>llamadas y mensajes <strong>ilimitados<sup>(5)(8)</sup></strong> MEX/USA/CAN</p></div>
			                                <div class="tab-redes-invert center"><p>Redes sociales ilimitadas <sup>(9)</sup> <i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="ion ion-social-whatsapp"></i></p></div>
			                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado<sup>(10)</sup></p></div>
			                            </div>
									<?php }else{ ?>
										<div class="desk-hidden">
											<div class="two-blocks">
												<div class="numeros plr-0"><p>5 Números gratis incluidos <sup>(6)</sup></p></div>
												<div class="comunidad plr-0"><p>Comunidad ilimitada MÉX, EUA, CAN<sup>(7)</sup>.</p></div>
											</div>

			                                <div class="tab-redes-invert center"><p>Redes sociales ilimitadas <sup>(9)</sup> <i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="ion ion-social-whatsapp"></i></p></div>
			                                <div class="tab-radio-prip"><p>Radio Prip Ilimitado<sup>(10)</sup></p></div>
			                            </div>
									<?php } ?>
	                            </div>
							<?php }  ?>

                        </div><!-- Termina Recargas precio -->

						<div class="col-grid-1 llamadas-table plr-0 hidden_mobile"><!-- Recargas precio col-1 -->

							<div class="col-grid-13-2 detalles plr-0"><!-- $30 -->
								<div class="numeros">
									<p class="number">5</p>
									<p class="description-number">números gratis Incluidos<sup>(6)</sup></p>
								</div>
								<div class="comunidad">
									<p>Comunidad ilimitada MÉX, EUA, CAN<sup>(7)</sup>.</p>
								</div>
							</div>

							<div class="col-grid-13-10 llamadas-r plr-0">
								<div class="descripcion">
									<p>Llamadas y mensajes MÉX/EUA/CAN ilimitados<sup>(5)(8)</sup></p>
								</div>
							</div>


						</div>

						<div class="col-grid-1 social-table plr-0 hidden_mobile"><!-- Recargas precio col-1 -->

							<div class="col-grid-13-13 detalles plr-0"><!-- $30 -->
								<div class="contenido">
									<p>Ilimitadas&nbsp;&nbsp;</p>
									<i class="fa fa-facebook" aria-hidden="true"></i>
									<i class="fa fa-twitter" aria-hidden="true"></i>
									<i class="ion ion-social-whatsapp" aria-hidden="true"></i>
								</div>
							</div>

						</div>

						<div class="col-grid-1 radio-d plr-0 hidden_mobile"><!-- Recargas precio col-1 -->

							<div class="col-grid-13-13 detalles plr-0"><!-- $30 -->
								<div class="contenido">
									<p>Ilimitado</p>
								</div>
							</div>

						</div>


                    </div>


                    <!--<div class="col-md-12 roaming-tabla">Sin cargos extras por Roaming en MEX/USA/CAN</div> Roaming Tabla -->

                    <div class="col-md-12 promos-legales plr-0">
                                <br>

                            <div class="justify">
                            Oferta disponible únicamente para dispositivos móviles con tecnología GSM y/o 4G (LTE);
							<span class="blue">(1)</span> Al adquirir un PUC se incluye un equipo, los pagos se realizan semanalmente convirtiéndose automáticamente en un paquete de beneficios con una vigencia de 7 días.
							<span class="blue">(2)</span> Los pagos son de forma semanal y el plazo de contratación es por 78 semanas. Cada que el cliente paga,  de forma automática el pago se convierte en una bolsa de dinero equivalente al número de eventos MIN/SMS/MB que indica el plan seleccionado o también se puede utilizar para comprar aplicaciones, contenido o cualquier  otro escenario no incluido en los beneficios de la recarga.
							<span class="blue">(3)</span> La bolsa de dinero se convierte en eventos MIN/SMS/MB.
							<span class="blue">(4)</span> Utiliza tus eventos para navegar más.
							<span class="blue">(5)</span> Los minutos y SMS todo destino aplican a cualquier número de cualquier compañía de México, Estados Unidos y Canadá.
							<span class="blue">(6)</span> El usuario podrá registrar cualquier número de cualquier compañía de México, Estados Unidos y Canadá como número gratis para llamar y enviar mensajes ilimitadamente, se activa por primera vez sin costo marcando al *782, los cambios posteriores tienen un costo de $49 por número.
							<span class="blue">(7)</span> La comunidad extendida AT&T aplica para minutos y SMS ilimitados hacia números Iusacell, Unefon, Nextel, AT&T y Cricket, mientras los números estén en la región de México, Estados Unidos y Canadá.
							<span class="blue">(8)</span> Los minutos y/o SMS ilimitados aplican para llamadas salientes a cualquier número de cualquier compañía de México, Estados Unidos y Canadá. Aplica la política de uso justo.
							<span class="blue">(9)</span> El uso de las redes sociales aplica únicamente cuando el usuario se encuentra dentro de las aplicaciones Facebook (incluye FB Messenger), Twitter y WhatsApp instaladas en el Smartphone; cualquier acceso a ligas externas, llamadas de voz o video-llamadas por cualquier aplicación se contabilizará como consumo adicional y se debitará del saldo de beneficios o tiempo aire comprado.
							<span class="blue">(10)</span> Para hacer uso de radio PRIP, deberás descargar la aplicación Radio PRIP (la descarga consume datos); el servicio sólo está disponible para equipos con Sistema Operativo Android V.4.0 o superior. Precios Incluyen IVA. Oferta vigente a partir del 15 de agosto de 2016.
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
