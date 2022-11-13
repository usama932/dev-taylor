@extends('layouts.frontend-main')

@section('content')
<div class="topbanner-bg-image">
    @include('layouts.header')
    <section class="media-banner-section">
        <div class="container">
            <div class="media-banner-wrapper">
                <div class="media-banner-content">
                    <div class="mediabanner-logo"><img src="{{ asset('dist/taylor-hawkes-logo-yellow.9d4d837d.svg') }}" /></div>
                    <h3>Media/Creative</h3>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="media-creative-section">
    <div class="media-creative-wrapper">
        <div class="media-creative-content-left">
            <p>We’re currently working with a number of businesses across the media and entertainment sector, providing introductions to some highly-skilled candidates for internal financial and accounting roles.</p>
            <p>
                These are often not typical jobs, which is where our experience makes a real difference. An accountancy role in the media and entertainment industry can mean handling everything from income and payments, to taxes and
                contracts, entirely differently to the corporate world – and often with a time-sensitivity around production schedules too.
            </p>
        </div>
        <div class="media-creative-content-right">
            <p>
                Our ability to find the right person with the right expertise to hit the spot in these positions comes from our understanding of the nuances of the media sector – and which skills and knowledge a prospective
                accounting hire needs to have for different types of roles. It’s often essential that the person can hit the ground running too, which is an important consideration.
            </p>
            <p>
                Whether candidates need to know how to manage longer ‘work in progress’ projects, bid and tender work, or the complicated issues of royalties, multi-currency payments and delayed income, our expertise in the media
                industry means we can introduce experienced people that we know can truly do the job for our client.
            </p>
        </div>
        <div class="find-more">
            <a href="JavaScript:Void(0)"> Looking to build you team or find a new job? <img src="
                {{ asset('dist/icon-arrow-right-black.5aba9cbd.svg') }}" /> </a>
        </div>
    </div>
</section>
<section class="recruiting-tax-section">
    <div class="container">
        <div class="title-wrapper"><h4>Recruiting tax professionals for top-100 accountancy firms</h4></div>
    </div>
    <div class="outer-wrapper">
        <div class="logo-wrapper">
            <div class="logo-image"><img src="{{ asset('dist/ecovis-logo.ea199e33.jpg') }}" /></div>
        </div>
        <div class="recruiting-tax-wrapper">
            <div class="recruiting-tax-content">
                <p>
                    Taylor Hawkes has supported chartered accountants ECOVIS Wingrave Yeats with a series of hires for their tax division. By understanding their specific needs as an innovative top-100 firm, as well as their
                    sociable work culture, we ensured we were putting forward professionals who were both qualified and had the right personality for their work environment. We helped the company bring onboard X high-quality
                    professionals who specialise in areas such as private client tax, corporate tax and VAT, at all levels of seniority. It’s because of our diligence that we’ve developed a trusting relationship, where ECOVIS
                    Wingrave Yeats believe in our recommendations as they are confident in our candidate's capabilities and attitudes.
                </p>
            </div>
            <div class="recruiting-tax-content">
                <p>
                    <label>
                        <span><b>Ruth Potter,</b> Tax Partner</span> ‘Taylor Hawkes has assisted our tax department in the recruitment of numerous service lines and at several different levels. Throughout the years, Taylor Hawkes
                        has supplied us with a variety of specialist candidates, ranging from assistants through to senior managers. Their expertise and network give us the confidence ECOVIS will be meeting with a shortlist of
                        highly qualified tax professionals that match the culture and personality we have at the company.’
                    </label>
                </p>
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
@endsection
@section('scripts')

@parent

@endsection
