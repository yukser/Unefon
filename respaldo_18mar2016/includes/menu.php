<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TQ25FR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TQ25FR');</script>
<!-- End Google Tag Manager -->

<?php
	
	$ruta = $_SERVER['REQUEST_URI'];
	$relativa="";
	
	if (strpos($ruta, 'tiendas') !== false || strpos($ruta, 'cobertura') !== false || strpos($ruta, 'comprar') !== false || strpos($ruta, 'legales') !== false || strpos($ruta, 'paquetes') !== false || strpos($ruta, 'promociones') !== false || strpos($ruta, 'servicios') !== false || strpos($ruta, 'equipos') !== false ) {
    	$relativa="../";
	}else{
		$relativa="";
	}

	
?>
<header class="header">
    <div class="container">
    
        <!-- logo -->
        <div class="logo">
            <a href="<?php echo $relativa;  ?>home.php">
                <img class="l-color" src="<?php echo $relativa;  ?>img/logos/unefon-logo-color.png" />
                <img class="l-black" src="<?php echo $relativa;  ?>img/logos/unefon-logo-black.png" />               
            </a>
        </div>
        <!--End logo-->
        
        <!-- Menu Top -->
        <div class="container second-menu-top">
            <ul>
                <!--li><a href="" class="active">Mi Unefon</a></li-->
                <li><a href='<?php echo $relativa;  ?>cobertura/index.php'>Cobertura</a></li>
                <li><a class="toggle-menu menu-right push-body active">Atención a Clientes</a></li>
            </ul>
        </div>
        <!--End Search menu Top -->
        
        <!-- Rightside Menu (Search, Cart, Bart icon) -->
        <div class="side-menu-btn">
            <ul>
                <!--Sidebar Menu Icon-->
                <li class="atn-clientes">
                	<a class="right-icon toggle-menu menu-right push-body"><i class="fa fa-user registro"></i></a>
                </li>
                <!-- End Sidebar Menu Icon-->
            </ul>
        </div>
        <!-- End Rightside Menu -->
        
        <!-- Navigation Menu -->
        <nav class='navigation'>
            <ul>
                <li> 
                	<a href="<?php echo $relativa;  ?>home.php"><i class="ion ion-ios-home sweethome"></i></a>
                </li>                
                <li>
                	 <a href='<?php echo $relativa;  ?>equipos/index.php'>Equipos</a>
                </li>
                <li>
                	<a>Paquetes <i class="fa fa-angle-down icon_menu"></i></a>
                    <!-- Nav Dropdown -->
                    <ul class="nav-dropdown">                    
                        <li>
                        <a href='<?php echo $relativa;  ?>paquetes/paquetes-unefon.php'>Paquetes Unefon</a>
                        </li>
                        <li>
                        <a href="<?php echo $relativa;  ?>paquetes/por-segundo.php">Unefon por segundo</a>
                        </li>
                    </ul>
                    <!-- End Nav Dropdown -->
                </li>
                <li>
                	<a href="<?php echo $relativa;  ?>cambiate-a-unefon.php">Cámbiate a Unefon</a>
                </li>
                <li>
                    <a>Servicios <i class="fa fa-angle-down icon_menu"></i></a>
                    <!-- Nav Dropdown -->
                    <ul class="nav-dropdown">
                        <li><a href="<?php echo $relativa;  ?>servicios/facebook-switch.php">Facebook Switch</a></li>
                        <!--li><a href="<?php echo $relativa;  ?>servicios/comunidad-extendida.php">Comunidad extendida</a></li-->
                        <li><a href="<?php echo $relativa;  ?>servicios/pagas-tu.php">SMS pagas tú</a></li>
                        <li><a href="<?php echo $relativa;  ?>servicios/pago-yo.php">SMS pago yo</a></li>
                        <li><a href="<?php echo $relativa;  ?>servicios/apoyo-911.php">Apoyo 911</a></li>
                    </ul>
                    <!-- End Nav Dropdown -->
                </li>
                <li>
                	<a>Comprar y recargar <i class="fa fa-angle-down icon_menu"></i></a>
                    <!-- Nav Dropdown -->
                    <ul class="nav-dropdown">
                        <li><a href="<?php echo $relativa;  ?>tiendas/index.php">Ubica tu tienda</a></li>
                        <li><a href="<?php echo $relativa;  ?>comprar/recarga-tiempo-aire.php">Recarga tiempo aire</a></li>
                        <!--li><a href="#">Descargar App <span style="color:#ffc600">Mi Unefon<span></a></li-->
                    </ul>
                    <!-- End Nav Dropdown -->
                </li>
                <li>
                	<a href="<?php echo $relativa;  ?>promociones/">Promociones</a>
                </li>
                <li class="visible-xs visible-sm hidden-md hidden-lg">
                    <a href="<?php echo $relativa;  ?>cobertura/index.php">Cobertura</a>
                </li>
            </ul>
        </nav>
        <!--End Navigation Menu -->
        
    </div>
    
</header>