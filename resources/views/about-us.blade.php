@extends('layouts.frontend-main')

@section('content')
<div class="topwhite-wrapper">
    @include('layouts.header')
    <section class="about-banner-section main-banner-section">
       <div class="container">
          <div class="banner-wrapper">
             <div class="banner-content">
                <div class="text-wrapper">
                    @if($page->slidesidSlides)
                   <h4>{{$page->slidesidSlides[0]->title  }}</h4>
                   @endif
                </div>
                @if($page->slidesidSlides[0]->cta_button )
                <div class="button-wrapper"> <a href="{{$page->slidesidSlides[0]->url}} ? '' "><button class="btn-blue btn-h51">{{ $page->slidesidSlides[0]->cta_button  }}</button></a> </div>
                @endif
             </div>
             <div class="banner-slider">
                <div class="slider-inner">
                   <div id="carouselSlider" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                         <div class="active carousel-item">
                            <div class="carousal-image ">
                                @if($page->featured_image)
                                <a href="#abouttextsection" target="_blank" style="display: inline-block">
                                    <img src="{{ $page->featured_image->getUrl('thumb') }}">
                                </a>
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
<section id="abouttextsection" class="about-text-section">
    <div class="about-text-wrapper">
        <div class="about-content-left">
            {{ $page->content }}
        </div>
        <div class="about-content-right">
            <p> Most importantly, throughout everything we do, you’ll see the core Taylor Hawkes values – where our experience, connections and deep-sector knowledge support our data to make the recruitment process more effective for everyone involved.</p>
            <p>In only a short space of time, we are proud to have already become a respected adviser in the sector and are committed to changing the face of accounting recruitment as we continue to grow – forging long-term and trusted relationships
                with clients and candidates alike.</p>
            <p>Most importantly, throughout everything we do, you’ll see the core Taylor Hawkes values – where our experience, connections and deep-sector knowledge support our data to make the recruitment process more effective for everyone involved.</p>
        </div>
    </div>
</section>
<section class="team-section">
    <div class="section-title">
        <h2>Meet our expert team</h2>
        <img src="{{ asset('dist/icon-arrow-right-white.53b92526.svg') }}" alt="image">
    </div>
    <div class="team-wrapper">
        <ul class="team-list two-col">
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>Peter Watson</h5>
                            <p>Accountancy Practices Expert</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>Liam leads Taylor Hawkes' recruiting team of audit, outsourcing and financial reporting specialists. His portfolio of clients typically consists of Taylor Hawkes’ larger corporate firms, with fantastic connections with a range
                            of global top-10 and top-20 firms. With a degree in accountancy and finance and eight years' recruitment experience in the sector, he has built a vast client portfolio who all believe in the quality of candidates Liam brings
                            to the table. He also works with a wide range of firms internationally, including in the Cayman Islands, Bermuda, the Channel Islands, and other international finance hubs. </p>
                    </div>
                </div>
            </li>
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>Peter Watson</h5>
                            <p>Accountancy Practices Expert</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>Liam leads Taylor Hawkes' recruiting team of audit, outsourcing and financial reporting specialists. His portfolio of clients typically consists of Taylor Hawkes’ larger corporate firms, with fantastic connections with a range
                            of global top-10 and top-20 firms. With a degree in accountancy and finance and eight years' recruitment experience in the sector, he has built a vast client portfolio who all believe in the quality of candidates Liam brings
                            to the table. He also works with a wide range of firms internationally, including in the Cayman Islands, Bermuda, the Channel Islands, and other international finance hubs. </p>
                    </div>
                </div>
            </li>
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>Peter Watson</h5>
                            <p>Accountancy Practices Expert</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>Liam leads Taylor Hawkes' recruiting team of audit, outsourcing and financial reporting specialists. His portfolio of clients typically consists of Taylor Hawkes’ larger corporate firms, with fantastic connections with a range
                            of global top-10 and top-20 firms. With a degree in accountancy and finance and eight years' recruitment experience in the sector, he has built a vast client portfolio who all believe in the quality of candidates Liam brings
                            to the table. He also works with a wide range of firms internationally, including in the Cayman Islands, Bermuda, the Channel Islands, and other international finance hubs. </p>
                    </div>
                </div>
            </li>
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>Peter Watson</h5>
                            <p>Accountancy Practices Expert</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>Liam leads Taylor Hawkes' recruiting team of audit, outsourcing and financial reporting specialists. His portfolio of clients typically consists of Taylor Hawkes’ larger corporate firms, with fantastic connections with a range
                            of global top-10 and top-20 firms. With a degree in accountancy and finance and eight years' recruitment experience in the sector, he has built a vast client portfolio who all believe in the quality of candidates Liam brings
                            to the table. He also works with a wide range of firms internationally, including in the Cayman Islands, Bermuda, the Channel Islands, and other international finance hubs. </p>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="four-col team-list">
            <li class="team-item">
                <div class="team-inner">
                    <div class="info-wrapper">
                        <div class="info-content">
                            <p>Our senior team come from a range of backgrounds, bringing their experience and ideas together to ensure Taylor Hawkes continues to evolve for its clients and candidates.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>Peter Watson</h5>
                            <p>Accountancy Practices Expert</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>Liam leads Taylor Hawkes' recruiting team of audit, outsourcing and financial reporting specialists. His portfolio of clients typically consists of Taylor Hawkes’ larger corporate firms, with fantastic connections with a range
                            of global top-10 and top-20 firms. With a degree in accountancy and finance and eight years' recruitment experience in the sector, he has built a vast client portfolio who all believe in the quality of candidates Liam brings
                            to the table. He also works with a wide range of firms internationally, including in the Cayman Islands, Bermuda, the Channel Islands, and other international finance hubs. </p>
                    </div>
                </div>
            </li>
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>Peter Watson</h5>
                            <p>Accountancy Practices Expert</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>Liam leads Taylor Hawkes' recruiting team of audit, outsourcing and financial reporting specialists. His portfolio of clients typically consists of Taylor Hawkes’ larger corporate firms, with fantastic connections with a range
                            of global top-10 and top-20 firms. With a degree in accountancy and finance and eight years' recruitment experience in the sector, he has built a vast client portfolio who all believe in the quality of candidates Liam brings
                            to the table. He also works with a wide range of firms internationally, including in the Cayman Islands, Bermuda, the Channel Islands, and other international finance hubs. </p>
                    </div>
                </div>
            </li>
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>Peter Watson</h5>
                            <p>Accountancy Practices Expert</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>Liam leads Taylor Hawkes' recruiting team of audit, outsourcing and financial reporting specialists. His portfolio of clients typically consists of Taylor Hawkes’ larger corporate firms, with fantastic connections with a range
                            of global top-10 and top-20 firms. With a degree in accountancy and finance and eight years' recruitment experience in the sector, he has built a vast client portfolio who all believe in the quality of candidates Liam brings
                            to the table. He also works with a wide range of firms internationally, including in the Cayman Islands, Bermuda, the Channel Islands, and other international finance hubs. </p>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="team-list two-col">
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>Peter Watson</h5>
                            <p>Accountancy Practices Expert</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>Liam leads Taylor Hawkes' recruiting team of audit, outsourcing and financial reporting specialists. His portfolio of clients typically consists of Taylor Hawkes’ larger corporate firms, with fantastic connections with a range
                            of global top-10 and top-20 firms. With a degree in accountancy and finance and eight years' recruitment experience in the sector, he has built a vast client portfolio who all believe in the quality of candidates Liam brings
                            to the table. He also works with a wide range of firms internationally, including in the Cayman Islands, Bermuda, the Channel Islands, and other international finance hubs. </p>
                    </div>
                </div>
            </li>
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>Peter Watson</h5>
                            <p>Accountancy Practices Expert</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>Liam leads Taylor Hawkes' recruiting team of audit, outsourcing and financial reporting specialists. His portfolio of clients typically consists of Taylor Hawkes’ larger corporate firms, with fantastic connections with a range
                            of global top-10 and top-20 firms. With a degree in accountancy and finance and eight years' recruitment experience in the sector, he has built a vast client portfolio who all believe in the quality of candidates Liam brings
                            to the table. He also works with a wide range of firms internationally, including in the Cayman Islands, Bermuda, the Channel Islands, and other international finance hubs. </p>
                    </div>
                </div>
            </li>
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>Peter Watson</h5>
                            <p>Accountancy Practices Expert</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>Liam leads Taylor Hawkes' recruiting team of audit, outsourcing and financial reporting specialists. His portfolio of clients typically consists of Taylor Hawkes’ larger corporate firms, with fantastic connections with a range
                            of global top-10 and top-20 firms. With a degree in accountancy and finance and eight years' recruitment experience in the sector, he has built a vast client portfolio who all believe in the quality of candidates Liam brings
                            to the table. He also works with a wide range of firms internationally, including in the Cayman Islands, Bermuda, the Channel Islands, and other international finance hubs. </p>
                    </div>
                </div>
            </li>
            <li class="team-item">
                <div class="team-inner">
                    <a href="JavaScript:Void(0)" class="team-image">
                        <div class="team-info">
                            <h5>Peter Watson</h5>
                            <p>Accountancy Practices Expert</p>
                        </div>
                    </a>
                    <div class="team-content">
                        <p>Liam leads Taylor Hawkes' recruiting team of audit, outsourcing and financial reporting specialists. His portfolio of clients typically consists of Taylor Hawkes’ larger corporate firms, with fantastic connections with a range
                            of global top-10 and top-20 firms. With a degree in accountancy and finance and eight years' recruitment experience in the sector, he has built a vast client portfolio who all believe in the quality of candidates Liam brings
                            to the table. He also works with a wide range of firms internationally, including in the Cayman Islands, Bermuda, the Channel Islands, and other international finance hubs. </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="about-imagetext-section knowledge-mail-section">
    <div class="container">
        <div class="content-wrapper">
            <div class="image-wrapper">
                <div class="image">
                    <p>Join the future of recruiting</p>
                </div>
                <div class="mail-wrapper">
                    <p> Taylor Hawkes is a trusted name across practice and industry, one that stands for quality and insight. We thrive on the experience and expertise of our team, who are a key part of what makes us different from others.</p>
                    <p>We challenge our people to continually raise the bar in the recruitment space by building an unrivalled knowledge of the sector and network of skilled candidates. If you think you have the right expertise to join our team, or you
                        feel we’d be a good fit for your skills and experience, we’d be happy to hear from you.</p>
                    <div class="blue-button-wrapper">
                        <div class="image-container"><img src="{{ asset('dist/team-member.f5256e24.jpg') }}"></div>
                        <div class="find-more"><a href="JavaScript:Void(0)"> Talk to Sarah about joining our UK or US teams <img src="{{ asset('dist/icon-arrow-right-white.53b92526.svg') }}"> </a></div>
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
