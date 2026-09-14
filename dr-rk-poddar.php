<?php
ob_start();
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h3>Dr. R. K. Poddar</h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>Dr. R. K. Poddar</li>
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
                            <img src="assets/images/team/dr-rk-poddar.jpg"
                                alt="Dr. R. K. Poddar - General Surgeon in Ghaziabad">
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-7">
                    <div class="team-details__top-right">
                        <div class="team-details__client-box">

                            <h1 class="team-details__client-name">Dr. R. K. Poddar</h1>

                            <h5 class="team-details__client-sub-title my-3">
                                Managing Director | General Surgeon
                            </h5>

                            <p class="team-details__client-text">
                                Dr. R. K. Poddar is the Managing Director of Poddar Nursing Home Pvt. Ltd.
                                and an experienced General Surgeon dedicated to ethical, patient-centred,
                                and high-quality surgical care. With decades of clinical expertise, he is
                                committed to providing safe treatment, accurate diagnosis, and compassionate
                                healthcare for every patient.</p>

                            <ul class="team-details__client-address list-unstyled">
                                <li>
                                    <h5>Qualification: MBBS, MS (General Surgery)</h5>
                                    <h5>Specialization: General Surgery</h5>
                                    <h5>Experience: Over 50 Years</h5>
                                    <h5>Consultation: Mon – Sat | 10:00 AM – 2:00 PM</h5>
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
                            Dr. R. K. Poddar has been serving patients with trusted surgical care for over
                            five decades and has played a vital role in the growth of Poddar Nursing Home
                            since its establishment. His approach combines clinical expertise, ethical
                            medical practice, and personalized patient care to ensure the best possible
                            treatment outcomes. Supported by modern surgical facilities, he continues to
                            provide comprehensive care with a strong focus on patient safety and long-term
                            well-being.</p>

                        <div class="team-details__practice-area">

                            <h4 class="team-details__practice-area-title">Practice Area</h4>

                            <div class="team-details__practice-area-list-box">

                                <ul class="list-unstyled team-details__practice-area-list">

                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>General Surgical Procedures</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Hernia Treatment</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Gallbladder Surgery</p>
                                        </div>
                                    </li>

                                </ul>

                                <ul class="list-unstyled team-details__practice-area-list team-details__practice-area-list--two">

                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Minor & Major Surgeries</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Pre & Post Operative Care</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon"></div>
                                        <div class="text">
                                            <p>Patient-Centred Surgical Care</p>
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