<?php
ob_start();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>Blogs</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!-- Blog One Start-->
<section class="blog-one">
    <div class="blog-one__shape-2"></div>
    <div class="blog-one__shape-3"></div>

    <div class="container">

        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="icon-health-professional"></span>
                <p class="section-title__tagline">Health Insights</p>
            </div>

            <h2 class="section-title__title title-animation">
                Stay Informed,
                <span>Stay Healthy</span>
            </h2>
        </div>

        <div class="row">

            <!-- Blog 1 -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="assets/images/blog/blog-1.jpg" alt="Health Checkup">
                    </div>

                    <div class="blog-one__content">
                        <div class="blog-one__shape-1">
                            <img src="assets/images/shapes/blog-one-shape-1.png" alt="">
                        </div>

                        <div class="blog-one__content-inner">

                            <h3 class="blog-one__title">
                                    Why Regular Health Checkups Are Essential for a Healthier Tomorrow
                            </h3>

                            <p class="blog-one__text">
                                Routine health checkups help detect medical conditions early, improve treatment
                                outcomes, and support long-term wellness for every stage of life.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog 2 -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="assets/images/blog/blog-2.jpg" alt="Healthy Lifestyle">
                    </div>

                    <div class="blog-one__content">
                        <div class="blog-one__shape-1">
                            <img src="assets/images/shapes/blog-one-shape-1.png" alt="">
                        </div>

                        <div class="blog-one__content-inner">

                            <h3 class="blog-one__title">
                                    Simple Daily Habits That Can Build a Healthier and Happier Life
                            </h3>

                            <p class="blog-one__text">
                                Small daily habits like balanced nutrition, regular exercise, and quality sleep can make
                                a lasting difference to your overall health.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog 3 -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="assets/images/blog/blog-3.jpg" alt="Doctor Consultation">
                    </div>

                    <div class="blog-one__content">
                        <div class="blog-one__shape-1">
                            <img src="assets/images/shapes/blog-one-shape-1.png" alt="">
                        </div>

                        <div class="blog-one__content-inner">

                            <h3 class="blog-one__title">
                                    When Should You Visit a Doctor Before Minor Symptoms Become Serious
                            </h3>

                            <p class="blog-one__text">
                                Don't ignore persistent symptoms or unusual discomfort, as timely medical consultation
                                can prevent complications and improve recovery.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Blog One End-->

<?php
$content = ob_get_clean();
require 'layout.php';
?>