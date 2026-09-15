<?php
ob_start();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>General Surgery</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>General Surgery</li>
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
                        <img src="assets/images/services/general-surgery.jpg" alt="General Surgery at Poddar Nursing Home Ghaziabad">
                    </div>

                    <h3 class="service-details__title-1">General Surgery</h3>

                    <p class="service-details__text-1">
                        At <strong>Poddar Nursing Home, Ghaziabad</strong>, our General Surgery department offers safe and effective surgical care with experienced surgeons, modern operation theatres, and personalized treatment for a wide range of medical conditions.
                    </p>

                    <p class="service-details__text-2">
                        From minor procedures to advanced surgical treatments, we focus on accurate diagnosis, careful planning, and smooth recovery. Our team follows high standards of safety and patient-centered care to deliver reliable surgical outcomes in a comfortable healthcare environment.
                    </p>

                    <ul class="service-details__points-list list-unstyled">

                        <li>
                            <div class="icon"><span class="icon-check"></span></div>
                            <p>Expert care for minor and major surgical procedures.</p>
                        </li>

                        <li>
                            <div class="icon"><span class="icon-check"></span></div>
                            <p>Modern operation theatre with advanced surgical equipment.</p>
                        </li>

                        <li>
                            <div class="icon"><span class="icon-check"></span></div>
                            <p>Accurate diagnosis and personalized treatment planning.</p>
                        </li>

                        <li>
                            <div class="icon"><span class="icon-check"></span></div>
                            <p>Comprehensive pre-operative and post-operative care.</p>
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
                                                Safe Surgical Care
                                            </h3>
                                        </div>

                                        <p class="service-details__img-box-content-text">
                                            Our surgeons combine modern techniques, careful planning, and personalized
                                            treatment to provide safe procedures and smoother recovery for every patient.
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
                                                Better Recovery Support
                                            </h3>
                                        </div>

                                        <p class="service-details__img-box-content-text">
                                            We focus on compassionate care, regular follow-ups, and dedicated medical
                                            support to help patients recover comfortably after surgery.
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
                                    <h4>What conditions require General Surgery?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            General Surgery treats conditions such as hernia, gallbladder problems,
                                            appendicitis, cysts, piles, and other surgical conditions requiring expert care.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Do you perform minimally invasive procedures?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, our surgical team offers modern techniques, including minimally invasive
                                            procedures whenever suitable for faster recovery and reduced discomfort.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Is pre-operative evaluation available?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, we provide complete pre-operative assessment, diagnostic testing, and
                                            personalized guidance before every surgical procedure.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Can I schedule a surgical consultation?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, you can book a consultation with our General Surgery specialists for
                                            evaluation, treatment planning, and timely surgical care.
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