
@extends('layouts.frontend-main')

@section('content')
@if($whatwedo->featured_image)
<style>
    .topbanner_image {
  width: 100% !important;
  height: 100vh !important;
  background-image: url("{{$whatwedo->featured_image->getUrl() }} ");
  background-position: center !important;
  background-repeat: no-repeat !important;
  background-size: cover !important;
}
</style>
@endif
<div class="topbanner_image">
    @include('layouts.header')
    <section class="media-banner-section">
        <div class="container">
            <div class="media-banner-wrapper">
                <div class="media-banner-content">
                    <div class="mediabanner-logo"><img src="{{ asset('dist/taylor-hawkes-logo-yellow.9d4d837d.svg') }}" /></div>
                    <h3>@if($whatwedo->title_image)<img src="{{asset($whatwedo->title_image)}}" style=""/> @else {{ $whatwedo->title }}@endif</h3>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
    
    $format = PREG_SPLIT_DELIM_CAPTURE;
    
    $text = $whatwedo->page_text;
    $keywords = preg_split('/(\[[^]]+\])/', $text, -1, $format);
    
    ?>
 <section class="media-creative-section">
        <div class="media-creative-wrapper">
            <div class="media-creative-content-left">
                {!! $keywords[0] !!}
            </div>
            <div class="media-creative-content-right">
                @if (isset($keywords[2]))
                    {!! $keywords[2] !!}
                @endif
            </div>
            <div class="find-more">
                <a href=" {{ $whatwedo->cta_url }}"> {{ $whatwedo->cta_button_text }}<img
                        src="
                {{ asset('dist/icon-arrow-right-black.5aba9cbd.svg') }}" /> </a>
            </div>
        </div>
    </section>
@if($whatwedo->case_study->count >  0))
<?php
    
    $format = PREG_SPLIT_DELIM_CAPTURE;
    
    $text = $whatwedo->page_text;
    $key = preg_split('/(\[[^]]+\])/', $text, -1, $format);
    
?>
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
                    @if (isset($keywords[0]))
                    {!! $key[0] !!}
                    @endif
                  
                </div>
                <div class="recruiting-tax-content">
                  @if (isset($keywords[2]))
                    {!! $key[2] !!}
                    @endif
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
