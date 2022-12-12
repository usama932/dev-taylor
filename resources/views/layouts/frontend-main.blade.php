<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('/taylor-hawkes-logo-black.7789ae87.svg')}}" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
    <link rel="stylesheet" href="{{asset('dist/index.e8265c92.css')}}">
    <title>Taylor Hawkes</title>
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

.carousel_items1 .image-1 {
  z-index: 9;
}

.carousel_items2 .image-1 {
  z-index: 8;
}

.carousel_items3 .image-1 {
  z-index: 7;
}

</style>
</head>

<body class="overflow-hidden">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMLNZVF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @yield('content')
    {{-- <footer class="footer-section">
       
          <div class="logoContainer">
                <lottie-interactive path="{{url('json/logo-black.json')}}" interaction="play-on-show"></lottie-interactive>
          </div>
          <div class="logo-wrapper"> <img src="../../dist/taylor-hawkes-logo-black.c9014c2b.svg')}}" <span>{{$SiteSettings['company']->company_name ?? ''}}</span> </div>
       
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
    </footer> --}}
    <footer class="footer-section">
      <div class="logo-section">
          <div class="logo-wrapper aos-item" data-aos="fade" data-aos-duration="2500">
              <div class="logoContainer">
                  <lottie-interactive path="{{url('json/logo-black.json')}}" interaction="play-on-show"></lottie-interactive>
              </div>
            
              <span>Taylor Hawkes</span>
          </div>
      </div>
      <div class="top-content">
          <div class="left-wrapper dark-bg">
              <div class="content-wrapper">
                  <a href="mailto:info@taylorhawkes.com" class="btn-blue slide-white btn-h57 aos-item" data-aos="fade-up" data-aos-duration="1000">
                      <span>info@taylorhawkes.com</span>
                  </a>
              </div>
          </div>
          <div class="right-wrapper light-bg">
              <div class="content-wrapper">
                  <div class="address-wrapper">
                      <div class="address-content border-left">
                          <label>United Kingdom</label>
                          <a href="tel:092442038871110">+44 203 887 1110</a>
                          <p>45 Beaufort Court<br>
                              Admirals Way<br>
                              London<br>
                              E14 9XL, UK</p>
                          <a href="https://goo.gl/maps/LmmFRPimXonmwVHD8" target="_blank" class="btn-blue slide-yellow btn-h30"><span>MAP</span></a>
                      </div>
                  </div>
                  <div class="address-wrapper">
                      <div class="address-content">
                          <label>United States</label>
                          <a href="tel:09212676757011">+1 267-675-7011</a>
                          <p>One Liberty Place<br>
                              1650 Market Street<br>
                              Suite 3600<br>
                              Philadelphia<br>
                              Pa 19103, US</p>
                          <a href="https://goo.gl/maps/BZnw5Hf9s5RMByaZA" target="_blank" class="btn-blue slide-yellow btn-h30"><span>MAP</span></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="bottom-content">
          <div class="left-wrapper dark-bg">
              <ul class="site-links">
                  <li><span>©2022 Taylor Hawkes</span></li>
                  <li><a href="/legal.html">Privacy Policy</a></li>s
                  <li><a href="JavaScript:Void(0)">Cookie Policy</a></li>
              </ul>
          </div>
          <div class="right-wrapper light-bg">
              <ul class="social-links">
                  <li><a href="JavaScript:Void(0)" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                  <li><a href="JavaScript:Void(0)" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                  <li><a href="JavaScript:Void(0)" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                  <li><a href="JavaScript:Void(0)" target="_blank"><i class="fa-brands fa-medium"></i></a></li>
              </ul>
          </div>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.8.1/lottie.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script src="{{asset('dist/casestudy.ea3444c6.js')}}" id="gsap.min.js-js"></script>
    <script src="{{asset('dist/casestudy.10e1d21b.js')}}" defer=""></script>
    <script src="{{asset('dist/casestudy.05f49ec4.js')}}" defer=""></script>
    <script src="https://unpkg.com/lottie-interactive@latest/dist/lottie-interactive.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
    <script src="{{asset('dist/knowledge.18dbc454.js')}}" defer=""></script>

    <script src="{{asset('dist/index.3976b811.js')}}" defer=""></script>


</body>

</html>
