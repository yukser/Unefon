! function(s) {
    s.fn.jPushMenu = function(o) {
        var t = s.extend({}, s.fn.jPushMenu.defaultOptions, o);
        s("body").addClass(t.pushBodyClass), s(this).addClass("jPushMenuBtn"), s(this).click(function(o) {
            o.stopPropagation();
            var e = "",
                l = "";
            s(this).is("." + t.showLeftClass) ? (e = ".cbp-spmenu-left", l = "toright") : s(this).is("." + t.showRightClass) ? (e = ".cbp-spmenu-right", l = "toleft") : s(this).is("." + t.showTopClass) ? (e = ".cbp-spmenu-top", l = "totop") : s(this).is("." + t.showBottomClass) && (e = ".cbp-spmenu-bottom"), "" != e && (s(this).toggleClass(t.activeClass), s(e).toggleClass(t.menuOpenClass), s(this).is("." + t.pushBodyClass) && "" != l && s("body").toggleClass(t.pushBodyClass + "-" + l))
        });
        var e = {
            close: function(o) {
                s(".jPushMenuBtn,body,.cbp-spmenu").removeClass("disabled " + o.activeClass + " " + o.menuOpenClass + " " + o.pushBodyClass + "-toleft " + o.pushBodyClass + "-toright" + o.pushBodyClass + "-totop")
            }
        };
        t.closeOnClickOutside && s(".wrapper").click(function() {
            e.close(t), s("body").removeClass("push-body-totop")
        }), t.closeOnClickLink && s(".menu-close").on("click", function() {
            e.close(t), s("body").removeClass("push-body-totop")
        })
    }, s.fn.jPushMenu.defaultOptions = {
        pushBodyClass: "push-body",
        showLeftClass: "menu-left",
        showRightClass: "menu-right",
        showTopClass: "menu-top",
        showBottomClass: "menu-bottom",
        activeClass: "menu-active",
        menuOpenClass: "menu-open",
        closeOnClickOutside: !0,
        closeOnClickLink: !0
    }
}(jQuery);