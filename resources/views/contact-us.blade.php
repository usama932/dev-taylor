@extends('layouts.frontend-main')

@section('content')
@include('layouts.header')
<section class="contact-wrapper">
    <div class="contact-content">

        <div class="map-wrapper">
            <button type="button" id="showLeftMap" class="btn-blue btn-h68 btn-w117">{{ $page->contactInfoLocations[0]->location_country ?? '' }}</button>
            <div class="leftMap map-box">
                <div class="map-inner">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.652022807631!2d-0.022386884263091666!3d51.50125287963409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602b91d217ca9%3A0x7a4a374b03eccf16!2sBeaufort%20Court%2C%20Admirals%20Way%2C%20London%20E14%209XL%2C%20UK!5e0!3m2!1sen!2s!4v1667495567130!5m2!1sen!2s"
                            style="border:0"
                            allowfullscreen
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                    <div class="address-wrapper">
                        <div class="address-content">
                            <label>@if( $page->contactInfoLocations[0]->location_country == 'UK' ) United Kingdom @else '' @endif </label> <a href="tel:09212676757011">{{ $page->contactInfoLocations[0]->location_phone ?? '' }}</a>
                            <p>
                                {!! $page->contactInfoLocations[0]->location_address ?? '' !!}
                            </p>
                            <a href="mailto:{{$SiteSettings['company']->company_email ?? ''}}" class="btn-blue btn-h51">{{$SiteSettings['company']->company_email ?? ''}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="image-wrapper">
                <button type="button" id="hideRightMap"><img class="left-arrow" src="{{ asset('dist/icon-arrow-right-white.53b92526.svg') }}" alt="left-arrow" /></button>
            </div>
            <div class="text-wrapper"><p>Which office do you want to contact?</p></div>
            <div class="image-wrapper">
                <button type="button" id="hideLeftMap"><img src="{{ asset('dist/icon-arrow-right-white.53b92526.svg') }}" alt="left-arrow" /></button>
            </div>
        </div>
        <div class="map-wrapper">
            <button type="button" id="showRightMap" class="btn-blue btn-h68 btn-w117">{{ $page->contactInfoLocations[1]->location_country ?? '' }}</button>
            <div class="map-box rightMap">
                <div class="map-inner">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.652022807631!2d-0.022386884263091666!3d51.50125287963409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602b91d217ca9%3A0x7a4a374b03eccf16!2sBeaufort%20Court%2C%20Admirals%20Way%2C%20London%20E14%209XL%2C%20UK!5e0!3m2!1sen!2s!4v1667495567130!5m2!1sen!2s"
                            style="border:0"
                            allowfullscreen
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                    <div class="address-wrapper">
                        <div class="address-content">
                            <label>@if( $page->contactInfoLocations[0]->location_country = 'US' ) United State @else '' @endif</label> <a href="tel:092442038871110">{{ $page->contactInfoLocations[1]->location_phone ?? '' }}</a>
                            <p>
                                {!! $page->contactInfoLocations[1]->location_address ?? '' !!}
                            </p>
                            <a href="mailto:{{$SiteSettings['company']->company_email ?? ''}}" class="btn-blue btn-h51">{{$SiteSettings['company']->company_email ?? ''}}</a>
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
