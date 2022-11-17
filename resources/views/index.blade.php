@extends('layouts.frontend-main')

@section('content')
<div class="loader-section" id="loader">
    <div class="loader-image">
        <img src="{{ asset('dist/taylor-hawkes-logo-black.c9014c2b.svg') }}">
    </div>
</div>

@include('layouts.header')
<section class="main-banner-section">
    <div class="container">
        <div class="banner-wrapper">
            <div class="banner-content">
                <div class="logo-wrapper"> <img src="{{ asset('dist/taylor-hawkes-logo-black.c9014c2b.svg') }}"> </div>
                <div class="text-wrapper">
                    <h4>Data-lead recruitment specialist for finance & accounting</h4>
                </div>
                <div class="button-wrapper"> <a href="JavaScript:Void(0)" class="btn-blue btn-h51">Get in touch</a> </div>
            </div>
            <div class="banner-slider">
                <div class="slider-inner">
                   <div id="carouselSlider" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        @foreach($top_slides as $slider)
                        @foreach ($slider->sliderSlides  as $key => $slides)
                        <div class=" carousel-item {{$key == 0 ? 'active' : '' }}">
                            <div class="carousal-image ">
                                <img src="{{ asset('dist/services-image1.543a7c77.jpg') }}" class="carousal-image" alt="Chania">
                               <div class="carousel-caption">
                                  <h5>{{ $slides->imagetitle }}</h5>
                               </div>
                            </div>
                         </div>
                        @endforeach

                        @endforeach
                      </div>
                   </div>
                </div>
             </div>
        </div>
        <div class="scroll-down">
            <a href="#accountingSection"> <img src="{{ asset('dist/icon-scroll-white.f42c481e.svg') }}"> <span>Scroll</span> </a>
        </div>
    </div>
</section>
                 <section class="accounting-section" id="accountingSection">
                    <div class="accounting-wrapper">
                        <div class="title-wrapper">
                            <h4>Specialist Accounting & Finance Recruitment</h4>
                        </div>
                        <div class="accounting-content">
                            <div class="image-wrapper"> <img src="{{ asset('dist/accounting-image.10c416a6.png') }}" alt="image"> </div>
                            <div class="slider-wrapper">
                                <div id="testimonials" class="owl-carousel">
                                    @foreach ($specialist_slider->sliderSlides as $key => $slide)
                                        <div class="item">
                                            <p>{{ $slide->description }}</p>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </section>>
<section class="recruitment-section">
    <div class="recruitment-wrapper">
        <div class="recruitment-content">
            <h4>Recruitment data & insights</h4>
            <p>As a leading accounting and finance recruitment consultancy, we don’t try to put round pegs in square holes. Our reputation is based on our market knowledge and understanding of what makes a company and a person a good match for each other
                – and we achieve that through our data-driven mindset.</p>
            <p> In practice, this means we work hard to continually raise the bar in the financial recruitment sector through:</p>
        </div>
        <div class="recruitment-image">
            <div class="image-wrapper">
                <img src="{{ asset('dist/recruitment-image.4e34f13c.png') }}" alt="image">
                <div class="overview-items">
                    <div class="item one"></div>
                    <div class="item two"></div>
                    <div class="item three"></div>
                    <div class="four item"></div>
                    <div class="five item"></div>
                    <div class="item six"></div>
                    <div class="desc one">
                        <p>{{ $recruitment_slider->sliderSlides[0]->description ?? '' }}</p>
                        <a href="JavaScript:Void(0)">Next</a>
                    </div>
                    <div class="desc two">
                        <p>{{ $recruitment_slider->sliderSlides[1]->description  ?? ''}}</p>
                        <a href="JavaScript:Void(0)">Next</a>
                    </div>
                    <div class="desc three">
                        <p>{{ $recruitment_slider->sliderSlides[2]->description  ?? '' }}</p>
                        <a href="JavaScript:Void(0)">Next</a>
                    </div>
                    <div class="desc four">
                        <p>{{ $recruitment_slider->sliderSlides[3]->description  ?? '' }}</p>
                        <a href="JavaScript:Void(0)">Next</a>
                    </div>
                    <div class="desc five">
                        <p>{{ $recruitment_slider->sliderSlides[4]->description   ?? ''}}</p>
                        <a href="JavaScript:Void(0)">Next</a>
                    </div>
                    <div class="desc six">
                        <p>{{ $recruitment_slider->sliderSlides[5]->description  ?? '' }}</p>
                        <a href="JavaScript:Void(0)">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-wrapper">
    <div class="image-wrapper">
        <div class="image-1 service-image">
            <p>We match more than skills; </p>
        </div>
        <div class="image-2 service-image">
            <p>we also find the culture and personality to be a success.</p>
        </div>
    </div>
    @php
        $whatwedos =  $WhatwedoService->whatwedo();
    @endphp
    <div class="tabs-wrapper">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            @foreach ($whatwedos as $key => $whatwedo)
            <li class="nav-item" role="presentation"> <button class="nav-link {{$key == 0 ? 'active' : '' }}" id="tab-1" data-bs-toggle="pill" data-bs-target="#tab-content{{ $whatwedo->id }}" type="button" role="tab" aria-controls="tab-content-1" aria-selected="true">{{ $whatwedo->title }}</button> </li>
            @endforeach


        </ul>
        <div class="tab-content" id="pills-tabContent">
            @foreach ($whatwedos as $key => $whatwedo)
            <div class="{{$key == 0 ? 'active' : '' }} fade show tab-pane" id="tab-content{{ $whatwedo->id }}" role="tabpanel" aria-labelledby="tab-1" tabindex="0">
                <div class="tab-text">
                    <p>{!! $whatwedo->excerpt !!}</p>
                </div>
                @if($whatwedo->cta_button_text)
                <div class="find-more"> <a href="{!! $whatwedo->cta_url !!}">{!! $whatwedo->cta_button_text !!} <img src="{{ asset('dist/icon-arrow-right-white.53b92526.svg') }}"> </a> </div>
                @endif
            </div>

            @endforeach

        </div>
    </div>
</section>

@endsection
@section('scripts')

@parent

@endsection
