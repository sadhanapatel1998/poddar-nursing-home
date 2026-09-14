<?php
ob_start();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>Pathology</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>Pathology</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Service Details Start-->
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 order-md-1 order-2 mt-4 mt-md-0">
                <?= include('include/service-sidebar.php'); ?>
            </div>
            <div class="col-xl-8 col-lg-7 order-md-2 order-1">
                <div class="service-details__left">

                    <div class="service-details__img">
                        <img src="assets/images/services/pathology.jpg"
                            alt="Pathology Lab at Poddar Nursing Home Ghaziabad">
                    </div>

                    <h3 class="service-details__title-1">Pathology</h3>

                    <p class="service-details__text-1">
                        At <strong>Poddar Nursing Home, Ghaziabad</strong>, our Pathology department provides accurate laboratory diagnostics through modern equipment, experienced professionals, and reliable testing services that support timely diagnosis and effective medical treatment.
                    </p>

                    <p class="service-details__text-2">
                        From routine blood investigations to advanced diagnostic tests, our fully equipped pathology lab focuses on precision, quick reporting, and quality standards. We help doctors make informed treatment decisions while ensuring a smooth and convenient experience for every patient.
                    </p>

                    <ul class="service-details__points-list list-unstyled">

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Comprehensive blood tests, urine analysis, and routine health investigations with reliable laboratory reporting.</p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Modern pathology equipment ensuring accurate diagnosis, faster results, and dependable medical support.</p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Diagnostic services supporting preventive health checkups, chronic disease monitoring, and specialist consultations.</p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Quality-controlled testing with experienced technicians for safe, precise, and timely patient care.</p>
                        </li>

                    </ul>

                    <div class="service-details__img-box">
                        <div class="row">

                            <div class="col-xl-6">
                                <div class="service-details__img-box-single">
                                    <div class="service-details__img-box-content">

                                        <div class="service-details__img-box-content-icon-and-title">
                                            <div class="service-details__img-box-content-icon">
                                                <span class="icon-healthcare"></span>
                                            </div>

                                            <h3 class="service-details__img-box-content-title">
                                                Accurate Testing
                                            </h3>
                                        </div>

                                        <p class="service-details__img-box-content-text">
                                            Our pathology specialists deliver precise laboratory testing through modern
                                            technology, quality-controlled procedures, and dependable reporting for better treatment decisions.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="service-details__img-box-single">
                                    <div class="service-details__img-box-content">

                                        <div class="service-details__img-box-content-icon-and-title">
                                            <div class="service-details__img-box-content-icon">
                                                <span class="icon-customer-review"></span>
                                            </div>

                                            <h3 class="service-details__img-box-content-title">
                                                Quick Reports
                                            </h3>
                                        </div>

                                        <p class="service-details__img-box-content-text">
                                            We focus on timely reporting, patient convenience, and trusted diagnostic
                                            services to support faster consultations and effective medical care.
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="service-details__faq-box">

                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">

                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>What pathology tests are available?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            We offer blood tests, urine analysis, routine laboratory investigations, and
                                            diagnostic tests that support accurate medical evaluation and treatment.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How quickly are test reports available?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Many routine reports are delivered promptly, while specialized tests are
                                            completed within the recommended reporting time for accurate diagnosis.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Do I need a doctor's prescription for testing?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Some tests may require a doctor's recommendation, while routine health checkup
                                            investigations can be guided by our medical team when appropriate.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Can I book a pathology appointment?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, you can schedule your pathology tests in advance for convenient sample
                                            collection and timely laboratory services.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Service Details End-->




<?php
$content = ob_get_clean();
require 'layout.php';
?>