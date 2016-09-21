/*=====================================
		INICIO DEL DOCUMENTO
======================================*/
$(document).ready(function(){
	
	var ctaLayer;
	var mapacober;
	
	iniciaMapa(19.390519, -99.4238064);
	
	//Seleccion de estado
	$("#ddm_estado").change(function(){
		var valestado = $("#ddm_estado option:selected").html();
		var geoestcoder = valestado + ", Mexico";
		
		geocodeAddress(geoestcoder);
		
	});
	
	
	$("#btn_geocoder").click(function() {
		var valtxtcp = $("#txt_cp").val();
		
		//generamos la variable de busqueda del geocoder
		geoCPcoder = valtxtcp+", Mexico";
		
		geocodeAddress(geoCPcoder);
		
	});	
	
	$("#txt_cp").keydown(function(event) {
		solo_numeros(event);
	});
	
});

/*=====================================
		FUNCIONES
======================================*/

//EL MAPA POR CODIGO POSTAL
function iniciaMapa(latitud, longitud) {
  	var elzoomz;
	
	//detectamos la longitud principal para darle un zoom menor si es el mapa de mexico
	if(latitud==19.390519 && longitud ==-99.4238064){
		elzoomz =9;
	}else{
		elzoomz = 10;
	}
	
	//Obtenemos las coordenadas para el marker del mapa  
	var myLatLng = new google.maps.LatLng(latitud, longitud);
		
	//Generamos el mapa con la latitud y longitud
	var mapOptions = {
		zoom: elzoomz,
		disableDefaultUI: false,
		center: myLatLng,
		mapTypeControl: false,
		keyboardShortcuts: false,
		scrollwheel: false
	};
	
	//agregamos al mapa las caracteristicas del zoom y latitud	
	mapacober = new google.maps.Map(document.getElementById('mapal'), mapOptions);
	
	//ctaLayer = new google.maps.KmlLayer('https://www.tiendaiusacell.com.mx/media/cobers_iusa.kmz',{preserveViewport: true, clickable: false});
	//ctaLayer = new google.maps.KmlLayer('https://www.att.com.mx/media/cobers_iusa.kmz',{preserveViewport: true, clickable: false});
	ctaLayer = new google.maps.KmlLayer('http://www.unefon.com.mx/cobertura/cobers_unefon.kmz',{preserveViewport: true, clickable: false});
	
	ctaLayer.setMap(mapacober);
	
	// Limite del zoom
	google.maps.event.addListener(mapacober, 'zoom_changed', function() {
		if (mapacober.getZoom() < 9){
			mapacober.setZoom(9);
		}
	});

}

//FUNCION SETEA TODOS LOS KML'S
function setMapOnAll(map) {
	for (var i = 0; i < markers.length; i++) {	
		markers[i].setMap(map);
	}
	markers = [];
}

function solo_numeros(evento) {
	if ( $.inArray(evento.keyCode,[46,8,9,27,13,190]) !== -1 || (evento.keyCode >= 35 && evento.keyCode <= 39)) {
		return;	
	}

	else{
		if (evento.shiftKey || (evento.keyCode < 48 || evento.keyCode > 57) && (evento.keyCode < 96 || evento.keyCode > 105 )) {
			evento.preventDefault();	
		}
	}

}

function geocodeAddress(elcodpost) {
	var elgeocoder = new google.maps.Geocoder();
	
	elgeocoder.geocode({'address': elcodpost}, function(results, status) {
		if (status === google.maps.GeocoderStatus.OK) {
			latitudx=results[0].geometry.location.lat();
			longitudx= results[0].geometry.location.lng();
			
			iniciaMapa(latitudx,longitudx);
		}
	});
}
