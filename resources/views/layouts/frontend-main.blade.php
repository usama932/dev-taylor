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
    <link rel="icon" href="{{ asset('dist/taylor-hawkes-logo-black.c9014c2b.svg') }}" type="image/svg+xml">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">  
    <link rel="stylesheet" href="{{ asset('dist/index.8d4b7bfa.css')}}">
    <link href="{{ asset('dist/index.fcc43225.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body class="overflow-hidden">

    @yield('content')
    <footer class="footer-section">
        <div class="logo-section">
            <div class="logo-wrapper"> <img src="{{ asset('dist/taylor-hawkes-logo-black.c9014c2b.svg')}}" <span>{{$SiteSettings['company']->company_name ?? ''}}</span> </div>
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
<script type="module" src="{{ asset('dist/contact.b60beef8.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.6/lottie.min.js"></script>

<script type="module" src="{{ asset('dist/contact.b5605e32.js')}}"></script> 

@yield('scripts')

</html>
