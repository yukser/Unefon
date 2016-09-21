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
			$("#fichas-grid").append("<div class='col-md-4 col-sm-6 col-xs-12 mb-30 "+marcaequipo2.toLowerCase()+" todos "+redes2+"'>"+
			"<div class='item-box '>"+
			"<div class='shop-item'>"+
			"<div class='item-img'>"+
			"<img src='"+imagenmuestra+"' alt='Unefon"+ nomequipo+"' title='Unefon"+ nomequipo+"' />"+
			"</div>"+
			"<div class='item-mask'>"+
			"<div class='item-mask-detail'>"+
			"<div class='item-mask-detail-ele'>"+
			"<a href='equipos.php?id="+idequipo+"' class='btn btn btn_promos' aria-label='Ver equipo' title='Ver equipo'><i class='fa fa-search'></i>Ver equipo</a>"+
			"</div>"+
			"</div>"+
			"</div>"+
			"</div>"+
			"<div class='shop-item-info'>"+
			"<h6 class='shop-item-name'>"+marcaequipo+"</h6>"+
			"<div class='shop-item-price'><span style='color:#333;'>"+nomequipo+"</span></div>"+
			"</div>"+
			"</div>"+
			"</div>"
			);
			
		});
		
		//Guardamos en variable el resultado de la funcion de agrupar
		unicamarca = agrupa(arrmarca);
		
		for (var i = 0; i < unicamarca.length; i++) {
			//$("#marca").append("<div id='"+ unicamarca[i] +"' onclick='filtraequipos(this.id)' class='docur'>"+unicamarca[i]+"</div>");
			//$("#brandconten").append("<li><a class='categories' data-filter='."+unicamarca[i].toLowerCase()+"'>"+unicamarca[i]+"</a></li>");
			$("#brandconten").append("<li><a class='aaction categories' aria-label='"+unicamarca[i]+"' title='"+unicamarca[i]+"' id='."+unicamarca[i].toLowerCase()+"' onclick='filtraequipos(this.id)'><span>"+unicamarca[i]+"</span></a></li>");
		}
		
		$("#brandconten").append("<li><a class='categories' id='todos' onclick='filtraequipos(this.id)' aria-label='Todos' title= 'Todos'>Todos</a></li>");
		
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

function filtraequipos(weaponx){
	//alert(""+elid);
	if(weaponx == ".alcatel"){
		var vialcatel = $(".alcatel").is(":visible");
		
		$(".2g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".3g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".4g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
			
		if(vialcatel == false){
			$(".alcatel").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		}
		$(".huawei").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".lg").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".motorola").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".samsung").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".sony").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".zte").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();	
		$(".htc").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".hisense").hide("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
	}else if(weaponx == ".huawei"){
		var vihuawei = $(".huawei").is(":visible");
		
		$(".2g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".3g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".4g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
			
		if(vihuawei == false){
			$(".huawei").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		}
		$(".alcatel").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".lg").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".motorola").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".samsung").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".sony").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".zte").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".htc").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".hisense").hide("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();	
	}else if(weaponx == ".lg"){
		var vilg = $(".lg").is(":visible");
		
		$(".2g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".3g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".4g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
			
		if(vilg == false){
			$(".lg").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		}
		$(".alcatel").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".huawei").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".motorola").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".samsung").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".sony").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".zte").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".htc").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".hisense").hide("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();		
	}else if(weaponx == ".motorola"){
		var vimotorola = $(".motorola").is(":visible");
		
		$(".2g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".3g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".4g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
			
		if(vimotorola == false){
			$(".motorola").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		}
		$(".alcatel").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".huawei").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".lg").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".samsung").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".sony").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".zte").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".htc").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".hisense").hide("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();		
	}else if(weaponx == ".samsung"){
		var visamsung = $(".samsung").is(":visible");
		
		$(".2g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".3g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".4g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
				
		if(visamsung == false){
			$(".samsung").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		}
		$(".alcatel").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".huawei").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".lg").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".motorola").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".sony").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".zte").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".htc").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".hisense").hide("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();		
	}else if(weaponx == ".sony"){
		var visony = $(".sony").is(":visible");
		
		$(".2g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".3g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".4g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		
		if(visony == false){
			$(".sony").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		}		
		//$(".alcatel").effect( "drop", 600 );
		$(".alcatel").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".huawei").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".lg").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".motorola").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".samsung").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".zte").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".htc").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".hisense").hide("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();	
	}else if (weaponx == ".zte"){
		var vizte = $(".zte").is(":visible");
		
		$(".2g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".3g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".4g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
				
		if(vizte == false){
			$(".zte").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		}
		$(".alcatel").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".huawei").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".lg").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".motorola").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".samsung").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".sony").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".htc").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".hisense").hide("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();		
	}else if (weaponx == ".htc"){
		var vizte = $(".htc").is(":visible");
		
		$(".2g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".3g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".4g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
				
		if(vizte == false){
			$(".htc").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		}
		$(".alcatel").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".huawei").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".lg").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".motorola").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".samsung").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".sony").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".zte").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".hisense").hide("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
	}else if (weaponx == ".hisense"){
		var vizte = $(".hisense").is(":visible");
		
		$(".2g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".3g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		$(".4g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
				
		if(vizte == false){
			$(".hisense").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		}
		$(".alcatel").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".huawei").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".lg").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".motorola").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".samsung").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".sony").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".zte").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".htc").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
	}else if(weaponx == "todos"){
		$(".alcatel").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		$(".huawei").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		$(".lg").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		$(".motorola").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		$(".samsung").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		$(".sony").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		$(".zte").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		$(".htc").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
		$(".hisense").show("blind", { direction: "vertical" }, 1000).fadeIn(1500).dequeue();
	}
	
}

function filtrared(spiderweb){
	if(spiderweb == ".2g"){
		//Desaparecen
		$(".3g").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".4g").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		//Aparece
		$(".2g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		
	}else if(spiderweb == ".3g"){
		//Desaparecen
		$(".2g").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".4g").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		//Aparece
		$(".3g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		
	}else if(spiderweb == ".4g"){
		//Desaparecen
		$(".2g").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		$(".3g").hide("blind", { direction: "vertical" }, 1000).fadeOut(50).dequeue();
		//Aparece
		$(".4g").show("blind", { direction: "vertical" }, 1000).fadeIn(50).dequeue();
		
	}
}