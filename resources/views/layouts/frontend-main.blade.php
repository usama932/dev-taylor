<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Taylor Hawkes') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- icon -->
    <link rel="icon" href="{{asset('/dist/taylor-hawkes-logo-black.c9014c2b.svg') }}" type="image/svg+xml">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">  
    <link rel="stylesheet" href="{{asset('dist/index.e8265c92.css')}}">  
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NMLNZVF');</script>
    <!-- End Google Tag Manager -->
    @yield('styles')
        <style>main-banner-section .banner-wrapper {
  justify-content: center;
  align-items: center;
}

.main-banner-section .banner-wrapper .banner-slider {
  height: 450px;
}

.image-1 {
  opacity: 0;
}

.carousel-items h5 {
  letter-spacing: 0;
  opacity: 0;
  font-family: AmazObitaemOstrovV\.2, sans-serif;
  font-size: 73px;
  line-height: 93px;
  transform: translateY(-40px);
}

.carousal-contents {
  width: 100%;
  height: 450px;
  background-color: #000;
  transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
  position: relative;
}

.carousal-contents .carousal-image {
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: background .3s, border-radius .3s, opacity .3s;
  position: relative;
  background-position: center !important;
  background-repeat: no-repeat !important;
  background-size: cover !important;
}

.carousal-contents .carousel-caption {
  z-index: 2;
  margin: 0;
  padding: 0;
  inset: 50% auto auto 50%;
  transform: translate(-50%, -50%);
}

.carousel-inners {
  position: relative;
}

.carousel-items {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
}

.carousel-captions {
  z-index: 999;
  color: #fff;
  width: 100%;
  text-align: center;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}

</style>
</head>

<body class="overflow-hidden">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMLNZVF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @yield('content')
    <footer class="footer-section">
        <div class="logo-section">
            <div class="logo-wrapper"> <img src="../../dist/taylor-hawkes-logo-black.c9014c2b.svg')}}" <span>{{$SiteSettings['company']->company_name ?? ''}}</span> </div>
        </div>
        <div class="top-content">
            <div class="dark-bg left-wrapper">
                <div class="content-wrapper"> <a href="JavaScript:Void(0)" class="btn-blue btn-h57">{{$SiteSettings['company']->company_email ?? ''}}</a> </div>
            </div>
            <div class="light-bg right-wrapper">
                <div class="content-wrapper">
                    @php $count = 0 ; @endphp
                    @foreach($SiteSettings['location'] as $location)
                        @php
                        $left = ($count == 0 ? 'border-left': '');
                        $count++;
                        @endphp

                        <div class=" address-wrapper">
                            <div class="address-content {{ $left }}">
                            <label>{{$location->location_country}}</label>
                            <a href="tel:{{$location->location_phone}}">{{$location->location_phone}}</a>
                            <p> {!! ($location->location_address) !!}</p>
                            <a href="{{$location->location_addlink}}" class="btn-blue btn-h30">MAP</a>
                            </div>
                        </div>
                        @endforeach

                </div>
            </div>
        </div>
        <div class="bottom-content">
            <div class="dark-bg left-wrapper">
                <ul class="site-links">
                    <li><span>©2022 Taylor Hawkes</span></li>
                    @foreach($FooterMenu as $menuItem)
                        <li>
                            <a href="{{$menuItem->link_to}}">{{$menuItem->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="light-bg right-wrapper">
                <ul class="social-links">
                    <li><a href="{{$SiteSettings['company']->linkedin ?? ''}}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="{{$SiteSettings['company']->twitter ?? ''}}" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="{{$SiteSettings['company']->facebook ?? ''}}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="{{$SiteSettings['company']->other ?? ''}}" target="_blank"><i class="fa-brands fa-medium"></i></a></li>
                </ul>

            </div>
        </div>
    </footer>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous" ></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.8.1/lottie.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js" crossorigin="anonymous"></script>
<script src="{{asset('dist/casestudy.ea3444c6.js')}}" id="gsap.min.js-js" crossorigin="anonymous"></script>
<script src="{{asset('dist/casestudy.10e1d21b.js')}}" defer="" crossorigin="anonymous"></script>
<script src="{{asset('dist/casestudy.05f49ec4.js')}}" defer="" crossorigin="anonymous"></script>
<script src="https://unpkg.com/lottie-interactive@latest/dist/lottie-interactive.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js" crossorigin="anonymous"></script>
<script src="{{asset('dist/knowledge.18dbc454.js')}}" defer="" crossorigin="anonymous"></script>
 <script>
AOS.init();</script>
<script>$(document).ready(function() {
    gsap.to(".banner-content", {
        yPercent: -200,
        ease: "none",
        scrollTrigger: {
            trigger: "#accountingSection",
            // start: "top bottom", // the default values
            // end: "bottom top",
            scrub: true
        }
    });
    gsap.to(".banner-slider", {
        yPercent: -250,
        ease: "none",
        scrollTrigger: {
            trigger: "#accountingSection",
            // start: "top bottom", // the default values
            // end: "bottom top",
            scrub: true
        }
    });
});

</script>



<script>$(document).ready(function() {
    image_1 = new TimelineMax, image_1.set("#carouselSliders", {
        autoAlpha: 0,
        y: 90,
        delay: 0
    }), image_1.to("#carouselSliders", 1, {
        autoAlpha: 1,
        y: 0,
        duration: 1,
        ease: Power0.easeNone
    }).addPause(1, function() {
        setTimeout(function() {
            image_1.play();
        }, 1e3);
    });
    // .to(".carousel_items1 .image-1", 2, { autoAlpha: 0, y: -20, ease: Power1.easeout }),
    image = new TimelineMax, image.set(".carousel_items1 .image-1", {
        autoAlpha: 0.6,
        y: 0,
        zIndex: 1,
        delay: 0.5
    }), image.to(".carousel_items1 .image-1", 1, {
        autoAlpha: 0.6,
        y: 0,
        duration: 2,
        ease: Power0.easeNone
    }).addPause(2.7, function() {
        setTimeout(function() {
            image.play();
        }, 1e3);
    }).to(".carousel_items1 .image-1", 2, {
        autoAlpha: 0,
        y: 0,
        ease: Power1.easeout
    }), text_1 = new TimelineMax, text_1.set("#text_1", {
        autoAlpha: 0,
        y: 60,
        delay: 0.5
    }), text_1.to("#text_1", 1, {
        autoAlpha: 1,
        y: 0,
        duration: 2.3,
        ease: Power0.easeNone
    }).addPause(2.5, function() {
        setTimeout(function() {
            text_1.play();
        }, 1e3);
    }).to("#text_1", 2, {
        autoAlpha: 0,
        y: -40,
        ease: Power1.easeout
    }), // second slide
    image_2 = new TimelineMax, image_2.set(".carousel_items2 .image-1", {
        autoAlpha: 0,
        y: 0,
        zIndex: 1,
        delay: 5.2
    }), image_2.to(".carousel_items2 .image-1", 1, {
        autoAlpha: 0.6,
        y: 0,
        duration: 7.7,
        ease: Power0.easeNone
    }).addPause(7.2, function() {
        setTimeout(function() {
            image_2.play();
        }, 1e3);
    }).to(".carousel_items2 .image-1", 2, {
        autoAlpha: 0,
        y: 0,
        ease: Power1.easeout
    }), text_2 = new TimelineMax, text_2.set("#text_2", {
        autoAlpha: 0,
        y: 60,
        delay: 5.8
    }), text_2.to("#text_2", 1, {
        autoAlpha: 1,
        y: 0,
        duration: 7.5,
        ease: Power0.easeNone
    }).addPause(7.5, function() {
        setTimeout(function() {
            text_2.play();
        }, 1e3);
    }).to("#text_2", 2, {
        autoAlpha: 0,
        y: -40,
        ease: Power1.easeout
    }), // third slide
    image_3 = new TimelineMax, image_3.set(".carousel_items3 .image-1", {
        autoAlpha: 0,
        y: 0,
        delay: 10.5
    }), image_3.to(".carousel_items3 .image-1", 1, {
        autoAlpha: 0.6,
        y: 0,
        duration: 10.5,
        ease: Power0.easeNone
    }).addPause(10.5, function() {
        setTimeout(function() {
            image_3.play();
        }, 1e3);
    });
    // .to(".image-1", 2, { autoAlpha: 0, y: -20, ease: Power1.easeout }),
    text_3 = new TimelineMax, text_3.set("#text_3", {
        autoAlpha: 0,
        y: 60,
        delay: 11
    }), text_3.to("#text_3", 1, {
        autoAlpha: 1,
        y: 0,
        duration: 9.5,
        ease: Power0.easeNone
    }).addPause(9.5, function() {
        setTimeout(function() {
            text_3.play();
        }, 1e3);
    });
// .to(".carousel_items2 .text_3", 2, { autoAlpha: 0, y: -20, ease: Power1.easeout })
});

</script>

@yield('scripts')

</html>
