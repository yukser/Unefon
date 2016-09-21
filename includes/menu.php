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
            <a tabindex="0" class="aaction" href="<?php
						if( strpos($ruta, 'cambiate-a-unefon.php') == true or strpos($ruta, 'faq.php') == true or strpos($ruta, 'mapa-de-sitio.php') == true){
							echo "index.php";
						}else{
							echo $relativa;
						}
					 ?>" aria-label="Unefon Home" title="Unefon Home" id="logounefon">
                <img class="l-color" src="<?php echo $relativa;  ?>img/logos/unefon-logo-color.png" alt="Unefon Home" title="Unefon Home"/>
                <img class="l-black" src="<?php echo $relativa;  ?>img/logos/unefon-logo-black.png" alt="Unefon Home" title="Unefon Home"/>
            </a>
        </div>
        <!--End logo-->

        <!-- Menu Top -->
        <div class="container second-menu-top">
            <ul>
                <li><a tabindex="0" href='#content' aria-label="Skip-navigation" title="Skip Navigation" id="menuskip" class="aaction sr-only sr-only-focusable" ><span>Saltar Navegación</span></a></li>
                <li><a tabindex="0" href='<?php echo $relativa;  ?>cobertura/index.php' aria-label="Cobertura" title="Cobertura" id="menucobert" class="aaction"><span>Cobertura</span></a></li>
                <li><a href="#" class="aaction toggle-menu menu-right push-body active" aria-label="Atención-a-Clientes" title="Atención a Clientes" id="menuatemcion"><span>Atención a Clientes</span></a></li>
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
        <nav role="navigation" class='navigation'>
            <ul role="menubar">
                <li id="mb1_menu1" role="menuitem">
                	<a href="<?php
								if( strpos($ruta, 'cambiate-a-unefon.php') == true){
									echo "index.php";
								}else{
									echo $relativa;
								}
     							?>"
                          aria-label="Home-Unefon" title="Home Unefon" id="sweet" class="aaction"><span><i class="ion ion-ios-home sweethome"></i></span></a>
                </li>
                <li id="mb1_menu2" role="menuitem">
                	 <a href='<?php echo $relativa;  ?>equipos/index.php' aria-label="Equipos" title="Equipos" id="menuequipos" class="aaction linem"><span>Equipos</span></a>
                </li>
                <li role="menuitem" >
                	<a data-toggle="dropdown" href="#" aria-label="Paquetes" title="Paquetes" id="menupaquetes" class="aaction down"><span id="fileLabel">Paquetes <i class="fa fa-angle-down icon_menu"></i></span></a>
                    <!-- Nav Dropdown -->
                    <ul role="menu" aria-hidden="true" class="nav-dropdown">
                        <li role="menuitem">
                        <a href='<?php echo $relativa;  ?>paquetes/paquetes-unefon.php' aria-label="Paquetes Unefon" title="Paquetes Unefon " class="aaction"><span>Paquetes Unefon</span></a>
                        </li>
                        <li role="menuitem" >
                        <a href="<?php echo $relativa;  ?>paquetes/por-segundo.php" aria-label="Unefon por segundo" title="Unefon por segundo" class="aaction"><span>Unefon por segundo</span></a>
                        </li>
                        <li role="menuitem" >
                        <a href="<?php echo $relativa;  ?>paquetes/plan-unefon-control.php" aria-label="Plan Unefon Control" title="Plan Unefon Control" class="aaction"><span>Plan Unefon Control (Exclusivo de Elektra)</span></a>
                        </li>
                    </ul>
                    <!-- End Nav Dropdown -->
                </li>
                <li id="mb1_menu3" role="menuitem">
                	<a href="<?php echo $relativa;  ?>cambiate-a-unefon.php" aria-label="Cámbiate a Unefon" title="Cámbiate a Unefon" id="menucambiate" class="aaction linem"><span>Cámbiate a Unefon</span></a>
                </li>
                <li id="mb1_menu4" role="menuitem">
                    <a data-toggle="dropdown" href="#" aria-label="Servicios" title="Servicios" id="menuserv" class="aaction down"><span id="fileLabel2">Servicios <i class="fa fa-angle-down icon_menu"></i></span></a>
                    <!-- Nav Dropdown -->
                    <ul role="menu" aria-hidden="true" class="nav-dropdown">
                        <li role="menuitem"><a href="<?php echo $relativa;  ?>servicios/google-play-musica.php" aria-label="Google Play" title="Google Play" class="aaction"><span>Google Play Música</span></a></li>
                        <li role="menuitem"><a href="<?php echo $relativa;  ?>servicios/facebook-switch.php" aria-label="Facebook Switch" title="Facebook Switch" class="aaction"><span>Facebook Switch</span></a></li>
                        <!--li><a href="< ?php echo $relativa;  ?>servicios/comunidad-extendida.php">Comunidad extendida</a></li-->
                        <li role="menuitem"><a href="<?php echo $relativa;  ?>servicios/pagas-tu.php" aria-label="SMS pagas tú" title="SMS pagas tú" class="aaction"><span>SMS pagas tú</span></a></li>
                        <li role="menuitem"><a href="<?php echo $relativa;  ?>servicios/pago-yo.php" aria-label="SMS pago yo" title="SMS pago yo" class="aaction"><span>SMS pago yo</span></a></li>
                        <li role="menuitem"><a href="<?php echo $relativa;  ?>servicios/apoyo-sos.php" aria-label="Apoyo sos" title="Apoyo sos" class="aaction"><span>Apoyo S.O.S.</span></a></li>
                        <li role="menuitem"><a href="<?php echo $relativa;  ?>servicios/cobertura-cdma.php" aria-label="Cobertura CDMA" title="Cobertura CDMA" class="aaction"><span>Cobertura CDMA</span></a></li>
                        <li role="menuitem"><a href="<?php echo $relativa;  ?>servicios/buzon-de-voz.php" aria-label="Buzón de voz" title="Buzón de voz" class="aaction"><span>Buzón de voz</span></a></li>
                    </ul>
                    <!-- End Nav Dropdown -->
                </li>
                <li id="mb1_menu5" role="menuitem">
                	<a data-toggle="dropdown" href="#" aria-label="Comprar y recargar" title="Comprar y recargar" id="menucompra" class="aaction down"><span id="fileLabel3">Comprar y recargar <i class="fa fa-angle-down icon_menu"></i></span></a>
                    <!-- Nav Dropdown -->
                    <ul role="menu" aria-hidden="true" class="nav-dropdown">
                        <li role="menuitem"><a href="<?php echo $relativa;  ?>tiendas/index.php" aria-label="Ubica tu tienda" title="Ubica tu tienda" class="aaction"><span>Ubica tu tienda</span></a></li>
                        <li role="menuitem"><a href="<?php echo $relativa;  ?>comprar/recarga-tiempo-aire.php" aria-label="Recarga tiempo aire" title="Recarga tiempo aire" class="aaction"><span>Recarga tiempo aire</span></a></li>
                        <!--li><a href="#">Descargar App <span style="color:#ffc600">Mi Unefon<span></a></li-->
                    </ul>
                    <!-- End Nav Dropdown -->
                </li>
                <li id="mb1_menu6" role="menuitem">
                	<a href="<?php echo $relativa;  ?>promociones/" aria-label="Promociones" title="Promociones" id="menupromos" class="aaction linem"><span>Promociones</span></a>
                </li>
                <li class="visible-xs visible-sm hidden-md hidden-lg">
                    <a href="<?php echo $relativa;  ?>cobertura/index.php" aria-label="Cobertura" title="Cobertura" >Cobertura</a>
                </li>
            </ul>
        </nav>
        <!--End Navigation Menu -->

    </div>

</header>