<?php
ob_start();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>Laparoscopic Surgery</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>Laparoscopic Surgery</li>
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
                        <img src="assets/images/services/laparoscopic-surgery.jpg"
                            alt="Laparoscopic Surgery at Poddar Nursing Home Ghaziabad">
                    </div>

                    <h3 class="service-details__title-1">Laparoscopic Surgery</h3>

                    <p class="service-details__text-1">
                        At <strong>Poddar Nursing Home, Ghaziabad</strong>, our Laparoscopic Surgery department provides advanced minimally invasive surgical care through experienced specialists, modern operation theatres, and precise treatment techniques designed for safer procedures and faster recovery.
                    </p>

                    <p class="service-details__text-2">
                        We specialize in laparoscopic procedures for hernia, gallstones, gastrointestinal diseases, and laser treatments for piles, fissure, fistula, sinus, and varicose veins. Our team focuses on accurate diagnosis, reduced pain, smaller incisions, and personalized care to help patients return to their daily routine with confidence.
                    </p>

                    <ul class="service-details__points-list list-unstyled">

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Advanced minimally invasive procedures with smaller incisions, less pain, and quicker recovery.</p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Expert treatment for hernia, gallstones, and gastrointestinal conditions using modern laparoscopic techniques.</p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Laser procedures for piles, fissure, fistula, sinus, and varicose veins with greater precision.</p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Comprehensive pre-operative guidance and post-operative follow-up for safer healing and better outcomes.</p>
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
                                                Precision Surgery
                                            </h3>
                                        </div>

                                        <p class="service-details__img-box-content-text">
                                            Our surgeons use advanced laparoscopic and laser techniques to deliver safer
                                            procedures, smaller incisions, and faster recovery with personalized patient care.
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
                                                Faster Recovery
                                            </h3>
                                        </div>

                                        <p class="service-details__img-box-content-text">
                                            We provide continuous follow-ups, recovery guidance, and compassionate support
                                            to help patients heal comfortably and resume normal life sooner.
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
                                    <h4>What is laparoscopic surgery?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Laparoscopic surgery is a minimally invasive procedure performed through small
                                            incisions, helping reduce pain, minimize scars, and support faster recovery.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Which conditions can be treated laparoscopically?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            We provide laparoscopic treatment for hernia, gallstones, gastrointestinal
                                            conditions, and laser procedures for piles, fissure, fistula, and varicose veins.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Is laparoscopic surgery safer than open surgery?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            In suitable cases, laparoscopic surgery offers smaller incisions, less pain,
                                            reduced hospital stay, and quicker recovery under expert surgical care.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Can I book a laparoscopic consultation?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, you can schedule a consultation with our laparoscopic surgery specialists
                                            for expert evaluation, treatment planning, and advanced surgical care.
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