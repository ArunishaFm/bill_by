/*!
 * A custom plugin for the Responsive Navigation by sunny bhagat
 * Feel Free to change and do follow me for more changes in the navigation:
 * Author: Sunny Bhagat
 * Bio: PHP developer with expertise knowlege of jquery, css, html and CMS
 * Facebook: http://facebook.com/sunnykr78
 * Twitter: http://twitter.com/sunnykr78
 * Linkedin: https://in.linkedin.com/in/sunnybhagat
 *
 * Note: Don't replace anything till you know what you are doing for the better functionality.
 */
var position = "#navigation";
! function(e) {
    "use strict";
    e.fn.slimNav_sk78 = function(i) {
        var s = { slimNav_sk78Target: jQuery(this), slimNav_sk78Container: position, slimNav_sk78Close: "X", slimNav_sk78CloseSize: "18px", slimNav_sk78Open: "<span /><span /><span />", slimRevealPosition: "right", slimRevealPositionDistance: "0", slimRevealColour: "", slimScreenWidth: "1023", slimNavPush: "", slimShowChildren: !0, slimExpandableChildren: !0, slimExpand: "+", slimContract: "-", slimRemoveAttrs: !1, onePage: !1, slimDisplay: "block", removeElements: "" };
        i = e.extend(s, i);
        var l = window.innerWidth || document.documentElement.clientWidth;
        return this.each(function() {
            var e = i.slimNav_sk78Target,
                s = i.slimNav_sk78Container,
                t = i.slimNav_sk78Close,
                n = i.slimNav_sk78CloseSize,
                a = i.slimNav_sk78Open,
                r = i.slimRevealPosition,
                m = i.slimRevealPositionDistance,
                o = i.slimRevealColour,
                u = i.slimScreenWidth,
                v = i.slimNavPush,
                c = ".slimNav_sk78-reveal",
                h = i.slimShowChildren,
                d = i.slimExpandableChildren,
                y = i.slimExpand,
                j = i.slimContract,
                Q = i.slimRemoveAttrs,
                f = i.onePage,
                g = i.slimDisplay,
                p = i.removeElements,
                k = !1;
            (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/Blackberry/i) || navigator.userAgent.match(/Windows Phone/i)) && (k = !0), (navigator.userAgent.match(/MSIE 8/i) || navigator.userAgent.match(/MSIE 7/i)) && jQuery("html").css("overflow-y", "scroll");
            var C = "",
                w = function() {
                    if ("center" === r) {
                        var e = window.innerWidth || document.documentElement.clientWidth,
                            i = e / 2 - 22 + "px";
                        C = "left:" + i + ";right:auto;", k ? jQuery(".slimNav_sk78-reveal").animate({ left: i }) : jQuery(".slimNav_sk78-reveal").css("left", i)
                    }
                },
                N = !1,
                _ = !1;
            "right" === r && (C = "right:" + m + ";left:auto;"), "left" === r && (C = "left:" + m + ";right:auto;"), w();
            var x = "",
                A = function() { x.html(jQuery(x).is(".slimNav_sk78-reveal.slimclose") ? t : a) },
                E = function() { jQuery(".slim-bar,.slim-push").remove(), jQuery(s).removeClass("slim-container"), jQuery(e).css("display", g), N = !1, _ = !1, jQuery(p).removeClass("slim-remove") },
                P = function() {
                    var i = "background:" + o + ";color:" + o + ";" + C;
                    if (u >= l) {
                        jQuery(p).addClass("slim-remove"), _ = !0, jQuery(s).addClass("slim-container"), jQuery(".slim-container").prepend('<div class="slim-bar"><a href="#nav" class="slimNav_sk78-reveal" style="' + i + '">Show Navigation</a><nav class="slim-nav"></nav></div>');
                        var t = jQuery(e).html();
                        jQuery(".slim-nav").html(t), Q && jQuery("nav.slim-nav ul, nav.slim-nav ul *").each(function() { jQuery(this).is(".slim-remove") ? jQuery(this).attr("class", "slim-remove") : jQuery(this).removeAttr("class"), jQuery(this).removeAttr("id") }), jQuery(e).before('<div class="slim-push" />'), jQuery(".slim-push").css("margin-top", v), jQuery(e).hide(), jQuery(".slimNav_sk78-reveal").show(), jQuery(c).html(a), x = jQuery(c), jQuery(".slim-nav ul").hide(), h ? d ? (jQuery(".slim-nav ul ul").each(function() { jQuery(this).children().length && jQuery(this, "li:first").parent().append('<a class="slim-expand" href="#" style="font-size: ' + n + '">' + y + "</a>") }), jQuery(".slim-expand").on("click", function(e) { e.preventDefault(), jQuery(this).hasClass("slim-clicked") ? (jQuery(this).text(y), jQuery(this).prev("ul").slideUp(300, function() {})) : (jQuery(this).text(j), jQuery(this).prev("ul").slideDown(300, function() {})), jQuery(this).toggleClass("slim-clicked") })) : jQuery(".slim-nav ul ul").show() : jQuery(".slim-nav ul ul").hide(), jQuery(".slim-nav ul li").last().addClass("slim-last"), x.removeClass("slimclose"), jQuery(x).click(function(e) { e.preventDefault(), N === !1 ? (x.css("text-align", "center"), x.css("text-indent", "0"), x.css("font-size", n), jQuery(".slim-nav ul:first").slideDown(), N = !0) : (jQuery(".slim-nav ul:first").slideUp(), N = !1), x.toggleClass("slimclose"), A(), jQuery(p).addClass("slim-remove") }), f && jQuery(".slim-nav ul > li > a:first-child").on("click", function() { jQuery(".slim-nav ul:first").slideUp(), N = !1, jQuery(x).toggleClass("slimclose").html(a) })
                    } else E()
                };
            k || jQuery(window).resize(function() { l = window.innerWidth || document.documentElement.clientWidth, l > u, E(), u >= l ? (P(), w()) : E() }), jQuery(window).resize(function() { l = window.innerWidth || document.documentElement.clientWidth, k ? (w(), u >= l ? _ === !1 && P() : E()) : (E(), u >= l && (P(), w())) }), P()
        })
    }
}(jQuery);