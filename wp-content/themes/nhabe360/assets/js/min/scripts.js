console.log("second gulp task"),$(window).scroll(function(){100<=$(window).scrollTop()?$("#header").addClass("scroll"):$("#header").removeClass("scroll")}),$(".owl-carousel").owlCarousel({margin:20,dots:!1,nav:!0,navText:[$(".am-prev"),$(".am-next")],loop:!0,responsive:{0:{items:1},400:{items:2},800:{items:3},1e3:{items:4},1300:{items:5}}}),$(".owl-carousel").find(".owl-nav").removeClass("disabled"),$(".owl-carousel").on("changed.owl.carousel",function(o){$(this).find(".owl-nav").removeClass("disabled")}),$('[data-toggle="tooltip"]').tooltip(),$(".checkbox-menu").on("change","input[type='checkbox']",function(){$(this).closest("li").toggleClass("active",this.checked)}),$(document).on("click",".allow-focus",function(o){o.stopPropagation()}),$(".control .icon").click(function(){$(".left-item").slideToggle(1e3,function(){$(".left-item").hasClass("d-none")?($(".left-item").removeClass("d-none"),$(".right-item").attr("class","col-sm-7 right-item")):($(".left-item").addClass("d-none"),$(".right-item").attr("class","col-sm-12 right-item"))})});