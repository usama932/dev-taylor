window.addEventListener("load",(function(){setTimeout((function(){$("body").removeClass("overflow-hidden"),$("#loader").hide()}),5500),setTimeout((function(){$(".about-scroll a").fadeIn("slow"),setTimeout((function(){$("#scroll-black-before").addClass("off"),$("#scroll-black-after").removeClass("off")}),3*Math.random()*5500)}),7500),setTimeout((function(){$(".home-scroll a").fadeIn("slow"),setTimeout((function(){$("#scroll-white-before").addClass("off"),$("#scroll-white-after").removeClass("off")}),4*Math.random()*5500)}),1e4),setTimeout((function(){$(".knowledge-scroll a").fadeIn("slow"),setTimeout((function(){$("#scroll-white-before").addClass("off"),$("#scroll-white-after").removeClass("off")}),3*Math.random()*5500)}),1500),$(".find-more a").hover((function(e){e.preventDefault(),$(this).find("#arrow-white-before").toggleClass("off"),$(this).find("#arrow-white-after").toggleClass("off"),$(this).find("#arrow-yellow-before").toggleClass("off"),$(this).find("#arrow-yellow-after").toggleClass("off")})),$(".next-btn").hover((function(e){e.preventDefault(),$(this).find("#arrow-white-before").toggleClass("off"),$(this).find("#arrow-white-after").toggleClass("off")})),$(".items").hover((function(e){e.preventDefault(),$(this).find("#arrow-white-before").toggleClass("off"),$(this).find("#arrow-white-after").toggleClass("off")})),$((function(){setTimeout((function(){$(".home-text .fade2").fadeIn("slow")}),6700),setTimeout((function(){$(".home-text .fade3").fadeIn("slow")}),7e3),setTimeout((function(){$(".home-text .fade4").fadeIn("slow")}),7500),setTimeout((function(){$(".home-text .fade5").fadeIn("slow")}),8e3),setTimeout((function(){$(".home-text .fade1").fadeIn("slow")}),6e3),setTimeout((function(){$(".home-text .fade2").fadeIn("slow")}),6700),setTimeout((function(){$(".home-text .fade3").fadeIn("slow")}),7e3),setTimeout((function(){$(".home-text .fade4").fadeIn("slow")}),7500),setTimeout((function(){$(".home-text .fade5").fadeIn("slow")}),8e3),setTimeout((function(){$(".home-text .fade6").fadeIn("slow")}),8500),setTimeout((function(){$(".home-text .fade7").fadeIn("slow")}),9e3),setTimeout((function(){$(".about-text .fade1").fadeIn("slow")}),500),setTimeout((function(){$(".about-text .fade2").fadeIn("slow")}),1e3),setTimeout((function(){$(".about-text .fade3").fadeIn("slow")}),1500),setTimeout((function(){$(".about-text .fade4").fadeIn("slow")}),2e3),setTimeout((function(){$(".about-text .fade5").fadeIn("slow")}),2500),setTimeout((function(){$(".about-text .fade6").fadeIn("slow")}),3e3),setTimeout((function(){$(".about-text .fade7").fadeIn("slow")}),3500),setTimeout((function(){$(".about-text .fade8").fadeIn("slow")}),4e3),setTimeout((function(){$(".about-text .fade9").fadeIn("slow")}),4500),setTimeout((function(){$(".about-text .fade10").fadeIn("slow")}),5e3),setTimeout((function(){$(".about-text .fade11").fadeIn("slow")}),5500),setTimeout((function(){$(".about-text .fade12").fadeIn("slow")}),6e3),setTimeout((function(){$(".about-text .fade13").fadeIn("slow")}),6500)})),$("#testimonials").owlCarousel({loop:!0,items:2,touchDrag:!1,mouseDrag:!1,margin:0,autoplay:!1,dots:!1,nav:!0,autoplayTimeout:8500,smartSpeed:1e3,responsive:{0:{items:1},768:{items:1},1170:{items:2}}}),$(".one").click((function(){$(this).addClass("show"),$(this).siblings(".one").addClass("show"),$(this).siblings(".two").removeClass("show"),$(this).siblings(".three").removeClass("show"),$(this).siblings(".four").removeClass("show"),$(this).siblings(".five").removeClass("show"),$(this).siblings(".six").removeClass("show")})),$(".two").click((function(){$(this).addClass("show"),$(this).siblings(".one").removeClass("show"),$(this).siblings(".two").addClass("show"),$(this).siblings(".three").removeClass("show"),$(this).siblings(".four").removeClass("show"),$(this).siblings(".five").removeClass("show"),$(this).siblings(".six").removeClass("show")})),$(".three").click((function(){$(this).addClass("show"),$(this).siblings(".one").removeClass("show"),$(this).siblings(".two").removeClass("show"),$(this).siblings(".three").addClass("show"),$(this).siblings(".four").removeClass("show"),$(this).siblings(".five").removeClass("show"),$(this).siblings(".six").removeClass("show")})),$(".four").click((function(){$(this).addClass("show"),$(this).siblings(".one").removeClass("show"),$(this).siblings(".two").removeClass("show"),$(this).siblings(".three").removeClass("show"),$(this).siblings(".four").addClass("show"),$(this).siblings(".five").removeClass("show"),$(this).siblings(".six").removeClass("show")})),$(".five").click((function(){$(this).addClass("show"),$(this).siblings(".one").removeClass("show"),$(this).siblings(".two").removeClass("show"),$(this).siblings(".three").removeClass("show"),$(this).siblings(".four").removeClass("show"),$(this).siblings(".five").addClass("show"),$(this).siblings(".six").removeClass("show")})),$(".six").click((function(){$(this).addClass("show"),$(this).siblings(".one").removeClass("show"),$(this).siblings(".two").removeClass("show"),$(this).siblings(".three").removeClass("show"),$(this).siblings(".four").removeClass("show"),$(this).siblings(".five").removeClass("show"),$(this).siblings(".six").addClass("show")})),$(".close-box").click((function(){$(this).parent().hasClass("show")&&$(this).parent().hide()})),$(".team-image").hover((function(){$(this).parent().parent().find(".team-inner").toggleClass("show")})),$(".nav-item").hover((function(){$("body").toggleClass("nav-hover")})),$(".team-image").hover((function(){$(this).parent().parent().parent().parent().find(".team-list").toggleClass("offAll")})),$(".abouttextsection").click((function(){$("html, body").animate({scrollTop:$("#abouttextsection").offset().top-60},500)})),$(".teamSection").click((function(){$("html, body").animate({scrollTop:$("#teamSection").offset().top-60},500)})),$(".knowledgeMailSection").click((function(){$("html, body").animate({scrollTop:$("#knowledgeMailSection").offset().top-60},500)}));lottie.loadAnimation({name:"Logo Black Loader",container:document.getElementById("logoContainerLoader"),path:"https://taylorhawkes.sanepress.com/json/logo-loader.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Logo Black Header",container:document.getElementById("logoContainerHeader"),path:"https://taylorhawkes.sanepress.com/json/logo-black.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Logo Black Footer",container:document.getElementById("logoContainerFooter"),path:"https://taylorhawkes.sanepress.com/json/logo-black.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Logo Yellow",container:document.getElementById("logoContainerYellow"),path:"https://taylorhawkes.sanepress.com/json/logo-yellow.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Accounting 1",container:document.getElementById("logoContainerAccounting"),path:"https://taylorhawkes.sanepress.com/json/accounting1.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Scroll White Before",container:document.getElementById("scroll-white-before"),path:"https://taylorhawkes.sanepress.com/json/scroll-white-before.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Scroll White After",container:document.getElementById("scroll-white-after"),path:"https://taylorhawkes.sanepress.com/json/scroll-white-after.json",renderer:"svg",loop:!0,autoplay:!0}),lottie.loadAnimation({name:"Scroll Black Before",container:document.getElementById("scroll-black-before"),path:"https://taylorhawkes.sanepress.com/json/scroll-black-before.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Scroll Black After",container:document.getElementById("scroll-black-after"),path:"https://taylorhawkes.sanepress.com/json/scroll-black-after.json",renderer:"svg",loop:!0,autoplay:!0}),lottie.loadAnimation({name:"Arrow White Before",container:document.getElementById("arrow-white-before"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-before.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Arrow White After",container:document.getElementById("arrow-white-after"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-after.json",renderer:"svg",loop:!0,autoplay:!0}),lottie.loadAnimation({name:"Arrow Yellow Before",container:document.getElementById("arrow-yellow-before"),path:"https://taylorhawkes.sanepress.com/json/arrow-yellow-before.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Arrow Yellow After",container:document.getElementById("arrow-yellow-after"),path:"https://taylorhawkes.sanepress.com/json/arrow-yellow-after.json",renderer:"svg",loop:!0,autoplay:!0}),lottie.loadAnimation({name:"Arrow White Left Before",container:document.getElementById("arrow-white-left-before"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-before.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Arrow White Left After",container:document.getElementById("arrow-white-left-after"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-after.json",renderer:"svg",loop:!0,autoplay:!0}),lottie.loadAnimation({name:"Arrow White Right Before",container:document.getElementById("arrow-white-right-before"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-before.json",renderer:"svg",loop:!1,autoplay:!0}),lottie.loadAnimation({name:"Arrow White Right After",container:document.getElementById("arrow-white-right-after"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-after.json",renderer:"svg",loop:!0,autoplay:!0});setTimeout((function(){$("#map-text").fadeIn("slow")}),500),setTimeout((function(){$("#hideUKMap, #hideUSMap").fadeIn("slow")}),1e3),setTimeout((function(){$("#showUKMap, #showUSMap").fadeIn("slow")}),2e3),$("#showUKMap").hover((function(){$(this).parent().parent().find("#arrow-white-right-before").toggleClass("off"),$(this).parent().parent().find("#arrow-white-right-after").toggleClass("off")})),$("#hideUKMap").hover((function(){$(this).children().find("#arrow-white-left-before").toggleClass("off"),$(this).children().find("#arrow-white-left-after").toggleClass("off")})),$("#showUKMap").click((function(){$(this).parent().find("#showUKMap").fadeOut("slow"),$(this).parent().parent().find("#hideUKMap .arrow-wrapper").addClass("rotate"),$(this).parent().parent().find("#showUSMap").fadeOut("slow"),$(this).parent().parent().find("#hideUSMap").fadeOut("slow"),$(this).parent().parent().find("#map-text").fadeOut("slow"),$(this).parent().parent().parent().find(".contact-content").addClass("moveLeft"),$(this).siblings(".UKMap").addClass("show"),setTimeout((function(){$(".UKMap .address-wrapper").animate({right:"0px"})}),300)})),$("#hideUKMap").click((function(){$(this).parent().parent().parent().find("#showUKMap").fadeIn("slow"),$(this).parent().parent().parent().find("#showUSMap").fadeIn("slow"),$(this).children().removeClass("rotate"),$(this).parent().parent().find("#hideUSMap").fadeIn("slow"),$(this).parent().parent().find("#map-text").fadeIn("slow"),$(this).parent().parent().parent().parent().find(".contact-content").removeClass("moveLeft"),$(this).parent().parent().parent().find(".UKMap").removeClass("show"),setTimeout((function(){$(".UKMap .address-wrapper").animate({right:"-100px"})}),300)})),$("#showUSMap").hover((function(){$(this).parent().parent().find("#arrow-white-left-before").toggleClass("off"),$(this).parent().parent().find("#arrow-white-left-after").toggleClass("off")})),$("#hideUSMap").hover((function(){$(this).children().find("#arrow-white-right-before").toggleClass("off"),$(this).children().find("#arrow-white-right-after").toggleClass("off")})),$("#showUSMap").click((function(){$(this).parent().find("#showUSMap").fadeOut("slow"),$(this).parent().parent().find("#hideUSMap .arrow-wrapper").addClass("rotate"),$(this).parent().parent().find("#showUKMap").fadeOut("slow"),$(this).parent().parent().find("#hideUKMap").fadeOut("slow"),$(this).parent().parent().find("#map-text").fadeOut("slow"),$(this).parent().parent().parent().find(".contact-content").addClass("moveRight"),$(this).siblings(".USMap").addClass("show"),setTimeout((function(){$(".USMap .address-wrapper").animate({left:"0px"})}),300)})),$("#hideUSMap").click((function(){$(this).parent().parent().parent().find("#showUSMap").fadeIn("slow"),$(this).parent().parent().parent().find("#showUKMap").fadeIn("slow"),$(this).children().removeClass("rotate"),$(this).parent().parent().find("#hideUKMap").fadeIn("slow"),$(this).parent().parent().find("#map-text").fadeIn("slow"),$(this).parent().parent().parent().parent().find(".contact-content").removeClass("moveRight"),$(this).parent().parent().parent().find(".USMap").removeClass("show"),setTimeout((function(){$(".USMap .address-wrapper").animate({left:"-100px"})}),300)}))})),$(window).on("scroll",(function(){AOS.init(),$(this).scrollTop()>1300&&$(".vertical .arrow-image").fadeIn("slow")})),$((function(){AOS.init()})),$(window).scroll((function(){}));
//# sourceMappingURL=contact.f00d2ef8.js.map
