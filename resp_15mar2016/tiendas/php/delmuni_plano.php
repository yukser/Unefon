<?php

	header("access-control-allow-origin: *");
	
	$iddeestado= $_GET["idestado"];
	//$iddeestado=9;
	
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
		if(trim($lines[$varincrem][2])==$iddeestado){
			//echo "Si cumplo, delegación: ".$lines[$varincrem][5]."_<br/>";
			
			$resultados[] = $lines[$varincrem][4];
			
			//ordenamos los elementos del arreglo de a-z
			sort($resultados);	
		}
		
	}//Cerramos el While
	
	//Recorremos el arreglo quitando los duplicados y poniendo antes todo en mayusculas para revisar duplicados
	foreach(array_unique(array_map("strtoupper", $resultados)) as $valor) {
		//echo $valor.'<br/>';
		$regreso[]=$valor;
	}
	
	//Ya limpio el arreglo solo con los valores lo mandamos a imprimir y de regreso al documento (cuando se imprimia por el for de arriba no mostraba nada)
	//echo json_encode ($regreso, JSON_FORCE_OBJECT);
	echo json_encode ($regreso);
	
	//cerramos el documento
	fclose($fp);


?>