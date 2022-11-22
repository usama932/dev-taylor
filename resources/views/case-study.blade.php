@extends('layouts.frontend-main')

@section('content')
@include('layouts.header')
<section class="casestudy-main-banner-section">
    <div class="container">
        <div class="casestudy-banner-wrapper">
            <div class="banner-content">
                <div class="text-wrapper">
                    <h4>for the right</h4>
                    <h3>COMPANY</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="casestudy-text">
    <div class="container">
        <div class="text-wrapper">
            {!! $page->page_text !!}
        </div>
    </div>
</section>
<section class="logo-tabs">
    <div class="container">
        <div class="wrap">
            <ul class="logo-tb">
                <li>
                    <a>
                        <span class="tool" data-tip="Recruiting tax professionals for top-100 accountancy firms" tabindex="1"><img src="{{ asset('dist/1.f8559a19.jpg') }}" /></span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="tool" data-tip="Use this data-tip attribute to store your tool tip message." tabindex="2"><img src="{{ asset('dist/2.5850941a.jpg') }}" /></span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="tool" data-tip="By adding this class you can provide almost any element with a tool tip." tabindex="3"><img src="{{ asset('dist/3.f5e5ba6c.jpg') }}" /></span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="tool" data-tip="By adding this class you can provide almost any element with a tool tip." tabindex="1"><img src="{{ asset('dist/4.a9b89cfb.jpg') }}" /></span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="tool" data-tip="By adding this class you can provide almost any element with a tool tip." tabindex="1"><img src="{{ asset('dist/5.8f074c09.jpg') }}" /></span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="tool" data-tip="By adding this class you can provide almost any element with a tool tip." tabindex="1"><img src="{{ asset('dist/6.f77d8f69.jpg') }}" /></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="service-wrapper casestuday-tabs">

    <div class="tabs-wrapper">
        <ul class="nav nav-pills logo-tb" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab-1" data-bs-toggle="pill" data-bs-target="#tab-content-1" type="button" role="tab" aria-controls="tab-content-1" aria-selected="true"><a><span class="tool" data-tip="Recruiting tax professionals for top-100 accountancy firms"
                    tabindex="1"><img src="assets/images/1.jpg"></span></a></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-2" data-bs-toggle="pill" data-bs-target="#tab-content-2" type="button" role="tab" aria-controls="tab-content-2" aria-selected="false"><a><span class="tool" data-tip="Use this data-tip attribute to store your tool tip message."
                    tabindex="2"><img src="assets/images/2.jpg"></span></a></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-3" data-bs-toggle="pill" data-bs-target="#tab-content-3" type="button" role="tab" aria-controls="tab-content-3" aria-selected="false"><a><span class="tool"
                    data-tip="By adding this class you can provide almost any element with a tool tip."
                    tabindex="3"><img src="assets/images/3.jpg"></span></a></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-4" data-bs-toggle="pill" data-bs-target="#tab-content-4" type="button" role="tab" aria-controls="tab-content-4" aria-selected="false"><a><span class="tool"
                    data-tip="By adding this class you can provide almost any element with a tool tip."
                    tabindex="1"><img src="assets/images/4.jpg"></span></a></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-5" data-bs-toggle="pill" data-bs-target="#tab-content-5" type="button" role="tab" aria-controls="tab-content-4" aria-selected="false"><a><span class="tool"
                    data-tip="By adding this class you can provide almost any element with a tool tip."
                    tabindex="1"><img src="assets/images/5.jpg"></span></a></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-6" data-bs-toggle="pill" data-bs-target="#tab-content-6" type="button" role="tab" aria-controls="tab-content-4" aria-selected="false"><a><span class="tool"
                    data-tip="By adding this class you can provide almost any element with a tool tip."
                    tabindex="1"><img src="assets/images/6.jpg"></span></a></button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="tab-content-1" role="tabpanel" aria-labelledby="tab-1" tabindex="0">
                <div class="tab-text">
                    <section class="recruiting-tax-section casestudy-yellow-bg">
                        <div class="outer-wrapper casestudy-text-outer">
                            <div class="recruiting-tax-wrapper">
                                <div class="recruiting-tax-content">
                                    <p>Taylor Hawkes has supported chartered accountants ECOVIS Wingrave Yeats with a series of hires for
                                        their tax division. By understanding their specific needs as an innovative top-100 firm, as well as
                                        their sociable work culture, we ensured we were putting forward professionals who were both
                                        qualified and had the right personality for their work environment. We helped the company bring
                                        onboard X high-quality professionals who specialise in areas such as private client tax, corporate
                                        tax and VAT, at all levels of seniority. It’s because of our diligence that we’ve developed a
                                        trusting relationship, where ECOVIS Wingrave Yeats believe in our recommendations as they are
                                        confident in our candidate's capabilities and attitudes.</p>
                                </div>
                                <div class="recruiting-tax-content">
                                    <p>
                                        <label><span><b>Ruth Potter,</b> Tax Partner</span> ‘Taylor Hawkes has assisted our tax department
                                            in the recruitment of numerous service lines and at several different levels. Throughout the
                                            years, Taylor Hawkes has supplied us with a variety of specialist candidates, ranging from
                                            assistants through to senior managers. Their expertise and network give us the confidence ECOVIS
                                            will be meeting with a shortlist of highly qualified tax professionals that match the culture
                                            and personality we have at the company.’</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="next-bg image-next casestudy-image">
                            <div class="button-text-wrapper">
                                <p>Want to become the next company to see these results?</p>
                                <button class="btn-blue btn-h51">Email us today</button>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
            <div class="tab-pane fade" id="tab-content-2" role="tabpanel" aria-labelledby="tab-2" tabindex="0">
                <div class="tab-text">
                    <section class="recruiting-tax-section casestudy-yellow-bg">
                        <div class="outer-wrapper casestudy-text-outer">
                            <div class="recruiting-tax-wrapper">
                                <div class="recruiting-tax-content">
                                    <p>Taylor Hawkes has supported chartered accountants ECOVIS Wingrave Yeats with a series of hires for
                                        their tax division. By understanding their specific needs as an innovative top-100 firm, as well as
                                        their sociable work culture, we ensured we were putting forward professionals who were both
                                        qualified and had the right personality for their work environment. We helped the company bring
                                        onboard X high-quality professionals who specialise in areas such as private client tax, corporate
                                        tax and VAT, at all levels of seniority. It’s because of our diligence that we’ve developed a
                                        trusting relationship, where ECOVIS Wingrave Yeats believe in our recommendations as they are
                                        confident in our candidate's capabilities and attitudes.</p>
                                </div>
                                <div class="recruiting-tax-content">
                                    <p>
                                        <label><span><b>Ruth Potter,</b> Tax Partner</span> ‘Taylor Hawkes has assisted our tax department
                                            in the recruitment of numerous service lines and at several different levels. Throughout the
                                            years, Taylor Hawkes has supplied us with a variety of specialist candidates, ranging from
                                            assistants through to senior managers. Their expertise and network give us the confidence ECOVIS
                                            will be meeting with a shortlist of highly qualified tax professionals that match the culture
                                            and personality we have at the company.’</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="next-bg image-next casestudy-image">
                            <div class="button-text-wrapper">
                                <p>Want to become the next company to see these results?</p>
                                <button class="btn-blue btn-h51">Email us today</button>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
            <div class="tab-pane fade" id="tab-content-3" role="tabpanel" aria-labelledby="tab-3" tabindex="0">
                <div class="tab-text">
                    <section class="recruiting-tax-section casestudy-yellow-bg">
                        <div class="outer-wrapper casestudy-text-outer">
                            <div class="recruiting-tax-wrapper">
                                <div class="recruiting-tax-content">
                                    <p>Taylor Hawkes has supported chartered accountants ECOVIS Wingrave Yeats with a series of hires for
                                        their tax division. By understanding their specific needs as an innovative top-100 firm, as well as
                                        their sociable work culture, we ensured we were putting forward professionals who were both
                                        qualified and had the right personality for their work environment. We helped the company bring
                                        onboard X high-quality professionals who specialise in areas such as private client tax, corporate
                                        tax and VAT, at all levels of seniority. It’s because of our diligence that we’ve developed a
                                        trusting relationship, where ECOVIS Wingrave Yeats believe in our recommendations as they are
                                        confident in our candidate's capabilities and attitudes.</p>
                                </div>
                                <div class="recruiting-tax-content">
                                    <p>
                                        <label><span><b>Ruth Potter,</b> Tax Partner</span> ‘Taylor Hawkes has assisted our tax department
                                            in the recruitment of numerous service lines and at several different levels. Throughout the
                                            years, Taylor Hawkes has supplied us with a variety of specialist candidates, ranging from
                                            assistants through to senior managers. Their expertise and network give us the confidence ECOVIS
                                            will be meeting with a shortlist of highly qualified tax professionals that match the culture
                                            and personality we have at the company.’</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="next-bg image-next  casestudy-image">
                            <div class="button-text-wrapper">
                                <p>Want to become the next company to see these results?</p>
                                <button class="btn-blue btn-h51">Email us today</button>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
            <div class="tab-pane fade" id="tab-content-4" role="tabpanel" aria-labelledby="tab-4" tabindex="0">
                <div class="tab-text">
                    <section class="recruiting-tax-section casestudy-yellow-bg">
                        <div class="outer-wrapper casestudy-text-outer">
                            <div class="recruiting-tax-wrapper">
                                <div class="recruiting-tax-content">
                                    <p>Taylor Hawkes has supported chartered accountants ECOVIS Wingrave Yeats with a series of hires for
                                        their tax division. By understanding their specific needs as an innovative top-100 firm, as well as
                                        their sociable work culture, we ensured we were putting forward professionals who were both
                                        qualified and had the right personality for their work environment. We helped the company bring
                                        onboard X high-quality professionals who specialise in areas such as private client tax, corporate
                                        tax and VAT, at all levels of seniority. It’s because of our diligence that we’ve developed a
                                        trusting relationship, where ECOVIS Wingrave Yeats believe in our recommendations as they are
                                        confident in our candidate's capabilities and attitudes.</p>
                                </div>
                                <div class="recruiting-tax-content">
                                    <p>
                                        <label><span><b>Ruth Potter,</b> Tax Partner</span> ‘Taylor Hawkes has assisted our tax department
                                            in the recruitment of numerous service lines and at several different levels. Throughout the
                                            years, Taylor Hawkes has supplied us with a variety of specialist candidates, ranging from
                                            assistants through to senior managers. Their expertise and network give us the confidence ECOVIS
                                            will be meeting with a shortlist of highly qualified tax professionals that match the culture
                                            and personality we have at the company.’</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="next-bg image-next casestudy-image">
                            <div class="button-text-wrapper">
                                <p>Want to become the next company to see these results?</p>
                                <button class="btn-blue btn-h51">Email us today</button>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
            <div class="tab-pane fade" id="tab-content-5" role="tabpanel" aria-labelledby="tab-5" tabindex="0">
                <div class="tab-text">
                    <section class="recruiting-tax-section casestudy-yellow-bg">
                        <div class="outer-wrapper casestudy-text-outer">
                            <div class="recruiting-tax-wrapper">
                                <div class="recruiting-tax-content">
                                    <p>Taylor Hawkes has supported chartered accountants ECOVIS Wingrave Yeats with a series of hires for
                                        their tax division. By understanding their specific needs as an innovative top-100 firm, as well as
                                        their sociable work culture, we ensured we were putting forward professionals who were both
                                        qualified and had the right personality for their work environment. We helped the company bring
                                        onboard X high-quality professionals who specialise in areas such as private client tax, corporate
                                        tax and VAT, at all levels of seniority. It’s because of our diligence that we’ve developed a
                                        trusting relationship, where ECOVIS Wingrave Yeats believe in our recommendations as they are
                                        confident in our candidate's capabilities and attitudes.</p>
                                </div>
                                <div class="recruiting-tax-content">
                                    <p>
                                        <label><span><b>Ruth Potter,</b> Tax Partner</span> ‘Taylor Hawkes has assisted our tax department
                                            in the recruitment of numerous service lines and at several different levels. Throughout the
                                            years, Taylor Hawkes has supplied us with a variety of specialist candidates, ranging from
                                            assistants through to senior managers. Their expertise and network give us the confidence ECOVIS
                                            will be meeting with a shortlist of highly qualified tax professionals that match the culture
                                            and personality we have at the company.’</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="next-bg image-next casestudy-image">
                            <div class="button-text-wrapper">
                                <p>Want to become the next company to see these results?</p>
                                <button class="btn-blue btn-h51">Email us today</button>
                            </div>
                        </div>
                    </section>
                </div>

            </div>

            <div class="tab-pane fade" id="tab-content-6" role="tabpanel" aria-labelledby="tab-6" tabindex="0">
                <div class="tab-text">
                    <section class="recruiting-tax-section casestudy-yellow-bg">
                        <div class="outer-wrapper casestudy-text-outer">
                            <div class="recruiting-tax-wrapper">
                                <div class="recruiting-tax-content">
                                    <p>Taylor Hawkes has supported chartered accountants ECOVIS Wingrave Yeats with a series of hires for
                                        their tax division. By understanding their specific needs as an innovative top-100 firm, as well as
                                        their sociable work culture, we ensured we were putting forward professionals who were both
                                        qualified and had the right personality for their work environment. We helped the company bring
                                        onboard X high-quality professionals who specialise in areas such as private client tax, corporate
                                        tax and VAT, at all levels of seniority. It’s because of our diligence that we’ve developed a
                                        trusting relationship, where ECOVIS Wingrave Yeats believe in our recommendations as they are
                                        confident in our candidate's capabilities and attitudes.</p>
                                </div>
                                <div class="recruiting-tax-content">
                                    <p>
                                        <label><span><b>Ruth Potter,</b> Tax Partner</span> ‘Taylor Hawkes has assisted our tax department
                                            in the recruitment of numerous service lines and at several different levels. Throughout the
                                            years, Taylor Hawkes has supplied us with a variety of specialist candidates, ranging from
                                            assistants through to senior managers. Their expertise and network give us the confidence ECOVIS
                                            will be meeting with a shortlist of highly qualified tax professionals that match the culture
                                            and personality we have at the company.’</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="next-bg image-next casestudy-image">
                            <div class="button-text-wrapper">
                                <p>Want to become the next company to see these results?</p>
                                <button class="btn-blue btn-h51">Email us today</button>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')

@parent

@endsection
