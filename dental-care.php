<?php
ob_start();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>Dental Care</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>Dental Care</li>
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
                        <img src="assets/images/services/dental-care.jpg"
                            alt="Dental Care at Poddar Nursing Home Ghaziabad">
                    </div>

                    <h3 class="service-details__title-1">Dental Care</h3>

                    <p class="service-details__text-1">
                        At <strong>Poddar Nursing Home, Ghaziabad</strong>, our Dental Care department provides comprehensive oral healthcare through experienced dentists, modern equipment, and personalized treatment plans that help patients maintain healthy teeth, strong gums, and confident smiles.
                    </p>

                    <p class="service-details__text-2">
                        Whether you need a routine dental checkup, tooth filling, root canal treatment, teeth cleaning, or preventive oral care, our specialists focus on accurate diagnosis, comfortable treatment, and long-term dental wellness while ensuring a safe and patient-friendly experience.
                    </p>

                    <ul class="service-details__points-list list-unstyled">

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Routine dental checkups, preventive care, and oral health guidance for healthier teeth and gums.</p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Expert treatment for tooth decay, cavities, root canal procedures, and dental restorations.</p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Professional teeth cleaning, gum care, and personalized dental hygiene recommendations for lasting oral wellness.</p>
                        </li>

                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <p>Comfortable patient-centered treatment with modern equipment and complete follow-up support after procedures.</p>
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
                                                Healthy Smiles
                                            </h3>
                                        </div>

                                        <p class="service-details__img-box-content-text">
                                            Our dental specialists combine modern techniques, gentle care, and accurate
                                            treatment to help patients achieve healthier teeth and confident smiles.
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
                                                Gentle Treatment
                                            </h3>
                                        </div>

                                        <p class="service-details__img-box-content-text">
                                            We provide comfortable consultations, personalized care, and regular follow-ups
                                            to support long-term oral health for every patient.
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
                                    <h4>When should I visit a dentist?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Visit our Dental Care department for tooth pain, cavities, gum bleeding,
                                            sensitivity, routine checkups, or preventive oral health consultations.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Do you provide root canal treatment?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, we offer root canal treatment, tooth fillings, and restorative dental
                                            procedures using modern techniques for comfortable care.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Are teeth cleaning services available?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, our specialists provide professional teeth cleaning, gum care, and
                                            preventive treatments to maintain healthy oral hygiene.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Can I book a dental consultation?</h4>
                                </div>

                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, you can schedule an appointment with our dental specialists for
                                            personalized consultation, diagnosis, and complete oral healthcare.
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