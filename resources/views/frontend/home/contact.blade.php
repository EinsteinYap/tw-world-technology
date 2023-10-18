<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from iteck-html.themescamp.com/page-contact-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Oct 2023 02:23:42 GMT -->
<head>
    <!-- Metas -->
@include('frontend/components/head')
<link rel="stylesheet" href="{{ asset('frontned/assets/css/custom-navbar.css') }}" /> 
</head>

<body>

    <!-- ====== start loading page ====== -->
    <!-- <div id="preloader">
    </div> -->
    <!-- ---------- loader ---------- -->
  
    @include('frontend/components/loader')
    <!-- ====== end loading page ====== -->



    <!-- ====== start navbar ====== -->
    <div style="background-color: var(--color-main-grad);">
        @include('frontend/components/navbar')
    </div>
    <!-- ====== end navbar ====== -->

    <!--Contents-->
    <main class="contact-page style-5">
        <!-- ====== start contact page ====== -->
        <section class="contact section-padding pt-50 style-6">
            <div class="container">
                <div class="section-head text-center mb-100 style-5 mt-80">
                    <h2 class="mb-20"> Get In <span> Touch </span> </h2>
                    <p>We will contact again after receive your request in 24h</p>
                </div>
                <div class="text-center mb-100">
                    <h2 class="ltspc-20 text-uppercase fs-1 lh-1 mb-50 mt-30 color-blue5">(+603) 4810 4918</h2>
                    <h4 class="fw-normal mb-20 color-000">twworldcom@gmail.com</h4>
                    <h4 class="fw-normal mb-10 color-000">Binjai 8 Premium Soho, Persiaran KLCC</h4>
                </div>


                 <!-- ====== start contact form ====== -->
                <!-- <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form action="https://iteck-html.themescamp.com/contact.php" class="form" method="post">
                                <p class="text-center text-danger fs-12px mb-30">The field is required mark as *</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="name" class="form-control" placeholder="Name"> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="email" class="form-control" placeholder="Email Address *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="phone" class="form-control"  placeholder="Phone Number (option)">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="website" class="form-control" placeholder="Your Website (option)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <select name="option" class="form-select">
                                                <option value="how can we help" selected>How can we help you?</option>
                                                <option value="option 1">option 1</option>
                                                <option value="option 2">option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea rows="10" name="message" class="form-control" placeholder="How can we help you?"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="form-check d-inline-flex mt-30 mb-30">
                                            <input class="form-check-input me-2 mt-0" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label small" for="flexCheckDefault">
                                                By submitting, i’m agreed to the <a href="#" class="text-decoration-underline">Terms & Conditons</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" value="Send Your Request" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <img src="assets/img/icons/contact_a.png" alt="" class="contact_a">
                    <img src="assets/img/icons/contact_message.png" alt="" class="contact_message">
                </div> -->

                <!-- ====== end contact form ====== -->
            </div>
        </section>
        <!-- ====== end contact page ====== -->

        <!-- ====== start contact page ====== -->
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15935.026909711833!2d101.7175204!3d3.1587078!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d031f7ea97%3A0x74c0f7311c45c965!2sBinjai%208%20Premium%20Soho!5e0!3m2!1sen!2smy!4v1697005391966!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- ====== start contact page ====== -->
    </main>
    <!--End-Contents-->

    <!-- ====== start footer ====== -->
    @include('frontend/components/footer') 
    <!-- ====== end footer ====== -->

    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    @include('frontend/components/scripts')

</body>
</html>