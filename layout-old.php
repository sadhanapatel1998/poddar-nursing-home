<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'seo.php'; ?>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars($pageMeta['description']); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageMeta['keywords']); ?>">
    <!-- Author -->
    <meta name="author" content="GoVacanzaDmc Travel & Tours">
    <!-- Robots -->
    <meta name="robots" content="<?php echo $pageMeta['robots']; ?>">
    <!-- Canonical URL (Optional) -->
    <?php if (!empty($pageMeta['canonical'])): ?>
        <link rel="canonical" href="<?php echo $pageMeta['canonical']; ?>">
    <?php endif; ?>
    <!-- Page Title -->
    <title><?php echo htmlspecialchars($pageMeta['title']); ?></title>
    <!-- Apple Touch Icon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png"> -->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">

    <!-- Theme Settings Js -->
    <script src="assets/js/theme-script.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main.css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.css">
    <!-- Fontawesome Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
    <!-- Owlcarousel CSS -->
    <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/plugins/slick/slick.css">
    <!-- Iconsax CSS -->
    <link rel="stylesheet" href="assets/css/iconsax.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- <a href="https://dreamstour.dreamstechnologies.com/cdn-cgi/content?id=vFdWL28YbCUWdvMv98syXomuA0xqSm66.oMr4VRh2Ro-1769674379-1.1.1.1-Gp98zAP8rqXFdpeGjeNwWW57PURqfelmNnpUox3hJVU" aria-hidden="true" rel="nofollow noopener" style="display: none !important; visibility: hidden !important"></a> -->
    <!-- Loader -->
    <!-- <div id="loader-wrapper">
        <div id="loader">
            <span class="loader-line"></span>
        </div>
    </div> -->
    <!-- /Loader -->

    <?php require_once("include/header.php"); ?>

    <?= $content ?? ''; ?>

    <?php require_once('include/footer.php') ?>



    <!-- Cursor -->
    <div class="xb-cursor tx-js-cursor">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>
    <!-- /Cursor -->

    <div class="back-to-top">
        <a class="back-to-top-icon align-items-center justify-content-center d-flex" href="#top"><i class="fa-solid fa-arrow-up"></i></a>
    </div>

    <!-- Jquery JS -->
    <script data-cfasync="false" src="assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>

    <!-- Wow JS -->
    <script src="assets/js/wow.min.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>

    <!-- MeanMenu Js -->
    <script src="assets/js/jquery.meanmenu.min.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>

    <!-- Swiper Js -->
    <script src="assets/plugins/owlcarousel/owl.carousel.min.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>

    <!-- Fancybox JS -->
    <script src="assets/plugins/fancybox/jquery.fancybox.min.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>

    <!-- Slick Slider -->
    <script src="assets/plugins/slick/slick.min.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>

    <!-- Counter JS -->
    <script src="assets/js/jquery.counterup.min.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>
    <script src="assets/js/jquery.waypoints.min.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>

    <!-- Datepicker Core JS -->
    <script src="assets/plugins/moment/moment.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>

    <!-- cursor JS -->
    <script src="assets/js/cursor.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>

    <!-- Script JS -->
    <script src="assets/js/script.js" type="49baa4b04424b3b6bc75e5b1-text/javascript"></script>

    <script src="assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="49baa4b04424b3b6bc75e5b1-|49" defer=""></script>
</body>

</body>

</html>