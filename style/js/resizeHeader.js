
$(function(){

    "use strict";
    
    var wid = $(window).width();
        if (wid <= 602){           
            $(".bg-header").addClass("dis-none");
            $(".carousel-inner > .item > img,.carousel-inner > .item > a > img").height($(window).height()/1.5);
        }
        else{
            $(".log").css("display", "none");
            $(".carousel-inner > .item > img,.carousel-inner > .item > a > img").height($(window).height()-50);
        }
   
    $(window).resize(function(){

        var wid = $(window).width();
        if (wid <= 602){           
            $(".bg-header").addClass("dis-none");
            $(".log").css("display", "block");
            $(".carousel-inner > .item > img,.carousel-inner > .item > a > img").height($(window).height()/1.5);
        }
        else{
            $(".bg-header").removeClass("dis-none"); 
            $(".log").css("display", "none");
            $(".carousel-inner > .item > img,.carousel-inner > .item > a > img").height($(window).height()-$('.navbar').height());
        }

    });
 
    /*
    $(window).click(function(){
        if($("div.navbar-collapse").hasClass("in")){
            $("div.navbar-collapse").css("display","none");
        } 
    });
    */
   
   
    //to make our navbar hover
    $("ul.nav li.dropdown").hover(function() {
    $("ul.nav li.dropdown .dropdown-menu").stop(true, true).delay(25).fadeIn(250);
        },function(){
    $("ul.nav li.dropdown .dropdown-menu").stop(true, true).delay(25).fadeOut(250);
    });
    
//    
//    !function($,n,e){var o=$();$.fn.dropdownHover=function(e){return"ontouchstart"in document?this:(o=o.add(this.parent()),this.each(function(){function t(e){o.find(":focus").blur(),h.instantlyCloseOthers===!0&&o.removeClass("open"),n.clearTimeout(c),i.addClass("open"),r.trigger(a)}var r=$(this),i=r.parent(),d={delay:500,instantlyCloseOthers:!0},s={delay:$(this).data("delay"),instantlyCloseOthers:$(this).data("close-others")},a="show.bs.dropdown",u="hide.bs.dropdown",h=$.extend(!0,{},d,e,s),c;i.hover(function(n){return i.hasClass("open")||r.is(n.target)?void t(n):!0},function(){c=n.setTimeout(function(){i.removeClass("open"),r.trigger(u)},h.delay)}),r.hover(function(n){return i.hasClass("open")||i.is(n.target)?void t(n):!0}),i.find(".dropdown-submenu").each(function(){var e=$(this),o;e.hover(function(){n.clearTimeout(o),e.children(".dropdown-menu").show(),e.siblings().children(".dropdown-menu").hide()},function(){var t=e.children(".dropdown-menu");o=n.setTimeout(function(){t.hide()},h.delay)})})}))},$(document).ready(function(){$('[data-hover="dropdown"]').dropdownHover()})}(jQuery,this);
//    
    
});