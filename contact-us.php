<?php
ob_start();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>Contact Us</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!-- Quick Contact One Start -->
<div class="quick-contact-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="quick-contact-one__location">
                    <div class="quick-contact-one__location-inner">
                        <div class="row">

                            <!-- Phone -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="quick-contact-one__location-single">
                                    <div class="quick-contact-one__location-icon">
                                        <i class="icon-phone-call"></i>
                                    </div>
                                    <div class="quick-contact-one__location-text">
                                        <p>Call Us</p>
                                        <h3><a href="tel:+919958170476">+91 9958170476</a></h3>
                                        <h3><a href="tel:+919318413696">+91 9318413696</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="quick-contact-one__location-single">
                                    <div class="quick-contact-one__location-icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="quick-contact-one__location-text">
                                        <p>Email Us</p>
                                        <h3><a href="mailto:poddarhospital@gmail.com">poddarhospital@gmail.com</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="quick-contact-one__location-single">
                                    <div class="quick-contact-one__location-icon">
                                        <i class="icon-pin"></i>
                                    </div>
                                    <div class="quick-contact-one__location-text">
                                        <p>Our Location</p>
                                        <h6>Poddar Nursing Home Pvt. Ltd. J-62 & 64, Patel Nagar-I, Ghaziabad – 201001, Uttar Pradesh, India</h6>
                                    </div>
                                </div>
                            </div>

                            <!-- Timings -->
                            <!-- <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="quick-contact-one__location-single">
                                    <div class="quick-contact-one__location-icon">
                                        <i class="icon-clock"></i>
                                    </div>
                                    <div class="quick-contact-one__location-text">
                                        <p>OPD Hours</p>
                                        <h3>Mon - Sat | 11 AM - 8 PM</h3>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick Contact One End -->


<!-- Main Contact Form Start -->
<section class="main-contact-form">
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="icon-tooth"></span>
                <p class="section-title__tagline">Care Call</p>
            </div>
            <h2 class="section-title__title title-animation">
                Get A Free <span>Quote</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <ul class="quick-contact-one__inner clearfix list-unstyled">
                    <li class="quick-contact-one__single">
                        <div class="quick-contact-one__single-icon">
                            <i class="icon-clock"></i>
                        </div>

                        <div class="quick-contact-one__single-text">
                            <h3>Hospital Hours</h3>
                            <p>Mon – Sat: Open 24 Hours | Sunday: Closed</p>
                        </div>

                        <div class="quick-contact-one__single-btn">
                            <a href="contact-us.php" class="thm-btn">
                                <span class="fas fa-arrow-right"></span>
                                View Hours
                            </a>
                        </div>
                    </li>
                    <li class="quick-contact-one__single quick-contact-one__single--innstyle2">
                        <div class="quick-contact-one__title">
                            <h4>Get Social</h4>
                            <div class="quick-contact-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <div class="main-contact-form__inner">
                    <form id="contact-form" class="contact-form-validated contact-page__form" action="assets/inc/sendemail.php" method="POST">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input">
                                    <input type="text" name="name" placeholder="Your name" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input">
                                    <input type="email" name="email" placeholder="Your Email" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input">
                                    <input type="text" placeholder="Mobile" name="phone" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input">
                                    <input type="text" placeholder="Subject" name="subject" required="">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-page__input">
                                    <textarea name="message" placeholder="Messege" required=""></textarea>
                                </div>
                            </div>
                            <div class="contact-page__btn">
                                <button type="submit" class="thm-btn" data-loading-text="Please wait...">
                                    <span class="fas fa-arrow-right"></span>
                                    Send A Message
                                </button>
                            </div>
                        </div>
                        <div class="result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Contact Form End -->


<!-- Google Map One Start -->
<section class="google-map-one">
    <div class="container">
        <div class="google-map-one__inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.6358445136475!2d77.43130990000002!3d28.670620399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1b694efa015%3A0x88efd4c94b1f3d9a!2sPoddar%20Nursing%20Home%20Ghaziabad!5e0!3m2!1sen!2sin!4v1789377960736!5m2!1sen!2sin" class="google-map__one-box"  allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!-- Google Map One End -->



<?php
$content = ob_get_clean();
require 'layout.php';
?>