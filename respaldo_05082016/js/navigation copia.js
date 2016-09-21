! function(n) {
    n.fn.menumaker = function(i) {
        var s = n(this),
            e = n.extend({
                title: "Menu",
                format: "dropdown",
                sticky: !1
            }, i);
        return this.each(function() {
            return s.prepend('<div id="menu-button"><a class="mobile-menu-icon bar-icon"><i class="fa fa-bars"></i></a></div>'),
								n(this).find("#menu-button").on("click", function() {
                	n(this).toggleClass("menu-opened");
                	var i = n(this).next("ul");
                	i.hasClass("open") ? i.hide().removeClass("open") : (i.show().addClass("open"),

									"dropdown" === e.format && i.find("ul").show())
            		}),

								s.find("li ul").parent().addClass("nav-has-sub"), multiTg = function()
								{

									s.find(".nav-has-sub").children('a').append('<span class="submenu-button"></span>'),



									s.find(".nav-has-sub a").on("click", function() {
	                    n(this).toggleClass("submenu-opened"),

											n(this).siblings("ul").hasClass("open") ? n(this).siblings("ul").removeClass("open").hide() : n(this).siblings("ul").addClass("open").show()

	                })
								},

								"multitoggle" === e.format ? multiTg() : s.addClass("dropdown"), e.sticky === !0 && s.css("position", "fixed"), resizeFix = function() {

								n(window).width() > 991 && s.find("ul").show(), n(window).width() <= 991 && s.find("ul").hide().removeClass("open")

						}, resizeFix(), n(window).on("resize", resizeFix)
        })

    }

}(jQuery),
function(n) {
    n(document).ready(function() {
        n(".navigation").menumaker({
            title: "Menu",
            format: "multitoggle"
        })
    })
}(jQuery);

/*var incremento = -1;

	$(document).keydown(function(event) {
		var keycode = (event.keyCode ? event.keyCode : event.which);

    if(keycode == ){

    }

/*
		if(keycode == '9') {


			//quitamos la clase de todos los elementos
			$("*").removeClass("accesqua");

			incremento +=1

			var allAnchors = $(".aaction").eq(incremento).attr('id') != undefined ? $('.aaction').eq(incremento).attr('id') : $('.clikeable a').eq(incremento=0).attr('id');
			console.log(allAnchors);
			console.log(incremento);
			var element= "#"+allAnchors.toString();

			if (element.indexOf("#.") >= 0) {
				element=element.replace("#.", ".");
				console.log(element);
			}

			$(element).focus();

			console.log(element);

			$(element).children().addClass("accesqua");


		return false;
		}

	});
  */


  $(document).ready(function(){

    var active = 0;

    $(".linem").focus(function(event){
      var li = $(".down").parent('li');
      if(li.hasClass('open')){
        li.removeClass("open");
        active = 0;
      }
  	});


    $(".down").focus(function(event){
      console.log("Activo: "+active);
      if(active==1){
        var li = $(".down").parent('li');
        if(li.hasClass('open')){
          li.removeClass("open");
          active = 0;
        }
      }
      var keycode = event.which;
      var element = $(this);
      var li = element.parent('li');
      li.attr("class");
      if(li.hasClass('open')){
        li.removeClass("open");
        active = 0;
      }else{
        li.addClass("open");
        active = 1;
      }

  	});
  });
