window.addEventListener("load",(function(){setTimeout((function(){$("body").removeClass("overflow-hidden"),$("#loader").hide()}),5500),setTimeout((function(){$(".about-scroll a").fadeIn("slow"),setTimeout((function(){$("#scroll-black-before").addClass("off"),$("#scroll-black-after").removeClass("off")}),3*Math.random()*5500)}),7500),setTimeout((function(){$(".home-scroll a").fadeIn("slow"),setTimeout((function(){$("#scroll-white-before").addClass("off"),$("#scroll-white-after").removeClass("off")}),4*Math.random()*5500)}),1e4),setTimeout((function(){$(".knowledge-scroll a").fadeIn("slow"),setTimeout((function(){$("#scroll-white-before").addClass("off"),$("#scroll-white-after").removeClass("off")}),3*Math.random()*5500)}),1500),$(".find-more a").hover((function(e){e.preventDefault(),$(this).find("#arrow-white-before").toggleClass("off"),$(this).find("#arrow-white-after").toggleClass("off"),$(this).find("#arrow-yellow-before").toggleClass("off"),$(this).find("#arrow-yellow-after").toggleClass("off")})),$(".next-btn").hover((function(e){e.preventDefault(),$(this).find("#arrow-white-before").toggleClass("off"),$(this).find("#arrow-white-after").toggleClass("off")})),$(".items").hover((function(e){e.preventDefault(),$(this).find("#arrow-white-before").toggleClass("off"),$(this).find("#arrow-white-after").toggleClass("off")})),$((function(){setTimeout((function(){$(".home-text .fade1").fadeIn("slow")}),6e3),setTimeout((function(){$(".home-text .fade2").fadeIn("slow")}),6700),setTimeout((function(){$(".home-text .fade3").fadeIn("slow")}),7e3),setTimeout((function(){$(".home-text .fade4").fadeIn("slow")}),7500),setTimeout((function(){$(".home-text .fade5").fadeIn("slow")}),8e3),setTimeout((function(){$(".home-text .fade6").fadeIn("slow")}),8500),setTimeout((function(){$(".home-text .fade7").fadeIn("slow")}),9e3),setTimeout((function(){$(".about-text .fade1").fadeIn("slow")}),500),setTimeout((function(){$(".about-text .fade2").fadeIn("slow")}),1e3),setTimeout((function(){$(".about-text .fade3").fadeIn("slow")}),1500),setTimeout((function(){$(".about-text .fade4").fadeIn("slow")}),2e3),setTimeout((function(){$(".about-text .fade5").fadeIn("slow")}),2500),setTimeout((function(){$(".about-text .fade6").fadeIn("slow")}),3e3),setTimeout((function(){$(".about-text .fade7").fadeIn("slow")}),3500),setTimeout((function(){$(".about-text .fade8").fadeIn("slow")}),4e3),setTimeout((function(){$(".about-text .fade9").fadeIn("slow")}),4500),setTimeout((function(){$(".about-text .fade10").fadeIn("slow")}),5e3),setTimeout((function(){$(".about-text .fade11").fadeIn("slow")}),5500),setTimeout((function(){$(".about-text .fade12").fadeIn("slow")}),6e3),setTimeout((function(){$(".about-text .fade13").fadeIn("slow")}),6500),setTimeout((function(){$(".knowlege-text .fade1").fadeIn("slow")}),100)})),$("#testimonials").owlCarousel({loop:!0,items:2,touchDrag:!1,mouseDrag:!1,margin:0,autoplay:!1,dots:!1,nav:!0,autoplayTimeout:8500,smartSpeed:1e3,responsive:{0:{items:1},768:{items:1},1170:{items:2}}}),$(".one").click((function(){$(this).addClass("show"),$(this).siblings(".one").addClass("show"),$(this).siblings(".two").removeClass("show"),$(this).siblings(".three").removeClass("show"),$(this).siblings(".four").removeClass("show"),$(this).siblings(".five").removeClass("show"),$(this).siblings(".six").removeClass("show"),$(this).siblings(".seven").removeClass("show")})),$(".two").click((function(){$(this).addClass("show"),$(this).siblings(".one").removeClass("show"),$(this).siblings(".two").addClass("show"),$(this).siblings(".three").removeClass("show"),$(this).siblings(".four").removeClass("show"),$(this).siblings(".five").removeClass("show"),$(this).siblings(".six").removeClass("show"),$(this).siblings(".seven").removeClass("show")})),$(".three").click((function(){$(this).addClass("show"),$(this).siblings(".one").removeClass("show"),$(this).siblings(".two").removeClass("show"),$(this).siblings(".three").addClass("show"),$(this).siblings(".four").removeClass("show"),$(this).siblings(".five").removeClass("show"),$(this).siblings(".six").removeClass("show"),$(this).siblings(".seven").removeClass("show")})),$(".four").click((function(){$(this).addClass("show"),$(this).siblings(".one").removeClass("show"),$(this).siblings(".two").removeClass("show"),$(this).siblings(".three").removeClass("show"),$(this).siblings(".four").addClass("show"),$(this).siblings(".five").removeClass("show"),$(this).siblings(".six").removeClass("show"),$(this).siblings(".seven").removeClass("show")})),$(".five").click((function(){$(this).addClass("show"),$(this).siblings(".one").removeClass("show"),$(this).siblings(".two").removeClass("show"),$(this).siblings(".three").removeClass("show"),$(this).siblings(".four").removeClass("show"),$(this).siblings(".five").addClass("show"),$(this).siblings(".six").removeClass("show"),$(this).siblings(".seven").removeClass("show")})),$(".six").click((function(){$(this).addClass("show"),$(this).siblings(".one").removeClass("show"),$(this).siblings(".two").removeClass("show"),$(this).siblings(".three").removeClass("show"),$(this).siblings(".four").removeClass("show"),$(this).siblings(".five").removeClass("show"),$(this).siblings(".six").addClass("show"),$(this).siblings(".seven").removeClass("show")})),$(".seven").click((function(){$(this).addClass("show"),$(this).siblings(".one").removeClass("show"),$(this).siblings(".two").removeClass("show"),$(this).siblings(".three").removeClass("show"),$(this).siblings(".four").removeClass("show"),$(this).siblings(".five").removeClass("show"),$(this).siblings(".six").removeClass("show"),$(this).siblings(".seven").addClass("show")})),$(".close-box").click((function(){$(this).parent().parent().find(".show").removeClass("show"),event.stopPropagation()})),$(".open-one").click((function(){$(this).parent().parent().find(".seven").removeClass("show"),$(this).parent().parent().find(".one").addClass("show"),event.stopPropagation()})),$(".open-two").click((function(){$(this).parent().parent().find(".one").removeClass("show"),$(this).parent().parent().find(".two").addClass("show"),event.stopPropagation()})),$(".open-three").click((function(){$(this).parent().parent().find(".two").removeClass("show"),$(this).parent().parent().find(".three").addClass("show"),event.stopPropagation()})),$(".open-four").click((function(){$(this).parent().parent().find(".three").removeClass("show"),$(this).parent().parent().find(".four").addClass("show"),event.stopPropagation()})),$(".open-five").click((function(){$(this).parent().parent().find(".four").removeClass("show"),$(this).parent().parent().find(".five").addClass("show"),event.stopPropagation()})),$(".open-six").click((function(){$(this).parent().parent().find(".five").removeClass("show"),$(this).parent().parent().find(".six").addClass("show"),event.stopPropagation()})),$(".open-seven").click((function(){$(this).parent().parent().find(".six").removeClass("show"),$(this).parent().parent().find(".seven").addClass("show"),event.stopPropagation()})),$(".team-image").hover((function(){$(this).parent().parent().find(".team-inner").toggleClass("show")})),$(".nav-item").hover((function(){$("body").toggleClass("nav-hover")})),$(".team-image").hover((function(){$(this).parent().parent().parent().parent().find(".team-list").toggleClass("offAll")})),$(".abouttextsection").click((function(){$("html, body").animate({scrollTop:$("#abouttextsection").offset().top-60},500)})),$(".teamSection").click((function(){$("html, body").animate({scrollTop:$("#teamSection").offset().top-60},500)})),$(".knowledgeMailSection").click((function(){$("html, body").animate({scrollTop:$("#knowledgeMailSection").offset().top-60},500)}));lottie.loadAnimation({name:"Logo Black Loader",container:document.getElementById("logoContainerLoader"),path:"https://taylorhawkes.sanepress.com/json/logo-loader.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Logo Black Header",container:document.getElementById("logoContainerHeader"),path:"https://taylorhawkes.sanepress.com/json/logo-black.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Logo Black Footer",container:document.getElementById("logoContainerFooter"),path:"https://taylorhawkes.sanepress.com/json/logo-black.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Logo Yellow",container:document.getElementById("logoContainerYellow"),path:"https://taylorhawkes.sanepress.com/json/logo-yellow.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Scroll White Before",container:document.getElementById("scroll-white-before"),path:"https://taylorhawkes.sanepress.com/json/scroll-white-before.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Scroll White After",container:document.getElementById("scroll-white-after"),path:"https://taylorhawkes.sanepress.com/json/scroll-white-after.json",renderer:"svg",loop:!0,autoplay:!0}),lottie.loadAnimation({name:"Scroll Black Before",container:document.getElementById("scroll-black-before"),path:"https://taylorhawkes.sanepress.com/json/scroll-black-before.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Scroll Black After",container:document.getElementById("scroll-black-after"),path:"https://taylorhawkes.sanepress.com/json/scroll-black-after.json",renderer:"svg",loop:!0,autoplay:!0}),lottie.loadAnimation({name:"Arrow White Before",container:document.getElementById("arrow-white-before"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-before.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Arrow White After",container:document.getElementById("arrow-white-after"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-after.json",renderer:"svg",loop:!0,autoplay:!0}),lottie.loadAnimation({name:"Arrow Yellow Before",container:document.getElementById("arrow-yellow-before"),path:"https://taylorhawkes.sanepress.com/json/arrow-yellow-before.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Arrow Yellow After",container:document.getElementById("arrow-yellow-after"),path:"https://taylorhawkes.sanepress.com/json/arrow-yellow-after.json",renderer:"svg",loop:!0,autoplay:!0}),lottie.loadAnimation({name:"Arrow White Left Before",container:document.getElementById("arrow-white-left-before"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-before.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Arrow White Left After",container:document.getElementById("arrow-white-left-after"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-after.json",renderer:"svg",loop:!0,autoplay:!0}),lottie.loadAnimation({name:"Arrow White Right Before",container:document.getElementById("arrow-white-right-before"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-before.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Arrow White Right After",container:document.getElementById("arrow-white-right-after"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-after.json",renderer:"svg",loop:!0,autoplay:!0}),lottie.loadAnimation({name:"Item Image 1",container:document.getElementById("itemImage1"),path:"https://taylorhawkes.sanepress.com/json/itemImage1.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Item Image 2",container:document.getElementById("itemImage2"),path:"https://taylorhawkes.sanepress.com/json/itemImage2.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Item Image 3",container:document.getElementById("itemImage3"),path:"https://taylorhawkes.sanepress.com/json/itemImage3.json",renderer:"svg",loop:!1,autoplay:!0});setTimeout((function(){$("#map-text").fadeIn("slow")}),500),setTimeout((function(){$("#hideUKMap, #hideUSMap").fadeIn("slow")}),1e3),setTimeout((function(){$("#showUKMap, #showUSMap").fadeIn("slow")}),2e3),$("#showUKMap").hover((function(){$(this).parent().parent().find("#arrow-white-right-before").toggleClass("off"),$(this).parent().parent().find("#arrow-white-right-after").toggleClass("off")})),$("#hideUKMap").hover((function(){$(this).children().find("#arrow-white-left-before").toggleClass("off"),$(this).children().find("#arrow-white-left-after").toggleClass("off")})),$("#showUKMap").click((function(){$(this).parent().find("#showUKMap").fadeOut("slow"),$(this).parent().parent().find("#showUSMap").fadeOut("slow"),$(this).parent().parent().find("#hideUSMap").fadeOut("slow"),$(this).parent().parent().find("#map-text").fadeOut("slow"),$(this).parent().parent().parent().find(".contact-content").addClass("moveLeft"),$(this).siblings(".UKMap").addClass("show")})),$("#hideUKMap").click((function(){$(this).parent().parent().parent().find("#showUKMap").fadeToggle("slow"),$(this).parent().parent().parent().find("#showUSMap").fadeToggle("slow"),$(this).parent().parent().find("#hideUSMap").fadeToggle("slow"),$(this).parent().parent().find("#map-text").fadeToggle("slow"),$(this).parent().parent().parent().parent().find(".contact-content").toggleClass("moveLeft"),$(this).parent().parent().parent().find(".UKMap").toggleClass("show")})),$("#showUSMap").hover((function(){$(this).parent().parent().find("#arrow-white-left-before").toggleClass("off"),$(this).parent().parent().find("#arrow-white-left-after").toggleClass("off")})),$("#hideUSMap").hover((function(){$(this).children().find("#arrow-white-right-before").toggleClass("off"),$(this).children().find("#arrow-white-right-after").toggleClass("off")})),$("#showUSMap").click((function(){$(this).parent().find("#showUSMap").fadeOut("slow"),$(this).parent().parent().find("#showUKMap").fadeOut("slow"),$(this).parent().parent().find("#hideUKMap").fadeOut("slow"),$(this).parent().parent().find("#map-text").fadeOut("slow"),$(this).parent().parent().parent().find(".contact-content").addClass("moveRight"),$(this).siblings(".USMap").addClass("show")})),$("#hideUSMap").click((function(){$(this).parent().parent().parent().find("#showUSMap").fadeToggle("slow"),$(this).parent().parent().parent().find("#showUKMap").fadeToggle("slow"),$(this).parent().parent().find("#hideUKMap").fadeToggle("slow"),$(this).parent().parent().find("#map-text").fadeToggle("slow"),$(this).parent().parent().parent().parent().find(".contact-content").toggleClass("moveRight"),$(this).parent().parent().parent().find(".USMap").toggleClass("show")})),$("#goto2").click((function(){event.preventDefault(),$(this).parent().parent().parent().find(".item-wrapper").css({right:"530px"}),$(this).parent().parent().parent().find("#itemImage1").removeClass("on"),$(this).parent().parent().parent().find("#itemImage2").addClass("on"),$(this).parent().parent().parent().find("#itemImage3").removeClass("on"),$(this).delay(300).fadeOut("fast"),$(this).siblings("#goto3").delay(300).fadeIn("fast"),$(this).siblings("#goto1").delay(300).fadeIn("fast")})),$("#goto1").click((function(){event.preventDefault(),$(this).parent().parent().parent().find(".item-wrapper").css({right:"0"}),$(this).parent().parent().parent().find("#itemImage1").addClass("on"),$(this).parent().parent().parent().find("#itemImage2").removeClass("on"),$(this).parent().parent().parent().find("#itemImage3").removeClass("on"),$(this).delay(300).fadeOut("fast"),$(this).siblings("#goto2").delay(300).fadeIn("fast"),$(this).siblings("#goto3").delay(300).fadeOut("fast")})),$("#goto3").click((function(){event.preventDefault(),$(this).parent().parent().parent().find(".item-wrapper").css({right:"1060px"}),$(this).parent().parent().parent().find("#itemImage1").removeClass("on"),$(this).parent().parent().parent().find("#itemImage2").removeClass("on"),$(this).parent().parent().parent().find("#itemImage3").addClass("on"),$(this).delay(300).fadeOut("fast"),$(this).siblings("#backTo2").delay(300).fadeIn("slow"),$(this).siblings("#goto2").delay(300).fadeOut("slow"),$(this).siblings("#goto1").delay(300).fadeOut("slow")})),$("#backTo2").click((function(){event.preventDefault(),$(this).parent().parent().parent().find(".item-wrapper").css({right:"530px"}),$(this).parent().parent().parent().find("#itemImage1").removeClass("on"),$(this).parent().parent().parent().find("#itemImage2").addClass("on"),$(this).parent().parent().parent().find("#itemImage3").removeClass("on"),$(this).delay(300).fadeOut("fast"),$(this).siblings("#goto1").delay(300).fadeIn("slow"),$(this).siblings("#goto3").delay(300).fadeIn("slow")}))})),$(window).on("scroll",(function(){AOS.init({duration:600}),$(this).scrollTop()>1300&&($(".vertical .arrow-image").fadeIn("slow"),$("item.one").addClass("show"),$(".desc.one ").addClass("show"))})),$((function(){AOS.init({duration:600})})),$(window).scroll((function(){})),$(document).ready((function(){$(".nav-pills .nav-item .nav-link").click((function(){var e=$(this).parent().position(),t=$(this).parent().width();$(".nav-pills .slider").css({left:+e.left,width:t})}));var e=$(".nav-pills").find(".active").parent("li").width(),t=$(".nav-pills .nav-item .active").position();$(".nav-pills .slider").css({left:+t.left,width:e})})),jQuery(document).ready((function(e){var t=e(".section-title").height(),o=e(".info-wrapper").offset().top,s=e(".info-wrapper").height(),a=e(".two-col").offset().top,n=t+o-200,i=a-(t+s)-29;e(window).scroll((function(){e(window).scrollTop()>n?e(".info-wrapper").addClass("fixed"):e(".info-wrapper").removeClass("fixed"),e(window).scrollTop()>i?(e(".info-wrapper").removeClass("fixed"),e(".info-wrapper").addClass("relative")):e(".info-wrapper").removeClass("relative")}))}));
//# sourceMappingURL=casestudy.34ff7ee0.js.map
