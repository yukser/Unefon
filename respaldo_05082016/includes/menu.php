<?php

error_reporting(0);

	$ruta = $_SERVER['REQUEST_URI'];
	$relativa="";

	if (strpos($ruta, 'tiendas') !== false || strpos($ruta, 'cobertura') !== false || strpos($ruta, 'comprar') !== false || strpos($ruta, 'legales') !== false || strpos($ruta, 'paquetes') !== false || strpos($ruta, 'promociones') !== false || strpos($ruta, 'servicios') !== false || strpos($ruta, 'equipos') !== false ) {
    	$relativa="../";
	}else{
		$relativa="";
	}


?>

<style type="text/css">

.autoservicio {
    background: #FFC600;
    padding: 20px 15px 10px !important;
    text-align: center;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    top: -10px !important;
    position: absolute;
    right: 60px;
    font-size: 16px;
    color: #000 !important;
    z-index: 888;
}

.autoservicio:hover {
    background: #43B02A;
    color: #fff !important;
}

.second-menu-top ul {
    margin-right: 150px;
}

</style>

<header class="header">
    <div class="container">
        <!-- logo -->
        <div class="logo">
            <a href="<?php
						if( strpos($ruta, 'cambiate-a-unefon.php') == true or strpos($ruta, 'faq.php') == true or strpos($ruta, 'mapa-de-sitio.php') == true){
							echo "index.php";
						}else{
							echo $relativa;
						}						  
					 ?>" aria-label="Unefon Home" title="Unefon Home" id="logounefon" class="aaction">
                <img class="l-color" src="<?php echo $relativa;  ?>img/logos/unefon-logo-color.png" alt="Unefon Home" title="Unefon Home"/>
                <img class="l-black" src="<?php echo $relativa;  ?>img/logos/unefon-logo-black.png" alt="Unefon Home" title="Unefon Home"/>               
            </a>
        </div>
        <!--End logo-->

        <!-- Menu Top -->
        <div class="container second-menu-top">
            <ul>
                <li><a tabindex="1" href='#content' aria-label="Skip-navigation" title="Skip Navigation" id="menuskip" class="sr-only sr-only-focusable" class="aaction"><span>Saltar Navegación</span></a></li>
                <li><a tabindex="0" href='<?php echo $relativa;  ?>cobertura' aria-label="Cobertura" title="Cobertura" id="menucobert" class="aaction"><span>Cobertura</span></a></li>
                <li><a class="toggle-menu menu-right push-body active aaction" aria-label="Atención a Clientes" title="Atención a Clientes" id="menuatemcion" tabindex="0"><span>Atención a Clientes</span></a></li>
            </ul>
            <a href="https://web.iusacell.com.mx/PortalAutoservWeb/miUnefon.jsp" target="_blank" class="aaction autoservicio" aria-label="Autoservicio" title="Autoservicio" id="menuauto"><span><i class="fa fa-user"></i> Autoservicio</span></a>
        </div>
        <!--End Search menu Top -->
        
        <!-- Rightside Menu (Search, Cart, Bart icon) -->
        <div class="side-menu-btn">
            <ul>
                <!--Sidebar Menu Icon-->
                <li class="atn-clientes">
                	<a class="right-icon toggle-menu menu-right push-body" aria-label="registro" title="registro"><i class="fa fa-user registro"></i></a>
                </li>
                <!-- End Sidebar Menu Icon-->
            </ul>
        </div>
        <!-- End Rightside Menu -->
        
        <!-- Navigation Menu -->
        <nav class='navigation'>
            <ul>
                <li> 
                	<a href="<?php 
								if( strpos($ruta, 'cambiate-a-unefon.php') == true){
									echo "index.php";
								}else{
									echo $relativa;
								}  
							?>" aria-label="Home Unefon" title="Home Unefon" id="sweet" class="aaction" ><i class="ion ion-ios-home sweethome"></i></a>
                </li>                
                <li>
                	 <a href='<?php echo $relativa;  ?>equipos' aria-label="Equipos" title="Equipos" id="menuequipos" class="aaction" tabindex="0"><span>Equipos</span></a>
                </li>
                <li>
                	<a aria-label="Paquetes" title="Paquetes" id="menupaquetes" class="aaction" tabindex="0"><span>Paquetes <i class="fa fa-angle-down icon_menu"></i></span></a>
                    <!-- Nav Dropdown -->
                    <ul class="nav-dropdown">                    
                        <li>
                        <a href='<?php echo $relativa;  ?>paquetes/paquetes-unefon.php' aria-label="Paquetes Unefon" title="Paquetes Unefon" >Paquetes Unefon</a>
                        </li>
                        <li>
                        <a href="<?php echo $relativa;  ?>paquetes/por-segundo.php" aria-label="Unefon por segundo" title="Unefon por segundo" >Unefon por segundo</a>
                        </li>
                    </ul>
                    <!-- End Nav Dropdown -->
                </li>
                <li>
                	<a href="<?php echo $relativa;  ?>cambiate-a-unefon.php" aria-label="Cámbiate a Unefon" title="Cámbiate a Unefon" id="menucambiate" class="aaction"><span>Cámbiate a Unefon</span></a>
                </li>
                <li>
                    <a aria-label="Servicios" title="Servicios" id="menuserv" class="aaction" tabindex="0"><span>Servicios <i class="fa fa-angle-down icon_menu"></i></span></a>
                    <!-- Nav Dropdown -->
                    <ul class="nav-dropdown">
                        <li><a href="<?php echo $relativa;  ?>servicios/facebook-switch.php" aria-label="Facebook Switch" title="Facebook Switch">Facebook Switch</a></li>
                        <!--li><a href="< ?php echo $relativa;  ?>servicios/comunidad-extendida.php">Comunidad extendida</a></li-->
                        <li><a href="<?php echo $relativa;  ?>servicios/pagas-tu.php" aria-label="SMS pagas tú" title="SMS pagas tú">SMS pagas tú</a></li>
                        <li><a href="<?php echo $relativa;  ?>servicios/pago-yo.php" aria-label="SMS pago yo" title="SMS pago yo">SMS pago yo</a></li>
                        <li><a href="<?php echo $relativa;  ?>servicios/apoyo-sos.php" aria-label="Apoyo sos" title="Apoyo sos">Apoyo S.O.S.</a></li>
                        <li><a href="<?php echo $relativa;  ?>servicios/cobertura-cdma.php" aria-label="Cobertura CDMA" title="Cobertura CDMA">Cobertura CDMA</a></li>
                        <li><a href="<?php echo $relativa;  ?>servicios/buzon-de-voz.php" aria-label="Buzón de voz" title="Buzón de voz">Buzón de voz</a></li>
                    </ul>
                    <!-- End Nav Dropdown -->
                </li>
                <li>
                	<a aria-label="Comprar y recargar" title="Comprar y recargar" id="menucompra" class="aaction" tabindex="0"><span>Comprar y recargar <i class="fa fa-angle-down icon_menu"></i></span></a>
                    <!-- Nav Dropdown -->
                    <ul id="test" class="nav-dropdown">
                        <li><a href="<?php echo $relativa;  ?>tiendas" aria-label="Ubica tu tienda" title="Ubica tu tienda">Ubica tu tienda</a></li>
                        <li><a href="<?php echo $relativa;  ?>comprar/recarga-tiempo-aire.php" aria-label="Recarga tiempo aire" title="Recarga tiempo aire">Recarga tiempo aire</a></li>
                        <!--li><a href="#">Descargar App <span style="color:#ffc600">Mi Unefon<span></a></li-->
                    </ul>
                    <!-- End Nav Dropdown -->
                </li>
                <li>
                	<a href="<?php echo $relativa;  ?>promociones/" aria-label="Promociones" title="Promociones" id="menupromos" class="aaction"><span>Promociones</span></a>
                </li>
                <li class="visible-xs visible-sm hidden-md hidden-lg">
                    <a href="<?php echo $relativa;  ?>cobertura/index.php" aria-label="Cobertura" title="Cobertura" >Cobertura</a>
                </li>
            </ul>
        </nav>
        <!--End Navigation Menu -->
        
    </div>
    
</header>