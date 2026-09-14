<?php
ob_start();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>Dr. Madhu Poddar</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>Dr. Madhu Poddar</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Team Details Start-->
<section class="team-details">
    <div class="container">

        <div class="team-details__top">
            <div class="row">

                <div class="col-xl-4 col-lg-5">
                    <div class="team-details__top-left">
                        <div class="team-details__img-1">
                            <img src="assets/images/team/dr-madhu-poddar.jpg"
                                alt="Dr. Madhu Poddar - Consultant Physician in Ghaziabad">
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-7">
                    <div class="team-details__top-right">
                        <div class="team-details__client-box">

                            <h1 class="team-details__client-name">Dr. Madhu Poddar</h1>

                            <h5 class="team-details__client-sub-title my-3">
                                Director | Consultant Physician | Internal Medicine
                            </h5>

                            <p class="team-details__client-text">
                                Dr. Madhu Poddar is the Director and Consultant Physician at Poddar Nursing
                                Home Pvt. Ltd., specializing in Internal Medicine. With decades of clinical
                                expertise, she is committed to accurate diagnosis, evidence-based treatment,
                                preventive healthcare, and compassionate patient care for both acute and
                                chronic medical conditions.</p>

                            <ul class="team-details__client-address list-unstyled">
                                <li>
                                    <h5>Qualification: MBBS, MD (Medicine), FICP, FIAMS</h5>
                                    <h5>Specialization: Internal Medicine & Consultant Physician</h5>
                                    <h5>Experience: Over 50 Years</h5>
                                    <h5>Consultation: Mon – Sat | 09:00 AM – 08:00 PM</h5>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="team-details__bottom">
            <div class="row">

                <div class="col-xl-11 col-lg-11">
                    <div class="team-details__bottom-left">

                        <h3 class="team-details__bottom-title">Biography</h3>

                        <p class="team-details__bottom-text">
                            Dr. Madhu Poddar has dedicated over five decades to providing trusted Internal
                            Medicine care in Ghaziabad through Poddar Nursing Home. Her patient-first
                            approach combines clinical excellence, preventive healthcare, and personalized
                            treatment plans to help patients manage everyday illnesses as well as chronic
                            medical conditions while promoting long-term health and well-being. 
                            </p>

                        <div class="team-details__practice-area">

                            <h4 class="team-details__practice-area-title">Practice Area</h4>

                            <div class="team-details__practice-area-list-box">

                                <ul class="list-unstyled team-details__practice-area-list">

                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Internal Medicine</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Diabetes Management</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Hypertension Care</p>
                                        </div>
                                    </li>

                                </ul>

                                <ul class="list-unstyled team-details__practice-area-list team-details__practice-area-list--two">

                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Preventive Health Checkups</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Chronic Disease Management</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Comprehensive Medical Care</p>
                                        </div>
                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!--Team Details End-->


<?php
$content = ob_get_clean();
require 'layout.php';
?>