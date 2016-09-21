<?php 
		
	header("access-control-allow-origin: *");
	
	$estadoid= $_GET["estadoid"];
	$municipio= $_GET["cadmuni"];
	$cadenacomer= $_GET["lacadena"];
	
	//$estadoid= 9;
	//$municipio= "XOCHIMILCO";
	//$cadenacomer= "ELEKTRA";
	
	//variable de incremento
	$varincrem = -1;
	
	//Variable de regreso
	$regreso="";
	
	//variable de arreglo de resultados
	$resultados=array();
	
	$lines=array();
	$fp=fopen('store-locator.txt', 'r');
	
	while (!feof($fp))
	{
		$line=fgets($fp);
	
		//De toda la linea del string la dividimos por pipes para que los string cortados sean los elementos del arreglo
		$line = explode("|", $line);
		
		//Agregamos todos los elementos al arreglo
		$lines[]=$line;
		
		$varincrem = $varincrem + 1;
		
		//realizamos busqueda procuramos poner un trim para evitar los espacios imprevistos
		if(trim($lines[$varincrem][2])==$estadoid && trim($lines[$varincrem][4]) == $municipio && trim($lines[$varincrem][1])== $cadenacomer){
						
			$resultados["id"] = $lines[$varincrem][0];
			$resultados["cadena"] = $lines[$varincrem][1];
			$resultados["colonia"] = $lines[$varincrem][6];
			$resultados["direccion"] = $lines[$varincrem][7];
			$resultados["latitud"] = $lines[$varincrem][8];
			$resultados["longitud"] = $lines[$varincrem][9];
				
			//Poblamos el arreglo de resultados
			$regreso[]=$resultados;
		}
		
	}//Cerramos el While
	
	//Imprimimos el valor de los resultados fuera de cualquier ciclo de lo contrario no se muestra el resultado
	echo json_encode ($regreso);
	
	//cerramos el documento
	fclose($fp);
	
?>