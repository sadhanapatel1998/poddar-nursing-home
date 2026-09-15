<?php
ob_start();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>Gallery</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->


<section class="gallery-section">
    <div class="container">
        <div class="section-title text-center sec-title-animation animation-style1">
            <div class="section-title__tagline-box">
                <span class="icon-health-professional"></span>
                <p class="section-title__tagline">Our Gallery</p>
            </div>
            <h2 class="section-title__title title-animation">
                Hospital
                <span>Gallery</span>
            </h2>
        </div>

        <div class="row gallery-popup">

            <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                <a href="assets/images/gallery/gal-1.jpeg" class="gallery-item">
                    <img src="assets/images/gallery/gal-1.jpeg" alt="Gallery">
                    <span><i class="fas fa-search-plus"></i></span>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                <a href="assets/images/gallery/gal-2.jpeg" class="gallery-item">
                    <img src="assets/images/gallery/gal-2.jpeg" alt="Gallery">
                    <span><i class="fas fa-search-plus"></i></span>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                <a href="assets/images/gallery/gal-3.jpeg" class="gallery-item">
                    <img src="assets/images/gallery/gal-3.jpeg" alt="Gallery">
                    <span><i class="fas fa-search-plus"></i></span>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                <a href="assets/images/gallery/gal-4.jpeg" class="gallery-item">
                    <img src="assets/images/gallery/gal-4.jpeg" alt="Gallery">
                    <span><i class="fas fa-search-plus"></i></span>
                </a>
            </div>

        </div>

    </div>
</section>



<?php
$content = ob_get_clean();
require 'layout.php';
?>