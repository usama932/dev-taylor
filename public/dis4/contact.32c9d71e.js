$(document).ready((function(){$((function(){setTimeout((function(){$("body").removeClass("overflow-hidden"),$("#loader").hide()}),5500)})),$(".one").hover((function(){$(this).siblings(".one").toggleClass("show")})),$(".two").hover((function(){$(this).siblings(".two").toggleClass("show")})),$(".three").hover((function(){$(this).siblings(".three").toggleClass("show")})),$(".four").hover((function(){$(this).siblings(".four").toggleClass("show")})),$(".five").hover((function(){$(this).siblings(".five").toggleClass("show")})),$(".six").hover((function(){$(this).siblings(".six").toggleClass("show")})),$("#showLeftMap").click((function(){$(this).siblings(".leftMap").addClass("show")})),$("#showRightMap").click((function(){$(this).siblings(".rightMap").addClass("show")})),$("#hideLeftMap").click((function(){$(this).parent().parent().parent().find(".leftMap").removeClass("show")})),$("#hideRightMap").click((function(){$(this).parent().parent().parent().find(".rightMap").removeClass("show")})),$("#showRightMap").hover((function(){$(this).parent().parent().find("#hideLeftMap").toggleClass("bounceNow")})),$("#showLeftMap").hover((function(){$(this).parent().parent().find("#hideRightMap").toggleClass("bounceNow")})),$(".team-image").hover((function(){$(this).parent().parent().find(".team-inner").toggleClass("show")})),$(".nav-item").hover((function(){$("body").toggleClass("nav-hover")})),$(".team-image").hover((function(){$(this).parent().parent().parent().parent().find(".team-list").toggleClass("offAll")})),$("#testimonials").owlCarousel({loop:!0,items:2,touchDrag:!1,mouseDrag:!1,margin:0,autoplay:!1,dots:!1,nav:!0,autoplayTimeout:8500,smartSpeed:1e3,responsive:{0:{items:1},768:{items:1},1170:{items:2}}}),$(".abouttextsection").click((function(){$("html, body").animate({scrollTop:$("#abouttextsection").offset().top-60},500)})),$(".teamSection").click((function(){$("html, body").animate({scrollTop:$("#teamSection").offset().top-60},500)})),$(".knowledgeMailSection").click((function(){$("html, body").animate({scrollTop:$("#knowledgeMailSection").offset().top-60},500)}));bodymovin.loadAnimation({name:"Logo Black Loader",container:document.getElementById("logoContainerLoader"),path:"https://taylorhawkes.sanepress.com/json/logo-loader.json",renderer:"svg",loop:!1,autoplay:!0}),bodymovin.loadAnimation({name:"Logo Black Header",container:document.getElementById("logoContainerHeader"),path:"https://taylorhawkes.sanepress.com/json/logo-black.json",renderer:"svg",loop:!1,autoplay:!0}),bodymovin.loadAnimation({name:"Logo Black Footer",container:document.getElementById("logoContainerFooter"),path:"https://taylorhawkes.sanepress.com/json/logo-black.json",renderer:"svg",loop:!1,autoplay:!0}),bodymovin.loadAnimation({name:"Logo Yellow",container:document.getElementById("logoContainerYellow"),path:"https://taylorhawkes.sanepress.com/json/logo-yellow.json",renderer:"svg",loop:!1,autoplay:!0}),bodymovin.loadAnimation({name:"Accounting 1",container:document.getElementById("logoContainerAccounting"),path:"https://taylorhawkes.sanepress.com/json/accounting1.json",renderer:"svg",loop:!1,autoplay:!0}),bodymovin.loadAnimation({name:"Scroll White Before",container:document.getElementById("scroll-white-before"),path:"https://taylorhawkes.sanepress.com/json/scroll-white-before.json",renderer:"svg",loop:!1,autoplay:!0}),bodymovin.loadAnimation({name:"Scroll White After",container:document.getElementById("scroll-white-after"),path:"https://taylorhawkes.sanepress.com/json/scroll-white-after.json",renderer:"svg",loop:!0,autoplay:!0}),bodymovin.loadAnimation({name:"Scroll Black Before",container:document.getElementById("scroll-black-before"),path:"https://taylorhawkes.sanepress.com/json/scroll-black-before.json",renderer:"svg",loop:!1,autoplay:!0}),bodymovin.loadAnimation({name:"Scroll Black After",container:document.getElementById("scroll-black-after"),path:"https://taylorhawkes.sanepress.com/json/scroll-black-after.json",renderer:"svg",loop:!0,autoplay:!0}),bodymovin.loadAnimation({name:"Arrow White Before",container:document.getElementById("arrow-white-before"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-before.json",renderer:"svg",loop:!1,autoplay:!0}),bodymovin.loadAnimation({name:"Arrow White After",container:document.getElementById("arrow-white-after"),path:"https://taylorhawkes.sanepress.com/json/arrow-white-after.json",renderer:"svg",loop:!0,autoplay:!0}),bodymovin.loadAnimation({name:"Arrow Black Before",container:document.getElementById("arrow-black-before"),path:"https://taylorhawkes.sanepress.com/json/arrow-black-before.json",renderer:"svg",loop:!1,autoplay:!0}),bodymovin.loadAnimation({name:"Arrow Black After",container:document.getElementById("arrow-black-after"),path:"https://taylorhawkes.sanepress.com/json/arrow-black-after.json",renderer:"svg",loop:!0,autoplay:!0})})),$(window).on("scroll",(function(){AOS.init(),$(this).scrollTop()>30&&$("#nextBG").toggleClass("fade-out")})),$((function(){AOS.init()})),$((function(){setTimeout((function(o){$("#scroll-white-before").stop(!0).fadeOut(),$("#scroll-white-after").stop(!0).fadeIn(),$("#scroll-black-before").stop(!0).fadeOut(),$("#scroll-black-after").stop(!0).fadeIn()}),5500)})),$(".find-more a").on({mouseover:function(o){$("#arrow-white-before").stop(!0).fadeOut(),$("#arrow-white-after").stop(!0).fadeIn(),$("#arrow-black-before").stop(!0).fadeOut(),$("#arrow-black-after").stop(!0).fadeIn()},mouseout:function(o){$("#arrow-white-before").stop(!0).fadeIn(),$("#arrow-white-after").stop(!0).fadeOut(),$("#arrow-black-before").stop(!0).fadeIn(),$("#arrow-black-after").stop(!0).fadeOut()}});
//# sourceMappingURL=contact.32c9d71e.js.map
