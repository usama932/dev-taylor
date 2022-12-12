window.addEventListener("load", function() {

    //Home Page Loader on load effect
    setTimeout(function(){
        $('body').removeClass('overflow-hidden');
        $('#loader').hide();
    },5500);

    //Animated Scrolls on load effect
    setTimeout(function(){
        $('.about-scroll a').fadeIn('slow');
        setTimeout(function(){
            $('#scroll-black-before').addClass('off');
            $('#scroll-black-after').removeClass('off');
        },5500 * (Math.random() * 3));
    },4200);
    setTimeout(function(){
        $('.home-scroll a').fadeIn('slow');
        setTimeout(function(){
            $('#scroll-white-before').addClass('off');
            $('#scroll-white-after').removeClass('off');
        },5500 * (Math.random() * 4));
    },8100);
    setTimeout(function(){
        $('.knowledge-scroll a').fadeIn('slow');
        setTimeout(function(){
            $('#scroll-white-before').addClass('off');
            $('#scroll-white-after').removeClass('off');
        },5500 * (Math.random() * 3));
    },800);
    //Animated Arrows on load effect
    $('.find-more a').hover(function(event){
        event.preventDefault()
        $(this).find('#arrow-white-before').toggleClass('off')
        $(this).find('#arrow-white-after').toggleClass('off')
        $(this).find('#arrow-yellow-before').toggleClass('off')
        $(this).find('#arrow-yellow-after').toggleClass('off')
    });
    $('.next-btn').hover(function(event){
        event.preventDefault()
        $(this).find('#arrow-white-before').toggleClass('off')
        $(this).find('#arrow-white-after').toggleClass('off')
    });
    $('.items').hover(function(event){
        event.preventDefault()
        $(this).find('#arrow-white-before').toggleClass('off')
        $(this).find('#arrow-white-after').toggleClass('off')
    });

    $(function() {
        //Home and About Page Text Fade Effect on Load

        setTimeout(function(){
            $('.home-text .fade1').fadeIn('slow');
        },6000)
        setTimeout(function(){
            $('.home-text .fade2').fadeIn('slow');
        },6300)
        setTimeout(function(){
            $('.home-text .fade3').fadeIn('slow');
        },6600)
        setTimeout(function(){
            $('.home-text .fade4').fadeIn('slow');
        },6900)
        setTimeout(function(){
            $('.home-text .fade5').fadeIn('slow');
        },7200)
        setTimeout(function(){
            $('.home-text .fade6').fadeIn('slow');
        },7500)
        setTimeout(function(){
            $('.home-text .fade7').fadeIn('slow');
        },7800)
        setTimeout(function(){
            $('.about-text .fade1').fadeIn('slow');
        },300)
        setTimeout(function(){
            $('.about-text .fade2').fadeIn('slow');
        },600)
        setTimeout(function(){
            $('.about-text .fade3').fadeIn('slow');
        },900)
        setTimeout(function(){
            $('.about-text .fade4').fadeIn('slow');
        },1200)
        setTimeout(function(){
            $('.about-text .fade5').fadeIn('slow');
        },1500)
        setTimeout(function(){
            $('.about-text .fade6').fadeIn('slow');
        },1800)
        setTimeout(function(){
            $('.about-text .fade7').fadeIn('slow');
        },2100)
        setTimeout(function(){
            $('.about-text .fade8').fadeIn('slow');
        },2400)
        setTimeout(function(){
            $('.about-text .fade9').fadeIn('slow');
        },2700)
        setTimeout(function(){
            $('.about-text .fade10').fadeIn('slow');
        },3000)
        setTimeout(function(){
            $('.about-text .fade11').fadeIn('slow');
        },3300)
        setTimeout(function(){
            $('.about-text .fade12').fadeIn('slow');
        },3600)
        setTimeout(function(){
            $('.about-text .fade13').fadeIn('slow');
        },3900)
        setTimeout(function(){
            $('.knowlege-text .fade1').fadeIn('slow');
        },100)
    })

    //Home Page Testimonials
    $('#testimonials').owlCarousel({
        loop: true,
        items: 2,
        touchDrag: false,
        mouseDrag: false,
        margin: 0,
        autoplay: false,
        dots:false,
        nav: true,
        autoplayTimeout: 8500,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1170: {
                items: 2
            }
        }
    });

    //Home Page Recruitment Section Hover Effect
    $('.one').click(function(){
        $(this).addClass('show');
        $(this).siblings(".one").addClass('show');
        $(this).siblings(".two").removeClass('show');
        $(this).siblings(".three").removeClass('show');
        $(this).siblings(".four").removeClass('show');
        $(this).siblings(".five").removeClass('show');
        $(this).siblings(".six").removeClass('show');
        $(this).siblings(".seven").removeClass('show');
    });
    $('.two').click(function(){
        $(this).addClass('show');
        $(this).siblings(".one").removeClass('show');
        $(this).siblings(".two").addClass('show');
        $(this).siblings(".three").removeClass('show');
        $(this).siblings(".four").removeClass('show');
        $(this).siblings(".five").removeClass('show');
        $(this).siblings(".six").removeClass('show');
        $(this).siblings(".seven").removeClass('show');
    });
    $('.three').click(function(){
        $(this).addClass('show');
        $(this).siblings(".one").removeClass('show');
        $(this).siblings(".two").removeClass('show');
        $(this).siblings(".three").addClass('show');
        $(this).siblings(".four").removeClass('show');
        $(this).siblings(".five").removeClass('show');
        $(this).siblings(".six").removeClass('show');
        $(this).siblings(".seven").removeClass('show');
    });
    $('.four').click(function(){
        $(this).addClass('show');
        $(this).siblings(".one").removeClass('show');
        $(this).siblings(".two").removeClass('show');
        $(this).siblings(".three").removeClass('show');
        $(this).siblings(".four").addClass('show');
        $(this).siblings(".five").removeClass('show');
        $(this).siblings(".six").removeClass('show');
        $(this).siblings(".seven").removeClass('show');
    });
    $('.five').click(function(){
        $(this).addClass('show');
        $(this).siblings(".one").removeClass('show');
        $(this).siblings(".two").removeClass('show');
        $(this).siblings(".three").removeClass('show');
        $(this).siblings(".four").removeClass('show');
        $(this).siblings(".five").addClass('show');
        $(this).siblings(".six").removeClass('show');
        $(this).siblings(".seven").removeClass('show');
    });
    $('.six').click(function(){
        $(this).addClass('show');
        $(this).siblings(".one").removeClass('show');
        $(this).siblings(".two").removeClass('show');
        $(this).siblings(".three").removeClass('show');
        $(this).siblings(".four").removeClass('show');
        $(this).siblings(".five").removeClass('show');
        $(this).siblings(".six").addClass('show');
        $(this).siblings(".seven").removeClass('show');
    });
    $('.seven').click(function(){
        $(this).addClass('show');
        $(this).siblings(".one").removeClass('show');
        $(this).siblings(".two").removeClass('show');
        $(this).siblings(".three").removeClass('show');
        $(this).siblings(".four").removeClass('show');
        $(this).siblings(".five").removeClass('show');
        $(this).siblings(".six").removeClass('show');
        $(this).siblings(".seven").addClass('show');
    });
    $('.close-box').click(function(){
        $(this).parent().parent().find(".show").removeClass('show');
        event.stopPropagation();
    });
    $('.open-one').click(function(){
        $(this).parent().parent().find(".seven").removeClass('show')
        $(this).parent().parent().find(".one").addClass('show')
        event.stopPropagation();
    });
    $('.open-two').click(function(){
        $(this).parent().parent().find(".one").removeClass('show')
        $(this).parent().parent().find(".two").addClass('show')
        event.stopPropagation();
    });
    $('.open-three').click(function(){
        $(this).parent().parent().find(".two").removeClass('show')
        $(this).parent().parent().find(".three").addClass('show')
        event.stopPropagation();
    });
    $('.open-four').click(function(){
        $(this).parent().parent().find(".three").removeClass('show')
        $(this).parent().parent().find(".four").addClass('show')
        event.stopPropagation();
    });
    $('.open-five').click(function(){
        $(this).parent().parent().find(".four").removeClass('show')
        $(this).parent().parent().find(".five").addClass('show')
        event.stopPropagation();
    });
    $('.open-six').click(function(){
        $(this).parent().parent().find(".five").removeClass('show')
        $(this).parent().parent().find(".six").addClass('show')
        event.stopPropagation();
    });
    $('.open-seven').click(function(){
        $(this).parent().parent().find(".six").removeClass('show')
        $(this).parent().parent().find(".seven").addClass('show')
        event.stopPropagation();
    });
    $('.team-image').hover(function(){$(this).parent().parent().find(".team-inner").toggleClass('show')});
    $('.nav-item').hover(function(){$('body').toggleClass('nav-hover')});

    //About Page Team Section Hover Effect
    $('.team-image').hover(function(){$(this).parent().parent().parent().parent().find(".team-list").toggleClass('offAll')});

    //About Page Sections
    $(".teamSectionTitle").click(function() {
        $('html, body').animate({
            scrollTop: $(".section-title").offset().top - 60
        }, 500);
    });
    $(".teamSection").click(function() {
        $('html, body').animate({
            scrollTop: $("#teamSection").offset().top - 60
        }, 500);
    });
    $(".knowledgeMailSection").click(function() {
        $('html, body').animate({
            scrollTop: $("#knowledgeMailSection").offset().top - 60
        }, 500);
    });

    //Animation Logos
    var animation = lottie.loadAnimation({
        name: "Logo Black Loader",
        container: document.getElementById('logoContainerLoader'),
        path: '{{asset('dist/json/logo-loader.json')}}',
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Logo Black Header",
        container: document.getElementById('logoContainerHeader'),
        path: '{{asset('dist/json/logo-black.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Logo Black Footer",
        container: document.getElementById('logoContainerFooter'),
        path: '{{asset('dist/json/logo-black.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Logo Yellow",
        container: document.getElementById('logoContainerYellow'),
        path: '{{asset('dist/json/logo-yellow.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Scroll White Before",
        container: document.getElementById('scroll-white-before'),
        path: '{{asset('dist/json/scroll-white-before.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Scroll White After",
        container: document.getElementById('scroll-white-after'),
        path: '{{asset('dist/json/scroll-white-after.json')}},
        renderer: 'svg',
        loop: true,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Scroll Black Before",
        container: document.getElementById('scroll-black-before'),
        path: '{{asset('dist/json/scroll-black-before.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Scroll Black After",
        container: document.getElementById('scroll-black-after'),
        path: '{{asset('dist/json/scroll-black-after.json')}},
        renderer: 'svg',
        loop: true,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Arrow White Before",
        container: document.getElementById('arrow-white-before'),
        path: '{{asset('dist/json/arrow-white-before.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Arrow White After",
        container: document.getElementById('arrow-white-after'),
        path: '{{asset('dist/json/arrow-white-after.json')}},
        renderer: 'svg',
        loop: true,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Arrow Yellow Before",
        container: document.getElementById('arrow-yellow-before'),
        path: '{{asset('dist/json/arrow-yellow-before.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Arrow Yellow After",
        container: document.getElementById('arrow-yellow-after'),
        path: '{{asset('dist/json/arrow-yellow-after.json')}},
        renderer: 'svg',
        loop: true,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Arrow White Left Before",
        container: document.getElementById('arrow-white-left-before'),
        path: '{{asset('dist/json/arrow-white-before.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Arrow White Left After",
        container: document.getElementById('arrow-white-left-after'),
        path: '{{asset('dist/json/arrow-white-after.json')}},
        renderer: 'svg',
        loop: true,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Arrow White Right Before",
        container: document.getElementById('arrow-white-right-before'),
        path: '{{asset('dist/json/arrow-white-before.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "Arrow White Right After",
        container: document.getElementById('arrow-white-right-after'),
        path: '{{asset('dist/json/arrow-white-after.json')}},
        renderer: 'svg',
        loop: true,
        autoplay: true,
    });
    let itemImage1 = document.getElementById('itemImage1');
    let itemImage2 = document.getElementById('itemImage2');
    let itemImage3 = document.getElementById('itemImage3');
    let itemImage1Animate = lottie.loadAnimation({
        name: "Item Image 1",
        container: itemImage1,
        renderer: 'svg',
        loop: false,
        autoplay: true,
        path: '{{asset('dist/json/itemImage1.json')}},
        // path: 'https://raw.githubusercontent.com/thesvbd/Lottie-examples/master/assets/animations/skip-forward.json')}},
    });
    let itemImage2Animate = lottie.loadAnimation({
        name: "Item Image 2",
        container: itemImage2,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: '{{asset('dist/json/itemImage2.json')}},
        // path: 'https://raw.githubusercontent.com/thesvbd/Lottie-examples/master/assets/animations/skip-forward.json')}},
    });
    let itemImage3Animate = lottie.loadAnimation({
        name: "Item Image 3",
        container: itemImage3,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: '{{asset('dist/json/itemImage3.json')}},
        // path: 'https://raw.githubusercontent.com/thesvbd/Lottie-examples/master/assets/animations/skip-forward.json')}},
    });
    var animation = lottie.loadAnimation({
        name: "goto2 Arrow Before",
        container: document.getElementById('goto2-arrow-before'),
        path: '{{asset('dist/json/arrow-yellow-before.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "goto2 Arrow After",
        container: document.getElementById('goto2-arrow-after'),
        path: '{{asset('dist/json/arrow-yellow-after.json')}},
        renderer: 'svg',
        loop: true,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "goto1 Arrow Before",
        container: document.getElementById('goto1-arrow-before'),
        path: '{{asset('dist/json/arrow-yellow-before.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "goto1 Arrow After",
        container: document.getElementById('goto1-arrow-after'),
        path: '{{asset('dist/json/arrow-yellow-after.json')}},
        renderer: 'svg',
        loop: true,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "goto3 Arrow Before",
        container: document.getElementById('goto3-arrow-before'),
        path: '{{asset('dist/json/arrow-yellow-before.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "goto3 Arrow After",
        container: document.getElementById('goto3-arrow-after'),
        path: '{{asset('dist/json/arrow-yellow-after.json')}},
        renderer: 'svg',
        loop: true,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "backTo2 Arrow Before",
        container: document.getElementById('backTo2-arrow-before'),
        path: '{{asset('dist/json/arrow-yellow-before.json')}},
        renderer: 'svg',
        loop: false,
        autoplay: true,
    });
    var animation = lottie.loadAnimation({
        name: "backTo2 Arrow After",
        container: document.getElementById('backTo2-arrow-after'),
        path: '{{asset('dist/json/arrow-yellow-after.json')}},
        renderer: 'svg',
        loop: true,
        autoplay: true,
    });
    //Contact Page Animation Script
    //on page load animations
    setTimeout(function(){$('#map-text').fadeIn('slow');},500)
    setTimeout(function(){$('#hideUKMap, #hideUSMap').fadeIn('slow');},1000)
    setTimeout(function(){$('#showUKMap, #showUSMap').fadeIn('slow');},2000)
    //UK Map
    $('#showUKMap').hover(function(){
        $(this).parent().parent().find('#arrow-white-right-before').toggleClass('off')
        $(this).parent().parent().find('#arrow-white-right-after').toggleClass('off')
    });
    $('#hideUKMap').hover(function(){
        $(this).children().find('#arrow-white-left-before').toggleClass('off')
        $(this).children().find('#arrow-white-left-after').toggleClass('off')
    });
    $('#showUKMap').click(function(){
        $(this).parent().find('#showUKMap').fadeOut('slow')
        // $(this).parent().parent().find("#hideUKMap .arrow-wrapper").addClass('rotate')
        $(this).parent().parent().find('#showUSMap').fadeOut('slow')
        $(this).parent().parent().find('#hideUSMap').fadeOut('slow')
        $(this).parent().parent().find('#map-text').fadeOut('slow')
        $(this).parent().parent().parent().find(".contact-content").addClass('moveLeft')
        $(this).siblings(".UKMap").addClass('show')
        // setTimeout(function(){$('.UKMap .address-wrapper').animate({"right":"0%"},"slow");},100)
    });
    $('#hideUKMap').click(function(){
        $(this).parent().parent().parent().find('#showUKMap').fadeToggle('slow')
        $(this).parent().parent().parent().find('#showUSMap').fadeToggle('slow')
        // $(this).children().removeClass('rotate')
        $(this).parent().parent().find('#hideUSMap').fadeToggle('slow')
        $(this).parent().parent().find('#map-text').fadeToggle('slow')
        $(this).parent().parent().parent().parent().find(".contact-content").toggleClass('moveLeft')
        $(this).parent().parent().parent().find(".UKMap").toggleClass('show')
        // setTimeout(function(){$('.UKMap .address-wrapper').animate({"right":"-50%"},"slow");},100)
});
    //US Map
    $('#showUSMap').hover(function(){
        $(this).parent().parent().find('#arrow-white-left-before').toggleClass('off')
        $(this).parent().parent().find('#arrow-white-left-after').toggleClass('off')
    });
    $('#hideUSMap').hover(function(){
        $(this).children().find('#arrow-white-right-before').toggleClass('off')
        $(this).children().find('#arrow-white-right-after').toggleClass('off')
    });
    $('#showUSMap').click(function(){
        $(this).parent().find('#showUSMap').fadeOut('slow')
        // $(this).parent().parent().find("#hideUSMap .arrow-wrapper").addClass('rotate')
        $(this).parent().parent().find('#showUKMap').fadeOut('slow')
        $(this).parent().parent().find('#hideUKMap').fadeOut('slow')
        $(this).parent().parent().find('#map-text').fadeOut('slow')
        $(this).parent().parent().parent().find(".contact-content").addClass('moveRight')
        $(this).siblings(".USMap").addClass('show')
        // setTimeout(function(){$('.USMap .address-wrapper').animate({"left":"0%"},"slow");},100)
    });
    $('#hideUSMap').click(function(){
        $(this).parent().parent().parent().find('#showUSMap').fadeToggle('slow')
        $(this).parent().parent().parent().find('#showUKMap').fadeToggle('slow')
        // $(this).children().removeClass('rotate')
        $(this).parent().parent().find('#hideUKMap').fadeToggle('slow')
        $(this).parent().parent().find('#map-text').fadeToggle('slow')
        $(this).parent().parent().parent().parent().find(".contact-content").toggleClass('moveRight')
        $(this).parent().parent().parent().find(".USMap").toggleClass('show')
        // setTimeout(function(){$('.USMap .address-wrapper').animate({"left":"-50%"},"slow");},100)
    });
    //Home Page Slider Animation Script
    $('#goto2').click(function(){
        event.preventDefault()
        $(this).parent().parent().parent().find(".item-wrapper").css({"right": "34.505208333333336vw"});
        $(this).parent().parent().parent().find('#itemImage1').removeClass('on')
        $(this).parent().parent().parent().find('#itemImage2').addClass('on')
        $(this).parent().parent().parent().find('#itemImage3').removeClass('on')
        $(this).delay(300).fadeOut('fast')
        $(this).siblings('#goto3').delay(300).fadeIn('fast')
        $(this).siblings('#goto1').delay(300).fadeIn('fast')
        itemImage2Animate.playSegments([0,43.0000017514259]),true;
    });
    $('#goto1').click(function(){
        event.preventDefault()
        $(this).parent().parent().parent().find(".item-wrapper").css({"right": "0"});
        $(this).parent().parent().parent().find('#itemImage1').addClass('on')
        $(this).parent().parent().parent().find('#itemImage2').removeClass('on')
        $(this).parent().parent().parent().find('#itemImage3').removeClass('on')
        $(this).delay(300).fadeOut('fast')
        $(this).siblings('#goto2').delay(300).fadeIn('fast')
        $(this).siblings('#goto3').delay(300).fadeOut('fast')
        itemImage1Animate.playSegments([0,95.0000038694293]),true;
        itemImage1Animate.setDirection(-1);
    });
    $('#goto3').click(function(){
        event.preventDefault()
        $(this).parent().parent().parent().find(".item-wrapper").css({"right": "69.01041666666667vw"});
        $(this).parent().parent().parent().find('#itemImage1').removeClass('on')
        $(this).parent().parent().parent().find('#itemImage2').removeClass('on')
        $(this).parent().parent().parent().find('#itemImage3').addClass('on')
        $(this).delay(300).addClass('fadeOff')
        $(this).siblings('#backTo2').delay(300).fadeIn('slow')
        $(this).siblings('#goto2').delay(300).fadeOut('slow')
        $(this).siblings('#goto1').delay(300).fadeOut('slow')
        itemImage3Animate.playSegments([0,41.0000016699642]),true;
    });
    $('#backTo2').click(function(){
        event.preventDefault()
        $(this).parent().parent().parent().find(".item-wrapper").css({"right": "34.505208333333336vw"});
        $(this).parent().parent().parent().find('#itemImage1').removeClass('on')
        $(this).parent().parent().parent().find('#itemImage2').addClass('on')
        $(this).parent().parent().parent().find('#itemImage3').removeClass('on')
        $(this).delay(300).fadeOut('fast')
        $(this).siblings('#goto1').delay(300).fadeIn('slow')
        $(this).siblings('#goto3').delay(300).fadeIn('slow')
        $(this).siblings('#goto3').delay(300).removeClass('fadeOff')
        itemImage2Animate.playSegments([0,43.0000017514259]),true;
        itemImage2Animate.setDirection(-1);
    });
    $('#goto2').hover(function(){
        $(this).children().find('#goto2-arrow-before').toggleClass('off')
        $(this).children().find('#goto2-arrow-after').toggleClass('off')
    });
    $('#goto1').hover(function(){
        $(this).children().find('#goto1-arrow-before').toggleClass('off')
        $(this).children().find('#goto1-arrow-after').toggleClass('off')
    });
    $('#goto3').hover(function(){
        $(this).children().find('#goto3-arrow-before').toggleClass('off')
        $(this).children().find('#goto3-arrow-after').toggleClass('off')
    });
    $('#backTo2').hover(function(){
        $(this).children().find('#backTo2-arrow-before').toggleClass('off')
        $(this).children().find('#backTo2-arrow-after').toggleClass('off')
    });
});

//AOS Amnimation
$(window).on("scroll", function () {
    AOS.init({
        duration: 600
    })

    // if ($(this).scrollTop() > 30) {$('.image-wrapper-outer').addClass('fade-out');}
    var y = $(this).scrollTop();
    if (y > 1300) { // scroll gets at a certain height
        $('.vertical .arrow-image').fadeIn('slow');
    }
    if (y > 1500) { // scroll gets at a certain height
        $('.item.one').addClass('show');
        $('.desc.one ').addClass('show');
    }
    if (y > 2500) { // scroll gets at a certain height
        $('#image-wrapper').addClass('fixed');
    }
});
$(function () {
    AOS.init({
        duration: 600
    })

});
$(window).scroll(function() {

});


$(document).ready(function(){

    $(".nav-pills .nav-item .nav-link").click(function() {
        var position = $(this).parent().position();
        var width = $(this).parent().width();
        $(".nav-pills .slider").css({"left":+ position.left,"width":width});
    });
    var actWidth = $(".nav-pills").find(".active").parent("li").width();
    var actPosition = $(".nav-pills .nav-item .active").position();
    $(".nav-pills .slider").css({"left":+ actPosition.left,"width": actWidth});

});

jQuery(document).ready(function ($) {
    // var teamWrapperHeight = $('.team-wrapper').height();
    // var infoWrapper = $('.info-wrapper').offset().top;
    // var infoWrapperHeight = $('.info-wrapper').height();
    // var colOffset = $('.four-col').offset().top;
    //
    // var addRelative = teamWrapperHeight + infoWrapper - 335;
    // var addFixed = colOffset - (teamWrapperHeight + infoWrapperHeight) + 670;
    // $(window).scroll(function() {
    //     if ($(window).scrollTop() > addRelative ) {
    //         $('.info-wrapper').addClass("relative");
    //     } else {
    //         $('.info-wrapper').removeClass("relative");
    //     }
    //     if ($(window).scrollTop() > addFixed) {
    //         $('.info-wrapper').addClass('fixed');
    //         $('.info-wrapper').removeClass("relative");
    //     } else {
    //         $('.info-wrapper').removeClass("fixed");
    //     }
    // });
    $(window).scroll(function() {
        if ($(window).scrollTop() > 1500 ) {
            $('#image-wrapper').addClass("fixed");
        } else {
            $('#image-wrapper').removeClass("fixed");
        }
    });
    var teamTitleOffset_ =  $('.section-title').offset().top+parseInt($('.section-title').height());
    var teamWrapperOffset_ =  $('.team-wrapper').offset().top;
    var diffBetweenTwoblcoks = teamWrapperOffset_ - teamTitleOffset_;
    if ($(window).width() >= 768) {
        var teamSectionTitle = $('.section-title');
        var height = (teamSectionTitle.height()) / 1;
        var top = teamSectionTitle.offset().top + height;
        var lastscrollTop = 0;
        $(window).on('scroll', function () {
            var scrollTop = $(this).scrollTop();

            if (scrollTop > $('.info-wrapper').offset().top  && scrollTop < $('.team-wrapper').offset().top - 335) {

                $('.info-wrapper').css({
                    'position':'fixed',
                    'top':0,
                    'color':'black',
                });
            }
            else if(scrollTop > $('.team-wrapper').offset().top + 335){
                $('.info-wrapper').css({
                    'position':'relative',
                    'top':0,
                    'color':'blue',
                });
            }
            else if(scrollTop<$('.team-wrapper').offset().top && scrollTop > $('.section-title').offset().top+parseInt($('.section-title').height() + 155)){
                $('.info-wrapper').css({
                    'position':'fixed',
                    'top':0 ,
                    'color':'green',
                });
            }
            else if(scrollTop < $('.section-title').offset().top+parseInt($('.section-title').height())){
                console.log('this is the height '+diffBetweenTwoblcoks);
                $('.info-wrapper').css({
                    'position':'relative',
                    'top':-diffBetweenTwoblcoks - 175,
                    'color':'red',
                });
            }

            return false;
            lastscrollTop = scrollTop;
        })
    }
    $(function(){
        var boxes = $('.image-wrapper'),
            $window = $(window);
        $window.scroll(function(){
            var scrollTop = $window.scrollTop();
            boxes.each(function(){
                var $this = $(this),
                    scrollspeed = parseInt($this.data('scroll-speed')),
                    val = - scrollTop / scrollspeed;
                $this.css('transform', 'translateY(' + val + 'px)');
            });
        });
    })


})
