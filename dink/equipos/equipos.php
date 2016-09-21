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
	$gbl_css="";
	
	$mm_car=array();
	
	
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
			$gbl_css=$lines[$varincrem][23];
							
		}
		
		//guardamos en un arreglo los id de los equipos de la misma marca
		if($lines[$varincrem][2] == $gbl_marca){
			$mm_car[] = $lines[$varincrem][16];
		}
		
		
	}//Cerramos el While
	
	//cerramos el documento
	fclose($fp);
	
?>

<!DOCTYPE HTML>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8" />
	<link rel="canonical" href="http://www.unefon.com.mx/" />
    <title>UNEFON - Detalles de equipo</title>
    <meta name="keywords" content="celulares, unefon, recarga, portabilidad, redes sociales, equipos, smartphone"/>
	<meta name="description" content="Unefon es una compa&ntilde;&iacute;a de telefon&iacute;a m&oacute;vil con servicios de prepago."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="icon" type="image/png" href="../img/favicon.png" />
    <link rel="apple-touch-icon" href="../img/favicon.png" />

    <!-- CSS -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="../css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/smoothproducts.css" rel="stylesheet" />

</head>

<script type="text/javascript">
function legales_lista()
{
$("#legales-lista").slideToggle("slow");    
}
</script>

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
        <section class="inner-intro <?php echo $gbl_css;?> light-color parallax parallax-background2">
            <?php  
				require_once('../includes/breadcrumb.php'); 
			?>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->


        <!-- Service Section -->
        <section id="service" class="wow fadeIn pt-50 pb-80">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h1><?php echo $gbl_marca;?></h1>
                        <h2 class="h14"><?php echo $gbl_nomequi;?></h2>
                    </div>
                </div>

                <!-- Descripción de Equipo en Desktop -->
                <div class="row mt-60 hidden-sm hidden-xs">
                    <div style="visibility: visible; animation-name: fadeInLeft;" class="wow fadeInLeft col-md-4 pt-80 pt-sm-0 animated">
                        <div class="features-box-right">
                            <div class="features-icon-right"><i class="ion ion-social-android"></i></div>
                            <h4>Sistema operativo</h4>
                            <p><?php echo $gbl_OS;?></p>
                        </div>
                        <div class="features-box-right">
                            <div class="features-icon-right"><i class="ion ion-ios-camera"></i></div>
                            <h4>Cámara</h4>
                            <p><?php echo $gbl_camara;?></p>
                        </div>
                        <div class="features-box-right">
                            <div class="features-icon-right"><i class="ion ion-android-phone-portrait"></i></div>
                            <h4>Pantalla</h4>
                            <p><?php echo $gbl_pantalla;?></p>
                        </div>
                        <div class="features-box-right">
                            <div class="features-icon-right"><i class="ion ion-arrow-resize"></i></div>
                            <h4>Dimensiones</h4>
                            <p><?php echo $gbl_dimensiones;?></p>
                        </div>
                        <div class="features-box-right">
                            <div class="features-icon-right"><i class="ion ion-leaf"></i></div>
                            <h4>Peso</h4>
                            <p><?php echo $gbl_peso;?></p>
                        </div>

                    </div>
                    <div style="visibility: visible; animation-name: fadeIn;" class="wow fadeIn col-md-4 text-center animated">
                            <div class="sp-wrap pt-30 gallery-pager">
                            
                            	<?php if($gbl_imapeq != ""){ echo "<a href='". $gbl_ima1 ."' class='aaction' id='uneimag1'>"."<img src='".$gbl_ima1."' title='".$gbl_nomequi." 1"."' alt='".$gbl_nomequi." 1"."' height='' width=''></a>"; } ?>
                                <?php if($gbl_imapeq != ""){ echo "<a href='". $gbl_ima2 ."' class='aaction' id='uneimag2'>"."<img src='".$gbl_ima2."' title='".$gbl_nomequi." 2"."' alt='".$gbl_nomequi." 2"."' height='' width=''></a>"; } ?>
                                <?php if($gbl_imapeq != ""){ echo "<a href='". $gbl_ima3 ."' class='aaction' id='uneimag3'>"."<img src='".$gbl_ima3."' title='".$gbl_nomequi." 3"."' alt='".$gbl_nomequi." 3"."' height='' width=''></a>"; } ?>
                                <?php if($gbl_imapeq != ""){ echo "<a href='". $gbl_ima4 ."' class='aaction' id='uneimag4'>"."<img src='".$gbl_ima4."' title='".$gbl_nomequi." 4"."' alt='".$gbl_nomequi." 4"."' height='' width=''></a>"; } ?>
                                                                
                            </div>
                    </div>
                    <div style="visibility: visible; animation-name: fadeInRight;" class="wow fadeInRight col-md-4 pt-80 pt-sm-0 animated">
                        <div class="features-box-left">
                            <div class="features-icon-left"><i class="ion ion-wifi"></i></div>
                            <h4>Conectividad</h4>
                            <p><?php echo $gbl_conectividad;?></p>
                        </div>
                        <div class="features-box-left">
                            <div class="features-icon-left"><i class="ion ion-connection-bars"></i></div>
                            <h4>Redes</h4>
                            <p><?php echo $gbl_redes;?></p>
                        </div>
                        <div class="features-box-left">
                            <div class="features-icon-left"><i class="ion ion-android-wifi"></i></div>
                            <h4>Hotspot</h4>
                            <p><?php echo $gbl_hotspot;?></p>
                        </div>
                        <div class="features-box-left">
                            <div class="features-icon-left"><i class="unefon icon-sim_card"></i></div>
                            <h4>Memoria</h4>
                            <p><?php echo $gbl_memoria;?></p>
                        </div>
                        <div class="features-box-left">
                            <div class="features-icon-left"><span class="unefon icon-memory2"></span></div>
                            <h4>Procesador / Ram</h4>
                            <p><?php echo $gbl_procesador;?></p>
                        </div>
                    </div>

                    <!-- Call to action Promociones (medir) -->   
                    <div class="col-md-8 col-md-offset-2 fadeIn ptcross text-center">
                        <a href="../tiendas/index.php" class="aaction btn-comprar" aria-label="Dónde comprar" title="Dónde comprar" id="equipioscomprar"><span>Dónde comprar</span></a>
                    </div><!-- Termina Call to action Promociones -->

                </div>

                <!-- Termina Descripción de Equipo en Desktop -->

                <div class="row hidden-md hidden-lg">
                    <!-- Shop Item -->
                    <div class="col-md-6 mb-sm-60">
                        <div class="">
                            <!--Item Images-->
                            <div class="sp-wrap">
                                <?php if($gbl_imapeq != ""){ echo "<a href='". $gbl_ima1 ."' class='aaction' id='uneimagd1'>"."<img src='".$gbl_ima1."' alt='".$gbl_nomequi." 1"."' title='".$gbl_nomequi." 1"."'  height='' width=''></a>"; } ?>
                                <?php if($gbl_imapeq != ""){ echo "<a href='". $gbl_ima2 ."' class='aaction' id='uneimagd2'>"."<img src='".$gbl_ima2."' alt='".$gbl_nomequi." 2"."' title='".$gbl_nomequi." 2"."'  height='' width=''></a>"; } ?>
                                <?php if($gbl_imapeq != ""){ echo "<a href='". $gbl_ima3 ."' class='aaction' id='uneimagd3'>"."<img src='".$gbl_ima3."' alt='".$gbl_nomequi." 3"."' title='".$gbl_nomequi." 3"."' class='aaction' id='uneimagd3' height='' width=''></a>"; } ?>
                                <?php if($gbl_imapeq != ""){ echo "<a href='". $gbl_ima4 ."' class='aaction' id='uneimagd4'>"."<img src='".$gbl_ima4."' alt='".$gbl_nomequi." 4"."' title='".$gbl_nomequi." 4"."' class='aaction' id='uneimagd4' height='' width=''></a>"; } ?>
                            </div>
                            <!-- End Item Images -->

                            <!-- Item zoom -->
                            <div class="sp-full-screen"><a class="aaction cbox-gallary1" href="#" aria-label="Zoom" title="Zoom" id="Zoom23"><span><i class="fa fa-search-plus"></i>Zoom</span></a></div>
                            <!-- End Item zoom -->
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <div class="wow fadeInRight col-sm-6 col-xs-6 pt-sm-0">
                        <!--Tabs de Caracteristicas-->
                        <div class="features-box-right">
                            <div class="features-icon-right"><i class="ion ion-social-android"></i></div>
                            <h4>Sistema operativo</h4>
                            <p><?php echo $gbl_OS;?></p>
                        </div>
                        <div class="features-box-right">
                            <div class="features-icon-right"><i class="ion ion-ios-camera"></i></div>
                            <h4>Cámara</h4>
                            <p><?php echo $gbl_camara;?></p>
                        </div>
                        <div class="features-box-right">
                            <div class="features-icon-right"><i class="ion ion-android-phone-portrait"></i></div>
                            <h4>Pantalla</h4>
                            <p><?php echo $gbl_pantalla;?></p>
                        </div>
                        <div class="features-box-right">
                            <div class="features-icon-right"><i class="ion ion-arrow-resize"></i></div>
                            <h4>Dimensiones</h4>
                            <p><?php echo $gbl_dimensiones;?></p>
                        </div>
                        <div class="features-box-right">
                            <div class="features-icon-right"><i class="ion ion-leaf"></i></div>
                            <h4>Peso</h4>
                            <p><?php echo $gbl_peso;?></p>
                        </div>
                     </div>

                     <div class="wow fadeInRight col-sm-6 col-xs-6 pt-sm-0">
                        <!--Tabs de Caracteristicas-->
                        <div class="features-box-left">
                            <div class="features-icon-left"><i class="ion ion-wifi"></i></div>
                            <h4>Conectividad</h4>
                            <p><?php echo $gbl_conectividad;?></p>
                        </div>
                        <div class="features-box-left">
                            <div class="features-icon-left"><i class="ion ion-connection-bars"></i></div>
                            <h4>Redes</h4>
                            <p><?php echo $gbl_redes;?></p>
                        </div>
                        <div class="features-box-left">
                            <div class="features-icon-left"><i class="ion ion-android-wifi"></i></div>
                            <h4>Hotspot</h4>
                            <p><?php echo $gbl_hotspot;?></p>
                        </div>
                        <div class="features-box-left">
                            <div class="features-icon-left"><i class="unefon icon-sim_card"></i></div>
                            <h4>Memoria</h4>
                            <p><?php echo $gbl_memoria;?></p>
                        </div>
                        <div class="features-box-left">
                            <div class="features-icon-left"><span class="unefon icon-memory2"></span></div>
                            <h4>Procesador / Ram</h4>
                            <p><?php echo $gbl_procesador;?></p>
                        </div>
                     </div>
                        

                            <!--p class="ptb-15">Descripción</p-->
                            
                    </div>
                </div>
            </div>
        </section>
        <hr />

        <!-- Related Product Slider-->
        <section class="pt-50 ptb-sm-80 soft-gray">
            <div class="container text-center">
                <h3>Otros equipos que pueden interesarte</h3>
                <div class="spacer-30"></div>
                <div class="row">
                    <div class="owl-carousel item3-carousel nf-carousel-theme o-flow-hidden">
                        <?php						
							$mm_car=array();
							$mm_id=array();
							
							$cant_celulares=0;
							
							$varincrem1 = -1;								
							$lines1=array();
														
							$resultados1=array();							
							$fp1=fopen('bd/bdequipos.txt', 'r');
							
							while (!feof($fp1))
							{
								$line1=fgets($fp1);
								$line1 = explode("|", $line1);
								$lines1[]=$line1;					
								$varincrem1 = $varincrem1 + 1;
								
								//contamos solo los celulares activos
								if($lines1[$varincrem1][21] != 0){
									$cant_celulares = $cant_celulares + 1;
								}
								
								if($lines1[$varincrem1][2] == $gbl_marca && $lines1[$varincrem1][0] != $urlid && $lines1[$varincrem1][21] != 0 ){
									$mm_car[] = $lines1[$varincrem1][16];
									$mm_id[] = $lines1[$varincrem1][0];
																											
									echo "<div class='item'>";
									echo "<div class='nf-col-padding'>";
									echo "<div class='item-box'>";
									echo "<div class='shop-item'>";
									echo "<div class='item-img'>";
									echo "<img src='".str_replace(".jpg","_g.jpg",$lines1[$varincrem1][16])."' alt='Unefon ".$lines1[$varincrem1][1]."' title='Unefon ".$lines1[$varincrem1][1]."' />";
									echo "</div>";
									echo "<div class='item-mask'>";
									echo "<div class='item-mask-detail'>";
									echo "<div class='item-mask-detail-ele'>";
									echo "<a class='aaction btn_promos btn' id='".$lines1[$varincrem1][1]."x"."' aria-label='".$lines1[$varincrem1][1]."' title='".$lines1[$varincrem1][1]."' href=equipos.php?id=".$lines1[$varincrem1][0].">".$lines1[$varincrem1][1]."<br>Ver este equipo</a>";
									echo "</div>";
									echo "</div>";
									echo "</div>";
									echo "</div>";
									echo "</div>";
									echo "</div>";
									echo "</div>";
									
								}//cerramos el primer if condicional
									
							}//ceraamos el while normal
							
							fclose($fp1);
							
							
							
							//revisamos si faltan elementos en la parte de aquipos
							$cantelement = count($mm_car);
							
							if($cantelement < 3){
								if ($cantelement == 0){
									//tres elementos mas";
									$rdm31=rand(0,$cant_celulares);
									$rdm32=rand(0,$cant_celulares);
									$rdm33=rand(0,$cant_celulares);
									
									//revisamos que los elementos no se repitan si si vulve a a hacer el random
									if($rdm31 == $rdm32 || $rdm32 == $rdm33 || $rdm31 == $rdm33){
										$rdm31=rand(0,$cant_celulares);
										$rdm32=rand(0,$cant_celulares);
										$rdm33=rand(0,$cant_celulares);
										
										echo idnombre($rdm31);
										echo idnombre($rdm32);
										echo idnombre($rdm33);
										
									}else{
										echo idnombre($rdm31);
										echo idnombre($rdm32);
										echo idnombre($rdm33);
									}
									
								}else if($cantelement == 1){
									//dos elementos mas";
									$rdm21=rand(0,$cant_celulares);
									$rdm22=rand(0,$cant_celulares);
									
									if($rdm21 == $rdm22){
										$rdm21=rand(0,$cant_celulares);
										$rdm22=rand(0,$cant_celulares);
										
										echo idnombre($rdm21);
										echo idnombre($rdm22);
										
									}else{
										
										echo idnombre($rdm21);
										echo idnombre($rdm22);
										
									}
																			
								}else if($cantelement == 2){
									//un elemento mas";									
									$rdm11=rand(0,$cant_celulares);	
									echo idnombre($rdm11);
									
								}					
							}
							
							function idnombre($elid){
								$varincremx = -1;								
								$linesx=array();
								$fpx=fopen('bd/bdequipos.txt', 'r');
								
								while (!feof($fpx))
								{
									$linex=fgets($fpx);
									$linex = explode("|", $linex);
									$linesx[]=$linex;					
									$varincremx = $varincremx + 1;
									
									if($linesx[$varincremx][0] == $elid && $linesx[$varincremx][21] != 0){
										return "<div class='item'><div class='nf-col-padding'><div class='item-box'><div class='shop-item'><div class='item-img'><img src='".str_replace(".jpg","_g.jpg",$linesx[$varincremx][16])."' alt='Unefon ".$lines1[$varincrem1][1]."' title='Unefon ".$lines1[$varincrem1][1]."' /></div><div class='item-mask'><div class='item-mask-detail'><div class='item-mask-detail-ele'><a class='aaction btn_promos btn' id='".$linesx[$varincremx][0]."c"."' href=equipos.php?id=".$linesx[$varincremx][0]." aria-label='".$linesx[$varincremx][1]."' title='".$linesx[$varincremx][1]."'>".$linesx[$varincremx][1]."<br>Ver este equipo</a></div></div></div></div></div></div></div>";	
									}
								}
								
								fclose($fpx);	
							}
						
						?>
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- End Related Product Slider -->

        <!-- Cross Section -->
        <section id="cross" class="fadeIn text-center dark-color">
        <div class="row no-pddng">
            <div class="col-md-6 equipo ptcross">
               <h3>¿Aún no tienes tu equipo Unefon?</h3>
                <!-- work Filter -->
                        <p>Compra tu equipo Unefon, en más de 3,000 tiendas en toda la república.</p>
                         <a href="../tiendas/index.php" class="aaction btn btn-md btn-white" aria-label="Donde comprar" title="Donde comprar" id="dondecomprar"><span>Donde comprar</span></a>
                </div>

              <div class="col-md-6 donde ptcross">
               <h3>¿Dónde puedo hacer mis recargas?</h3>
                <!-- work Filter -->
                        <p>Recarga en México y en USA en más de 400 mil establecimientos.</p>
                         <a href="../comprar/recarga-tiempo-aire.php" class="aaction btn btn-md btn-white" aria-label="Ver puntos de recarga" title="Ver puntos de recarga" id="puntosrecarga"><span>Ver puntos de recarga</span></a>
                </div>
                </div>
                <!-- End work Filter -->
        </section>
        <!-- End Cross Section -->

        <!-- Redes sociales section -->
        <section id="recarga" class="wow fadeIn ptb-50 pt-sm-10 text-center">
            <div class="container"><!-- container-->
                 <div class="col-md-12"><!-- .col-->
                     <center><h2>Síguenos en nuestras redes sociales</h2></center>
                             <div class="row"><!-- .row-->
                                 <div class="spacer-30"></div>
                                     <div id="redes" class="wow fadeIn text-center container"><!-- #redes-->
                                         <ul class="social">
                                            <li><a target="_blank" href="https://www.facebook.com/unefon" aria-label="Facebook Oficial Unefon" title="Facebook Oficial Unefon" class="aaction" id="face"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="https://twitter.com/Unefon" aria-label="Twitter Oficial Unefon" title="Twitter Oficial Unefon" class="aaction" id="twit"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="https://www.youtube.com/user/Unefonoficial" aria-label="Youtube Oficial Unefon" title="Youtube Oficial Unefon" class="aaction" id="you"><i class="fa fa-youtube"></i></a></li>
                                            <li><a target="_blank" href="https://www.instagram.com/unefonmx/" aria-label="Instagram Oficial Unefon" title="Instagram Oficial Unefon" class="aaction" id="insta"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div><!-- .redes-->
                             </div><!-- .row-->
                 </div><!-- .col-->
             </div><!-- .container-->
        </section>
        <!-- End redes sociales section -->

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

    <script src="../js/plugin/smoothproducts.js"></script>

    <script src="../js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="../js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="../js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="../js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="../js/plugin/jPushMenu.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="../js/plugin/mediaelement-and-player.min.js"></script>
    <script src="../js/theme.js" type="text/javascript"></script>
    <script src="../js/navigation.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(window).load(function () {
            $('.sp-wrap').smoothproducts();
        });
    </script>
</body>
</html>


