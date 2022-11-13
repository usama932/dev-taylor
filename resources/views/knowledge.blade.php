@extends('layouts.frontend-main')

@section('content')
@include('layouts.header')
<section class="knowledge-banner-section main-banner-section">
    <div class="container">
        <div class="banner-wrapper">
            <div class="banner-content">
                <div class="text-wrapper">
                    {!! $page->page_text !!}
                </div>
            </div>
            <div class="banner-slider">
                <div class="slider-inner">
                    <div id="carouselSlider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="active carousel-item">
                                <div class="carousal-image">
                                    @if($page->featured_image)
                                    <a href="#abouttextsection" target="_blank" style="display: inline-block">
                                        <img src="{{ $page->featured_image->getUrl('thumb') }}">
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="scroll-down">
            <a href="#knowledgeSection"> <img src="{{ asset('dist/icon-scroll-white.f42c481e.svg') }}" /> <span>Scroll</span> </a>
        </div>
    </div>
</section>
<section class="knowledge-section" id="knowledgeSection">
    <div class="container">
        <div class="items-wrapper">
            @foreach ($knowledge as $knowledge)
            <div class="items">
                <p>{{ $knowledge->category->name }}<span>{{  date('M-y', strtotime($knowledge->publish_date)) }}</span></p>
                <h3>
                   {{ $knowledge->name}} <a href="{{ route('knowledge.show',$knowledge->slug) }}"><img src="{{ asset('dist/icon-arrow-right-white.53b92526.svg') }}" /></a>
                </h3>
            </div>

            @endforeach

        </div>
    </div>
</section>
<section class="knowledge-mail-section">
    <div class="container">
        <div class="content-wrapper">
            <div class="image-wrapper">
                <div class="image"><p>Knowledge is king</p></div>
                <div class="mail-wrapper">
                    <h4>Get the latest knowledge and insights direct into your mailbox</h4>
                    <div class="input-wrapper">
                        <input type="text" class="cust-input" placeholder="Email" />
                        <div class="checkbox-wrapper">
                            <input type="checkbox" />
                            <p>I agree to Taylor Hawkes <a href="JavaScript:Void(0)">privacy policy</a></p>
                        </div>
                    </div>
                    <div class="button-wrapper"><button type="button" class="btn-blue btn-h57">Submit</button></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')

@parent

@endsection
