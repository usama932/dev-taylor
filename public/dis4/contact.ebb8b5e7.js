$(document).ready((function(){$((function(){setTimeout((function(){$("body").removeClass("overflow-hidden"),$("#loader").hide()}),5e3)})),$(".one").hover((function(){$(this).siblings(".one").toggleClass("show")})),$(".two").hover((function(){$(this).siblings(".two").toggleClass("show")})),$(".three").hover((function(){$(this).siblings(".three").toggleClass("show")})),$(".four").hover((function(){$(this).siblings(".four").toggleClass("show")})),$(".five").hover((function(){$(this).siblings(".five").toggleClass("show")})),$(".six").hover((function(){$(this).siblings(".six").toggleClass("show")})),$("#showLeftMap").click((function(){$(this).siblings(".leftMap").addClass("show")})),$("#showRightMap").click((function(){$(this).siblings(".rightMap").addClass("show")})),$("#hideLeftMap").click((function(){$(this).parent().parent().parent().find(".leftMap").removeClass("show")})),$("#hideRightMap").click((function(){$(this).parent().parent().parent().find(".rightMap").removeClass("show")})),$("#showRightMap").hover((function(){$(this).parent().parent().find("#hideLeftMap").toggleClass("bounceNow")})),$("#showLeftMap").hover((function(){$(this).parent().parent().find("#hideRightMap").toggleClass("bounceNow")})),$(".team-image").hover((function(){$(this).parent().parent().find(".team-inner").toggleClass("show")})),$(".team-image").hover((function(){$(this).parent().parent().parent().parent().find(".team-list").toggleClass("offAll")})),$("#testimonials").owlCarousel({loop:!0,center:!1,items:2,touchDrag:!1,mouseDrag:!1,singleItem:!1,margin:0,autoplay:!1,dots:!1,nav:!0,autoplayTimeout:8500,smartSpeed:1e3,responsive:{0:{items:1},768:{items:2},1170:{items:2}}}),$(".abouttextsection").click((function(){$("html, body").animate({scrollTop:$("#abouttextsection").offset().top-60},500)})),$(".teamSection").click((function(){$("html, body").animate({scrollTop:$("#teamSection").offset().top-60},500)})),$(".knowledgeMailSection").click((function(){$("html, body").animate({scrollTop:$("#knowledgeMailSection").offset().top-60},500)}))})),$(window).on("scroll",(function(){AOS.init(),$(this).scrollTop()>30&&$("#nextBG").toggleClass("fade-out")})),$((function(){AOS.init()}));
//# sourceMappingURL=contact.ebb8b5e7.js.map
