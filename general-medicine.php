<?php
ob_start();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>General Medicine</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>General Medicine</li>
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
                        <img src="assets/images/services/general-medicine.jpg" alt="General Medicine at Poddar Nursing Home Ghaziabad">
                    </div>

                    <h3 class="service-details__title-1">General Medicine</h3>

                    <p class="service-details__text-1">
                        At <strong>Poddar Nursing Home, Ghaziabad</strong>, our General Medicine department provides comprehensive healthcare for adults, focusing on early diagnosis, effective treatment, and preventive care. Our experienced physicians manage everyday illnesses as well as chronic medical conditions with personalized attention.
                    </p>

                    <p class="service-details__text-2">
                        We believe that timely medical consultation plays an essential role in maintaining long-term health. From fever, infections, and respiratory illnesses to diabetes, hypertension, and thyroid disorders, our specialists deliver evidence-based treatment supported by modern diagnostic facilities in a comfortable patient-centered environment.
                    </p>

                    <ul class="service-details__points-list list-unstyled">

                        <li>
                            <div class="icon"><span class="icon-check"></span></div>
                            <p>Diagnosis and treatment for common illnesses and seasonal infections.</p>
                        </li>

                        <li>
                            <div class="icon"><span class="icon-check"></span></div>
                            <p>Expert management of diabetes, blood pressure, and thyroid disorders.</p>
                        </li>

                        <li>
                            <div class="icon"><span class="icon-check"></span></div>
                            <p>Routine health checkups and preventive healthcare consultations.</p>
                        </li>

                        <li>
                            <div class="icon"><span class="icon-check"></span></div>
                            <p>Personalized treatment plans with continuous medical follow-up.</p>
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
                                                Comprehensive Care
                                            </h3>
                                        </div>

                                        <p class="service-details__img-box-content-text">
                                            Our physicians provide complete medical care through accurate diagnosis,
                                            timely treatment, preventive guidance, and personalized support for
                                            better long-term health.
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
                                                Patient-Centered Care
                                            </h3>
                                        </div>

                                        <p class="service-details__img-box-content-text">
                                            We focus on compassionate consultations, personalized treatment plans,
                                            regular follow-ups, and trusted medical support for every patient and family.
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
                                    <h4>When should I visit a General Medicine doctor?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Visit our physician for fever, cough, fatigue, infections, stomach issues,
                                            high blood pressure, diabetes management, or whenever you need a complete
                                            health evaluation.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Do you provide treatment for chronic diseases?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, our specialists provide long-term care for diabetes, hypertension,
                                            thyroid disorders, and other chronic medical conditions through personalized
                                            treatment and regular follow-up.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Are routine health checkups available?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, we offer preventive health consultations and routine medical checkups
                                            supported by modern diagnostic facilities for early detection of health concerns.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Can I book an appointment in advance?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, you can schedule your consultation with our General Medicine specialists
                                            for convenient and timely medical care.
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