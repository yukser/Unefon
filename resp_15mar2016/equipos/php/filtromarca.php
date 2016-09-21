<?php
	header("access-control-allow-origin: *");
	
	//variable de incremento
	$varincrem = -1;
	
	$marca= $_GET["lamarca"];
	
	$lines=array();
	
	//variable de arreglo de resultados
	$resultados=array();
	
	$fp=fopen('../bd/bdequipos.txt', 'r');
	
	while (!feof($fp))
	{
		$line=fgets($fp);
	
		//De toda la linea del string la dividimos por pipes para que los string cortados sean los elementos del arreglo
		$line = explode("|", $line);
		
		//Agregamos todos los elementos al arreglo
		$lines[]=$line;
		
		$varincrem = $varincrem + 1;
		
		if($lines[$varincrem][21]==1 && $lines[$varincrem][2]==$marca){
			$resultados["id"] = $lines[$varincrem][0];
			$resultados["equipo"] = $lines[$varincrem][1];
			$resultados["marca"] = $lines[$varincrem][2];
							
			$regreso[]=$resultados;
		}
		
	}//Cerramos el While
	
	
	echo json_encode ($regreso);
	
	//cerramos el documento
	fclose($fp);
?>