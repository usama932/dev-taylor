@extends('layouts.frontend-main')

@section('content')
<div class="topbanner-bg-image">
    @include('layouts.header')
    <section class="media-banner-section">
        <div class="container">
            <div class="media-banner-wrapper">
                <div class="media-banner-content">
                    <div class="mediabanner-logo"><img src="{{ asset('dist/taylor-hawkes-logo-yellow.9d4d837d.svg') }}" /></div>
                    <h3>{{ $whatwedo->title }}</h3>
                </div>
            </div>
        </div>
    </section>
</div>

@php
$dom = new domDocument;
@$dom->loadHTML($whatwedo->page_text);
$figures = $dom->getElementsByTagName('p');
$element = $dom->saveHtml($figures[0]);
$element1 = $dom->saveHtml($figures[1]);
$element2 = $dom->saveHtml($figures[2]);
$element3 = $dom->saveHtml($figures[3]);
@endphp

<section class="media-creative-section">
    <div class="media-creative-wrapper">
        <div class="media-creative-content-left">
         {!! $whatwedo->page_text !!}
        </div>
        <div class="media-creative-content-right">
           
        </div>
        <div class="find-more">
            <a href=" {{ $whatwedo->cta_url }}"> {{ $whatwedo->cta_button_text }}<img src="
                {{ asset('dist/icon-arrow-right-black.5aba9cbd.svg') }}" /> </a>
        </div>
    </div>
</section>
@if(!empty($whatwedo->case_study[0]->content))
@php
$dom = new domDocument;
@$dom->loadHTML($whatwedo->case_study[0]->content);
$figures = $dom->getElementsByTagName('p');
$b = $dom->saveHtml($figures[0]);
$b1 = $dom->saveHtml($figures[1]);
$b2 = $dom->saveHtml($figures[2]);
$b3 = $dom->saveHtml($figures[3]);
@endphp
@endif
@if(!empty($whatwedo->case_study[0]->content))
<section class="recruiting-tax-section">
    <div class="container">
        <div class="title-wrapper"><h4>{{ $whatwedo->case_study[0]->title ?? '' }}</h4></div>
    </div>
    <div class="outer-wrapper">
        <div class="logo-wrapper">
            <div class="logo-image"><img src="{{ asset('dist/ecovis-logo.ea199e33.jpg') }}" /></div>
        </div>
       
            <div class="recruiting-tax-wrapper">
                <div class="recruiting-tax-content">
                    @php echo htmlspecialchars_decode($b) ;@endphp
                    @php echo htmlspecialchars_decode($b1);@endphp
                </div>
                <div class="recruiting-tax-content">
                    @php echo htmlspecialchars_decode($b2);@endphp
                    @php echo htmlspecialchars_decode($b3);@endphp
                </div>
            </div>
        
    </div>
    <div class="image-next next-bg">
        <div class="button-text-wrapper">
            <p>Want to become the next company to see these results?</p>
            <button class="btn-blue btn-h51">Email us today</button>
        </div>
    </div>
</section>
@endif
@endsection
@section('scripts')

@parent

@endsection
