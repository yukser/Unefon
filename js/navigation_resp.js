!function(n){n.fn.menumaker=function(i){var s=n(this),e=n.extend({title:"Menu",format:"dropdown",sticky:!1},i);return this.each(function(){return s.prepend('<div id="menu-button"><a class="mobile-menu-icon bar-icon"><i class="fa fa-bars"></i></a></div>'),n(this).find("#menu-button").on("click",function(){n(this).toggleClass("menu-opened");var i=n(this).next("ul");i.hasClass("open")?i.hide().removeClass("open"):(i.show().addClass("open"),"dropdown"===e.format&&i.find("ul").show())}),s.find("li ul").parent().addClass("nav-has-sub"),multiTg=function(){s.find(".nav-has-sub").prepend('<span class="submenu-button"></span>'),s.find(".submenu-button").on("click",function(){n(this).toggleClass("submenu-opened"),n(this).siblings("ul").hasClass("open")?n(this).siblings("ul").removeClass("open").hide():n(this).siblings("ul").addClass("open").show()})},"multitoggle"===e.format?multiTg():s.addClass("dropdown"),e.sticky===!0&&s.css("position","fixed"),resizeFix=function(){n(window).width()>991&&s.find("ul").show(),n(window).width()<=991&&s.find("ul").hide().removeClass("open")},resizeFix(),n(window).on("resize",resizeFix)})}}(jQuery),function(n){n(document).ready(function(){n(".navigation").menumaker({title:"Menu",format:"multitoggle"})})}(jQuery);

/**/
var incremento = -1;
	
	/*$(document).keydown(function(event) {
		var keycode = (event.keyCode ? event.keyCode : event.which);
		if(keycode == '9') {
		
			
			//quitamos la clase de todos los elementos
			$("*").removeClass("accesqua");
			
			incremento +=1
			
			var allAnchors = $(".aaction").eq(incremento).attr('id') != undefined ? $('.aaction').eq(incremento).attr('id') : $('.clikeable a').eq(incremento=0).attr('id');
						
			var element= "#"+allAnchors.toString();
			
			if (element.indexOf("#.") >= 0) {
				element=element.replace("#.", ".");
				console.log(element);
			}
			
			$(element).focus();
			
			//console.log(element);
			
			$(element).children().addClass("accesqua");
									
			
		return false;
		}
	});*/
	
	
	
			/*$(document).ready(function() {
                $( "*" ).focus(function(event) {
                    
					//console.log($(this).get(0).id);
					
					$idobjeto = $(this).get(0).id;
					$tipoobjeto = $(this).get(0).tagName;
					$hijoobjeto = $(this).children()[0]; 
					$tipohijoobj = $hijoobjeto.tagName;
					$padreobj =  $(this).parent()[0];
					$padreclaseobj = $(this).parent().attr('class');
					
                    $("*").removeClass("accesqua");
					$("*").removeClass("subclase");
					
					if($padreclaseobj == "nav-has-sub"){
						$('#test').addClass('subclase');
					}
					
					//$(this).trigger('click')
									                    
					//console.log($padreclaseobj);
					
					//$(this).bind("focus", function(event) { console.log(event.type); });
					
					if($tipohijoobj == "I" || $tipohijoobj == "SPAN" || $tipohijoobj == "IMG" ){
						$(this).children().addClass("accesqua");
                        return;
					}
					
					
					
					if($idobjeto.substring(0, 3) == 'par'){

                        $(this).parent().addClass("accesqua");

                        return;
                    }
                    if($tipoobjeto == "INPUT"){
                        $(this).addClass("accesqua");
                        return;
                    }
                        $(this).addClass("accesqua");
                         
                });
            });	*/
			
			
/**/