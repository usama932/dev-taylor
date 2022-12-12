@extends('layouts.frontend-main')

@section('content')
@include('layouts.header')
 <section class="contact-wrapper">
        <div class="contact-content">
            <div class="map-wrapper">
                <button type="button" id="showUSMap" class="btn-blue slide-white btn-h68 btn-w117">{{ $page->contactInfoLocations[0]->location_country ?? '' }}</button>
                <div class="map-box USMap">
                    <div class="map-inner">
                        <div class="map">
                            <iframe defer="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.4956971957517!2d-75.1726616715597!3d39.952668713602236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c62916c6280d%3A0xb4bc092149667838!2sOne%20Liberty%20Place!5e0!3m2!1sen!2s!4v1668612866461!5m2!1sen!2s" style="border: 0" allowfullscreen="" loading="eager" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="address-wrapper">
                            <div class="address-content" data-aos="fade-up" data-aos-duration="1500">
                                <label>@if( $page->contactInfoLocations[0]->location_country == 'UK' ) United Kingdom @else '' @endif </label> 
                                
                                <a href="tel:09212676757011">{{ $page->contactInfoLocations[0]->location_phone ?? '' }}</a>
                                <p> {!! $page->contactInfoLocations[0]->location_address ?? '' !!}</p>
                                <a href="mailto:{{$SiteSettings['company']->company_email ?? ''}}" class="btn-blue slide-yellow btn-h51"><span>{{$SiteSettings['company']->company_email ?? ''}}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="button-wrapper">
                    <button type="button" id="hideUKMap" class="map-button">
                        <div class="arrow-wrapper left-arrow">
                            <div id="arrow-white-left-before" class="arrow-image"></div>
                            <div id="arrow-white-left-after" class="arrow-image off"></div>
                        </div>
                    </button>
                </div>
                <div class="text-wrapper">
                    <p id="map-text">Which office do you want to contact?</p>
                </div>
                <div class="button-wrapper">
                    <button type="button" id="hideUSMap" class="map-button">
                        <div class="arrow-wrapper">
                            <div id="arrow-white-right-before" class="arrow-image"></div>
                            <div id="arrow-white-right-after" class="arrow-image off"></div>
                        </div>
                    </button>
                </div>
            </div>
            <div class="map-wrapper">
                <button type="button" id="showUKMap" class="btn-blue slide-white btn-h68 btn-w117">{{ $page->contactInfoLocations[1]->location_country ?? '' }}
                <div class="map-box UKMap">
                    <div class="map-inner">
                        <div class="map">
                            <iframe defer="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.652022807631!2d-0.022386884263091666!3d51.50125287963409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602b91d217ca9%3A0x7a4a374b03eccf16!2sBeaufort%20Court%2C%20Admirals%20Way%2C%20London%20E14%209XL%2C%20UK!5e0!3m2!1sen!2s!4v1667495567130!5m2!1sen!2s" style="border: 0" allowfullscreen="" loading="eager" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="address-wrapper">
                            <div class="address-content" data-aos="fade-up" data-aos-duration="1500">
                                <label>@if( $page->contactInfoLocations[0]->location_country = 'US' ) United State @else '' @endif</label>
                                <a href="tel:092442038871110">{{ $page->contactInfoLocations[1]->location_phone ?? '' }}</a>
                                <p> {!! $page->contactInfoLocations[1]->location_address ?? '' !!}</p>
                                <a href="mailto:{{$SiteSettings['company']->company_email ?? ''}}" class="btn-blue slide-yellow btn-h51"><span>{{$SiteSettings['company']->company_email ?? ''}}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')

@parent

@endsection
