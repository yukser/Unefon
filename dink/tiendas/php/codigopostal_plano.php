<?php 
	
	header("access-control-allow-origin: *");
	
	//Variables de latitud y longitud central
	//$latcp="19.2686916";
	//$longcp="-99.1522412";	
	$latcp= $_GET["lati"];
	$longcp= $_GET["longi"];
	
	//variable de incremento
	$varincrem = -1;
	
	//Variable de regreso
	$regreso="";
	
	$lines=array();
	
	$fp=fopen('store-locator.txt', 'r');
	
	while (!feof($fp))
	{
		$line=fgets($fp);
		
		//De toda la linea del string la dividimos por pipes para que los string cortados sean los elementos del arreglo
		$line = explode("|", $line);
		
		//Agregamos todos los elementos al arreglo
		$lines[]=$line;
		
		//Variable de indices del arreglo
		$varincrem = $varincrem + 1;
		
		//Ejecutamos variable de calculo de Haversine para obtener todas las distancias		
		$resultados["distancia"]=(6371 * acos(cos ( deg2rad($latcp) ) * cos(deg2rad($lines[$varincrem][8])) * cos(deg2rad($lines[$varincrem][9]) - deg2rad($longcp) ) + sin (deg2rad($latcp)) * sin(deg2rad($lines[$varincrem][8])) ));
		
		//Poblamos el arreglo de resultados delimitando a menos de 5km
		if($resultados["distancia"]<=5){
			//echo "hecho papa". "<br/>";
			$resultados["id"] = $lines[$varincrem][0];
			$resultados["cadena"] = $lines[$varincrem][1];
			$resultados["direccion"] = $lines[$varincrem][7];
			$resultados["latitud"] = $lines[$varincrem][8];
			$resultados["longitud"] = $lines[$varincrem][9];
			
			//Poblamos el arreglo de resultados
			$regreso[]=$resultados;	
		}
		
			
	}//Cerramos el While
	
	echo json_encode ($regreso);
	
	//cerramos el documento
	fclose($fp);
	
?>