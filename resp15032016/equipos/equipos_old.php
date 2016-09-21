<?php
	
	header("access-control-allow-origin: *");
	
	//variables Globales
	$gbl_id="";
	$gbl_nomequi="";
	$gbl_marca="";
	$gbl_OS="";
	$gbl_colores="";
	$gbl_dimensiones="";
	$gbl_peso="";
	$gbl_camara="";
	$gbl_pantalla="";
	$gbl_memoria="";
	$gbl_redes="";
	$gbl_conectividad="";
	$gbl_hotspot="";
	$gbl_procesador="";
	$gbl_simdual="";
	$gbl_caracte="";
	$gbl_imapeq="";
	$gbl_ima1="";
	$gbl_ima2="";
	$gbl_ima3="";
	$gbl_ima4="";
	
	
	//variable de incremento
	$varincrem = -1;
	
	//variable de la URL
	$urlid = $_GET['id'];
		
	$lines=array();
	
	//variable de arreglo de resultados
	$resultados=array();
	
	$fp=fopen('bd/bdequipos.txt', 'r');
	
	while (!feof($fp))
	{
		$line=fgets($fp);
	
		//De toda la linea del string la dividimos por pipes para que los string cortados sean los elementos del arreglo
		$line = explode("|", $line);
		
		//Agregamos todos los elementos al arreglo
		$lines[]=$line;
		
		$varincrem = $varincrem + 1;
			
		//cargamos en las variables
		if($lines[$varincrem][0]==$urlid){
			$gbl_id=$lines[$varincrem][0];
			$gbl_nomequi=$lines[$varincrem][1];
			$gbl_marca=$lines[$varincrem][2];
			$gbl_OS=$lines[$varincrem][3];
			$gbl_colores=$lines[$varincrem][4];
			$gbl_dimensiones=$lines[$varincrem][5];
			$gbl_peso=$lines[$varincrem][6];
			$gbl_camara=$lines[$varincrem][7];
			$gbl_pantalla=$lines[$varincrem][8];
			$gbl_memoria=$lines[$varincrem][9];
			$gbl_redes=$lines[$varincrem][10];
			$gbl_conectividad=$lines[$varincrem][11];
			$gbl_hotspot=$lines[$varincrem][12];
			$gbl_procesador=$lines[$varincrem][13];
			$gbl_simdual=$lines[$varincrem][14];
			$gbl_caracte=$lines[$varincrem][15];
			$gbl_imapeq=$lines[$varincrem][16];
			$gbl_ima1=$lines[$varincrem][17];
			$gbl_ima2=$lines[$varincrem][18];
			$gbl_ima3=$lines[$varincrem][19];
			$gbl_ima4=$lines[$varincrem][20];
							
		}
		
	}//Cerramos el While
	
	//cerramos el documento
	fclose($fp);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>UNEFON - EQUIPOS</title>
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

<style type="text/css">
.inner-intro {
    height: 400px !important;
}

#mapal{
	height:600px; 
	width:100%;
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
}


</style>

<body class="full-intro">

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
        <h5 class="white">Regístrate</h5>
        <div class="sign-in">
            <input class="input-sm form-full" type="email" aria-required="true" id="email" name="email" placeholder="Correo electrónico" value="" />
            <input class="input-sm form-full" type="password" aria-required="true" id="password" name="password" placeholder="Contraseña" value="" />
            <input type="submit" class="btn btn-md btn-color-b form-full" value="Entrar" />
            <a class="btn btn-md btn-color-b form-full">Quiero ser cliente</a>
        </div>
        <ul>
            <li><a target="_blank" href="index.html">Main Demo Page</a></li>
            <li><a href="../home.html">Home Default</a></li>
            <li><a href="portfolio-grid-2col.html">Portfolio</a></li>
            <li><a href="login-register.html">Login & Signup</a></li>
            <li><a href="faq-1.html">FAQ</a></li>
            <li><a href="about-1.html">About</a></li>
            <li><a href="service-1.html">Service</a></li>
            <li><a href="blog-grid-3col.html">Blog</a></li>
            <li><a href="404-error-1.html">404 Error</a></li>
            <li><a href="shop-checkout.html">Shopping Cart</a></li>
            <li><a href="contact-1.html">Contact Us</a></li>
        </ul>
    </section>
    <!--End Sidemenu -->

    <!-- Search menu Top -->
    <section class=" top-search-bar cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top">
        <div class="container">
            <div class="search-wraper">
                <input type="text" class="input-sm form-full" placeholder="Quieres buscar algo..." name="search" />
                <a class="search-bar-icon"><i class="fa fa-search"></i></a>
                <a class="bar-close toggle-menu menu-top push-body"><i class="ion ion-android-close"></i></a>
            </div>
        </div>
    </section>
    <!--End Search menu Top -->

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

        <!-- Area de conetenido -->
        <section id="generico" class="ptb-sm-10 plr-0">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-care">
                        <h1>Equipos Unefon</h1>
                        
                        <!--AQUI VA EL CONETIDO-->
                        <?php 
							
							
							echo "<label>". $gbl_id ."</label><br>";
							echo "<label>". $gbl_nomequi ."</label><br>";
							echo "<label>". $gbl_marca ."</label><br>";
							echo "<label>". $gbl_OS ."</label><br>";
							echo "<label>". $gbl_colores ."</label><br>";
							echo "<label>". $gbl_dimensiones ."</label><br>";
							echo "<label>". $gbl_peso ."</label><br>";
							echo "<label>". $gbl_camara ."</label><br>";
							echo "<label>". $gbl_pantalla ."</label><br>";
							echo "<label>". $gbl_memoria ."</label><br>";
							echo "<label>". $gbl_redes ."</label><br>";
							echo "<label>". $gbl_conectividad ."</label><br>";
							echo "<label>". $gbl_hotspot ."</label><br>";
							echo "<label>". $gbl_procesador ."</label><br>";
							echo "<label>". $gbl_simdual ."</label><br>";
							echo "<label>". $gbl_caracte ."</label><br>";
							
							if($gbl_imapeq != ""){
								echo "<img src='". $gbl_imapeq ."'/>";
							}
							if($gbl_ima1 != ""){
								echo "<img src='". $gbl_ima1 ."'/>";	
							}
							if($gbl_ima2 != ""){
								echo "<img src='". $gbl_ima2 ."'/>";
							}
							if($gbl_ima3 != ""){
								echo "<img src='". $gbl_ima3 ."'/>";
							}
							if($gbl_ima4 != ""){
								echo "<img src='". $gbl_ima4 ."'/>";
							}
							                      
                        ?>
                       
                        
                      <!-- aQUI TERMINA EL COENTENIDO-->
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- // Termina el area de conetenido -->
        
        
        <div class="spacer-30"></div>
        <!-- final de Cuerpo de texto-->

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
        <section id="redes" class="wow fadeIn pt pt-sm-80 text-center">
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
    
    <!--<script src="js/ctrlequipos.js"></script>   -->

</body>
</html>
