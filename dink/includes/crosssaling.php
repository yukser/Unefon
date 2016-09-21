<?php
	$path = "$_SERVER[REQUEST_URI]";
	$file = basename($path);
	$file = basename($path, ".php");
?>

<section id="cross" class="fadeIn ptcross text-center dark-color">
        <div class="row no-pddng">
            <div class="col-md-6 equipo ptcross">
               <h3>¿Aún no tienes tu equipo Unefon?</h3>
                <!-- work Filter -->
                        <p>Compra tu equipo Unefon, en más de 3,000 tiendas en toda la república.</p>
                        <?php
							if($file == "descuento-20-30jun"){
						?>
                        		<a href="../tiendas" class="aaction btn btn-md btn-white" aria-label="Dónde comprar" title="Dónde comprar" id="dondecom30jun"><span>Dónde comprar</span></a>
                        <?php	
							}else {
						?>
								<a href="../tiendas" class="aaction btn btn-md btn-white" aria-label="Dónde comprar" title="Dónde comprar" id="dondecom"><span>Dónde comprar</span></a>
                        <?php
							}
                        ?>
                </div>

              <div class="col-md-6 donde ptcross">
               <h3>¿Dónde puedo hacer mis recargas?</h3>
                <!-- work Filter -->
                        <p>Recarga en México y en USA en más de 400 mil establecimientos.</p>
                        <?php
							if($file == "descuento-20-30jun"){
						?>
                        	<a href="../comprar/recarga-tiempo-aire.php" class="aaction btn btn-md btn-white" aria-label="Ver puntos de recarga" title="Ver puntos de recarga" id="verpuntos30jun"><span>Ver puntos de recarga</span></a>
                        <?php
							}else { 
						?>
                        	 <a href="../comprar/recarga-tiempo-aire.php" class="aaction btn btn-md btn-white" aria-label="Ver puntos de recarga" title="Ver puntos de recarga" id="verpuntos"><span>Ver puntos de recarga</span></a>
                        <?php
							} 
						?>
                        
                </div>
                </div>
                <!-- End work Filter -->
        </section>
<!-- Recarga Section -->
<section id="recarga" class="wow fadeIn ptb-50 pt-sm-10 text-center">
            <div class="container"><!-- container-->
                 <div class="col-md-12"><!-- .col-->
                     <center><h2>Síguenos en nuestras redes sociales</h2></center>
                             <div class="row"><!-- .row-->
                                 <div class="spacer-30"></div>
                                     <div id="redes" class="wow fadeIn text-center container"><!-- #redes-->
                                         <ul class="social">
                                            <li><a target="_blank" href="https://www.facebook.com/unefon" aria-label="Facebook Oficial Unefon" title="Facebook Oficial Unefon" class="aaction" id="uneface"><span><i class="fa fa-facebook"></i></span></a></li>
                                            <li><a target="_blank" href="https://twitter.com/Unefon" aria-label="Twitter Oficial Unefon" title="Twitter Oficial Unefon" class="aaction" id="unetwit"><span><i class="fa fa-twitter"></i></span></a></li>
                                            <li><a target="_blank" href="https://www.youtube.com/user/Unefonoficial" aria-label="Youtube Oficial Unefon" title="Youtube Oficial Unefon" class="aaction" id="uneyou"><span><i class="fa fa-youtube"></i></span></a></li>
                                            <li><a target="_blank" href="https://www.instagram.com/unefonmx/" aria-label="Instagram Oficial Unefon" title="Instagram Oficial Unefon" class="aaction" id="uneinsta"><span><i class="fa fa-instagram"></i></span></a></li>
                                        </ul>
                                    </div><!-- .redes-->
                             </div><!-- .row-->
                 </div><!-- .col-->
             </div><!-- .container-->
        </section>
<!-- End Recarga Section -->

