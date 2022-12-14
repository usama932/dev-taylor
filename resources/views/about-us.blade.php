@extends('layouts.frontend-main')

@section('content')
<div class="topwhite-wrapper">
    @include('layouts.header')
    <section class="about-banner-section main-banner-section">
       <div class="container">
          <div class="banner-wrapper">
             <div class="banner-content">
                <div class="text-wrapper">

                    <h4>{{$page->excerpt  }}</h4>

                </div>
                @if($page->pagePageCustomFields )
                <div class="button-wrapper"> <a href="{{$page->pagePageCustomFields[1]->field_value ?? ''}}"><button class="btn-blue btn-h51">{{$page->pagePageCustomFields[0]->field_value ?? ''}}</button></a> </div>
                @endif
             </div>
             <div class="banner-slider">
                <div class="slider-inner">
                   <div id="carouselSlider" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                         <div class="active carousel-item">

                            <div class="carousal-image">
                                @if($page->featured_image)
                                    <img src="{{ $page->featured_image->getUrl()}}" alt="Chania" >
                                @endif

                            </div>
                         </div>
                      </div>
                   </div>
                   <div> </div>
                </div>
             </div>
          </div>
          <div class="scroll-down"> <a href="#abouttextsection"> <img src="{{ asset('dist/icon-scroll-grey.e09a911b.svg') }}"> <span>Scroll</span></a> </div>
       </div>
    </section>
 </div>
   <?php
    
    $format = PREG_SPLIT_DELIM_CAPTURE;
    
    $text = $page->page_text;
    $keywords = preg_split('/(\[[^]]+\])/', $text, -1, $format);
    
    ?>
<section id="abouttextsection" class="about-text-section">
    <div class="about-text-wrapper">
        <div class="about-content-left">
                @if (isset($keywords[0]))
                    {!! $keywords[0] !!}
                @endif
        </div>
        <div class="about-content-right">
                @if (isset($keywords[2]))
                    {!! $keywords[2] !!}
                @endif
        </div>
    </div>
</section>
<section class="team-section" id="our-team">
    <div class="section-title">
        <h2>Meet our expert team</h2>
        <img src="{{ asset('dist/icon-arrow-right-white.53b92526.svg') }}" alt="image">
    </div>
    <div class="team-wrapper">
        @php
           $teams =  $WidgetsService->teams();
        @endphp
        <ul class="team-list two-col">
            @foreach ($teams->take(2) as $team)
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5></h5>
                            <p></p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p></p>
                    </div>
                </div>
            </li>
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>{{ $team->name }}</h5>
                            <p>{{ $team->subheading }}</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>{{ $team->content }}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <ul class="four-col team-list">
            <li class="team-item">
                <div class="team-inner">
                    <div class="info-wrapper">
                        <div class="info-content">
                            <p>{{$page->pagePageCustomFields[2]->field_value ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </li>
            @foreach($teams->skip(2)->take(3) as $team)

            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>{{  $team->name }}</h5>
                            <p>{{ $team->subheading }}</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>{{ $team->content }} </p>
                    </div>
                </div>
            </li>

            @endforeach
        </ul>
        <ul class="team-list two-col">
            @foreach($teams->skip(5)->take(2) as $team)
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5></h5>
                            <p></p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p></p>
                    </div>
                </div>
            </li>
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>{{ $team->name }}</h5>
                            <p>{{  $team->subheading}}</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>{{  $team->content }}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
<section class="about-imagetext-section knowledge-mail-section" id="join-us">
    <div class="container">
        <div class="content-wrapper">
            <div class="image-wrapper">
                <div class="image">
                    <p>{{ $page->slidesidSlides[1]->imagetitle ?? 'Enter future slide image title'}}</p>
                </div>
                <div class="mail-wrapper">
                    <p>{{ $page->slidesidSlides[1]->description ?? 'Enter future slide description'}}</p>
                    <div class="blue-button-wrapper">
                        <div class="image-container"><img src="{{ asset('dist/team-member.f5256e24.jpg') }}"></div>
                        <div class="find-more"><a href="{{ $page->slidesidSlides[1]->url ?? '#' }}"> {{ $page->slidesidSlides[1]->cta_button ?? 'Enter future slide CTA button text'}} <img src="{{ asset('dist/icon-arrow-right-white.53b92526.svg') }}"> </a></div>
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
