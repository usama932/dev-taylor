<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/taylor-hawkes-logo-black.7789ae87.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
    <link rel="stylesheet" href="{{asset('dist/index.e8265c92.css')}}">
    <title>Taylor Hawkes</title>
    <style>main-banner-section .banner-wrapper {
  justify-content: center;
  align-items: center;
}

.main-banner-section .banner-wrapper .banner-slider {
  height: 450px;
}

.image-1 {
  opacity: 0;
}

.carousel-items h5 {
  letter-spacing: 0;
  opacity: 0;
  font-family: AmazObitaemOstrovV\.2, sans-serif;
  font-size: 73px;
  line-height: 93px;
  transform: translateY(-40px);
}

.carousal-contents {
  width: 100%;
  height: 450px;
  background-color: #000;
  transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
  position: relative;
}

.carousal-contents .carousal-image {
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: background .3s, border-radius .3s, opacity .3s;
  position: relative;
  background-position: center !important;
  background-repeat: no-repeat !important;
  background-size: cover !important;
}

.carousal-contents .carousel-caption {
  z-index: 2;
  margin: 0;
  padding: 0;
  inset: 50% auto auto 50%;
  transform: translate(-50%, -50%);
}

.carousel-inners {
  position: relative;
}

.carousel-items {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
}

.carousel-captions {
  z-index: 999;
  color: #fff;
  width: 100%;
  text-align: center;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}

.carousel_items1 .image-1 {
  z-index: 9;
}

.carousel_items2 .image-1 {
  z-index: 8;
}

.carousel_items3 .image-1 {
  z-index: 7;
}

</style>
</head>

<body class="overflow-hidden">
<div class="loader-section" id="loader">
    <div id="logoContainerLoader" class="loader-image"></div>
</div>
@include('layouts.header')
<section class="main-banner-section">
    <div class="container">
        <div class="banner-wrapper">
            <div class="banner-content">
                <div class="logo-wrapper">
                    <div id="logoContainerHeader" class="logoContainer"></div>
                </div>
                <div class="text-wrapper">
                    <h4 class="blockquote">Data-lead recruitment specialist for finance & accounting</h4>
                    <!-- <h4 class="home-text">
                    <span class="fade1">Data-lead</span>
                    <span class="fade2"> recruitment</span>
                    <span class="fade3"> specialist</span>
                    <span class="fade4"> for</span>
                    <span class="fade5"> finance</span>
                    <span class="fade6"> &</span>
                    <span class="fade7"> accounting</span>
                </h4> -->
                </div>
                <div class="button-wrapper" data-aos="fade-up" data-aos-duration="2500">
                    <a href="JavaScript:Void(0)" class="btn-blue slide-black btn-h51"><span>Get in touch</span></a>
                </div>
            </div>
            <div class="banner-slider">
                <div class="slider-inners">
                    <div id="carouselSliders" class="carousels">
                        <div class="carousel-inners">
                            <div class="carousel-items carousel_items1">
                                <div class="carousal-contents">
                                    <div class="carousal-image image-1" style="background-image: url(&quot;banner-image1.a4bb3140.jpg&quot;)">
                                    </div>
                                    <div class="carousel-captions">
                                        <img id="text_1" class="text_img" src="/technology-white.2f9b0ffb.svg" alt="">
                                        <!-- <h5 id="text_1">technology</h5> -->
                                    </div>
                                </div>
                            </div>
                            <!-- slider items -->

                            <div class="carousel-items carousel_items2">
                                <div class="carousal-contents">
                                    <div class="carousal-image image-1" style="background-image: url(&quot;banner-image2.c50bedac.jpg&quot;)">
                                    </div>
                                    <div class="carousel-captions">
                                        <img id="text_2" class="text_img" src="/accounting-white.5393bf01.svg" alt="">
                                        <!-- <h5 id="text_2">accounting</h5> -->
                                    </div>
                                </div>
                            </div>
                            <!-- slider items -->

                            <div class="carousel-items carousel_items3">
                                <div class="carousal-contents">
                                    <div class="carousal-image image-1" style="background-image: url(&quot;media-banner-image.1f4b0e9d.jpg&quot;)">
                                    </div>
                                    <div class="carousel-captions">
                                        <img id="text_3" class="text_img" src="/creative-media.ae744e7b.svg" alt="">
                                        <!-- <h5 id="text_3">Media/Creative</h5> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="scroll-down home-scroll">
            <a href="#accountingSection">
                <div class="scroll-wrapper">
                    <div id="scroll-white-before" class="scroll-image"></div>
                    <div id="scroll-white-after" class="scroll-image off"></div>
                </div>
                <span>Scroll</span>
            </a>
        </div>
    </div>
</section>
<section class="accounting-section" id="accountingSection" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
    <div class="accounting-wrapper">
        <div class="title-wrapper">
            <h4>Specialist Accounting & Finance Recruitment</h4>
        </div>
        <div class="accounting-content">
            <div class="image-wrapper" data-aos="fade-up" data-aos-duration="1500">
                <div id="itemImage1" class="item-image on"></div>
                <div id="itemImage2" class="item-image"></div>
                <div id="itemImage3" class="item-image"></div>
            </div>
            <div class="slider-wrapper" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="item-wrapper">
                    <div id="item1" class="item">
                        <p>Taylor Hawkes is a specialist accounting and finance recruitment agency, connecting
                            people and businesses throughout the accountancy, tax and audit sectors, as well as
                            in-house financial roles in a range of other industries.</p>
                    </div>
                    <div id="item2" class="item">
                        <p>Our experienced team understand that there’s more to recruitment than just finding a
                            new job, a new contact or a new team member – it’s about the right role, for the right
                            person, in the right company, at the right time.</p>
                    </div>
                    <div id="item3" class="item">
                        <p>Our experienced team understand that there’s more to recruitment than just finding a
                            new job, a new contact or a new team member – it’s about the right role, for the right
                            person, in the right company, at the right time.</p>
                    </div>
                </div>
            </div>
            <div class="button-wrapper">
                <div id="goto2" class="buttonBox">
                    <div class="slider-arrow">
                        <div id="goto2-arrow-before" class="arrow-image before"></div>
                        <div id="goto2-arrow-after" class="arrow-image after off"></div>
                    </div>
                </div>
                <div id="goto1" class="buttonBox">
                    <div class="slider-arrow">
                        <div id="goto1-arrow-before" class="arrow-image before"></div>
                        <div id="goto1-arrow-after" class="arrow-image after off"></div>
                    </div>
                </div>
                <div id="goto3" class="buttonBox">
                    <div class="slider-arrow">
                        <div id="goto3-arrow-before" class="arrow-image before"></div>
                        <div id="goto3-arrow-after" class="arrow-image after off"></div>
                    </div>
                </div>
                <div id="backTo2" class="buttonBox">
                    <div class="slider-arrow">
                        <div id="backTo2-arrow-before" class="arrow-image before"></div>
                        <div id="backTo2-arrow-after" class="arrow-image after off"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="recruitment-section">
    <div class="recruitment-wrapper">
        <div class="recruitment-content">
            <h4 data-aos="fade-right" data-aos-duration="1500">Recruitment data & insights</h4>
            <p data-aos="fade-right" data-aos-duration="2000">As a leading accounting and finance recruitment
                consultancy, we don’t try to put round pegs in square
                holes. Our reputation is based on our market knowledge and understanding of what makes a company and
                a
                person a good match for each other – and we achieve that through our data-driven mindset.</p>
            <p data-aos="fade-right" data-aos-duration="2000"> In practice, this means we work hard to continually
                raise the bar in the financial recruitment sector
                through:</p>
        </div>
        <div class="recruitment-image">
            <div class="image-wrapper">
                <img src="/recruitment-image.ca737995.svg" alt="image">
                <div class="overview-items">
                    <div class="item one"></div>
                    <div class="item two"></div>
                    <div class="item three"></div>
                    <div class="item four"></div>
                    <div class="item five"></div>
                    <div class="item six"></div>
                    <div class="item seven"></div>
                    <div class="desc one">
                        <p>A more in-depth knowledge of a candidate’s skills and experience</p>
                        <div class="next-btn open-two">Next</div>
                        <div class="close-box"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                    <div class="desc two">
                        <p>As a leading accounting and finance recruitment</p>
                        <div class="next-btn open-three">Next</div>
                        <div class="close-box"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                    <div class="desc three">
                        <p>A more in-depth knowledge of a candidate’s skills and experience</p>
                        <div class="next-btn open-four">Next</div>
                        <div class="close-box"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                    <div class="desc four">
                        <p>A more in-depth knowledge of a candidate’s skills and experience, rather than simply
                            their headline qualifications;</p>
                        <div class="next-btn open-five">Next</div>
                        <div class="close-box"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                    <div class="desc five">
                        <p>Taylor Hawkes is a specialist accounting and finance recruitment agency, connecting
                            people</p>
                        <div class="next-btn open-six">Next</div>
                        <div class="close-box"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                    <div class="desc six">
                        <p>A more in-depth knowledge of a candidate’s skills and experience, rather than simply
                            their headline qualifications;</p>
                        <div class="next-btn open-seven">Next</div>
                        <div class="close-box"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                    <div class="desc seven">
                        <p>A more in-depth knowledge of a candidate’s skills and experience, rather than simply
                            their headline qualifications;</p>
                        <div class="next-btn open-one">Next</div>
                        <div class="close-box"><i class="fa-solid fa-xmark"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-wrapper">
    <div id="image-wrapper" class="image-wrapper">
        <div id="image1" class="service-image-outer">
            <div class="service-image" style="opacity: .7; background-image: url(&quot;services-image1.301989de.jpg&quot;)"></div>
            <p data-aos="fade-up" data-aos-duration="3000">We match more than skills; </p>
        </div>
        <div id="image2" class="service-image-outer">
            <div class="service-image" style="opacity: .6; background-image: url(&quot;services-image2.b9303a55.jpg&quot;)"></div>
            <p data-aos="fade-up" data-aos-duration="3000">we also find the culture and personality to be a success.
            </p>
        </div>
    </div>
    <div class="tabs-wrapper">
        <ul class="nav nav-pills" id="pills-tab" role="tablist" data-aos="fade-up" data-aos-duration="1500">
            <div class="slider"></div>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab-1" data-bs-toggle="pill" data-bs-target="#tab-content-1" type="button" role="tab" aria-controls="tab-content-1" aria-selected="true"><span>Accounting
                            practice</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-2" data-bs-toggle="pill" data-bs-target="#tab-content-2" type="button" role="tab" aria-controls="tab-content-2" aria-selected="false"><span>Industry</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-3" data-bs-toggle="pill" data-bs-target="#tab-content-3" type="button" role="tab" aria-controls="tab-content-3" aria-selected="false"><span>CPA</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-4" data-bs-toggle="pill" data-bs-target="#tab-content-4" type="button" role="tab" aria-controls="tab-content-4" aria-selected="false"><span>Global</span></button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent" data-aos="fade-up" data-aos-duration="1500">
            <div class="tab-pane fade show active" id="tab-content-1" role="tabpanel" aria-labelledby="tab-1" tabindex="0">
                <div class="tab-text">
                    <p>We work with companies across the entire sector, which include global names within the top-10
                        leading mid-tier firms, independent practices, and exciting niche boutiques, all looking to
                        grow their teams. Our work to place the highest-quality candidates extends from junior
                        trainees through to experienced partners and directors.</p>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-content-2" role="tabpanel" aria-labelledby="tab-2" tabindex="0">
                <div class="tab-text">
                    <p>We work with companies across the entire sector, which include global names within the top-10
                        leading mid-tier firms, independent practices, and exciting niche boutiques, all looking to
                        grow their teams. Our work to place the highest-quality candidates extends from junior
                        trainees through to experienced partners and directors.</p>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-content-3" role="tabpanel" aria-labelledby="tab-3" tabindex="0">
                <div class="tab-text">
                    <p>We work with companies across the entire sector, which include global names within the top-10
                        leading mid-tier firms, independent practices, and exciting niche boutiques, all looking to
                        grow their teams. Our work to place the highest-quality candidates extends from junior
                        trainees through to experienced partners and directors.</p>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-content-4" role="tabpanel" aria-labelledby="tab-4" tabindex="0">
                <div class="tab-text">
                    <p>We work with companies across the entire sector, which include global names within the top-10
                        leading mid-tier firms, independent practices, and exciting niche boutiques, all looking to
                        grow their teams. Our work to place the highest-quality candidates extends from junior
                        trainees through to experienced partners and directors.</p>
                </div>
            </div>
            <div class="find-more" data-aos="fade-up" data-aos-duration="1500">
                <a href="JavaScript:Void(0)" class="slide-white">
                    <span>Find out more about our work with accountancy practices</span>
                    <div class="arrow-wrapper">
                        <div id="arrow-white-before" class="arrow-image"></div>
                        <div id="arrow-white-after" class="arrow-image off"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<footer class="footer-section">
    <div class="logo-section">
        <div class="logo-wrapper aos-item" data-aos="fade" data-aos-duration="2500">
            <div class="logoContainer">
                <lottie-interactive path="https://taylorhawkes.sanepress.com/json/logo-black.json" interaction="play-on-show"></lottie-interactive>
            </div>
            <!--                    <div id="logoContainerFooter" class="logoContainer"></div>-->
            <span>Taylor Hawkes</span>
        </div>
    </div>
    <div class="top-content">
        <div class="left-wrapper dark-bg">
            <div class="content-wrapper">
                <a href="mailto:info@taylorhawkes.com" class="btn-blue slide-white btn-h57 aos-item" data-aos="fade-up" data-aos-duration="1000">
                    <span>info@taylorhawkes.com</span>
                </a>
            </div>
        </div>
        <div class="right-wrapper light-bg">
            <div class="content-wrapper">
                <div class="address-wrapper">
                    <div class="address-content border-left">
                        <label>United Kingdom</label>
                        <a href="tel:092442038871110">+44 203 887 1110</a>
                        <p>45 Beaufort Court<br>
                            Admirals Way<br>
                            London<br>
                            E14 9XL, UK</p>
                        <a href="https://goo.gl/maps/LmmFRPimXonmwVHD8" target="_blank" class="btn-blue slide-yellow btn-h30"><span>MAP</span></a>
                    </div>
                </div>
                <div class="address-wrapper">
                    <div class="address-content">
                        <label>United States</label>
                        <a href="tel:09212676757011">+1 267-675-7011</a>
                        <p>One Liberty Place<br>
                            1650 Market Street<br>
                            Suite 3600<br>
                            Philadelphia<br>
                            Pa 19103, US</p>
                        <a href="https://goo.gl/maps/BZnw5Hf9s5RMByaZA" target="_blank" class="btn-blue slide-yellow btn-h30"><span>MAP</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-content">
        <div class="left-wrapper dark-bg">
            <ul class="site-links">
                <li><span>©2022 Taylor Hawkes</span></li>
                <li><a href="/legal.html">Privacy Policy</a></li>s
                <li><a href="JavaScript:Void(0)">Cookie Policy</a></li>
            </ul>
        </div>
        <div class="right-wrapper light-bg">
            <ul class="social-links">
                <li><a href="JavaScript:Void(0)" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="JavaScript:Void(0)" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="JavaScript:Void(0)" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="JavaScript:Void(0)" target="_blank"><i class="fa-brands fa-medium"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.8.1/lottie.min.js"></script>
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script src="{{asset('dist/casestudy.ea3444c6.js')}}" id="gsap.min.js-js"></script>
<script src="{{asset('dist/casestudy.10e1d21b.js')}}" defer=""></script>
<script src="{{asset('dist/casestudy.05f49ec4.js')}}" defer=""></script>
<script src="https://unpkg.com/lottie-interactive@latest/dist/lottie-interactive.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
<script src="{{asset('dist/knowledge.18dbc454.js')}}" defer=""></script>

<script src="{{asset('dist/index.3976b811.js')}}" defer=""></script>



</body>

</html>
