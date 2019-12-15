<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Direo Template</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,700" rel="stylesheet">
    <!-- inject:css-->
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/brands.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/style.css">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $BASE_URL;?>/images/fevicon.png">
</head>

<body>
    <section class="intro-wrapper bgimage overlay overlay--dark">
        <?php echo $this->element('main_menu'); ?>
        <?php echo $this->element('homepage/search_area'); ?>
    </section><!-- ends: .intro-wrapper -->
    
    <?php echo $this->fetch('content'); ?>
    
    <?php echo $this->element('footer'); ?>
    
    <!-- inject:js-->
    <script src="<?php echo $BASE_URL;?>/js/jquery/jquery-1.12.3.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/bootstrap/popper.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/jquery.barrating.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/jquery.counterup.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/select2.full.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/slick.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/main.js"></script>
    <!-- endinject-->
</body>

</html>