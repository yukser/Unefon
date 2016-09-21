/* Funcines de Store locator  de UNEFON
Por Rene Delgadillo*/

//super variables globales

var valtxtcp ="";
var geocpcoder ="";
var geocoder ="";

$(document).ready(function(){
	
	initMapPostal(23.3644611, -101.2117282)
			
	//El primer (Selecciona estado) combo lo colocamos al cargar la pagina siempre en su primer option.
	$("#ddm_estado").prop('selectedIndex',0);
	
	//vaciamos el inputbox al inicio
	$("#txt_cp").val("");
		
	//revisa si es mobile
	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};
 	
	//if( isMobile.any() ) alert('Mobile');
	//if( isMobile.iOS() ) alert('iOS');

	//Resolucion de Pantalla
	var heightpan = screen.height;
	var widthpan = screen.width;
	
	//alert(width + " X " + height);
		
		
    //Definimos las variables GLOBALES del document ready	
	var idenestado="";
	var tumunucipio="";
	var map2="";
	
	//Primer seleccion		
	$("#ddm_estado").change(function(){
		
		//aparecemos el ultimo combo de seleccion
		$('#nombretienda, #map, .desp_1, .desp_2, .desp_3, #lbl_tienda').fadeIn("fast");
		//$('#nombretienda').fadeIn("fast");
		
		$('#menucadena').fadeOut("fast");
				
		//vaciamos el contenido del label
		$('#txt_cp').val("");
		
		//sacamos el mapa
		$('#map').fadeOut("fast");
		
		//limpiamos los tres combos
		$("#municipio option").remove();
		$("#municipio").append("<option value=ninguno selected=selected disabled=disabled>-- Selecciona Delegacion/Municipio --</option>");
		
		$("#tienda option").remove();
		$("#tienda").append("<option value=ninguno selected=selected disabled=disabled>-- Selecciona Tienda --</option>");
		
		$("#nombretienda option").remove();
		$("#nombretienda").append("<option value=ninguno selected=selected disabled=disabled>-- Selecciona especifica --</option>");
					
		idenestado = $(this).val();
		
		$.getJSON("php/delmuni_plano.php",{ idestado:idenestado }, function(data){
			
			$.each(data, function(index, op) {
				
				var delmuniL=op.toLowerCase();
				delmuni=op;
				//alert(delmuni);
				
				$("#municipio").append("<option value=\""+delmuni+"\">"+letraCapital(delmuniL)+"</option>");
				//$("#poblaciones option[value="+delmuni+"]").remove();
			});
						
			return false;
			
		});//cerramos json del estado

	});//Cerramos el evento change de estado
	
	//Segunda Seleccion
	$("#municipio").change(function rene(){
		
		tumunucipio = $(this).val();
				
		var centro;
		
		//quitamos todas las pestañas del menu de tiendas
		$('#menucadena').empty();
		
		//Aparecemos el ultimo combo de selección
		$('#nombretienda').fadeIn("fast");
		
		//vaciamos el contenido del label
		$('#lbl_tienda').empty();
		
		//sacamos el mapa
		$('#map').fadeOut("fast");
		
		$("#tienda option").remove();
		$("#tienda").append("<option value=ninguno selected=selected disabled=disabled>-- Selecciona Tienda --</option>");
		
		$("#nombretienda option").remove();
		$("#nombretienda").append("<option value=ninguno selected=selected disabled=disabled>-- Selecciona especifica --</option>");
				
		//aparecemos el menu de seleccion de tiendas
		$("#menucadena").fadeIn("fast");
		
		$("#map2").fadeIn("fast");
		
		//Generamos la variable de los infowindows				
		var infowindow = new google.maps.InfoWindow();
		
		
		jQuery.getJSON('https://maps.googleapis.com/maps/api/geocode/json?address='+tumunucipio+"+"+$("#ddm_estado option:selected").html()+'+MX', null, function (data) {
      		
			centro = data.results[0].geometry.location;	
				
			$.getJSON("php/tienda_plano.php",{ muni:tumunucipio }, function(data){
				
				
				//Generamos el mapa con la latitud y longitud
				var mapOptions = {
					zoom: 12,
					disableDefaultUI: false,
					center: new google.maps.LatLng(centro)
				};
												
				//Agregamos al mapa las caracteristicas del zoom y latitud	
				var map2 = new google.maps.Map(document.getElementById('map2'), mapOptions);			
				
				//contadorES
				var ibodega = 0;
				var icoppel = 0;
				var ichedraui = 0;
				var ielektra = 0;
				var ifamsa = 0;
				var isuburbia = 0;
				var iwaltmart = 0;
				
				$.each(data, function(index, op) {
				
					var contentString = "";
					var myLatLngcp ="";
					var idtienda = "";
					var cedenacom = "";
					var colonias = "";
					var direccion = "";
					var latitud = "";
					var longitud = "";
										
					idtienda = op.id;
					cedenacom = op.cadena;
					colonias = op.colonia;
					direccion = op.direccion;
					latitud = op.latitud;
					longitud = op.longitud;
					
					//llenamos los contadores con la cantidad de tiendas que se encuentran
					if(cedenacom=="BODEGA AURRERA"){
						ibodega+=1;
					}
					
					if(cedenacom=="COPPEL"){
						icoppel+=1;
					}
					
					if(cedenacom=="CHEDRAUI"){
						ichedraui+=1;
					}
					
					if(cedenacom=="ELEKTRA"){
						ielektra+=1;
					}
					
					if(cedenacom=="FAMSA"){
						ifamsa+=1;
					}
					
					if(cedenacom=="SUBURBIA"){
						isuburbia+=1;
					}
					
					if(cedenacom=="WALMART"){
						iwaltmart+=1;
					}
					
											
					//Generamos variable de los markers
					var myLatLngcp = new google.maps.LatLng(latitud, longitud);
				
					contentString = '<div id="content">'+
					'<div id="siteNotice">'+
					'</div>'+
					'<h3 id="firstHeading" class="firstHeading">'+cedenacom+'</h3>'+
					'<div id="bodyContent">'+
					'<p>'+direccion+'</p>'+
					'</div>'+
					'</div>';
				  
					//Poblamos con pines
					var marker = new google.maps.Marker({
						position: myLatLngcp,
						map: map2,
						title: cedenacom,
						animation: google.maps.Animation.DROP
					});	
										
					google.maps.event.addListener(marker, "click", function (e) {
						infowindow.setContent(contentString);
						infowindow.open(map2, marker);
					});
					
					google.maps.event.addListener(map2, 'click', function() {
						infowindow.close();
						marker.open = false;
					});
					
					
				});//cerramos el each
				
				//agregamos (si existe) la pastaña del menu de tienda de todas (SIEMPRE DEBE DE EXISTIR EN EL MENU DE PESTAÑAS DE TIENDAS)				
				if( $("#tabtodas_combo").length ) { 
					//alert("ya existe");				 
				}else{
					$('#menucadena').append('<div id="tabtodas_combo" class="btnpestana pestanascp centrartotal">Todas</div>');
				}
				
				//fuera del for revisamos si los contadores encontraron almenos una tienda en la busqueda para imprimir su pestaña
				if(ibodega > 0){
					//alert("Numero de bodegas encontradas: "+ibodega);
					if( $("#tabbodega_combo").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabbodega_combo" class="btnpestana pestanascp centrartotal">Bodega Aurrera</div>');
					}
				}
				if(icoppel > 0){
					//alert("Numero de COPPELS encontrados: "+icoppel);										
					if( $("#tabcoppel_combo").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabcoppel_combo" class="btnpestana pestanascp centrartotal">Coppel</div>');
					}
				}
				if(ichedraui > 0){
					//alert("Numero de CHEDRAUIS encontrados: "+ichedraui);
					if( $("#tabchedraui_combo").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabchedraui_combo" class="btnpestana pestanascp centrartotal">Chedraui</div>');
					}
				}				
				if(ielektra > 0){
					//alert("Numero de ELEKTRAS encontrados: "+ielektra);
					if( $("#tabelektra_combo").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabelektra_combo" class="btnpestana pestanascp centrartotal">Elektra</div>');
					}
				}
				if(ifamsa > 0){
					//alert("Numero de fAMSAS encontrados: "+ifamsa);
					if( $("#tabFamsa_combo").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabFamsa_combo" class="btnpestana pestanascp centrartotal">Famsa</div>');
					}
				}
				if(isuburbia > 0){
					//alert("Numero de SUBURBIAS encontrados: "+isuburbia);					
					if( $("#tabsuburbia_combo").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabsuburbia_combo" class="btnpestana pestanascp centrartotal">Suburbia</div>');
					}
				}
				if(iwaltmart > 0){
					//alert("Numero de WALTMART encontrados: "+iwaltmart);
					if( $("#tabwaltmart_combo").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabwaltmart_combo" class="btnpestana pestanascp centrartotal">Waltmart</div>');
					}
				}			
			
			});//cerramos json del estado	
				
		});//cerramos el json de la busqueda del centro
		
	});//cerramos segunda seleccion
		
	//Tercera seleccion
	$("#tienda").change(function(){
		//vaciamos el contenido del label
		$('#lbl_tienda').empty();
				
		//aparecemos el ultimo combo de seleccion
		$('#nombretienda').fadeIn("fast");
		
		var tucadenacomercial=$(this).val();
		
		//limpiamos
		$("#nombretienda option").remove();
		$("#nombretienda").append("<option value=ninguno selected=selected disabled=disabled>-- Selecciona especifica --</option>");
					
		$.getJSON("php/direcciones_plano.php",{ estadoid:idenestado, cadmuni:tumunucipio, lacadena:tucadenacomercial }, function(data){
			
			//Variable que muestra la cantidad de elementos de la consulta
			var noelementos=data.length;
			
			$.each(data, function(index, op) {
				
				idtienda = op.id;
				cedenacom = op.cadena;
				colonias = op.colonia;
				direccion=op.direccion;
				latitud=op.latitud;
				longitud=op.longitud;
				
				//initMap();
				
				elmapita='<div id="map"></div>';
				
				if(noelementos > 1){
					//vaciamos el contenido del label
					$('#lbl_tienda').empty();
					
					//sacamos el mapa
					$('#map').fadeOut("fast");
					
					//Mostramos el combo 4 y lo poblamos si se tiene mas de una opcion para seleccinar tienda
					$('#nombretienda').fadeIn("fast");
					$("#nombretienda").append("<option value=\""+idtienda+"\">"+cedenacom+" - "+"Col. "+colonias+ " "+direccion+"</option>");
					//elcontenido se muestra hasta la cuarta seleccion
					
				}else{
					//ocultamos el 4 combo direccion de tienadas pues solo tiene una opcion
					initMap(latitud,longitud,cedenacom);
																							
					$('#nombretienda').fadeOut("fast");
					$('#lbl_tienda').append('<label id="lbl_tienda"> <h3>'+cedenacom+'</h3>'+colonias+'<br />'+direccion+'</label><br />');
					$('#map').fadeIn("fast");
					initMap(latitud,longitud, cedenacom);
					
					//Revisamos la resolución de la pantalla, si es de 320px de ancho los divs de busqueda los modificamos para que se vean en botones
					if(widthpan == 320){
						//$("#cajabusquedatienda").fadeOut("fast");
						$("#izsuperior").fadeIn("fast");
						$("#cajamenuoculto").fadeIn("fast");
						$("#cajabusquedatienda").fadeOut("fast");
						$("#cajabusquedacp").fadeOut("fast");
						$("#cajasdemapas").fadeIn("fast");
						initMap(latitud,longitud, cedenacom);
					}
				}					
									
			});
							
			return false;
			
		});//cerramos json de direcciones
		
		
	});//cerramos tercera seleccion
	
	//CUARTA SELECCION
	$("#nombretienda").change(function(){
		//vaciamos el contenido del label
		$('#lbl_tienda').empty();
		
		//el numero de tiena
		idtienda2=$(this).val();
		
		//alert(idtienda2);
		
		//taremos de la base de datos la informacion filtrada por id
		$.getJSON("php/idtienda_plano.php",{ id:idtienda2 }, function(data){
			
			$.each(data, function(index, op) {
				
				//obtenemos los valores de las variables
				cedenacom = op.CADENA;
				colonias = op.COLONIA;
				direccion=op.DIRECCION;
				latitud=op.LATITUD;
				longitud=op.LONGITUD;
				
				$('#lbl_tienda').append('<label id="lbl_tienda"> '+cedenacom+'<br />'+colonias+'<br />'+direccion+'<br /></label><br /><br />');
				
				//mopstramos el mapa
				$('#map').fadeIn("fast");
				
				initMap(latitud,longitud, cedenacom);
				
				if(widthpan == 320){
					$("#izsuperior").fadeIn("fast");
					$("#cajamenuoculto").fadeIn("fast");
					$("#cajabusquedatienda").fadeOut("fast");
					$("#cajabusquedacp").fadeOut("fast");
					$("#cajasdemapas").fadeIn("fast");									
					//$("#cajasdemapas").addClass("muestrame");
					initMap(latitud,longitud, cedenacom);
				}
				
			});
							
			return false;
			
		});//cerramos json de id de tienda
		
				
	});
	
	//Click del boton buscar
	$("#btn_cp").click(function() {
		
		
		//quitamos todas las pestañas del menu de tiendas
		$('#menucadena').empty();
		
		if(widthpan == 320){
			
			$("#izsuperior").fadeIn("fast");
			$("#cajamenuoculto").fadeIn("fast");
			$("#cajabusquedatienda").fadeOut("fast");
			$("#cajabusquedacp").fadeOut("fast");
			$("#cajasdemapas").fadeIn("fast");
			
		}
		
		//seteamos de nuevo el combo de estado a su primera posicion
		$("#ddm_estado").prop('selectedIndex',0);
		//aparecemos el menu de seleccion de tiendas
		$("#menucadena").fadeIn("fast");
		
		//Obtenemos el valor del campo de texto
		valtxtcp = $("#txt_cp").val();
		//generamos la variable de busqueda del geocoder
		geocpcoder = valtxtcp+", Mexico";
		//iniciamos una nueva variabke de geocoder
		geocoder = new google.maps.Geocoder();
		
		var cadenadecomercio="TODAS";
								
		geocodeAddress(geocoder, geocpcoder, cadenadecomercio);
		
		$('#nombretienda, #map, .desp_1, .desp_2, .desp_3, #lbl_tienda').fadeOut("fast");						
					
	});
	
	//Enter en el campo de texto
	$( "#txt_cp" ).keydown(function(event) {
		if(event.keyCode==13){
			
			//quitamos todas las pestañas del menu de tiendas
			$('#menucadena').empty();
			
			if(widthpan == 320){
				
				$("#izsuperior").fadeIn("fast");
				$("#cajamenuoculto").fadeIn("fast");
				$("#cajabusquedatienda").fadeOut("fast");
				$("#cajabusquedacp").fadeOut("fast");
				$("#cajasdemapas").fadeIn("fast");
			}
			
			//seteamos de nuevo el combo de estado a su primera posicion
			$("#ddm_estado").prop('selectedIndex',0);
			//aparecemos el menu de seleccion de tiendas
			$("#menucadena").fadeIn("fast");
			
			//Obtenemos el valor del campo de texto
			valtxtcp = $("#txt_cp").val();
			//generamos la variable de busqueda del geocoder
			geocpcoder = valtxtcp+", Mexico";
			//iniciamos una nueva variabke de geocoder
			geocoder = new google.maps.Geocoder();
			
			var cadenadecomercio="TODAS";
									
			geocodeAddress(geocoder, geocpcoder, cadenadecomercio);
			
			$('#nombretienda, #map, .desp_1, .desp_2, .desp_3, #lbl_tienda').fadeOut("fast");	
		}
	});
	
	//Solo numeros en el campo de codigopostal
	$("#txt_cp").keydown(function(event) {
		if ( $.inArray(event.keyCode,[46,8,9,27,13,190]) !== -1 || (event.keyCode >= 35 && event.keyCode <= 39)) {
			return;	
		}
	
		else{
			if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
				event.preventDefault();	
			}
		}
	
	});
	
	//Click en los botonos de regresar busqueda
	$("#btn_regresabusqueda").click(function(){
		$("#izsuperior").fadeIn("fast");
		$("#cajamenuoculto").fadeIn("fast");
		$("#tienda").prop('selectedIndex',0);
		$("#nombretienda").prop('selectedIndex',0);		
		$("#cajabusquedatienda").fadeIn("fast");
		$("#cajabusquedacp").fadeOut("fast");
		$("#cajasdemapas").fadeOut("fast");
		//$("#cajasdemapas").addClass("ocultame");
				
	});
	
	//
	$("#btn_regresapostal").click(function(){
		$("#ddm_estado").prop('selectedIndex',0);
		$("#izsuperior").fadeIn("fast");
		$("#cajabusquedacp").fadeIn("fast");
		$("#cajabusquedatienda").fadeOut("fast");
		$("#cajasdemapas").fadeOut("fast");
	});
	
	//funcion de reseteo de combos al teclear en el campo de CP
	$("#txt_cp").keypress(function(){
		$('#nombretienda, #map, .desp_1, .desp_2, .desp_3, #lbl_tienda').fadeOut("fast");
		$("#ddm_estado").prop('selectedIndex',0);
	});
	
		
});//cerramos el document .ready

/*
================================================================================================================================

Accion en pestañaS (se hace de esta manera pues el elemento no esta el codigo de inicio, esta apareciendo en tiempo de ejecucion)

================================================================================================================================
*/

//--> PESTAÑA TODAS COMBO
$(document).on('click', '#tabtodas_combo', function() {		
	var delmunic= $("#municipio").val();
	var delfiltro= "TODAS";	
	selectdos(delmunic, delfiltro);
});
//--> PESTAÑA BODEGA AURRERA CP
$(document).on('click', '#tabbodega_combo', function() {	
	var delmunic= $("#municipio").val();
	var delfiltro= "BODEGA AURRERA";	
	selectdos(delmunic, delfiltro);
});

//--> PESTAÑA COPPEL CP
$(document).on('click', '#tabcoppel_combo', function() {
	var delmunic= $("#municipio").val();
	var delfiltro= "COPPEL";
	selectdos(delmunic, delfiltro);
});

//--> PESTAÑA CHEDRAUI CP
$(document).on('click', '#tabchedraui_combo', function() {
	var delmunic= $("#municipio").val();
	var delfiltro= "CHEDRAUI";	
	selectdos(delmunic, delfiltro);
});

//--> PESTAÑA ELEKTRA CP
$(document).on('click', '#tabelektra_combo', function() {	
	var delmunic= $("#municipio").val();
	var delfiltro= "ELEKTRA";	
	selectdos(delmunic, delfiltro);
});

//--> PESTAÑA FAMSA CP
$(document).on('click', '#tabFamsa_combo', function() {	
	var delmunic= $("#municipio").val();
	var delfiltro= "FAMSA";	
	selectdos(delmunic, delfiltro);
});

//--> PESTAÑA SUBURBIA CP
$(document).on('click', '#tabsuburbia_combo', function() {	
	var delmunic= $("#municipio").val();
	var delfiltro= "SUBURBIA";	
	selectdos(delmunic, delfiltro)
});

//--> PESTAÑA WALMART CP
$(document).on('click', '#tabwaltmart_combo', function() {
	var delmunic= $("#municipio").val();
	var delfiltro= "WALMART";	
	selectdos(delmunic, delfiltro)
});

//=======================================================
//--> PESTAÑA TODAS CP
$(document).on('click', '#tabtodas', function() {	
	var cadenadecomercio = "TODAS";				
	geocodeAddress(geocoder, geocpcoder, cadenadecomercio);
});

//--> PESTAÑA BODEGA AURRERA CP
$(document).on('click', '#tabbodega', function() {	
	var cadenadecomercio = "BODEGA AURRERA";				
	geocodeAddress(geocoder, geocpcoder, cadenadecomercio);
});

//--> PESTAÑA COPPEL CP
$(document).on('click', '#tabcoppel', function() {	
	var cadenadecomercio = "COPPEL";				
	geocodeAddress(geocoder, geocpcoder, cadenadecomercio);
});

//--> PESTAÑA CHEDRAUI CP
$(document).on('click', '#tabchedraui', function() {	
	var cadenadecomercio = "CHEDRAUI";				
	geocodeAddress(geocoder, geocpcoder, cadenadecomercio);
});

//--> PESTAÑA ELEKTRA CP
$(document).on('click', '#tabelektra', function() {	
	var cadenadecomercio = "ELEKTRA";				
	geocodeAddress(geocoder, geocpcoder, cadenadecomercio);
});

//--> PESTAÑA FAMSA CP
$(document).on('click', '#tabFamsa', function() {	
	var cadenadecomercio = "FAMSA";				
	geocodeAddress(geocoder, geocpcoder, cadenadecomercio);
});

//--> PESTAÑA SUBURBIA CP
$(document).on('click', '#tabsuburbia', function() {	
	var cadenadecomercio = "SUBURBIA";				
	geocodeAddress(geocoder, geocpcoder, cadenadecomercio);
});

//--> PESTAÑA WALMART CP
$(document).on('click', '#tabwaltmart', function() {	
	var cadenadecomercio = "WALMART";				
	geocodeAddress(geocoder, geocpcoder, cadenadecomercio);
});

/*
==============
 FUNCIONES
=============
*/

//FUNCION QUE EJECUTA LA BUSQUEDA POR MUNICIO FILTRADA

function selectdos(munil, filtrado){
	
	//Variables de recepcion
	var municipioxl="";
	var filtroxl="";	
	
	//Generamos la variable de los infowindows				
	var infowindow = new google.maps.InfoWindow();
	var centro;
	
	var municipioxl=munil;
	var filtroxl=filtrado;	
	
	
	jQuery.getJSON('https://maps.googleapis.com/maps/api/geocode/json?address='+municipioxl+"+"+$("#ddm_estado option:selected").html()+'+MX', null, function (data) {
		
		centro = data.results[0].geometry.location;	
					
		$.getJSON("php/tienda_plano.php",{ muni:municipioxl }, function(data){
				
			//Generamos el mapa con la latitud y longitud
			var mapOptions = {
				zoom: 12,
				disableDefaultUI: false,
				center: new google.maps.LatLng(centro)
			};
											
			//Agregamos al mapa las caracteristicas del zoom y latitud	
			var map2 = new google.maps.Map(document.getElementById('map2'), mapOptions);			
			
			//contadorES
			var ibodega = 0;
			var icoppel = 0;
			var ichedraui = 0;
			var ielektra = 0;
			var ifamsa = 0;
			var isuburbia = 0;
			var iwaltmart = 0;
			
			$.each(data, function(index, op) {
				
				var contentString = "";
				var myLatLngcp ="";
				var idtienda = "";
				var cedenacom = "";
				var colonias = "";
				var direccion = "";
				var latitud = "";
				var longitud = "";
									
				idtienda = op.id;
				cedenacom = op.cadena;
				colonias = op.colonia;
				direccion = op.direccion;
				latitud = op.latitud;
				longitud = op.longitud;
				
				//llenamos los contadores con la cantidad de tiendas que se encuentran
				if(cedenacom=="BODEGA AURRERA"){
					ibodega+=1;
				}
				
				if(cedenacom=="COPPEL"){
					icoppel+=1;
				}
				
				if(cedenacom=="CHEDRAUI"){
					ichedraui+=1;
				}
				
				if(cedenacom=="ELEKTRA"){
					ielektra+=1;
				}
				
				if(cedenacom=="FAMSA"){
					ifamsa+=1;
				}
				
				if(cedenacom=="SUBURBIA"){
					isuburbia+=1;
				}
				
				if(cedenacom=="WALMART"){
					iwaltmart+=1;
				}
				
				if(filtroxl == "TODAS"){						
					//Generamos variable de los markers
					var myLatLngcp = new google.maps.LatLng(latitud, longitud);
				
					contentString = '<div id="content">'+
					'<div id="siteNotice">'+
					'</div>'+
					'<h3 id="firstHeading" class="firstHeading">'+cedenacom+'</h3>'+
					'<div id="bodyContent">'+
					'<p>'+direccion+'</p>'+
					'</div>'+
					'</div>';
				  
					//Poblamos con pines
					var marker = new google.maps.Marker({
						position: myLatLngcp,
						map: map2,
						title: cedenacom,
						animation: google.maps.Animation.DROP
					});	
										
					google.maps.event.addListener(marker, "click", function (e) {
						infowindow.setContent(contentString);
						infowindow.open(map2, marker);
					});
					
					google.maps.event.addListener(map2, 'click', function() {
						infowindow.close();
						marker.open = false;
					});
					
				}else if(filtroxl=="BODEGA AURRERA"){
						
						if(cedenacom== "BODEGA AURRERA"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latitud, longitud);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cedenacom+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+direccion+'</p>'+
							'</div>'+
							'</div>';
						  
							
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cedenacom,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infowindow.setContent(contentString);
								infowindow.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infowindow.close();
								marker.open = false;
							});						
							
						}
					}else if(filtroxl=="COPPEL"){
						//alert("apoco si? "+cadenacomercial);
						if(cedenacom== "COPPEL"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latitud, longitud);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cedenacom+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+direccion+'</p>'+
							'</div>'+
							'</div>';
						  
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cedenacom,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infowindow.setContent(contentString);
								infowindow.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infowindow.close();
								marker.open = false;
							});						
							
						}
					}else if(filtroxl=="CHEDRAUI"){
						
						if(cedenacom== "CHEDRAUI"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latitud, longitud);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cedenacom+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+direccion+'</p>'+
							'</div>'+
							'</div>';
							
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cedenacom,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infowindow.setContent(contentString);
								infowindow.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infowindow.close();
								marker.open = false;
							});						
							
						}
					}else if(filtroxl=="ELEKTRA"){
						//alert("apoco si? "+cadenacomercial);
						if(cedenacom== "ELEKTRA"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latitud, longitud);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cedenacom+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+direccion+'</p>'+
							'</div>'+
							'</div>';
						  
							
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cedenacom,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infowindow.setContent(contentString);
								infowindow.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infowindow.close();
								marker.open = false;
							});						
							
						}
					}else if(filtroxl=="FAMSA"){
						//alert("apoco si? "+cadenacomercial);
						if(cedenacom== "FAMSA"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latitud, longitud);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cedenacom+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+direccion+'</p>'+
							'</div>'+
							'</div>';
						  							
							
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cedenacom,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infowindow.setContent(contentString);
								infowindow.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infowindow.close();
								marker.open = false;
							});						
							
						}
					}else if(filtroxl=="SUBURBIA"){
						//alert("apoco si? "+cadenacomercial);
						if(cedenacom== "SUBURBIA"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latitud, longitud);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cedenacom+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+direccion+'</p>'+
							'</div>'+
							'</div>';
						  
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cedenacom,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infowindow.setContent(contentString);
								infowindow.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infowindow.close();
								marker.open = false;
							});					
							
						}
					}else if(filtroxl=="WALMART"){
						//alert("apoco si? "+cadenacomercial);
						if(cedenacom== "WALMART"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latitud, longitud);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cedenacom+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+direccion+'</p>'+
							'</div>'+
							'</div>';
							
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cedenacom,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infowindow.setContent(contentString);
								infowindow.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infowindow.close();
								marker.open = false;
							});						
							
						}
					}
				
				/////
				
			});//cerramos el each
			
			//agregamos (si existe) la pastaña del menu de tienda de todas (SIEMPRE DEBE DE EXISTIR EN EL MENU DE PESTAÑAS DE TIENDAS)				
			if( $("#tabtodas_combo").length ) { 
				//alert("ya existe");				 
			}else{
				$('#menucadena').append('<div id="tabtodas_combo" class="btnpestana pestanascp centrartotal">Todas</div>');
			}
			
			//fuera del for revisamos si los contadores encontraron almenos una tienda en la busqueda para imprimir su pestaña
			if(ibodega > 0){
				//alert("Numero de bodegas encontradas: "+ibodega);
				if( $("#tabbodega_combo").length ) { 
					//alert("ya existe");				 
				}else{
					$('#menucadena').append('<div id="tabbodega_combo" class="btnpestana pestanascp centrartotal">Bodega Aurrera</div>');
				}
			}
			if(icoppel > 0){
				//alert("Numero de COPPELS encontrados: "+icoppel);										
				if( $("#tabcoppel_combo").length ) { 
					//alert("ya existe");				 
				}else{
					$('#menucadena').append('<div id="tabcoppel_combo" class="btnpestana pestanascp centrartotal">Coppel</div>');
				}
			}
			if(ichedraui > 0){
				//alert("Numero de CHEDRAUIS encontrados: "+ichedraui);
				if( $("#tabchedraui_combo").length ) { 
					//alert("ya existe");				 
				}else{
					$('#menucadena').append('<div id="tabchedraui_combo" class="btnpestana pestanascp centrartotal">Chedraui</div>');
				}
			}				
			if(ielektra > 0){
				//alert("Numero de ELEKTRAS encontrados: "+ielektra);
				if( $("#tabelektra_combo").length ) { 
					//alert("ya existe");				 
				}else{
					$('#menucadena').append('<div id="tabelektra_combo" class="btnpestana pestanascp centrartotal">Elektra</div>');
				}
			}
			if(ifamsa > 0){
				//alert("Numero de fAMSAS encontrados: "+ifamsa);
				if( $("#tabFamsa_combo").length ) { 
					//alert("ya existe");				 
				}else{
					$('#menucadena').append('<div id="tabFamsa_combo" class="btnpestana pestanascp centrartotal">Famsa</div>');
				}
			}
			if(isuburbia > 0){
				//alert("Numero de SUBURBIAS encontrados: "+isuburbia);					
				if( $("#tabsuburbia_combo").length ) { 
					//alert("ya existe");				 
				}else{
					$('#menucadena').append('<div id="tabsuburbia_combo" class="btnpestana pestanascp centrartotal">Suburbia</div>');
				}
			}
			if(iwaltmart > 0){
				//alert("Numero de WALTMART encontrados: "+iwaltmart);
				if( $("#tabwaltmart_combo").length ) { 
					//alert("ya existe");				 
				}else{
					$('#menucadena').append('<div id="tabwaltmart_combo" class="btnpestana pestanascp centrartotal">Waltmart</div>');
				}
			}			
		
		});//cerramos json del estado	
			
	});//cerramos el json de la busqueda del centro
}//cerramos la funcion 

//LETRA CAPITAL
function letraCapital( str ) {
	return str.replace(/^(.)|\s(.)/g, function($1){ 
		return $1.toUpperCase( ); 
	});
}

//EL MAPA
function initMap(latitud, longitud, nombrecadena) {
	var map = "";
	
	//obtenemos las coordenadas para el marker del mapa  
	var myLatLng = new google.maps.LatLng(latitud, longitud);
	
	//Generamos el mapa con la latitud y longitud
	var mapOptions = {
		zoom: 18,
		center: new google.maps.LatLng(latitud, longitud)
	};
	
	//agregamos al mapa las caracteristicas del zoom y latitud	
	map = new google.maps.Map(document.getElementById('map'), mapOptions);
	
	//Generamos el marcador en el mapa
	//var image = 'images/beachflag.png';
	new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: nombrecadena
		//icon: image
	});

}

//EL MAPA POR CODIGO POSTAL
function initMapPostal(latitud, longitud) {
  	
	var elzoomz="";
	//obtenemos las coordenadas para el marker del mapa  
	var myLatLng = new google.maps.LatLng(latitud, longitud);
	
	//detectamos la longitud principal para darle un zoom menor si es el mapa de mexico
	if(latitud==23.3644611 && longitud ==-101.2117282){
		elzoomz =5;
	}else{
		elzoomz = 12;
	}
		
	//Generamos el mapa con la latitud y longitud
	var mapOptions = {
		zoom: elzoomz,
		disableDefaultUI: false,
		center: new google.maps.LatLng(latitud, longitud)
	};
	
	//agregamos al mapa las caracteristicas del zoom y latitud	
	map2 = new google.maps.Map(document.getElementById('map2'), mapOptions);
	
	//Generamos el marcador en el mapa
	/*var image = 'images/cmarker.png';
	new google.maps.Marker({
		position: myLatLng,
		map: map2,
		title: 'Estoy aquí',
		icon: image
	});*/

}


//OBTENEMOS LATITUD Y LONGITUD DEL CODIGO POSTAL
function geocodeAddress(geocoder, elcodpost, filtroCadena) {
	//var address = document.getElementById('address').value;
	
	geocoder.geocode({'address': elcodpost}, function(results, status) {
		if (status === google.maps.GeocoderStatus.OK) {
			
			latitudx=results[0].geometry.location.lat();
			longitudx= results[0].geometry.location.lng();								
			
			//mopstramos el mapa
			$('#map2').fadeIn("fast");
			
			//pintamos el mapa 2con las coordenadas base
			initMapPostal(latitudx,longitudx);
			
			
			//generamos infowindow solo se debe de generar uno pues de lo contrario al hacer click se amontonan las ventanas
			var infoWindows = new google.maps.InfoWindow();				
			
			//Traemos de la base de datos la informacion filtrada por id
			$.getJSON("php/codigopostal_plano.php",{ lati:latitudx, longi: longitudx}, function(data){
				
								
				//contadorES
				var ibodega = 0;
				var icoppel = 0;
				var ichedraui = 0;
				var ielektra = 0;
				var ifamsa = 0;
				var isuburbia = 0;
				var iwaltmart = 0;
				
				$.each(data, function(index, op) {
					
					//obtenemos los valores de las variables
					distanciademi="";
					latcercami="";
					lomgcercami="";
					cadenacomercial="";
					cadenacomercialriecc="";
					
					distanciademi = op.distancia;
					latcercami=op.latitud;
					lomgcercami =op.longitud;
					cadenacomercial= op.cadena;
					cadenacomercialriecc=op.direccion;
					
										
					//llenamos los contadores con la cantidad de tiendas que se encuentran
					if(cadenacomercial=="BODEGA AURRERA"){
						ibodega+=1;
					}
					
					if(cadenacomercial=="COPPEL"){
						icoppel+=1;
					}
					
					if(cadenacomercial=="CHEDRAUI"){
						ichedraui+=1;
					}
					
					if(cadenacomercial=="ELEKTRA"){
						ielektra+=1;
					}
					
					if(cadenacomercial=="FAMSA"){
						ifamsa+=1;
					}
					
					if(cadenacomercial=="SUBURBIA"){
						isuburbia+=1;
					}
					
					if(cadenacomercial=="WALMART"){
						iwaltmart+=1;
					}
					
					//IF que pinta los marcadores en el mapa dependiendo de la pestaña
					
					if(filtroCadena=="TODAS"){
					
						//Generamos variable de los markers
						var myLatLngcp = new google.maps.LatLng(latcercami, lomgcercami);
						
						var contentString = '<div id="content">'+
						'<div id="siteNotice">'+
						'</div>'+
						'<h3 id="firstHeading" class="firstHeading">'+cadenacomercial+'</h3>'+
						'<div id="bodyContent">'+
						'<p>'+cadenacomercialriecc+'</p>'+
						'</div>'+
						'</div>';
						
						//Poblamos con pines
						var marker = new google.maps.Marker({
							position: myLatLngcp,
							map: map2,
							title: cadenacomercial,
							animation: google.maps.Animation.DROP
						});	
						
						google.maps.event.addListener(marker, "click", function (e) {
							infoWindows.setContent(contentString);
							infoWindows.open(map2, marker);
						});
						
						google.maps.event.addListener(map2, 'click', function() {
							infoWindows.close();
							marker.open = false;
						});
					
					
					}else if(filtroCadena=="BODEGA AURRERA"){
						
						if(cadenacomercial== "BODEGA AURRERA"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latcercami, lomgcercami);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cadenacomercial+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+cadenacomercialriecc+'</p>'+
							'</div>'+
							'</div>';
						  
							
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cadenacomercial,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infoWindows.setContent(contentString);
								infoWindows.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infoWindows.close();
								marker.open = false;
							});						
							
						}
					}else if(filtroCadena=="COPPEL"){
						//alert("apoco si? "+cadenacomercial);
						if(cadenacomercial== "COPPEL"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latcercami, lomgcercami);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cadenacomercial+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+cadenacomercialriecc+'</p>'+
							'</div>'+
							'</div>';
						  
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cadenacomercial,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infoWindows.setContent(contentString);
								infoWindows.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infoWindows.close();
								marker.open = false;
							});						
							
						}
					}else if(filtroCadena=="CHEDRAUI"){
						
						if(cadenacomercial== "CHEDRAUI"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latcercami, lomgcercami);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cadenacomercial+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+cadenacomercialriecc+'</p>'+
							'</div>'+
							'</div>';
							
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cadenacomercial,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infoWindows.setContent(contentString);
								infoWindows.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infoWindows.close();
								marker.open = false;
							});						
							
						}
					}else if(filtroCadena=="ELEKTRA"){
						//alert("apoco si? "+cadenacomercial);
						if(cadenacomercial== "ELEKTRA"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latcercami, lomgcercami);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cadenacomercial+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+cadenacomercialriecc+'</p>'+
							'</div>'+
							'</div>';
						  
							
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cadenacomercial,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infoWindows.setContent(contentString);
								infoWindows.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infoWindows.close();
								marker.open = false;
							});						
							
						}
					}else if(filtroCadena=="FAMSA"){
						//alert("apoco si? "+cadenacomercial);
						if(cadenacomercial== "FAMSA"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latcercami, lomgcercami);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cadenacomercial+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+cadenacomercialriecc+'</p>'+
							'</div>'+
							'</div>';
						  							
							
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cadenacomercial,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infoWindows.setContent(contentString);
								infoWindows.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infoWindows.close();
								marker.open = false;
							});						
							
						}
					}else if(filtroCadena=="SUBURBIA"){
						//alert("apoco si? "+cadenacomercial);
						if(cadenacomercial== "SUBURBIA"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latcercami, lomgcercami);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cadenacomercial+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+cadenacomercialriecc+'</p>'+
							'</div>'+
							'</div>';
						  
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cadenacomercial,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infoWindows.setContent(contentString);
								infoWindows.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infoWindows.close();
								marker.open = false;
							});					
							
						}
					}else if(filtroCadena=="WALMART"){
						//alert("apoco si? "+cadenacomercial);
						if(cadenacomercial== "WALMART"){
							
							//Generamos variable de los markers
							var myLatLngcp = new google.maps.LatLng(latcercami, lomgcercami);
							
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h3 id="firstHeading" class="firstHeading">'+cadenacomercial+'</h3>'+
							'<div id="bodyContent">'+
							'<p>'+cadenacomercialriecc+'</p>'+
							'</div>'+
							'</div>';
							
							//Poblamos con pines
							var marker = new google.maps.Marker({
								position: myLatLngcp,
								map: map2,
								title: cadenacomercial,
								animation: google.maps.Animation.DROP
							});	
							
							google.maps.event.addListener(marker, "click", function (e) {
								infoWindows.setContent(contentString);
								infoWindows.open(map2, marker);
							});
							
							google.maps.event.addListener(map2, 'click', function() {
								infoWindows.close();
								marker.open = false;
							});						
							
						}
					}
					
					
				});//cerramos el for
				
				//agregamos (si existe) la pastaña del menu de tienda de todas (SIEMPRE DEBE DE EXISTIR EN EL MENU DE PESTAÑAS DE TIENDAS)				
				if( $("#tabtodas").length ) { 
					//alert("ya existe");				 
				}else{
					$('#menucadena').append('<div id="tabtodas" class="btnpestana pestanascp centrartotal">Todas</div>');
				}				
											
				//fuera del for revisamos si los contadores encontraron almenos una tienda en la busqueda para imprimir su pestaña
				if(ibodega > 0){
					//alert("Numero de bodegas encontradas: "+ibodega);
					if( $("#tabbodega").length >0 ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabbodega" class="btnpestana pestanascp centrartotal">Bodega Aurrera</div>');
					}
				}
				if(icoppel > 0){
					//alert("Numero de COPPELS encontrados: "+icoppel);										
					if( $("#tabcoppel").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabcoppel" class="btnpestana pestanascp centrartotal">Coppel</div>');
					}
				}
				if(ichedraui > 0){
					//alert("Numero de CHEDRAUIS encontrados: "+ichedraui);
					if( $("#tabchedraui").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabchedraui" class="btnpestana pestanascp centrartotal">Chedraui</div>');
					}
				}				
				if(ielektra > 0){
					//alert("Numero de ELEKTRAS encontrados: "+ielektra);
					if( $("#tabelektra").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabelektra" class="btnpestana pestanascp centrartotal">Elektra</div>');
					}
				}
				if(ifamsa > 0){
					//alert("Numero de fAMSAS encontrados: "+ifamsa);
					if( $("#tabFamsa").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabFamsa" class="btnpestana pestanascp centrartotal">Famsa</div>');
					}
				}
				if(isuburbia > 0){
					//alert("Numero de SUBURBIAS encontrados: "+isuburbia);					
					if( $("#tabsuburbia").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabsuburbia" class="btnpestana pestanascp centrartotal">Suburbia</div>');
					}
				}
				if(iwaltmart > 0){
					//alert("Numero de WALTMART encontrados: "+iwaltmart);
					if( $("#tabwaltmart").length ) { 
						//alert("ya existe");				 
					}else{
						$('#menucadena').append('<div id="tabwaltmart" class="btnpestana pestanascp centrartotal">Waltmart</div>');
					}
				}
								
				return false;
				
			});//cerramos json de id de tienda
			
				
		}else {
			alert('Error: ' + status);
		}
		
	});
	
}
