<?php 
	
	/*header("access-control-allow-origin: *");
	
	$conn = oci_connect("system", "oracle", "127.0.0.1:1521/orcl");
  	
	//Definimos las variables de entrada
	$id= $_GET["id"];
  	$sinregreso= "vacio";
  
 	if (!$conn){
		$e = oci_error();
    	echo "Error de conexión: ".$e['message'];
	}
	else {
    			
		$sql = "SELECT cadena, colonia, direccion, latitud, longitud FROM store_locator where id= ".$id."";
		$rsItems = oci_parse($conn, $sql);
		oci_execute($rsItems, OCI_DEFAULT);
		
		//Revisamos que no tenga errores el query
		if (!$execute)
		$sinregreso= "Error en Query";
		
		//Definimos la variable del arreglo 
		$items = array();
		
		//Consumimos el primer parse para contar el numero de registros				
		$numreg = oci_fetch_all($rsItems, $res);
		//echo $numreg;
		
		//Ejecutamos de nuevo para obtener valores
		oci_execute($rsItems, OCI_DEFAULT);
		
		if($numreg > 0)
		{
			while(($row = oci_fetch_assoc($rsItems))) {
				$items[] = $row;
			}
			echo json_encode ($items);
		}else{
			echo json_encode ($sinregreso);		
		}
		
 	}
	
	oci_free_statement($rsItems);
	oci_close($conn);*/
	
?>