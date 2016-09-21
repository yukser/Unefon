<div class="container">
    <div class="row title">
         <div class="page-breadcrumb"><!-- Breadcrumb -->
            <a href="<?php echo $relativa;  ?>index.php">Inicio<i class="fa fa-angle-right"></i></a> 
            <?php
				
				$ruta2=$_SERVER['REQUEST_URI'];
				$urlseparada=array();
				$archivocontiene=array();	
				$urlseparada[] = explode("/", $ruta2);
				
				$raiz="";
				$carpeta="";
				$carpetar="";
				$archivo="";
				$archivor="";
				$conjunta="";
				
				/*foreach($urlseparada as $valor) {					
					 $raiz = $valor[1];
					 $carpeta = $valor[2];
					 $archivo = $valor[3];
				}*/
				
				foreach($urlseparada as $valor) {					
					 $raiz = $valor[2];
					 $carpeta = $valor[3];
					 $archivo = $valor[4];
				}
				
				
				//le quitamos las axtenciones a los archivos
				$archivor=str_replace(".php","",$archivo);
				$carpetar=str_replace(".php","",$carpeta);
				
				if($archivor=="index"){
					$archivor="";
				}
				
				if (strpos($archivor, "=") !== false){
					$archivocontiene[] = explode("?", $archivor);
					$archivorx="";
					
					foreach($archivocontiene as $valor) {
						 $archivor = $valor[0];
					}				
				}
				
				if ($archivor=="equipos"){
					$archivor="características";
				}
								
				if($carpetar == "servicios" || $carpetar == "comprar" || $carpetar == "paquetes"){
					$conjunta ="" ;
				}else{
					$conjunta = $relativa.$carpetar;
				}
				
				if($carpetar== "comprar"){
					$carpetar="comprar y recargar";
				}
				
				if($carpetar== "tiendas"){
					$carpetar="comprar y recargar > tiendas";
				}
				
				
			?>
            <span><a href="<?php echo $conjunta; ?>"><?php echo $carpetar; ?></a><i class="fa fa-angle-right"></i></span><?php echo $relativ . $archivor; ?>
        	<!--<span><a href="< ?php echo $relativa.$carpeta; ?>">< ?php echo $carpetar; ?></a> <i class="fa fa-angle-right"></i></span>< ?php echo $relativ . $archivor; ?>-->
        </div><!-- Breadcrumb -->
    </div>
</div>