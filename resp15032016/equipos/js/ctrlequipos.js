/* Escrito por Rene Delgadillo
19/02/2016*/

$(document).ready(function(){
	
	//Iniciamos la busqueda de equipos
	cargaEquipos();
	
	//Variable global
	var iddelequipo= "";
	
});

/*======================================
			FUNCIONES
=======================================*/

function cargaEquipos(){
	
	var arrmarca = [];
	var unicamarca;
	
	$.getJSON("php/equiposActivos.php", function(data){
		
		$.each(data, function(index, op) {
			
			var nomequipo="";
			var idequipo="";
			var marcaequipo="";
			var marcaequipo2="";
			var redes="";
			var redes2="";
			var imagenmuestra="";
						
			nomequipo=op.equipo;
			idequipo=op.id;
			marcaequipo=op.marca;
			marcaequipo2=op.marca;
			redes = op.redestec;			
			imagenmuestra=op.imagenpeque;
			
			//Agrupamos todas las marcas en el recorrido del arreglo
			arrmarca.push(marcaequipo);
			
			//Si algun equipo no tiuene imagen desde la base de datos se le asigna una por default
			if(imagenmuestra == ""){
				imagenmuestra="img/equipo_ejemplo.png";
			}
			
			//Filtramos las redes
			if(redes == "2G"){
				redes2 ="2g";
			}else if(redes == "2G/3G"){
				redes2 ="3g";
			}else if(redes == "2G/3G/4G"){
				redes2 ="4g";
			}
			
			//Fichas de los equipos
			$("#fichas-grid").append("<div class='nf-item col-md-4 col-sm-6 col-xs-12 mb-30 nf-item "+marcaequipo2.toLowerCase()+" todos "+redes2+"'>"+
			"<div class='item-box'>"+
			"<div class='shop-item'>"+
			"<div class='item-img'>"+
			"<img src='"+imagenmuestra+"' />"+
			"</div>"+
			"<div class='item-mask'>"+
			"<div class='item-mask-detail'>"+
			"<div class='item-mask-detail-ele'>"+
			"<a href='equipos.php?id="+idequipo+"' class='btn btn btn_promos'><i class='fa fa-search'></i>Ver equipo</a>"+
			"</div>"+
			"</div>"+
			"</div>"+
			"</div>"+
			"<div class='shop-item-info'><a href='shop-detail.html'>"+
			"<h6 class='shop-item-name'>"+marcaequipo+"</h6>"+
			"</a>"+
			"<div class='shop-item-price'><span>"+nomequipo+"</span></div>"+
			"</div>"+
			"</div>"+
			"</div>"
			);
			
		});
		
		//Guardamos en variable el resultado de la funcion de agrupar
		unicamarca = agrupa(arrmarca);
		
		for (var i = 0; i < unicamarca.length; i++) {
			//$("#marca").append("<div id='"+ unicamarca[i] +"' onclick='filtraequipos(this.id)' class='docur'>"+unicamarca[i]+"</div>");
			$("#brandconten").append("<li><a class='categories' data-filter='."+unicamarca[i].toLowerCase()+"'>"+unicamarca[i]+"</a></li>");
		}
		
		$("#brandconten").append("<li><a class='categories' data-filter='*'>Todos</a></li>");
		
		return false;
	});
	
}

//Funcion que recibe un arreglo y regresa un arreglo sin duplicados
function agrupa(list) {	   
    var result = [];   
    $.each(list, function(i, e) {
        if ($.inArray(e, result) == -1){
			result.push(e);
		}
    });	
    return result;	
}