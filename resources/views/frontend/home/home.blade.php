<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend/components/head')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/sbox.css') }}" /> 
</head>

<body>

    <!-- ====== start loading page ====== -->
    @include('frontend/components/loader')
    <!-- ====== end loading page ====== -->

    <!-- ====== start navbar ====== -->
    @include('frontend/components/navbar')
    <!-- ====== end navbar ====== -->

    <!-- ====== start header ====== -->
    <header class="style-2 overflow-hidden"  data-scroll-index="1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="content text-center text-light text-capitalize">
                        <div class="top_info">
                            <h1 class="text-uppercase main-title">
                                <span>TW WORLD</span>
                                <span>TECHNOLOGY</span>
            
                            </h1>
                            <p class="fw-light text-uppercase">
                                Best Solutions for <br> <strong class="fw-bold">Big Data & Technology</strong> Services
                            </p>
                            <!-- <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity class="vid-btn">
                                <i class="bi bi-play-fill wow heartBeat infinite slower"></i>
                            </a> -->
                        </div>
                        <div class="brands mt-200 mb-80">
                            <a href="#" class="logo wow fadeInUp" data-wow-delay="0">
                                <img src="{{ asset('frontend/assets/img/about/about_logos/1.png') }}" alt="">
                            </a>
                            <a href="#" class="logo wow fadeInUp" data-wow-delay="0.2s">
                                <img src="{{ asset('frontend/assets/img/about/about_logos/2.png') }}" alt="">
                            </a>
                            <a href="#" class="logo wow fadeInUp" data-wow-delay="0.4s">
                                <img src="{{ asset('frontend/assets/img/about/about_logos/3.png') }}" alt="">
                            </a>
                            <a href="#" class="logo wow fadeInUp" data-wow-delay="0.6s">
                                <img src="{{ asset('frontend/assets/img/about/about_logos/4.png') }}" alt="">
                            </a>
                            <a href="#" class="logo wow fadeInUp" data-wow-delay="0.8s">
                                <img src="{{ asset('frontend/assets/img/about/about_logos/5.png') }}" alt="">
                            </a>
                        </div>
                        <h4>We can help to maintain and modernize <br> your IT infrastructure & solve various
                            infrastructure-specific <br> issues a business may face.</h4>
                        <p class="d-block mt-40">TW World Technology (M）Sdn Bhd is the partner of choice for many of the world’s leading
                            <br> enterprises, SMEs and technology challengers. We help businesses elevate their value
                            through <br> custom software development, product design, QA and consultancy
                            services.
                        </p>
                        <a href="#" class="btn sm-butn border text-white radius-9 mt-60 hover-darkBlue">
                            <span>More About Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('frontend/assets/img/header/space.jpg') }}" alt="" class="head_shape2 wave">
        <!-- <img src="assets/img/header/header_2.png" alt="" class="head_shape2 wave"> -->
    </header>
    <!-- ====== end header ====== -->

    <!--Contents-->
    <main>

        <!-- ====== start services ====== -->
        <section class="services_projects section-padding">
            <div class="container">
                <div class="section-head mb-30 text-center" data-scroll-index="2">
                    <h2 class="text-white ltspc-20 text-uppercase fs-1 lh-1 mb-70">services</h2>
                </div>
                <div class="services_slider position-relative">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide sbox">
                                <div class="service-box text-white text-center px-4 py-2 brd-light border-end style-2">
                                    <div class="icon mb-30">
                                        <img src="{{ asset('frontend/assets/img/icons/serv_icons/7.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>IT Consultation</h4>
                                        <p class="op-7 mt-20 mb-30 px-3">We provide best IT solutions suit for any type
                                            of business as stragegy, management, etc</p>
                                        <div class="tags d-flex flex-wrap justify-content-center mt-30 style-2">
                                            <a href="#">Strategy</a>
                                            <a href="#">Consultation</a>
                                            <a href="#">Management</a>
                                            <a href="#">Infrastructure</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide sbox">
                                <div class="service-box text-white text-center px-4 py-2 brd-light border-end style-2">
                                    <div class="icon mb-30">
                                        <img src="{{ asset('frontend/assets/img/icons/serv_icons/8.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>Software Development</h4>
                                        <p class="op-7 mt-20 mb-30 px-3">We provide best IT solutions suit for any type
                                            of business as stragegy, management, etc</p>
                                        <div class="tags d-flex flex-wrap justify-content-center mt-30 style-2">
                                            <a href="#">Ecommerce</a>
                                            <a href="#">Landing Page</a>
                                            <a href="#">CMS</a>
                                            <a href="#">Plugin</a>
                                            <a href="#">UniApp (China)</a>
                                            <a href="#">iOS & Android</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide sbox">
                                <div class="service-box text-white text-center px-4 py-2 brd-light border-end style-2">
                                    <div class="icon mb-30">
                                        <img src="{{ asset('frontend/assets/img/icons/serv_icons/9.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>Data Security</h4>
                                        <p class="op-7 mt-20 mb-30 px-3">We provide best IT solutions suit for any type
                                            of business as stragegy, management, etc</p>
                                        <div class="tags d-flex flex-wrap justify-content-center mt-30 style-2">
                                            <a href="#">Management</a>
                                            <a href="#">Backup & Recovery</a>
                                            <a href="#">Transfer</a>
                                            <a href="#">Storerage</a>
                                            <a href="#">Hosting & VPS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination_circle position-relative pagi_white mt-70">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="section-head mb-30 text-center" data-scroll-index="3">
                    <h2 class="text-white ltspc-20 text-uppercase fs-1 lh-1 mb-70 pt-100">works</h2>
                </div>
                <div class="works_slider position-relative">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="work_card text-center d-block">
                                            <div class="img img-cover radius-6 overflow-hidden imgrotate-scale-hover">
                                                <img src="{{ asset('frontend/assets/img/projects/1.png') }}" alt="">
                                            </div>
                                            <div class="info">
                                                <h4 class="text-white mt-4">
                                                    <a href="#">E-commerce Platform</a>
                                                </h4>
                                                <small class="color-lightBlue text-uppercase"><a href="#">Landing Page,</a> <a href="#">UI/UX Design</a> </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="work_card text-center d-block">
                                            <div class="img img-cover radius-6 overflow-hidden imgrotate-scale-hover">
                                                <img src="{{ asset('frontend/assets/img/projects/2.png') }}" alt="">
                                            </div>
                                            <div class="info">
                                                <h4 class="text-white mt-4"><a href="#">Analys & Backup </a></h4>
                                                <small class="color-lightBlue text-uppercase"> <a href="#">data security,</a> <a href="#">IT consultation</a> </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next radius-50 bg-transparent border brd-light"></div>
                    <div class="swiper-button-prev radius-50 bg-transparent border brd-light"></div>
                </div>
                <div class="text-center">
                    <a href="page-portfolio-5.html" class="btn sm-butn border text-white radius-9 mt-60 hover-darkBlue">
                        <span>See All Projects</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- ====== end services ====== -->

        <!-- ====== start choose-us====== -->
        <section class="choose-us style-2 border-top bg-darkBlue brd-light section-padding" data-scroll-index="4">
            <div class="container">
                <div class="section-head mb-30 text-center">
                    <h2 class="text-white ltspc-20 text-uppercase fs-1 lh-1 mb-70">why choose us</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img pe-lg-5">
                            <img class="img img-fluid" src="{{ asset('frontend/assets/img/choose_us/circles.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info">
                            <p class="text-white text-uppercase mb-60">
                                We create differentiated value to rise to the <br> top in this field
                            </p>
                            <ul>
                                <li class="d-flex mb-30">
                                    <div class="icon me-4 flex-shrink-0">
                                        <img src="{{ asset('frontend/assets/img/icons/ch1.png') }}" alt="">
                                    </div>
                                    <div class="inf">
                                        <h5 class="text-white text-capitalize mb-2">Affordable Price</h5>
                                        <small class="text-white op-8">Nanotechnology immersion along the information
                                            high <br> will close the loop on focusing solely</small>
                                    </div>
                                </li>
                                <li class="d-flex mb-30">
                                    <div class="icon me-4 flex-shrink-0">
                                        <img src="{{ asset('frontend/assets/img/icons/ch2.png') }}" alt="">
                                    </div>
                                    <div class="inf">
                                        <h5 class="text-white text-capitalize mb-2">Top-notch Experts Consulting</h5>
                                        <small class="text-white op-8">Our top-notch Experts with much years of
                                            experience <br> certail will give best solutions for your business</small>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="icon me-4 flex-shrink-0">
                                        <img src="{{ asset('frontend/assets/img/icons/ch3.png') }}" alt="">
                                    </div>
                                    <div class="inf">
                                        <h5 class="text-white text-capitalize mb-2">Dedicated Support 24/7</h5>
                                        <small class="text-white op-8">Customer support is always our number one
                                            priority.</small>
                                    </div>
                                </li>
                            </ul>
                            <a href="page-contact-5.html" class="btn sm-butn border text-white radius-9 mt-70 hover-darkBlue">
                                <span>Request A Consultation</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="choose-numbers mt-80">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="num-item">
                                        <div class="num">
                                            <span class="counter">
                                                25
                                            </span>
                                            <span>+</span>
                                        </div>
                                        <div class="inf">
                                            Years of <br> Experience
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="num-item">
                                        <div class="num">
                                            <span class="counter">
                                                1565
                                            </span>
                                            <!-- <span>
                                            K
                                        </span> -->
                                        </div>
                                        <div class="inf">
                                            Projects <br> completed
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="num-item">
                                        <div class="num">
                                            <span class="counter">
                                                240
                                            </span>
                                        </div>
                                        <div class="inf">
                                            Satisfied clients on <br> 24 countries
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end choose-us====== -->

        <!-- ====== start reviews ====== -->
        <section class="reviews style-2 border-top brd-light section-padding bg-darkBlue" data-scroll-index="5">
            <div class="container">
                <div class="section-head mb-30 text-center">
                    <h2 class="text-white ltspc-20 text-uppercase fs-1 lh-1 mb-70">reviews</h2>
                </div>
                <div class="reviews_slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <div class="reviews_card text-center style-2">
                                            <h5 class="text-white lh-4">
                                                “We encountered a problem with processing <br> big data and after only 1
                                                week, TW WORLD TECHNOLOGY’s Experts provided perfect <br> IT solutions, fast process &
                                                affordable price. <br> We’re really satisfied!”
                                            </h5>
                                            <div class="rev_user">
                                                <img src="{{ asset('frontend/assets/img/team/2.jpg') }}" alt="">
                                            </div>
                                            <div class="rev_stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <small class="text-white mt-2 d-block">
                                                <!-- <span class="text-uppercase color-lightBlue">Conor M.</span> <span
                                                    class="op-7">/ Senior Marketing at Amazon</span> -->
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <div class="reviews_card text-center style-2">
                                            <h5 class="text-white lh-4">
                                                “We encountered a problem with processing <br> big data and after only 1
                                                week, TW WORLD TECHNOLOGY’s Experts provided perfect <br> IT solutions, fast process &
                                                affordable price. <br> We’re really satisfied!”
                                            </h5>
                                            <div class="rev_user">
                                                <img src="{{ asset('frontend/assets/img/team/1.jpg') }}" alt="">
                                            </div>
                                            <div class="rev_stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <small class="text-white mt-2 d-block">
                                                <!-- <span class="text-uppercase color-lightBlue">Conor M.</span> <span
                                                    class="op-7">/ Senior Marketing at Amazon</span> -->
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination_circle position-relative pagi_white mt-70">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/img/review/rev_l.png') }}" alt="" class="rev_l">
            <img src="{{ asset('frontend/assets/img/review/rev_r.png') }}" alt="" class="rev_r">
        </section>
        <!-- ====== end reviews ====== -->

        <!-- ====== start pricing ====== -->
        <!-- <section class="pricing style-2 border-top brd-light section-padding" data-scroll-index="6">
            <div class="container">
                <div class="section-head mb-30 text-center">
                    <h2 class="text-white ltspc-20 text-uppercase fs-1 lh-1 mb-70">Pricing & plan</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="content">
                            <div class="toggle_switch d-flex align-items-center justify-content-center mb-20">
                                <div class="form-check form-switch text-white p-0">
                                    <label class="form-check-label" for="monthly-input2"><small>Billed
                                            monthly</small></label>
                                    <input class="form-check-input float-none color-lightBlue" type="checkbox"
                                        id="monthly-input2" checked>
                                    <label class="form-check-label" for="monthly-input2"><small>Billed
                                            annually</small></label>
                                </div>
                            </div>
                            <div class="row justify-content-center gx-0">
                                <div class="col-lg-4">
                                    <div class="pricing_card border-end-0 rounded-start style-2">
                                        <div class="icon">
                                            <img src="assets/img/icons/pr1.png" alt="">
                                        </div>
                                        <p>Personal</p>
                                        <div class="price mb-30">
                                            <div class="monthly_price">
                                                <span class="h2"> 
                                                    <small>$</small> 9.99
                                                </span>
                                                <small class="op-7"> / month </small>
                                            </div>
                                            <div class="yearly_price show">
                                                <span class="h2"> 
                                                    <small>$</small> 9.99
                                                </span>
                                                <small class="op-7"> / year </small>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="border-top py-3 op-8 fw-light text-uppercase">
                                                3 PRojects
                                            </li>
                                            <li class="border-top py-3 op-8 fw-light text-uppercase">
                                                6 Months support
                                            </li>
                                        </ul>
                                        <a href="page-contact-5.html"
                                            class="sm-butn btn border text-white radius-9 mt-50 w-100 hover-lightBlue border-lightBlue">
                                            <span>Get Started Now</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pricing_card recommended style-2">
                                        <span class="hint">Recommended</span>
                                        <div class="icon">
                                            <img src="assets/img/icons/pr2.png" alt="">
                                        </div>
                                        <p>small team</p>
                                        <div class="price mb-30">
                                            <div class="monthly_price">
                                                <span class="h2"> 
                                                    <small>$</small> 19.50
                                                </span>
                                                <small class="op-7"> / month </small>
                                            </div>
                                            <div class="yearly_price show">
                                                <span class="h2"> 
                                                    <small>$</small> 19.50
                                                </span>
                                                <small class="op-7"> / year </small>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="border-top py-3 op-8 fw-light text-uppercase">
                                                15 PRojects
                                            </li>
                                            <li class="border-top py-3 op-8 fw-light text-uppercase">
                                                12 Months support
                                            </li>
                                            <li class="border-top py-3 op-8 fw-light text-uppercase">
                                                seo & marketing
                                            </li>
                                        </ul>
                                        <a href="page-contact-5.html"
                                            class="sm-butn btn border text-white radius-9 mt-50 w-100 hover-lightBlue border-lightBlue">
                                            <span>Get Started Now</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pricing_card border-start-0 rounded-end style-2">
                                        <div class="icon">
                                            <img src="assets/img/icons/pr3.png" alt="">
                                        </div>
                                        <p>enterprise</p>
                                        <div class="price mb-30">
                                            <div class="monthly_price">
                                                <span class="h2"> 
                                                    <small>$</small> 29.99
                                                </span>
                                                <small class="op-7"> / month </small>
                                            </div>
                                            <div class="yearly_price show">
                                                <span class="h2"> 
                                                    <small>$</small> 29.99
                                                </span>
                                                <small class="op-7"> / year </small>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="border-top py-3 op-8 fw-light text-uppercase">
                                                unlimited projects
                                            </li>
                                            <li class="border-top py-3 op-8 fw-light text-uppercase">
                                                lifetime support
                                            </li>
                                            <li class="border-top py-3 op-8 fw-light text-uppercase">
                                                expert consultation
                                            </li>
                                        </ul>
                                        <a href="page-contact-5.html"
                                            class="sm-butn btn border text-white radius-9 mt-50 w-100 hover-lightBlue border-lightBlue">
                                            <span>Get Started Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="text-white text-center mt-50">You have a large team? <a href="page-contact-5.html"
                                    class="text-decoration-underline">Contact us</a> for information about more
                                enterprise
                                options </p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/pricing/shap_l.png" alt="" class="shap_l">
            <img src="assets/img/pricing/shap_r.png" alt="" class="shap_r">
        </section> -->
        <!-- ====== end pricing ====== -->

        <!-- ====== start blog ====== -->
        <!-- <section class="blog style-2 section-padding" data-scroll-index="7">
            <div class="container">
                <div class="section-head mb-30 text-center">
                    <h2 class="text-white ltspc-20 text-uppercase fs-1 lh-1 mb-70">editorial</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="content">
                            <div class="row gx-5">
                                <div class="col-lg-6 border-end brd-light">
                                    <div class="card border-0 bg-transparent rounded-0 text-white mb-4 mb-lg-0">
                                        <div class="img">
                                            <img src="assets/img/blog/5.png" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body px-0">
                                            <small class="d-block date text mt-2">
                                                <a href="#" class="text-uppercase border-end brd-light pe-3 me-3">News</a>
                                                <i class="bi bi-clock me-1"></i>
                                                <a href="#" class="op-8">Posted on 3 Days ago</a>
                                            </small>
                                            <h4 class="fw-normal text-white mt-2">
                                                <a href="page-single-post-5.html">NFT Game! New Oppoturnity</a>
                                            </h4>
                                            <p class="small mt-2 op-8">If there’s one way that wireless technology has
                                                changed the way we work, it’s that will everyone is now connected [...]
                                            </p>
                                            <div
                                                class="d-flex small mt-30 align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2">
                                                        a
                                                    </span>
                                                    <a href="#" class="mt-1">
                                                        By Admin
                                                    </a>
                                                </div>
                                                <div class="r-side mt-1">
                                                    <i class="bi bi-chat-left-text me-1"></i>
                                                    <a href="#">24</a>
                                                    <i class="bi bi-eye ms-4 me-1"></i>
                                                    <a href="#">774k</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div
                                        class="card border-0 bg-transparent rounded-0 text-white border-bottom brd-light pb-4 mb-4">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="img h-100">
                                                    <img src="assets/img/blog/6.png" class="w-100 h-100 radius-2"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="card-body pt-3 pt-lg-0">
                                                    <small class="d-block date text">
                                                        <a href="#" class="text-uppercase border-end brd-light pe-3 me-3">News</a>
                                                        <i class="bi bi-clock me-1"></i>
                                                        <a href="#" class="op-8">12 Days ago</a>
                                                    </small>
                                                    <h6 class="fw-normal text-white mt-2 fs-6"> <a href="#">How To Become A Python Develop Expert</a> </h6>
                                                    <div
                                                        class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                                        <div class="l_side d-flex align-items-center">
                                                            <span
                                                                class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-2 me-2">
                                                                a
                                                            </span>
                                                            <a href="#" class="mt-1">
                                                                By Admin
                                                            </a>
                                                        </div>
                                                        <div class="r-side mt-1">
                                                            <i class="bi bi-chat-left-text me-1"></i>
                                                            <a href="#">24</a>
                                                            <i class="bi bi-eye ms-4 me-1"></i>
                                                            <a href="#">774k</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="card border-0 bg-transparent rounded-0 text-white border-bottom brd-light pb-4 mb-4">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="img h-100">
                                                    <img src="assets/img/blog/7.png" class="w-100 h-100 radius-2"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="card-body pt-3 pt-lg-0">
                                                    <small class="d-block date text">
                                                        <a href="#"
                                                            class="text-uppercase border-end brd-light pe-3 me-3">News</a>
                                                        <i class="bi bi-clock me-1"></i>
                                                        <a href="#" class="op-8">12 Days ago</a>
                                                    </small>
                                                    <h6 class="fw-normal text-white mt-2 fs-6">
                                                        <a href="page-single-post-5.html">AI With Fingerprint</a>
                                                    </h6>
                                                    <div
                                                        class="d-flex small mt-40 align-items-center justify-content-between op-9">
                                                        <div class="l_side d-flex align-items-center">
                                                            <span
                                                                class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-2 me-2">
                                                                a
                                                            </span>
                                                            <a href="#" class="mt-1">
                                                                By Admin
                                                            </a>
                                                        </div>
                                                        <div class="r-side mt-1">
                                                            <i class="bi bi-chat-left-text me-1"></i>
                                                            <a href="#">24</a>
                                                            <i class="bi bi-eye ms-4 me-1"></i>
                                                            <a href="#">774k</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-0 bg-transparent rounded-0 text-white">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="img h-100">
                                                    <img src="assets/img/blog/8.png" class="w-100 h-100 radius-2"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="card-body pt-3 pt-lg-0">
                                                    <small class="d-block date text">
                                                        <a href="#"
                                                            class="text-uppercase border-end brd-light pe-3 me-3">News</a>
                                                        <i class="bi bi-clock me-1"></i>
                                                        <a href="#" class="op-8">12 Days ago</a>
                                                    </small>
                                                    <h6 class="fw-normal text-white mt-2 fs-6">
                                                        <a href="page-single-post-5.html">Solutions For Big Data
                                                            Issue, Expert Perspective</a>
                                                    </h6>
                                                    <div
                                                        class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                                        <div class="l_side d-flex align-items-center">
                                                            <span
                                                                class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-2 me-2">
                                                                a
                                                            </span>
                                                            <a href="#" class="mt-1">
                                                                By Admin
                                                            </a>
                                                        </div>
                                                        <div class="r-side mt-1">
                                                            <i class="bi bi-chat-left-text me-1"></i>
                                                            <a href="#">24</a>
                                                            <i class="bi bi-eye ms-4 me-1"></i>
                                                            <a href="#">774k</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="sm-butn btn border text-white radius-9 mt-80 hover-lightBlue border-lightBlue">
                        <span>See More Articles</span>
                    </a>
                </div>
            </div>
        </section> -->
        <!-- ====== end blog ====== -->


        <!-- ====== start contact ====== -->
        <section class="contact style-2 bg-darkBlue pt-50">
            <div class="container">
                <div class="content text-center text-white">
                    <p class="op-7 mb-70 text-uppercase">Let us opportunity to help you!</p>
                    {{-- <h2 class="ltspc-20 text-uppercase fs-1 lh-1 mb-50">(+6017) 273 9455</h2> --}}
                    <h4 class="fw-normal mb-20 op-9">twworldcom@gmail.com</h4>
                    <h4 class="fw-normal mb-30 op-7">Binjai 8 ， KLCC</h4>
                    <div class="text-center">
                        <a href="{{ route('contact') }}" class="sm-butn btn border text-white radius-9 hover-lightBlue border-lightBlue m-2">
                            <span>Let’s Chat</span>
                        </a>

                    </div>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/img/global2.png') }}" alt="" class="global_2">
        </section>
        <!-- ====== end contact ====== -->
    </main>
    <!--End-Contents-->

    <!-- ====== start footer ====== -->
    @include('frontend/components/footer') 
    <!-- ====== end footer ====== -->



    <!-- ====== request ====== -->

    @include('frontend/components/scripts')
</body>
</html>