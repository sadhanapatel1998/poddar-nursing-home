<?php
ob_start();
            include('include/data.php');
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>All Services</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>All Services</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!-- Start Service -->
<section class="main-service-one bg-white no-before" style="background: #fff;">

    <div class="container">
        <div class="main-service-one__top">
            <div class="section-title sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="icon-pharmacy"></span>
                    <p class="section-title__tagline">Our Services</p>
                </div>

                <h2 class="section-title__title title-animation">
                    From Diagnosis to
                    <span>Complete Recovery</span>
                </h2>
            </div>
        </div>
        <div class="swiper-container main-service-one__carousel">
            <div class="row">
                <?php foreach ($services as $service): ?>
                <div class="col-md-3 mb-4">
                    <div class="main-service-one__single">
                        <div class="main-service-one__single-content">
                            <div class="main-service-one__single-title">
                                <h3>
                                    <a href="<?= $service['link']; ?>">
                                        <?= $service['title']; ?>
                                    </a>
                                </h3>
                            </div>
                            <div class="main-service-one__single-text">
                                <p><?= $service['desc']; ?></p>
                                <div class="main-service-one__single-btn">
                                    <a href="<?= $service['link']; ?>">
                                        <span class="fas fa-arrow-right"></span>
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-service-one__single-img">
                            <img src="<?= $service['image']; ?>" alt="<?= $service['title']; ?>">
                            <div class="main-service-one__single-img-icon">
                                <span class="fa <?= $service['icon']; ?>"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>
<!-- End Service -->





<?php
$content = ob_get_clean();
require 'layout.php';
?>