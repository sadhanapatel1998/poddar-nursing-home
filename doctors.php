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
                       <h3>Our Doctors</h3>
                       <div class="thm-breadcrumb__inner">
                           <ul class="thm-breadcrumb list-unstyled">
                               <li><a href="index.php">Home</a></li>
                               <li><span class="fas fa-angle-right"></span></li>
                               <li>Our Doctors</li>
                           </ul>
                       </div>
                   </div>
               </div>
           </section>
           <!--Page Header End-->

           <!--Team Start-->
           <section class="team-page">
               <div class="container">
                   <div class="main-service-one__top d-block">
                       <div class="section-title sec-title-animation animation-style1 text-center">
                           <div class="section-title__tagline-box">
                               <span class="icon-health-professional"></span>
                               <p class="section-title__tagline">Our Doctors</p>
                           </div>
                           <h2 class="section-title__title title-animation">
                               Meet Our Expert
                               <span>Medical Team</span>
                           </h2>
                       </div>
                   </div>

                   <div class="row filter-layout justify-content-center">
                       <?php foreach ($doctors as $doctor): ?>
                           <div class="col-xl-3 col-lg-6 col-md-6">
                               <div class="team-two__single">
                                   <div class="team-two__img-box">
                                       <div class="team-two__img">
                                           <img src="<?= $doctor['image']; ?>" alt="<?= $doctor['name']; ?>">
                                       </div>
                                   </div>
                                   <div class="team-two__content">
                                       <h3 class="team-two__name">
                                           <a href="<?= $doctor['link']; ?>">
                                               <?= $doctor['name']; ?>
                                           </a>
                                       </h3>
                                       <p class="team-two__designation">
                                           <?= $doctor['designation']; ?>
                                       </p>
                                   </div>
                               </div>
                           </div>
                       <?php endforeach; ?>
                   </div>
               </div>
           </section>
           <!--Team One-->

           <?php
            $content = ob_get_clean();
            require 'layout.php';
            ?>