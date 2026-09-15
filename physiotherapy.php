<?php
ob_start();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>Physiotherapy</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>Physiotherapy</li>
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
                <?php include('include/service-sidebar.php'); ?>
            </div>
            <div class="col-xl-8 col-lg-7 order-md-2 order-1">
                <div class="service-details__left">

                    <div class="service-details__img">
                        <img src="assets/images/services/physiotherapy.jpg"
                            alt="Physiotherapy at Poddar Nursing Home Ghaziabad">
                    </div>

                    <h3 class="service-details__title-1">Physiotherapy</h3>

                    <p class="service-details__text-1">
                        At <strong>Poddar Nursing Home, Ghaziabad</strong>, our Physiotherapy department provides personalized rehabilitation and pain management through experienced therapists, modern therapy techniques, and customized treatment plans that help patients regain strength, mobility, and confidence.
                    </p>

                    <p class="service-details__text-2">
                        Whether you are recovering from surgery, a sports injury, joint pain, or neurological conditions, our team focuses on improving movement, reducing discomfort, and restoring independence through evidence-based physiotherapy programs designed for long-term recovery and overall well-being.
                    </p>

                    <ul class="service-details__points-list list-unstyled">

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Personalized rehabilitation programs for post-surgery recovery, injuries, and long-term pain management.</p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Expert treatment for back pain, neck pain, joint stiffness, and muscle-related conditions.</p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Sports injury rehabilitation and mobility improvement through advanced therapeutic techniques.</p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Continuous progress monitoring and personalized exercise guidance for lasting recovery and better movement.</p>
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
                                                Pain Relief Care
                                            </h3>
                                        </div>

                                        <p class="service-details__img-box-content-text">
                                            Our therapists use modern physiotherapy techniques to reduce pain,
                                            improve flexibility, and help patients return to their daily routine comfortably.
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
                                                Better Mobility
                                            </h3>
                                        </div>

                                        <p class="service-details__img-box-content-text">
                                            We provide guided rehabilitation, regular follow-ups, and personalized
                                            exercises to restore strength, balance, and long-term mobility.
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
                                    <h4>When should I visit a Physiotherapist?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Visit our Physiotherapy department if you experience persistent pain,
                                            stiffness, sports injuries, post-surgery weakness, or difficulty in movement.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Do you provide post-surgery rehabilitation?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, we offer personalized rehabilitation programs that help patients
                                            recover safely after orthopedic, neurological, and other surgical procedures.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Can physiotherapy help with back and neck pain?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, our therapists provide targeted exercises, manual therapy, and
                                            rehabilitation techniques to reduce pain and improve mobility effectively.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Can I book a Physiotherapy consultation?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, you can schedule a consultation with our physiotherapy specialists
                                            for personalized assessment, treatment planning, and guided rehabilitation.
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